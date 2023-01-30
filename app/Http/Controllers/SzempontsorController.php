<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreSzempontsorRequest;
use App\Http\Resources\SzempontsorResource;
use App\Models\Szempontsor;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SzempontsorController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->iskola_id=='1') {
            return SzempontsorResource::collection(
                Szempontsor::orderBy('iskola_id','asc')
                ->orderBy('megnevezes','asc')
                ->get());
        } else {
            return SzempontsorResource::collection(
                Szempontsor::where('iskola_id', Auth::user()->iskola_id)
                ->orderBy('megnevezes','asc')
                ->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSzempontsorRequest $request)
    {
        $request->validated();

        $szempontsor = Szempontsor::create([
            
            'megnevezes' => $request->megnevezes,
            'iskola_id' => $request->iskola_id,
            'lezarva' => $request->lezarva
        ]);

        return new SzempontsorResource($szempontsor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Szempontsor $szempontsor)
    {
        return $this->isNotAuthorized($szempontsor) ? $this->isNotAuthorized($szempontsor) : new SzempontsorResource($szempontsor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Szempontsor $szempontsor)
    {
        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $szempontsor->iskola_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        }

        $szempontsor->update($request->all());

        return new SzempontsorResource($szempontsor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Szempontsor $szempontsor)
    {
        return $this->isNotAuthorized($szempontsor) ? $this->isNotAuthorized($szempontsor) : $szempontsor->delete();
    }

    private function isNotAuthorized($szempontsor)
    {
        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $szempontsor->iskola_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        }
        return;
    }
}

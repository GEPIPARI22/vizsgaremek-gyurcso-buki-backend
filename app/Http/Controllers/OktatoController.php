<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreOktatoRequest;
use App\Http\Resources\OktatoResource;
use App\Models\Oktato;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OktatoController extends Controller
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
            return OktatoResource::collection(
                oktato::orderBy('iskola_id')
                ->orderBy('vezeteknev','asc')
                ->orderBy('keresztnev','asc')
                ->orderBy('om_azonosito','asc')
                ->get());
                //->paginate(5));
        } else {
            return OktatoResource::collection(
                oktato::where('iskola_id', Auth::user()->iskola_id)
                ->orderBy('vezeteknev','asc')
                ->orderBy('keresztnev','asc')
                ->orderBy('om_azonosito','asc')
                ->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOktatoRequest $request)
    {
        $request->validated();

        $oktato = Oktato::create([
            'vezeteknev' => $request->vezeteknev,
            'keresztnev' => $request->keresztnev,
            'om_azonosito' => $request->om_azonosito,
            'iskola_id' => $request->iskola_id,
            'munkakor_id' => $request->munkakor_id,
            'vegzettsegek' => $request->vegzettsegek,
            'tovabbkepzesek' => $request->tovabbkepzesek,
            'oneletrajz' => $request->oneletrajz
        ]);

        return new OktatoResource($oktato);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Oktato $oktato)
    {
        return $this->isNotAuthorized($oktato) ? $this->isNotAuthorized($oktato) : new oktatoResource($oktato);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oktato $oktato)
    {
        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $oktato->iskola_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        }

        $oktato->update($request->all());

        return new OktatoResource($oktato);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oktato $oktato)
    {
        return $this->isNotAuthorized($oktato) ? $this->isNotAuthorized($oktato) : $oktato->delete();
    }

    private function isNotAuthorized($oktato)
    {
        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $oktato->iskola_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        }
        return;
    }
}

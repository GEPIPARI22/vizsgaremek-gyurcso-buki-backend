<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreSzempontRequest;
use App\Http\Resources\SzempontResource;
use App\Models\Szempont;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SzempontController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SzempontResource::collection(
            Szempont::get()
        );
    }

    public function index2($szempontsor)
    {

        return SzempontResource::collection(
            Szempont::where('szempontsor_id', $szempontsor)->get()
        );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSzempontRequest $request)
    {
        $request->validated();

        $szempont = Szempont::create([
            
            'szempontsor_id' => $request->szempontsor_id,
            'terulet' => $request->terulet,
            'szempont' => $request->szempont,
            'magyarazat' => $request->magyarazat,
            'kiegeszites' => $request->kiegeszites,
            'kapcsolodo' => $request->kapcsolodo,
            'adatforras' => $request->adatforras,
            'ertek' => $request->ertek,
            'sulyszorzo' => $request->sulyszorzo,
            'sulyozott' => $request->sulyozott,
        ]);

        return new SzempontResource($szempont);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Szempont $szempont)
    {
        return new SzempontResource($szempont);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Szempont $szempont)
    {
        $szempont->update($request->all());
        return new SzempontResource($szempont);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Szempont $szempont)
    {
        return $szempont->delete();
    }
}
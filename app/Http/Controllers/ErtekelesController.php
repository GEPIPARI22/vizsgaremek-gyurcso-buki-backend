<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreErtekelesRequest;
use App\Http\Resources\ErtekelesResource;
use App\Models\Ertekeles;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ErtekelesController extends Controller
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
            return ErtekelesResource::collection(
                ertekeles::
                join('oktatos','oktatos.id', '=', 'ertekeles.oktato_id')
                ->orderBy('oktatos.iskola_id', 'desc')
                ->select('ertekeles.*')
                ->get());
            /* return ErtekelesResource::collection(
                ertekeles::get()); */
        } else {
            return ErtekelesResource::collection(
                ertekeles::join('oktatos','ertekeles.oktato_id', '=', 'oktatos.id')
                -> where('oktatos.iskola_id', Auth::user()->iskola_id)
                -> get());
        }
    }

    public function index2()
    {
        if (Auth::user()->iskola_id=='1') {
            return ErtekelesResource::collection(
                ertekeles::get());
        } else {
            return ErtekelesResource::collection(
                ertekeles::join('oktatos','ertekeles.oktato_id', '=', 'oktatos.id')
                -> where('oktatos.iskola_id', Auth::user()->iskola_id)
                -> get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreErtekelesRequest $request)
    {
        $request->validated();

        $ertekeles = Ertekeles::create([
            'oktato_id' => $request->oktato_id,
            'szempontsor_id' => $request->szempontsor_id,
            'idopont' => $request->idopont,
            'terulet1' => $request->terulet1,
            'terulet2' => $request->terulet2,
            'terulet3' => $request->terulet3,
            'terulet4' => $request->terulet4,
            'terulet5' => $request->terulet5,
            'terulet6' => $request->terulet6,
            'terulet7' => $request->terulet7,
            'terulet8' => $request->terulet8,
            'terulet9' => $request->terulet9,
            'terulet10' => $request->terulet10,
            'lezarva' => $request->lezarva
        ]);

        return new ErtekelesResource($ertekeles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ertekeles $ertekele)
    {
        return $this->isNotAuthorized($ertekele) ? $this->isNotAuthorized($ertekele) : new ErtekelesResource($ertekele);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ertekeles $ertekele)
    {
        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $ertekele->oktato->iskola_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        }

        $ertekele->update($request->all());

        return new ErtekelesResource($ertekele);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ertekeles $ertekele)
    {
        return $this->isNotAuthorized($ertekele) ? $this->isNotAuthorized($ertekele) : $ertekele->delete();
    }

    private function isNotAuthorized($ertekele)
    {

        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $ertekele->oktato->iskola_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        }
        return;
    }
}


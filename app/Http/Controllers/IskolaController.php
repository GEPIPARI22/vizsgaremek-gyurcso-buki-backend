<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIskolaRequest;
use App\Http\Resources\IskolaResource;
use App\Models\Iskola;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IskolaController extends Controller
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
            return IskolaResource::collection(
                iskola::get());
        } else {
            return IskolaResource::collection(
                iskola::where('id', Auth::user()->iskola_id)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIskolaRequest $request)
    {
        $request->validated();

        $iskola = Iskola::create([
            'nev' => $request->nev,
            'om_azonosito' => $request->om_azonosito,
            'iranyitoszam' => $request->iranyitoszam,
            'varos' => $request->varos,
            'utca' => $request->utca,
            'telefon' => $request->telefon,
            'email' => $request->email,
            'logo' => $request->logo,
            'fenykep' => $request->fenykep
        ]);

        return new IskolaResource($iskola);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Iskola $iskola)
    {
        return $this->isNotAuthorized($iskola) ? $this->isNotAuthorized($iskola) : new IskolaResource($iskola);
        //return new IskolaResource($iskola);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iskola $iskola)
    {
        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $iskola->id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);}

        $iskola->update($request->all());

        return new IskolaResource($iskola);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iskola $iskola)
    {
        return $this->isNotAuthorized($iskola) ? $this->isNotAuthorized($iskola) : $iskola->delete();
    }

    private function isNotAuthorized($iskola)
    {
        if(Auth::user()->iskola_id !== 1 and Auth::user()->iskola_id !== $iskola->id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        }
        return;
    }
}

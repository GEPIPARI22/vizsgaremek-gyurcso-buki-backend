<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreOraertekelesRequest;
use App\Http\Resources\OraertelkelesResource;
use App\Models\Oraertekeles;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OraertekelesController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OraertekelesResource::collection(
            //Iskola::where('user_id', Auth::user()->id)->get()
            Oraertekeles::get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOraertekelesRequest $request)
    {
        $request->validated();

        $oraertekeles = Oraertekeles::create([
            
            'oraertekeles' => $request->oraertekeles
        ]);

        return new OraertekelesResource($oraertekeles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Oraertekeles $oraertekeles)
    {
        return $this->isNotAuthorized($oraertekeles) ? $this->isNotAuthorized($oraertekeles) : new OraertekelesResource($oraertekeles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oraertekeles $oraertekeles)
    {
        /* if(Auth::user()->id !== $task->user_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        } */

        $oraertekeles->update($oraertekeles->all());

        return new OraertekelesResource($oraertekeles);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oraertekeles $oraertekeles)
    {
        return $this->isNotAuthorized($oraertekeles) ? $this->isNotAuthorized($oraertekeles) : $oraertekeles->delete();
    }

    private function isNotAuthorized($oraertekeles)
    {
       /*  if(Auth::user()->id !== $task->user_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        } */
        return;
    }
}
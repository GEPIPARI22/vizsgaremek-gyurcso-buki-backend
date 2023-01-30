<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreOralatogatasRequest;
use App\Http\Resources\OralatogatasResource;
use App\Models\Oralatogatas;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OralatogatasController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OralatogatasResource::collection(
            //Iskola::where('user_id', Auth::user()->id)->get()
            Oralatogatas::get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOralatogatasRequest $request)
    {
        $request->validated();

        $oralatogatas = Oralatogatas::create([
            
            'oralatogatas' => $request->oralatogatas
        ]);

        return new OralatogatasResource($oralatogatas);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Oralatogatas $oralatogatas)
    {
        return $this->isNotAuthorized($oralatogatas) ? $this->isNotAuthorized($oralatogatas) : new OralatogatasResource($oralatogatas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oralatogatas $oralatogatas)
    {
        /* if(Auth::user()->id !== $task->user_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        } */

        $oralatogatas->update($oralatogatas->all());

        return new OralatogatasResource($oralatogatas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oralatogatas $oralatogatas)
    {
        return $this->isNotAuthorized($oralatogatas) ? $this->isNotAuthorized($oralatogatas) : $oralatogatas->delete();
    }

    private function isNotAuthorized($oralatogatas)
    {
       /*  if(Auth::user()->id !== $task->user_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        } */
        return;
    }
}
<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreMunkakorRequest;
use App\Http\Resources\MunkakorResource;
use App\Models\Munkakor;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MunkakorController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MunkakorResource::collection(
            //Iskola::where('user_id', Auth::user()->id)->get()
            Munkakor::get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMunkakorRequest $request)
    {
        $request->validated();

        $munkakor = Munkakor::create([
            'munkakor' => $request->munkakor
        ]);

        return new MunkakorResource($munkakor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Munkakor $munkakor)
    {
        return $this->isNotAuthorized($munkakor) ? $this->isNotAuthorized($munkakor) : new MunkakorResource($munkakor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Munkakor $munkakor)
    {
        /* if(Auth::user()->id !== $task->user_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        } */

        $munkakor->update($request->all());

        return new MunkakorResource($munkakor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Munkakor $munkakor)
    {
        return $this->isNotAuthorized($munkakor) ? $this->isNotAuthorized($munkakor) : $munkakor->delete();
    }

    private function isNotAuthorized($munkakor)
    {
       /*  if(Auth::user()->id !== $task->user_id) {
            return $this->error('', 'Nincs jogosultsága a kérést végrehajtani.', 403);
        } */
        return;
    }
}
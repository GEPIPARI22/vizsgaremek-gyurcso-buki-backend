<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    use HttpResponses; 
    
    public function login(LoginUserRequest $request) {
        $request->validated($request->all());

        if(!Auth::attempt($request->only(['email','password']))){
            return $this->error('','Rossz név vagy jelszó.',401);
        }
        $user = User::where('email', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    public function register(StoreUserRequest $request) {
        $request->validated($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'vezeteknev' => $request->vezeteknev,
            'keresztnev' => $request->keresztnev,
            'iskola_id' => $request->iskola_id,
            'munkakor_id' => $request->munkakor_id,
            'jog_admin' => $request->jog_admin,
            'jog_ertekeles' => $request->jog_ertekeles,
            'jog_iras' => $request->jog_iras
        ]);
        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of '.$user->name)->plainTextToken
        ]);
    }

    public function logout() {
        Auth::user()->currentAccessToken()->delete();

        return $this->success([
            'message' => 'Sikeresen kilépett.'
        ]);
    }

    public function users()
    {
        if (Auth::user()->iskola_id=='1') {
            return UserResource::collection(
                User::get());
        } else {
            return UserResource::collection(
                User::where('iskola_id', Auth::user()->iskola_id)->get());
        }
    }

    public function show(User $id)
    {
        return new UserResource($id);
    }

    public function update(Request $request, User $user) 
    {
        $user->update($request->all());
        return new UserResource($user);
    }

    public function delete(User $user)
    {
        return $user->delete();
    }

    public function changePassword(Request $request, User $user)
    {
        $user->update($request->vezeteknev());
        return new UserResource($user);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\buyer;

use Auth;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::get();

        return ($user);
    }


    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($data)) {
            return response()->json(['error' => 'Unauthorised'], 401);
        } else {
            $token = auth()->user()->createToken('authToken')->accessToken;
            return response()->json(['token' => $token], 200);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //

        $request->validate([
            "name"=>'required',
            "email"=>'required|email',
            "password"=>'required',
            "cep"=>'required',
            "cpf"=>'required',
            "birth_date"=>'required',
            "address" => 'required',
            "number" => 'required',
            "phone" => 'required',
            "isAdmin"=>'required|boolean',
        ]);

        $data = $request->all();

        $newUser = User::create($data);
        $data["user_id"] = $newUser->id;

        if(!$data["isAdmin"]){
            $newBuyer = buyer::create($data);

            if($newUser && $newBuyer){
                return response()->json([
                    "message" => "Usuário criado com sucesso"
                ], 202);
            }else{
                return response()->json([
                    "message" => "Ocorreu um erro"
                ], 400);
            }
        }else{
            //TODO
            return response()->json([
                "message" => "Usuário criado com sucesso"
            ], 202);  
        }

        return response()->json([
            "message" => "Ocorreu um erro"
        ], 400);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        //
        // return response()->json([
        //     "message" => "records deleted"
        // ], 202);
    }
}

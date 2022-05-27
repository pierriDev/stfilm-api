<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebuyerRequest;
use App\Http\Requests\UpdatebuyerRequest;

use App\Models\buyer;
use App\Models\User;

use Hash;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buyer = buyer::get()->load("user");

        return ($buyer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebuyerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebuyerRequest $request)
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

        $data['password'] = Hash::make($data['password']);

        $newUser = User::create($data);
        $data["user_id"] = $newUser->id;

        $newBuyer = buyer::create($data);

        if($newUser && $newBuyer){
            return response()->json([
                "message" => "Usuário criado com sucesso"
            ], 200);
        }else{
            if($newUser){
                $newUser->destroy();
            }
            return response()->json([
                "message" => "Ocorreu um erro"
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show($buyerId)
    {
        //

        $buyer = buyer::find($buyerId)->load("user");

        return($buyer);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebuyerRequest  $request
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebuyerRequest $request, $buyerId)
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

        $data['password'] = Hash::make($data['password']);
        $buyer = buyer::find($buyerId);


        $buyer->update($data);
        $buyer->user->update($data);

        return response()->json([
            "message" => "Atualizado com Sucesso",
            "Buyer" => $buyer->load('user')
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy($buyerId)
    {
        //
        $buyer = buyer::find($buyerId);
        $user = User::find($buyer["user_id"]);

        if($user && $buyer){
            User::destroy($user["id"]);
            buyer::destroy($buyerId);
    
            return response()->json([
                "message" => "Deletado com Sucesso"
            ], 200);
        }else{
            return response()->json([
                "message" => "Usuario não Encontrado"
            ], 400);
        }

    }
}

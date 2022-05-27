<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;

use App\Models\Admin;
use App\Models\User;

use Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $admin = Admin::get()->load("user");

        return ($admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
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

        $newAdmin = Admin::create($data);

        if($newUser && $newAdmin){
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($adminId)
    {
        //
        $admin = Admin::find($adminId)->load("user");

        return($admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, $adminId)
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
        $admin = Admin::find($adminId);


        $admin->update($data);
        $admin->user->update($data);

        return response()->json([
            "message" => "Atualizado com Sucesso",
            "Admin" => $admin->load('user')
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($adminId)
    {
        //
        $admin = Admin::find($adminId);
        $user = User::find($admin["user_id"]);

        if($user && $admin){
            User::destroy($user["id"]);
            Admin::destroy($adminId);
    
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

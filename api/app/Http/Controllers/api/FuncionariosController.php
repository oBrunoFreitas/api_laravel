<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionariosController extends Controller
{
    public function index()
    {
        $data = Funcionario::all();
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = Funcionario::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        $data = Funcionario::findOrFail($id);
        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());  
        return response()->json($funcionario, 202);      
    }

    public function delete($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
        return response()->json($funcionario, 200);
    }
}

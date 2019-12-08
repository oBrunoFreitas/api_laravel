<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionariosController extends Controller
{
    public function index()
    {
        return Funcionario::all();
    }

    public function store(Request $request)
    {
        $data = Funcionario::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return Funcionario::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->update($request->all());        
    }

    public function delete($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
    }
}

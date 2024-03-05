<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller{

    public function index(){
        $empleados = Empleado::all();
        return $empleados;
    }
    public function store(Request $request){
        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->razon_social = $request->razon_social;
        $empleado->cedula = $request->cedula;
        $empleado->telefono = $request->telefono;
        $empleado->pais = $request->pais;
        $empleado->ciudad = $request->ciudad;
        $empleado->save();
    }
    public function show(string $id){
        $empleado = Empleado::findOrFail($id);
        return $empleado;
    }
    public function update(Request $request, string $id){
        $empleado = Empleado::findOrFail($id);
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->razon_social = $request->razon_social;
        $empleado->cedula = $request->cedula;
        $empleado->telefono = $request->telefono;
        $empleado->pais = $request->pais;
        $empleado->ciudad = $request->ciudad;

        $empleado->save();
        return $empleado;
    }
    public function destroy(string $id){
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return response()->json(['message' => 'Empleado eliminado correctamente'], 204);

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

use App\Models\Docente;
use App\Models\Profesiones;

class DocenteController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function insertarDocenteVista()
    {
        $profesiones = (new Profesiones)->get();

        return view('agregar_docente', compact('profesiones'));
    }

    public function insertarDocente(Request $request)
    {
        $docente = new Docente;
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->genero = $request->genero;
        $docente->estado_civil = $request->estado_civil;
        $docente->fecha_nacimiento = $request->fecha_nacimiento;
        $docente->edad = $request->edad;
        $docente->dui = $request->dui;
        $docente->nit = $request->nit;
        $docente->carnet_afp = $request->carnet_afp;
        $docente->carnet_seguro = $request->carnet_seguro;
        $docente->id_profesion = $request->id_profesion;
        $docente->correo = $request->correo;
        $docente->nacionalidad = $request->nacionalidad;
        $docente->fecha_ingreso = $request->fecha_ingreso;
        $docente->anios_servicio = $request->anios_servicio;
        $docente->tipo_contrato = $request->tipo_contrato;
        $docente->salario = $request->salario;
        $docente->save();
        return "Docente Agregado";
    }

    public function getAllDocentes(){

        $docente = Docente::all();

        //print_r($docente);
        return view('docentes', ['docente' => $docente]);
    }

    public function proximosJubilacion(){

        $docente = Docente::join('proximos_jubilacion', 'proximos_jubilacion.id_docente', '=', 'docentes.id_docente')
            ->select('docentes.nombres', 'docentes.apellidos', 'proximos_jubilacion.tiempo_restante')
            ->get();
    

        return view('docentes_a_jubilar', ['docente' => $docente]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Module;
use App\Models\Appointment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $modulos = Module::all();
        $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return view('index', compact('modulos', 'diassemana', 'meses'));
    }

    public function hoaxBuster()
    {
        $modulos = Module::all();
        $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return view('webpage.hoax-buster', compact('modulos', 'diassemana', 'meses'));
    }

    public function bookingVaccine(Module $modulo)
    {
        $modulos = Module::all();
        $cita = new Appointment();
        $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return view('webpage.booking-vaccine', compact('modulos', 'modulo', 'cita', 'diassemana', 'meses'));
    }

    public function conditions()
    {
        $modulos = Module::all();
        $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return view('webpage.conditions', compact('modulos', 'diassemana', 'meses'));
    }

    public function policy()
    {
        $modulos = Module::all();
        $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return view('webpage.policy', compact('modulos', 'diassemana', 'meses'));
    }

    public function admin()
    {
        if (Auth::check()) {
            $modulos = Module::latest()->paginate(5);
            $citas = Appointment::latest()->paginate(5);
            return view('admin.dashboard', compact('modulos', 'citas'));
        } else {
            return view('admin.login');
        }
    }
}

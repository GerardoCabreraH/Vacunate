<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Module;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Appointment::latest()->paginate(5);
        return view('admin.appointments.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$cita = new Appointment();
        return view('admin.appointments.create', compact('cita'));*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppointmentRequest $request)
    {
        $input = $request->all();
        $modulo = Module::find($input['module_id']);
        $modulo->cita()->create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'folio' => $input['folio'],
            'city' => $input['city'],
            'state' => $input['state'],
            'observations' => $input['observations'],
        ]);
        if ($input['city'] == $modulo->city && $input['state'] == $modulo->state) {
            return redirect()->route('index')->with('status', 'Fecha reservada con éxito');
        }
        else {
            return redirect()->route('index')->with('status', 'La ubicación debe de ser igual a la de tu credencial de elector');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $cita)
    {
        $diassemana = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        return view('admin.appointments.show', compact('cita','diassemana', 'meses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $cita)
    {
        $modulo = Module::find($cita->module_id);
        return view('admin.appointments.edit', compact('cita', 'modulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(AppointmentRequest $request, Appointment $cita)
    {
        $input = $request->all();
        $cita->update($input);
        return redirect()->route('appointments.index')->with('status', 'Cita modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $cita)
    {
        $cita->delete();
        return redirect()->route('appointments.index')->with('status', 'Cita eliminada con éxito');
    }
}

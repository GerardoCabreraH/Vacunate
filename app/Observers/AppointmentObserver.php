<?php

namespace App\Observers;

use App\Models\Appointment;
use Illuminate\Support\Str;

class AppointmentObserver
{
    /**
     * Handle the Appointment "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function creating(Appointment $cita)
    {
        $count = $cita->whereYear('created_at', '=', now()->year)->count();
        $code = str_pad(++$count, 3, "0", STR_PAD_LEFT);
        $cita->code = 'C' . $code . date('y');
        $cita->slug = Str::slug($cita->code);
    }

    /**
     * Handle the Appointment "created" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function created(Appointment $appointment)
    {
        //
    }

    /**
     * Handle the Appointment "updated" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function updated(Appointment $appointment)
    {
        //
    }

    /**
     * Handle the Appointment "deleting" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleting(Appointment $cita)
    {
        $count = $cita->whereYear('created_at', '=', now()->year)->count();
        --$count;
    }

    /**
     * Handle the Appointment "deleted" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function deleted(Appointment $appointment)
    {
        //
    }

    /**
     * Handle the Appointment "restored" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function restored(Appointment $appointment)
    {
        //
    }

    /**
     * Handle the Appointment "force deleted" event.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return void
     */
    public function forceDeleted(Appointment $appointment)
    {
        //
    }
}

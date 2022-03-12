<?php

namespace App\Observers;

use App\Models\Module;
use Illuminate\Support\Str;

class ModuleObserver
{
    /**
     * Handle the Module "creating" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function creating(Module $modulo)
    {
        $count = $modulo->whereYear('created_at', '=', now()->year)->count();
        $code = str_pad(++$count, 3, "0", STR_PAD_LEFT);
        $modulo->code = 'M' . $code . date('y');
        $modulo->slug = Str::slug($modulo->code);
    }

    /**
     * Handle the Module "created" event.
     *
     * @param  \App\Models\Module  $module
     * @return void
     */
    public function created(Module $module)
    {
        //
    }

    /**
     * Handle the Module "updated" event.
     *
     * @param  \App\Models\Module  $module
     * @return void
     */
    public function updated(Module $module)
    {
        //
    }

    /**
     * Handle the Module "deleting" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleting(Module $modulo)
    {
        $count = $modulo->whereYear('created_at', '=', now()->year)->count();
        --$count;
    }

    /**
     * Handle the Module "deleted" event.
     *
     * @param  \App\Models\Module  $module
     * @return void
     */
    public function deleted(Module $module)
    {
        //
    }

    /**
     * Handle the Module "restored" event.
     *
     * @param  \App\Models\Module  $module
     * @return void
     */
    public function restored(Module $module)
    {
        //
    }

    /**
     * Handle the Module "force deleted" event.
     *
     * @param  \App\Models\Module  $module
     * @return void
     */
    public function forceDeleted(Module $module)
    {
        //
    }
}

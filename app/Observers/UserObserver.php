<?php

namespace App\Observers;

use App\Models\Ordenes;
use App\Models\LogOrden;

class UserObserver
{
    /**
     * Handle the Ordenes "created" event.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return void
     */
    public function created(Ordenes $ordenes)
    {
        LogOrden::create(["idOrden"=>$ordenes->id,"accion"=>"Orden Creada"]);

    }

    /**
     * Handle the Ordenes "updated" event.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return void
     */
    public function updated(Ordenes $ordenes)
    {
        LogOrden::create(["idOrden"=>$ordenes->id,"accion"=>"Orden Modificada"]);

    }

    /**
     * Handle the Ordenes "deleted" event.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return void
     */
    public function deleted(Ordenes $ordenes)
    {
        LogOrden::create(["idOrden"=>$ordenes->id,"accion"=>"OrdenEliminada"]);
    }

    /**
     * Handle the Ordenes "restored" event.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return void
     */
    public function restored(Ordenes $ordenes)
    {
        //
    }

    /**
     * Handle the Ordenes "force deleted" event.
     *
     * @param  \App\Models\Ordenes  $ordenes
     * @return void
     */
    public function forceDeleted(Ordenes $ordenes)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\EventCollection;
use App\Http\Resources\V1\EventResources;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /* Returning all the data from the database. */
        $data = Event::all();

        return new EventCollection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->name_event = $request->name_event;
        $event->description = $request->description;
        $event->category = $request->category;
        $event->unit_price = $request->unit_price;
        $event->number_tickets = $request->number_tickets;
        $event->number_tickets_availables = $request->number_tickets_availables;
        $event->number_tickets_unavailable = $request->number_tickets_unavailable;
        $event->save();

        return response('Guardado exitosamente', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        if (!is_null($event)) {
            return new EventResources(Event::find($id));
        }

        return response('No se encontró el evento', 500);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        if (!is_null($event)) {

            $event->name_event = $request->name_event;
            $event->description = $request->description;
            $event->category = $request->category;
            $event->unit_price = $request->unit_price;
            $event->number_tickets = $request->number_tickets;
            $event->number_tickets_availables = $request->number_tickets_availables;
            $event->number_tickets_unavailable = $request->number_tickets_unavailable;
            $event->save();

            return response('Editado exitosamente', 200);
        }
        return response('No se encontró el evento', 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return response('Eliminado exitosamente', 200);
    }
}

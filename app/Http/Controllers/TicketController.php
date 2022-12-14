<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /* Getting the number of tickets from the event and then updating the number of tickets in the
      event. */
        $ticketUpdateNumber = Event::where('id', $request->idEvent)->pluck('number_tickets')->first();

        $event = Event::find($request->idEvent);
        if (!is_null($event)) {
            $rest = $ticketUpdateNumber -1;
            $event->number_tickets = $rest;
            $event->save();

            return response('Guardado exitosamente', 200);
        }
        return response('Tickets no disponibles', 500);

        /* This is creating a new ticket and saving it to the database. */
        $ticket = new Ticket();
        $ticket->idEvent = $request->idEvent;
        $ticket->name_user = $request->name_user;

        $ticket->save();

        return response('Guardado exitosamente', 200);
    }

}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Resources\V1\ClientCollection;
use App\Http\Resources\V1\ClientResources;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Client::all();

        return new ClientCollection($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->telephone = $request->telephone;
        $client->direction = $request->direction;
        $client->identy_document = $request->identy_document;
        $client->email = $request->email;
        $client->save();

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
        $client = Client::find($id);
        if (!is_null($client)) {
            return new ClientResources(Client::find($id));
        }

        return response('No se encontró el cliente', 500);
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
        $client = Client::find($id);
        if (!is_null($client)) {

            $client->name = $request->name;
            $client->lastname = $request->lastname;
            $client->telephone = $request->telephone;
            $client->direction = $request->direction;
            $client->identy_document = $request->identy_document;
            $client->email = $request->email;
            $client->save();

            return response('Editado exitosamente', 200);
        }
        return response('No se encontró el cliente', 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return response('Eliminado exitosamente', 200);
    }
}

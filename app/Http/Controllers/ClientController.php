<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('viewClients.index', compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('viewClients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        //Validación como primer paso        
        $this->validate($request,[
            'name'=>'required|string',
            'address'=>'required|string'
        ]);

        //Almacenamiento como siguiente paso
        $client = new Client;
        $client->name = $request->name;
        $client->address = $request->address;
        $client->save();
        
        //Redireccione
        return  redirect('listShow');
        
    }


    public function listShow() {
        $clients = Client::all();
        return view('viewClients.listShow', compact('clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
        return view('viewClients.show', compact('client'));

    }

    public function listEdit() {
        $clients = Client::all();
        return view('viewClients.listEdit', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {

        return view('viewClients.edit', compact('client'));
    }


    public function update(Request $request, client $client)
    {
        $this->validate($request,[
            'name'=>'required|string',
            'address'=>'required|string'
        ]);


        $client->name = $request->name;
        $client->address = $request->address;
        $client->save();

        return "la actualización ha sido exitosa";

    }

    public function listDelete() {
        $clients = Client::all();
        return view('viewClients.listDelete', compact('clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        $client->delete();

        return back();
    }
}

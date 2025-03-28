<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Post;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::with('posts')->get();
        return view('pages.homepage', compact('clients'));
    }


    public function show(Client $client)
    {
        return view('pages.show', compact('client'));
    }
}

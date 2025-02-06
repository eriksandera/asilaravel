<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\View\View;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = DB::table('my_clients')->get();


        return view('list', ['clients' => $clients]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $client = DB::table('my_clients')->insertGetId([
            'name' => $request->name,
            'slug' => strtolower(str_replace(" ", "_", $request->name)),
            'address' => $request->address,
            'client_prefix' => '',
            'phone_number' => $request->phone_number,
            'city' => $request->city,

        ]);

        return redirect('/');
    }
    public function edit($id)
    {

        $client = DB::table('my_clients')->where('slug', $id)->first();
        return view('edit', ['client' => $client]);
    }
    public function update(Request $request): RedirectResponse
    {
        $slug = strtolower(str_replace(" ", "_", $request->name));
        $client = DB::table('my_clients')->where('id', $request->id)->update([
            'name' => $request->name,
            'slug' => $slug,
            'address' => $request->address,
            'client_prefix' => '',
            'phone_number' => $request->phone_number,
            'city' => $request->city,

        ]);
        return redirect('/');
    }
    public function delete($id): RedirectResponse
    {
        $client = DB::table('my_clients')->where('slug', $id)->delete();
        return redirect('/');
    }
}

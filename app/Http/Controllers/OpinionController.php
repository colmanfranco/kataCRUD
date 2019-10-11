<?php

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function index()
    {
        $opiniones = Opinion::all();
        return view('empresa', compact('opiniones'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Opinion $opinion)
    {
        //
    }

    public function edit(Opinion $opinion)
    {
        //
    }

    public function update(Request $request, Opinion $opinion)
    {
        //
    }

    public function destroy(Opinion $opinion)
    {
        //
    }
}

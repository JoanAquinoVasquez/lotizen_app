<?php

namespace App\Http\Controllers\Gerente_comercial;

use App\Models\Asesor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Duenio;
use App\Models\Rubro;
use App\Models\Empresa;
use App\Models\Proyecto;

class DashboardController extends Controller
{

   
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('gerente_comercial.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Asesor $asesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asesor $asesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asesor $asesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asesor $asesor)
    {
        //
    }
}

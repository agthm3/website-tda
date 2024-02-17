<?php

namespace App\Http\Controllers;

use App\Models\HomeDashboard;
use Illuminate\Http\Request;

class HomeDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.home.index');
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
    public function show(HomeDashboard $homeDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeDashboard $homeDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeDashboard $homeDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeDashboard $homeDashboard)
    {
        //
    }
}

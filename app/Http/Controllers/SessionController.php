<?php

namespace App\Http\Controllers;

use App\Services\SessionService;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct(protected SessionService $sessionService)
    {
        $this->sessionService = $sessionService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sessionService->all();
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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

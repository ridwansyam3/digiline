<?php

namespace App\Http\Controllers;

use App\Models\wallet;
use Illuminate\Http\Request;

class KirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wallets = wallet::all();
        return view("home/kirim/index")->with('wallets',$wallets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $data = wallet::where('id', $id)->first();
        return view('home/kirim/tujuan')->with('data',$data);
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
        $data = wallet::where('id', $id)->first();
        return view('home/kirim/tujuan')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

    function jumlahtrf(){
        return view("home/kirim/jumlahtrf");
    }
}

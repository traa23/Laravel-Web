<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
       
        $request->validate([
		    'nama'  => 'required|max:10',
		    'email' => ['required','email'],
		    'pertanyaan' => 'required|max:300|min:8',
		]);

  return redirect()->route('home')->with('info', 
        'Terimakasih, Hoki y! <b>' . $data['nama_orang'] . '</b>! ' .
        'Silahkan cek email anda di <b>' . $data['email'] . '</b> untuk respon lebih lanjut.');

        //return redirect('home-question')->with('success', 'Data berhasil dikirim!');
        //return redirect()->route('home');
        //return redirect()->back();
        //return redirect()->away('https://www.example.com');
        //return view('home-question- respon', $data);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
}

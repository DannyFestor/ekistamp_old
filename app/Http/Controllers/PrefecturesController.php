<?php

namespace App\Http\Controllers;

use App\Prefecture;
use Illuminate\Http\Request;

class PrefecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prefectures = Prefecture::all();
        return view('prefectures.index', [
            'prefectures' => $prefectures,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('prefectures.create');
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
        // dd($request);
        request()->validate([
            'romaji' => ['required', 'min:3', 'max:255'],
            'kana' => ['required', 'min:2', 'max:255'],
            'kanji' => ['required', 'min:2', 'max:255'],
        ]);

        Prefecture::create([
            'romaji' => request('romaji'),
            'kana' => request('kana'),
            'kanji' => request('kanji'),
        ]);
        return redirect('/prefectures');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function show(Prefecture $prefecture)
    {
        //
        $prefectures = Prefecture::all();
        $id = $prefecture->id;
        $cities = $prefecture->cities;
        
        return view('prefectures.show', [
            "prefectures" => $prefectures,
            "id" => $id,
            "cities" => $cities,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Prefecture $prefecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prefecture $prefecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prefecture $prefecture)
    {
        //
    }
}

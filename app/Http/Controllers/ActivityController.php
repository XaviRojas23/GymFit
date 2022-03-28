<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Categoria;
use App\Models\Dificultad;
use App\Models\Lugar;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::where('user_id', auth()->user()->id)->get();

        return view('Activity.sign', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $dificultads = Dificultad::all();
        $lugars = Lugar::all();


        return view('Activity.create', compact('categorias','dificultads','lugars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
            'dificultad' => 'required',
            'lugar' => 'required',
            'inicio' => 'date_format:H:i',
            'fin' => 'date_format:H:i|after:inicio'
        ]);

         auth()->user()->activity()->create([
            'name' => $data ['name'],
            'descripcion' => $data ['descripcion'],
            'categoria_id' => $data ['categoria'],
            'dificultad_id' => $data ['dificultad'],
            'lugar_id' => $data ['lugar'],
            'inicio' => $data ['inicio'],
            'fin'=> $data ['fin']
        ]);

        return redirect()->action([SignController::class , 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Activity\StoreRequest;
use Carbon\Carbon;
use App\Models\Lugar;
use App\Models\Activity;
use App\Models\Categoria;
use App\Models\Dificultad;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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

    /* public function test($request)
    {
        $start_date = Carbon::createFromFormat('d/m/Y', $request->input('start_date'));
        $end_date = Carbon::createFromFormat('d/m/Y', $request->input('end_date'));
        // Calendario de esta semana
        Activity::whereHas('activity_days', function ($query) use ($start_date, $end_date) {
            $query
                ->where(function ($query) use ($start_date, $end_date) {
                    $query
                        ->where('specific_date', '>=', $start_date)
                        ->where('specific_date', '<=', $end_date);
                })
                ->orWhereNotNull('recurrent_date');

        })->get();

        $weekDays = [];
        $day = $start_date;
        while($day <= $end_date) {
            $weekDays[] = $day->clone();
            $day->addDay();
        }
    } */

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

        return view('Activity.create', compact('categorias', 'dificultads', 'lugars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //$route_image = $request->file('images')->storeAs('upload-activity', 'test.jpg');
        $route_image = $request->file('images')->store('upload-activity', 'public');

        $img = Image::make(public_path("storage/{$route_image}"))->fit(600,600);
        $img->save();

         auth()->user()->activity()->create([
            'name' => $request->input('name'),
            'descripcion' => $request->input('descripcion'),
            'categoria_id' => $request->input('categoria'),
            'dificultad_id' => $request->input('dificultad'),
            'lugar_id' => $request->input('lugar'),
            'images' => $route_image,
            'inicio' => $request->input('inicio'),
            'fin'=> $request->input('fin')
        ]);

        return redirect()->action([ActivityController::class , 'index']);

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
        $categorias = Categoria::all();
        $dificultads = Dificultad::all();
        $lugars = Lugar::all();

        return view('Activity.edit')
            ->with('categoria',$categorias)
            ->with('categoria',$dificultads)
            ->with('categoria',$lugars)
            ->with('activity', $activity);

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
        return('Hola desde update');
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

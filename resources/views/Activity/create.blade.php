@extends('layouts.app')
@section('content')
    @section('navegation')
        @include('ui.admin')
    @endsection

    <div class="container">
        <h1 class="text-center">Crear nueva actividad</h1>
        <div class="mt-5 row justify-content-center">
            <form class="col-md-9 col-xs-12 card card-body"
            action="{{route('activity.store')}}"
            method="POST"
            enctype="multipart/form-data"
            novalidate>
            @csrf
                <fieldset class="border p-4">
                    <legend class="text-center">Actividad</legend>
                    <div class="form-group m-4 p-5">
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Nombre Actividad"
                        name="Name"
                        value="{{old('name')}}"
                        >
                        @error('name')
                            <div class="invalid-feedback">
                               {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group m-4 p-5">
                        <textarea  name="descripcion" id="descripcion" rows="4" cols="1" class="form-control @error('descripcion') is-invalid @enderror"
                        placeholder="Descripcion Actividad"
                        name="descripcion"
                        value="{{old('descripcion')}}"
                        ></textarea>
                        @error('descripcion')
                            <div class="invalid-feedback">
                               {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group m-4 p-5">

                        <select name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria">
                            <option value="" selected disabled>-- Seleccione categoria --</option>
                            @foreach ($categorias as $categoria)

                            <option value="{{$categoria->id}}"> {{$categoria->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-4 p-5">

                        <select name="dificultad" class="form-control @error('dificultad') is-invalid @enderror" id="dificultad">
                            <option value="" selected disabled>-- Seleccione dificultad --</option>
                            @foreach ($dificultads as $dificultad)

                            <option value="{{$dificultad->id}}"> {{$dificultad->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-4 p-5">

                        <select name="lugar" class="form-control @error('lugar') is-invalid @enderror" id="lugar">
                            <option value="" selected disabled>-- Seleccione lugar --</option>
                            @foreach ($lugars as $lugar)

                            <option value="{{$lugar->id}}"> {{$lugar->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group m-4 p-5">
                        <label for="name">Inicio de la actividad</label>
                        <input type="time" name="inicio"
                            class="form-control @error('inicio') is-invalid @enderror"
                            id='inicio'
                            value="{{old('inicio')}}"
                            >
                            @error('inicio')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="form-group m-4 p-5">
                        <label for="name">Fin de la actividad</label>
                        <input type="time"
                        name="fin" id="fin"
                        class="form-control @error('fin') is-invalid @enderror"
                        id='fin'
                        value="{{old('fin')}}"
                        >
                        @error('fin')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                    </div>
                    <div class="m-5 rounded">
                        <input type="file" id="images" name="images" src="" alt="">
                    </div>
                </fieldset>

                <input type="submit" style="background-color: rgb(255, 255, 13)" class="btn mt-3 d-block" value="Añadir actividad">

            </form>
        </div>
    </div>

@endsection


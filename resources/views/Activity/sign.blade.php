@extends('layouts.app')

@section('content')
@section('navegation')
    @include('ui.admin')
@endsection
<a style="background-color: rgb(255, 255, 13)" class="btn mt-3 d-block"
    href="{{ route('activity.create') }}">{{ __('Crear Actividad') }}</a>
{{-- @if (count($activities) > 0)
    <h2 class="text-3xl text-gray-700 m-0">Resultados de la búsqueda</h2>
    <div class="my-10 bg-gray-100 p-10 shadow">
        @include('ui.search')
    </div>
    @else
        <p class="text-center text-gray-700">No hay vacantes que concuerden con la búsqueda</p>

    @endif --}}
<div class="container">
    <div class="row">
        <div class="row justify-content-md-center">
            @foreach ($activities as $activity)
                <div class="px-4 py-5 my-5 col-md-12 col-xl-6">
                    <div class="row mb-2">
                        <div class="">
                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col-md-6">
                                    <h3 class="text-uppercase text-center m-2">{{ $activity->name }}</h3>
                                    <div class="col p-4 d-flex">
                                        <p class="text-muted px-3 col-md-4 col-sm-4 text-center">
                                            {{ $activity->Categoria->name }}</p>
                                        <p class="text-muted px-3 col-md-4 col-sm-4 text-center">
                                            {{ $activity->Dificultad->name }}</p>
                                        <p class="text-muted px-3 col-md-4 col-sm-4 text-center">
                                            {{ $activity->Lugar->name }}</p>
                                        <img src="{{ $activity->images }}" alt="">
                                    </div>
                                    <div class="col p-4 d-flex">
                                        <p class="text-muted h4 px-4 col-md-12 col-sm-12 text-center">
                                            {{ $activity->inicio->format('H:i') }}-{{ $activity->fin->format('H:i') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="/storage/{{ $activity->images }}" class="img-thumbnail" alt="">
                                </div>
                                <input type="submit" style="background-color: rgb(255, 255, 13) "
                                    class="btn mt-3 d-block col-md-6 mask" value="Apuntarme actividad">
                                <input type="submit" style="background-color: rgb(247, 0, 0) "
                                    class="btn mt-3 d-block col-md-6 mask" value="Cancelar actividad">
                                <a style="background-color: rgb(41, 255, 13)" class="btn mt-3 d-block"
                                    href="{{ route('activity.edit') }}">{{ __('Editar Actividad') }}</a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

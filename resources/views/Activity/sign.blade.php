@extends('layouts.app')

@section('content')
    @section('navegation')
        @include('ui.admin')
    @endsection
    <a style="background-color: rgb(255, 255, 13)" class="btn mt-3 d-block" href="{{ route('activity.create') }}">{{ __('Crear Actividad') }}</a>
    @foreach ( $activities as $activity   )

    <div class="px-4 py-5 my-5 text-center col-md-6">
        <h1 class="display-5 ">{{$activity->name}}</h1>
        <div class="row mb-2">
            <div class="">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue     reading</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection

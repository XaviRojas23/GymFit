@extends('layouts.app')

@section('content')
    @section('navegation')
        @include('ui.admin')
    @endsection
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-black " style="color: white">  {{ __('Tablon') }}
                        {{-- <div class="card-body"> --}}
                        {{--     @if (session('status')) --}}
                        {{--         <div class="alert alert-success" role="alert"> --}}
                        {{--             {{ session('status') }} --}}
                        {{--        </div> --}}
                        {{--     @endif --}}

                        {{-- {{ __('Has iniciado sesion en GymFit!') }} --}}
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



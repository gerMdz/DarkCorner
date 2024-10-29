@extends('layouts.guest')
@section('title', 'Servicios')
@section('content')

    <div class="flex flex-wrap -mx-4">
        @component('components.service-card')
            @slot('name', 'JPerez')
            @slot('githuburl', '#')
            @slot('content')
                <h4>Línea extra</h4>
            @endslot
        @endcomponent
        <x-service-card name="Carlos Sanchez" githuburl="#" content="" />
        <x-service-card name="Gerardo Montivero" githuburl="#" content=""/>


    </div>

@endsection


@extends('layouts.app')

@section('page-title')
    Treni
@endsection

@section('main-content')
    <h1>Welcome to the Trains Page</h1>


    @foreach ($todayTrains as $train)

    <ul>
        <li>
           Train {{ $train['azienda']}} from {{ $train['stazione_partenza'] }} to {{ $train['stazione_arrivo'] }} at {{ $train['orario_partenza'] }}
        </li>
    </ul>

    @endforeach



@endsection

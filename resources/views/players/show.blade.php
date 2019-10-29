@extends('layouts.app')


@section('content')
    <div class="container">
        <h2>{{ $player->name }}</h2>
        <h3>Flag: {{ $player->flag }}</h3>
    </div>
@endsection

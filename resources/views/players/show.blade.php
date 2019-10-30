@extends('layouts.app')


@section('content')
    <h2>{{ $player->name }}</h2>
    <h3>Flag: {{ $player->flag }}</h3>
@endsection

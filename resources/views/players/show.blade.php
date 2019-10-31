@extends('layouts.app')


@section('content')
    <h2>{{ $player->name }}</h2>
    <h3>Flag: {{ $player->flag }}</h3>
    @if ($player->rosters->count())
        <h3>Rosters:</h3>
        @foreach ($player->rosters as $roster)
            <a href="{{ route('rosters.show', $roster) }}">{{ $roster->rosterTitle }}</a>
        @endforeach
    @endif

    {!! Form::open(['url' => route('players.destroy', $player)]) !!}
        @method('DELETE')
        {!! Form::submit('Delete '. $player->name, array_merge(['class' => 'btn btn-danger'])) !!}
    {!! Form::close() !!}
@endsection

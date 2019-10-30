@extends('layouts.app')

@section('content')
  <h2>All Players</h2>
  <a href="{{ route('players.create') }}">Add Player</a>
  @forelse($players as $player)
  <div>
    <a href="{{ route('players.show', $player) }}">{{ $player->name }} - {{ $player->flag }}</a>
  </div>
  @empty
  <h3>No Players</h3>
  @endforelse
@endsection

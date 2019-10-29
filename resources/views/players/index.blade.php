@extends('layouts.app')

@section('content')
<div class="container">
  <h2>All Players</h2>
  <a href="{{ route('players.create') }}">Add Player</a>
  @forelse($players as $player)
  <div>
    {{ $player->name }}
  </div>
  @empty
  <h3>No Players</h3>
  @endforelse
</div>
@endsection
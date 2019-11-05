@extends('layouts.app')

@section('content')
  <h2>{{ $roster->rosterTitle }}</h2>

  <a href="{{ route('rosters.edit', $roster) }}" class="btn btn-success mb-3">Edit</a>
  {!! Form::open(['url' => route('rosters.destroy', $roster)]) !!}
      @method('DELETE')
      {!! Form::submit('Delete Roster', array_merge(['class' => 'btn btn-danger'])) !!}
  {!! Form::close() !!}
  @if ($roster->players->count())
    <ul>
      @foreach ($roster->players as $player)
        <li>{{ $player->name }}</li>
      @endforeach
    </ul>
  @endif
@endsection

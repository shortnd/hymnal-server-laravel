@extends('layouts.app')

@section('content')
  <div class="container">
    {!! Form::open(['url' => route('rosters.update', $roster)]) !!}
      @method('PATCH')
    <div class="form-group">
      {!! Form::label('rosterTitle', 'Roster Title') !!}
      {!! Form::text('rosterTitle', $roster->rosterTitle, array_merge(['class' => 'form-control'])) !!}
    </div>
    <div class="form-group">
      {!! Form::label('season', 'Season') !!}
      {!! Form::text('season', $roster->season, array_merge(['class' => 'form-control'])) !!}
    </div>
    @if ($roster->players->count())
      <div class="form-group">
        {!! Form::label('current_players[]', 'Current Players') !!}
        <select name="current_players[]" id="current_players[]" class="custom-select" multiple>
          @foreach($roster->players as $player)
          <option value="{{ $player->id }}">{{ $player->name }}</option>
          @endforeach
        </select>
        <small>
          Select the players you want to remove from the roster
        </small>
      </div>
    @endif
    <div class="form-group">
      {!! Form::label('players[]', 'Players') !!}
      <select name="players[]" id="players[]" multiple class="custom-select">
        @foreach($players as $player)
          <option value="{{ $player->id }}">{{ $player->name }}</option>
        @endforeach
      </select>
      <small>Select the players you want to add</small>
    </div>
    <div class="form-group">
      {!! Form::submit('Update Roster') !!}
    </div>
    {!! Form::close() !!}
  </div>
@endsection

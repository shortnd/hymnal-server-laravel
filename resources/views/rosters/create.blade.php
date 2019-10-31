@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['url' => route('rosters.store')]) !!}
            <div class="form-group">
                {!! Form::label('rosterTitle', 'Roster Title') !!}
                {!! Form::text('rosterTitle', null, array_merge(['class' => 'form-control', 'required' => true])) !!}
            </div>
            <div class="form-group">
                {!! Form::label('season', 'Season') !!}
                {!! Form::text('season', null, array_merge(['class' => 'form-control', 'required' => true])) !!}
            </div>
            <div class="form-group">
                {!! Form::label('players', 'Players') !!}
                 <select name="players[]" id="players[]" multiple>
                     @foreach($players as $player)
                        <option value="{{ $player->id }}">{{$player->name}}</option>
                     @endforeach
                 </select>
            </div>
            <div class="form-group">
                {!! Form::submit('Add Roster', array_merge(['class' => 'btn btn-primary'])) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@push('scripts')
@endpush

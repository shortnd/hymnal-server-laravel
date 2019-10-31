@extends('layouts.app')

@section('content')
    <h2>Rosters</h2>
    <a href="{{ route('rosters.create') }}">Add Roster</a>
    @forelse($rosters as $roster)
        <div>
            <a href="{{ route('rosters.show', $roster) }}">{{ $roster->rosterTitle }}</a>
        </div>
    @empty
        <h3>No Rosters</h3>
    @endforelse
@endsection

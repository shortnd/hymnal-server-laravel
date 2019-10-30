@extends('layouts.app')

@section('content')
    <h2>Rosters</h2>
    @forelse($rosters as $roster)
        <div>
            <a href="{{ route('rosters.show', $roster) }}">{{ $roster->rosterTitle }}</a>
        </div>
    @empty
        <h3>No Rosters</h3>
    @endforelse
@endsection

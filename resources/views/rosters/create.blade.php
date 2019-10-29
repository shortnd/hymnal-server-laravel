@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="rosterTitle">Roster Title</label>
            </div>
        </form>
        <multi-select v-model="players" :options="{{ $players }}" :multiple="true" :clear-on-select="false" :preserve-search="true"></multi-select>
        {{ $players }}
    </div>
@endsection

@push('scripts')
@endpush

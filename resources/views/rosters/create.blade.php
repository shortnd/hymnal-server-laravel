@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('rosters.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="rosterTitle">Roster Title</label>
                <input type="text" name="rosterTitle" id="rosterTitle" value="{{ old('rosterTitle') }}" class="form-control @error('rosterTitle') is-invalid @enderror" required />
            </div>
            <div class="form-group">
                <label for="season">Season</label>
                <input type="text" name="season" id="season" value="{{ old('season') }}" class="form-control @error('season') is-invalid @enderror" required />
            </div>
            <div class="form-group">
                <multi-select :options="{{ $players }}" v-model="players" :multiple="true" :search="true" track-by="name" label="name" :preselect-first="true">
                    <template slot="selection" slot-scope="{ players, search, isOpen }"><span class="multiselect__single" v-if="players.length &amp;&amp; !isOpen">@{{ values.length }} options selected</span></template>
                </multi-select>
                @error('players')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Add Roster</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
@endpush

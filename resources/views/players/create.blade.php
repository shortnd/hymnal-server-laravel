@extends('layouts.app')

@section('content')
    <div class="card">
      <div class="card-body">
        <form action="{{ route('players.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
            @error('name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="flag">Flag</label>
            <input type="text" name="flag" id="flag" placeholder="Flag Emoji" class="form-control @error('flag') is-invalid @enderror" old="{{ old('flag') }}">
            @error('flag')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="squadNumber">Squad Number</label>
            <input type="number" name="squadNumber" id="squadNumber" class="form-control @error('squadNumber') is-invalid @enderror" value="{{ old('squadNumber') }}" placeholder="Squad Number">
            @error('squadNumber')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="team">Team</label>
            <input type="text" name="team" id="team" placeholder="team" class="form-control @error('team') is-invalid @enderror" value="{{ old('team') }}">
            @error('team')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control @error('bio') is-invalid @enderror" style="resize:none">{{ old('bio') }}</textarea>
            @error('bio')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control-file">
            {{-- @error('thumbnail')
                <small class="text-danger">{{ $message }}</small>
            @enderror --}}
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
            {{-- @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror --}}
          </div>
          <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="url" name="twitter" id="twitter" class="form-control @error('twitter') is-invalid @enderror" value="{{ old('twitter') }}">
            @error('twitter')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="url" name="instagram" id="instagram" class="form-control @error('instagram') is-invalid @enderror" value="{{ old('instagram') }}">
            @error('instagram')
                <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Player</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </div>
@endsection

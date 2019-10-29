@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('players.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" required>
            @error('name')
              {{ $message }}
            @enderror
          </div>
          <div class="form-group">
            <label for="flag">Flag</label>
            <input type="text" name="flag" id="flag" placeholder="Flag Emoji" class="form-control">
          </div>
          <div class="form-group">
            <label for="squadNumber">Squad Number</label>
            <input type="number" name="squadNumber" id="squadNumber" class="form-control" placeholder="Squad Number">
          </div>
          <div class="form-group">
            <label for="team">Team</label>
            <input type="text" name="team" id="team" placeholder="team" class="form-control">
          </div>
          <div class="form-group">
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control" style="resize:none"></textarea>
          </div>
          <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" name="thumbnail" id="thumbnail" class="form-control-file">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
          </div>
          <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="text" name="twitter" id="twitter" class="form-control">
          </div>
          <div class="form-group">
            <label for="instagram">Instagram</label>
            <input type="text" name="instagram" id="instagram" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Player</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
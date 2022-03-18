@extends('layouts.base')

@section('content')
      <h2>Edit track</h2>
      <form action="{{ route('tracks.update', $track->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="name">Track name</label>
          <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="" value="{{ old('name', $track->name) }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="file">Audio file</label>
          <input name="file" type="file" class="form-control-file @error('file') is-invalid @enderror" id="file" placeholder="" value="{{ old('file', $track->file) }}">
          @error('file')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="color">Color</label>
          <input name="color" type="color" class="form-control @error('color') is-invalid @enderror" id="color" placeholder="" value="{{ old('color', $track->color) }}">
          @error('color')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-group d-flex">
            <div class="custom-control custom-switch col-sm-2">
              <input type="checkbox" class="custom-control-input" id="customSwitch1">
              <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
            </div>
            <div class="custom-control custom-switch col-sm-2">
              <input type="checkbox" class="custom-control-input" id="customSwitch2">
              <label class="custom-control-label" for="customSwitch2">Toggle this switch element</label>
            </div>
        </div>


        <div class="form-group">
          <button type="submit" class="btn btn-primary">Update track</button>
        </div>

      </form>
@endsection

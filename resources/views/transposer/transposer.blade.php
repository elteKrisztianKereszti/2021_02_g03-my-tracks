@extends('layouts.base')

@section('content')
    <h2>Transposer</h2>
    <form action="" method="get">
      <div class="form-group">
        <label for="key">Key</label>
        <input type="text" name="key" class="form-control" id="key" value="C">
        <!-- <select name="key" id="key" class="form-control">
          <option>C</option>
          <option>C#</option>
          <option>D</option>
          <option>D#</option>
          <option>E</option>
          <option>F</option>
          <option>F#</option>
          <option>G</option>
          <option>G#</option>
          <option>A</option>
          <option>A#</option>
          <option>H</option>
        </select> -->
        <div class="invalid-feedback">
          Error
        </div>
      </div>
      <div class="form-group">
        <label for="distance">Distance</label>
        <input type="text" name="distance" class="form-control" id="distance" value="1">
        <div class="invalid-feedback">
          Error
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <p>New key is C#.</p>

  @endsection

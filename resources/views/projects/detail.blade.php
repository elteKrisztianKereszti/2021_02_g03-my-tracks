@extends('layouts.base')

@section('content')
      <h2>{{ $project->name }}</h2>
      <img src="{{ $project->image_url }}">
      <p>{{ $project->description }}</p>

      <a href="{{ route('projects.edit', $project->id) }}"  class="btn btn-primary">Edit</a>
      <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit"  class="btn btn-danger">Delete</button>
      </form>
      <a href="new-track.html" class="btn btn-primary">Add new track</a>
      <div class="list-group">
          @foreach ($project->tracks as $track)
            <a href="#" class="list-group-item list-group-item-action" style="background-color: #bbb7b4">
                <p class="d-flex justify-content-between align-items-center">
                <span>
                    {{ $track->name }}
                    <small>{{ $track->filename }}</small>
                    <small>{{ $track->color }}</small>
                </span>
                <span class="badge badge-primary badge-pill">Muted</span>
                </p>
                <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-1">Cras justo odio</li>
                <li class="list-group-item p-1">Dapibus ac facilisis in</li>
                <li class="list-group-item p-1">Morbi leo risus</li>
                </ul>
            </a>
          @endforeach


      </div>
@endsection

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
      <a href="{{ route('projects.tracks.create', $project->id) }}" class="btn btn-primary">Add new track</a>
      <div class="list-group">
          @foreach ($project->tracks as $track)
            <a href="{{ route('tracks.edit', $track->id)}}" class="list-group-item list-group-item-action" style="background-color: {{ $track->color }}">
                <p class="d-flex justify-content-between align-items-center">
                <span>
                    {{ $track->name }}
                    <small>{{ $track->filename }}</small>
                </span>
                <span class="badge badge-primary badge-pill">Muted</span>
                </p>
                <ul class="list-group list-group-horizontal">
                    @foreach ($track->filters as $filter)
                        <li class="list-group-item p-1">{{ $filter->name }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('tracks.destroy', $track->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger">Delete</button>
                  </form>
            </a>
          @endforeach
      </div>
@endsection

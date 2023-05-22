@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
          <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td> 
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection


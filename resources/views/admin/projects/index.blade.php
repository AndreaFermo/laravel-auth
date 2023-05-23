@extends('layouts.admin')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Azioni</th>
      
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
          <tr>
            <td>{{$project->id}}</td>
            <td>{{$project->title}}</td>
            <td>{{$project->description}}</td>
            <td class="d-flex">
              <a class="btn btn-primary" href="{{route('admin.projects.show', $project->slug)}}">Mostra</a>
              <a class="btn btn-warning" href="#">Modifica</a>
              <form action="" class="btn btn-danger">
                  Cancella
              </form>  
            </td> 
          </tr>
      @endforeach
    </tbody>
  </table>

@endsection


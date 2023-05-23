@extends('layouts.admin')
@section('page-title', $project->title)
@section('content')
    <h1 class="text-center mt-3 mb-5">Titolo: {{$project->title}}</h1>
    <p class="ms-3 me-3"><span class="fw-bold">Descrizione:</span> {{$project->description}}</p>
    <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Torna alla lista progetti</a>
@endsection
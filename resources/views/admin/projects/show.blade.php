@extends('layouts.admin')
@section('page-title', $project->title)
@section('content')
    <h1>{{$project->titile}}</h1>
    <p>{{$project->descritpion}}</p>
@endsection
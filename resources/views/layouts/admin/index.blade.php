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
        @foreach ($posts as $post)
            <tr>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
        @endforeach
    </tbody>
  </table>

@endsection


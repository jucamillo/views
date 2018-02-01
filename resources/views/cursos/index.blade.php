@extends('layouts.master')

@section('title', 'Listagem dos Cursos')

@section('conteudo')
        <h1>Cursos</h1>
        <ul class="list-group">
          @foreach ($cursos as $curso)
            <li class="list-group-item">
              <li class="list-group-item"><a href="/cursos/{{ $loop->index }}">{{ $curso }}</a></li>
            </li>
          @endforeach
        </ul>
@endsection

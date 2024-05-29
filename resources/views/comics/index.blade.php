@extends('layouts.app')

@section('title','Comics')

@section('content')

<main>
  <section>
        <div class="container">
            <div class="row">
                <div class="col py-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Nuovo comic</a>
                </div>
            </div>
        </div>
        <div class="container">
            <ul class="row list-unstyled gy-4">
                @foreach ($comics as $comic)
                    <li class="col-3">
                        <div class="card h-100 d-flex flex-column justify-content-between">
                            <img class="w-100 h-75" src="{{$comic->thumb}}" alt="">
                            <h5>{{$comic->title}}</h5>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic ) }}">
                                Più dettagli
                            </a>

                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
  </section>
</main>
@endsection
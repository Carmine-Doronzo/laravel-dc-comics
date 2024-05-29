@extends('layouts.app')

@section('title','Dettagli')

@section('content')

<main>
  <section>
    
    <div class="container">
        <div class="row">
            <ul class="card list-unstyled d-flex align-items-center">
                <li class="card-header">
                    <img  src="{{$comic->thumb}}" alt="">
                </li>
                <li>Titolo:{{$comic->title}}</li>
                <li>Tipo: {{ $comic->type }}</li>
                <li>serie: {{ $comic->series }}</li>
                <li>Data di rilascio: {{ $comic->sales_date }}</li>
                <li>Prezzo: {{ $comic->price }}</li>

            </ul>
        </div>
    </div>
    <div class="container">
      <div>
        <h5>Descrizione:</h5>
        <p>{{ $comic->description }}</p>
        
      </div>
      <a class="btn btn-primary" href="{{ route('comics.index') }}">torna a comics</a>
    </div>
  </section>
</main>

@endsection
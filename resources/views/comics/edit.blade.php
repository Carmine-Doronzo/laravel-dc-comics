@extends('layouts.app')

@section('title','Modifica comic')

@section('content')

<main>
  <section>
    <div class="container d-flex justify-content-between py-4">
        
      
            <h2 class="fs-2">Modifica del comic {{$comic->title}}</h2>
            <a class="btn btn-primary w-25" href="{{ route('comics.index') }}">torna a comics</a>
            
        
    </div>
    <div class="container">
      <form action="{{ route('comics.update', $comic) }}" method="POST">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Titolo" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label">Url Image</label>
          <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://..." value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">Tipologia</label>
          <input type="text" name="type" class="form-control" id="type" placeholder="ex.novel" value="{{$comic->type}}">
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">Serie</label>
          <input type="text" name="series" class="form-control" id="series" placeholder="inserisci la serie" value="{{$comic->series}}">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">Prezzo</label>
          <input type="text" name="price" class="form-control" id="price" placeholder="inserisci il prezzo" value="{{$comic->price}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di rilascio</label>
            <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="inserisci la data di rilascio" value="{{$comic->sale_date}}">
          </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrizione del comic" value="{{$comic->description}}"></textarea>
        </div>
        
        <button class="btn btn-primary">modifica</button>
      </form>
    </div>
  </section>
</main>

@endsection
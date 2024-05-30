@extends('layouts.app')

@section('title','Dettagli')

@section('content')

<main>
  <section>
    
    <div class="container">
        <div class="row">
            <ul class="card list-unstyled d-flex align-items-center py-4">
                <li class="card-header">
                    <img  src="{{$comic->thumb}}" alt="">
                </li>
                <li>Titolo:{{$comic->title}}</li>
                <li>Tipo: {{ $comic->type }}</li>
                <li>serie: {{ $comic->series }}</li>
                <li>Data di rilascio: {{ $comic->sales_date }}</li>
                <li>Prezzo: {{ $comic->price }}</li>
                <li>

                  <div class="d-flex gap-2 py-4" id="form">
                    <a class="btn btn-success" href="{{ route('comics.edit',$comic) }}">Modifica</a>
                    <button class="btn btn-danger" id="trash">Trash</button>
                    
                    <script>
                      let trash = document.getElementById('trash')

                      trash.addEventListener('click', function () {

                        let form = document.getElementById('form')

                        let trashConf = confirm('Sei sicuro di volere eliminare?')
                        if (trashConf === true) {

                          form.innerHTML += 
                          `
                            <form action="{{ route('comics.destroy',$comic) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            
       
                            <button type="submit" style="display:none;" id='confirm'>trash</button>

                            </form>
                          `
                          let confirm = document.getElementById('confirm').click()

                        }


                      })
                    </script>
                    
                  </div>

                </li>

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
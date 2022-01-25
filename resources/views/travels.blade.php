@extends('layouts.main')

@section('content')

<main class="container">
  
  <h1>TRIPS & TRAVELS</h1>

  {{-- @dump($travel) --}}

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome Pacchetto</th>
        <th scope="col">Destinazione</th>
        <th scope="col">Tipo di viaggio</th>
        <th scope="col">Soggiorno</th>
        <th scope="col">Notti</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Descrizione</th>
        {{-- <th scope="col">Descrizione</th> --}}
      </tr>
    </thead>
    <tbody>

      @forelse ($travels as $travel)
        <tr>
          <th scope="row">{{ $travel->id }}</th>
          <th>{{ $travel->package_name }}</th>
          <th>{{ $travel->destination }}</th>
          <th>{{ $travel->travel_type }}</th>
          <th>{{ $travel->stay_type }}</th>
          <th>{{ $travel->n_night }}</th>
          <th>{{ $travel->price }}</th>
          <th>{{ $travel->description }}</th>
        </tr>
      @empty
        <h4>Nessun risultato trovato</h4>
      @endforelse
      
    </tbody>
  </table>
  
</main>

  
@endsection
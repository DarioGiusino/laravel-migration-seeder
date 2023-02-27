{{-- extends main layout --}}
@extends('layouts.main')

{{-- chaging theme to dark --}}
@section('theme')
  data-bs-theme="dark"
@endsection

{{-- changing title --}}
@section('title', 'Home')

{{-- main content / train table --}}
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Oraio di arrivo</th>
        <th scope="col">Codice Treno</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Trenitalia</td>
        <td>Stazione notarbartolo</td>
        <td>stazione centrale</td>
        <td>10:30</td>
        <td>12:30</td>
        <td>961273</td>
        <td>17</td>
        <td>Mai</td>
        <td>può essere</td>
      </tr>
    </tbody>
  </table>
@endsection

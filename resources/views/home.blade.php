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
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
@endsection

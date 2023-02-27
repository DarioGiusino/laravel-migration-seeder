{{-- extends main layout --}}
@extends('layouts.main')

{{-- chaging theme to dark --}}
@section('theme')
  data-bs-theme="dark"
@endsection

{{-- changing title --}}
@section('title', 'Home')

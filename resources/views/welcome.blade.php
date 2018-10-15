@extends('layouts.app')

@section('title', 'Online Payment System')

@section('content')
<div class="row">
  <div class="col">
    <div class="jumbotron text-center">
      <h1 class="display-4">Welcome to Berks Lanes Online Payment System</h1>
      <hr class="my-4">
      <p>Skip the line, and pay with our easy to use online portal!</p>
      <a href="{{ route('register') }}" class="btn btn-primary" role="button">Login/Sign up</a>
    </div>
  </div>
</div>

@endsection

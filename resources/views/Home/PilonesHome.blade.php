@extends('layouts.app')

@section('content')
<div class="container">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('images/pilon.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Pilones</p>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{asset('images/caja.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Moldes</p>
  </div>
</div>
</div> 

@endsection
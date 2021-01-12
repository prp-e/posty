@extends('layout.app') 

@section('content') 
<h1> Posts </h1>
@auth
 <h2>Current user is </h2>   
@endauth 
@guest 
@endguest
@endsection 
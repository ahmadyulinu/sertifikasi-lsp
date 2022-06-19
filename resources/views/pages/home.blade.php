@extends('index')
@section('content')
<h1 class="text-center text-white bg-primary"> <i class="fa-solid fa-apartment"></i>Selamat Datang!</h1>
@foreach($data as $x)
<h1>{{$x->katapengantar}}</h1>
@endforeach

@endsection

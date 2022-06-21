@extends('index')
@section('content')
<div class="contacts m-4 bg-white rounded">
    <div class="row m-2 p-2">
        <h3>Selamat Datang di {{ $company[0]->name }}</h3>
        <h4>Silahkan pilih dari menu di Navbar/Sidebar</h4>
    </div>
</div>
@endsection

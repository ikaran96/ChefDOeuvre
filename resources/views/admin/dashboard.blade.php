@extends('pole.layout')

@section('content')
<div class="big-element-link">
    <a href="{{route('ecoles.index')}}">Gérer les écoles</a>
</div>
<div class="admin-column">
    <div id="frst-element" class="admin-element-nav">
        <a href="{{route('diplomantes.index')}}">Formations diplômantes</a>
    </div>
    <div id="scnd-element" class="admin-element-nav">
        <a href="{{route('continues.index')}}">Formations continues</a>
    </div>
</div>
<div class="admin-column">
    <div id="thrd-element" class="admin-element-nav">
        <a href="#">Elèves</a>
    </div>
    <div id="frth-element" class="admin-element-nav">
        <a href="#">Utilisateurs</a>
    </div>
</div>



@endsection

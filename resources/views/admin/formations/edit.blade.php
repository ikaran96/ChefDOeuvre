@extends('pole.layout')
@section('content')
<a href="{{route('ecoles.index')}}"><i class="fas fa-arrow-left"></i></a>
<h2 class="add-title">Modifier {{ $ecole -> name}}</h2>
<div class="form-wrapper">
<x-message />
    <form style="margin-left:auto;margin-right:auto" method="post" action="{{route('ecoles.update',$ecole->id)}}">
        @csrf
        @method('patch')
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nom *</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom de la formation" value=" {{ $ecole -> name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="logo" class="col-sm-2 col-form-label">Logo *</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="logo" id="logo">
            </div>
        </div>
        <div class="form-group row">
            <label for="short_desc" class="col-sm-2 col-form-label">Court résumé de l'école *</label>
            <div class="col-sm-10">
                <textarea name="short_desc" class="form-control" id="short_desc" cols="30" rows="10"
                    placeholder="Court résumé de l'école"></textarea> </div>
        </div>
            <input type="submit" value="Ajouter une modification">

    </form>
</div>
@endsection

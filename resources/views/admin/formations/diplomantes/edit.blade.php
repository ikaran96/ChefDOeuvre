@extends('pole.layout')
@section('content')
<a href="{{route('diplomantes.index')}}"><i class="fas fa-arrow-left"></i></a>
<h2 class="add-title">Modifier {{ $diplomante -> name}}</h2>
<div class="form-wrapper">
<x-message/>
    <form method="POST" style="margin-left:auto;margin-right:auto" action="{{route('diplomantes.update',$diplomante->id)}}">
        @csrf
        @method('patch')
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nom *</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nom de la formation" value="{{ $diplomante -> name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="long_desc" class="col-sm-2 col-form-label">Description détaillée</label>
            <div class="col-sm-10">
                <textarea name="long_desc" class="form-control" id="long_desc" cols="30" rows="10"
                    placeholder="Description détaillée de la formation"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="logo" class="col-sm-2 col-form-label">Logo *</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="logo" id="logo"   >
            </div>
        </div>
        <div class="form-group row">
            <label for="duree" class="col-sm-2 col-form-label">Durée</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="duree" id="duree" placeholder="Durée de la formation">
            </div>
        </div>
        <div class="form-group row">
            <label for="condition-admission" class="col-sm-2 col-form-label">Conditions d'admission</label>
            <div class="col-sm-10">
                <textarea name="condition-admission" class="form-control" id="condition-admission" cols="30" rows="10"
                    placeholder="Conditions d'admission de la formation"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="niveau-requis" class="col-sm-2 col-form-label">Niveau requis</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="niveau-requis" id="niveau-requis"
                    placeholder="Niveau requis">
            </div>
        </div>
        <div class="form-group row">
            <label for="niveau-sortie" class="col-sm-2 col-form-label">Niveau sortie</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="niveau-sortie" id="niveau-sortie"
                    placeholder="Niveau à la sortie de la formation">
            </div>
        </div>
        <div class="form-group row">
            <label for="historique" class="col-sm-2 col-form-label">Historique</label>
            <div class="col-sm-10">
                <textarea name="historique" class="form-control" id="historique" cols="30" rows="10"
                    placeholder="Historique de la formation"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="programme" class="col-sm-2 col-form-label">Programme</label>
            <div class="col-sm-10">
                <textarea name="programme" class="form-control" id="programme" cols="30" rows="10"
                    placeholder="Programme de la formation"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="frais" class="col-sm-2 col-form-label">Frais</label>
            <div class="col-sm-10">
                <textarea name="frais" class="form-control" id="frais" cols="30" rows="10"
                    placeholder="Frais de la formation"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="statut" class="col-sm-2 col-form-label">Statut</label>
            <div class="col-sm-10">
                <textarea name="statut" class="form-control" id="statut" cols="30" rows="10"
                    placeholder="Statut de la formation"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="inscription" class="col-sm-2 col-form-label">Inscription</label>
            <div class="col-sm-10">
                <textarea name="inscription" class="form-control" id="inscription" cols="30" rows="10"
                    placeholder="Etapes de l'inscription"></textarea>
            </div>
        </div>
        <input type="submit" value="Modifier la formation">
    </form>
</div>
@endsection

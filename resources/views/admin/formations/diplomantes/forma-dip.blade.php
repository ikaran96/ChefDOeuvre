@extends('pole.layout')
@section('content')
<a href="/admin"><i class="fas fa-arrow-left"></i></a>
<h2 class="name-page">Formations diplômantes</h2>
<div class="add-formation">
    <a href="{{route('diplomantes.create')}}"><i class="fas fa-plus-circle"></i> Ajouter une nouvelle formation
        diplômante</a>
</div>
<x-message />
<section id="formations-section">
    @foreach($diplomantes as $diplomante)
    <div class="card-container">
        <div class="card-wrapper">
            <div class="name-content">
                <h2>{{$diplomante->name}}</h2>
            </div>
            <div class="buttons-content">
                <div id="modif-button" class="button-element">
                    <i class="fas fa-pencil-alt"></i><a href="{{route('diplomantes.edit',$diplomante->id)}}">
                        Modifier</a>
                </div>
                <div id="voir-button" class="button-element">
                    <i class="fas fa-eye"></i> <a id="voir-button" href="">Voir</a>
                </div>
                <div id="supp-button" class="button-element">
                    <i class="fas fa-trash-alt"></i> <a onclick="event.preventDefault();
                            if(confirm('Etes-vous sûr(e) de vouloir supprimer cette formation ?')){
                                document.getElementById('form-delete-{{$diplomante->id}}').submit()
                }" href="">Supprimer</a>
                </div>
                <form style="display:none" id="{{'form-delete-'.$diplomante->id}}" method="POST"
                    action="{{route('diplomantes.destroy', $diplomante->id)}}">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
    @endforeach



</section>
@endsection

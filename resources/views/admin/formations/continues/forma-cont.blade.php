@extends('pole.layout')
@section('content')
<a href="/admin"><i class="fas fa-arrow-left"></i></a>
<h2 class="name-page">Formations continues</h2>
<div class="add-formation">
    <a href="{{route('continues.create')}}"><i class="fas fa-plus-circle"></i> Ajouter une nouvelle formation
        continue</a>
</div>
<x-message />

<section id="formations-section">
    @foreach($continues as $continue)

    <div class="card-container">
        <div class="card-wrapper">
            <div class="name-content">
                <h2>{{$continue->name}}</h2>
            </div>
            <div class="buttons-content">
                <div id="modif-button" class="button-element">
                    <i class="fas fa-pencil-alt"></i><a href="{{route('continues.edit',$continue->id)}}"> Modifier</a>
                </div>
                <div id="voir-button" class="button-element">
                    <i class="fas fa-eye"></i> <a id="voir-button" href="">Voir</a>
                </div>
                <div id="supp-button" class="button-element">
                    <i class="fas fa-trash-alt"></i> <a onclick="event.preventDefault();
                            if(confirm('Etes-vous sûr(e) de vouloir supprimer cette formation ?')){
                                document.getElementById('form-delete-{{$continue->id}}').submit()
                }" href="">Supprimer</a>
                </div>
                <form style="display:none" id="{{'form-delete-'.$continue->id}}" method="POST"
                    action="{{route('continues.destroy', $continue->id)}}">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
    @endforeach



</section>
@endsection

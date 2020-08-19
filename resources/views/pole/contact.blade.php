@extends('pole.layout')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                    <center>
                        <h2 style="color:#E30043">Contact</h2>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="partner tata">
        <form action="#" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Votre nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Votre réponse">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Votre prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Votre réponse">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Votre adresse Mail</label>
                <input type="email" class="form-control" id="mail" placeholder="Votre réponse">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Je suis intéressé(e) par</label>
                <select class="form-control" id="stage">
                    <option>EGC (BAC +3)</option>
                    <option>ISCEE (BAC +3)</option>
                    <option>NEGOVENTIS</option>
                    <option>IFAG</option>
                    <option>Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nature des études actuelles</label>
                <select class="form-control" id="stage">
                    <option>Brevet</option>
                    <option>Terminale</option>
                    <option>BAC</option>
                    <option>BAC+2</option>
                    <option>BAC+3</option>
                    <option>Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Objet</label>
                <input type="text" class="form-control" id="nom-projet" placeholder="Votre réponse">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Votre message</label>
                <textarea class="form-control" id="descr-projet" rows="3"></textarea>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">J'accepte que les informations saisies soient
                    utilisées pour me recontacter.</label>
            </div>
            <button type="submit" class="btn btn-danger">Envoyer</button>
        </form>
    </div>
@endsection
@extends('template')

@section('titre')
    Account
@endsection

@section('contenu')
<div class="container-fluid">
    <section class="row">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nom</label>
                  <input type="text" name="nom" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Prenom</label>
                  <input type="text" name="prenom" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">E-Mail</label>
                  <input type="email" name="email" class="form-control" id="inputAddress" placeholder="azerty@yahoo.fr">
                </div>
                <form class="row g-3">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Pseudo</label>
                      <input type="text" name="pseudo" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Date de naissance</label>
                      <input type="Date" name="date" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Addresse </label>
                      <input type="text" name="adresse" class="form-control" id="inputAddress2" placeholder=" Rue , numéro">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Ville</label>
                      <input type="text" name="ville" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-2">
                      <label for="inputZip" class="form-label">CP</label>
                      <input type="number" name="cp" class="form-control" id="inputZip">
                    </div>
                    <div class="col-md-4">
                      <label for="inputState" class="form-label">Sexe</label>
                      <select id="inputState" name="sexe" class="form-select">
                        <option selected>Homme</option>
                        <option>Femme</option>
                        <option>Autre</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Mot de Passe</label>
                      <input type="password" name="password" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Répète Mot de Passe</label>
                      <input type="password" name="passwordConfirm" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                  </form>
        </section>
    </section>
</div>
@endsection

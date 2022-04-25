@extends('template')

@section('titre')
    Login
@endsection

@section('contenu')

<div class="container-fluid">
    <section class="row">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="nix">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mot de Passe</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                 <a href="{{URL('register')}}"><label class="form-check-label" for="exampleCheck1">Sign up</label></a>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </section>
    </section>
</div>
@endsection

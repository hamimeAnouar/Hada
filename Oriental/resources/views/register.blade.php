@extends('master')
@section("content")
    <div class="container logincostum">
        <div class="row">
            <div class="col-sm-4 offset-sm-4">
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom d'utilisateur</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nom d'utilisateur">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Addresse Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary">S'enregister</button>
                  </form>
            </div>
        </div>
    </div>
@endsection

<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total= ProductController::cartItem(); 
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary" >
    <div class="container-fluid">
      <a class="navbar-brand" href="/">ORIENTAL GROUP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mescommandes">Commandes</a>
          </li>
        </ul>
        <div class="search-tab">
        <form action="/search" class="d-flex" role="search">
          <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Rechercher</button></div>
        </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/cartlist" class="vitesse">Cart({{$total}})</a></li>
            @if(Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/logout">Se déconnecter</a></li>
              </ul>
            </li>
            @else
            <li><a href="/login" class="login-button" >Se connecter</a></li>
            <li><a href="/register" class="register-button">S'enregister</a></li>
            @endif
          </ul>
        </form>
      </div>
    </div>
  </nav>
  <style>
    a{
    padding-right: 16px;
} /*
.login-button , .register-button
 {
  background-color: #009970;
  color : #fff;
  font-size: 14px;
  padding: 8px 20px;
  border-radius : 50px;
  text-decoration: none;
  transition : 0.3s background-color;
}
.login-button:hover{
  background-color: #00b383;
}*/

/* GPT */
/* Navigation Bar Styles */
nav.navbar {
    background-color: #f8f9fa !important;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1) !important;
}

.navbar-brand {
    color: #009970 !important;
    font-size: 24px !important;
}

.navbar-toggler-icon {
    border-color: #009970 !important;
}

.navbar-nav .nav-link {
    color: #000 !important;
    font-size: 16px !important;
    padding: 12px 20px !important;
    transition: color 0.3s ease-in-out !important;
}

.navbar-nav .nav-link:hover {
    color: #009970 !important;
}

.search-box {
    border-color: #009970 !important;
}

.btn-outline-success {
    color: #009970 !important;
    border-color: #009970 !important;
}

.btn-outline-success:hover {
    color: #fff !important;
    background-color: #009970 !important;
}

/* User Buttons Styles */
.login-button,
.register-button , .vitesse {
    background-color: #009970 !important;
    color: #fff !important;
    font-size: 14px !important;
    padding: 8px 20px !important;
    border-radius: 50px !important;
    text-decoration: none !important;
    transition: background-color 0.3s ease-in-out !important;
}

.login-button:hover {
    background-color: #00b383 !important;
}


</style>
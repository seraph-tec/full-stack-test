@extends('layouts.app')

@section('menu-superior')
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" data-toggle="affix">
    <div class="container-fluid">
        <img src="img/seraph-logo.png">
        <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Lorem ipsum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lorem ipsum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lorem ipsum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lorem ipsumn</a>
                </li>
            </ul>
            <div class="nav navbar-nav flex-row justify-content-center flex-nowrap">
                <button class="btn btn-secondary my-2 my-sm-0 btn-lg" type="button" ng-click="openComponentModal()">Abrir Formulário</button>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('primeiro-bloco')
<div class="row-fluid h-100 d-flex align-items-center justify-content-center landing-background-green">
    <div class="bloco starter-template">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p class="lead">consectetur adipiscing elit.</p>
        <div class="flex-row justify-content-center flex-nowrap">
            <button class="btn btn-secondary my-2 my-sm-0 btn-lg" type="button" ng-click="goToForm()">Formulário</button>
        </div>
    </div>
</div>
@endsection

@section('segundo-bloco')
<div class="row-fluid landing-background-pink">
    <div class="starter-template">
        <h1>Lorem ipsum dolor sit amet</h1>
    </div>
</div>

<div class="row-fluid landing-background-pink">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div ng-repeat="image in getImages track by $index" ng-class="$index == 0 ? 'carousel-item active' : 'carousel-item'">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3" ng-repeat="card in image track by $index">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="<%card.url%>" data-holder-rendered="true">
                                <div class="card-body">
                                    <p class="card-text"><%card.title%></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br /><br /><br />
@endsection

@section('terceiro-bloco')
<div class="row-fluid landing-background-green">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="starter-template">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p class="lead">consectetur adipiscing elit.</p>
                    <p class="lead">consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-6" id="contactForm">
                <div class="alert alert-dark" role="alert">
                    <div class="starter-template">
                        <h2>Formulário</h2>
                    </div>
                    <form name="contactForm" method="post" autocomplete="off" ng-submit="sendForm()" novalidate>
                        <div class="form-group">

                            <label for="firstName">First Name</label>
                            <input ng-model="contact.firstName" name="firstName" type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            <br />
                            <label for="lastName">Last Name</label>
                            <input ng-model="contact.lastName" type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                            <br />
                            <label for="country">Country</label>
                            <select ng-model="contact.country" class="form-control" id="country" required >
                                <option ng-repeat="country in countries" value="<% country.sigla %>"><% country.nome %></option>
                            </select>
                            <br />
                            <label for="street">Street</label>
                            <input type="text" ng-model="contact.street" class="form-control" id="street" placeholder="Street" required>
                            <br />
                            <label for="city">City</label>
                            <input type="text" ng-model="contact.city" class="form-control" id="city" placeholder="City" required>
                            <br />
                            <label for="emailAddress">Email Address</label>
                            <input type="email" ng-model="contact.emailAddress" class="form-control" id="emailAddress" placeholder="Email Address" required>
                            <br />
                            <label for="state">State</label>
                            <select ng-model="contact.state" class="form-control" id="state" required >
                                <option ng-repeat="state in states" value="<% state.sigla %>"><% state.nome %></option>
                            </select>
                            <br />
                            <label for="mobilePhoneNumber">Mobile Phone Number</label>
                            <input ng-model="contact.mobilePhoneNumber" type="text" class="form-control" id="mobilePhoneNumber" placeholder="Mobile Phone Number" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer class="footer footer-col">
    <div class="container">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://www.seraph.com.br/"> Seraph</a>
        </div>
        <!-- Copyright -->
    </div>
</footer>
@endsection



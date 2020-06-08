<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data ["judul"]; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/mdb.css">

</head>
<body>
<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-light lighten-4 ">
  <div class="container">
    <a class="navbar-brand" href="<?= BASEURL?>/home/">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL?>/home/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/home/dashboard">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">contact us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <a href="" class="btn purple-gradient shadow btn-rounded mb-2" data-toggle="modal" data-target="#modalLoginForm">Sign in</a>
        </form>
      </div>
  </div>
</nav>


<!-- modal -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <!--Form without header-->
      <div class="card">

        <div class="card-body mx-4">
          <form action="<?= BASEURL;?>/home/masuk" method="POST">
              <!--Body-->
            <div class="md-form">
              <input type="text" name="email-username" id="Form-email1" class="form-control">
              <label for="Form-email1">Your email</label>
            </div>

            <div class="md-form pb-3">
              <input type="password" id="Form-pass1" name="password" class="form-control">
              <label for="Form-pass1">Your password</label>
              <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
                  Password?</a></p>
            </div>

            <div class="text-center mb-3">
              <button type="submit" class="btn purple-gradient btn-block btn-rounded z-depth-1a">Sign in</button>
            </div>
            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:</p>

            <div class="row my-3 d-flex justify-content-center">
              <!--Facebook-->
              <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i
                  class="fab fa-facebook-f blue-text text-center"></i></button>
              <!--Twitter-->
              <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i
                  class="fab fa-twitter blue-text"></i></button>
              <!--Google +-->
              <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i
                  class="fab fa-google-plus-g blue-text"></i></button>
            </div>
          </form>
          
        </div>
      </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="<?= BASEURL?>/home/register"
              class="blue-text ml-1"> Sign Up</a></p>
        </div>
    </div>
  </div>
</div>

		<?php Flasher::flash() ?>


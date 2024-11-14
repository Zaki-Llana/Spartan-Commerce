@extends('layouts.front')

@section('meta')
<meta name="description" content="Spartan Commerce is an eCommerce platform offering quality products at affordable prices.">
@endsection

@section('title')

@endsection

@section('style')
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "League Spartan", sans-serif;
    }  
    #hero {
    background-image: url(https://th.bing.com/th/id/OIP.EPNNa5m6VV5DCBj8HUumWwHaEO?rs=1&pid=ImgDetMain);
    width: 100%;
    height: 100vh;
    background-size: cover;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: 80px 80px 0; /* Added top padding */
    }
    #hero h4 {
    padding-bottom: 15px;
    font-size: 40px;
    }
    #hero h2{
    font-size: 70px;

    }
    #hero h1 {
    color: #088178;
    font-size: 70px;

    }
    #hero button {
    background-color: transparent;
    background-image: url(images/button.png);
    background-repeat: no-repeat;
    background-size: cover;
    width: 260px;
    height: 60px;
    border: 0;
    cursor: pointer;
    font-size: 20px;
    font-weight: 700;
    color: #088178;
    padding: 14px 65px 14px 65px;
    }


    #banners {
    margin: 0 60px;
    }
    #banners h2,
    h4,
    span {
    color: rgb(248, 248, 248);
    }
    #banners .big-banners {
    display: flex;
    align-items: center;
    justify-content: center;
    }
    #banners .big-banners div {
    min-width: 575px;
    margin: 15px;
    height: 300px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: 25px;
    background-size: cover;
    backdrop-filter: blur(8%);
    }
    #banners .big-banners button {
    margin-top: 20px;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 500;
    background-color: transparent;
    color: rgb(248, 248, 248);
    border: 1px solid rgb(248, 248, 248);
    cursor: pointer;
    transition: 0.3s ease;
    }
    #banners .big-banners div:hover button {
    background-color: #088178;
    border: 1px solid #088178;
    }
    #banners .big-banners-1 {
    background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
    }
    #banners .big-banners-2 {
    background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
    }
    #banners .small-banners-1 {
    background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
    }
    #banners .small-banners-2 {
    background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
    }
    #banners .small-banners-3 {
    background-image: url(https://th.bing.com/th?id=OIF.HZHx7QcCxqpRS%2bT%2fcgz4Ow&rs=1&pid=ImgDetMain);
    }
    #banners .small-banners {
    display: flex;
    align-items: center;
    justify-content: center;
    }
    #banners .small-banners div {
    min-width: 370px;
    height: 200px;
    margin: 15px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    padding: 25px;
    background-size: cover;
    }
    #banners .small-banners h2 {
    font-size: 25px;
    }
    #banners .small-banners h5 {
    color: #771818;
    }

    
</style>
@endsection

@section('content')
<header>

    <main>
      <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>save more coupons & up to 70% off!</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#loginModal">Shop now</button>

      </section>

     
      <!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Existing Laravel Login Form -->
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required autofocus>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="remember" id="remember">
              <label class="form-check-label" for="remember">Remember Me</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="mt-3">
          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              Forgot Your Password?
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection


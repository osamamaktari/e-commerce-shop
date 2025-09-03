@extends('layouts.app')

@section('title', 'About - ShopTec')

@section('content')
<section class="register">
<form action="">
<h3>New User</h3>
<input class="box" id="" name="" placeholder="Enter your name" type="text"/>
<input class="box" id="" name="" placeholder="Enter your email" type="email"/>
<input class="box" id="" name="" placeholder="Enter a password" type="password"/>
<input class="box" id="" name="" placeholder="Repeat password" type="password"/>
<input class="btn" type="submit" value="Register"/>
<p>Already registered?</p>
<div class="btn link" id="acceso-registro">Login</div>
</form>
</section>


@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('template/js/script.js') }}"></script>
@endsection

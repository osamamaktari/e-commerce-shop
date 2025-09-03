@extends('layouts.app')

@section('title', 'About - ShopTec')

@section('content')

<section class="about">
    <div class="image">
        <img src="{{ asset('template/images/about-img.png') }}" alt="About Us" />
    </div>
    <div class="content">
        <h3>Our History</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam modi ea fuga quibusdam fugiat porro doloremque, quas dignissimos culpa unde. Recusandae maxime aliquam beatae reiciendis, facilis voluptatum eligendi nesciunt ipsa?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, distinctio et? Odio voluptatum eius reprehenderit saepe quisquam excepturi molestiae architecto.</p>
        <a href="#" class="btn">Read More</a>
    </div>
</section>

<section class="faq">
<h1 class="heading"> questions and <span>answers</span> </h1>
<div class="accordion-container">
<div class="accordion">
<div class="accordion-heading">
<h3>how to make an online purchase?</h3>
<i class="fas fa-angle-down"></i>
</div>
<p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
</div>
<div class="accordion">
<div class="accordion-heading">
<h3>how to pay?</h3>
<i class="fas fa-angle-down"></i>
</div>
<p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
</div>
<div class="accordion">
<div class="accordion-heading">
<h3>is online payment secure?</h3>
<i class="fas fa-angle-down"></i>
</div>
<p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
</div>
<div class="accordion">
<div class="accordion-heading">
<h3>How to contact the service center?</h3>
<i class="fas fa-angle-down"></i>
</div>
<p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
</div>
</div>
</section>



@endsection

@section('scripts')
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('template/js/script.js') }}"></script>
@endsection

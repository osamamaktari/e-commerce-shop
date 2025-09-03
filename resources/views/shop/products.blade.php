@extends('layouts.app')

@section('title', 'Products - ShopTec')

@section('content')

<section class="category">
    <h1 class="heading">shop by <span>category</span></h1>
    <div class="box-container">
        <a class="box" href="#"><img src="{{ asset('template/images/cat_img1.png') }}" alt="" /><h3>smartTV</h3></a>
        <a class="box" href="#"><img src="{{ asset('template/images/cat_img2.png') }}" alt="" /><h3>smartphones</h3></a>
        <a class="box" href="#"><img src="{{ asset('template/images/cat_img3.png') }}" alt="" /><h3>headphones</h3></a>
        <a class="box" href="#"><img src="{{ asset('template/images/cat_img4.png') }}" alt="" /><h3>smartwatches</h3></a>
        <a class="box" href="#"><img src="{{ asset('template/images/cat_img5.png') }}" alt="" /><h3>games</h3></a>
        <a class="box" href="#"><img src="{{ asset('template/images/cat_img6.png') }}" alt="" /><h3>cameras</h3></a>
    </div>
</section>

<section class="products">
    <h1 class="heading">our <span>products</span></h1>

    <!-- smartTV -->
    <div class="carrusell-product swiper">
        <h2 class="heading-2">smartTV</h2>
        <div class="box-container swiper-wrapper">
            @for ($i = 1; $i <= 7; $i++)
                <div class="box swiper-slide">
                    <div class="image">
                        <img class="main-img" src="{{ asset('template/images/product-tv-' . $i . (($i == 2) ? '.webp' : (($i == 3 || $i >= 4) ? '.jpg' : '.png'))) }}" alt="" />
                        <img class="hover-img" src="{{ asset('template/images/product-tv-' . $i . '-hover.' . (($i == 2) ? 'webp' : (($i == 3 || $i >= 4) ? 'jpg' : 'webp'))) }}" alt="" />
                        <div class="icons">
                            <a class="fas fa-shopping-cart" href="#"></a>
                            <a class="fas fa-search-plus" href="#"></a>
                            <a class="fas fa-heart" href="#"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>smartTV {{ $i==4 ? '4K' : '8K' }}</h3>
                        <div class="price">
                            ${{ 180000 + ($i >= 6 ? 20000 : 0) }}
                            {!! $i >= 6 ? '<span>$200.000</span>' : '' !!}
                        </div>
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- smartphones -->
    <div class="carrusell-product swiper">
        <h2 class="heading-2">smartphones</h2>
        <div class="box-container swiper-wrapper">
            @for ($i = 3; $i <= 7; $i++)
                <div class="box swiper-slide">
                    <div class="image">
                        <img class="main-img" src="{{ asset('template/images/product-phone-'.$i.(($i==3) ? '.jpg' : ($i>=5 ? '.jpg' : '.webp'))) }}" alt="" />
                        <img class="hover-img" src="{{ asset('template/images/product-phone-'.$i.'-hover.'.($i>=5 ? 'jpg' : 'webp')) }}" alt="" />
                        <div class="icons">
                            <a class="fas fa-shopping-cart" href="#"></a>
                            <a class="fas fa-search-plus" href="#"></a>
                            <a class="fas fa-heart" href="#"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>smartphones</h3>
                        <div class="price">
                            ${{ 130000 }} {!! $i >= 5 ? '<span>$150.000</span>' : '' !!}
                        </div>
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Headphones -->
    <div class="carrusell-product swiper">
        <h2 class="heading-2">Headphones</h2>
        <div class="box-container swiper-wrapper">
            @for ($i = 1; $i <= 4; $i++)
                <div class="box swiper-slide">
                    <div class="image">
                        <img class="main-img" src="{{ asset('template/images/product-au-'.$i.(($i==3) ? '.png' : '.jpg')) }}" alt="" />
                        <img class="hover-img" src="{{ asset('template/images/product-au-'.$i.'-hover.jpg') }}" alt="" />
                        <div class="icons">
                            <a class="fas fa-shopping-cart" href="#"></a>
                            <a class="fas fa-search-plus" href="#"></a>
                            <a class="fas fa-heart" href="#"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Headphones</h3>
                        <div class="price">$24.000</div>
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<section class="product-banner">
    <h1 class="heading"><span>Offer</span> of the day</h1>
    <div class="box-container">
        <div class="box">
            <img src="{{ asset('template/images/product-banner-1.jpg') }}" alt="" />
            <div class="content">
                <span>special offer</span>
                <h3>50% discount</h3>
                <a class="btn" href="#">shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="{{ asset('template/images/product-banner-2.jpg') }}" alt="" />
            <div class="content">
                <span>special offer</span>
                <h3>50% discount</h3>
                <a class="btn" href="#">shop now</a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="{{ asset('template/js/script.js') }}"></script>
@endsection

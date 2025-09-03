

@extends('layouts.app')

@section('title', 'Home - ShopTec')

@section('content')

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('template/images/inicio-img1.webp') }}" alt="" />
                    </div>
                    <div class="content">
                        <h3>Samsung S21</h3>
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('template/images/inicio-img2.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <h3>PlayStation 5</h3>
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="{{ asset('template/images/inicio-img3.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <h3>Smart TV 43&quot; UHD 8K</h3>
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="banner">
        <div class="box-container">
            <a href="#" class="box">
                <img src="{{ asset('template/images/banner-1.jpg') }}" alt="" />
                <div class="content">
                    <span>Special Offer</span>
                    <h3>50% Off</h3>
                </div>
            </a>

            <a href="#" class="box">
                <img src="{{ asset('template/images/banner-2.jpg') }}" alt="" />
                <div class="content">
                    <span>Special Offer</span>
                    <h3>50% Off</h3>
                </div>
            </a>

            <a href="#" class="box">
                <img src="{{ asset('template/images/banner-3.jpg') }}" alt="" />
                <div class="content">
                    <span>Special Offer</span>
                    <h3>50% Off</h3>
                </div>
            </a>
        </div>
    </section>

    <section class="arrivals">
        <h1 class="heading">New <span>Arrivals</span></h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{ asset('template/images/articulo-1.webp') }}" class="main-img" alt="" />
                    <img src="{{ asset('template/images/articulo-1-hover.webp') }}" class="hover-img" alt="" />
                </div>
                <div class="content">
                    <h3>UHD Television</h3>
                    <div class="price">$99.000</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('template/images/articulo-2.webp') }}" class="main-img" alt="" />
                    <img src="{{ asset('template/images/articulo-2-hover.jpg') }}" class="hover-img" alt="" />
                </div>
                <div class="content">
                    <h3>Lenovo Laptop</h3>
                    <div class="price">$120.000</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('template/images/articulo-3.jpg') }}" class="main-img" alt="" />
                    <img src="{{ asset('template/images/articulo-3-hover.jpg') }}" class="hover-img" alt="" />
                </div>
                <div class="content">
                    <h3>iPhone 12 Pro Max</h3>
                    <div class="price">$130.000</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('template/images/articulo-4.jpg') }}" class="main-img" alt="" />
                    <img src="{{ asset('template/images/articulo-4-hover.jpg') }}" class="hover-img" alt="" />
                </div>
                <div class="content">
                    <h3>HP Deskjet Multifunction</h3>
                    <div class="price">$249.99</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('template/images/articulo-5.webp') }}" class="main-img" alt="" />
                    <img src="{{ asset('template/images/articulo-5-hover.jpg') }}" class="hover-img" alt="" />
                </div>
                <div class="content">
                    <h3>Xbox Series X</h3>
                    <div class="price">$249.99</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{ asset('template/images/articulo-6.webp') }}" class="main-img" alt="" />
                    <img src="{{ asset('template/images/articulo-6-hover.jpg') }}" class="hover-img" alt="" />
                </div>
                <div class="content">
                    <h3>100&quot; Smart TV Projector</h3>
                    <div class="price">$249.99</div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

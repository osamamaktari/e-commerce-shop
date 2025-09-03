
@extends('layouts.app')

@section('title', 'contact - ShopTec')
@section('content')

		<section class="info-container">
			<div class="box-container">
				<div class="box">
					<i class="fas fa-map"></i>
					<h3>Find Us</h3>
					<p>San Miguel de Tucumán, San Lorenzo 9100</p>
				</div>

				<div class="box">
					<i class="fas fa-envelope"></i>
					<h3>Email</h3>
					<p>shoptec@gmail.com</p>
					<p>shoptec619@gmail.com</p>
				</div>

				<div class="box">
					<i class="fas fa-phone"></i>
					<h3>Phone</h3>
					<p>381-6565-342</p>
					<p>+4545-656-656</p>
				</div>
			</div>
		</section>

		<section class="contact">
			<form action="">
				<h3>Get in Touch</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
					provident nihil non unde, quia magnam quibusdam ad obcaecati nam
					animi?
				</p>
				<div class="inputBox">
					<input type="text" placeholder="Your Name" />
					<input type="email" placeholder="Your Email" />
				</div>
				<div class="inputBox">
					<input type="number" placeholder="Your Number" />
					<input type="text" placeholder="Postal Code" />
				</div>
				<textarea
					name=""
					placeholder="Write a message"
					id=""
					cols="30"
					rows="10"
				></textarea>
				<input type="submit" value="Send Message" class="btn" />
			</form>

			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22606.54855605493!2d-65.20457425522423!3d-26.83015106730849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225c0febbe97db%3A0x65937e9ca09416ef!2sCasa%20Hist%C3%B3rica%20de%20la%20Independencia!5e0!3m2!1ses-419!2sar!4v1642636686779!5m2!1ses-419!2sar"
				width="600"
				height="450"
				style="border: 0"
				allowfullscreen=""
				loading="lazy"
			></iframe>
		</section>

		<section class="newsletter">
			<div class="content">
				<h3>Newsletter</h3>
				<p>Subscribe to stay updated with the latest news.</p>
			</div>

			<form action="">
				<input
					type="email"
					name=""
					placeholder="Enter your email"
					id=""
					class="email"
				/>
				<input type="submit" value="Subscribe" class="btn" />
			</form>
		</section>
@endsection
@section('scripts')
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="{{ asset('template/js/script.js') }}"></script>
@endsection

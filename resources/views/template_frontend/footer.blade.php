	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<a href="index.html" class="logo"><img src="{{ asset('img/logo-alt.png') }}"  alt="" width="280" height="80"></a>
						</div>
						<p>Web Portal PLN adalah sebuah platform online yang dirancang untuk memberikan berbagai layanan dan informasi kepada pelanggan PLN.</p>
						<ul class="contact-social">
							<li><a href="https://www.facebook.com/profile.php?id=100023618383439&mibextid=JRoKGi" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=6282115077337" class="social-whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="https://www.youtube.com/@rzknnd" class="social-youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://www.instagram.com/rizkiananda0000?utm_source=qr&igsh=c3gwazh2cmtsZW9k" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								@foreach ($category_widget as $hasil)
								  <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }} <span>{{ $hasil->posts->count() }}</span></a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								@foreach ($tag as $hasil)
								  <li><a href="#">{{ $hasil->name }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Buletin</h3>
						<div class="newsletter-widget">
							<form>
								<p>Tidak ada keuntungan yang dapat diperoleh dengan mendapatkan keuntungan yang besar.</p>
								<input class="input" name="newsletter" placeholder="Masukkan emailmu">
								<button class="primary-button">Kirim</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="{{ url('/') }}">Beranda</a></li>
						<li><a href="{{ route('blog.list') }}">List Post</a></li>
					</ul>
				</div>
        <div class="col-md-6 col-md-pull-6">
			<div class="footer-copyright">
				Copyright &copy;
				@if (date('Y') == '2024')
					{{ date('Y') }}
				@else
					2024 - {{ date('Y') }}
				@endif
				
                
			</div>
        </div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

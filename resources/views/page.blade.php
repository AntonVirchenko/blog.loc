<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="{{ asset('css/style.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
	<script src = "{{ asset('js/slider.js') }}" defer></script>
</head>
<body>
	<header>
		@section("blockMainInfo")
		<div class = "block__main_info">
			<span class = "text__str">Coming Soon</span><br>
			<span class = "text__substr">goplae.co.uk is coming soon but in the meantime check out this<br> page  and sign up to our newsletter for more information</span><br>
			<form>
				<input type="text" placeholder="Enter email adress" class = "input__email">
				<input type="submit" value ="Sign Up" class = "input__sign_up">
			</form>
		</div>
		@show
		<div class="block__main_nav">
			<ul class = "list__nav">
				<a href="#about__plae"><li><img src="images/circle.png"></li></a>
				<a href="#what__castumers_say"><li><img src="images/circle.png"></li></a>
				<a href="#i__like_that""><li><img src="images/circle.png"></li></a>
				<a href="#range"><li><img src="images/circle.png"></li></a>
				<a href="#why_plae"><li><img src="images/circle.png"></li></a>
				<a href="#table"><li><img src="images/circle.png"></li></a>
				<a href="#footer"><li><img src="images/circle.png"></li></a>
			</ul>
		</div>
	</header>
	<main>
	<a name = "about__plae"><div class = "block__article_and_image"></a>
		<div class="block__article">
			<span class="text__name_block">About Plae</span><br>
			<span class = "text__article">Previously a Designer for Puma and Adidas, Head Designer Ryan Ringholz has started a new revolution in kids trainers. Using technology usually reserved for elite athletes, Plae creates shoes designed especially for a child’s foot. <br>

			Because kids feet are always growing, their shoes should accommodate leaving the cartilage and fledgling bone room to grow its own way. The interchangeable tabs adjust to accommodate thinner, wider or thicker feet and nearly all Plae shoes can fit an AFO orthotic brace.<br>

			With their dynamic traction, little feet can feel the ground beneath them and get a grip on it. The rest is designed to elite athlete standards: super shock absorption, durable toe guards, and wicking, washable anti-microbial inserts.<br>

			With every shoe, Plae sources responsible, recycled, and non-toxic materials, and makes sure manufacturing and labour is fair and child-free.</span>
		</div>
		<div class = "block__image"></div>
	</div>
	<a name="what__castumers_say">
		<div class = "block__article_and_image">
			<div class="block__image_1"></div>
				<div class="block__article_1">			
					<span class="text__name_block">What our customers say</span><br>
					<span class="text__block">
						I like them because they are very comfy and soft inside.<br>They are really light which means I run faster. I like the cool straps that I can change.
					</span>				
				<span>Charlie (age 8)</span>
			</div>
		</div>
	</a>
	<a name="i__like_that"><div class = "block__article_and_image"></a>
		<div class="block__article_2">
			<span class="text__block">
				I like that I can do PE in them<br> because they're so comfy and<br> then after school in the park, the<br> bottoms are grippy so I can<br> climb really well
			</span>
			<span>Edie (age 6)</span>
		</div>
		<div class="block__image_2"></div>
	</div>
	<div class = "block__article_and_image">
		<div class="block__range">
			<a name="range"><span class="text__name_block">The Range</span></a>
			<span class = "text__range">View the styles available now from select stockists</span>
			<div class="block__slider">
				<div class="block__slider_button_prev ">
					<img src="images/button_prev.png" class = "img__button_prev">
				</div>
					<div class="block__slider_images">
						<img src="images/img_slider_1.jpg" class = "img curry">
						<img src="images/img_slider_2.jpg" class = "img">
						<img src="images/img_slider_3.jpg" class = "img">
						<img src="images/img_slider_4.jpg" class = "img">
						<img src="images/img_slider_5.jpg" class = "img">
						<img src="images/img_slider_6.jpg" class = "img">
						<img src="images/img_slider_7.jpg" class = "img">
					</div>
					<div class="block__slider_button_next ">
						<img src="images/button_next.png" class = "img__button_next">
					</div>
				</div>			
			<span class = "text__headline_2">TY</span>
			<span class = "text__slide_number">1 / 7</span>
		</div>
	</div>
	<a name="why_plae"><div class="block__why_plae"></div></a>
	<div class="block__find_us">
		<span class="text__name_block">Where can you find us?</span>
		<span class = "text__block_description">See below our UK stockist list</span>
		<a name="table"><div class="block__table"></a>
			<table class = "table__contact">
				<tr>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
				</tr>
				<tr>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
				</tr>
				<tr>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
					<td>
						Best Foot Forward<br>
						76 Liverpool Road<br>
						Preston<br>
						PR1 0QD<br>
						0208 969 756<br>
						<cite>bestfootforward.co.u</cite>	
					</td>
				</tr>
			</table>
		</div>
		<span class="text__name_block">Like to stock Plae?</span>
		<span class = "text__block_description">Call or email us to send an enquiry</span>
		<div class="block__email_and_number">
			<cite>bestfootforward.co.u</cite>
			<span>07947 301292</span>
		</div>
	</div>
	</main>
	@section('footer')
	<footer>	
		<a name="footer"><div class="block__footer"></a>
			<span class = "text__name_block">Be the first to see goplae.co.uk<br></span>
			<span class = "text__block_description">Sign Up for the latest news</span>
			<form>
				<input type="text" placeholder="Enter email adress" class = "input__email">
				<input type="submit" value ="Sign Up" class = "input__sign_up">
			</form>
		</div>
		<div class="block__last_line">
			<span class = "text__company">Copyright © 2015 Craftymothers ltd. All Rights Reserved</span>
		</div>
	</footer>
	@show
</body>
</html>
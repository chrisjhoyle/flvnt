@extends('layouts.app')

@section('content')

<!-- HEADER -->
<header class="banner header-banner">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<div class="logo-outter top-optc clearfix">
					<a href="#" class="logo">
						<img src="images/logo-01.png" alt="">
					</a>
				</div>
				<div class="header-txt">
					<div class="header-txt-inner">
						<h1 class="top-optc">DISCOVER</h1>
						<h2 class="top-optc">influencers that align with your brand organically      </h2>
						<p class="top-optc">FLVNT is an elite talent agency made up of celebrities, taste-makers and socialites grouped together to bring you access to all influence through real relationships.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12 form-outter visibility">
				<div class="form-content">
					<div class="form-content-inner">
						<p>LOGIN</p>
					</div>
					{!! Form::open(['url' => '/login'], ['id' => 'requestform']) !!}
						<fieldset>
							{{ Form::email('email', '', ['placeholder' => 'email', 'class' => 'form-style', 'required']) }}
						</fieldset>

						<fieldset>
							{{ Form::password('password', ['placeholder' => 'password', 'class' => 'form-style', 'required']) }}
						</fieldset>

						{{Form::submit('LOGIN', ['class' => 'btn'])}}
					{!! Form::close() !!}
					<i class="or">Or</i>
				</div>
				<div class="form-wrapper form-content">
                    <div class="form-content-inner">
						<p>REGISTER</p>
					</div>
					{!! Form::open(['url' => '/register'], ['id' => 'requestform']) !!}
						<fieldset>
							{{ Form::text('name', '', ['placeholder' => 'Full Name', 'class' => 'form-style', 'required']) }}
						</fieldset>

						<fieldset>
							{{ Form::email('email', '', ['placeholder' => 'email', 'class' => 'form-style', 'required']) }}
						</fieldset>

						<fieldset>
							{{ Form::password('password', ['placeholder' => 'password', 'class' => 'form-style', 'required']) }}
						</fieldset>

						<fieldset>
							{{ Form::password('password_confirmation', ['placeholder' => 'confirm password', 'class' => 'form-style', 'required']) }}
						</fieldset>

						{{Form::submit('Register', ['class' => 'btn'])}}
					{!! Form::close() !!}
                    <div class="alert alert-success" role="alert" style=" display:none">Your request has been recieved.</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- END OF HEADER -->

<!-- SECTION LISTING -->
<section class="section-listing">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-heading">
					<h2>FLVNT FEATURED</h2>
				</div>
			</div>
		</div>
		<div class="row list-row">
			<div class="col-sm-6 col-xs-12">
				<div class="property-wrapper">
					<div class="property-img">
						<img src="images/french montana.jpg" alt="" class="img-responsive">
					</div>
					<div class="property-features">
						<ul class="clearfix">
							<li><p>Instagram</p></li>
							<li><p>Twitter </p></li>
							<li><p>Facebook</p></li>
							<li><p>Snapchat</p></li>
						</ul>
					</div>
					<div class="property-name clearfix">
						<div class="name">
							<p>French Montana </p>
							<span>Music Artist | Rapper</span>
						</div>
						<div class="price">
							<p>$$</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="property-wrapper">
					<div class="property-img">
						<img src="images/dj-khaled.jpg" alt="Swaggy P Lakers Influencer" class="img-responsive">
					</div>
					<div class="property-features">
						<ul class="clearfix">
							<li><p>Instagram</p></li>
							<li><p>Twitter</p></li>
							<li><p>Facebook</p></li>
							<li><p>Snapchat</p></li>
						</ul>
					</div>
					<div class="property-name clearfix">
						<div class="name">
							<p>DJ Khaled </p>
							<span>Music Artist | Rapper </span>
						</div>
						<div class="price">
							<p>$$$</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="property-wrapper">
					<div class="property-img">
						<img src="images/swaggyp.jpg" alt="" class="img-responsive">
					</div>
					<div class="property-features">
						<ul class="clearfix">
							<li><p>Instagram </p></li>
							<li><p>Twitter </p></li>
							<li><p>Facebook</p></li>
							<li><p>Snapchat</p></li>
						</ul>
					</div>
					<div class="property-name clearfix">
						<div class="name">
							<p>Nick Young </p>
							<span>NBA Athlete | LA Lakers </span>
						</div>
						<div class="price">
							<p>$$</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="property-wrapper">
					<div class="property-img">
						<img src="images/christina millian.jpg" alt="" class="img-responsive">
					</div>
					<div class="property-features ">
						<ul class="clearfix">
							<li><p>Instagram</p></li>
							<li><p>Twitter </p></li>
							<li><p>Facebook</p></li>
							<li><p>Snapchat</p></li>
						</ul>
					</div>
					<div class="property-name clearfix">
						<div class="name">
							<p>Christina Millian </p>
							<span>Music Artist | Actress </span>
						</div>
						<div class="price">
							<p>$$</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="property-wrapper">
					<div class="property-img">
						<img src="images/bart baker.jpg" alt="" class="img-responsive">
					</div>
					<div class="property-features">
						<ul class="clearfix">
							<li><p>Youtube </p></li>
							<li><p>Intagram </p></li>
							<li><p>Twitter</p></li>
							<li><p>Facebook</p></li>
						</ul>
					</div>
					<div class="property-name clearfix">
						<div class="name">
							<p>Bart Baker </p>
							<span>Youtube Star | Actor </span>
						</div>
						<div class="price">
							<p>$$$</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-xs-12">
				<div class="property-wrapper">
					<div class="property-img">
						<img src="images/Quincy.jpg" alt="" class="img-responsive">
					</div>
					<div class="property-features">
						<ul class="clearfix">
							<li><p>Instagram </p></li>
							<li><p>Twitter </p></li>
							<li><p>Facebook</p></li>
							<li><p>Snapchat</p></li>
						</ul>
					</div>
					<div class="property-name clearfix">
						<div class="name">
							<p>Quincy </p>
							<span>Music Artist | Actor </span>
						</div>
						<div class="price">
							<p>$$</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END OF SECTION LISTING -->

<!-- SECTION BENEFITS -->
<section class="section-benefits banner benefits-bg">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-heading">
					<h2>SOCIAL MARKET</h2>
					</div>
			</div>
		</div>
		<div class="row benefits-row">
			<div class="col-sm-4 col-xs-12">
				<div class="col-xs-12">
					<div class="benefit-outter">
						<div class="small-circle mirror-icon "></div>
						<p>FACEBOOK  </p>
						<span>1.6 billion active users</span>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="benefit-outter">
						<div class="small-circle hands-icon "></div>
						<p>INSTAGRAM </p>
						<span>500 million active users </span>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="ver-height">
					<div class="benefit-outter">
						<div class="big-circle building-icon"></div>
						<p>GLOBAL SOCIAL MEDIA AD SPEND</p>
						<span>Majority of all Ads are shifting to digital with a 40% year over year growth</span>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="col-xs-12">
					<div class="benefit-outter">
						<div class="small-circle car-icon"></div>
						<p>YOUTUBE</p>
						<span>1 billion active users </span>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="benefit-outter">
						<div class="small-circle people-icon"></div>
						<p>TWITTER</p>
						<span>350 million active users</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END OF SECTION BENEFITS -->

<!-- END OF SECTION STRUCTURE -->

<!-- SECTION TESTOMONIAL -->
<section class="section-testimonial">
	<div class="container">
		<div class="row testimonial-row">
			<div class="col-lg-8 col-lg-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
				<div class="testimonial-img-outter">
					<div class="testimonial-img">
						<img src="images/adidas.jpg" alt="" class="img-responsive">
					</div>
				</div>
				<div class="testimonial-content-outter">
					<div class="testimonial-content">
						<p>
							“Fast, effecient and effective working with the team over at FLVNT,  will recommend this to my colleagues ”
						</p>
					</div>
					<div class="testimonial-name">
						<h4>Adam Swartchz</h4>
						<p>(Marketing Director)</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END OF SECTION TESTOMONIAL -->

<!-- SECTION CLIENTS -->
<section class="section-clients">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="section-heading">
					<h2>Our Clients</h2>
				</div>
			</div>
		</div>
		<div class="row clients-row">
			<div class="col-xs-12">
				<div class="client-wrapper">
					<ul class="clearfix">
						<li class="col-xs-4 col-sm-2">
							<img src="images/client1.jpg" alt="" class="img-responsive">
						</li>
						<li class="col-xs-4 col-sm-2">
							<img src="images/client2.jpg" alt="" class="img-responsive">
						</li>
						<li class="col-xs-4 col-sm-2">
							<img src="images/client3.jpg" alt="" class="img-responsive">
						</li>
						<li class="col-xs-4 col-sm-2">
							<img src="images/client4.jpg" alt="" class="img-responsive">
						</li>
						<li class="col-xs-4 col-sm-2">
							<img src="images/client5.jpg" alt="" class="img-responsive">
						</li>
						<li class="col-xs-4 col-sm-2">
							<img src="images/client6.jpg" alt="" class="img-responsive">
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END OF SECTION CLIENTS -->

<!-- SECTION CONTACT -->
<section class="section-contact banner contact-bg">
	<div class="container">
		<div class="row contact-row">
			<div class="col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-12">
				<div class="contact-wrp">
					<div class="section-heading">
						<h2>Contact us</h2>
					</div>
					<div class="form-wrapper">
						<form id="contactform" method="post">
							<fieldset>
								<input type="text" placeholder="Full Name*" class="form-style" name="fullname" required>
							</fieldset>
							<fieldset>
								<input type="text" placeholder="Email*" class="form-style" name="email" required>
							</fieldset>
							<fieldset>
								<input type="text" placeholder="Phone Number*" class="form-style" name="pnumber" required>
							</fieldset>
							<fieldset class="lastchild">
								<select class="form-style" name="state">
									<option selected>State / Province*</option>
									<option value="Alabama">Alabama</option>
									<option value="Alaska">Alaska</option>
									<option value="Arizona">Arizona</option>
									<option value="Arkansas">Arkansas</option>
									<option value="California">California</option>
									<option value="Colorado">Colorado</option>
									<option value="Connecticut">Connecticut</option>
									<option value="Delaware">Delaware</option>
									<option value="District of Columbia">District of Columbia</option>
									<option value="Florida">Florida</option>
									<option value="Georgia">Georgia</option>
									<option value="Hawaii">Hawaii</option>
									<option value="Idaho">Idaho</option>
									<option value="Illinois">Illinois</option>
									<option value="Indiana">Indiana</option>
									<option value="Iowa">Iowa</option>
									<option value="Kansas">Kansas</option>
									<option value="Kentucky">Kentucky</option>
									<option value="Louisiana">Louisiana</option>
									<option value="Maine">Maine</option>
									<option value="Maryland">Maryland</option>
									<option value="Massachusetts">Massachusetts</option>
									<option value="Michigan">Michigan</option>
									<option value="Minnesota">Minnesota</option>
									<option value="Mississippi">Mississippi</option>
									<option value="Missouri">Missouri</option>
									<option value="Montana">Montana</option>
									<option value="Nebraska">Nebraska</option>
									<option value="Nevada">Nevada</option>
									<option value="New Hampshire">New Hampshire</option>
									<option value="New Jersey">New Jersey</option>
									<option value="New Mexico">New Mexico</option>
									<option value="New York">New York</option>
									<option value="North Carolina">North Carolina</option>
									<option value="North Dakota">North Dakota</option>
									<option value="Ohio">Ohio</option>
									<option value="Oklahoma">Oklahoma</option>
									<option value="Oregon">Oregon</option>
									<option value="Pennsylvania">Pennsylvania</option>
									<option value="Rhode Island">Rhode Island</option>
									<option value="South Carolina">South Carolina</option>
									<option value="South Dakota">South Dakota</option>
									<option value="Tennessee">Tennessee</option>
									<option value="Texas">Texas</option>
									<option value="Utah">Utah</option>
									<option value="Vermont">Vermont</option>
									<option value="Virginia">Virginia</option>
									<option value="Washington">Washington</option>
									<option value="West Virginia">West Virginia</option>
									<option value="Wisconsin">Wisconsin</option>
									<option value="Wyoming">Wyoming</option>
								</select>
							</fieldset>
							<input type="submit" value="Submit Now" class="btn">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- END OF SECTION CONTACT -->

@endsection

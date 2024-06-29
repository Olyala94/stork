@extends('layouts.master')
@section('content')
	<div id="summary-wrapper">
		<div class="container">
			<div class="row">
				<div class="summary-content">
						<div class="summary-item">
							<a href="#"><img src="images/summary1.jpg" alt="post"></a>
							<div class="summar-title">
								<span class="number">1</span>
								<a href="#" class="title">5 Helpful Tips for Growing Healthy Succulents</a>
							</div>
						</div><!--summary-item-->
						<div class="summary-item">
							<a href="#"><img src="images/summary2.jpg" alt="post"></a>
							<div class="summar-title">
								<span class="number">2</span>
								<a href="#" class="title">5 Helpful Tips for Growing Healthy Succulents</a>
							</div>
						</div><!--summary-item-->
						<div class="summary-item">
							<a href="#"><img src="images/summary3.jpg" alt="post"></a>
							<div class="summar-title">
								<span class="number">3</span>
								<a href="#" class="title">5 Helpful Tips for Growing Healthy Succulents</a>
							</div>
						</div><!--summary-item-->
						<div class="summary-item">
							<a href="#"><img src="images/summary2.jpg" alt="post"></a>
							<div class="summar-title">
								<span class="number">4</span>
								<a href="#" class="title">5 Helpful Tips for Growing Healthy Succulents</a>
							</div>
						</div><!--summary-item-->
						<div class="summary-item">
							<a href="#"><img src="images/summary1.jpg" alt="post"></a>
							<div class="summar-title">
								<span class="number">5</span>
								<a href="#" class="title">5 Helpful Tips for Growing Healthy Succulents</a>
							</div>
						</div><!--summary-item-->
				</div><!--summary-content-->
			</div>
		</div>
	</div><!--summary-wrapper-->

	<section id="about-page">
		<div class="container">
			<div class="abp-post-wrap">
				<div class="row">
					<figure>
						<img src="images/largeimg.jpg" alt="post">
					</figure>
					<div class="abp-post-content">
							<h3>Get Rid of  Your Backpain with these 3 Simple Exercises</h3>
							<p>Let’s Discover more about yournext destination</p>
							<div class="btn-wrap">
								<a href="#" class="btn-accent btn-pill">Read Full Story</a>
							</div>
					</div><!--abp-post-content-->
				</div>
			</div>
		</div>
	</section>

	<section id="subscribe">
		<div class="container">
			<div class="row">
				<div class="subscribe-content">
					<div class="entry-content">
						<div class="section-header">
							<h2 class="section-title">Subscribe us for more life transforming tips and articles</h2>
							<p>Subscribe us for more life transforming tips</p>
						</div>
						<form id="form">
							<input type="text" name="name" placeholder="Name">
							<input type="text" name="email" placeholder="Email Address">
							<button id="button">Send me the link</button>
						</form>
					</div><!--text-block-->
				</div>
			</div>
		</div>
	</section>

	<section id="popular-stories" class="text-hvr-effect">
		<div class="container">
			<div class="row">
				<h2 class="section-title">Popular Stories</h2>
				<div class="grid">
					<div class="ps-grid-wrap ps-element">
						<div class="ps-grid-item five-col">
							<figure class="effect-zoom-out">
								<img src="images/postimg1.jpg" alt="post">
								<figcaption>
									<div class="title">
										<span>Food and culture</span>
										<h3><a href="#">Looking for an extra push for your workout session</a></h3>
									</div>
									<p>Protein-packed snack like cottage cheese or a protein bar aids. Protein-packed snack like cottage cheese or a protein bar aids</p>
								</figcaption>
							</figure>
						</div><!--story-item-->
						<div class="ps-grid-item seven-col">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/postimg2.jpg" alt="post"></a>
								<figcaption>
									<div class="title">
										<span>Travel guide</span>
										<h3><a href="#">Protein-packed snack like cottage cheese or a protein bar aids</a></h3>
									</div>
									<p>Protein-packed snack like cottage cheese or a protein bar aids. Protein-packed snack like cottage cheese or a protein bar aids</p>
								</figcaption>
							</figure>
						</div><!--ps-grid-item-->
					</div><!--ps-grid-top-item-->

					<div class="ps-grid-wrap">
						<div class="ps-grid-item twelve-col">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/models.jpg" alt="post"></a>
								<figcaption>
									<div class="title">
										<span>Things to do</span>
										<h3><a href="#">Replenish your body with nutrients</a></h3>
									</div>
									<p>Protein-packed snack like cottage cheese or a protein bar aids. Protein-packed snack like cottage cheese or a protein bar aids</p>
								</figcaption>
							</figure>
						</div><!--ps-grid-item-->
					</div>
				</div><!--grid-->
			</div>
		</div>
	</section>

	<section id="feat-post" class="featured-post">
		<div class="container">
			<div class="row">
				<h2 class="section-title">Featured Post</h2>
				<div class="grid">
					<div class="feature-post-item">
						<figure class="effect-zoom-out">
							<a href="#"><img src="images/ftpost.jpg" alt="post"></a>
							<figcaption class="post-header">
								<span class="category">health and fitness</span>
								<h3 class="post-title"><a href="#">7 Signs You’re Burnt out (And How to Bounce Back)</a></h3>
							</figcaption>
						</figure>
					</div><!--ft-post-content-->
					<div class="post-list">
						<ul>
							<li class="list-item">
								<span class="category">Dating and Relationships</span>
								<h3 class="post-title"><a href="#">How 'Weak Ties' Can Strengthen Our Relationships</a></h3>
							</li>
							<li class="list-item">
								<span class="category">Dating and Relationships</span>
								<h3 class="post-title"><a href="#">What It's Really Like to Date While Fat</a></h3>
							</li>
							<li class="list-item">
								<span class="category">Health tips</span>
								<h3 class="post-title"><a href="#">How Often You Should Wash Your Hair</a></h3>
							</li>
							<li class="list-item">
								<span class="category">Health tips</span>
								<h3 class="post-title"><a href="#">How Often You Should Wash Your Hair</a></h3>
							</li>
						</ul>
					</div><!--.post-list-->
				</div>
			</div>
		</div>
	</section>

	<section id="health-tips" class="hrl-tips">
		<div class="container">
			<div class="row">
			<h2 class="section-title">Health & Happiness</h2>
				<div class="layer-vertical-text left-align">Health</div>
				<div class="grid">
					<div class="grid-item top-item">
						<div class="hrl-item">
							<div class="text-block">
								<h3>Get Rid of  Your Backpain with these 3 Simple Exercises</h3>
								<p>Let’s Discover more about yournext destination</p>
								<div class="btn-wrap">
									<a href="#" class="btn-orange btn-pill">Read Full Story</a>
								</div>
							</div>
							<figure class="effect-zoom-out">
								<img src="images/post1.jpg" alt="post">
							</figure>
						</div>
					</div><!--hrl-content-top-->
					<div class="hrl-grid-item bottom-item">
						<div class="hrl-item">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/post2.jpg" alt="post"></a>
							</figure>
							<h4>
								<a href="#">9 Benefits of Napping (Backed by Science)</a>
							</h4>
						</div><!--hrl-item-->
						<div class="hrl-item">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/post3.jpg" alt="post"></a>
							</figure>
							<h4>
								<a href="#">The Real Reason Why You Feel Exhausted (No Matter How Much You Sleep)</a>
							</h4>
						</div><!--hrl-item-->
						<div class="hrl-item">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/post1.jpg" alt="post"></a>
							</figure>
							<h4>
								<a href="#">34 Ways To Live in the Moment And Grow in the Moment</a>
							</h4>
						</div><!--hrl-item-->
					</div><!--tips-content-top-->
				</div><!--grid-->
			</div><!--row-->
		</div>
	</section>

	<section id="love-tips" class="hrl-tips">
		<div class="container">
			<div class="row">
			<h2 class="section-title">Love & Relationship</h2>
			<div class="layer-vertical-text left-align colored">Love</div>
				<div class="grid">
					<div class="grid-item top-item">
						<div class="hrl-item">
							<div class="text-block">
								<h3>Get Rid of  Your Backpain with these 3 Simple Exercises</h3>
								<p>Let’s Discover more about yournext destination</p>
								<div class="btn-wrap">
									<a href="#" class="btn-orange btn-pill">Read Full Story</a>
								</div>
							</div>
							<figure class="effect-zoom-out">
								<img src="images/model.jpg" alt="post" class="largeimg">
							</figure>
						</div>
					</div><!--hrl-content-top-->
					<div class="hrl-grid-item bottom-item">
						<div class="hrl-item">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/relationship1.jpg" alt="post"></a>
							</figure>
							<h4>
								<a href="#">9 Benefits of Napping (Backed by Science)</a>
							</h4>
						</div><!--hrl-item-->
						<div class="hrl-item">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/relationship2.jpg" alt="post"></a>
							</figure>
							<h4>
								<a href="#">The Real Reason Why You Feel Exhausted (No Matter How Much You Sleep)</a>
							</h4>
						</div><!--hrl-item-->
						<div class="hrl-item">
							<figure class="effect-zoom-out">
								<a href="#"><img src="images/relationship3.jpg" alt="post"></a>
							</figure>
							<h4>
								<a href="#">34 Ways To Live in the Moment And Grow in the Moment</a>
							</h4>
						</div><!--hrl-item-->
					</div><!--tips-content-top-->
				</div><!--grid-->
			</div><!--row-->
		</div>
	</section>

	<section class="featured-post">
		<div class="container">
			<div class="row">
				<h2 class="section-title">Featured Post</h2>
				<div class="grid">
					<div class="feature-post-item">
						<figure class="effect-zoom-out">
							<a href="#"><img src="images/ftpost.jpg" alt="post"></a>
							<figcaption class="post-header">
								<span class="category">health and fitness</span>
								<h3 class="post-title"><a href="#">7 Signs You’re Burnt out (And How to Bounce Back)</a></h3>
							</figcaption>
						</figure>
					</div><!--ft-post-content-->
					<div class="post-list bg-colored">
						<ul>
							<li class="list-item">
								<span class="category">Dating and Relationships</span>
								<h3 class="post-title"><a href="#">How 'Weak Ties' Can Strengthen Our Relationships</a></h3>
							</li>
							<li class="list-item">
								<span class="category">Dating and Relationships</span>
								<h3 class="post-title"><a href="#">What It's Really Like to Date While Fat</a></h3>
							</li>
							<li class="list-item">
								<span class="category">Health tips</span>
								<h3 class="post-title"><a href="#">Benefits to Having Much Older Friends</a></h3>
							</li>
							<li class="list-item">
								<span class="category">Health tips</span>
								<h3 class="post-title"><a href="#">How Often You Should Wash Your Hair</a></h3>
							</li>
						</ul>
					</div><!--.post-list-->
				</div>
			</div>
		</div>
	</section>

@endsection()


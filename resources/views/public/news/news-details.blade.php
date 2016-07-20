<section id="title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1>News</h1>
					</div>
				</div>
			</div>
		</section>




<section id="testimonials-long">
			<div class="container">

				@forelse($news as $value)
				<div class="row">
					<div class="col-sm-3 col-md-2">
						<!-- <img src="images/testimonial1.jpg" class="img-circle img-responsive" alt="testimonial"/> -->
						 @if(!empty($value['image']))
             				<img src="{!!trans_url('image/sm/'.@$value['image']['efolder'])!!}/{!!@$value['image']['file']!!}" class="img-circle img-responsive" alt="testimonial">
                        @endif
					</div>
					<div class="col-sm-9 col-md-10">
						<blockquote>
							<p>{{$value->title}}</p>
							<footer>
								{{$value->description}}
							</footer>
						</blockquote>


						<a href="{{trans_url('/news')}}/{{@$value['slug']}}">View Details</a>
					
					</div>					
				</div>

				<div class="row">
					<div class="col-sm-12">
						<hr>
					</div>
				</div>
					@empty
                    @endif
				</div>
		</section>
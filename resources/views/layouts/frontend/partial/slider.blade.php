
<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			@foreach($sliders as $key=>$slider)
			<li data-target="#myCarousel" data-slide-to="{{ $loop->index }}" class="{{ $slider->id ? 'active':'' }}"></li>
			@endforeach
		</ol>
		<div class="carousel-inner" role="listbox">
			@foreach($sliders as $key=>$slider)
			<div class="item {{ $loop->first ? 'active' : '' }}">
				<div class="container">
					<div class="carousel-caption">
						<h3><span>{{$slider->title}}</span></h3>
						<p>{{$slider->sub_title}}</p>
						<a class="button2" href="product.html">Comprar Ahora</a>
					</div>
				</div>
			</div>
           @endforeach
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>



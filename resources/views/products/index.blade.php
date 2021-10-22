@extends('layouts.app')

@section('content')

	<div class="products">
		@foreach($products as $product)
		@if($product->feature == true)
			<style>.product-body{border:3px solid black;}</style>
		@endif
		

			<a class="product-row no-link" href="{{ route('products.show', $product) }}">
				<img src="{{ url($product->image ?? 'img/placeholder.jpg') }}" alt="{{ $product->title }}" class="rounded">
				<div class="product-body">
					<div>

						<h5 class="product-title"><span>{{ $product->title }}</span><em>&euro;{{ $product->price }}</em></h5>
						@unless(empty($product->description))
							<p>{{ $product->description }}</p>
						@endunless
						<div class="korting">
							@if($product->discount > 0)
								<p>nu <b>{{ $product->discount }}%</b> korting de originele prijs was <em>&euro;{{ $product->ogprice }}</em></p>
							@endif
						</div>
	

					</div>
					<button class="btn btn-primary">Meer info &amp; bestellen</button>
				</div>
			</a>

		@endforeach
	</div>

@endsection
@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
	@foreach($products->chunk(3) as $productChunk)

		<div class="row">
			@foreach($productChunk as $product)   
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="{{$product->imagePath}}" alt="..." class="img-responsive">
						<div class="caption">
							<h3>{{$product->title}}</h3>
							<p class= "description">{{$product->description}}</p>
							<div class="clearfix">
								<div class="pull-left price">
									{{$product->price}} R$
								</div>

								<a href="{{route('product.addToCart',['id' => $product->id])}}"> <button type="button" class="btn btn-success pull-right">Add to Cart</button></a>
               
							</div>
						</div>
					</div>    
				</div>
			@endforeach
		</div>
	@endforeach
@endsection

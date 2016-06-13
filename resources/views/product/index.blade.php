@extends('default')

@section('content')
  <div class="products">
    <div class="row">
  @foreach ($products as $index => $product)

        @if($index % 3 === 0)
          </div>
          <div class="row">
        @endif

        <div class='col-md-4 product'>
          <div class="thumbnail">
            <img src="{{$product->image}}">
            <div class="title">{{$product->title}}<span class="price">{{$product->price}}</span></div>
            <a href="#" class="view-more">View more</a>
          </div>
        </div>

  @endforeach
    </div>
  </div>

  {!! $products->render() !!}
@endsection

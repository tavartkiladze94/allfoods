@extends('main.layout')
@section('title','store')
@section('content')

<section class="product-details spad">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6">
<div class="product__details__pic">
<div class="product__details__pic__item">
<img class="product__details__pic__item--large" src="{{ asset('assets/images/foods').'/'.$foodinfo->file_name }}" alt>
</div>

</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="product__details__text">
<h3>
    @if(session('locale') == 'ka')
            {{ $foodinfo->name_ka}}
        @elseif(session('locale') == 'en')
            {{ $foodinfo->name_en}}
        @elseif(session('locale') == 'ru')
            {{ $foodinfo->name_ka}}
    @endif</h3>
<div class="product__details__rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-half-o"></i>
<!-- <span>({{$foodinfo->view}} ნახვა)</span> -->
</div>

<div class="product__details__price">
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.foods.ishove.ge/main/food/{{ $foodinfo->code}}" target="_blank">
     <img src="{{ asset('assets/img/share.png')}}" style="width:80px;height:25px;"/>
</a>
</div>
<div class="product__details__price">{{ $foodinfo->category }}</div>

<div class="product__details__quantity">
<br>
<h5> <b>{{__('all.Ingredients')}} : </b> 
@if(!empty($foods_ings)) 
   @foreach ($foods_ings as $foods_ings_item)
    <span class="ing_a" style="background-color: #7fad39; color:white;" >
        @if(session('locale') == 'ka')
            {{ $ingredient_all[$foods_ings_item->ingredient_id-1]->ingredient_ka}}
        @elseif(session('locale') == 'en')
            {{ $ingredient_all[$foods_ings_item->ingredient_id-1]->ingredient_en}}
        @elseif(session('locale') == 'ru')
            {{ $ingredient_all[$foods_ings_item->ingredient_id-1]->ingredient_ru}}
        @endif
        </span>
   @endforeach
@endif
</div>
</div>
</div>
<div class="col-lg-12">
<div class="product__details__tab">
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">{{__('all.Description')}}</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tabs-1" role="tabpanel">
<div class="product__details__tab__desc">
{!! html_entity_decode($foodinfo->description) !!}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection

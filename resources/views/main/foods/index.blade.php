@extends('main.layout')
@section('title',__('all.Food'))
@section('content')

<section class="product spad">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-5">
<div class="sidebar">
<h4>{{__('all.Ingredients')}} </h4>
<div class="sidebar__item" style="overflow-y: scroll;">
    @if(!empty($ingredient_all)) 
        @foreach ($ingredient_all as $foods_ingredients_item)
    		<span class="ing_a"  id="{{ $foods_ingredients_item->id }}" onclick="init(this.id)">
            @if(session('locale') == 'ka')
                {{ $foods_ingredients_item->ingredient_ka}}
            @elseif(session('locale') == 'en')
                {{ $foods_ingredients_item->ingredient_en}}
            @elseif(session('locale') == 'ru')
                {{ $foods_ingredients_item->ingredient_ru}}
            @endif 
            </span>
        @endforeach
    @endif

</div>



</div>
</div>
<div class="col-lg-9 col-md-7">

<div class="filter__item">
<div class="row">

<div class="col-lg-4 col-md-4">
<div class="filter__found">
<h1 style="color: black!important; font-size:25px;font-weight:700;"> {{__('all.Result')}} : <span id="result_n">{{ count($foods) }}</span></h6>

</div>
</div>

</div>
</div>
<div class="row" id="foods_list">
@if(!empty($foods)) 
   @foreach ($foods as $foods_item)
       <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic" style="background-image: url('{{asset("assets/images/foods")}}/{{$foods_item->file_name}}'); background-size: 100% 100%;">
                    <ul class="product__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                        
                    <!--<h6><a href="{{ route('FoodInfo', $foods_item->id) }}">{{ $foods_item->category }} </a></h6> -->
                    @if($foods_item->samarxvo == 1) 
                        <h6> {{__('all.Fasting')}} </h6>
                    @endif
                    @if($foods_item->dieturi == 1) 
                        <h6> {{__('all.Dietary')}} </h6>
                    @else
                        <br>
                    @endif
                    <h5><a href="{{ route('FoodInfo', $foods_item->id) }}">
                        @if(session('locale') == 'ka')
                            {{ $foods_item->name_ka}}
                        @elseif(session('locale') == 'en')
                            {{ $foods_item->name_en}}
                        @elseif(session('locale') == 'ru')
                            {{ $foods_item->name_ru}}
                        @endif
                        </a></h5>
                </div>
                <br>
            </div>
        </div>
    @endforeach
@endif
</div>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

var  ingredients=[];
function init(objj)
{
    $("#result_n").empty();
    $("#foods_list").empty();
    var ins_ingr = [];
    var aa = document.getElementById(objj);
    if(ingredients.includes(objj))
    {
        var n = ingredients.indexOf(objj);
        ingredients.splice(n,1);
        aa.style.backgroundColor ="silver";
        aa.style.color = "black";
        
    }
    else
    { 
        ingredients.push(objj);
        aa.style.backgroundColor ="#7fad39";
        aa.style.color = "white";
        
    }

    var foods = [];

    @if(!empty($foods_all)) 
       @foreach ($foods_all as $foods_item)
        @if(session('locale') == 'ka')
            var tmp = {'id':"{{ $foods_item->id }}", 'name':"{{ $foods_item->name_ka }}", 'file_name': "{{ $foods_item->file_name }}", 'category':"{{ $foods_item->category }}",'code':"{{ $foods_item->code }}"};
        @elseif(session('locale') == 'en')
            var tmp = {'id':"{{ $foods_item->id }}", 'name':"{{ $foods_item->name_en }}", 'file_name': "{{ $foods_item->file_name }}", 'category':"{{ $foods_item->category }}",'code':"{{ $foods_item->code }}"};
        @elseif(session('locale') == 'ru')
            var tmp = {'id':"{{ $foods_item->id }}", 'name':"{{ $foods_item->name_ru }}", 'file_name': "{{ $foods_item->file_name }}", 'category':"{{ $foods_item->category }}",'code':"{{ $foods_item->code }}"};
        @endif
            
            foods.push(tmp);
       @endforeach
    @endif
    if(ingredients.length != 0)
    {
    @if(!empty($foods_ings))
        @foreach($foods_ings as $foods_ings_item)
          var tmp1 = {'ingredient_id':"{{ $foods_ings_item->ingredient_id }}", 'foods_code': "{{ $foods_ings_item->foods_code }}"};
         ins_ingr.push(tmp1);
        @endforeach
    @endif
    for(var j = 0; j < ingredients.length; j++)
    {
        var tmp_arr= [];
        for(var l = 0; l < ins_ingr.length; l++)
        {
            if(ingredients[j] ==  ins_ingr[l].ingredient_id)
            {
                tmp_arr.push(ins_ingr[l].foods_code);
            }
        }
        var tmp_arr1 = [];
        var r=0;
        for(var n=0; n< tmp_arr.length; n++)
        {
            for(var m=0; m< ins_ingr.length; m++)
            {
                if(tmp_arr[n] ==  ins_ingr[m].foods_code)
                {
                    let tt = {'ingredient_id' : ins_ingr[m].ingredient_id, 'foods_code' : ins_ingr[m].foods_code};
                    tmp_arr1.push(tt);
                }
                
            }
        }
        
        ins_ingr = tmp_arr1;
        
    }
    var rr = ins_ingr.map(item => item.foods_code)
    .filter((value, index, self) => self.indexOf(value) === index);
    $("#foods_list").empty();
    var n = 0;
    for(var t=0; t<rr.length; t++)
     {
        for(var i=0; i<foods.length; i++)
         {
            if(rr[t] == foods[i].code)
            { let tt ="";  let ttt= ""; 
              if(foods[i].samarxvo == 1) tt = foods[i].samarxvo;
              if(foods[i].dieturi == 1) ttt = foods[i].dieturi;
              $("#foods_list").append('<div class="col-lg-4 col-md-6 col-sm-6">'+
                '<div class="product__item">'+
                   '<div class="product__item__pic set-bg" style="background-image: url({{asset("assets/images/foods")}}'+'/'+ foods[i].file_name+')">'+
                       '<ul class="product__item__pic__hover">'+
                          '<li><a href="#"><i class="fa fa-heart"></i></a></li>'+
                          '<li><a href="#"><i class="fa fa-retweet"></i></a></li>'+
                          '<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>'+
                       '</ul>'+
                   '</div>'+
                   '<div class="product__item__text">'+
                       '<h6><a href="https://allfoods.ishove.ge/food_info'+'/'+foods[i].id+'">'+ foods[i].category+'</a></h6>'+
                       '<h6>'+ tt+ ' '+ ttt+ '</h6>'+
                       '<h5><a href="https://allfoods.ishove.ge/food_info'+'/'+foods[i].id+'">'+foods[i].name+'</a></h5>'+
                   '</div><br>'+
               '</div>'+
              '</div>');
              n++;
            }
        }
     }
     $("#result_n").append(n);
    }
    else if(ingredients.length ==0)
    {
        for(var i=0; i<foods.length; i++)
         {
             let tt = ttt= ""; 
              if(foods[i].samarxvo == 1) tt = foods[i].samarxvo;
              if(foods[i].dieturi == 1) ttt = foods[i].dieturi;
             $("#foods_list").append('<div class="col-lg-4 col-md-6 col-sm-6">'+
                '<div class="product__item">'+
                   '<div class="product__item__pic set-bg" style="background-image: url({{asset("assets/images/foods")}}'+'/'+ foods[i].file_name+')">'+
                       '<ul class="product__item__pic__hover">'+
                          '<li><a href="#"><i class="fa fa-heart"></i></a></li>'+
                          '<li><a href="#"><i class="fa fa-retweet"></i></a></li>'+
                          '<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>'+
                       '</ul>'+
                   '</div>'+
                   '<div class="product__item__text">'+
                       '<h6><a href="https://allfoods.ishove.ge/food_info'+'/'+foods[i].id+'">'+ foods[i].category+'</a></h6>'+
                       '<h6>'+ tt+ ' '+ ttt+ '</h6>'+
                       '<h5><a href="https://allfoods.ishove.ge/food_info'+'/'+foods[i].id+'">'+foods[i].name+'</a></h5>'+
                   '</div><br>'+
               '</div>'+
              '</div>');
        }
        $("#result_n").append(foods.length);
    }
    
}
</script>
<div class="product__pagination">
</div>
</div>
</div>
</div>
@endsection


<!DOCTYPE html>
<html lang="ge">
<head>

<meta charset="UTF-8">
<meta name="description" content="Foods">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Nika Tavartkiladze">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>

<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}" type="text/css">

<link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}" type="text/css">
<link rel="stylesheet" href="{{asset("assets/css/elegant-icons.css")}}" type="text/css">
<link rel="stylesheet" href="{{asset("assets/css/nice-select.css")}}" type="text/css">
<link rel="stylesheet" href="{{asset("assets/css/jquery-ui.min.css")}}" type="text/css">
<link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}" type="text/css">
<link rel="stylesheet" href="{{asset("assets/css/slicknav.min.css")}}" type="text/css">
<link rel="stylesheet" href="{{asset("assets/css/style.css")}}" type="text/css">
<style >

  .header__menu ul li a{

    letter-spacing: 1px;
  }
  
  .lang_ul li
  {
      float: left;
      margin-left: 10px;
      list-style-type: none;
  }
  .lang_ul li a
  {
      color: black!important;
  }
  .ing_a
  {
      font-size: 14px;
      display: inline-block;
      margin: 3px;
      padding: 4px;
      border-radius: 4px;
      background-color: silver;
      color: black;
      line-height: 20px;
      
      
  }
  .ing_a:hover
  {
      color: black;
      cursor: pointer;
  }
  .product__item__pic:hover
  {
      border: 2px solid #7fad39;
  }
  .product__item
  {
      border-bottom: 2px dashed #7fad39;
  }
  h6{
      text-align:center!important;
  }
  .product__item__text h6 a, .product__item__text h5 a
  {
      color: black!important;
  }
  .sidebar__item {
      max-height:700px;
  }
  ::-webkit-scrollbar {
     width: 10px;
  }
  ::-webkit-scrollbar-thumb {
  background: #7fad39; 
  }
  .search_result_form
  {

      width : 60%;
      min-height : 150px;
      max-height : 400px;
      position : absolute;
      z-index  : 999999;
      background : #fffffff0;
      overflow-y :  scroll;
      top: 60px;
      margin-bottom:30px;
  }
  .search_result_form:hover
  {
      cursor: pointer;
  }
  ._6b
  {
      font-size:20px!important;
      height: 25px;
  }
  @media (min-width: 992px)
  {
    .col-lg-4 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%!important;
    max-width:25%!important;
    }
  }
  @media (max-width:768px)
  {
  .sidebar__item {
    max-height:200px;
  }
}
</style>
</head>


<body>
  
<section class="hero">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="hero__categories" >
<div class="hero__categories__all">
<i class="fa fa-bars"></i>
<span style="font-size: 15px;">{{__('all.ALL CATEGORIES')}}</span>
</div>
<ul style="display:none; position: absolute!important; background: white; z-index: 999;">

@if(!empty($category_all)) 
  @foreach ($category_all as $foods_category)
    <li><a href="{{ route('MainPage', $foods_category->id)}}">
      @if(session('locale') == 'ka')
        {{ $foods_category->category_ka}}
      @elseif(session('locale') == 'en')
        {{ $foods_category->category_en}}
      @elseif(session('locale') == 'ru')
        {{ $foods_category->category_ru}}
      @endif
    </a></li>
  @endforeach
@endif
</ul>
</div>
</div>
<div class="col-lg-9">
<div class="hero__search">
<div class="hero__search__form"  id="search_result">
<form action="#">

<input type="text" id="foods_search" placeholder="{{__('all.So, what are we looking for?')}}" >
<button type="submit" class="site-btn">{{__('all.Search')}}</button>
</form>
</div>
<div style="float: right; margin-top:10px;">
<ul class="lang_ul">
    <li><a href="{{route('ChangeLocale', 'ka')}}">GE </a> </li>
    <li><a href="{{route('ChangeLocale', 'en')}}">EN </a> </li>
    <li><a href="{{route('ChangeLocale', 'ru')}}">RU </a> </li>
    
     <li style="margin-left:20px;"> <a href="{{ route('foods.index' )}}"> {{__('all.Log in')}}</a></li>    
</ul>
</div>
</div>

</div>
</div>
</div>
</section>

<section class="breadcrumb-section set-bg" data-setbg="{{asset('assets/img/product/juice-2.jpg')}}" style="background-image: url('{{asset("assets/img/product/juice-2.jpg")}}');">
<div class="row"style=" width: 100%;">
<div class="col-lg-12 text-center">
<div class="breadcrumb__text">
<h2 style="letter-spacing:3px;"><a href="{{route('MainPage')}}" style="color: white;">FOODS.ISHOVE.GE</a></h2>
<div class="breadcrumb__option">
<a href="{{route('MainPage')}}">-{{__('all.Home')}}</a>
</div>
</div>
</div>
</div>
</div>
</section>
@yield('content')

<script>

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, aa, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
     
      a.setAttribute("id", "search_result_form");
      a.setAttribute("class", "search_result_form");
      /*append the DIV element as a child of the autocomplete container:*/
      document.getElementById("search_result").parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].name.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          b.style.height="25px";
          b.style.margin = "3px";
          b.style.padding = "4px 6px";
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].name.substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].name.substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i].name + "'>";
          b.innerHTML += "<input type='hidden' value='" + arr[i].id + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              location.href = "https://allfoods.ishove.ge/food_info/"+ this.getElementsByTagName("input")[1].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
    
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
    $("#search_result_form").remove();
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
function onlyUnique(value, index, self) { 
    return self.indexOf(value) === index;
}
var foods_search =[];
@if(!empty($foods_all))  
  @foreach ($foods_all as $food_item)
    @if(session('locale') == 'ka')
      var aaa= { id: "{{ $food_item->id }}", name: "{{ $food_item->name_ka}}"} ;
    @elseif(session('locale') == 'en')
      var aaa= { id: "{{ $food_item->id }}", name: "{{ $food_item->name_en}}"} ;
    @elseif(session('locale') == 'ru')
      var aaa= { id: "{{ $food_item->id }}", name: "{{ $food_item->name_ru}}"} ;
    @endif
      foods_search.push(aaa);
  @endforeach
@endif
var unique = foods_search.filter( onlyUnique );

autocomplete(document.getElementById("foods_search"), unique);

</script>
<script src="{{ asset("assets/js/jquery-3.3.1.min.js") }}"></script>
<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.slicknav.js") }}"></script>
<script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("assets/js/main.js") }}"></script>


</body>
</html>

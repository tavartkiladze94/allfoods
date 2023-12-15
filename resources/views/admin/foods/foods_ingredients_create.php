<style>
     ul.pagination li a
     {
         color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
     }
 </style>
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        
       <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{__('all.Food')}}</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url('admin/index');?>"><{{__('all.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{__('all.All')}}
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="content-body">
           <section id="basic-input">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
           <h4 class="card-title">{{__('all.Add ingredients')}}</h4>
        </div>
        <div class="card-body">
        <form class="text-center" action="<?=base_url('admin/foods_ingredients_create')?>" method="POST">
          <div class="row"> 
          
           <div class="col-lg-4 col-md-6 col-12">
                    <label>{{__('all.Ingredient')}} GE:</label>
                    <input required type="text" class="form-control dt-input"  id="ingredient_ge" name="ingredient_ge" placeholder="{{__('all.Ingredient')}} GE..." >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                    <label>{{__('all.Ingredient')}} EN:</label>
                    <input required type="text" class="form-control dt-input"  id="ingredient_en" name="ingredient_en" placeholder="{{__('all.Ingredient')}} EN..." >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                    <label>{{__('all.Ingredient')}} RU</label>
                    <input required type="text" class="form-control dt-input"  id="ingredient_ru" name="ingredient_ru" placeholder="{{__('all.Ingredient')}} RU..." >
            </div>
            <button class="dt-button create-new btn btn-primary waves-effect waves-float waves-light" style="height:40px; margin-top:25px; margin-left:20px;width:120px;" type="submit"><?=$this->lang->line('Add');?></span></button>
          </div>
        </form>
        <br>
        <div class="col-md-6 col-12">
                <div class="mb-2">
                  <label class="form-label" for="duration">{{__('all.Find an ingredient')}}</label>
                  <input type="text" id="ingredient_search"  min="0" class="form-control" placeholder="{{__('all.All')}}"/>
                </div>
              </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
           <h4 class="card-title">{{__('all.Add category')}}</h4>
        </div>
        <div class="card-body">
        <form class="text-center" action="<?=base_url('admin/foods_categories_create')?>" method="POST">
          <div class="row"> 
          
           <div class="col-lg-4 col-md-6 col-12">
                    <label>{{__('all.Category')}} GE:</label>
                    <input required type="text" class="form-control dt-input"  id="category_ge" name="category_ge" placeholder="{{__('all.Category')}} GE..." >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                    <label>{{__('all.Category')}} EN:</label>
                    <input required type="text" class="form-control dt-input"  id="category_en" name="category_en" placeholder="{{__('all.Category')}} EN..." >
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                    <label>{{__('all.Category')}} RU</label>
                    <input required type="text" class="form-control dt-input"  id="category_ru" name="category_ru" placeholder="{{__('all.Category')}} RU..." >
            </div>
            <button class="dt-button create-new btn btn-primary waves-effect waves-float waves-light" style="height:40px; margin-top:25px; margin-left:20px;width:120px;" type="submit">{{__('all.Add')}}</span></button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</section> 

<!-- users list ends -->

        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.style.position = "absolute";
      a.style.zIndex  = "999";
      a.style.width = "200px";
      a.style.height = "200px";
      a.style.overflowY = "scroll";
      a.style.backgroundColor = "white";
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].name.substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].name.substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].name.substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i].ing_id + "'>";
          b.innerHTML += "<input type='hidden' value='" + arr[i].name + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[1].value;
              document.getElementById("ing_"+this.getElementsByTagName("input")[0].value).checked = true;
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
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
function onlyUnique(value, index, self) { 
    return self.indexOf(value) === index;
}
var ingredients =[];
<?php foreach ($foods_ingredients as $ingredient_item): ?>
/*An array containing all the country names in the world:*/
 var aaa= {ing_id: "<?php echo $ingredient_item['id'];?>", name: "<?php echo $ingredient_item['ingredient_ge'];?>"} ;
 ingredients.push(aaa);
<?php endforeach; ?>
var unique = ingredients.filter( onlyUnique );

autocomplete(document.getElementById("ingredient_search"), unique);


</script>
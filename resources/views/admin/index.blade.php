@extends('admin.layout')
@section('title','store')
@section('content')

    @if(Session::has('result'))
          <div id="message" style="display:block;position: absolute; top: 80px;right:50px; border: 1px solid #55b536; height:40px; text-align:center; background:#55b536; padding: 10px 10px;"> 
           <h6 style="color:white!important; font-size:16px;">
               <i class="fa fa-check" style="font-size:18px; color:white!important;"></i> ოპერაცია {{ Session::get('result') ? 'წარმატებით' : 'წარუმატებლად'}} დასრულდა</h6>
        </div>
    @endif

<script>
    const myTimeout = setTimeout(msg, 5000);

    function msg() {
        document.getElementById("message").style.display = "none";
       {{Session::forget('message')}}
    }
</script>
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        
       <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">{{__('all.Dishes')}}</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('foods.index')}}">{{__('all.Home')}}</a>
                    </li>
                    <li class="breadcrumb-item active">{{__('all.All')}}
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        
<section class="app-user-list">

  
  <div class="card" style="overflow-x:scroll;">
      
    <div class="card-datatable table-responsive pt-0">
        <div class="dt-buttons btn-group flex-wrap"><button class="btn add-new btn-primary mt-50" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in"><span> <a href="{{route('food.create')}}" style="color:white;">{{__('all.Add')}}</a></span></button> 
        </div>
        <br>
        <br>
        </div>
      <h2 style="color:black;">{{__('all.Found')}}</h2>
      <table class="user-list-table table">
        <thead class="thead-light">
          <tr>
             <th>ID</th>
              <th>{{__('all.Name')}} GE</th>
              <th>{{__('all.Name')}} EN</th>
              <th>{{__('all.Name')}} RU</th>
              <th>{{__('all.Category')}}</th>
              <th>{{__('all.Action')}}</th>
          </tr>
        </thead>
        <tbody>
            	@foreach($foods_all as $key => $item)
					<tr>
						<td>{{ ++$key }}</td>
						<td><a href="{{route('food.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->name_ka }}</a></td>
						<td><a href="{{route('food.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->name_en }}</a></td>
						<td><a href="{{route('food.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->name_ru }}</a></td>
						<td><a href="{{route('food.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->category }}</a></td>
						<td><a href="{{route('food.destroy', $item->id)}}" style="color:red;">
											    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-small-4 mr-50" style="color:red;"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
											     <th>{{__('all.Delete')}}</th>
                     </a></td>
                    </tr>
				@endforeach
        </tbody>
           
      </table>
       <div class="d-flex justify-content-between mx-2 row mb-1">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- list section end -->
</section>
<!-- users list ends -->

        </div>
      </div>
    </div>
@endsection

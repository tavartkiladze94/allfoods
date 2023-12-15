@extends('admin.layout')
@section('title','store')
@section('content')
<style>
    ul.pagination li a
    {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }
    </style>
    @if(Session::has('result'))
        <div id="message" style="display:block;position: absolute; top: 80px;right:50px; border: 1px solid #55b536; height:40px; text-align:center; background:#55b536; padding: 10px 10px;"> 
           <h6 style="color:white!important; font-size:16px;">
               <i class="fa fa-check" style="font-size:18px; color:white!important;"></i>
               ოპერაცია {{ Session::get('result') ? 'წარმატებით' : 'წარუმატებლად'}} დასრულდა
               </h6>
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

  
  <div class="card" >
      <div class="dt-buttons btn-group flex-wrap" style="width:120px;">
          <button class="btn add-new btn-primary mt-50" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in"><span> 
            <a href="{{route('foods.create')}}" style="color:white;">{{__('all.Add')}}</a></span></button> 
      </div>
      <br>
    <div class="card-datatable table-responsive pt-0">
      
      <h2 style="color:black;">{{__('all.Found')}}  - {{count($foods_all)}} </h2>
      <table class="user-list-table table" style="overflow-x:scroll;">
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
						<td><a href="{{route('foods.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->name_ka }}</a></td>
            <td><a href="{{route('foods.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->name_en }}</a></td>
            <td><a href="{{route('foods.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->name_ru }}</a></td>
            <td><a href="{{route('foods.edit', $item->id)}}" style="color:#0c2e3e">{{ $item->category }}</a></td>
						<td>
              <form action="{{ route('foods.destroy', $item->id) }}" method="post">
              @csrf
              @method("delete")
              <button type="submit" class="btn-danger" style="background:red;color:white;">{{__('all.Delete')}}</button>
              </form>
                      </td>
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
  <!-- list section end -->
</section>
<!-- users list ends -->

        </div>
      </div>
    </div>
@endsection

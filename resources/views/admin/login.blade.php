@extends('main.layout')
@section('title', 'Login')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember').attr('checked', 'checked');
                    $('#username').val(localStorage.usrname);
                    $('#password').val(localStorage.pass);
                } else {
                    $('#remember').removeAttr('checked');
                    $('#username').val('');
                    $('#password').val('');
                }
 
                $('#remember').click(function() {
 
                    if ($('#remember').is(':checked')) {
                        // save username and password
                        localStorage.usrname = $('#username').val();
                        localStorage.pass = $('#password').val();
                        localStorage.chkbx = $('#remember').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });
 
</script> 

<section class="flat-account background">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="margin:auto;">
            <div class="form-login">
              <div class="title" style="margin-bottom:30px;">
                  
                <h3>
                  {{__('all.Log in')}}</h3>
                  @if($errors->any())
       
                     @foreach ($errors->all() as $error)
                       <h5 style="color: red;">
                         {{ $error }}
                       </h5>
                    @endforeach
                  @endif
                
                @if(Session::has('login_failed'))
                   <h5 style="color: red;">
                      {{__('all.Incorrect data')}}
                   </h5>
                @endif
                @if(Session::has('password_sent'))
                   <h5 style="color: green;">
                      {{__('all.Password sent')}}
                   </h5>
                @endif
              
              </div>
              <form action="{{ route('check')}}" method="post">
                @csrf
                  <table>
                      <tr>
                          <td><label for="email">{{__('all.Email')}} * </label></td>
                          <td><input type="email" name="email" placeholder="{{__('all.Email')}}"  id="username" value="{{ old('email')}}"></td>
                      </tr>
                      <tr>
                          <td><label for="password">{{__('all.Password')}} * </label></td>
                          <td><input type="password"  name="password" placeholder="******" id="password"></td>
                      </tr>
                  </table>
                
                <div class="form-box checkbox">
                  <input type="checkbox"   value="1"  id="remember">
                  <label for="remember">{{__('all.Remember')}}</label>
                </div><!-- /.form-box -->
                <div class="form-box">
                  <button type="submit" class="login" style="background-color:#55b536;color: white;">{{__('all.Log in')}}</button>
                  </div><!-- /.form-box -->
              </form><!-- /#form-login -->
            </div><!-- /.form-login -->
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
@endsection
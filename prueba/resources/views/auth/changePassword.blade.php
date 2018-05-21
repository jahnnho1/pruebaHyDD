@extends('layouts.app')
     @section('content')

           @extends('layouts.topBar')
   





        <div class="container">
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="content files-list clearfix">
                <h2>
                @if(Auth::check())
                Welcome {{ Auth::user()->fullName }}
                @endif
                </h2>
                    <div class="col-xs-5">
                        <h4>Change password</h4><br />
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p style='padding:15px;' class='bg-danger'>{{ $error }}</p>
                            @endforeach
                        @endif
                        @if(Request::get('errorMessage') !== null)
                            <p style='padding:15px;' class='bg-danger'>{{ Request::get('errorMessage') }}</p>
                        @endif
                        <form id="form-change-password" role="form" method="POST" action="{{ url('/auth/credentials') }}" novalidate class="form-horizontal">
                            {{ csrf_field() }}
                           <div class="placeholder">Current Password</div>
                            <input style="max-width:200px;" placeholder='Current password' name="oldpass" id="oldpass"  class="form-control" type="password"><br>
                            <div class="placeholder">New password</div>
                            <input style="max-width:200px;" placeholder='New password' name="password" id="password"  class="form-control" type="password"><br>
                            <div class="placeholder">Confirm password</div>
                            <input id="password_confirmation" style="max-width:200px;" placeholder='Confirm password' name="password_confirmation"  class="form-control" type="password">
                            <hr>
                            <input type="submit" class="btn btn-primary" value="Cambiar">
                        </form>    
                    </div>
            </aside>
            <!-- /.right-side -->
        </div>
   

   
            


        @include('layouts.footer')          
       @endsection
       
       
      
     


       

       

  

   
<!DOCTYPE html>
<html lang="en">
<head>
  <title>National Environment Platform</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
    .inline{
        display: inline;
      }
  </style>
</head>

<body class="bg-secondary">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand/logo -->
        <a class="navbar-brand mr-auto" href="#">
        <img src="/img/Logo.jpeg" alt="logo" style="width:70px;">
        </a>

        <a href="#" class="text-secondary mr-1">Help          |</a>

        <a href="#" class="text-secondary">
            <i class="fas fa-bell mr-1"> <span class="badge badge-light">4</span>        |</i>
        </a>

        <a href="/passwordReset" class="text-secondary">
            <i class="fas fa-cog mr-1">          |</i>
        </a>


        <ul class="navbar-nav">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
    </nav>



<br>

<div class="container-fluid">
    <div class="row">
    <div class="col-lg-2">      <!--if screen size goes below large then start stacking-->
        <div class="p-2 border bg-dark border-dark rounded-lg flex-shrink-3">
            <h4 class="p-2 border border-light rounded-lg text-white">Navigation Bar</h5>
            <!-- A vertical navbar -->
            <nav class="navbar bg-dark">
            <!-- Links -->
            <ul class="navbar-nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="/general">General Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="/administrator/index">User Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Environment Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Admin Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Security Module</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Update Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light font-italic p-2" href="#">Requests</a>
            </li>
            </ul>
            </nav>
        </div>
    </div>


    <div style="background-color:#ECF0F1" class="col-md p-2 border border-secondary rounded-lg ml-2 mr-3">
      @yield('cont')
    </div>
</div>
</div>
<br>
<div class="d-flex bg-light justify-content-end mt-5">
  <a href="#" class="text-secondary mr-2">
    <i class="fab fa-facebook-square"></i> Facebook |
  </a>
  <a href="#" class="text-secondary mr-2">
    <i class="fab fa-twitter-square"></i> Twitter |
  </a>
  <a href="#" class="text-secondary mr-2">
    <i class="fab fa-instagram"></i>  Instagram
  </a>
</div>
<div class="d-flex bg-light justify-content-center">
  <h5 class="text-secondary"><i class="far fa-copyright"></i> 2020 by Reforest Sri Lanka</h5><br>
</div>
<div class="d-flex bg-light justify-content-center">
  <h6>All rights reserved</h6>
</div>

</body>
</html>


<!-- Ajax loop for environment Restoration form for species -->
<script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><select name="species[]" class="custom-select"><option selected>Select Species</option><option value="1">treespeciesname1</option><option value="2">treespeciesname2</option><option value="3">treespeciesname3 </option><option value="4">treespeciesname4</option></select></td>';
        html += '<td><input type="text" name="species[]" class="form-control" /></td>';
        html += '<td><input type="text" name="species[]" class="form-control" /></td>';
        // html += '<td><input type="text" name="amendment[]" class="form-control" /></td>';

        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove Species</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add Species</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("dynamic-field.insert") }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});
</script>

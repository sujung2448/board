<!doctype html>
<html lang="kr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title', 'CRUD')</title>
    
</head>
<body>
@section('header')

  <nav class="navbar navbar-expand-lg navbar-light bg-gray-200">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="nav-link" href="{{route('home')}}"> <img src = "/image/house.png" width="120" ></a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="padding-left: 30px;">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
       @guest() 
        <li class="nav-item">
            <a class="nav-link" href="{{route('auth.register.index')}}">회원가입</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('auth.login.index')}}">로그인</a>
        </li>
       @endguest 
        <li class="nav-item">
          <a class="nav-link" href="{{route('boards.index')}}">게시판</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">disabled</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">disabled</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">disabled</a>
        </li>  
      </ul>
    
   @auth()
        <span class="text-2xl font-bold tracking-wide text-blue-500">{{auth() -> user() -> name}}</span>
            <form action="/auth/logout" method="post">
      @csrf     
        <a href="{{route('auth.logout')}}"><button class="text-base pl-3">Logout</button></a>
            </form>
            
   @endauth    
        
      <form class="form-inline my-2 my-lg-0 pl-5">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>



 @show
 
@section('section')
 
  @show
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
        
          
          
        
      
  

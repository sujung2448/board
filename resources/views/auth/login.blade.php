@extends('layouts.master')

@section('section')
<div class="w-2/3 mx-auto mt-16">
    <form action="/auth/login" method="post" class="w-1/2 mx-auto">
        @csrf
        <p>
            <div class="form-group">
             <label for="email" >Email</label>
             <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" >
            </div>
    
            <div class="form-group">
             <label for="password" >Password</label>
             <input type="password" name="password" class="form-control" id="password">
            </div>
    
            <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
    
                <input type="submit" value="로그인"
                class="bg-blue-500 hover:bg-blue-700 px-4 py-1 text-lg text-white rounded-lg outline-none">
                <input type="button" class="bg-red-500 hover:bg-red-700 px-4 py-1 ml-4 text-lg text-white rounded-lg outline-none"
                value="취소" onclick="window.location.href ='{{route('home')}}'">
        </p>    
    </form>
</div>
    

@endsection
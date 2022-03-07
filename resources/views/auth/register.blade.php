@extends('layouts.master')

@section('section')
    <div class="w-2/3 mx-auto mt-16">
        <form action="/auth/register" method="post" class="w-1/2 mx-auto">
            @csrf
            <p>
                <div class="form-group pb-1">
                <label for="email" >Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                       {{-- class="outline-none border border-blue-400 rounded-lg pl-1 w-1/3"> --}}
                </div>

                <div class="form-group pb-1">    
                <label for="password" >Password</label>
                <input type="password" class="form-control" id="password" name="password">
                       {{-- class="outline-none border border-blue-400 rounded-lg pl-1 w-1/3"> --}}
                </div>

                <div class="form-group pb-1">
                <label for="password_confirmation">Password Confirm</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                       {{-- class="outline-none border border-blue-400 rounded-lg pl-1 w-1/3"> --}}
                </div>

                <div class="form-group pb-1">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                       {{-- class="outline-none border border-blue-400 rounded-lg pl-1 w-1/3"> --}}
                </div>

                <div class="pt-8 testclass">
                    <input type="submit" value="가입"
                        class="bg-blue-500 hover:bg-blue-700 px-4 py-1 text-lg text-white rounded-lg outline-none">
                    <input type="button" class="bg-red-500 hover:bg-red-700 px-4 py-1 ml-4 text-lg text-white rounded-lg outline-none"
                           onclick="window.location.href = '{{route('home')}}'" value="취소">
                </div>
            </p>
        </form>
    </div>
@endsection

<style>
    @media (max-width: 600px){
        .testclass {
            display: flex;
            flex-direction: column;
            
    }
</style>

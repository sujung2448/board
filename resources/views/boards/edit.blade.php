@extends('layouts.master')

@section('section')
    <section class="w-1/2 mx-auto mt-16">
        <form action="/boards/{{$board -> id}}" method="post">
            @method('PUT')
            @csrf
            <p>
                <div class="form-group">
                <label for="title" class="text-l">제목 </label>
                <input type="text" class="form-control" id="title" name="title" value="{{$board -> title}}">
                </div>    
            </p>
            <p>    
                <div class="form-group">    
                <label for="contents" class="text-l">내용</label>
                <textarea id="contents" name="contents" class="form-control" rows="10"> {{$board -> contents}}</textarea>
            </p>
            <p class="mt-8">
                
                <input type="submit" value="수정"
                       class="px-4 py-1 bg-green-500 hover:bg-green-700 text-lg text-white rounded">
                <input type="button" value="취소" onclick="history.back()"
                       class="px-4 py-1 ml-6 bg-red-500 hover:bg-red-700 text-lg text-white rounded">
            </p>
        </form>
    </section>
@endsection
@extends('layouts.master')

@section('section')
    <section class="w-2/3 mx-auto">
        {{-- <div class="w-2/3 text-2xl text-green-500 mt-8">글쓰기</div> --}}
        <form action="/boards" method="post" class="mt-20 w-1/2 mx-auto">
            @csrf
            <p>
                <div class="form-group">
                <label for="user_id" class="text-l">아이디 </label>
                <input type="text" class="form-control" id="user_id" name="user_id"
                       class="outline-none border border-blue-400 w-1/4 pl-1 py-1 rounded-lg">
                </div>    
            </p>
            <p>
                <div class="form-group">
                <label for="title" class="text-l">제목 </label>
                <input type="string" class="form-control" id="title" name="title"
                       class="outline-none border border-blue-400 w-1/2 pl-1 py-1 mt-2 rounded-lg">
                </div>
            </p>
            <p>    
                <div class="form-group">
                <label for="contents" class="text-l">내용</label>
                <textarea id="contents" class="form-control" name="contents" rows="7"
                          class="outline-none border border-blue-400 w-full h-64 mt-2 rounded-lg resize-none"></textarea>
                </div>
            </p>

            <p class="mt-8" >
                <input type="submit" value="작성" 
                       class="px-4 py-1 bg-green-500 hover:bg-green-700 text-lg text-white rounded">
                <input type="button" value="취소" onclick="history.back()"
                       class="px-4 py-1 ml-6 bg-red-500 hover:bg-red-700 text-lg text-white rounded">
            </p>
        </form>
    </section>
@endsection

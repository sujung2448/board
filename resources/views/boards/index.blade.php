@extends('layouts.master')

@section('section')
    <section class="w-2/3 mx-auto mt-8 mb-8 ">
        <div class="flex w-full justify-between">
            {{-- <div class="flex-initial text-2xl text-green-500">게시판</div> --}}
            <div class="flex-initial">
                <a href="{{route('boards.create')}}">
                    <button class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-700 rounded">글쓰기</button>
                </a>
            </div>
        </div>
        <div class="w-full mt-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="w-1/4 text-center">#</th>
                            <th class="w-2/4 text-center">Title</th>
                            <th class="w-1/4 text-center">Date</th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($boards as $board)
                        <tr class="">
                            <td class="w-1/4 text-center">{{$board -> id}}</td>
                            <td class="w-2/4"><a href="{{route('boards.show', $board -> id)}}">{{$board -> title}}</a></td>
                            <td class="w-1/4 text-center">{{$board -> created_at -> format('Y-m-d')}}</td>
                        </tr>
                        @endforeach
                    </body>
                </table>
              <div class="flex justify-center">
                {{ $boards->links() }}  
              </div>    
               
               
        </div>
    </section>
@endsection    
           
                
            
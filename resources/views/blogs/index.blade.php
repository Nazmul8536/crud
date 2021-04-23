@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border border-gray-200">
            <h2 class="text-4xl">
                Blogs
            </h2>

        </div>
    </div>
    @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
            <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-3 px-2 ">
                {{ session()->get('message') }}
            </p>
        </div>
    @endif

    @if(Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/blog/create" class="bg-blue-500 uppercase bg-transparent

text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Create Post
            </a>
        </div>

    @endif

    @if(!empty($posts))
        @foreach($posts as $post)
            <a href="{{url('blog',$post->slug)}}">
                <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border border-gray-200">
                    <div>
                        @if (File::exists(public_path('images/' .$post->image_path)))
                            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}"/>
                        @else
                            <img src="{{ asset('images/laptop-1478822_1280.jpg') }}" alt="{{ $post->title }}"/>
                        @endif
                    </div>
                    <div>
                        <h2 class="text-gray-700 font-bold text-5xl pb-4">
                            {{ !empty($post->title)?$post->title:'' }}
                        </h2>
                        <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> Code By {{$post->name}}
                </span>,{{date('s M Y',strtotime($post->created_at))}}
            </span>
                        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                            {{ !empty($post->description)?$post->description:'' }}
                        </p>
                        <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg
 font-extrabold py-4 px-8 rounded-3xl">
                            Keep Reading
                        </a>

                        @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                            <span class="ml-5">
 <a href="blog/{{$post->slug}}/edit" class="uppercase bg-green-300 text-gray-100 text-lg
 font-extrabold py-4 px-8 rounded-3xl">
                            Edit Post
                        </a>
                        </span>

                        @endif
                        @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                            <form action="blog/{{$post->slug}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="uppercase bg-red-700 mt-20 px-8 py-4 rounded-3xl font-extrabold">
                                    DELETE
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </a>
        @endforeach
    @endif
@endsection

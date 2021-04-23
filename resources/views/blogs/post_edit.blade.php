@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border border-gray-200">
            <h2 class="text-4xl">
                Edit Post
            </h2>

        </div>
    </div>
    {{--    error show --}}
    @if($errors->any())
        <ul>
            @foreach($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif
    <div class="w-4/5 m-auto pt-20">
        <form action="/blog/{{$edit_blogs->slug}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{$edit_blogs->title}}"
                   class="bg-transparent block border border-b-2 w-full
h-15 text-4xl outline-none">
            <textarea name="description" id="description" cols="30" rows="5" placeholder="Description.."
                      class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none">{{$edit_blogs->title}}</textarea>

            <button type="submit" class="uppercase mt-15 bg-blue-500 text-lg
 font-extrabold py-4 px-8 rounded-3xl">Submit Post
            </button>

        </form>
    </div>
@endsection

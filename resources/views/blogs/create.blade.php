@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border border-gray-200">
            <h2 class="text-4xl">
                Create Post
            </h2>

        </div>
    </div>
    @if(session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2">
           <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-3">
               {{ session()->get('message') }}
           </p>
        </div>
    @endif
    {{--    error show --}}
    @if($errors->any())
        <ul>
            @foreach($errors as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

    @endif
    <div class="w-4/5 m-auto pt-20">
        <form action="/blog" enctype="multipart/form-data" method="post">
            @csrf
            <input type="text" name="title" placeholder="Title..."
                   class="bg-transparent block border border-b-2 w-full
h-15 text-4xl outline-none">
            <textarea name="description" id="description" cols="30" rows="5" placeholder="Description.."
                      class="py-20 bg-transparent block border-b-2 w-full h-20 text-xl outline-none"></textarea>
            <div class="bg-grey-lighter pt-15">
                    <label for="profile_pic">Choose file to upload</label>
                    <input type="file" id="image" name="image"
                           accept=".jpg, .jpeg, .png">
            </div>
            <button type="submit" class="uppercase mt-15 bg-blue-500 text-lg
 font-extrabold py-4 px-8 rounded-3xl">Submit Post
            </button>

        </form>
    </div>
@endsection

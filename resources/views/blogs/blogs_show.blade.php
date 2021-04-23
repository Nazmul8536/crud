@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border border-gray-200">
            <h2 class="text-4xl">
                Blog Of {{$posts->name}}
            </h2>

        </div>
    </div>

{{--    @if(!empty($posts))--}}
{{--        @foreach($posts as $post)--}}
                <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border border-gray-200">
                    <div>
                        @if (File::exists(public_path('images/' .$posts->image_path)))
                            <img src="{{ asset('images/' . $posts->image_path) }}" alt="{{ $posts->title }}" />
                        @else
                            <img src="{{ asset('images/laptop-1478822_1280.jpg') }}" alt="{{ $posts->title }}" />
                        @endif
                    </div>
                    <div>
                        <h2 class="text-gray-700 font-bold text-5xl pb-4">
                            {{ !empty($posts->title)?$posts->title:'' }}
                        </h2>
                        <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> Code By {{$posts->name}}
                </span>,{{date('s M Y',strtotime($posts->created_at))}}
            </span>
                        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                            {{ !empty($posts->description)?$posts->description:'' }}
                        </p>
                    </div>
                </div>
{{--        @endforeach--}}
{{--    @endif--}}
@endsection

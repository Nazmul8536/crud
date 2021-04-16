@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border border-gray-200">
            <h2 class="text-4xl">
                Blogs
            </h2>

        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/01/14/18/41/home-office-599475_1280.jpg" width="500" alt="">
        </div>
        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                Learn how To write Laravel Code
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800"> Code By Raisul
                </span>,1 day Ago
            </span>
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,Neque porro quisquam est qui dolorem
                ipsum quia dolor sit amet,Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,Neque porro
                quisquam est qui dolorem
                ipsum quia dolor sit amet,
            </p>
            <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg
 font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>
        </div>
    </div>
@endsection

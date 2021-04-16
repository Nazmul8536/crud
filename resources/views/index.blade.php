@extends('layouts.app')

@section('content')
    <div class="background-image grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block-text-shadow-md pb-14">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do You Become a Developer ?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 font-bold
 text-xl uppercase px-4">
                    Read me
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 py-15 border-b border-gray-200 m-auto">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/01/14/18/41/home-office-599475_1280.jpg" width="500" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better Developer
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,Neque porro quisquam est qui dolorem
                ipsum quia dolor sit amet,
            </p>
            <p class="font-extrabold text-gray-600 text-xl pb-9">
                Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,Neque porro quisquam est qui dolorem
                ipsum quia dolor sit amet,
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s
 font-extrabold py-3 px-8 rounded-3xl">
                find our more
            </a>
        </div>
    </div>

    <div class="text-center bg-black text-white py-3">
        <h2 class="text-xl pb-3 text-l">
            I'm an expert in....
        </h2>
        <span class="font-extrabold block text-2xl py-1">
           Ux Design
        </span>
        <span class="font-extrabold block text-2xl py-1">
          Project Management
        </span>
        <span class="font-extrabold block text-2xl py-1">
          Digital Strategy
        </span>
        <span class="font-extrabold block text-2xl py-1">
           Backend Development
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">

        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,Neque porro quisquam est qui dolorem
            ipsum quia dolor sit amet,
        </p>

    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Neque porro quisquam est qui dolorem ipsum quia dolor sit amet,Neque porro quisquam est qui dolorem
                    ipsum quia dolor sit amet,
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100
 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/01/14/18/41/home-office-599475_1280.jpg" width="500" alt="">
        </div>
    </div>
@endsection

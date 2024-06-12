@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <a href="#">
                    <img src="img/sonic.jpg" class="hover:opacity">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray:300">Movie_name</a>
                    <div class="flex items-center text-gray-400">
                        <span>star</span>
                        <span class="ml-1">raiting</span>
                        <span class="mx-2">|</span>
                        <span>Data</span>
                    </div>
                    <div class="text-gray-400">
                        Action
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

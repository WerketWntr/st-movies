@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <div class="flex-none">
                <img src="img/sonic.jpg" alt="" class="w-64 lg:w-96 encrypted-media">
                <div class="ml-24">
                    <h2 class="text-4xl mt-4 md:mt-0 font-semibold">title</h2>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Movie_name</a>
                        <div class="flex items-center text-gray-400">
                            <span>star</span>
                            <span class="ml-1">vote</span>
                            <span class="mx-2">|</span>
                            <span>date</span>
                            <span class="mx-2">|</span>
                            <span>Action</span>
                        </div>
                        <div class="text-gray-400">
                            Action
                        </div>
                        <p class="text-gray-300 mt-8">Descriotion</p>

                        <div class="mt-12">
                            <h4 class="text-white font-semibold">Featured Crew</h4>
                            <div class="flex mt-4">
                                <div class="mr-8">
                                    <div>Names</div>
                                    <div class="text-sm text-gray-400">Job</div>
                                </div>
                            </div>
                        </div>

                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button
{{--                                        @click="isOpen = false"--}}
{{--                                        @keydown.escape.window="isOpen = false"--}}
                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe class="responsive-iframe absolute top-0 left-0 w-full h-full" src="Youtube" style="border:0;" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>

                            <div class="movie-cast border-b border-gray-800">
                                <div class="container mx-auto px-4 py-16">
                                    <h2 class="text-4xl font-semibold">Cast</h2>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

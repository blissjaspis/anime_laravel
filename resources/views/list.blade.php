@extends('layouts.app')

@section('styles')
    @include('layouts.components.stylevideo')
@endsection

@section('content')
<div class="container mx-auto py-8 px-8 xm:px-2 font-sans">
    <h3>List Series Anime</h3>
    
    <div class="mt-8">
        <div class="flex flex-wrap items-center text-grey">
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/3 xm:w-1/2 pr-2 mb-4">
                <a href="#">
                    <img class="bg-cover bg-no-repeat w-full h-full height-series-anime" src="/images/anime2.jpg" alt="">
                </a>
                <p class="text-grey text-sm text-center truncate">Tamoko Love</p>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/3 xm:w-1/2 pr-2 mb-4">
                <a href="#">
                    <img class="bg-cover bg-no-repeat w-full h-full height-series-anime" src="/images/anime.jpg" alt="">
                </a>
                <p class="text-grey text-sm text-center truncate">Tamoko Love</p>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/3 xm:w-1/2 pr-2 mb-4">
                <a href="#">
                    <img class="bg-cover bg-no-repeat w-full h-full height-series-anime" src="/images/anime3.jpg" alt="">
                </a>
                <p class="text-grey text-sm text-center truncate">Tamoko Love</p>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/3 xm:w-1/2 pr-2 mb-4">
                <a href="#">
                    <img class="bg-cover bg-no-repeat w-full h-full height-series-anime" src="/images/coba.jpg" alt="">
                </a>
                <p class="text-grey text-sm text-center truncate">Tamoko Love</p>
            </div>
            <div class="xl:w-1/5 lg:w-1/4 md:w-1/3 sm:w-1/3 xm:w-1/2 pr-2 mb-4">
                <a href="#">
                    <img class="bg-cover bg-no-repeat w-full h-full height-series-anime" src="/images/anime4.jpg" alt="">
                </a>
                <p class="text-grey text-sm text-center truncate">Tamoko Love</p>
            </div>
        </div>
    </div>
</div>
@endsection

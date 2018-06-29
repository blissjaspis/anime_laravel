@extends('layouts.app')

@section('styles')
    @include('layouts.components.stylevideo')
@endsection

@section('content')
<div class="container mx-auto py-4 px-8 xm:px-2 font-sans">
    <div class="mb-4">
        <h1 class="text-grey-dark font-normal">
            <span class="border-b-2 border-purple pb-1">Major 2nd</span>
        </h1>
        {{-- <h2 class="text-grey font-normal border-b border-dashed border-purple">Major 2nd</h2> --}}
    </div>
    
    <div class="py-2">
        {{-- <div class="container mx-auto py-4 px-8"> --}}
            {{-- <div class="text-grey-dark mb-8 uppercase">
                <span class="border-b-2 border-purple pb-2">Details</span>
            </div> --}}

            <div class="flex">
                <div class="w-4/5 mr-4">
                    <div class="flex">
                        <div class="w-1/4 mr-4">
                            <img class="w-full shadow" src="/images/anime.jpg" alt="">
                            <div class="flex justify-center mt-2">
                                <button class="w-full bg-purple py-2 text-white uppercase text-sm tracking-wide shadow">Favorite</button>
                            </div>
                        </div>

                        {{-- Start Information --}}
                        <div class="w-3/4">
                            <div class="flex mb-4">
                                <div class="w-1/4 text-grey-dark text-sm">
                                    <span>Type</span>
                                </div>
                                <div class="w-3/4 text-grey-darkest">
                                    <span>TV</span>
                                </div>
                            </div>

                            <div class="flex mb-4">
                                <div class="w-1/4 text-grey-dark text-sm">
                                    <span>Episode</span>
                                </div>
                                <div class="w-3/4">
                                    <span class="text-grey-darkest">12</span>
                                </div>
                            </div>
                            
                            <div class="flex mb-4">
                                <div class="w-1/4 text-grey-dark text-sm">
                                    <span>Studio</span>
                                </div>
                                <div class="w-3/4 text-grey-darkest">
                                    <span>Studio Pierrot</span>
                                </div>
                            </div>

                            <div class="flex mb-4">
                                <div class="w-1/4 text-grey-dark text-sm">
                                    <span>Aired</span>
                                </div>
                                <div class="w-3/4 text-grey-darkest">
                                    <span>2018</span>
                                </div>
                            </div>

                            <div class="flex mb-4">
                                <div class="w-1/4 text-grey-dark text-sm">
                                    <span>Genres</span>
                                </div>
                                <div class="w-3/4 inline-block">
                                    <span class="bg-grey-lighter rounded py-1 px-2 text-sm font-semibold text-grey-darker">Action</span>
                                    <span class="bg-grey-lighter rounded py-1 px-2 text-sm font-semibold text-grey-darker">Drama</span>
                                    <span class="bg-grey-lighter rounded py-1 px-2 text-sm font-semibold text-grey-darker">Horror</span>
                                </div>
                            </div>

                            <div class="flex mb-4">
                                <div class="w-1/4 text-grey-dark text-sm">
                                    <span>Rating</span>
                                </div>
                                <div class="w-3/4">
                                    <span class="bg-red-dark text-white py-1 px-2 text-sm">R - 17+ (Violence & Profanity)</span>
                                </div>
                            </div>

                            <div class="flex mb-4">
                                <div class="w-1/4 text-grey-dark text-sm">
                                    <span>Favorite</span>
                                </div>
                                <div class="w-3/4">
                                    <span class="">1000 users</span>
                                </div>
                            </div>
                            {{-- End Informations --}}

                            {{-- Start Synopsis --}}
                            <div class="my-8">
                                <div class="text-grey-dark font-semibold mb-6">
                                    <span class="border-b-2 border-purple pb-2">Synopsis</span>
                                </div>
                                <div class="bg-grey-lightest py-2 px-4 leading-tight overflow-hidden">
                                    <p class="text-sm text-grey-darker">Tsutsui Hikari is an otaku, and he mostly avoids social life. Hikari has only one friend at school, who is also a social misfit, and he is mocked brutally by most of his classmates for being creepy and weird. One day, he ends up having to clean the school pool with Igarashi Iroha, who appears to be pretty much everything he hates in real-life girls. She skips school, has a blunt manner, doesn't have female friends, and seems the sort to be promiscuous. However, she is friendly to Hikari, and even stands up to the people who make fun of him. Hikari's bitterness and trust issues lead him to say pretty harsh things to Iroha, but she never dismisses him as creepy. After a while, it starts to look like Iroha may become his first real-life, 3D girlfriend! Will he be able to handle it?</p>
                                </div>
                            </div>
                            {{-- End Synopsis --}}
                        </div>
                    </div>
                </div>
                <div class="w-1/5">
                    <div class="flex mb-4">
                        <svg class="stroke-current text-purple w-6 h-6" viewBox="0 -1 28 30" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9,8.5 L9,4 L11,4 L11,9.58578644 L14.9497475,13.5355339 L13.5355339,14.9497475 L9,10.4142136 L9,8.5 Z M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z M10,18 C14.418278,18 18,14.418278 18,10 C18,5.581722 14.418278,2 10,2 C5.581722,2 2,5.581722 2,10 C2,14.418278 5.581722,18 10,18 Z"></path>
                        </svg>
                        <span class="text-grey text-sm">Updated 3 days ago</span>
                    </div>

                    <div class="mb-4">
                        <span class="border-b-2 border-purple pb-1 text-grey-dark">
                            List Episode <small class="bg-green rounded-full text-white py-px px-1">2/12</small>
                        </span>
                    </div>
                    <div class="flex flex-col">
                        <div class="py-1">
                            <a class="no-underline text-sm hover:underline text-blue hover:text-blue-dark" href="#">
                                Episode 1 - Apr 07, 2018
                            </a>
                        </div>
                        <div class="py-1">
                            <a class="no-underline text-sm hover:underline text-blue hover:text-blue-dark" href="#">
                                Episode 2 - Apr 14, 2018
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        {{-- End Container Details --}}
    </div>

    <div class="container mx-auto px-8">

        <div class="w-4/5">
            <div class="border-b mb-4 pb-1">
                <div class="flex flex-center justify-between">
                    <span class="text-grey-dark">Highlighted Reviews</span>
                    <a class="no-underline text-blue text-sm" href="#">View All</a>
                </div>
            </div>
            
            <div class="flex mb-2 border-b">
                <img class="rounded-full w-8 h-8 mr-4" src="https://pbs.twimg.com/profile_images/810810442633183232/eXpPp-vO_400x400.jpg" alt="">
                <div class="mb-2">
                    <p class="mb-1 tracking-tight">
                        <span class="text-purple-light font-semibold mr-2">@yaspisz</span>
                        <small class="text-grey">1 day ago</small>
                    </p>
                    <p class="text-sm text-grey-darker">
                        After a great first season and a no less than fantastic second season My Hero Academia is back at it again with season 3, not even six months since season 2 ended. I wrote in my early review for season 2 that I was skeptical that it would be able to carry on being as well refined as season 1 was. Now that the second season is done there is no doubt that I was worried all for nothing. This is the exact thing I'm feeling heading in to the third season of Hero Acca. I'll just sit back and enjoy the ride, cause I read more
                    </p>
                </div>
            </div>
            
            <div class="flex mb-2">
                <img class="rounded-full w-8 h-8 mr-4" src="https://pbs.twimg.com/profile_images/898295311893880832/bCps4HFV_400x400.jpg" alt="">
                <div class="mb-2">
                    <p class="mb-1 tracking-tight">
                        <span class="text-purple-light font-semibold mr-2">@justinbieber</span>
                        <small class="text-grey">2 days ago</small>
                    </p>
                    <p class="text-sm text-grey-darker">
                        I was truly waiting for the 4th, 5th and 6th episode to air just to write a review about how much I love this show.. and those last 3 episodes just have blown my mind with its PERFECTION AND INTENSION!! BNHA IS A PIECE OF ART! This show is a perfect example of how many feelings the author and animation studio can put just in 24-minutes-length episode and how you can get even more feelings and emotions while watching. The amount of action is huge, I mean really huge, in the beginning you can feel the intrigue, in the middle you ROTFL and in the read more
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

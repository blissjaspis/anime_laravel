@extends('layouts.app')

@section('styles')
    @include('layouts.components.stylevideo')
@endsection

@section('content')
<div class="overflow-hidden w-full relative shadow" style="min-height: calc(100vh - 170px)">
    <div class="bg-cover bg-repeat-x absolute -z-1 -mt-4 -ml-4" style="background-image: url('/images/card-top.jpg'); -webkit-filter:blur(15px); width: calc(100% + 4em); height: calc(100% + 4em);">
    </div>
    <div class="container mx-auto px-8">
        <div class="flex items-center justify-center py-4">
            <video-gue class="w-full z-0" style="min-height: calc(100vh - 200px)"
                raw-poster="http://content.bitsontherun.com/thumbs/3XnJSIm4-480.jpg"
                raw-source="{{ asset('video/testing.mp4') }}"
                raw-lang="{{ asset('video/test.vtt') }}"
            ></video-gue>
        </div>
    </div>
</div>

<div class="font-sans">
    <div class="bg-grey-lighter py-2 px-4">
        <div class="container mx-auto pt-4 pb-2 px-8">
    
            <div class="flex items-center justify-between">
                <div class="text-2xl font-normal text-grey-dark">
                    <span class="ml-2">3D Kanojo: Real Girl Episode 11</span>
                </div>
                <div class="text-grey-dark text-right">
                    <svg class="fill-current text-grey w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M2,1.99079514 C2,0.891309342 2.89451376,0 3.99406028,0 L16.0059397,0 C17.1072288,0 18,0.898212381 18,1.99079514 L18,20 L10,16 L2,20 L2,1.99079514 Z M4,2 L16,2 L16,17 L10,14 L4,17 L4,2 Z" />
                    </svg>
                    <span class="text-sm" title="Website Perilis">Samehadaku.tv</span>
                </div>
            </div>
            
        </div>
    </div>

    <div class="py-2">
        <div class="container mx-auto py-4 px-8">
            <div class="text-grey-dark mb-8 uppercase">
                <span class="border-b-2 border-purple pb-2">Details</span>
            </div>

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
                        <span class="text-grey text-sm">Wednesday, 12 June 2018</span>
                    </div>

                    <div class="flex items-center">
                        <img class="rounded-full w-6 h-6 mr-3" src="https://pbs.twimg.com/profile_images/810810442633183232/eXpPp-vO_400x400.jpg" alt="">
                        <div class="text-grey">
                            <p class="text-sm">Bliss Jaspis</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        {{-- End Container Details --}}

        <div class="container mx-auto px-8">
            <div class="flex items-center mb-8">
                <div class="w-4/5 bg-purple-lightest py-4 px-8">
                    <div class="flex items-center">
                        <div class="w-full mr-4">
                            <input class="appearance-none w-full text-grey-dark text-sm rounded py-2 px-4 border hover:border-purple leading-tight" type="text">
                        </div>

                        <button class="bg-green-light text-white py-2 px-4 rounded hover:bg-green" type="submit">
                            Send
                        </button>
                    </div>

                </div>
                <div class="w-1/5"></div>
            </div>

            <div class="w-4/5">
                <div class="flex items-center mb-2 border-b">
                    <img class="rounded-full w-8 h-8 mr-4" src="https://pbs.twimg.com/profile_images/810810442633183232/eXpPp-vO_400x400.jpg" alt="">
                    <div class="mb-2">
                        <p class="mb-1 tracking-tight">
                            <span class="text-purple-light font-semibold mr-2">@yaspisz</span>
                            <small class="text-grey">1 day ago</small>
                        </p>
                        <p class="text-sm text-grey-darker">
                            pertamaz keduaz ketigaz keempax klimax
                        </p>
                    </div>
                </div>
                
                <div class="flex items-center mb-2">
                    <img class="rounded-full w-8 h-8 mr-4" src="https://pbs.twimg.com/profile_images/898295311893880832/bCps4HFV_400x400.jpg" alt="">
                    <div class="mb-2">
                        <p class="mb-1 tracking-tight">
                            <span class="text-purple-light font-semibold mr-2">@justinbieber</span>
                            <small class="text-grey">2 days ago</small>
                        </p>
                        <p class="text-sm text-grey-darker">
                            Ending manganya mereka bersatu kok, cewenya gak mati cuma hilang ingatan
                        </p>
                    </div>
                </div>

                <div class="flex items-center justify-center bg-teal rounded mt-8 hover:bg-teal-light">
                    <button class="py-2 text-white uppercase text-sm font-bold">Load More</button>
                </div>
            </div>
            <div class="w-1/5"></div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.noHead')

@section('content')
    <div class="bg-no-repeat bg-cover bg-center relative"
        style="background-image: url({{ asset('images/background_login.png') }});">
        <div class="absolute bg-gradient-to-b from-blue-500 to-blue-400 opacity-75 inset-0 z-0"></div>
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
            <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
                <div class="self-start hidden lg:flex flex-col  text-white">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 font-bold text-5xl"><span class="text-blue-600">G</span>alaxy <span class="text-blue-600">S</span>wiss <span class="text-blue-600">B</span>ourdin </h1>
                    <p class="pr-3">Vous pouvez via cette application web <span class="text-green-400 font-bold">créer </span>,<span class="text-green-400 font-bold">consulter</span> vos rapports de visites.
                        Vous pouvez <span class="text-green-400 font-bold">rechercher</span> n'importe quel <span class="text-green-400 font-bold">praticiens</span> ainsi que <span class="text-green-400 font-bold">medicament</span> grace a notre base de données.
                    </p>
                </div>
            </div>
            <div class="flex justify-center self-center z-10">
                <div class="p-9 bg-white mx-auto rounded-2xl w-100 ">
                    <div class="mb-4">
                        <h3 class="font-semibold text-2xl text-gray-800">Se Connecter </h3>
                        <p class="text-gray-500">Merci de vous connecter à votre compte.</p>
                    </div>
                    <div class="space-y-5">
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                            <input
                                class=" w-full text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-blue-400"
                                type="" placeholder="mail@gmail.com">
                        </div>
                        <div class="space-y-2">
                            <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                                Mot de passe
                            </label>
                            <input
                                class="w-full content-center text-base px-4 py-2 border  border-gray-300 rounded-lg focus:outline-none focus:border-blue-400"
                                type="" placeholder="Entrer un mot de passe">
                        </div>
                      
                        <div>
                            <button type="submit"
                                class="w-full flex justify-center bg-blue-400  hover:bg-blue-800 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                Se connecter
                            </button>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('images/logo_gsb.png') }}" alt="" class="w-32 mt-4 mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- component -->

    
@endsection

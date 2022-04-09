@extends('layouts.app')

@section('content')
    {{-- Header Bar --}}
    {{-- Content Page --}}
    {{-- Left Nav Bar --}}
   
                <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                    <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">4</span>
                                <h3 class="text-base font-normal text-gray-500">Notes totals</h3>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-1 2xl:grid-cols-1 xl:gap-4 my-4">
                    <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                        {{-- Header Tableau --}}
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-xl font-bold leading-none text-gray-900">Mes notes</h3>
                        </div>
                        <div class="flow-root">
                            <div class="mb-4">
                                <form action="{{ route('getByPraticien') }}" method="POST">
                                    @csrf
                                    <div class="flex align-middle items-center ">
                                        <div class="border-2 border-gray-200 rounded-lg p-1 w-fit hover:border-blue-400 "
                                            id="searchPraInput">
                                            <i class="fa fa-search" aria-hidden="true"></i>
                                            <input type="text" name="praName" placeholder="Nom Praticien"
                                                class="focus:outline-none focus:border-none">
                                            {{-- href to route dashboard with icon all --}}
                                        </div>
                                        <button class="btn btn-success btn-sm mx-2">Chercher</button>
                                        <a href="{{ route('dashboard') }}"
                                            class="text-white btn btn-sm btn-warning hover:scale-105 mx-2">
                                            Afficher Tout
                                        </a>
                                    </div>
                                </form>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="table table-zebra table-compact w-full">
                                    <!-- head -->
                                    <thead>
                                        <tr>
                                            <th>Rap Num</th>
                                            <th>Praticien</th>
                                            <th>Date</th>
                                            <th>Motif</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- row 1 -->

                                        @foreach ($notes as $item)
                                            <tr>
                                                <th>{{ $item->RAP_NUM }}</th>
                                                <td>{{ $item->PRA_NOM . ' ' . $item->PRA_PRENOM }}</td>
                                                {{-- Format date with year --}}
                                                <td>{{ date('d/m/Y', strtotime($item->RAP_DATE)) }}</td>
                                                <td>{{ $item->RAP_MOTIF }}</td>
                                                <td>
                                                    <div class="flex">
                                                        {{-- Font awesome icon wrench --}}
                                                        <a href="#" class="text-white mx-1 p-1 px-2 rounded bg-green-500">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="#" class="text-white mx-1 p-1 px-2 rounded bg-yellow-500">
                                                            <i class="fa fa-wrench" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="#" class="text-white mx-1 p-1 px-2 rounded bg-red-500">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </a>
                                                        {{-- Font awesome icon zoom --}}
                                                    </div>
                                                </td>
                                        @endforeach
                                        @if (count($notes) <= 0)
                                            <tr>
                                                <td colspan="10" class="text-center">Aucune Note</td>
                                            </tr>
                                            <tr>
                                                <td colspan="10" class="text-center"><a href="{{ route('dashboard') }}"
                                                        class="btn btn-warning text-white">Afficher tous les
                                                        rapports</a></td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
        
    
@endsection

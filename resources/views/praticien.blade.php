@extends('layouts.app')
@section('content')
    <!-- Grid -->

    <div class="grid grid-cols-1 2xl:grid-cols-1 xl:gap-4 my-4">
        <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
            {{-- Header Tableau --}}
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold leading-none text-gray-900">Liste des praticiens</h3>
            </div>
            <div class="flow-root">
                <div class="mb-4">
                    <form action="{{ route('getByPraticienName') }}" method="POST">
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
                            <a href="{{ route('praticien') }}"
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
                                <th>Numéro</th>
                                <th>Praticien</th>
                                <th>Adresse</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->

                            @foreach ($praticiens as $item)
                                <tr>
                                    <td>{{ $item->PRA_NUM }}</td>
                                    <td>{{ $item->PRA_NOM . ' ' . $item->PRA_PRENOM }}</td>
                                    <td>{{ $item->PRA_ADRESSE . ' ' . $item->PRA_VILLE . ' ' . $item->PRA_CP }}</td>
                                </tr>
                            @endforeach
                            @if (count($praticiens) <= 0)
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

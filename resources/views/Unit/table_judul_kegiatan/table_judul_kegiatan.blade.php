@extends('layouts.theme')
@section('content')
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="mb-2">
                    <a href="{{ route('table_usulan_kegiatan') }}"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        Kembali
                    </a>
                </div>
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between w-full md:items-center border-b border-gray-200 dark:border-gray-700">
                        <div class="w-full">
                            <div class="w-full border rounded-xl p-4">
                                <div class="flex items-center mb-2">
                                    <div style="width: 15%">
                                        <h1>Input Judul Kegiatan</h1>
                                    </div>
                                    <div class="w-full">
                                        <input style="width: 74%" type="text"
                                            class="py-3 px-4 block border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            placeholder="Total Biaya">
                                    </div>
                                </div>
                                <div class="flex w-full items-center">
                                    <div class="flex items-center w-full">
                                        <div style="width: 15%">
                                            <h1>Judul Kegiatan</h1>
                                        </div>
                                        <div class="mx-2 w-full">
                                            <div>
                                                <select style="width: 80%" id="hs-select-label"
                                                    class="py-3 px-4 pe-9 block border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                                    <option selected>Open this select menu</option>
                                                    <option>C - Pemeliharaan Perkantoran</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="inline-flex gap-x-2">
                                            <button type="button"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center mt-2">
                                    <div style="width: 15%">
                                        <h1>Total Biaya</h1>
                                    </div>
                                    <div class="w-full">
                                        <input style="width: 74%" type="text"
                                            class="py-3 px-4 block border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            placeholder="Total Biaya">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end w-full mt-5 px-4">
                                        <form id="tambah_program" method="POST"
                                            action="{{ route('store_table_tambah_kegiatan',['tahun']) }}">
                                            @csrf
                                            <button type="submit"
                                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                Tambah
                                            </button>
                                        </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-slate-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start" style="width: 15%;">
                                    <a class="group inline-flex items-center gap-x-2" href="#">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Akun
                                        </span>
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </a>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <a class="group inline-flex items-center gap-x-2" href="#">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Detail
                                        </span>
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </a>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start" style="width: 20%;">
                                    <a class="group inline-flex items-center gap-x-2" href="#">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Vol
                                        </span>
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </a>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start" style="width: 15%;">
                                    <a class="group inline-flex items-center gap-x-2" href="#">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Satuan
                                        </span>
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </a>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start" style="width: 20%;">
                                    <a class="group inline-flex items-center gap-x-2" href="#">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Harga Satuan
                                        </span>
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </a>
                                </th>

                                <th scope="col" class="px-6 py-3 text-end">
                                    <div class="group inline-flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Jumlah
                                        </span>
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>

                                <th scope="col" class="px-6 py-3 text-end">
                                    <div class="group inline-flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            AKSI
                                        </span>
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="m7 15 5 5 5-5" />
                                            <path d="m7 9 5-5 5 5" />
                                        </svg>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($usulan_komponent_program as $item )
                                <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                    <form method="POST"
                                        action="{{ route('update_judul_kegiatan', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10" href="#">
                                                <div class="px-6 py-2">
                                                    <div class="hs-dropdown relative inline-flex">
                                                        <button id="hs-dropdown-with-title" type="button"
                                                            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                            {{-- {{ $item->akun_detail->kode ?? '' }} --}}
                                                            <svg class="hs-dropdown-open:rotate-180 w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m6 9 6 6 6-6" />
                                                            </svg>
                                                        </button>

                                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                                            aria-labelledby="hs-dropdown-with-title">
                                                            <div class="py-2 first:pt-0 last:pb-0">
                                                                {{-- @foreach ($akun_detail as $akun_details) --}}
                                                                    <form method="POST"
                                                                        action="{{ route('update_judul_kegiatan', ['id' => $item->id]) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button
                                                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                                                                            {{-- {{ $akun_details->id == $item->akun_detail_id ? 'Actions' : '' }} --}}
                                                                            type="submit" name="akun_detail_id"
                                                                            {{-- value="{{ $akun_details->id }}" --}}
                                                                            >
                                                                            {{-- {{ $akun_details->kode }} --}}
                                                                            {{-- -- --}}
                                                                            {{-- {{ $akun_details->uraian }} --}}
                                                                        </button>
                                                                    </form>
                                                                {{-- @endforeach --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>

                                        <td class="h-px w-72 min-w-[18rem]">
                                            <a class="block relative z-10" href="#">
                                                <div class="px-6 py-2">
                                                    @if ($item->akun_detail)
                                                        {{ $item->akun_detail->uraian }}
                                                    @else
                                                        -
                                                    @endif
                                                </div>
                                            </a>
                                        </td>
                                    </form>
                                    <form method="POST"
                                        action="{{ route('update_judul_kegiatan', ['id' => $item->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <td class="h-px w-px whitespace-nowrap">
                                            <a class="block relative z-10" href="#">
                                                <div class="px-6 py-2 w-full">
                                                    <span
                                                        class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                        <input type="text" name="volume" value="{{ $item->volume }}"
                                                            class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                            placeholder="Small size">
                                                    </span>
                                                </div>
                                            </a>
                                        </td>
                                    </form>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="hs-dropdown relative inline-flex">
                                            <button id="hs-dropdown-with-title" type="button"
                                                class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                {{ $item->satuan->satuan ?? '' }}
                                                <svg class="hs-dropdown-open:rotate-180 w-4 h-4"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m6 9 6 6 6-6" />
                                                </svg>
                                            </button>

                                            <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                                aria-labelledby="hs-dropdown-with-title">
                                                <div class="py-2 first:pt-0 last:pb-0">
                                                    {{-- @foreach ($satuan as $satuans) --}}
                                                        <form method="POST"
                                                            action="{{ route('update_judul_kegiatan', ['id' => $item->id]) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <button
                                                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                                                                {{-- {{ $satuans->id == $item->satuan_id ? 'Actions' : '' }} --}}
                                                                type="submit" name="satuan_id"
                                                                {{-- value="{{ $satuans->id }}" --}}
                                                                >
                                                                {{-- {{ $satuans->satuan }} --}}
                                                            </button>
                                                        </form>
                                                    {{-- @endforeach --}}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <form method="POST"
                                            action="{{ route('update_judul_kegiatan', ['id' => $item->id]) }}">
                                            @csrf
                                            @method('PUT')
                                            <span
                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                <input type="text" name="harga_satuan"
                                                    value="{{ $item->harga_satuan }}"
                                                    class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                    placeholder="Small size">
                                            </span>
                                        </form>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block relative z-10" href="#">
                                            <div class="px-6 py-2">
                                                <span
                                                    class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    Rp. {{ $item->volume * $item->harga_satuan }}
                                                </span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <div class="hs-dropdown relative inline-block [--placement:bottom-right] flex">
                                                {{-- @if ($currentUsulan) --}}
                                                {{-- @if (count($currentUsulan->usulan_komponen_program) < 1) --}}
                                                <form id="tambah_program" method="POST"
                                                    action="{{ route('store_table_judul_kegiatan') }}">
                                                    @csrf
                                                    <button type="submit"
                                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg"
                                                            width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                        Tambah
                                                    </button>
                                                </form>
                                                {{-- @endif --}}
                                                {{-- @endif --}}
                                                <form method="POST"
                                                    action="{{ route('destroy_table_judul_kegiatan', ['id' => $item->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="py-2 px-3 mx-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-red-600 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-red-500 dark:focus:ring-offset-gray-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                @foreach ($currentUsulan->usulan_komponen_program as $index => $item)
                                    <td class="h-px w-px whitespace-nowrap"></td>
                                    <td class="h-px w-72 min-w-[18rem]">
                                        <a class="block relative z-10" href="#">
                                            <div class="px-6 py-2">
                                                <p class="text-sm text-gray-500">- Biaya langganan lisensi Microsoft
                                                </p>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block relative z-10" href="#">
                                            <div class="px-6 py-2 w-full">
                                                <span
                                                    class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    <input type="text"
                                                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                        placeholder="Small size">
                                                </span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block relative z-10" href="#">
                                            <div class="px-6 py-2 w-full">
                                                <span
                                                    class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    <select
                                                        class="py-2 px-3 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                                                        <option selected>-- Pilih --</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block relative z-10" href="#">
                                            <div class="px-6 py-2 w-full">
                                                <span
                                                    class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    <input type="text"
                                                        class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                        placeholder="Small size">
                                                </span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <a class="block relative z-10" href="#">
                                            <div class="px-6 py-2">
                                                <span
                                                    class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                    Rp. 106.584.000
                                                </span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="h-px w-px whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                <button type="submit"
                                                    class="py-1 px-1 mx-1 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-red-600 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-red-500 dark:focus:ring-offset-gray-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                    <!-- End Table -->

                    <!-- Footer -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                        <div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                <span class="font-semibold text-gray-800 dark:text-gray-200">6</span> results
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    Next
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
@endsection

@extends('layouts.theme')
@section('content')
    <!-- Card -->
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                    <!-- Header -->
                    <div
                        class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                        <div>
                            <div class="hs-dropdown relative inline-flex">
                                <button id="hs-dropdown-default" type="button"
                                    class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                    {{ $currentUsulan->tahun }}
                                    <svg class="hs-dropdown-open:rotate-180 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                </button>

                                <div class="overflow-y-scroll hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                                    aria-labelledby="hs-dropdown-default">
                                    @foreach ($usulan as $item)
                                        <a href="{{ route('table_usulan_kegiatan', ['tahun' => $item->tahun]) }}"
                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700">
                                            {{ $item->tahun }}
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                    <button id="hs-as-table-table-export-dropdown" type="button"
                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                        <svg class="flex-shrink-0 w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                            <polyline points="7 10 12 15 17 10" />
                                            <line x1="12" x2="12" y1="15" y2="3" />
                                        </svg>
                                        Export
                                    </button>
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mt-2 divide-y divide-gray-200 min-w-[12rem] z-20 bg-white shadow-md rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                                        aria-labelledby="hs-as-table-table-export-dropdown">
                                        <div class="py-2 first:pt-0 last:pb-0">
                                            <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                href="#">
                                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path
                                                        d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z" />
                                                    <path
                                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                </svg>
                                                Excel
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button"
                                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                        data-hs-overlay="#hs-cookies">
                                        Open modal
                                    </button>
                                </div>

                                <form method="POST" action="{{ route('store_tahun') }}">
                                    @csrf
                                    <div id="hs-cookies"
                                        class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto">
                                        <div
                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                            <div
                                                class="relative flex flex-col bg-white shadow-lg rounded-xl dark:bg-gray-800">
                                                <div class="absolute top-2 end-2">
                                                    <button type="button"
                                                        class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                        data-hs-overlay="#hs-cookies">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="flex-shrink-0 w-4 h-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M18 6 6 18" />
                                                            <path d="m6 6 12 12" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="sm:p-14 overflow-y-auto">
                                                    <!-- Floating Input -->
                                                    <div class="relative">
                                                        @if ($errors->any())
                                                            {{-- <p>{{ $errors->first() }}</p> --}}
                                                            <script>
                                                                alert("tidak boleh tahun yang sama,karakter,input lebih dari 4 atau kurang dari 4")
                                                            </script>
                                                        @endif
                                                        <input name="tahun" id="hs-floating-input-email"
                                                            class="peer p-4 block w-full border border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                            focus:pt-8
                            focus:pb-2
                            [&:not(:placeholder-shown)]:pt-8
                            [&:not(:placeholder-shown)]:pb-2
                            autofill:pt-8
                            autofill:pb-2"
                                                            placeholder="tahun anggaran">
                                                        <label for="hs-floating-input-email"
                                                            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                              peer-focus:text-xs
                              peer-focus:-translate-y-1.5
                              peer-focus:text-gray-500
                              peer-[:not(:placeholder-shown)]:text-xs
                              peer-[:not(:placeholder-shown)]:-translate-y-1.5
                              peer-[:not(:placeholder-shown)]:text-gray-500">Tahun
                                                            Anggaran</label>
                                                    </div>
                                                    <!-- End Floating Input -->
                                                </div>

                                                <div class="flex items-center">
                                                    <a href="{{ route('table_usulan_kegiatan') }}"
                                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-es-xl border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-white/10 dark:hover:bg-white/20 dark:text-white dark:hover:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                        data-hs-overlay="#hs-cookies">
                                                        Kembali
                                                    </a>
                                                    <button type="submit"
                                                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-ee-xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                        data-hs-overlay="#hs-cookies">
                                                        simpan
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @if ($currentUsulan)
                                    @if (count($currentUsulan->usulan_komponen_program) < 1)
                                        <form method="POST"
                                            action="{{ route('store_table_usulan', ['name' => $currentUsulan->tahun]) }}">
                                            @csrf
                                            <button type="submit"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="16"
                                                    height="16" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                                Program
                                            </button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-slate-800">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-start" style="width: 10%">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        KODE
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        PROGRAM/ KEGIATAN/ KRO/ RO/ KOMPONEN/ SUBKOMP/ DETIL
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        VOLUME
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-center">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        SATUAN
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-center" style="width: 12%">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        HARGA SATUAN
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-center" style="width: 12%">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        JUMLAH
                                    </span>
                                </th>

                                <th scope="col" class="px-6 py-3 text-end" style="width: 15%">
                                    <span
                                        class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                        AKSI
                                    </span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @if ($currentUsulan)
                                @if ($currentUsulan->usulan_komponen_program)
                                    @foreach ($currentUsulan->usulan_komponen_program as $index => $item)
                                        <tr class="bg-white hover:bg-gray-50 dark:bg-slate-900 dark:hover:bg-slate-800">
                                            <form method="POST"
                                                action="{{ route('update_usulan', ['id' => $item->id]) }}">
                                                @csrf
                                                @method('PUT')
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block relative z-10" href="#">
                                                        <div class="px-6 py-2">
                                                            <div class="block">
                                                                <div
                                                                    class="hs-dropdown relative inline-flex [--placement:top-left]">
                                                                    <button id="hs-dropup" type="button"
                                                                        class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                        {{ $item->komponen_program->kode ?? 'Pilih' }}
                                                                        <svg class="hs-dropdown-open:rotate-180 w-4 h-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="m18 15-6-6-6 6" />
                                                                        </svg>
                                                                    </button>

                                                                    <div class="hs-dropdown-menu w-72 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                                                        aria-labelledby="hs-dropup">
                                                                        @foreach ($komponen_program as $komponen_programs)
                                                                            <form method="POST"
                                                                                action="{{ route('update_usulan', ['id' => $item->id]) }}">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <button
                                                                                    {{ $komponen_programs->id == $item->komponen_program_id ?? '' }}
                                                                                    type="submit"
                                                                                    name="komponen_program_id"
                                                                                    value="{{ $komponen_programs->id }}"
                                                                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm font-normal text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700">
                                                                                    {{ $komponen_programs->kode }}
                                                                                    {{-- --
                                            {{ $komponen_programs->uraian }} --}}
                                                                                </button>
                                                                            </form>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-72 min-w-[18rem]">
                                                    <a class="block relative z-10" href="#">
                                                        <div class="px-6 py-2">
                                                            @if ($item->komponen_program)
                                                                <p class="text-sm">{{ $item->komponen_program->uraian }}
                                                                </p>
                                                            @else
                                                                -
                                                            @endif
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block relative z-10" href="#">
                                                        <div class="py-2">
                                                            <span
                                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                                <form method="POST"
                                                                    action="{{ route('update_usulan', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <!-- Floating Input -->
                                                                    <div class="relative">
                                                                        <input name="volume" id="hs-floating-input-email"
                                                                            class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                                    focus:pt-8
                                    focus:pb-2
                                    [&:not(:placeholder-shown)]:pt-8
                                    [&:not(:placeholder-shown)]:pb-2
                                    autofill:pt-8
                                    autofill:pb-2"
                                                                            placeholder="you@email.com"
                                                                            value="{{ $item->volume }}">
                                                                        <label for="hs-floating-input-email"
                                                                            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                      peer-focus:text-xs
                                      peer-focus:-translate-y-1.5
                                      peer-focus:text-gray-500
                                      peer-[:not(:placeholder-shown)]:text-xs
                                      peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                      peer-[:not(:placeholder-shown)]:text-gray-500">Volume</label>
                                                                    </div>
                                                                    <!-- End Floating Input -->
                                                            </span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block relative z-10" href="#">
                                                        <div class="flex justify-center py-2">
                                                            <div class="block">
                                                                <div
                                                                    class="hs-dropdown relative inline-flex [--placement:top-left]">
                                                                    <button id="hs-dropup" type="button"
                                                                        class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                        {{ $item->satuan->satuan ?? 'Pilih' }}
                                                                        <svg class="hs-dropdown-open:rotate-180 w-4 h-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="m18 15-6-6-6 6" />
                                                                        </svg>
                                                                    </button>

                                                                    <div class="hs-dropdown-menu w-72 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                                                        aria-labelledby="hs-dropup">
                                                                        @foreach ($satuan as $satuans)
                                                                            <form method="POST"
                                                                                action="{{ route('update_usulan', ['id' => $item->id]) }}">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <button
                                                                                    {{ $satuans->id == $item->satuan_id ?? '' }}
                                                                                    type="submit" name="satuan_id"
                                                                                    value="{{ $satuans->id }}"
                                                                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm font-normal text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700">
                                                                                    {{ $satuans->satuan }}
                                                                                    {{-- --
                                          {{ $komponen_programs->uraian }} --}}
                                                                                </button>
                                                                            </form>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <a class="block relative z-10" href="#">
                                                        <div class="py-2">
                                                            <span
                                                                class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200">
                                                                <form method="POST"
                                                                    action="{{ route('update_usulan', ['id' => $item->id]) }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <!-- Floating Input -->
                                                                    <div class="relative">
                                                                        <input name="harga_satuan"
                                                                            id="hs-floating-input-email"
                                                                            class="peer p-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                                    focus:pt-8
                                    focus:pb-2
                                    [&:not(:placeholder-shown)]:pt-8
                                    [&:not(:placeholder-shown)]:pb-2
                                    autofill:pt-8
                                    autofill:pb-2"
                                                                            placeholder="you@email.com"
                                                                            value="{{ $item->harga_satuan }}">
                                                                        <label for="hs-floating-input-email"
                                                                            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                      peer-focus:text-xs
                                      peer-focus:-translate-y-1.5
                                      peer-focus:text-gray-500
                                      peer-[:not(:placeholder-shown)]:text-xs
                                      peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                      peer-[:not(:placeholder-shown)]:text-gray-500">harga_satuan</label>
                                                                    </div>
                                                                    <!-- End Floating Input -->
                                                            </span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <div class="flex justify-center px-6 py-2">
                                                        <div
                                                            class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                            <h3>Rp. {{ $item->volume * $item->harga_satuan }}</h3>
                                                        </div>
                                                    </div>
                                                </td>
                                            </form>
                                            <td class="h-px w-px whitespace-nowrap">
                                                <div class="flex justify-end px-6 py-2">
                                                    <div
                                                        class="flex hs-dropdown relative inline-block [--placement:bottom-right]">
                                                        <div>
                                                            {{-- @if ($index + 1 == count($currentUsulan->usulan_komponen_program)) --}}
                                                            {{-- @foreach ($kategori as $index => $kategori[$index + 1]) --}}

                                                            {{-- @if ($index == count($currentUsulan->usulan_komponen_program)) --}}
                                                            <form method="POST"
                                                                action="{{ route('store_table_kegiatan', ['name' => $currentUsulan->tahun]) }}">
                                                                @csrf
                                                                @if ($kategori->where('id', $item->komponen_program_id + 1)->first()->id != 6)
                                                                    <button type="submit"
                                                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            viewBox="0 0 16 16" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round" />
                                                                        </svg>

                                                                        {{ $kategori->where('id', $item->komponen_program_id + 1)->first()->kategori }}

                                                                    </button>
                                                                @endif
                                                                @if ($kategori->where('id', $item->komponen_program_id + 1)->first()->id == 6)
                                                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                                                        href="{{ route('table_judul_kegiatan') }}">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            viewBox="0 0 16 16" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round" />
                                                                        </svg>
                                                                        {{ $kategori->where('id', $item->komponen_program_id + 1)->first()->kategori }}
                                                                    </a>
                                                                @endif
                                                            </form>
                                                            {{-- @endif --}}
                                                            {{-- @endforeach --}}
                                                            {{-- @endif --}}
                                                        </div>
                                                        <form method="POST"
                                                            action="{{ route('destroy_table_usulan', ['id' => $item->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="py-2 px-3 mx-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-red-600 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-red-500 dark:focus:ring-offset-gray-800">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
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
                                @endif
                            @endif
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

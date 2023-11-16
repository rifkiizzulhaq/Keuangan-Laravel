@extends('layouts.theme');
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
                            <div>
                                <label for="hs-select-label" class="block text-sm font-medium mb-2 dark:text-white">Tahun
                                    Anggaran
                                </label>
                                <div class="hs-dropdown relative inline-flex">
                                    <button id="hs-dropdown-slideup-animation" type="button"
                                        class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        {{ $currentUsulan->tahun }}
                                        <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-72 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mt-2 min-w-[15rem] bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                        aria-labelledby="hs-dropdown-slideup-animation">
                                        @foreach ($usulan as $item)
                                            <a href="{{ route('table_usulan_kegiatan', ['tahun' => $item->tahun]) }}"
                                                class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                href="#">
                                                {{ $item->tahun }}
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="inline-flex gap-x-2">
                                <div class="text-center">
                                    <button type="button"
                                        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                        data-hs-overlay="#hs-bg-gray-on-hover-cards">
                                        Masukan Tahun Anggaran
                                    </button>
                                </div>

                                <form>
                                    @csrf
                                    <div id="hs-bg-gray-on-hover-cards"
                                        class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-[60] overflow-x-hidden overflow-y-auto">
                                        <div
                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
                                            <div
                                                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
                                                <div
                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                    <div></div>
                                                    <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 rounded-md text-gray-500 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-sm dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800"
                                                        data-hs-overlay="#hs-bg-gray-on-hover-cards">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="8" height="8"
                                                            viewBox="0 0 8 8" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="p-4 overflow-y-auto">
                                                    <div class="sm:divide-y divide-gray-200 dark:divide-gray-700">
                                                        <div class="py-3 sm:py-6">
                                                            <!-- Grid -->
                                                            <div class="grid gap-2 sm:grid-cols-2 md:grid-cols-3">
                                                                <!-- Card -->
                                                                <div class="flex">
                                                                    <div
                                                                        class="mt-1.5 flex justify-center flex-shrink-0 rounded-l-xl">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" width="16" height="16"
                                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div class="grow ml-6">
                                                                        <h3
                                                                            class="text-sm font-semibold text-blue-600 dark:text-blue-500">
                                                                            Tahun Anggaran
                                                                        </h3>
                                                                        <div class="mt-2">
                                                                            @if ($errors->any())
                                                                                {{-- <p>{{ $errors->first() }}</p> --}}
                                                                                <script>
                                                                                    alert("tidak boleh tahun yang sama,karakter,input lebih dari 4 atau kurang dari 4")
                                                                                </script>
                                                                            @endif
                                                                            <input name="tahun" type="text"
                                                                                class="py-2 px-3 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                                                placeholder="masukan tahun anggaran"
                                                                                required="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Card -->
                                                            </div>
                                                            <!-- End Grid -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                                                    <div>
                                                        <button type="submit"
                                                            class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @if ($currentUsulan)
                                    @if (count($currentUsulan->usulan_komponen_program) > 1)
                                        <form id="tambah_program" method="POST"
                                            action="{{ route('store_table_usulan', ['name' => $currentUsulan->tahun]) }}">
                                            @csrf
                                            <button type="submit"
                                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                                </svg>
                                                Tambah Program
                                            </button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- End Header -->
                    {{-- {{ $currentUsulan->usulan_komponen_program }} --}}
                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-slate-900">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left w-[25%]">
                                    <div class="flex items-center gap-x-2">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Kode
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start">
                                    <div class="group inline-flex items-center gap-x-2" href="#">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            PROGRAM/ KEGIATAN/ KRO/ RO/ KOMPONEN/ SUBKOMP/ DETIL
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="ppx-6 py-3 text-start" style="width: 20%">
                                    <div class="flex items-center justify-center ">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            VOL
                                        </span>
                                    </div>
                                </th>

                                <th scope="col" class="px-6 py-3 text-start" style="width: 40%">
                                    <div class="group inline-flex items-center gap-x-2" href="#">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            SATUAN
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start" style="width: 30%">
                                    <div class="flex items-center justify-center ">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            HARGA SATUAN
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-start" style="width: 20%">
                                    <div class="flex items-center justify-center ">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            JUMLAH
                                        </span>
                                    </div>
                                </th>
                                <th scope="col" class="py-3">
                                    <div class="flex items-center justify-center">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            AKSI
                                        </span>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody id="row" class="divide-y divide-gray-200 dark:divide-gray-700">
                            @if ($currentUsulan)
                                @if ($currentUsulan->usulan_komponen_program)
                                    @foreach ($currentUsulan->usulan_komponen_program as $index => $item)
                                        <tr>
                                            <form method="POST"
                                                action="{{ route('update_kegiatan', ['id' => $item->id]) }}">
                                                @csrf
                                                @method('PUT')
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <div class="px-6 py-2">
                                                        <div class="flex items-center gap-x-2">
                                                            <div class="grow">
                                                                {{-- <form method="POST"
                                                                action="{{ route('store_usulan_unit') }}"> --}}
                                                                <span class="text-sm text-gray-600 dark:text-gray-400">
                                                                    {{-- <select id="hs-hidden-select"
                                                                        class="py-3 px-4 pr-9 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                                                        <option disabled selected>-- Pilih --</option>
                                                                        @foreach ($komponen_program as $komponen_programs)
                                                                            <option
                                                                                {{ $komponen_programs->id == $item->komponen_program_id ? 'selected' : '' }}
                                                                                value="{{ $komponen_programs->id }}">
                                                                                {{ $komponen_programs->kode }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select> --}}
                                                                    <div class="hs-dropdown relative inline-flex">
                                                                        <button id="hs-dropdown-with-title" type="button"
                                                                            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                            {{ $item->komponen_program->kode ?? '' }}
                                                                            <svg class="hs-dropdown-open:rotate-180 w-4 h-4"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path d="m6 9 6 6 6-6" />
                                                                            </svg>
                                                                        </button>

                                                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                                                            aria-labelledby="hs-dropdown-with-title">
                                                                            <div class="py-2 first:pt-0 last:pb-0">
                                                                                @foreach ($komponen_program as $komponen_programs)
                                                                                    <form method="POST"
                                                                                        action="{{ route('update_kegiatan', ['id' => $item->id]) }}">
                                                                                        @csrf
                                                                                        @method('PUT')
                                                                                        <button
                                                                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                                                                                            {{ $komponen_programs->id == $item->komponen_program_id ? 'Actions' : '' }}
                                                                                            type="submit"
                                                                                            name="komponen_program_id"
                                                                                            value="{{ $komponen_programs->id }}">
                                                                                            {{ $komponen_programs->kode }}
                                                                                            --
                                                                                            {{ $komponen_programs->uraian }}
                                                                                        </button>
                                                                                    </form>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </span>
                                                                {{-- </form> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="h-px w-72 min-w-[18rem]">
                                                    <div class="block relative z-10" href="#">
                                                        <div class="px-6 py-2">
                                                            <span class="text-sm text-gray-600 dark:text-gray-400">
                                                                {{-- komponen_program --}}
                                                                {{-- {{ $item->komponen_program }} --}}
                                                                @if ($item->komponen_program)
                                                                    {{ $item->komponen_program->uraian }}
                                                                @else
                                                                    -
                                                                @endif


                                                                {{-- Program
                                                                Pendidikan
                                                                dan
                                                                Pelatihan Vokasi --}}

                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <form method="POST"
                                                    action="{{ route('update_kegiatan', ['id' => $item->id]) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-2 flex justify-center">
                                                            <span class="text-sm text-gray-600 dark:text-gray-400">
                                                                <input type="text" name="volume"
                                                                    value="{{ $item->volume }}"
                                                                    class="py-2 px-3 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                                    placeholder="Vol">
                                                            </span>
                                                        </div>
                                                    </td>
                                                </form>
                                                <td>
                                                    <div class="hs-dropdown relative inline-flex">
                                                        <button id="hs-dropdown-with-title" type="button"
                                                            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                            {{ $item->satuan->satuan ?? '' }}
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
                                                                @foreach ($satuan as $satuans)
                                                                    <form method="POST"
                                                                        action="{{ route('update_kegiatan', ['id' => $item->id]) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button
                                                                            class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:bg-gray-700"
                                                                            {{ $satuans->id == $item->satuan_id ? 'Actions' : '' }}
                                                                            type="submit" name="satuan_id"
                                                                            value="{{ $satuans->id }}">
                                                                            {{ $satuans->satuan }}
                                                                        </button>
                                                                    </form>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <form method="POST"
                                                    action="{{ route('update_kegiatan', ['id' => $item->id]) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <td class="h-px w-px whitespace-nowrap">
                                                        <div class="px-6 py-2 flex justify-center">
                                                            <span class="text-sm text-gray-600 dark:text-gray-400">
                                                                <input type="text" name="harga_satuan"
                                                                    value="{{ $item->harga_satuan }}"
                                                                    class="py-2 px-3 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                                                    placeholder="Vol">
                                                            </span>
                                                        </div>
                                                    </td>
                                                </form>
                                                <td class="h-px w-px whitespace-nowrap">
                                                    <div class="px-6 py-2 flex justify-center">
                                                        <span
                                                            class="text-sm text-gray-600 dark:text-gray-400">Rp.{{ $item->volume * $item->harga_satuan }}</span>
                                                    </div>
                                                </td>

                                                <td class="h-px w-px whitespace-nowrap">
                                                    <div class=" py-2 flex justify-end">
                                                        <div>
                                                            @if ($index + 1 == count($currentUsulan->usulan_komponen_program))
                                                                @foreach ($kategori as $index => $perulangan)
                                                                    @if ($index == count($currentUsulan->usulan_komponen_program))
                                                                        <form method="POST"
                                                                            action="{{ route('store_table_kegiatan', ['name' => $currentUsulan->tahun]) }}">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="16" height="16"
                                                                                    viewBox="0 0 16 16" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round" />
                                                                                </svg>
                                                                                {{ $perulangan->kategori }}
                                                                            </button>
                                                                        </form>
                                                                    @endif
                                                                @endforeach
                                                            @endif
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
                                                </td>
                                            </form>
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
                        <div class="inline-flex items-center gap-x-2">
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                Showing:
                            </p>
                            <div class="max-w-sm space-y-3">
                                <select
                                    class="py-2 px-3 pr-9 block w-full border border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option selected>9</option>
                                    <option>20</option>
                                </select>
                            </div>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                of 20
                            </p>
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                <button type="button"
                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                    Prev
                                </button>

                                <button type="button"
                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                    Next
                                    <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
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

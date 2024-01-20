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
                                <div class="flex w-full items-center">
                                    <div class="flex items-center w-full">
                                        <div style="width: 15%">
                                            <h1 class="dark:text-white">Judul Kegiatan</h1>
                                        </div>
                                        <div style="width: 69%" class="">
                                            @if ($usulan_komponent_program->kegiatans)
                                                <select
                                                    class="py-3 px-4 pe-9 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 sm:p-4">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($usulan_komponent_program->kegiatans as $item)
                                                        <option>{{ $item->judul_kegiatan ?? '' }}</option>
                                                    @endforeach
                                                </select>

                                                {{-- <div class="hs-dropdown relative inline-flex">
                                                <button id="hs-dropdown-slideup-animation" type="button"
                                                    class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                    {{ $kegiatans->judul_kegiatan ?? 'Action' }}
                                                    <svg class="hs-dropdown-open:rotate-180 w-4 h-4"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 9 6 6 6-6" />
                                                    </svg>
                                                </button>
                                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-72 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mt-2 min-w-[15rem] bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                                    aria-labelledby="hs-dropdown-slideup-animation">

                                                </div>
                                            </div> --}}
                                            @endif
                                        </div>

                                    </div>
                                    <div>
                                        <div class="text-center">
                                            <button type="button"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                data-hs-overlay="#hs-notifications">
                                                Kegiatan
                                            </button>
                                        </div>

                                        <div id="hs-notifications"
                                            class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto">
                                            <div
                                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                <div
                                                    class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-gray-800 dark:border-gray-700">
                                                    <div class="absolute top-2 end-2">
                                                        <button type="button"
                                                            class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                            data-hs-overlay="#hs-notifications">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="flex-shrink-0 w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M18 6 6 18" />
                                                                <path d="m6 6 12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <form method="POST" action="{{ route('modal-kegiatan') }}">
                                                        @csrf
                                                        <div class="p-4 sm:p-10 overflow-y-auto">
                                                            <div class="mb-6 text-center">
                                                                <h3
                                                                    class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-200">
                                                                    Input Judul Kegiatannya
                                                                </h3>
                                                            </div>

                                                            <input type="hidden"
                                                                value="{{ $usulan_komponent_program->first()->id }}"
                                                                name="usulan_komponen_program_id">

                                                            <div class="space-y-4">
                                                                <!-- Card -->
                                                                <!-- Floating Input -->
                                                                <div class="relative">
                                                                    <input name="judul_kegiatan"
                                                                        id="hs-floating-input-email"
                                                                        class="peer p-4 block w-full border border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                                                            focus:pt-8
                                                            focus:pb-2
                                                            [&:not(:placeholder-shown)]:pt-8
                                                            [&:not(:placeholder-shown)]:pb-2
                                                            autofill:pt-8
                                                            autofill:pb-2"
                                                                        placeholder="you@email.com">
                                                                    <label for="hs-floating-input-email"
                                                                        class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                            peer-focus:text-xs
                                                            peer-focus:-translate-y-1.5
                                                            peer-focus:text-gray-500
                                                            peer-[:not(:placeholder-shown)]:text-xs
                                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                            peer-[:not(:placeholder-shown)]:text-gray-500">Judul
                                                                        Kegiatan</label>
                                                                </div>
                                                                <!-- End Floating Input -->
                                                                <!-- End Card -->
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-gray-800 dark:border-gray-700">
                                                            <button type="submit"
                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                Simpan
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center mb-2">
                                    <div style="width: 15%">
                                        <h1 class="dark:text-white">Kode Kegiatan</h1>
                                    </div>
                                    <div style="width: 60%">
                                        <select id="kode-kegiatan"
                                            class="py-3 px-4 pe-9 block w-full border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 sm:p-4">
                                            <option selected>Open this select menu</option>
                                            @foreach ($akun_detail as $item)
                                                <option value="{{ $item->id }}">{{ $item->kode ?? '' }} --
                                                    {{ $item->uraian }}</option>
                                            @endforeach
                                        </select>
                                        <script>
                                            const kodeKegiatan = document.getElementById('kode-kegiatan');
                                            kodeKegiatan.addEventListener('change', function() {
                                                const kodeKegiatanValue = kodeKegiatan.value;
                                                const kegiatanId = document.getElementById('kegiatan_id');
                                                kegiatanId.value = kodeKegiatanValue;
                                                console.info('test', kegiatanId.value);
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="flex items-center mt-2">
                                    <div style="width: 15%">
                                        <h1 class="dark:text-white">Total Biaya</h1>
                                    </div>
                                    <div class="w-full">
                                        <input style="width: 74%" type="text"
                                            class="py-3 px-4 block border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                            placeholder="Total Biaya">
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end w-full mt-5 px-4">
                                {{-- <form id="tambah_program" method="POST"
                                    action="{{ route('store_table_tambah_kegiatan', ['tahun']) }}">
                                    @csrf
                                    <button type="submit"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Tambah
                                    </button>
                                </form> --}}
                                <form method="POST" action="{{ route('modal-rincian') }}">
                                    @csrf
                                    @method('POST')

                                    <div class="text-center">
                                        <button type="button"
                                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                            data-hs-overlay="#hs-bg-gray-on-hover-cards1">
                                            Tambah Rincian
                                        </button>
                                    </div>

                                    <div id="hs-bg-gray-on-hover-cards1"
                                        class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div
                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
                                            <div
                                                class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                                                <div
                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                                                    <h3 class="font-bold text-gray-800 dark:text-gray-200">
                                                        Input Rincian
                                                    </h3>
                                                    <button type="button"
                                                        class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                                        data-hs-overlay="#hs-bg-gray-on-hover-cards1">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="flex-shrink-0 w-4 h-4"
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path d="M18 6 6 18" />
                                                            <path d="m6 6 12 12" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="p-4 overflow-y-auto">
                                                    <div class="sm:divide-y divide-gray-200 dark:divide-gray-700">
                                                        <div class="flex flex-col">
                                                            <div class="w-1/2">
                                                                <!-- Card -->
                                                                <div
                                                                    class="bg-white p-4 transition duration-300 rounded-lg dark:bg-gray-800 dark:hover:bg-white/[.05] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                    <!-- Floating Input -->
                                                                    <div class="relative">
                                                                        <input id="hs-floating-input-email" name="detail"
                                                                            required=""
                                                                            class="peer p-4 block w-full border border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                                                                        focus:pt-8
                                                                        focus:pb-2
                                                                        [&:not(:placeholder-shown)]:pt-8
                                                                        [&:not(:placeholder-shown)]:pb-2
                                                                        autofill:pt-8
                                                                        autofill:pb-2"
                                                                            placeholder="Detail">
                                                                        <label for="hs-floating-input-email"
                                                                            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                                        peer-focus:text-xs
                                                                        peer-focus:-translate-y-1.5
                                                                        peer-focus:text-gray-500
                                                                        peer-[:not(:placeholder-shown)]:text-xs
                                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                                        peer-[:not(:placeholder-shown)]:text-gray-500">Detail</label>
                                                                    </div>
                                                                    <!-- End Floating Input -->
                                                                </div>
                                                                <!-- End Card -->

                                                                <!-- Card -->
                                                                <div
                                                                    class="bg-white p-4 transition duration-300 rounded-lg dark:bg-gray-800 dark:hover:bg-white/[.05] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                    <!-- Floating Input -->
                                                                    <div class="relative">
                                                                        <input id="hs-floating-input-email" name="volume"
                                                                            required=""
                                                                            class="peer p-4 block w-full border border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                                                                        focus:pt-8
                                                                        focus:pb-2
                                                                        [&:not(:placeholder-shown)]:pt-8
                                                                        [&:not(:placeholder-shown)]:pb-2
                                                                        autofill:pt-8
                                                                        autofill:pb-2"
                                                                            placeholder="Volume">
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
                                                                </div>
                                                                <!-- End Card -->

                                                                <!-- Card -->
                                                                <div
                                                                    class="bg-white p-4 transition duration-300 rounded-lg dark:bg-gray-800 dark:hover:bg-white/[.05] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                    <!-- Floating Input -->
                                                                    <div class="relative">
                                                                        <input id="hs-floating-input-email" name="satuan"
                                                                            required=""
                                                                            class="peer p-4 block w-full border border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                                                                        focus:pt-8
                                                                        focus:pb-2
                                                                        [&:not(:placeholder-shown)]:pt-8
                                                                        [&:not(:placeholder-shown)]:pb-2
                                                                        autofill:pt-8
                                                                        autofill:pb-2"
                                                                            placeholder="Satuan">
                                                                        <label for="hs-floating-input-email"
                                                                            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                                        peer-focus:text-xs
                                                                        peer-focus:-translate-y-1.5
                                                                        peer-focus:text-gray-500
                                                                        peer-[:not(:placeholder-shown)]:text-xs
                                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                                        peer-[:not(:placeholder-shown)]:text-gray-500">Satuan</label>
                                                                    </div>
                                                                    <!-- End Floating Input -->
                                                                </div>
                                                                <!-- End Card -->

                                                                <!-- Card -->
                                                                <div
                                                                    class="bg-white p-4 transition duration-300 rounded-lg dark:bg-gray-800 dark:hover:bg-white/[.05] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                    <!-- Floating Input -->
                                                                    <div class="relative">
                                                                        <input id="hs-floating-input-email"
                                                                            name="harga_satuan" required=""
                                                                            class="peer p-4 block w-full border border-gray-200 rounded-lg text-sm placeholder:text-transparent focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600
                                                                        focus:pt-8
                                                                        focus:pb-2
                                                                        [&:not(:placeholder-shown)]:pt-8
                                                                        [&:not(:placeholder-shown)]:pb-2
                                                                        autofill:pt-8
                                                                        autofill:pb-2"
                                                                            placeholder="Harga Satuan">
                                                                        <label for="hs-floating-input-email"
                                                                            class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                                                        peer-focus:text-xs
                                                                        peer-focus:-translate-y-1.5
                                                                        peer-focus:text-gray-500
                                                                        peer-[:not(:placeholder-shown)]:text-xs
                                                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                                                        peer-[:not(:placeholder-shown)]:text-gray-500">Harga
                                                                            Satuan</label>
                                                                    </div>
                                                                    <input id="kegiatan_id" type="hidden"
                                                                        name="kegiatan_id" />
                                                                    <!-- End Floating Input -->
                                                                </div>
                                                                <!-- End Card -->

                                                                <!-- Card -->
                                                                {{-- <div
                                                                    class="bg-white p-4 transition duration-300 rounded-lg dark:bg-gray-800 dark:hover:bg-white/[.05] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                    <!-- Input -->
                                                                    <input type="text" name="kegiatan_id" value="kegiatan_id"
                                                                        required=""
                                                                        class="opacity-70 pointer-events-none py-3 px-4 block w-full bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                                                        placeholder="Disabled readonly input" disabled
                                                                        readonly>
                                                                    <!-- End Input -->
                                                                </div> --}}
                                                                <!-- End Card -->
                                                            </div>
                                                        </div>
                                                        <div class="flex justify-end border-t pt-3">
                                                            <button type="submit"
                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                                                Simpan
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End Header -->

                    <!-- Table -->
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-slate-800">
                            <tr>
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

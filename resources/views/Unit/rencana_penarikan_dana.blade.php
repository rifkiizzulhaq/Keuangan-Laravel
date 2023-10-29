@extends('layouts.theme')
@section('content')
    <div class="container">
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div
                        class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
                        <!-- Header -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                            <div class="flex">
                                <div>
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                        Tahun anggaran
                                    </h2>
                                </div>
                                <div>

                                </div>
                                <div class="hs-dropdown relative inline-flex">
                                    <button id="hs-dropdown-with-dividers" type="button"
                                        class="hs-dropdown-toggle py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        Actions
                                        <svg class="hs-dropdown-open:rotate-180 w-2.5 h-2.5 text-gray-600" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                    </button>

                                    <div class="hs-dropdown-menu hidden transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 min-w-[15rem] bg-white shadow-md rounded-lg p-2 mt-2 divide-y divide-gray-200 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700"
                                        aria-labelledby="hs-dropdown-with-dividers">
                                        <div class="py-2 first:pt-0 last:pb-0">
                                            {{-- @foreach ($listtahun as $item)
                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                                                    href="{{ route('unit.kegiatan', ['tahun' => $item->tahun]) }}">
                                                    {{ $item->tahun }}
                                                </a>
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a href="{{ route('unit.anggaran') }}"
                                        class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                        href="#">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Tambah Usulan Kegiatan
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left border-l border-gray-200 dark:border-gray-700">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Uraian
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Volume
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Satuan
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Harga Satuan
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Jumlah
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            Action
                                        </span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                {{-- @foreach ($usulan_kegiatan as $item)
                                    <tr class="bg-white  dark:bg-slate-900 dark:hover:bg-slate-800">
                                        <td class="h-px w-72 ">
                                            <div class="block h-full p-6">
                                                <span class="block text-sm text-gray-500">{{ $item->rincian ?? '' }}</span>
                                            </div>
                                        </td>
                                        <td class="h-px  ">
                                            <div class="block h-full p-6">
                                                <span class=" text-sm text-gray-500">{{ $item->volume ?? '' }}</span>
                                            </div>
                                        </td>
                                        <td class="h-px w-72 ">
                                            <div class="block h-full p-6">
                                                <span class="block text-sm text-gray-500">{{ $item->satuan ?? '' }}</span>
                                            </div>
                                        </td>
                                        <td class="h-px w-72 ">
                                            <div class="block h-full p-6">
                                                <p>{{ $item->harga_satuan ?? '' }}</p>
                                            </div>
                                        </td>
                                        <td class="h-px w-72 ">
                                            <div class="block h-full p-6">
                                                <p>
                                                    {{ $item->volume * $item->harga_satuan }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="h-px w-72 ">
                                            <div class="block h-full p-6">
                                                <div class="flex">
                                                    <a href="{{ route('unit.edit_anggaran', ['id' => $item->id]) }}"
                                                        class="mx-2 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-yellow-100 border border-transparent font-semibold text-yellow-500 hover:text-black hover:bg-yellow-100 focus:outline-none focus:ring-2 ring-offset-white focus:ring-yellow-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                        Update
                                                    </a>
                                                    <form action="{{ route('unit.destroy_anggaran', ['id' => $item->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-red-100 border border-transparent font-semibold text-red-500 hover:text-black hover:bg-red-100 focus:outline-none focus:ring-2 ring-offset-white focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                            Delete
                                                        </button>
                                                    </form>
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
                            <div></div>

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
    </div>
@endsection

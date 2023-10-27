@extends('layouts.theme')
@section('content')
    <div class="container">
        <!-- Card -->
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
                                        Daftar Tabel Mengusulkan Dari Unit
                                    </h2>

                                </div>

                            </div>

                            {{-- <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                        href="{{ route('admin.kegiatan_create') }}">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Create
                                    </a>
                                </div>
                            </div> --}}
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
                                            Daftar Unit Yang Mengusulkan
                                        </span>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <span
                                            class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                            ACTION
                                        </span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                {{-- @foreach ($usulan as $item) --}}
                                <tr>
                                    <td class="h-20 w-auto whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <span class="text-md text-gray-500">UPA Perpus</span>
                                            {{-- <span class="text-md text-gray-500">{{ $item->rincian ?? '' }}</span> --}}
                                        </div>
                                    </td>
                                    <td class="h-20 w-auto whitespace-nowrap">
                                        <div class="px-6 py-2">
                                            <div class="inline-flex gap-x-2">
                                                <a href="{{ route('admin.unit_mengusulkan') }}"
                                                    class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    Lihat
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- <td class="h-20 w-auto whitespace-nowrap flex items-center">
                                        <a href="{{ route('admin.kegiatan_edit', ['id' => $item->id]) }}" class="mx-2 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-yellow-200 font-semibold text-yellow-500 hover:text-white hover:bg-yellow-500 hover:border-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                            UPDATE
                                        </a>
                                        <form method="POST" action="{{ route('admin.kegiatan_delete',['id' => $item->id]) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-red-200 font-semibold text-red-500 hover:text-white hover:bg-red-500 hover:border-red-500 focus:outline-none focus:ring-2 focus:ring-red-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                DELETE
                                            </button>
                                        </form>
                                    </td> --}}
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div
                            class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold text-gray-800 dark:text-gray-200">9</span> results
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
    </div>
@endsection

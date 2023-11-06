@extends('layouts.theme');
@section('content')
    <div>
      <!-- Card Section -->
      <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
          <form method="POST" action="{{ route('store_kategori') }}">
            @csrf
              <!-- Section -->
              <div>
                <div>
                  <div>
                    <a href="{{ route('table_kategori') }}" class="py-2 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-blue-200 font-semibold text-blue-500 hover:text-white hover:bg-blue-500 hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                      </svg>
                      Kembali
                    </a>
                  </div>
                </div>
                <div class="py-5">
                  <h1 class="text-xl font-semibold">Kategori</h1>
                </div>
              </div>
              <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700">
                <div class="sm:col-span-3">
                  <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                    Kategori
                  </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                  <input id="af-submit-application-email" name="kategori" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                </div>
                <!-- End Col -->

              </div>
              <!-- End Section -->
              <div class="w-1/5">
                <button type="submit" class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                  Simpan
                </button>
              </div>
          </form>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Card Section -->
    </div>
@endsection

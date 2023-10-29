@extends('layouts.theme')
@section('content')
  <div class="container">
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
              <div class="flex flex-col">
                <div>
                  <div class="inline-flex gap-x-2">
                    <a href="{{ route('unit.kegiatan') }}" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                      </svg>
                      Back
                    </a>
                  </div>
                </div>
                <div class="mt-5">
                  <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    Tambah Data Perencanaan Anggaran
                  </h2>
                </div>
              </div>
            </div>
            <!-- End Header -->

            <div class="bg-white shadow p-4 sm:p-7 dark:bg-slate-900">
              <div>
                <div class="border border-gray-400 w-full rounded-md p-10">
                  <div class="flex justify-between">
                    <div></div>
                    <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                      </svg>
                      Tambah Anggaran
                    </button>
                  </div>
                  <form method="POST" action="{{ route('unit.store_anggaran') }}">
                    @csrf
                    <!-- Section -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 first:border-transparent border-gray-200 dark:border-gray-700">
                      <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          Detail Rincian 1
                        </h2>
                      </div>
                      <!-- End Col -->

                      <div class="sm:col-span-9">
                        <div class="sm:flex">
                          <input id="af-submit-application-email" name="rincian" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="sm:col-span-9">
                        <div class="flex ">
                          <div>
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Tahun Anggaran
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="tahun_anggaran" type="date" class="py-2 px-3 pr-11 block border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                          <div class="ml-5">
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Volume
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="volume" class="py-2 px-3 pr-11 block  border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                          <div class="ml-5">
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Satuan
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="satuan" class="py-2 px-3 pr-11 block  border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                          <div class="ml-5">
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Harga Satuan
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="harga_satuan" class="py-2 px-3 pr-11 block  border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Section -->

                    <button type="submit" class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                      Submit application
                    </button>
                    </div>
                    <!-- End Section -->
                  </form>
                </div>
                <div class="border border-gray-400 w-full rounded-md mt-3 p-10">
                  <div class="flex justify-between">
                    <div></div>
                    <div>
                      <button type="button" class="mx-2 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-400 text-white hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                        </svg>
                        Hapus Anggaran
                      </button>
                      <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Tambah Anggaran
                      </button>
                    </div>
                  </div>
                  <form method="POST" action="{{ route('unit.store_anggaran') }}">
                    @csrf
                    <!-- Section -->
                    <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 first:border-transparent border-gray-200 dark:border-gray-700">
                      <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          Detail Rincian 2
                        </h2>
                      </div>
                      <!-- End Col -->

                      <div class="sm:col-span-9">
                        <div class="sm:flex">
                          <input id="af-submit-application-email" name="rincian" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                        </div>
                      </div>
                      <!-- End Col -->

                      <div class="sm:col-span-9">
                        <div class="flex ">
                          <div>
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Tahun Anggaran
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="tahun_anggaran" type="date" class="py-2 px-3 pr-11 block border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                          <div class="ml-5">
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Volume
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="volume" class="py-2 px-3 pr-11 block  border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                          <div class="ml-5">
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Satuan
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="satuan" class="py-2 px-3 pr-11 block  border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                          <div class="ml-5">
                            <div>
                              <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
                                Harga Satuan
                              </label>
                            </div>
                            <div class="sm:flex">
                              <input id="af-submit-application-email" name="harga_satuan" class="py-2 px-3 pr-11 block  border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Section -->

                    <button type="submit" class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                      Submit application
                    </button>
                    </div>
                    <!-- End Section -->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

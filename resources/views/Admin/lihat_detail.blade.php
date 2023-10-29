@extends('layouts.theme')
@section('content')
    <div class="border border-gray-400 w-full rounded-md p-10">
        <div class="flex justify-between">
            <div>
                <div class="cursor-pointer py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                    onclick="kembali()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                    </svg>
                    Kembali
                </div>
                <div class="mt-5">
                  <h1 class="text-lg font-semibold">Daftar Kegiatan Yang Di Pilih</h1>
                </div>
            </div>
            {{-- <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Tambah Anggaran
      </button> --}}
        </div>
        <form method="POST" action="{{ route('admin.buat_kode_usulan', ['id' => $usulan_kegiatan->id]) }}">
            @csrf
            <!-- Section -->
            @foreach ($kegiatan_siperada->program as $item)
              @if ($kodeprogram == $item->kode)
                <div
                    class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 first:border-transparent border-gray-200 dark:border-gray-700">
                    <div class="sm:col-span-12">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Program
                        </h2>
                    </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                      <div class="sm:flex">
                          <label for="hs-hidden-select" class="sr-only">Label</label>
                          <button value="{{ $item->id }}" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all cursor-not-allowed text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" disabled>
                            {{ $item->kode }} -- {{ $item->program }}
                          </button>
                      </div>
                  </div>
                  @endif
                @endforeach
                <!-- End Col -->
                @foreach ($kegiatan_siperada->kegiatan as $item)
                  @if ($kegiatan == $item->kode)
                  <div class="sm:col-span-12">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          Kegiatan
                      </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                      <div class="sm:flex">
                          <label for="hs-hidden-select" class="sr-only">Label</label>


                              <button value="{{ $item->id }}" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all cursor-not-allowed text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" disabled>
                                {{-- @if ($kegiatan_siperada->program || $kegiatan_siperada->kegiatan || $kegiatan_siperada->kro || $kegiatan_siperada->ro || $kegiatan_siperada->komponen || $kegiatan_siperada->subKomponen || $kegiatan_siperada->subKomponenDetail) --}}
                                {{ $item->kode }} -- {{ $item->kegiatan }}
                              </button>


                      </div>
                  </div>
                  @endif
                @endforeach
                <!-- End Col -->
                @foreach ($kegiatan_siperada->kro as $item)
                  @if ($kro == $item->kode)
                  <div class="sm:col-span-12">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          KRO
                      </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                      <div class="sm:flex">
                          <label for="hs-hidden-select" class="sr-only">Label</label>
                              <button value="{{ $item->id }}" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all cursor-not-allowed text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" disabled>
                                {{ $item->kode }} -- {{ $item->kro }}
                              </button>
                      </div>
                  </div>
                  @endif
                @endforeach
                <!-- End Col -->
                @foreach ($kegiatan_siperada->ro as $item)
                  @if ($ro == $item->kode)

                  <div class="sm:col-span-12">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          RO
                      </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                      <div class="sm:flex">
                          <label for="hs-hidden-select" class="sr-only">Label</label>
                              <button value="{{ $item->id }}" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all cursor-not-allowed text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" disabled>
                                {{ $item->kode }} -- {{ $item->ro }}
                              </button>
                      </div>
                  </div>
                  @endif
                @endforeach


                <!-- End Col -->
                @foreach ($kegiatan_siperada->komponen as $item)
                  @if ($komponen == $item->kode)
                  <div class="sm:col-span-12">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          Komponen
                      </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                      <div class="sm:flex">
                          <label for="hs-hidden-select" class="sr-only">Label</label>
                          <button value="{{ $item->id }}" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all cursor-not-allowed text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" disabled>
                            {{ $item->kode }} -- {{ $item->komponen }}
                          </button>
                      </div>
                  </div>
                  @endif
                @endforeach
                <!-- End Col -->
                @foreach ($kegiatan_siperada->subKomponen as $item)
                  @if ($subKomponen == $item->kode)
                  <div class="sm:col-span-12">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          Sub Komponen
                      </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                      <div class="sm:flex">
                          <label for="hs-hidden-select" class="sr-only">Label</label>
                          <button value="{{ $item->id }}" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all cursor-not-allowed text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" disabled>
                            {{ $item->kode }} -- {{ $item->sub_komponen }}
                          </button>
                      </div>
                  </div>
                  @endif
                @endforeach
                <!-- End Col -->

                @foreach ($kegiatan_siperada->subKomponenDetail as $item)
                  @if ($subKomponenDetail == $item->kode)
                  <div class="sm:col-span-12">
                      <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                          Sub Komponen Detail
                      </h2>
                  </div>
                  <!-- End Col -->

                  <div class="sm:col-span-9">
                      <div class="sm:flex">
                          <label for="hs-hidden-select" class="sr-only">Label</label>
                          <button value="{{ $item->id }}" type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-500 shadow-sm align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all cursor-not-allowed text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" disabled>
                            {{ $item->kode }} -- {{ $item->sub_komponen_detail }}
                          </button>
                      </div>
                  </div>
                  @endif
                @endforeach
                <!-- End Col -->
            </div>
            <!-- End Section -->

            <button type="submit"
                class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                Submit application
            </button>
    </div>
    <!-- End Section -->
    </form>
    </div>
    <script>
        function kembali() {
            // alert('Data Berhasil Ditambahkan');

            window.history.back();
        }
    </script>
@endsection

@extends('layouts.theme')
@section('content')
<div class="mb-2">
  <a href="{{ route('account.unit') }}" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-indigo-100 border border-transparent font-semibold text-indigo-500 hover:text-black hover:bg-indigo-100 focus:outline-none focus:ring-2 ring-offset-white focus:ring-indigo-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
    BACK
  </a>
</div>
<!-- Card Section -->
<!-- Card -->
<div class="border bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
  <form method="POST" action="{{ route('store_unit') }}">
    @csrf
    <!-- Section -->
    <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700">
      <div class="sm:col-span-12">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
          CREATE UNIT
        </h2>
      </div>
      <!-- End Col -->

      <div class="sm:col-span-3">
        <label for="af-submit-application-full-name" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
          Name
        </label>
      </div>
      <!-- End Col -->

      <div class="sm:col-span-9">
        <div class="sm:flex">
          <input id="af-submit-application-email" name="name" required="" placeholder="masukan nama" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
        </div>
      </div>
      <!-- End Col -->

      <div class="sm:col-span-3">
        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
          Email
        </label>
      </div>
      <!-- End Col -->

      <div class="sm:col-span-9">
        <input id="af-submit-application-email" type="email" name="email" required="" placeholder="masukan email" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
      </div>
      <!-- End Col -->

      <div class="sm:col-span-3">
        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
          Password
        </label>
      </div>
      <!-- End Col -->

      <div class="sm:col-span-9">
        <input id="af-submit-application-email" name="password" required="" placeholder="masukan password" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
      </div>

      <!-- End Col -->
      <div class="sm:col-span-3">
        <label for="af-submit-application-email" class="inline-block text-sm font-medium text-gray-500 mt-2.5">
          Bidang
        </label>
      </div>
      <!-- End Col -->

      <div class="sm:col-span-9">
        <input id="af-submit-application-email" name="bidang" required="" placeholder="masukan bidang" class="py-2 px-3 pr-11 block w-full border border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
      </div>

      <!-- End Col -->
    </div>
    <button type="submit" class="py-3 px-4 w-full inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
      Submit application
    </button>
  </form>
</div>
@endsection

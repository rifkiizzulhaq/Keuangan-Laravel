@extends('layouts.theme')
@section('content')
<div class="container">
  <div class="flex flex-col">
    <div class="flex w-full justify-between mb-3">
      <div class="flex items-center">
        <h1 class="font-semibold">TABLE ACCOUNT ADMIN</h1>
      </div>
      <a href="{{ route('create_admin') }}" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border-2 border-gray-900 font-semibold text-gray-800 hover:text-white hover:bg-gray-800 hover:border-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 transition-all text-sm dark:bg-gray-900 dark:border-gray-900 dark:hover:border-gray-900 dark:text-white dark:focus:ring-gray-900 dark:focus:ring-offset-gray-800">
        CREATE
      </a>
    </div>
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-700">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Name</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Email</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">NIP</th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">NIDN</th>
                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Action</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              @foreach ($users as $item)
                <tr>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200 dark:bg-gray-500">{{ $item->name ?? ''  }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 dark:bg-gray-500">{{ $item->email ?? ''  }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 dark:bg-gray-500">{{ $item->admin->nip ?? ''  }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200 dark:bg-gray-500">{{ $item->admin->nidn ?? ''  }}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium dark:bg-gray-500 flex justify-end">
                    <a href="{{ route('edit_admin', ['id' => $item->id]) }}" class="mx-2 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-yellow-500 hover:bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                      UPDATE
                    </a>
                    <form action="{{ route('destroy_admin', ['id' => $item->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                        <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-red-500 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                          DELETE
                        </button>
                    </form>
                  </td>
                </tr>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <h1></h1>
  <h1></h1>
</div>
@endsection

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
                {{ __('Client Management') }}
            </h2>
            <a href="{{ route('clients.create') }}"
                class="inline-flex items-center px-5 py-2.5 bg-indigo-600 border border-transparent rounded-lg font-semibold text-sm text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-sm shadow-indigo-200 dark:shadow-none">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Tambah Client
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-xl border border-gray-100 dark:border-gray-700">
                <div class="p-0 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 dark:bg-gray-700/50 border-b border-gray-100 dark:border-gray-700">
                                    <th
                                        class="px-6 py-4 font-bold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-400">
                                        No</th>
                                    <th
                                        class="px-6 py-4 font-bold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-400">
                                        Nama</th>
                                    <th
                                        class="px-6 py-4 font-bold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-400">
                                        Email</th>
                                    <th
                                        class="px-6 py-4 font-bold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-400">
                                        Phone</th>
                                    <th
                                        class="px-6 py-4 font-bold text-sm uppercase tracking-wider text-gray-600 dark:text-gray-400 text-right">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 dark:divide-gray-700">
                                @forelse ($clients as $index => $client)
                                    <tr
                                        class="hover:bg-gray-50/80 dark:hover:bg-gray-700/30 transition-colors duration-200">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-400">
                                            {{ $clients->firstItem() + $index }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-10 w-10 flex-shrink-0 rounded-full bg-indigo-100 dark:bg-indigo-900/40 flex items-center justify-center text-indigo-700 dark:text-indigo-400 font-bold text-lg">
                                                    {{ strtoupper(substr($client->name, 0, 1)) }}
                                                </div>
                                                <div class="ml-4">
                                                    <div
                                                        class="text-sm font-semibold text-gray-900 dark:text-gray-100">
                                                        {{ $client->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 mr-2 text-gray-400"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                                </svg>
                                                {{ $client->email ?? '-' }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 mr-2 text-gray-400"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                                </svg>
                                                {{ $client->phone ?? '-' }}
                                            </div>
                                        </td>
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex justify-end items-center space-x-2">
                                                <a href="{{ route('clients.edit', $client) }}"
                                                    title="Edit Client"
                                                    class="p-2 text-indigo-600 bg-indigo-50 hover:bg-indigo-100 dark:text-indigo-400 dark:bg-indigo-900/30 dark:hover:bg-indigo-900/50 rounded-lg transition-all duration-200 shadow-sm border border-indigo-100 dark:border-indigo-800">
                                                    <svg class="w-5 h-5"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                                <form action="{{ route('clients.destroy', $client) }}"
                                                    method="POST"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        title="Hapus Client"
                                                        class="p-2 text-red-600 bg-red-50 hover:bg-red-100 dark:text-red-400 dark:bg-red-900/30 dark:hover:bg-red-900/50 rounded-lg transition-all duration-200 shadow-sm border border-red-100 dark:border-red-800"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus client ini?')">
                                                        <svg class="w-5 h-5"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5"
                                            class="px-6 py-10 text-center text-gray-500 dark:text-gray-400">
                                            <div class="flex flex-col items-center">
                                                <svg class="w-12 h-12 text-gray-300 mb-4"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                                </svg>
                                                <p class="text-lg font-medium">
                                                    Belum ada client.</p>
                                                <p class="text-sm">Klik tombol
                                                    di atas untuk
                                                    menambahkan client baru.
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @if ($clients->hasPages())
                    <div
                        class="px-6 py-4 bg-gray-50 dark:bg-gray-700/50 border-t border-gray-100 dark:border-gray-700 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex-grow">
                            {{ $clients->links() }}
                        </div>
                        <div
                            class="flex items-center space-x-4 text-xs text-gray-400 dark:text-gray-500 font-mono">
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 7v10c0 2 1.5 3 3.5 3s3.5-1 3.5-3V7c0-2-1.5-3-3.5-3S4 5 4 7z M12 7v10c0 2 1.5 3 3.5 3s3.5-1 3.5-3V7c0-2-1.5-3-3.5-3S12 5 12 7z" />
                                </svg>
                                DB: {{ $queryTime }}ms
                            </div>
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Total: {{ $totalTime }}ms
                            </div>
                        </div>
                    </div>
                @else
                    <div
                        class="px-6 py-3 bg-gray-50 dark:bg-gray-700/50 border-t border-gray-100 dark:border-gray-700 flex justify-end">
                        <div
                            class="flex items-center space-x-4 text-xs text-gray-400 dark:text-gray-500 font-mono">
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 7v10c0 2 1.5 3 3.5 3s3.5-1 3.5-3V7c0-2-1.5-3-3.5-3S4 5 4 7z M12 7v10c0 2 1.5 3 3.5 3s3.5-1 3.5-3V7c0-2-1.5-3-3.5-3S12 5 12 7z" />
                                </svg>
                                DB: {{ $queryTime }}ms
                            </div>
                            <div class="flex items-center">
                                <svg class="w-3.5 h-3.5 mr-1.5" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                Total: {{ $totalTime }}ms
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
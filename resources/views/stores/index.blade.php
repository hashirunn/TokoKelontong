<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Store List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                        Jayusman Store
                    </h1>
                    <br/><br/>
                </div>
                <div>
                <x-table>
                        <x-slot name="header">
                            <tr class="py-10">
                                <th scope="col">#</th>
                                <th scope="col">Store</th>
                                <th scope="col">Location</th>
                                <th scope="col">Manager</th>
                                <th scope="col">Action</th>
                            </tr>
                        </x-slot>
                        @foreach ($stores as $store)
                            <tr>
                                <td>{{ ($stores->perPage() * ($stores->currentPage()-1))+$loop->iteration }}</td>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->location }}</td>
                                <td>
                                    @foreach ($store->staff as $staff)
                                        @if ($staff->hasRole('manager'))
                                            {{ $staff->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                <x-primary-button element="a" href="{{ route('stores', $store->id)}}">
                                        Detail
                                    </x-primary-button>
                                <x-primary-button element="a" href="{{ route('stores.edit', $store->id)}}">
                                        EDIT
                                    </x-primary-button>
                                </td>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
                <div class="p-6"> 
                        {{ $stores->links() }}  
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

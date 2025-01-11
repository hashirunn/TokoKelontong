<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stock Warehouse') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-primary-button element="a" href="{{ route('stores') }}">
                        Back
                    </x-primary-button>
                    <div class="flex p-6 text-gray-900 dark:text-gray-100">
                        <br/><br/>
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
                                    <th scope="col">Product</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </x-slot>
                            @foreach ($warehouses as $warehouse)
                                <tr>
                                    <td>{{ ($warehouses->perPage() * ($warehouses->currentPage()-1))+$loop->iteration }}</td>
                                    <td>{{ $warehouse->product->name }}</td>
                                    <td>{{ $warehouse->stock }}</td>
                                    <td>
                                        <x-primary-button element="a" href="{{ route('warehouse.edit', $warehouse->id)}}">
                                            EDIT
                                        </x-primary-button>
                                    </td>
                                </tr>
                            @endforeach
                        </x-table>
                    </div>
                    <div class="p-6"> 
                        {{ $warehouses->links() }}  
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

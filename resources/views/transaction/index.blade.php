<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transaction Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <x-primary-button element="a" href="{{ route('stores') }}">
                                Back
                            </x-primary-button>
                            <x-primary-button element="a" href="{{ route('transaction.print') }}">
                                PRINT AS PDF
                            </x-primary-button>
                    </div>    
                    <div class="flex p-6 text-gray-900 dark:text-gray-100">
                        <br/><br/>
                        <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-200 leading-tight">
                            Transaction
                        </h1>
                        <br/><br/>
                    </div>
                    <div>
                        <x-table>
                            <x-slot name="header">
                                <tr class="py-10">
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </x-slot>
                            @foreach ($transactiondetail as $detail)
                                <tr>
                                    <td>{{ ($transactiondetail->perPage() * ($transactiondetail->currentPage()-1))+$loop->iteration }}</td>
                                    <td>{{ $detail->product->name }}</td>
                                    <td>{{ $detail->quantity }}</td>
                                    <td>{{ $detail->price }}</td>
                                    <td>{{ $detail->transaction->totalPrice() }}</td>
                                </tr>
                            @endforeach
                        </x-table>
                    </div>
                    <div class="p-6"> 
                        {{ $transactiondetail->links() }}  
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

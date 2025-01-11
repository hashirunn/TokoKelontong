<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Staff List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-primary-button element="a" href="{{ route('staff.create') }}">
                        Tambah Data
                    </x-primary-button>
                    <br/><br/>
                </div>
                <div>
                <x-table>
                        <x-slot name="header">
                            <tr class="py-10">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Position</th>
                                <th scope="col">Action</th>
                            </tr>
                        </x-slot>
                        @foreach ($staffs as $staff)
                            <tr>
                                <td>{{ ($staffs->perPage() * ($staffs->currentPage()-1))+$loop->iteration }}</td>
                                <td>{{ $staff->name }}</td>
                                <td>{{ $staff->email }}</td>
                                <td>{{ $staff->getRoleNames()->implode(', ') }}</td>
                                <td>
                                <x-primary-button element="a" href="{{ route('staff.edit', $staff->id)}}">
                                        EDIT
                                    </x-primary-button>
                                    <x-danger-button
                                        x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-lecturer-deletion')"
                                        x-on:click="$dispatch('set-action', '{{ route('staff.delete', $staff->id) }}')"
                                    >{{ __('Delete') }}</x-danger-button>
                                </td>
                            </tr>
                        @endforeach
                    </x-table>
                </div>
                <div class="p-6"> 
                        {{ $staffs->links() }}  
                </div>
                <x-modal name="confirm-lecturer-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" x-bind:action="action" class="p-6">
                            @csrf
                            @method('delete')
                
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Apakah anda yakin akan menghapus data staff?') }}
                            </h2>
                
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Setelah anda melakukan proses hapus, data tidak dapat dikembalikan.') }}
                            </p>
                
                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Batal') }}
                                </x-secondary-button>
                
                                <x-danger-button class="ms-3">
                                    {{ __('Ya, Hapus Saja!') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
            </div>
        </div>
    </div>
</x-app-layout>

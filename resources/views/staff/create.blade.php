<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Tambah Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- CONTENT HERE -->
                    <x-primary-button element="a" href="{{ route('staff')}}">
                        KEMBALI
                    </x-primary-button>
                    <br/><br/>
                    <hr/>
                            <div class="max-w-xl">
                                <form method="POST" action="{{ route('staff.store') }}" class="mt-6 space-y-6">
                                    @csrf
                                    <div>
                                        <x-input-label for="name" :value="__('Name')" />
                                        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name') }}" required/>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" value="{{ old('email') }}" required/>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div>
                                        <x-input-label for="password" :value="__('Password')" />
                                        <x-text-input id="password" name="password" type="text" class="mt-1 block w-full" value="{{ old('password') }}" required/>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <x-primary-button>
                                        SUBMIT
                                    </x-primary-button>
                                </form>
                            </div>
                    <!-- END CONTENT HERE -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

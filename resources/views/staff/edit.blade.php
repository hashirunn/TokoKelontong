<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Staff') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- CONTENT HERE -->
                    <x-primary-button element="a" href="{{ route('staff')}}">
                        @csrf
                        <div class="max-w-xl">
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" type="text" name="name" class="mt-1 block w-full"
                                value="{{ old('name') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="email" value="E-mail" />
                            <x-text-input id="email" type="text" name="email" class="mt-1 block w-full"
                                value="{{ old('email') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="password" value="Password" />
                            <x-text-input id="password" type="number" name="password" class="mt-1 block w-full"
                                value="{{ old('password') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('password')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="role" value="Role" />
                            <x-text-input id="role" type="text" name="role" class="mt-1 block w-full"
                                value="{{ old('role') }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('role')" />
                        </div>
                        
            
                        <x-secondary-button tag="a" href="{{ route('staff.index') }}">Cancel</x-secondary-button>
                        <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
                        <x-primary-button name="save" value="true">Save</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

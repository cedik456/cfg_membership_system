<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Membership') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ url('update-membership/' .$membership->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Assuming update-membership route uses PUT method -->

                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$membership->name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="$membership->address" required autocomplete="address" />
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="age" :value="__('Age')" />
                        <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="$membership->age" required autocomplete="age" />
                        <x-input-error :messages="$errors->get('age')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="gender" :value="__('Gender')" />
                        <select id="gender" name="gender" class="block mt-1 w-full" required>
                            <option value="">{{ __('Select Gender') }}</option>
                            <option value="male" {{ $membership->gender === 'male' ? 'selected' : '' }}>{{ __('Male') }}</option>
                            <option value="female" {{ $membership->gender === 'female' ? 'selected' : '' }}>{{ __('Female') }}</option>
                            <option value="other" {{ $membership->gender === 'other' ? 'selected' : '' }}>{{ __('Other') }}</option>
                        </select>
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="contactInfo" :value="__('Contact Info')" />
                        <x-text-input id="contactInfo" class="block mt-1 w-full" type="text" name="contactInfo" :value="$membership->contactInfo" required autocomplete="contact-info" />
                        <x-input-error :messages="$errors->get('contactInfo')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Update Membership') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

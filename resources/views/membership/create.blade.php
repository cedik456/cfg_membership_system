<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Membership') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <x-success-status class="mb-4" :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{url ('add-membership') }}" method="POST">
                  @csrf

                  <div class="flex justify-between align-middle">
                    <h1>MAJO</h1>
                    <a href="http://127.0.0.1:8000/memberships">back</a>
                  </div>

                  <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="address" :value="__('Address')" />
                    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="age" :value="__('Age')" />
                    <x-text-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autocomplete="age" />
                    <x-input-error :messages="$errors->get('age')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="gender" :value="__('Gender')" />
                    <select id="gender" name="gender" class="block mt-1 w-full" required>
                        <option value="">{{ __('Select Gender') }}</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>{{ __('Male') }}</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>{{ __('Female') }}</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>{{ __('Other') }}</option>
                    </select>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>


                <div>
                    <x-input-label for="contactInfo" :value="__('Contact Info')" />
                    <x-text-input id="contactInfo" class="block mt-1 w-full" type="text" name="contactInfo" :value="old('contactInfo')" required autocomplete="contact-info" />
                    <x-input-error :messages="$errors->get('contactInfo')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="duration" :value="__('Duration')" />
                    <select id="duration" name="duration" class="block mt-1 w-full" required>
                        <option value="">{{ __('Select Membership Promotion') }}</option>
                        <option value="1 Month Membership" {{ old('duration') == '1 Month Membership' ? 'selected' : '' }}>{{ __('1 Month Membership') }}</option>
                        <option value="3 Months Membership" {{ old('duration') == '3 Months Membership' ? 'selected' : '' }}>{{ __('3 Months Membership') }}</option>
                        <option value="6 Months Membership" {{ old('duration') == '6 Months Membership' ? 'selected' : '' }}>{{ __('6 Months Membership') }}</option>
                        <option value="9 Months Membership" {{ old('duration') == '9 Months Membership' ? 'selected' : '' }}>{{ __('9 Months Membership') }}</option>
                        <option value="12 Months Membership" {{ old('duration') == '12 Months Membership' ? 'selected' : '' }}>{{ __('12 Months Membership') }}</option>
                    </select>
                    <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Save Membership') }}
                    </x-primary-button>
                </div>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>

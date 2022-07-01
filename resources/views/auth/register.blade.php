<x-guest-layout>
    <x-auth-card>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }} ">
            @csrf

            <div class="grid gap-6">

                <div class="flex space-x-2">

                    <!-- First Name -->
                    <div class="space-y-2">
                        <x-label for="firstname" :value="__('First Name')" />
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="firstname" class="block w-full" type="text" name="firstname" :value="old('firstname')"
                                required autofocus placeholder="{{ __('First Name') }}" />
                        </x-input-with-icon-wrapper>
                    </div>

                    <!-- Last Name -->
                    <div class="space-y-2">
                        <x-label for="lastname" :value="__('Last Name')" />
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="lastname" class="block w-full" type="text" name="lastname" :value="old('lastname')"
                                required autofocus placeholder="{{ __('Last Name') }}" />
                        </x-input-with-icon-wrapper>
                    </div>

                </div>

                <!-- Middle Name -->
                <div class="space-y-2">
                    <x-label for="middlename" :value="__('Middle Name')" />
                    <x-input-with-icon-wrapper>
                        <x-slot name="icon">
                            <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                        </x-slot>
                        <x-input withicon id="middlename" class="block w-full" type="text" name="middlename" :value="old('middlename')"
                            required autofocus placeholder="{{ __('Middle Name') }}" />
                    </x-input-with-icon-wrapper>
                </div>

                <div class="flex space-x-2">
                    <!-- Email Address -->
                    <div class="space-y-2">
                        <x-label for="email" :value="__('Email')" />
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="email" class="block w-full" type="email" name="email"
                                :value="old('email')" required placeholder="{{ __('Email') }}" />
                        </x-input-with-icon-wrapper>
                    </div>

                    <!-- Phone -->
                    <div class="space-y-2">
                        <x-label for="phone" :value="__('Phone Number')" />
                        <x-input class="block w-full" type="text" name="phone"
                                :value="old('phone')" required placeholder="{{ __('Phone Number') }}" />
                    </div>
                </div>

                <div class="flex space-x-2">
                    <!-- DOB -->
                    <div class="space-y-2 w-1/2">
                        <x-label for="DOB" :value="__('Date Of Birth')" />
                        <x-input class="block w-full cursor-pointer" type="date" name="DOB"
                            :value="old('DOB')" required placeholder="{{ __('Date Of Birth') }}" />
                    </div>

                    <!-- gender -->
                    <div class="space-y-2 w-1/2">
                        <x-label for="gender" :value="__('Gender')" />
                        <select  id="gender" class="block w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" type="text" name="gender" required  >
                            <option></option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>

                <!-- street -->
                <div class="space-y-2">
                    <x-label for="street" :value="__('Street')" />
                    <x-input  class="block w-full" type="text" name="street"
                            :value="old('street')" required placeholder="{{ __('Street') }}" />
                </div>

                <div class="flex space-x-2">
                    <!-- city/town -->
                    <div class="space-y-2">
                        <x-label for="city" :value="__('City/Town')" />
                        <x-input class="block w-full" type="text" name="city"
                                :value="old('city')" required placeholder="{{ __('City/Town') }}" />
                    </div>

                    <!-- state -->
                    <div class="space-y-2">
                        <x-label for="state" :value="__('State')" />
                        <x-input class="block w-full" type="text" name="state"
                                :value="old('state')" required placeholder="{{ __('State') }}" />
                    </div>

                    <!-- country -->
                    <div class="space-y-2">
                        <x-label for="country" :value="__('Country')" />
                        <x-input class="block w-full" type="text" name="country"
                                :value="old('country')" required placeholder="{{ __('Country') }}" />
                    </div>
                </div>

                <div class="flex space-x-2">
                    <!-- Password -->
                    <div class="space-y-2">
                        <x-label for="password" :value="__('Password')" />
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="password" class="block w-full" type="password" name="password" required
                                autocomplete="new-password" placeholder="{{ __('Password') }}" />
                        </x-input-with-icon-wrapper>
                    </div>

                    <!-- Confirm Password -->
                    <div class="space-y-2">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon id="password_confirmation" class="block w-full" type="password"
                                name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                        </x-input-with-icon-wrapper>
                    </div>
                </div>

                <div>
                    <x-button class="justify-center w-full gap-2">
                        <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                        <span>{{ __('Register') }}</span>
                    </x-button>
                </div>

                <p class="text-sm text-gray-100 dark:text-gray-400">
                    {{ __('Already registered?') }}
                    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

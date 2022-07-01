<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Edit Info') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('userProfiles.index') }} " class=""> Back </a>
                </x-button>
            </div>

        </div>
    </x-slot>

    <!-- Next of Kin -->
    <div class="p-4 bg-white rounded-lg md:items-center md:justify-between dark:bg-dark-eval-1 dark:text-gray-400">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <h2 class="mb-2 px-4 text-2xl font-semibold">Next Of Kin Info</h2>
        </div>
        <div class="bg-violet-50 p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <form method="POST" action=" {{ route('nextOfKins.update', $nextOfKin) }} " class="p-6 rounded-lg dark:bg-dark-bg">
                @csrf
                @method('PUT')
                <div class="grid gap-6">
                    <!-- Full Name -->
                    <div class="space-y-2">
                        <label for="Full Name" class="text-gray-700 dark:text-gray-100 font-semibold">Full Name</label>
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-icons.userProfile aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon class="block w-full" type="text" name="name" value=" {{ $user->nextOfKin->name }} "
                                required  />
                        </x-input-with-icon-wrapper>
                    </div>

                    <div class="flex space-x-2">
                        <!-- Phone -->
                        <div class="space-y-2 w-1/2">
                            <label for="Phone Number" class="text-gray-700 dark:text-gray-100 font-semibold">Phone Number</label>
                            <x-input class="block w-full" type="text" name="phone"
                                value=" {{ $user->nextOfKin->phone }} " required  />
                        </div>

                        <!-- DOB -->
                        <div class="space-y-2 w-1/2">
                            <label for="Date Of Birth" class="text-gray-700 dark:text-gray-100 font-semibold">Date Of Birth</label>
                            <x-input id="DOB" class="block w-full" type="date" name="DOB"
                            value=" {{ $user->nextOfKin->DOB }} " required />
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <!-- gender -->
                        <div class="space-y-2 w-1/2">
                            <label for="Gender" class="text-gray-700 dark:text-gray-100 font-semibold">Gender</label>
                            <select  id="gender" class="block w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                            focus:ring-blue-200 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" type="text" name="gender" required  >
                                <option value=" {{ $user->nextOfKin->gender }} "> {{ $user->nextOfKin->gender }} </option>
                                <<option>Female</option>
                            </select>
                        </div>
                        <!-- relationship -->
                        <div class="space-y-2 w-1/2">
                            <label for="Relationship" class="text-gray-700 dark:text-gray-100 font-semibold">Relationship</label>
                            <x-input class="block w-full" type="text" name="relationship"
                                value=" {{ $user->nextOfKin->relationship }} " required  />
                        </div>
                    </div>

                    <!-- street -->
                    <div class="space-y-2">
                        <label for="Street" class="text-gray-700 dark:text-gray-100 font-semibold">Street</label>
                        <x-input class="block w-full" type="text" name="street"
                            value=" {{ $user->nextOfKin->street }} " required  />
                    </div>

                    <div class="flex space-x-2">
                        <!-- city/town -->
                        <div class="space-y-2 w-1/2">
                            <label for="City/Town" class="text-gray-700 dark:text-gray-100 font-semibold">City/Town</label>
                            <x-input class="block w-full" type="text" name="city"
                                value=" {{ $user->nextOfKin->city }} "  />
                        </div>
                        <!-- state -->
                        <div class="space-y-2 w-1/2">
                            <label for="State" class="text-gray-700 dark:text-gray-100 font-semibold">State</label>
                            <x-input class="block w-full" type="text" name="state"
                                value=" {{ $user->nextOfKin->state }} "  />
                        </div>
                    </div>

                    <!-- country -->
                    <div class="space-y-2">
                        <label for="Country" class="text-gray-700 dark:text-gray-100 font-semibold">Country</label>
                        <x-input class="block w-full" type="text" name="country"
                            value=" {{ $user->nextOfKin->country }} "  />
                    </div>

                    <div class="text-right">
                        <x-button class="justify-center w-[100px] gap-2">
                            <span>{{ __('Save') }}</span>
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Profile Info') }}
                </h2>
            </div>

            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('userProfiles.index') }} " class=""> Back </a>
                </x-button>
            </div>

        </div>
    </x-slot>

    @if (session('success'))
        <div class="bg-blue-500 text-sm text-gray-100 w-full rounded-md p-3 my-3 justify-center">
            {{ session('success') }}
        </div>
    @elseif (session('message'))
        <div class="text-sm text-red-500 w-full p-3 my-3 justify-center">
            {{ session('message') }}
        </div>
    @endif

    <!--Personal Info -->
    <div class="p-6 bg-white rounded-lg md:items-center md:justify-between dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="mb-5">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div>
                <h2 class="mb-3 px-4 text-2xl font-semibold">Personal Info</h2>
            </div>
            <div class="bg-violet-50 p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
                <form method="POST" action=" {{ route('userProfiles.store') }} " enctype="multipart/form-data"
                    class="rounded-lg p-4 dark:bg-dark-bg">
                    @csrf
                    <div class="grid gap-6 ">
                        <div class="flex space-x-2">
                            <!-- BVN -->
                            <div class="space-y-2 w-1/2">
                                <label for="BVN" class="text-gray-700 dark:text-gray-100 font-semibold">BVN</label>
                                <x-input id="BVN" class="block w-full" type="text" name="BVN"
                                    :value="old('BVN')" required placeholder="{{ __('BVN Number') }}" />
                            </div>

                            <!-- NIN -->
                            <div class="space-y-2 w-1/2">
                                <label for="NIN" class="text-gray-700 dark:text-gray-100 font-semibold">NIN</label>
                                <x-input  id="NIN" class="block w-full" type="text" name="NIN"
                                    :value="old('NIN')" required placeholder="{{ __('NIN Number') }}" />
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="space-y-2">
                            <label for="Upload Image" class="text-gray-700 dark:text-gray-100 font-semibold">Upload Image</label>
                            <x-input  class="block w-1/2 cursor-pointer" type="file" name="image"
                                :value="old('image')" />
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

        <!-- Next of Kin -->
        <div>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div>
                <h2 class="mb-3 px-4 text-2xl font-semibold">Next Of Kin Info</h2>
            </div>
            <div class="bg-violet-50 p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
                <form method="POST" action=" {{ route('nextOfKins.store') }} " class="rounded-lg p-4 dark:bg-dark-bg">
                    @csrf
                    <div class="grid gap-6">
                        <!-- Full Name -->
                        <div class="space-y-2">
                            <label for="Name" class="text-gray-700 dark:text-gray-100 font-semibold">Name</label>
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-icons.userProfile aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="name" class="block w-full" type="text" name="name" :value="old('name')"
                                    required autofocus placeholder="{{ __('Full Name') }}" />
                            </x-input-with-icon-wrapper>
                        </div>

                        <div class="flex space-x-2">
                            <!-- Phone -->
                            <div class="space-y-2 w-1/2">
                                <label for="Phone Number" class="text-gray-700 dark:text-gray-100 font-semibold">Phone Number</label>
                                <x-input id="phone" class="block w-full" type="text" name="phone"
                                        :value="old('phone')" required placeholder="{{ __('Phone Number') }}" />
                            </div>
                            <!-- DOB -->
                            <div class="space-y-2 w-1/2">
                                <label for="Date Of Birth" class="text-gray-700 dark:text-gray-100 font-semibold">Date Of Birth</label>
                                <x-input id="DOB" class="block w-full" type="date" name="DOB"
                                   :value="old('DOB')" required placeholder="{{ __('Date Of Birth') }}" />
                            </div>
                        </div>

                        <div class="flex space-x-2">
                            <!-- gender -->
                            <div class="space-y-2 w-1/2">
                                <label for="Gender" class="text-gray-700 dark:text-gray-100 font-semibold">Gender</label>
                                <select  id="gender" class="block cursor-pointer w-full py-2 border-blue-200 rounded-md focus:border-blue-200 focus:ring
                                focus:ring-bule-200 focus:ring-offset-2 focus:ring-offset-blue dark:border-gray-600 dark:bg-dark-eval-1
                                dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" type="text" name="gender" required  >
                                    <option></option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <!-- relationship -->
                            <div class="space-y-2 w-1/2">
                                <label for="Relationship" class="text-gray-700 dark:text-gray-100 font-semibold">Relationship</label>
                                <x-input id="relationship" class="block w-full" type="text" name="relationship"
                                    :value="old('relationship')" required placeholder="{{ __('Relationship') }}" />
                            </div>
                        </div>

                        <!-- street -->
                        <div class="space-y-2">
                            <label for="Street" class="text-gray-700 dark:text-gray-100 font-semibold">Street</label>
                            <x-input id="street" class="block w-full" type="text" name="street"
                                :value="old('street')" required placeholder="{{ __('Street') }}" />
                        </div>

                        <div class="flex space-x-2">
                            <!-- city/town -->
                            <div class="space-y-2 w-1/2">
                                <label for="City/Town" class="text-gray-700 dark:text-gray-100 font-semibold">City/Town</label>
                                <x-input  id="city" class="block w-full" type="text" name="city"
                                        :value="old('city')" required placeholder="{{ __('City/Town') }}" />
                            </div>
                            <!-- state -->
                            <div class="space-y-2 w-1/2">
                                <label for="State" class="text-gray-700 dark:text-gray-100 font-semibold">State</label>
                                <x-input id="state" class="block w-full" type="text" name="state"
                                        :value="old('state')" required placeholder="{{ __('State') }}" />
                            </div>
                        </div>
                        <!-- country -->
                        <div class="space-y-2">
                            <label for="Country" class="text-gray-700 dark:text-gray-100 font-semibold">Country</label>
                            <x-input id="country" class="block w-full" type="text" name="country"
                                    :value="old('country')" required placeholder="{{ __('Country') }}" />
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
    </div>
</x-app-layout>

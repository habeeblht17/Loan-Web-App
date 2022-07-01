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

    @if (session('success'))
        <div class="bg-blue-500 text-sm text-gray-100 w-full rounded-md p-3 my-3 justify-center">
            {{ session('success') }}
        </div>
    @endif

    <!--Personal Info -->
    <div class="p-6 bg-white cursor-pointer md:items-center md:justify-between dark:bg-dark-eval-1 dark:text-gray-400">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <h2 class="mb-2 px-4 text-2xl font-semibold">Personal Info</h2>
        </div>
        <div class="bg-violet-50 p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <form method="POST" action=" {{ route('userProfiles.update', $userProfile) }} " enctype="multipart/form-data"
            class="p-4 rounded-lg dark:bg-dark-bg">
                @csrf
                @method('PUT')
                <div class="grid gap-6 ">
                    <div class="flex space-x-2">
                        <!-- BVN -->
                        <div class="space-y-2 w-1/2">
                            <label for="BVN" class="text-gray-700 dark:text-gray-100 font-semibold">BVN</label>
                            <x-input class="block w-full" type="text" name="BVN"
                                value=" {{ $user->userProfile->BVN }} "  />
                        </div>
                        <!-- NIN -->
                        <div class="space-y-2 w-1/2">
                            <label for="NIN" class="text-gray-700 dark:text-gray-100 font-semibold">NIN</label>
                            <x-input class="block w-full" type="text" name="NIN"
                                value=" {{ $user->userProfile->NIN }} " />
                        </div>
                    </div>

                    <!-- Image -->
                    <div class="space-y-2">
                        <label for="Image Uplaod" class="text-gray-700 dark:text-gray-100 font-semibold">Image Uplaod</label>
                        <x-input class="block w-full md:w-1/2 cursor-pointer" type="file" name="image"
                                value=" {{ $user->userProfile->image }} "  />
                    </div>

                    <div class="text-right">
                        <x-button class="">
                            <span>{{ __('Save') }}</span>
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="my-6">
        <x-button class="float-right">
            <a href=" {{ route('nextOfKins.edit', $user->nextOfKin->id ) }} "> Next </a>
        </x-button>
    </div>
</x-app-layout>

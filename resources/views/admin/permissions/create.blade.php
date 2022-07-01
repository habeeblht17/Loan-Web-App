<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Create Permission') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.permissions.index') }} " class=""> Back </a>
                </x-button>
            </div>
        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="bg-violet-50 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 dark:bg-dark-eval-1">
                <div class="my-2 col-span-6 sm:col-span-4">
                    @error('name')
                        <span class="text-red-500 text-sm"> {{ $message }}</span>
                    @enderror
                </div>
                <form action=" {{ route('admin.permissions.store') }} " method="POST"
                    class="bg-violet-50 p-6 rounded-lg dark:bg-dark-bg">
                    @csrf
                    <div class="col-span-6 sm:col-span-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Permission Name</label>
                        <input type="text" name="name" id="name" autocomplete="name"
                        class="mt-1 focus:ring-blue-200 focus:border-blue-200 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-dark-eval-1">
                    </div>
                    <div class="px-4 py-3 text-right sm:px-6">
                        <x-button type="submit">Create</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>

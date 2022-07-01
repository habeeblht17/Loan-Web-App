<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Search Result') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.users.index') }} "> Back </a>
                </x-button>
            </div>
        </div>
    </x-slot>

    @if ($results)
    <div class="p-6 overflow-hidden bg-white rounded-md shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="bg-violet-50 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 dark:bg-dark-eval-1">
                <div class="w-full">
                    <div class="flex flex-col justify-between md:flex-row">
                        <div>
                            <h1 class="p-1 text-xl text-gray-500 dark:text-gray-100 font-semibold">Users</h1>
                        </div>
                    </div>
                    <table class="w-full rounded-lg bg-violet-50 dark:bg-dark-bg">
                        <thead class="w-full bg-blue-900 text-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <tr >
                                <th class="p-3 text-sm text-center font-semibold">First Name</th>
                                <th class="p-3 text-sm text-center font-semibold">Last Name</th>
                                <th class="p-3 text-sm text-center font-semibold">Middle Name</th>
                                <th class="p-3 text-sm text-center font-semibold">Email</tr>
                            </tr>
                        </thead>
                        <tbody class="w-full divide-y divide-gray-300">
                            @foreach ($results as $result)
                                <tr>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $result->firstname }}</td>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400"> {{ $result->lastname }} </td>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400"> {{ $result->middlename }} </td>
                                    <td class="p-3 text-sm text-center font-semibold text-gray-400">  {{ $result->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif

</x-admin-layout>

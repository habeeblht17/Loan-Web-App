<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="flex space-x-4 w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Loan Application') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <!-- List of Applicants -->
    <div class="p-6 overflow-hidden bg-white rounded-md shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <!--List of UnPaidLoan-->
        <div class="bg-violet-50 mb-5 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 dark:bg-dark-eval-1">
                <div class=" w-full">
                    <div class="flex flex-col justify-between md:flex-row">
                        <div>
                            <h1 class="p-1 text-xl text-gray-500 dark:text-gray-100 font-semibold">Unpaid Lists</h1>
                        </div>
                        <!-- Date Search
                        <div class="w-1/2">
                            <form action=" {{ route('admin.getRecord') }} " method="GET">
                                @csrf
                                <div class="flex space-x-1 md:space-x-2 md:float-right">
                                    dateFrom
                                    <div class="mb-4">
                                        <x-label for="from" :value="__('From')" />
                                        <x-input id="from" class="block w-full" type="date" name="from"
                                        :value="old('from')" required placeholder="{{ __('From') }}" />
                                    </div>

                                    dateTo
                                    <div class="mb-4">
                                        <x-label for="to" :value="__('To')" />
                                        <x-input id="to" class="block w-full" type="date" name="to"
                                        :value="old('to')" required placeholder="{{ __('To') }}" />
                                    </div>
                                    <div class="mt-5 ml-2">
                                        <x-button class="justify-center  w-[50px] ">
                                            <span>{{ __('Apply') }}</span>
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>-->
                    </div>
                    <!-- UnpaidLoan -->
                    <table class="w-full rounded-lg bg-violet-50 dark:bg-dark-bg">
                        <thead class="w-full bg-blue-900 text-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <td class="p-3 text-sm text-center font-semibold">ID</td>
                                <td class="p-3 text-sm text-center font-semibold">First Name</td>
                                <td class="p-3 text-sm text-center font-semibold">Last Name</td>
                                <td class="p-3 text-sm text-center font-semibold">
                                    <div class="flex justify-center">
                                        <h1 class="p-1 text-sm text-center font-semibold">Loan Amount </h1>
                                        <small class="text-muted">
                                            <div class="mt-2">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="14px" height="14px" viewBox="0 0 496.262 496.262" fill="#ffffff"
                                                    xml:space="preserve">
                                                <g>
                                                    <path d="M477.832,274.28h-67.743v-65.106h67.743c10.179,0,18.43-8.243,18.43-18.424c0-10.182-8.251-18.43-18.43-18.43h-67.743
                                                        V81.982c0-13.187-2.606-22.866-7.743-28.762c-4.882-5.609-11.301-8.219-20.19-8.219c-8.482,0-14.659,2.592-19.447,8.166
                                                        c-5.077,5.902-7.654,15.599-7.654,28.821v90.343H227.627l-54.181-81.988c-4.637-7.317-8.997-14.171-13.231-20.75
                                                        c-3.812-5.925-7.53-10.749-11.042-14.351c-3.109-3.189-6.652-5.657-10.796-7.554c-3.91-1.785-8.881-2.681-14.762-2.681
                                                        c-7.501,0-14.31,2.055-20.83,6.277c-6.452,4.176-10.912,9.339-13.636,15.785c-2.391,6.126-3.656,15.513-3.656,27.63v77.626h-67.07
                                                        C8.246,172.326,0,180.574,0,190.755c0,10.181,8.246,18.424,18.424,18.424h67.07v65.113h-67.07C8.246,274.292,0,282.538,0,292.722
                                                        C0,302.9,8.246,311.14,18.424,311.14h67.07v103.143c0,12.797,2.689,22.378,8.015,28.466c5.065,5.805,11.487,8.5,20.208,8.5
                                                        c8.414,0,14.786-2.707,20.07-8.523c5.411-5.958,8.148-15.533,8.148-28.442V311.14h115.308l62.399,95.683
                                                        c4.339,6.325,8.819,12.709,13.287,18.969c4.031,5.621,8.429,10.574,13.069,14.711c4.179,3.742,8.659,6.484,13.316,8.157
                                                        c4.794,1.726,10.397,2.601,16.615,2.601c16.875,0,34.158-5.166,34.158-43.479V311.14h67.743c10.179,0,18.43-8.252,18.43-18.43
                                                        C496.262,282.532,488.011,274.28,477.832,274.28z M355.054,209.173v65.106h-60.041l-43.021-65.106H355.054z M141.936,134.364
                                                        l24.76,37.956h-24.76V134.364z M141.936,274.28v-65.106h48.802l42.466,65.106H141.936z M355.054,365.153l-35.683-54.013h35.683
                                                        V365.153z"/>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </div>
                                        </small>
                                    </div>
                                </td>
                                <td class="p-3 text-sm text-center font-semibold">Description</td>
                                <td class="p-3 text-sm text-center font-semibold">Status</td>
                                <td class="p-3 text-sm text-center font-semibold">Details</td>
                            </tr>
                        </thead>
                        <tbody class="w-full divide-y divide-gray-300">
                            @foreach ($loanApplications as $loanApplication)
                            <tr class="">
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->user->id }}</td>

                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->user->firstname }}</td>

                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->user->lastname }}</td>

                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->amount }}</td>

                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->description }}</td>

                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->status }}</td>

                                <td class="p-3 text-sm text-center font-semibold text-gray-400">
                                    <a href=" {{ route('admin.loanDetails', [$loanApplication->id, $loanApplication->user->id]) }}  "
                                        class="text-blue-600">
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- List of PaidLoan -->
        <div class="bg-violet-50 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 dark:bg-dark-eval-1">
                <div class=" w-full">
                    <div class="flex flex-col justify-between md:flex-row">
                        <div>
                            <h1 class="p-1 text-xl text-gray-500 dark:text-gray-100 font-semibold">Paid Lists</h1>
                        </div>
                        <!-- Date Search -->
                        <div class="w-1/2">
                            <form action=" {{ route('admin.getRecord') }} " method="GET">
                                @csrf
                                <div class="flex space-x-1 md:space-x-2 md:float-right">
                                    <!--dateFrom -->
                                    <div class="mb-2">
                                        <label for="from" class="text-gray-700 dark:text-gray-100 font-semibold">From</label>
                                        <x-input id="from" class="block w-full cursor-pointer" type="date" name="from"
                                        :value="old('from')" required placeholder="{{ __('From') }}" />
                                    </div>

                                    <!--dateTo -->
                                    <div class="mb-2">
                                        <label for="to" class="text-gray-700 dark:text-gray-100 font-semibold">To</label>
                                        <x-input id="to" class="block w-full cursor-pointer" type="date" name="to"
                                        :value="old('to')" required placeholder="{{ __('To') }}" />
                                    </div>
                                    <div class="mt-6 ml-2">
                                        <x-button class="justify-center  w-[50px] ">
                                            <x-heroicon-o-search aria-hidden="true" class="w-6 h-6" />
                                        </x-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- PaidLoan -->
                    <table class="w-full rounded-lg bg-violet-50 dark:bg-dark-bg">
                        <thead class="w-full bg-blue-900 text-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <td class="p-3 text-sm text-center font-semibold">ID</td>
                                <td class="p-3 text-sm text-center font-semibold">First Name</td>
                                <td class="p-3 text-sm text-center font-semibold">Last Name</td>
                                <td class="p-3 text-sm text-center font-semibold">
                                    <div class="flex justify-center">
                                        <h1 class="p-1 text-sm text-center font-semibold">Loan Amount </h1>
                                        <small class="text-muted">
                                            <div class="mt-2">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="14px" height="14px" viewBox="0 0 496.262 496.262" fill="#ffffff"
                                                    xml:space="preserve">
                                                <g>
                                                    <path d="M477.832,274.28h-67.743v-65.106h67.743c10.179,0,18.43-8.243,18.43-18.424c0-10.182-8.251-18.43-18.43-18.43h-67.743
                                                        V81.982c0-13.187-2.606-22.866-7.743-28.762c-4.882-5.609-11.301-8.219-20.19-8.219c-8.482,0-14.659,2.592-19.447,8.166
                                                        c-5.077,5.902-7.654,15.599-7.654,28.821v90.343H227.627l-54.181-81.988c-4.637-7.317-8.997-14.171-13.231-20.75
                                                        c-3.812-5.925-7.53-10.749-11.042-14.351c-3.109-3.189-6.652-5.657-10.796-7.554c-3.91-1.785-8.881-2.681-14.762-2.681
                                                        c-7.501,0-14.31,2.055-20.83,6.277c-6.452,4.176-10.912,9.339-13.636,15.785c-2.391,6.126-3.656,15.513-3.656,27.63v77.626h-67.07
                                                        C8.246,172.326,0,180.574,0,190.755c0,10.181,8.246,18.424,18.424,18.424h67.07v65.113h-67.07C8.246,274.292,0,282.538,0,292.722
                                                        C0,302.9,8.246,311.14,18.424,311.14h67.07v103.143c0,12.797,2.689,22.378,8.015,28.466c5.065,5.805,11.487,8.5,20.208,8.5
                                                        c8.414,0,14.786-2.707,20.07-8.523c5.411-5.958,8.148-15.533,8.148-28.442V311.14h115.308l62.399,95.683
                                                        c4.339,6.325,8.819,12.709,13.287,18.969c4.031,5.621,8.429,10.574,13.069,14.711c4.179,3.742,8.659,6.484,13.316,8.157
                                                        c4.794,1.726,10.397,2.601,16.615,2.601c16.875,0,34.158-5.166,34.158-43.479V311.14h67.743c10.179,0,18.43-8.252,18.43-18.43
                                                        C496.262,282.532,488.011,274.28,477.832,274.28z M355.054,209.173v65.106h-60.041l-43.021-65.106H355.054z M141.936,134.364
                                                        l24.76,37.956h-24.76V134.364z M141.936,274.28v-65.106h48.802l42.466,65.106H141.936z M355.054,365.153l-35.683-54.013h35.683
                                                        V365.153z"/>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                </svg>
                                            </div>
                                        </small>
                                    </div>
                                </td>
                                <td class="p-3 text-sm text-center font-semibold">Description</td>
                                <td class="p-3 text-sm text-center font-semibold">Status</td>
                                <td class="p-3 text-sm text-center font-semibold">Details</td>
                            </tr>
                        </thead>
                        <tbody class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                            @foreach ($loanApplicationPaid as $loanApplication)
                            <tr class="">
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->user->id }}</td>
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->user->firstname }}</td>
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->user->lastname }}</td>
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->amount }}</td>
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->description }}</td>
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">{{ $loanApplication->status }}</td>
                                <td class="p-3 text-sm text-center font-semibold text-gray-400">
                                    <a href=" {{ route('admin.loanDetails', [$loanApplication->id, $loanApplication->user->id]) }}  "
                                        class="text-blue-600">
                                        View
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('User Detail') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.status') }} " class=""> Back </a>
                </x-button>
            </div>

        </div>
    </x-slot>

    <div class="p-6 overflow-hidden bg-white rounded-md shadow dark:bg-dark-eval-1 dark:text-gray-400">
        <div class="bg-violet-50 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <div class="p-4 bg-violet-50 rounded-lg dark:bg-dark-bg">
                <div class="">
                    <h2 class="text-xl font-semibold p-1 mb-4">Loan Detail</h2>
                    <!-- Loan Detail -->
                    <div class="flex flex-col md:-mt-8 md:items-center md:justify-between md:flex-row">
                        <!-- First -->
                        <div class="flex-col space-y-3 w-1/2 pl-5">
                            <div class="rounded-lg w-[200px] dark:bg-dark-eval-1">
                                @if ($loanApplication->user->userProfile)
                                    <img src="{{ asset('images/' . $loanApplication->user->userProfile->image) }}" alt=""
                                    class="bg-white rounded-lg w-[200px] h-[200px] p-2 dark:bg-gray-600">
                                @endif
                            </div>
                            <div>
                                <span class="p-1 text-lg font-semibold text-gray-700 dark:text-gray-300">BVN:{{ $loanApplication->user->userProfile->BVN ?? 'None' }}</span>
                            </div>
                            <div>
                                <span class="p-1 text-lg font-semibold text-gray-700 dark:text-gray-300">NIN:{{ $loanApplication->user->userProfile->NIN ?? 'None'  }}</span>
                            </div>
                        </div>
                        <!-- Second -->
                        <div class="md:w-1/2">
                            <table class="w-full rounded-md p-5 my-3 dark:bg-dark-bg">
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <div class="flex">
                                            <span class="pr-5 -mt-1 text-lg font-semibold text-gray-700 dark:text-gray-300">Loan Amount:</span>
                                            <div class="mt-1 mr-1">
                                                <?xml version="1.0" encoding="iso-8859-1"?>
                                                <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="14px" height="14px" viewBox="0 0 496.262 496.262" fill="#909090"
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
                                            <span class="mt-0.5">{{ $loanApplication->amount }}</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Created At:</span> {{ $loanApplication->starting_date }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Description:</span> {{ $loanApplication->description }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Payment Amount:</span> {{ $loanApplication->payment_amount }}
                                    </td>
                                </tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Paymnent Date:</span> {{ $loanApplication->payment_date }}
                                    </td>
                                </tr>
                            </tr class="p-5 my-5">
                                <td class="p-3 text-sm font-normal">
                                    <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Status:</span> {{ $loanApplication->status }}
                                </td>
                            </tr>
                            </table>
                        </div>
                    </div>
                    <!-- User Detail -->
                    <div class=" flex flex-col md:items-center md:justify-between md:flex-row">
                        <!-- first -->
                        <div class="md:w-1/2 ">
                            <table class="w-full rounded-md p-5 my-3 dark:bg-dark-bg">
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">First Name:</span> {{ $loanApplication->user->firstname}}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Last Name:</span> {{ $loanApplication->user->lastname }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Middle Name:</span> {{ $loanApplication->user->middlename }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Email:</span> {{ $loanApplication->user->email }}
                                    </td>
                                </tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Phone Number:</span> {{ $loanApplication->user->phone }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <!-- Second -->
                        <div class="md:w-1/2">
                            <table class="w-full rounded-md p-5 my-3 dark:bg-dark-bg">
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Date of Birth:</span> {{ $loanApplication->user->DOB }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Street Address:</span> {{ $loanApplication->user->street }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">City/Town:</span> {{ $loanApplication->user->city }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">State:</span> {{ $loanApplication->user->state }}
                                    </td>
                                </tr>
                                <tr class="p-5 my-5">
                                    <td class="p-3 text-sm font-normal">
                                        <span class="p-3 text-lg font-semibold text-gray-700 dark:text-gray-300">Country:</span> {{ $loanApplication->user->country }}
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

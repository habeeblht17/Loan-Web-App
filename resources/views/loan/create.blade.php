<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Loan Application') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('dashboard') }} " class=""> Back </a>
                </x-button>
            </div>
        </div>
    </x-slot>

    @if (session('message'))
        <div class="text-sm text-red-500 w-full p-3 my-3 justify-center">
            {{ session('message') }}
        </div>
    @endif


    <!-- Apply for loan -->
    <div class="p-6 bg-white md:items-center md:justify-between dark:bg-dark-eval-1 dark:text-gray-400">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <h2 class="mb-2 px-4 text-2xl font-semibold">Apply For Loan</h2>
        </div>
        <div class="bg-violet-50 p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <form method="POST" action=" {{ route('loan.store') }} " class="p-6 rounded-lg dark:bg-dark-bg">
                @csrf
                <div class="grid gap-6">
                    <div class="flex flex-col md:flex-row md:space-x-2">
                        <!-- Amount -->
                        <div class="mb-4 md:w-1/2">
                            <label for="Amount" class="text-gray-700 dark:text-gray-100 font-semibold">Amount</label>
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-icons.naira aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon class="block w-full" type="text" name="amount" :value="old('amount')"
                                    required autofocus placeholder="{{ __('Amount') }}" />
                            </x-input-with-icon-wrapper>
                        </div>
                        <!-- duration -->
                        <div class=" md:w-1/2">
                            <label for="Duration " class="text-gray-700 dark:text-gray-100 font-semibold">Duration(How Many Month) </label>
                            <select  id="duration" class="block w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                            focus:ring-blue-200 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" type="text" name="duration" required  >
                                <option></option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="flex space-x-2">
                        starting date
                        <div class="space-y-2 w-1/2">
                            <x-label for="starting_date" :value="__('Starting Date')" />
                            <x-input id="starting_date" class="block w-full" type="date" name="starting_date"
                               :value="old('starting_date')" required placeholder="{{ __('Starting Date') }}" />
                        </div>

                        payment date
                        <div class="space-y-2 w-1/2">
                            <x-label for="payment_date" :value="__('Payment Date')" />
                            <x-input id="payment_date" class="block w-full" type="date" name="payment_date"
                               :value="old('payment_date')" required placeholder="{{ __('Payment Date') }}" />
                        </div>
                    </div> -->
                    <!-- description -->
                    <div class="space-y-2 w-full">
                        <label for="Description" class="text-gray-700 dark:text-gray-100 font-semibold">Description</label>
                        <textarea name="description" id="description" cols="20" rows="3"
                        class="block w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-blue-200 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1"></textarea>
                    </div>
                    <div class="text-right">
                        <x-button class="justify-center w-[100px] gap-2">
                            <span>{{ __('Apply') }}</span>
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Edit Loan') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.updatePayment') }} " class=""> Back </a>
                </x-button>
            </div>

        </div>
    </x-slot>

    <!-- Edit loan -->
    <div class="p-6 bg-white md:items-center md:justify-between dark:bg-dark-eval-1 dark:text-gray-400">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <h2 class=" px-4 text-2xl font-semibold">Loan Info</h2>
        </div>
        <div class="bg-violet-50 p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <form method="POST" action=" {{ route('admin.updatePaymentStatus', [$loanApplication->id, $loanApplication->user->id]) }} "
                class="bg-violet-50 p-6 rounded-md dark:bg-dark-bg">
                @csrf
                @method('PUT')
                <div class="grid gap-4">
                    <div class="flex space-x-2">
                        <!-- Amount -->
                        <div class=" w-1/2">
                            <label for="Amount" class="text-gray-700 dark:text-gray-100 font-semibold">Amount</label>
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-icons.naira aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="amount" class="block w-full" type="text" name="amount" value=" {{ $loanApplication->amount }} " />
                            </x-input-with-icon-wrapper>
                        </div>
                        <!-- duration -->
                        <div class=" w-1/2">
                            <label for="duration" class="text-gray-700 dark:text-gray-100 font-semibold">Duration (How Many Months)</label>
                            <select  id="duration" class="block w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                            focus:ring-blue-200 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" type="text" name="duration" required  >
                                <option value="{{ $loanApplication->duration }}"> {{ $loanApplication->duration }} </option>
                            </select>
                        </div>
                    </div>

                    <div class="flex space-x-2">
                        <!-- starting date -->
                        <div class=" w-1/2">
                            <label for="Start date" class="text-gray-700 dark:text-gray-100 font-semibold">Starting Date</label>
                            <x-input id="starting_date" class="block w-full" type="date" name="starting_date"
                               value=" {{ $loanApplication->starting_date }} "/>
                        </div>
                        <!-- payment date -->
                        <div class=" w-1/2">
                            <label for="Payment Date" class="text-gray-700 dark:text-gray-100 font-semibold">Payment Date</label>
                            <x-input id="payment_date" class="block w-full" type="date" name="payment_date"
                               value="{{ $loanApplication->payment_date }}" />
                        </div>
                    </div>

                    <!-- description -->
                    <div class=" w-full">
                        <label for="Description" class="text-gray-700 dark:text-gray-100 font-semibold">Description</label>
                        <textarea name="description" id="description" cols="20" rows="3"
                        class="block w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                        focus:ring-blue-200 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                        dark:text-gray-300 dark:focus:ring-offset-dark-eval-1"> {{ $loanApplication->description }}</textarea>
                    </div>

                    <div class="flex space-x-2">
                        <!-- Payment Amount -->
                        <div class="w-1/2">
                            <label for="Payment Amount" class="text-gray-700 dark:text-gray-100 font-semibold">Payment Amount</label>
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-icons.naira aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="payment amount" class="block w-full" type="text" name="payment amount"
                                    value=" {{ $loanApplication->payment_amount }} " />
                            </x-input-with-icon-wrapper>
                        </div>
                        <!-- Status -->
                        <div class="w-1/2">
                            <label for="Status" class="text-gray-700 dark:text-gray-100 font-semibold">Status</label>
                            <select  id="duration" class="block w-full py-2 border-gray-400 rounded-md focus:border-gray-400 focus:ring
                            focus:ring-blue-200 focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-dark-eval-1
                            dark:text-gray-300 dark:focus:ring-offset-dark-eval-1" type="text" name="status" required  >
                                <option > {{ $loanApplication->status }} </option>
                                <option> Paid </option>
                            </select>
                        </div>
                    </div>
                    <div class="text-right">
                        <x-button class="">
                            <span>{{ __('Update Status') }}</span>
                        </x-button>
                    </div>

                </div>
            </form>
        </div>

    </div>
</x-admin-layout>

<x-admin-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="w-1/2">
                <h2 class=" text-xl font-semibold leading-tight">
                    {{ __('Expense') }}
                </h2>
            </div>
            <div class="w-1/2">
                <x-button class="float-right">
                    <a href=" {{ route('admin.admindashboard') }} " class=""> Back </a>
                </x-button>
            </div>
        </div>
    </x-slot>

    <!--Expense -->
    <div class="p-6 bg-white rounded-lg md:items-center md:justify-between dark:bg-dark-eval-1 dark:text-gray-400">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div>
            <h2 class="mb-2 px-4 text-2xl font-semibold">Expense</h2>
        </div>
        <div class="bg-violet-50 p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
            <form method="POST" action=" {{ route('admin.expenses.store') }} " enctype="multipart/form-data"
            class="p-4 rounded-lg dark:bg-dark-bg">
                @csrf
                <div class="grid gap-6 ">
                    <!-- Expense Amount -->
                    <div class="space-y-2">
                        <label for="Amount" class="text-gray-700 dark:text-gray-100 font-semibold">Amount</label>
                        <x-input-with-icon-wrapper>
                            <x-slot name="icon">
                                <x-icons.naira aria-hidden="true" class="w-5 h-5" />
                            </x-slot>
                            <x-input withicon class="block w-full" type="text" name="expense_amount"
                                :value="old('expense_amount')" required placeholder="{{ __('Expense Amount') }}" />
                        </x-input-with-icon-wrapper>
                    </div>
                    <div class="text-right">
                        <x-button class="justify-center w-[100px] gap-2">
                            <span>{{ __('Create') }}</span>
                        </x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>

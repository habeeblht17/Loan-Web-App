<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <div class="flex w-1/2 space-x-5">
                <div class="">
                    <h2 class=" text-xl font-semibold leading-tight">
                        {{ __('Profile Info') }}
                    </h2>
                </div>
                <div class="">
                    <a href=" {{ route('userProfiles.edit', $user->userProfile->id ) }} " class="">
                        <h2 class=" text-xl font-semibold leading-tight text-blue-600">
                            {{ __('Edit Profile') }}
                        </h2>
                    </a>
                </div>
            </div>
        </div>
    </x-slot>

    @if (session('success'))
        <div class="bg-blue-500 text-sm text-gray-100 w-full rounded-md p-3 my-3 justify-center">
            {{ session('success') }}
        </div>
    @endif

    <div class="p-6 mb-5 cursor-pointer md:items-center md:justify-between dark:bg-dark-eval-1 dark:text-gray-400">
        <!--Personal info -->
        <div class="mb-5">
            <div>
                <h2 class="px-4 mb-3 text-2xl font-semibold">Personal Info</h2>
            </div>
            <div class="bg-white p-4 overflow-auto rounded-lg dark:bg-dark-eval-1">
                <div class="flex flex-col space-y-5 bg-violet-50 p-6 rounded-lg md:flex-row md:space-y-0 md:space-x-5 dark:bg-dark-bg">
                    <div class="flex-col space-y-5 px-10">
                        <div class="rounded-lg w-[200px] bg-white dark:bg-dark-eval-1">
                            @if ($user->userProfile)
                                <img src="{{ asset('images/' . $user->userProfile->image) }}" alt=""
                                class="rounded-lg w-[200px] h-[200px] p-2">
                            @endif
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">BVN:</small>{{ $user->userProfile->BVN ?? 'None' }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">NIN:</small>{{ $user->userProfile->NIN ?? 'None'  }}</span>
                        </div>
                    </div>

                    <div class="flex-col space-y-2 px-10 md:-mt-[300px]">
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">First Name:</small>{{ $user->firstname }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Last Name:</small>{{ $user->lastname }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Middle Name:</small>{{ $user->middlename }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Email:</small>{{ $user->email }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Phone Number:</small>{{ $user->phone }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Gender:</small>{{ $user->gender }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Date Of Birth:</small>{{ $user->DOB }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Street:</small>{{ $user->street }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">City:</small>{{ $user->city }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">State:</small>{{ $user->state }}</span>
                        </div>
                        <div>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Country:</small>{{ $user->country }}</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--Next Of Kin Info -->
        <div>
            <div>
                <h2 class=" px-4 mb-3 text-2xl font-semibold">Next Of Kin Info</h2>
            </div>
            <div class="bg-white p-6 overflow-auto rounded-lg dark:bg-dark-eval-1">
                <div class="space-x-12 bg-violet-50 p-6 rounded-lg dark:bg-dark-bg">
                    <div>
                        <div class="flex flex-col space-y-4 px-10">
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Full Name:</small>{{ $user->nextOfKin->name ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Phone Number:</small>{{ $user->nextOfKin->phone ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Date Of Birth:</small>{{ $user->nextOfKin->DOB ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Gender:</small>{{ $user->nextOfKin->gender ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Relationship:</small>{{ $user->nextOfKin->relationship ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Street:</small>{{ $user->nextOfKin->street ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">City:</small>{{ $user->nextOfKin->city ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">State:</small>{{ $user->nextOfKin->state ?? 'None'  }}</span>
                            <span><small class="dark:text-gray-200 text-lg font-semibold mr-3">Country:</small>{{ $user->nextOfKin->country ?? 'None'  }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

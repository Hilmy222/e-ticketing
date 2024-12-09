@extends('event-organizer.layout.main')
@section('content')
<main>

    <!-- Page Title Start -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h4 class="text-[#3E25F7] text-lg font-semibold">Participant Detail</h4>
            <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                <a href="{{ route ('manage-event.index') }}" class="text-sm font-semibold">My Events</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold">Detail Events</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold">Participants List</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold text-[#3E25F7]">Participants Detail</a>
            </div>
        </div>
        <div class="flex gap-2">
            <a class="flex px-6 py-1 gap-2 items-center bg-[#3E25F7] rounded-xl cursor-pointer">
                <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="" class="w-5 h-5">
                <span class="text-white">Edit</span>
            </a>
            <a class="flex px-4 py-1 gap-2 items-center bg-[#D93E39] rounded-xl cursor-pointer">
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">delete</i>
                <span class="text-white">Delete</span>
            </a>
            
        </div>
    </div>
    <!-- Page Title End -->

    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Participant</h4>
            </div>
            <div class="p-6">
                <div class="grid lg:grid-cols-2 gap-6">

                    <div>
                        <label for="name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Full Name</label>
                        <p class="p-2 border border-gray-200 rounded">Alex Under</p>
                    </div>
                    <div>
                        <label for="password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company/Institute</label>
                        <p class="p-2 border border-gray-200 rounded">Indi Communication</p>
                        </div>
                    <div>
                        <label for="phone"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <p class="p-2 border border-gray-200 rounded">alexander@gmail.com</p>
                        </div>
                    <div>
                        <label for="confirm-password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Birth Date</label>
                        <p class="p-2 border border-gray-200 rounded">12/08/06</p>
                    </div>
                    <div>
                        <label for="confirm-password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Phone</label>
                        <p class="p-2 border border-gray-200 rounded">081234567890</p>
                    </div>
                    <div>
                        <label for="confirm-password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Gender</label>
                        <p class="p-2 border border-gray-200 rounded">Male</p>
                    </div>

                </div>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
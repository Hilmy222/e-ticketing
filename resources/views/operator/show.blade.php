@extends('layout.main')
@section('content')
<main>

    <!-- Page Title Start -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h4 class="text-[#3E25F7] text-lg font-semibold">Operator Detail</h4>
            <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                <a href="{{ route ('eo.index') }}" class="text-sm font-semibold">Operator</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold text-[#3E25F7]">Operator Detail</a>
            </div>
        </div>
        <div class="flex gap-2">
            <div class="flex px-6 py-1 gap-2 items-center bg-[#3E25F7] rounded-xl cursor-pointer">
                <img src="{{ asset('assets/images/icon/edit.svg') }}" alt="" class="w-5 h-5">
                <span class="text-white">Edit</span>
            </div>
            <div class="flex px-4 py-1 gap-2 items-center bg-[#D93E39] rounded-xl cursor-pointer">
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">delete</i>
                <span class="text-white">Delete</span>
            </div>
            
        </div>
    </div>
    <!-- Page Title End -->

    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form Operator</h4>
            </div>
            <div class="p-6">
                <div class="grid lg:grid-cols-2 gap-6">

                    <div>
                        <label for="name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Name</label>
                        <p class="p-2 border border-gray-200 rounded">Alex</p>
                    </div>
                    <div>
                        <label for="password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Password</label>
                        <p class="p-2 border border-gray-200 rounded">**********</p>
                        </div>
                    <div>
                        <label for="phone"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Phone</label>
                        <p class="p-2 border border-gray-200 rounded">081234567890</p>
                        </div>
                    <div>
                        <label for="confirm-password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Confirmation Password</label>
                        <p class="p-2 border border-gray-200 rounded">**********</p>
                        </div>

                </div><button class="btn bg-primaryBlue font-medium rounded-lg mt-6 px-8 py-1 text-white">
                        Submit
                    </button>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
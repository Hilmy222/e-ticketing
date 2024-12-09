@extends('event-organizer.layout.main')
@section('content')
<main>

    <!-- Page Title Start -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h4 class="text-[#3E25F7] text-lg font-semibold">Create Events</h4>
            <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                <a href="{{ route ('manage-event.index') }}" class="text-sm font-semibold">My Events</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold text-[#3E25F7]">Create Events</a>
            </div>
        </div>
        <div class="flex gap-4 items-center">
            <div>
                <a href="{{ route ('manage-event.create.step3') }}" class="flex px-6 py-2 gap-2 items-center bg-[#B309C2] rounded-xl cursor-pointer">
                    <img src="{{ asset('assets/images/icon/save.svg') }}" alt="" class="w-4 h-4">
                    <span class="text-white font-semibold">Save</span>
                </a>
            </div>
            <div>
                <a href="#" class="flex px-5 py-1 gap-2 items-center bg-[#3E25F7] rounded-xl cursor-pointer">
                    <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">visibility</i>
                    <span class="text-white font-semibold">See</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="flex items-center px-7 justify-between mb-2">
        <div class="flex items-center gap-2 text-[#7B0486]">
            <i class="material-symbols-rounded text-xl flex-shrink-0 fill-1">check_circle</i>
            <p>Information Event</p>
        </div>
        <div class="bg-[#3E25F7] rounded-full h-[3px] w-[200px]"></div>
        <div class="flex items-center gap-2 text-[#7B0486]">
            <i class="material-symbols-rounded text-xl flex-shrink-0 fill-1">check_circle</i>
            <p>Certificate</p>
        </div>
        <div class="bg-[#3E25F7] rounded-full h-[3px] w-[200px]"></div>
        <div class="flex items-center gap-2 text-[#7B0486]">
            <i class="material-symbols-rounded text-xl flex-shrink-0">check_circle</i>
            <p class="font-semibold">File Class</p>
        </div>
    </div>

    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="p-6">
                <div>
                    <label for="material" class="text-default-800 text-sm font-medium inline-block mb-2">Material</label>
                    <input type="text" id="material" class="form-input" placeholder="Input your material link">
                </div>
                <div class="flex justify-end mt-6">
                    <a href=""><i class="material-symbols-rounded text-4xl flex-shrink-0 text-[#3E25F7] ml-auto">arrow_circle_left</i></a>
                </div>
            </div>
        </div> <!-- end card -->
    </div>
    
</main>
@endsection
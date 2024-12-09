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
        <div>
            <a href="{{ route ('manage-event.create.step3') }}" class="flex px-6 py-2 gap-2 items-center bg-[#B309C2] rounded-xl cursor-pointer">
                <img src="{{ asset('assets/images/icon/save.svg') }}" alt="" class="w-4 h-4">
                <span class="text-white font-semibold">Save</span>
            </a>
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
            <i class="material-symbols-rounded text-xl flex-shrink-0">check_circle</i>
            <p class="font-semibold">Certificate</p>
        </div>
        <div class="bg-[#3E25F7] rounded-full h-[3px] w-[200px]"></div>
        <div class="flex items-center gap-2">
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">check_circle</i>
            <p>File Class</p>
        </div>
    </div>

    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="p-6">
                    <div class="flex flex-col gap-10">

                        <div>
                            <label for="ticket-capacity" class="text-default-800 text-sm font-medium inline-block mb-2">Certificate Number</label>
                            <input type="number" id="ticket-capacity" class="form-input" placeholder="0/CRT/IDE/0">
                        </div>

                        <div>
                            <label>Add Certificate
                                <p class="font-light">Add certificates for participants who confirm their attendance at your event</p>
                                <label class="bg-[#3E25F7] inline-flex items-center gap-3 px-3 py-1 rounded-xl mt-5" for="upload-photo">
                                    <i class="material-symbols-rounded flex-shrink-0 font-light text-2xl text-white">cloud_upload</i>
                                    <p class="text-white font-medium">Upload File</p>
                                    <input type="file" id="upload-photo" onchange="loadFile(event)">
                                </label>
                            </label>
                        </div>

                        <div class="flex flex-col gap-2 hidden" id="upload-content">
                            <label for="">Preview Certificate</label>
                            <img src="" alt="" id="uploaded-image" class="hidden w-[480px] h-[270px] object-cover">
                            <button id="delete-button" class="flex gap-2 items-center hidden bg-red-500 text-white px-2 py-1 rounded max-w-fit" onclick="deleteImage()">
                                <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">delete</i>
                                <p class="font-medium">Delete</p>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">                        
                        <a href=""><i class="material-symbols-rounded text-4xl flex-shrink-0 text-[#3E25F7]">arrow_circle_left</i></a>
                        <a href=""><i class="material-symbols-rounded text-4xl flex-shrink-0 text-[#3E25F7]">arrow_circle_right</i></a>
                    </div>
                    

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
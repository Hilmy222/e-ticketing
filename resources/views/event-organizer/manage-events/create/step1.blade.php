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
            <a href="{{ route ('manage-event.create.step2') }}" class="flex px-6 py-2 gap-2 items-center bg-[#3E25F7] rounded-xl cursor-pointer">
                <img src="{{ asset('assets/images/icon/save.svg') }}" alt="" class="w-4 h-4">
                <span class="text-white font-semibold">Save</span>
            </a>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="flex items-center px-7 justify-between mb-2">
        <div class="flex items-center gap-2 text-[#7B0486]">
            <i class="material-symbols-rounded text-xl flex-shrink-0">check_circle</i>
            <p>Information Event</p>
        </div>
        <div class="bg-[#3E25F7] rounded-full h-[3px] w-[200px]"></div>
        <div class="flex items-center gap-2">
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">check_circle</i>
            <p>Certificate</p>
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
                <div class="grid lg:grid-cols-2 gap-6 mb-6">

                    <div class="col-span-2">
                        <label for="event-banner" class="flex flex-col text-default-800 text-sm font-medium">Event Banner
                            <span class="text-[10px]">upload your banner event</span>
                        </label>
                        <div class="bg-white shadow-xl w-full h-[400px] flex justify-center items-center my-6">
                        <img src="{{ asset('assets/images/icon/upload.svg') }}" alt="" class="w-8 h-8 ">
                        </div>
                        <input type="file" id="">
                    </div>
                    <div class="col-span-2">
                        <label for="event-name" class="text-default-800 text-sm font-medium inline-block mb-2">Event Name</label>
                        <input type="text" id="event-name" class="form-input" placeholder="Input your event name">
                    </div>
                    <div class="col-span-2">
                        <label for="event-description" class="text-default-800 text-sm font-medium inline-block mb-2">Event Description</label>
                        <textarea type="text" rows="10" id="event-description" class="form-input" placeholder="Input description your event name"></textarea>
                    </div>

                </div>
                    <div class="grid lg:grid-cols-2 gap-6">
                    <div>
                        <label for="event-type"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Event
                            Type</label>
                        <select class="form-select" id="event-type">
                            <option>Selection Event Type</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>
                    <div>
                        <label for="ticket-capacity" class="text-default-800 text-sm font-medium inline-block mb-2">Ticket Capacity</label>
                        <input type="number" id="ticket-capacity" class="form-input" placeholder="Input your ticket capacity">
                    </div>
                    <div>
                        <label for="email" class="text-default-800 text-sm font-medium inline-block mb-2">Contact Person Email</label>
                        <input type="email" id="email" class="form-input" placeholder="Input your email">
                    </div>
                    <div>
                        <label for="phone" class="text-default-800 text-sm font-medium inline-block mb-2">Contact Person Phone</label>
                        <input type="text" id="phone" class="form-input" placeholder="Input your phone">
                    </div>
                    <div class="flex flex-col">
                        <label class="label-customize text-default-800 text-sm font-medium inline-block mb-2">Event Logo</label>
                        <label for="upload-photo" class="bg-[#C3C3C7] rounded-full flex justify-center items-center w-16 h-16">
                            <i class="material-symbols-rounded flex-shrink-0 font-light text-white text-4xl">add</i>
                        </label>
                        <input type="file" id="upload-photo" class="" placeholder="Input your phone">
                    </div>
                    <div class="flex flex-col">
                        <label class="label-customize text-default-800 text-sm font-medium inline-block mb-2">Logo Sponsor</label>
                        <label for="upload-photo" class="bg-[#C3C3C7] rounded-full flex justify-center items-center w-16 h-16">
                            <i class="material-symbols-rounded flex-shrink-0 font-light text-white text-4xl">add</i>
                        </label>
                        <input type="file" id="upload-photo" class="" placeholder="Input your phone">
                    </div>
                    <div>
                        <label for="event-start" class="text-default-800 text-sm font-medium inline-block mb-2">Setting Your Event (Start)</label>
                        <input type="time" id="event-start" class="form-input" placeholder="Input your phone">
                    </div>
                    <div>
                        <label for="event-end" class="text-default-800 text-sm font-medium inline-block mb-2">Setting Your Event (End)</label>
                        <input type="time" id="event-end" class="form-input" placeholder="Input your phone">
                    </div>
                    <div>
                        <label for="event-date" class="text-default-800 text-sm font-medium inline-block mb-2">Event Date Time</label>
                        <input type="date" id="event-date" class="form-input" placeholder="Input your phone">
                    </div>
                    <div>
                        <label for="event-location" class="text-default-800 text-sm font-medium inline-block mb-2">Event Location</label>
                        <input type="text" id="event-location" class="form-input" placeholder="Input your event location">
                    </div>
                    <div class="col-span-2">
                        <label for="link-stream" class="text-default-800 text-sm font-medium inline-block mb-2">link Streaming</label>
                        <input type="text" id="link-stream" class="form-input" placeholder="Input your link">
                    </div>
                </div>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
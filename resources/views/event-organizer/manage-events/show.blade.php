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
            <a href="{{ route ('manage-event.create.step2') }}" class="flex px-6 py-2 gap-2 items-center bg-[#B309C2] rounded-xl cursor-pointer">
                <img src="{{ asset('assets/images/icon/save.svg') }}" alt="" class="w-4 h-4">
                <span class="text-white font-semibold">Save</span>
            </a>
        </div>
    </div>
    <!-- Page Title End -->


    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title flex gap-1">Event ID: <p class="font-light">12222</p></h4>
            </div>
            <div class="p-6">
                <div class="grid lg:grid-cols-2 gap-6 mb-6">

                    <div class= "col-span-2">
                        <div class="flex gap-2 items-center">
                            <p class="font-semibold text-sm text-black">Status:</p>
                            <p class="bg-[#ECECED] text-[#E89B00] px-3 py-1 inline-flex rounded-xl text-xs">Draft</p>
                        </div>
                        <label for="event-banner" class="flex flex-col text-default-800 text-sm font-medium my-5">Event Banner</label>
                        <img src="{{ asset('assets/images/example.png') }}" alt="" class="w-full h-[530px] object-cover">
                        <button id="delete-button" class="flex gap-2 items-center hidden bg-red-500 text-white px-2 py-1 rounded" onclick="deleteImage()">
                            <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">delete</i>
                            <p class="font-medium">Delete</p>
                        </button>

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
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Event Logo</label>
                            <img src="{{ asset('assets/images/example.png') }}" class="mt-2 rounded-full w-16 h-16 object-cover" alt="Uploaded Image">
                        </label>
                    </div>
                    <div class="flex flex-col">
                        <label class="text-default-800 text-sm font-medium inline-block mb-2">Logo Sponsor</label>
                            <img src="{{ asset('assets/images/example.png') }}" class="mt-2 rounded-full w-16 h-16 object-cover" alt="Uploaded Image">
                        </label>
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
                <div class="flex justify-end mt-6">
                    <a href=""><i class="material-symbols-rounded text-4xl flex-shrink-0 text-[#3E25F7] ml-auto">arrow_circle_right</i></a>
                </div>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
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
                <a href="#" class="text-sm font-semibold text-[#3E25F7]">Detail Events</a>
            </div>
        </div>
        <div class="flex gap-3">
            <a href="{{ route('manage-event.create.step1') }}" class="flex px-5 py-0.5 gap-2 items-center bg-[#3E25F7] rounded-xl cursor-pointer">
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">edit_square</i>
                <span class="text-white font-semibold">Edit</span>
            </a>
            <a href="#" class="flex px-5 py-0.5 gap-2 items-center bg-[#3DA755] rounded-xl cursor-pointer">
                <i class="material-symbols-rounded text-2xl flex-shrink-0 text-white">check</i>
                <span class="text-white font-semibold">Done</span>
            </a>
            <a href="#" class="flex px-5 py-0.5 gap-2 items-center bg-[#D93E39] rounded-xl cursor-pointer">
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">delete</i>
                <span class="text-white font-semibold">Delete</span>
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
                <div class="grid lg:grid-cols-1 gap-6 mt-8">
                    <div class="card overflow-hidden">
                        <div>
                            <div class="card-header">
                                <a href="{{ route('participants.index') }}" class="card-title flex gap-1 items-center justify-between my-3">
                                    <p>Event ID</p>
                                    <p class="bg-[#3E25F7] text-white px-3 py-2 text-sm rounded-xl">
                                        View More
                                    </p>
                                </a>
                            </div>
                            <div class="overflow-x-auto">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-sm text-[#374151]">
                                                        No</th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-sm text-[#374151]">
                                                        Full Name
                                                    </th>
                                                    <th scop e="col"
                                                        class="px-6 py-3 text-start text-sm text-[#374151]">
                                                        Email
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-start text-sm text-[#374151]">
                                                        Company/Institute
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-start text-sm text-[#374151]">
                                                        Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <tr class="hover:bg-gray-100">
                                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-default-800">
                                                            {{ $i }}</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                                            Alex Under</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                                            alexander{{ $i }}@gmail.com</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                                            Tuture</td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                                            <a class="text-primary hover:text-sky-700" href="{{ route('manage-event.show') }}">
                                                                <i class="material-symbols-rounded px-4 rounded-md flex justify-center items-center bg-[#3E25F7] text-white text-xl">visibility</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endfor
                                            </tbody>                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
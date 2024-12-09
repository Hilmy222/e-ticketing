@extends('event-organizer.layout.main')
@section('content')          
<main>

    <!-- Page Title Start -->
    <div class="flex items-center md:justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-[#3E25F7] text-xl font-semibold mb-2">My Event</h4>

        <a href="{{ route ('manage-event.create.step1') }}" class="bg-[#3E25F7] flex gap-1 items-center p-2 rounded-xl cursor-pointer">
            <i class="material-symbols-rounded font-medium text-xl text-white">add</i>
            <p class="text-white font-medium">Create Events</p>
        </a>
        {{-- <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
            <a href="#" class="text-sm font-medium text-default-700">Windzon</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-medium text-default-700">Tables</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Basic Tables</a>
        </div> --}}
    </div>
    <!-- Page Title End -->

    <div class="grid lg:grid-cols-1 gap-6 mt-8">
        <div class="card overflow-hidden">
            <div>
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
                                            Event Created
                                        </th>
                                        <th scop e="col"
                                            class="px-6 py-3 text-start text-sm text-[#374151]">
                                            Event Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-sm text-[#374151]">
                                            Event Type
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-sm text-[#374151]">
                                            Event Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-sm text-[#374151]">
                                            Event Date
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-start text-sm text-[#374151]">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium text-default-800">
                                                1</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                                25/11/2024</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                                Sound Of Jakbar Vol.7</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                                Offline</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-default-800">
                                                Published</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                                13/12/2024</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-start text-sm font-medium">
                                                <a class="text-primary hover:text-sky-700" href="{{ route('manage-event.show') }}">
                                                    <i class="material-symbols-rounded px-4 rounded-md flex justify-center items-center bg-[#3E25F7] text-white text-xl">visibility</i>
                                                </a>
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end card -->
    </div>

</main>
@endsection
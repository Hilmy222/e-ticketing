@extends('event-organizer.layout.main')
@section('content')
<main>

    <!-- Page Title Start -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h4 class="text-[#3E25F7] text-lg font-semibold">Participants List</h4>
            <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                <a href="{{ route ('manage-event.index') }}" class="text-sm font-semibold">My Events</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold">Detail Events</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold text-[#3E25F7]">Participants List</a>
            </div>
        </div>
            <a href="{{ route('participants.create') }}" class="bg-[#3E25F7] flex gap-1 items-center px-4 py-2 rounded-xl cursor-pointer">
                <i class="material-symbols-rounded font-medium text-xl text-white">add</i>
                <p class="text-white font-medium">Add Participant</p>
            </a>
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
                                                            <a class="text-primary hover:text-sky-700" href="{{ route('participants.show') }}">
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
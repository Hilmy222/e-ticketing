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
            <a href="{{ route ('manage-event.create.step3') }}" class="flex px-6 py-2 gap-2 items-center bg-[#3E25F7] rounded-xl cursor-pointer">
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

                        <div class="flex flex-col gap-2">
                            <label for="">Preview Certificate</label>
                            <p for="" class="font-light">Title Certificate</p>
                            <img src="" alt="" id="output" class="w-[480px] h-[270px] object-cover">
                        </div>

                    </div>
                    <script>
                        var loadFile = function(event) {
                          var output = document.getElementById('output');
                          output.src = URL.createObjectURL(event.target.files[0]);
                          output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                          }
                        };
                      </script>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
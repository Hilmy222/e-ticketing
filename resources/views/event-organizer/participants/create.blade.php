@extends('event-organizer.layout.main')
@section('content')
<main>

    <!-- Page Title Start -->
    <div class="flex items-start flex-col mb-6">
        <h4 class="text-[#3E25F7] text-lg font-semibold">Form Create Operator</h4>

        <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
            <a href="{{ route ('manage-event.index') }}" class="text-sm font-semibold">My Events</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-semibold">Detail Events</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-semibold">Participants List</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-semibold text-[#3E25F7]">Create Participant</a>
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
                        <input type="text" id="simpleinput" class="form-input" placeholder="Input fullname">
                    </div>
                    <div>
                        <label for="password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company/Institute</label>
                        <input type="text" id="simpleinput" class="form-input" placeholder="Input company">
                    </div>
                    <div>
                        <label for="phone"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <input type="number" id="simpleinput" class="form-input" placeholder="Input email">
                    </div>
                    <div>
                        <label for="confirm-password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Birth Date</label>
                        <input type="text" id="simpleinput" class="form-input" placeholder="Input birth date">
                    </div>
                    <div>
                        <label for="confirm-password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Phone</label>
                        <input type="number" id="simpleinput" class="form-input" placeholder="Input phone">
                    </div>
                    <div>
                        <label for="confirm-password"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Gender</label>
                        <input type="text" id="simpleinput" class="form-input" placeholder="Input gender">
                    </div>

                </div><button class="btn bg-primaryBlue font-medium rounded-lg mt-6 px-8 py-1 text-white">
                        Submit
                    </button>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
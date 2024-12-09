@extends('admin.layout.main')
@section('content')
<main>

    <!-- Page Title Start -->
    <div class="flex items-start flex-col mb-6">
        <h4 class="text-[#3E25F7] text-lg font-semibold">Form Create EO</h4>

        <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
            <a href="{{ route ('events-organizer.index') }}" class="text-sm font-semibold">Data EO</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-semibold text-[#3E25F7]">Create EO</a>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Form New Event Organizer</h4>
            </div>
            <div class="p-6">
                <div class="grid lg:grid-cols-2 gap-6">

                    <div>
                        <label for="company-name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company Name</label>
                        <input type="text" id="simpleinput" class="form-input">
                    </div>
                    <div>
                        <label for="brand-name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Brand Name</label>
                        <input type="text" id="simpleinput" class="form-input">
                    </div>
                    <div>
                        <label for="email"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <input type="email" id="example-email" name="example-email" class="form-input"
                            placeholder="Email">
                    </div>
                    <div>
                        <label for="pic-name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">PIC Name</label>
                        <input type="text" id="simpleinput" class="form-input">
                    </div>
                    <div>
                        <label for="company-phone"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company Phone</label>
                        <input type="number" id="simpleinput" class="form-input">
                    </div>
                    <div>
                        <label for="pic-phone"
                            class="text-default-800 text-sm font-medium inline-block mb-2">PIC Phone</label>
                        <input type="number" id="simpleinput" class="form-input">
                    </div>
                    

                </div><button class="btn bg-primaryBlue font-medium rounded-lg mt-6 px-8 py-1 text-white">
                        Submit
                    </button>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
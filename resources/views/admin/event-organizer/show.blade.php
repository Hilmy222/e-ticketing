@extends('admin.layout.main')
@section('content')          
<main>

    <!-- Page Title Start -->
    <div class="flex items-center justify-between mb-6">
        <div>
            <h4 class="text-[#3E25F7] text-lg font-semibold">Data EO Detail</h4>
            <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
                <a href="{{ route ('events-organizer.index') }}" class="text-sm font-semibold">Data EO</a>
                <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
                <a href="#" class="text-sm font-semibold text-[#3E25F7]">Data EO Detail</a>
            </div>
        </div>
        <div class="flex px-4 py-1 gap-2 items-center bg-[#D93E39] rounded-xl">
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-white">delete</i>
            <span class="text-white">Delete</span>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="flex flex-col gap-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">EO ID : <span class="font-normal">1234567890700</span></h4>
            </div>
            <div class="p-6">
                <div class="grid lg:grid-cols-2 gap-6">

                    <div>
                        <label for="company-name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company Name</label>
                        <p class="p-2 border border-gray-200 rounded">Super Soundtrack</p>
                    </div>
                    <div>
                        <label for="brand-name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Brand Name</label>
                        <p class="p-2 border border-gray-200 rounded">Super Soundtrack</p>
                    </div>
                    <div>
                        <label for="email"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <p class="p-2 border border-gray-200 rounded">Super Soundtrack@gmail.com</p>
                    </div>
                    <div>
                        <label for="pic-name"
                            class="text-default-800 text-sm font-medium inline-block mb-2">PIC Name</label>
                        <p class="p-2 border border-gray-200 rounded">Taza</p>
                        </div>
                    <div>
                        <label for="company-phone"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company Phone</label>
                        <p class="p-2 border border-gray-200 rounded">024-237656</p>
                    </div>
                    <div>
                        <label for="pic-phone"
                            class="text-default-800 text-sm font-medium inline-block mb-2">PIC Phone</label>
                        <p class="p-2 border border-gray-200 rounded">085855876029</p>
                    </div>
                    <div>
                        <label for="company-bio"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company Bio</label>
                        <textarea type="text" rows="7" id="simpleinput" class="form-input">Konser orkestra kdrama yang menghadirkan lagu-lagu dari drama Korea populer seperti Descendants of the Sun, King the Land, Our Beloved Summer, The World of the Married, Itaewon Class.</textarea>
                    </div>
                    <div>
                        <label for="company-address"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company Address</label>
                        <textarea type="text" rows="7" id="simpleinput" class="form-input">Graha INDI, Jalan Pahlawan Revolusi 1, Lt4 RT.06, RT.6/RW.7, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13430</textarea>
                    </div>
                    <div class="max-w-40">
                        <label for="company-logo"
                            class="text-default-800 text-sm font-medium inline-block mb-2">Company Address</label>
                            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" class="rounded-full">
                    </div>
                </div>

            </div>
        </div> <!-- end card -->
    </div>

</main>
@endsection
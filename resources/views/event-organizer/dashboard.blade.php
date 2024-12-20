@extends('event-organizer.layout.main')
@section('content')

<main>

    <!-- Page Title Start -->
    <div class="flex items-center md:justify-between flex-wrap gap-2 mb-6">
        <h4 class="text-default-900 text-lg font-medium mb-2">Dashboard</h4>

        <div class="md:flex hidden items-center gap-3 text-sm font-semibold">
            <a href="#" class="text-sm font-medium text-default-700">Windzon</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-medium text-default-700">Menu</a>
            <i class="material-symbols-rounded text-xl flex-shrink-0 text-default-500">chevron_right</i>
            <a href="#" class="text-sm font-medium text-default-700" aria-current="page">Dashboard</a>
        </div>
    </div>
    <!-- Page Title End -->

    <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
        <div class="card group">
            <div class="p-5 flex items-center justify-between">
                <span>
                    <div class="text-slate-600 font-semibold block">Total Order</div>
                    <div class="text-2xl text-slate-800 font-semibold mt-2">$2198</div>
                </span>

                <span
                    class="rounded-full flex justify-center items-center size-16 bg-primary/10 text-primary">
                    <i
                        class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">person</i>
                </span>
            </div>
        </div><!--end-->

        <div class="card group">
            <div class="p-5 flex items-center justify-between">
                <span>
                    <div class="text-slate-600 font-semibold block">Today's Sales</div>
                    <div class="text-2xl text-slate-800 font-semibold mt-2">$150</div>
                </span>

                <span
                    class="rounded-full flex justify-center items-center size-16 bg-success/10 text-success">
                    <i
                        class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">shopping_cart</i>
                </span>
            </div>
        </div><!--end-->

        <div class="card group">
            <div class="p-5 flex items-center justify-between">
                <span>
                    <div class="text-slate-600 font-semibold block">Today's Revenue </div>
                    <div class="text-2xl text-slate-800 font-semibold mt-2">$1200</div>
                </span>

                <span class="rounded-full flex justify-center items-center size-16 bg-info/10 text-info">
                    <i
                        class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">favorite</i>
                </span>
            </div>
        </div><!--end-->

        <div class="card group">
            <div class="p-5 flex items-center justify-between">
                <span>
                    <div class="text-slate-600 font-semibold block">Today's Visits </div>
                    <div class="text-2xl text-slate-800 font-semibold mt-2">7.2k</div>
                </span>

                <span
                    class="rounded-full flex justify-center items-center size-16 bg-danger/10 text-danger">
                    <i
                        class="material-symbols-rounded text-4xl transition-all group-hover:fill-1">visibility</i>
                </span>
            </div>
        </div><!--end-->
    </div>

    <div class="grid xl:grid-cols-3 gap-6 mb-6">
        <div class="card">
            <div class="card-header flex justify-between items-center">
                <h4 class="card-title">Recent Buyers</h4>
                <a href="#!" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
            </div>
            <div class="card-body">
                <div id="month-sales-chart" class="apex-charts"></div>

                <div class="flex justify-evenly text-center w-full mt-6">
                    <div>
                        <div class="flex items-center">
                            <span class="inline-block size-2.5 bg-primary text-sm rounded-full me-1"></span>
                            <p class="text-sm text-gray-600">Products A</p>
                        </div>
                        <p class="font-medium text-gray-600 text-base mt-2 ms-4">$2,125</p>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <span class="inline-block size-2.5 bg-success text-sm rounded-full me-1"></span>
                            <p class="text-sm text-gray-600">Products B</p>
                        </div>
                        <p class="font-medium text-gray-600 text-base mt-2 ms-4">$1,763</p>
                    </div>
                    <div>
                        <div class="flex items-center">
                            <span class="inline-block size-2.5 bg-danger text-sm rounded-full me-1"></span>
                            <p class="text-sm text-gray-600">Products C</p>
                        </div>
                        <p class="font-medium text-gray-600 text-base mt-2 ms-4">$973</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="xl:col-span-2">
            <div class="card">
                <div class="card-header flex justify-between items-center">
                    <h4 class="card-title">Last Month Sales</h4>
                    <a href="#!" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
                </div>

                <div class="card-body">
                    <div id="recent-buyers-chart" class="apex-charts"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="grid xl:grid-cols-2 gap-6">

        <div class="card overflow-hidden">
            <div class="card-header flex justify-between items-center">
                <h4 class="card-title">Recent Buyers</h4>
                <a href="#!" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
            </div>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle whitespace-nowrap">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-light/40 border-b border-gray-200">
                                <tr>
                                    <th class="px-6 py-3 text-start">Product</th>
                                    <th class="px-6 py-3 text-start">Customers</th>
                                    <th class="px-6 py-3 text-start">Categories</th>
                                    <th class="px-6 py-3 text-start">Popularity</th>
                                    <th class="px-6 py-3 text-start">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">iPhone X</td>
                                    <td class="px-6 py-3">Tiffany W. Yang</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="px-2 py-1 bg-success/10 text-success text-xs rounded">Mobile</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div
                                            class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                            <div class="progress-bar progress-bar-striped bg-success"
                                                role="progressbar" aria-valuenow="85" aria-valuemin="20"
                                                aria-valuemax="100" style="width:85%"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">$ 1200.00</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">iPad</td>
                                    <td class="px-6 py-3">Dale P. Warman</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="px-2 py-1 bg-success/10 text-success text-xs rounded">Tablet</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div
                                            class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                            <div class="progress-bar progress-bar-striped bg-success"
                                                role="progressbar" aria-valuenow="72" aria-valuemin="20"
                                                aria-valuemax="100" style="width:72%"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">$ 1190.00</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">OnePlus</td>
                                    <td class="px-6 py-3">Garth J. Terry</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="px-2 py-1 bg-success/10 text-success text-xs rounded">Electronics</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div
                                            class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                            <div class="progress-bar progress-bar-striped bg-success"
                                                role="progressbar" aria-valuenow="43" aria-valuemin="20"
                                                aria-valuemax="100" style="width:43%"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">$ 999.00</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">ZenPad</td>
                                    <td class="px-6 py-3">Marilyn D. Bailey</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="px-2 py-1 bg-success/10 text-success text-xs rounded">Cosmetics</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div
                                            class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                            <div class="progress-bar progress-bar-striped bg-success"
                                                role="progressbar" aria-valuenow="37" aria-valuemin="20"
                                                aria-valuemax="100" style="width:37%"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">$ 1150.00</td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">Pixel 2</td>
                                    <td class="px-6 py-3">Denise R. Vaughan</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="px-2 py-1 bg-success/10 text-success text-xs rounded">Appliences</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div
                                            class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                            <div class="progress-bar progress-bar-striped bg-success"
                                                role="progressbar" aria-valuenow="82" aria-valuemin="20"
                                                aria-valuemax="100" style="width:82%"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">$ 1180.00</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3">Pixel 2</td>
                                    <td class="px-6 py-3">Jeffery R. Wilson</td>
                                    <td class="px-6 py-3">
                                        <span
                                            class="px-2 py-1 bg-success/10 text-success text-xs rounded">Mobile</span>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div
                                            class="flex w-full h-1.5 bg-light rounded-full overflow-hidden">
                                            <div class="progress-bar progress-bar-striped bg-success"
                                                role="progressbar" aria-valuenow="36" aria-valuemin="20"
                                                aria-valuemax="100" style="width:36%"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-3">$ 1180.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->

        <div class="card overflow-hidden">
            <div class="card-header flex justify-between items-center">
                <h4 class="card-title">Account Transactions</h4>
                <a href="#!" class="btn btn-sm bg-light !text-sm text-gray-800 ">Export</a>
            </div>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle whitespace-nowrap">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-sm">
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">
                                        <div class="font-medium">4257 **** **** 7852</div>
                                        <div class="text-xs">11 April 2023</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">$79.49</div>
                                        <div class="text-xs">Amount</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Visa</div>
                                        <div class="text-xs">Card</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Helen Warren</div>
                                        <div class="text-xs">Pay</div>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">
                                        <div class="font-medium">4427 **** **** 4568</div>
                                        <div class="text-xs">28 Jan 2023</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">$1254.00</div>
                                        <div class="text-xs">Amount</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Visa</div>
                                        <div class="text-xs">Card</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Kayla Lambie</div>
                                        <div class="text-xs">Pay</div>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">
                                        <div class="font-medium">4265 **** **** 0025</div>
                                        <div class="text-xs">08 Dec 2022</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">$784.25</div>
                                        <div class="text-xs">Amount</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Master</div>
                                        <div class="text-xs">Card</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Hugo Lavarack</div>
                                        <div class="text-xs">Pay</div>
                                    </td>
                                </tr>
                                <tr class="border-b border-gray-200">
                                    <td class="px-6 py-3">
                                        <div class="font-medium">7845 **** **** 5214</div>
                                        <div class="text-xs">03 Dec 2022</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">$485.24</div>
                                        <div class="text-xs">Amount</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Stripe</div>
                                        <div class="text-xs">Card</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Amber Scurry</div>
                                        <div class="text-xs">Pay</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">4257 **** **** 7852</div>
                                        <div class="text-xs">12 Nov 2022</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">$8964.04</div>
                                        <div class="text-xs">Amount</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Maestro</div>
                                        <div class="text-xs">Card</div>
                                    </td>
                                    <td class="px-6 py-3">
                                        <div class="font-medium">Caitlyn Gibney</div>
                                        <div class="text-xs">Pay</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end card-->
    </div>

</main>

@endsection
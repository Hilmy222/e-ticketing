<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Satset</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    @vite('resources/css/app.css')
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Icons CSS (Mandatory in All Pages) -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App CSS (Mandatory in All Pages) -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
    @php
    $routeName = request()->route()->getName(); // Mendapatkan nama route saat ini
    @endphp
    
    @if ($routeName !== 'login')
    
    <div class="wrapper">

        <!-- Start Sidebar -->
        <aside id="app-menu"
            class="hs-overlay fixed inset-y-0 start-0 z-60 hidden w-sidenav min-w-sidenav -translate-x-full transform overflow-y-auto bg-default-900 transition-all duration-300 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">
            <div class="sticky top-0 flex h-16 items-center justify-center px-6">
                <a href="index.html">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo" class="flex h-10">
                </a>
            </div>

            <div class="h-[calc(100%-64px)] p-4" data-simplebar>
                <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1.5">
                    <li class="menu-item">
                        <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-300 transition-all hover:bg-default-100/5"
                            href="{{ route ('dashboard') }}">
                            <i class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">home</i>
                            Dashboard
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route ('eo.index') }}"
                            class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-300 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5">
                            <i
                                class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">article</i>
                            <span class="menu-text">Event Organizer</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route ('operator.index') }}"
                            class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-300 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5">
                            <i
                                class="material-symbols-rounded font-light text-2xl transition-all group-hover:fill-1">group</i>
                            <span class="menu-text">Manage Operator</span>
                        </a>
                    </li>

                   
                </ul>
            </div>
        </aside>
        <!-- End Sidebar -->
        
        <!-- Start Page Content here -->
        <div class="page-content">

            <!-- Topbar Start -->
            <header class="app-header">
                <div class="h-16 flex items-center px-5 gap-4 bg-white lg:rounded-t-xl border-b border-default-100">
                    <!-- Topbar Brand Logo -->
                    <a href="index.html" class="md:hidden flex">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" class="h-6" alt="Small logo">
                    </a>

                    <!-- Sidenav Menu Toggle Button -->
                    <button id="button-toggle-menu" class="text-default-500 hover:text-default-600 p-2 rounded-full cursor-pointer"
                        data-hs-overlay="#app-menu" aria-label="Toggle navigation">
                        <i class="i-tabler-menu-2 text-2xl"></i>
                    </button>

                    <!-- Language Dropdown Button -->
                    <div class="ms-auto hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button type="button" class="hs-dropdown-toggle inline-flex items-center">
                            <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image" class="h-4 w-6">
                        </button>

                        <div
                            class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('assets/images/flags/germany.jpg') }}" alt="user-image" class="h-4">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('assets/images/flags/italy.jpg') }}" alt="user-image" class="h-4">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('assets/images/flags/spain.jpg') }}" alt="user-image" class="h-4">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);"
                                class="flex items-center gap-2.5 py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100">
                                <img src="{{ asset('assets/images/flags/russia.jpg') }}" alt="user-image" class="h-4">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </div>

                    <!-- Fullscreen Toggle Button -->
                    <div class="md:flex hidden">
                        <button data-toggle="fullscreen" type="button" class="nav-link p-2">
                            <span class="sr-only">Fullscreen Mode</span>
                            <span class="flex items-center justify-center size-6">
                                <i class="i-tabler-maximize text-2xl flex group-[-fullscreen]:hidden"></i>
                                <i class="i-tabler-minimize text-2xl hidden group-[-fullscreen]:flex"></i>
                            </span>
                        </button>
                    </div>

                    <!-- Profile Dropdown Button -->
                    <div class="relative">
                        <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                            <button type="button" class="hs-dropdown-toggle nav-link flex items-center gap-2">
                                <img src="{{ asset('assets/images/users/avatar-4.jpg') }}" alt="user-image" class="rounded-full h-10">
                                <i class="i-tabler-chevron-down text-sm ms-2"></i>
                            </button>
                            <div
                                class="hs-dropdown-menu duration mt-2 min-w-48 rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 hidden">
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Profile
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Feed
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Analytics
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Settings
                                </a>
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Support
                                </a>
                                <hr class="my-2">
                                <a class="flex items-center py-2 px-3 rounded-md text-sm text-default-800 hover:bg-gray-100"
                                    href="#">
                                    Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </header>
            <!-- Topbar End -->

            @yield('content')

            <!-- Footer Start -->
            <footer class="footer h-16 flex items-center px-6 border-t border-gray-200">
                <div class="flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <script>document.write(new Date().getFullYear())</script> © Windzon
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        Design &amp; Develop by<a href="#" class="text-primary">MyraStudio</a>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- End Page content -->

    </div>

    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="{{ asset ('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/preline/preline.js') }}"></script>
    <script src="{{ asset ('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/iconify-icon/iconify-icon.min.js') }}"></script>
    <script src="{{ asset ('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- App Js (Mandatory in All Pages) -->
    <script src="{{ asset ('assets/js/app.js') }}"></script>

    @endif

</body>

</html>
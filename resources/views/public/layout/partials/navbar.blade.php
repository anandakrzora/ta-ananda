<div class="container px-4 max-w-[85rem] mx-auto sticky top-0 bg-slate-50 bg-opacity-90 z-50">
    <!-- ========== HEADER ========== -->
    <header class="inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full border-b border-solid border-gray-200">
        <nav class="max-w-[85rem] mx-auto w-full md:flex md:items-center md:justify-between md:gap-3">
            <!-- Logo w/ Collapse Button -->
            <div class="flex items-center justify-between">
                <!-- Logo Image -->
                <img src="{{ asset('img/LOGO.png') }}" alt="UD BAWA MOTOR" class="w-20 object-contain">

                <!-- Brand Name -->
                <a class="flex-none font-bold text-xl text-red-600 focus:outline-none focus:opacity-80 hidden sm:hidden md:hidden lg:block" href="{{ route('home') }}" aria-label="Brand">Bawa Motor</a>

                <!-- Collapse Button -->
                <div class="md:hidden">
                    <button type="button" class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-full border-none border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic" aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                        <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6"></line>
                            <line x1="3" x2="21" y1="12" y2="12"></line>
                            <line x1="3" x2="21" y1="18" y2="18"></line>
                        </svg>
                        <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                </div>
                <!-- End Collapse Button -->
            </div>
            <!-- End Logo w/ Collapse Button -->

            <!-- Collapse -->
            <div id="hs-header-classic" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-classic-collapse">
                <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 ">
                    <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                        <a class="p-2 flex items-center text-sm text-dark-600 focus:outline-none hover:text-red-500 hover:font-bold" href="#about" aria-current="page">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            </svg>
                            Tentang Kami
                        </a>

                        <a class="p-2 flex items-center text-sm text-gray-800 hover:text-red-500 hover:font-bold" href="{{ url('/#product')}}">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Product
                        </a>

                        <a class="p-2 flex items-center text-sm text-gray-800 hover:text-red-500 hover:font-bold focus:outline-none focus:text-gray-500" href="{{ url('/#testimoni') }}">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 12h.01"></path>
                                <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"></path>
                                <path d="M22 13a18.15 18.15 0 0 1-20 0"></path>
                                <rect width="20" height="14" x="2" y="6" rx="2"></rect>
                            </svg>
                            Galery
                        </a>

                        <a class="p-2 flex items-center text-sm text-gray-800 hover:text-red-500 hover:font-bold focus:outline-none focus:text-gray-500" href="{{ url('/#contact') }}">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
                                <path d="M18 14h-8"></path>
                                <path d="M15 18h-5"></path>
                                <path d="M10 6h8v4h-8V6Z"></path>
                            </svg>
                            Kontak Kami
                        </a>

                        {{-- <!-- Button Group -->
                        <div class="relative flex flex-wrap items-center gap-x-1.5 md:ps-2.5 md:ms-1.5 before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-gray-300 before:-translate-y-1/2">
                            <a class="p-2 w-full flex items-center text-sm text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500" href="{{ route('login') }}">
                                <svg class="shrink-0 size-4 me-3 md:me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                Log in
                            </a>
                        </div> --}}
                        <!-- End Button Group -->
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->
</div>
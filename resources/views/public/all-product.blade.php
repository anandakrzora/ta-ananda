<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Bawa Motor</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

</head>

<body>
    <div>
        @include('public.layout.partials.navbar')
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mt-5 mx-auto">
            <p class="text-gray-400"> <a href="">Product / </a> 
                <span class="text-red-600 font-medium text-base text-lg">All</span> 
            </p>
        </div>
    </div>
    <main>
        <!-- Pricing -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto" id="product">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight mb-10">Product</h2>
    </div>
    <!-- End Title -->
  
    <!-- Grid -->
    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">

      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
        <img src="{{ asset('img/exampleproduct.png') }}" alt="">
  
        <ul class="mt-7 space-y-2.5 text-sm mb-3">
          <li class="flex gap-x-2">
           <span class="text-gray-800 font-semibold">
                VESPA SPRINT 2016
            </span>
          </li>
  
          <li class="flex gap-x-2 text-gray-600 text-xs">
            Dijual Motor Cash / Credit
          </li>
  
          <li class="flex gap-x-5">
            <div class="flex items-center gap-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                <p class="text-xs text-gray-600">
                    2 Passagers
                </p>
            </div>
            <div class="flex items-center gap-x-1 ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                <p class="text-xs text-gray-600">
                    Transmini Manual
                </p>
            </div>
          </li>
        </ul>

        <hr>

        <ul class="mt-2">
            <li class="flex">
                <p class="mr-auto text-gray-600 text-sm">Price</p>
                <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
            </li>
        </ul>

        <!-- Buttons -->
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="#">
            More Detail
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
        <!-- End Buttons -->
        
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
        <img src="{{ asset('img/exampleproduct.png') }}" alt="">
  
        <ul class="mt-7 space-y-2.5 text-sm mb-3">
          <li class="flex gap-x-2">
           <span class="text-gray-800 font-semibold">
                VESPA SPRINT 2016
            </span>
          </li>
  
          <li class="flex gap-x-2 text-gray-600 text-xs">
            Dijual Motor Cash / Credit
          </li>
  
          <li class="flex gap-x-5">
            <div class="flex items-center gap-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                <p class="text-xs text-gray-600">
                    2 Passagers
                </p>
            </div>
            <div class="flex items-center gap-x-1 ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                <p class="text-xs text-gray-600">
                    Transmini Manual
                </p>
            </div>
          </li>
        </ul>

        <hr>

        <ul class="mt-2">
            <li class="flex">
                <p class="mr-auto text-gray-600 text-sm">Price</p>
                <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
            </li>
        </ul>

        <!-- Buttons -->
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="#">
            More Detail
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
        <!-- End Buttons -->
        
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
        <img src="{{ asset('img/exampleproduct.png') }}" alt="">
  
        <ul class="mt-7 space-y-2.5 text-sm mb-3">
          <li class="flex gap-x-2">
           <span class="text-gray-800 font-semibold">
                VESPA SPRINT 2016
            </span>
          </li>
  
          <li class="flex gap-x-2 text-gray-600 text-xs">
            Dijual Motor Cash / Credit
          </li>
  
          <li class="flex gap-x-5">
            <div class="flex items-center gap-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                <p class="text-xs text-gray-600">
                    2 Passagers
                </p>
            </div>
            <div class="flex items-center gap-x-1 ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                <p class="text-xs text-gray-600">
                    Transmini Manual
                </p>
            </div>
          </li>
        </ul>

        <hr>

        <ul class="mt-2">
            <li class="flex">
                <p class="mr-auto text-gray-600 text-sm">Price</p>
                <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
            </li>
        </ul>

        <!-- Buttons -->
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="#">
            More Detail
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
        <!-- End Buttons -->
        
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
        <img src="{{ asset('img/exampleproduct.png') }}" alt="">
  
        <ul class="mt-7 space-y-2.5 text-sm mb-3">
          <li class="flex gap-x-2">
           <span class="text-gray-800 font-semibold">
                VESPA SPRINT 2016
            </span>
          </li>
  
          <li class="flex gap-x-2 text-gray-600 text-xs">
            Dijual Motor Cash / Credit
          </li>
  
          <li class="flex gap-x-5">
            <div class="flex items-center gap-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                <p class="text-xs text-gray-600">
                    2 Passagers
                </p>
            </div>
            <div class="flex items-center gap-x-1 ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                <p class="text-xs text-gray-600">
                    Transmini Manual
                </p>
            </div>
          </li>
        </ul>

        <hr>

        <ul class="mt-2">
            <li class="flex">
                <p class="mr-auto text-gray-600 text-sm">Price</p>
                <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
            </li>
        </ul>

        <!-- Buttons -->
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="#">
            More Detail
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
        <!-- End Buttons -->
        
      </div>
      <!-- End Card -->

    </div>
    <!-- End Grid -->
    <!-- Grid -->
    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">

        <!-- Card -->
        <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
          <img src="{{ asset('img/exampleproduct.png') }}" alt="">
    
          <ul class="mt-7 space-y-2.5 text-sm mb-3">
            <li class="flex gap-x-2">
             <span class="text-gray-800 font-semibold">
                  VESPA SPRINT 2016
              </span>
            </li>
    
            <li class="flex gap-x-2 text-gray-600 text-xs">
              Dijual Motor Cash / Credit
            </li>
    
            <li class="flex gap-x-5">
              <div class="flex items-center gap-x-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                  <p class="text-xs text-gray-600">
                      2 Passagers
                  </p>
              </div>
              <div class="flex items-center gap-x-1 ml-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                  <p class="text-xs text-gray-600">
                      Transmini Manual
                  </p>
              </div>
            </li>
          </ul>
  
          <hr>
  
          <ul class="mt-2">
              <li class="flex">
                  <p class="mr-auto text-gray-600 text-sm">Price</p>
                  <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
              </li>
          </ul>
  
          <!-- Buttons -->
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="{{ route('product-detail') }}">
              More Detail
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
          <!-- End Buttons -->
          
        </div>
        <!-- End Card -->
  
        <!-- Card -->
        <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
          <img src="{{ asset('img/exampleproduct.png') }}" alt="">
    
          <ul class="mt-7 space-y-2.5 text-sm mb-3">
            <li class="flex gap-x-2">
             <span class="text-gray-800 font-semibold">
                  VESPA SPRINT 2016
              </span>
            </li>
    
            <li class="flex gap-x-2 text-gray-600 text-xs">
              Dijual Motor Cash / Credit
            </li>
    
            <li class="flex gap-x-5">
              <div class="flex items-center gap-x-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                  <p class="text-xs text-gray-600">
                      2 Passagers
                  </p>
              </div>
              <div class="flex items-center gap-x-1 ml-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                  <p class="text-xs text-gray-600">
                      Transmini Manual
                  </p>
              </div>
            </li>
          </ul>
  
          <hr>
  
          <ul class="mt-2">
              <li class="flex">
                  <p class="mr-auto text-gray-600 text-sm">Price</p>
                  <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
              </li>
          </ul>
  
          <!-- Buttons -->
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="#">
              More Detail
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
          <!-- End Buttons -->
          
        </div>
        <!-- End Card -->
  
        <!-- Card -->
        <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
          <img src="{{ asset('img/exampleproduct.png') }}" alt="">
    
          <ul class="mt-7 space-y-2.5 text-sm mb-3">
            <li class="flex gap-x-2">
             <span class="text-gray-800 font-semibold">
                  VESPA SPRINT 2016
              </span>
            </li>
    
            <li class="flex gap-x-2 text-gray-600 text-xs">
              Dijual Motor Cash / Credit
            </li>
    
            <li class="flex gap-x-5">
              <div class="flex items-center gap-x-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                  <p class="text-xs text-gray-600">
                      2 Passagers
                  </p>
              </div>
              <div class="flex items-center gap-x-1 ml-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                  <p class="text-xs text-gray-600">
                      Transmini Manual
                  </p>
              </div>
            </li>
          </ul>
  
          <hr>
  
          <ul class="mt-2">
              <li class="flex">
                  <p class="mr-auto text-gray-600 text-sm">Price</p>
                  <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
              </li>
          </ul>
  
          <!-- Buttons -->
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="#">
              More Detail
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
          <!-- End Buttons -->
          
        </div>
        <!-- End Card -->
  
        <!-- Card -->
        <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
          <img src="{{ asset('img/exampleproduct.png') }}" alt="">
    
          <ul class="mt-7 space-y-2.5 text-sm mb-3">
            <li class="flex gap-x-2">
             <span class="text-gray-800 font-semibold">
                  VESPA SPRINT 2016
              </span>
            </li>
    
            <li class="flex gap-x-2 text-gray-600 text-xs">
              Dijual Motor Cash / Credit
            </li>
    
            <li class="flex gap-x-5">
              <div class="flex items-center gap-x-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user text-gray-600"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg> 
                  <p class="text-xs text-gray-600">
                      2 Passagers
                  </p>
              </div>
              <div class="flex items-center gap-x-1 ml-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
                  <p class="text-xs text-gray-600">
                      Transmini Manual
                  </p>
              </div>
            </li>
          </ul>
  
          <hr>
  
          <ul class="mt-2">
              <li class="flex">
                  <p class="mr-auto text-gray-600 text-sm">Price</p>
                  <p class="ml-auto text-gray-800 text-base">Rp. 18.000.000</p>
              </li>
          </ul>
  
          <!-- Buttons -->
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="#">
              More Detail
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
          <!-- End Buttons -->
          
        </div>
        <!-- End Card -->
  
      </div>
      <!-- End Grid -->
  
  </div>
  <!-- End Pricing -->
    </main>
    <footer>
        @include('public.layout.partials.footer')
    </footer>
</body>

</html>

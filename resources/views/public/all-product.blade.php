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
            <p class="text-gray-400"> <a href="">Produk / </a> 
                <span class="text-red-600 font-medium text-base text-lg">Semua Produk</span> 
            </p>
        </div>
    </div>
    <main>
        <!-- Pricing -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto" id="product">
    <!-- Title -->
    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
      <h2 class="text-2xl font-bold md:text-4xl md:leading-tight mb-10">Produk</h2>
    </div>
    <!-- End Title -->
    <!-- Grid -->
    <div class="mt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:items-center">
      @foreach($product as $p)
      <!-- Card -->
      <div class="flex flex-col border border-gray-200 text-center rounded-xl p-8">
        <div class="flex justify-center mt-4">
          <img class="w-[160px] h-[110px] object-cover" src="{{ asset('img/product/' . $p->gambar1) }}" alt="{{ $p->title }}">
        </div>

        <ul class="mt-7 space-y-2.5 text-sm mb-3">
          <li class="flex gap-x-2">
            <span class="text-gray-800 font-semibold">
              {{ $p->title }}
            </span>
          </li>

          <li class="flex gap-x-2 text-gray-600 text-xs">
            Dijual Motor Cash / Credit
          </li>

          <li class="flex gap-x-5">
            <div class="flex items-center gap-x-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4"/><path d="M12 8h.01"/></svg>
               <p class="text-xs text-gray-600 uppercase">
                 {{ $p->status }} 
              </p>
          </div>
            <div class="flex items-center gap-x-1 ml-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-git-pull-request-draft text-gray-600"><circle cx="18" cy="18" r="3"/><circle cx="6" cy="6" r="3"/><path d="M18 6V5"/><path d="M18 11v-1"/><line x1="6" x2="6" y1="9" y2="21"/></svg>
              <p class="text-xs text-gray-600">
                {{ $p->transmision }}
              </p>
            </div>
          </li>
        </ul>

        <hr>

        <ul class="mt-2">
          <li class="flex">
            <p class="mr-auto text-gray-600 text-sm">Harga</p>
            <p class="ml-auto text-gray-800 text-base">Rp. {{ number_format($p->price, 0, ',', '.') }}</p>
          </li>
        </ul>

        <!-- Buttons -->
        <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none mt-4" href="{{ route('product-detail', $p->id) }}">
          Lihat lebih detail 
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
        <!-- End Buttons -->
      </div>
      <!-- End Card -->
      @endforeach
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

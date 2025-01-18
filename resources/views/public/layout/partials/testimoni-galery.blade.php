<section class="mb-32 py-10" id="testimoni">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16 text-center">
            <h2 class="text-4xl font-bold text-gray-800">Pelanggan Kami yang Puas!</h2>
            <span class="text-md text-gray-500 font-medium block mt-4">Galeri Testimoni</span>
        </div>

        <!-- Slider -->
        <div data-hs-carousel='{
          "loadingClasses": "opacity-0",
          "isAutoPlay": true,
          "dotsItemClasses": "hs-carousel-active:bg-red-700 hs-carousel-active:border-red-700 size-3 border border-gray-400 rounded-full cursor-pointer",
          "slidesQty": {
            "xs": 1,
            "lg": 3
          }
        }' class="relative">
          <div class="hs-carousel w-full overflow-hidden bg-white rounded-lg">
            <div class="relative min-h-72 -mx-1">
              <!-- transition-transform duration-700 -->
              <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 transition-transform duration-700 z-0">
                @foreach ($galery as $g)
                  
                <!-- Testimonial 1 -->
                <div class="hs-carousel-slide px-1">
                    <div class="z-1 group bg-white border border-solid border-gray-300 rounded-xl p-6 transition-all duration-500 hover:border-amber-500 hover:shadow-sm flex-shrink-0 w-full h-full">
                      <div>
                        <img src="{{ asset('img/galeri/'.$g->image) }}" alt="">
                      </div>
                          
                    </div>
                  </div>

                @endforeach
              </div>
            </div>
          </div>
          <div class="hs-carousel-pagination flex justify-center mt-8 start-0 end-0 space-x-2 "></div>
        </div>
        <!-- End Slider -->
    </div>
</section>
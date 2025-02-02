<section class="mb-32 py-10" id="testimoni">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-16 text-center">
            <h2 class="text-4xl font-bold text-gray-800">What our happy user says!</h2>
            <span class="text-md text-gray-500 font-medium block mt-4">TESTIMONIAL</span>
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
              <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 transition-transform duration-700">
                @foreach ($testimoni as $t)
                  
                <!-- Testimonial 1 -->
                <div class="hs-carousel-slide px-1">
                    <div class="group bg-white border border-solid border-gray-300 rounded-xl p-6 transition-all duration-500 hover:border-amber-500 hover:shadow-sm flex-shrink-0 w-full h-full">
                      <div class="">
                          <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500 justify-center">
                              <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z" fill="currentColor"/>
                              </svg>
                              <span class="text-base font-semibold text-amber-500">{{ $t->star }}</span>
                          </div>
                          <p class="text-base text-gray-600 leading-6 transition-all duration-500 pb-8 group-hover:text-gray-800">
                             {{$t->review}}
                          </p>
                      </div>
                      <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
                          <img class="rounded-full h-10 w-10 object-cover" src="{{ asset('img/testimoni/'. $t->image) }}" alt="avatar" />
                          <div class="block">
                              <h5 class="text-gray-900 font-medium transition-all duration-500 mb-1">{{ $t->name }}</h5>
                          </div>
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
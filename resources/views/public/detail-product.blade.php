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
                <span class="text-red-600 font-medium text-base text-lg">Scoopy ESP 2019</span>
            </p>
        </div>
    </div>
    <main>
        <!-- Features -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            </p>
            <!-- Grid -->
            <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
                <div>
                    <!-- Slider -->
                    <div data-hs-carousel='{
                        "loadingClasses": "opacity-0"
                    }'
                        class="relative">
                        <div class="hs-carousel relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                            <!-- Carousel Content -->
                            <div
                                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                                <div class="hs-carousel-slide">
                                    <div class="flex justify-center h-full  p-2">
                                        <img class=" self-center transition duration-700 object-cover" src="https://imgcdn.oto.com/large/gallery/color/73/985/honda-scoopy-esp-color-279822.jpg">
                                    </div>
                                </div>
                                <div class="hs-carousel-slide">
                                    <div class="flex justify-center h-full p-2">
                                        <img class="self-center transition duration-700 object-cover" src="https://imgcdn.oto.com/large/gallery/color/73/985/honda-scoopy-esp-color-123949.jpg">
                                    </div>
                                </div>
                                <div class="hs-carousel-slide">
                                    <div class="flex justify-center h-full  p-2">
                                        <img class="self-center transition duration-700 object-cover"
                                            src="https://imgcdn.oto.com/large/gallery/color/73/985/honda-scoopy-esp-color-768616.jpg">
                                    </div>
                                </div>
                            </div>
                            <!-- End Carousel Content -->

                            <!--Button-->
                            <button type="button"
                                class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg ">
                                <span class="text-2xl" aria-hidden="true">
                                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6"></path>
                                    </svg>
                                </span>
                                <span class="sr-only">Previous</span>
                            </button>
                            <button type="button"
                                class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg">
                                <span class="sr-only">Next</span>
                                <span class="text-2xl" aria-hidden="true">
                                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>
                                </span>
                            </button>
                            <!--Butoon ENd-->

                        </div>
                        <!-- Pagination Content -->
                        <div class="hs-carousel-pagination px-4 w-full hidden lg:flex justify-center">
                            <div class="flex flex-row items-center gap-x-2 px-2">
                                <div
                                    class="hs-carousel-pagination-item shrink-0 border rounded-md overflow-hidden cursor-pointer w-[150px] h-[100px] hs-carousel-active:border-red-400">
                                    <div class="flex justify-center h-full bg-gray-100">
                                        <img class="self-center transition duration-700 object-cover"
                                            src="https://imgcdn.oto.com/large/gallery/color/73/985/honda-scoopy-esp-color-279822.jpg">
                                    </div>
                                </div>
                                <div
                                    class="hs-carousel-pagination-item shrink-0 border rounded-md overflow-hidden cursor-pointer w-[150px] h-[100px]  hs-carousel-active:border-red-400">
                                    <div class="flex justify-center h-full bg-gray-200">
                                        <img class="self-center transition duration-700 object-cover"
                                            src="https://imgcdn.oto.com/large/gallery/color/73/985/honda-scoopy-esp-color-123949.jpg">
                                    </div>
                                </div>
                                <div
                                    class="hs-carousel-pagination-item shrink-0 border rounded-md overflow-hidden cursor-pointer w-[150px] h-[100px] hs-carousel-active:border-red-400">
                                    <div class="flex justify-center h-full">
                                        <img class="self-center transition duration-700 object-cover"
                                            src="https://imgcdn.oto.com/large/gallery/color/73/985/honda-scoopy-esp-color-768616.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Pagination Content -->
                    </div>
                    <!-- End Slider -->
                </div>
                <!-- End Col -->


                <div class="mt-5 sm:mt-10 lg:mt-0">
                    <div class="space-y-6 sm:space-y-8">
                        <!-- Title -->
                        <div class="space-y-2 md:space-y-4">
                            <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                                Scoopy ESP 2019
                            </h2>
                            <h3 class="font-bold text-2xl lg:text-3xl text-red-600">
                                Rp. 17.000.000
                            </h3>
                            <p class="text-gray-500">
                                Dijual motor siap pakai Cash/credit Honda scoopy ESP Tahun 2019
                            </p>
                            <p class="text-gray-500">
                                KONDISI
                            </p>
                            <!-- List -->
                            <ul class="space-y-2 sm:space-y-4 text-sm sm:text-base text-gray-500">
                                <li>body mulus halus</li>
                                <li>mesin joss terawat, sudah service &
                                    Ganti oli</li>
                                <li>kelistrikan hidup atas bawah</li>
                                <li>Surat BPKB ready & pajak hidup</li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <!-- End Title -->


                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Features -->
    </main>
    <footer>
        @include('public.layout.partials.footer')
    </footer>
</body>
{{-- <div class="hs-carousel-pagination absolute bottom-3 start-0 w-full overflow-x-auto mt-36">÷ --}}


</html>

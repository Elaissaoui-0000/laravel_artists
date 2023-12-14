@extends('layouts.app')
@section('content')
@push('style')    
<style>
  .imgOpacity:hover {
    opacity: 0.5; /* Adjust the value as needed */
  }
  .wow:hover .opacity-0 {
    opacity: 1;
    visibility: visible;
  }
</style>
@endpush


    <!-- ====== Banner Section Start -->
        <div class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] dark:bg-dark">
            <div
            class="w-full h-px bg-gradient-to-r from-stroke/0 via-stroke dark:via-dark-3 to-stroke/0 absolute left-0 bottom-0">
            </div>
            <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                <div class="text-center">
                    <h1 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                    Contact Page</h1>
                    <p class="mb-5 text-base text-body-color dark:text-dark-6">
                    There are many variations of passages of Lorem Ipsum available.
                    </p>

                    <ul class="flex items-center justify-center gap-[10px]">
                    <li>
                        <a href="index.html"
                        class="flex items-center gap-[10px] text-base font-medium text-dark dark:text-white">
                        Home
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="flex items-center gap-[10px] text-base font-medium text-body-color">
                        <span class="text-body-color dark:text-dark-6"> / </span>
                        Contact us
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
    <!-- ====== Banner Section End -->

    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark">
        <div class="container mx-auto">
          <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
              <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                <span class="block mb-2 text-lg font-semibold text-primary">
                  Art
                </span>
                <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                  Recent News
                </h2>
              </div>
            </div>
          </div>
          <div class="flex flex-wrap -mx-4">
            @foreach ($arts as $art)
              <x-art.card :art="$art" />
            @endforeach
          </div>
        </div>
      </section>
@endsection
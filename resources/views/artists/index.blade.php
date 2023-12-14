@extends('layouts.app')
@section('content')
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
    <section id="team" class="bg-gray-1 dark:bg-dark-2 overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
              <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                <h2 class="mb-3 text-3xl leading-[1.2] font-bold text-dark dark:text-white sm:text-4xl md:text-[40px]">
                    Team Members                
                </h2>
              </div>
            </div>
          </div>
          <div class="-mx-4 flex flex-wrap justify-center">
            @foreach ($users as $user)
                <x-artists.card :user="$user"/>
            @endforeach
          </div>
        </div>
      </section>
@endsection
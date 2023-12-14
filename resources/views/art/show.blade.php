@extends('layouts.app')
@section('content')
@push('style')
    <style>
              .modal{
                position: fixed;
                display: block;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -ms-flex-pack: center;
                justify-content: center;
                margin: 0 auto;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 100;
                overflow-x: hidden;
                background-color: rgba(31,32,41,.75);
                pointer-events: none;
                opacity: 0;
                transition: opacity 250ms 700ms ease;
              }
              .modal-btn ~ .modal{
                pointer-events: auto;
                opacity: 1;
                transition: all 300ms ease-in-out;
              }
              .modal-wrap {
                position: relative;
                display: block;
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
                margin-top: 20px;
                margin-bottom: 20px;
                border-radius: 4px;
                overflow: hidden;
                padding-bottom: 20px;
                background-color: #fff;
                  -ms-flex-item-align: center;
                  align-self: center;
                  box-shadow: 0 12px 25px 0 rgba(199,175,189,.25);
                opacity: 0;
                transform: scale(0.6);
                transition: opacity 250ms 250ms ease, transform 300ms 250ms ease;
              }
              .modal-wrap p {
                padding: 20px 30px 0 30px;
              }
              .modal-btn ~ .modal .modal-wrap{
                opacity: 1;
                transform: scale(1);
                transition: opacity 250ms 500ms ease, transform 350ms 500ms ease;
              }
              @media screen and (max-width: 500px) {
                .modal-wrap {
                  width: calc(100% - 40px);
                  padding-bottom: 15px;
                }
                .modal-wrap p {
                  padding: 15px 20px 0 20px;
                }
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
              Blog Details</h1>
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
                  Blog Details
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ====== Banner Section End -->

  <!-- ====== Blog Details Section Start -->
  <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 dark:bg-dark">
    <div class="container">
      <div class="-mx-4 flex flex-wrap justify-center">
        <div class="w-full px-4">
            <div class="wow fadeInUp relative z-20 mb-[50px] h-[300px] overflow-hidden rounded-[5px] md:h-[400px] lg:h-[500px]" data-wow-delay=".1s">
              <img src="{{ asset("Art Images/$art->img") }}" alt="image"
                class="h-full w-full object-cover object-center" />
              <div
                class="absolute top-0 left-0 z-10 flex h-full w-full items-end bg-gradient-to-t from-dark-700 to-transparent">
                <div class="flex flex-wrap items-center p-4 pb-4 sm:px-8">
                  <div class="mb-4 mr-5 flex items-center md:mr-10">
                    <div class="mr-4 h-10 w-10 overflow-hidden rounded-full">
                      <a href="{{ route('profile', $user->id ) }}">
                        <img src="{{ $user->img ? asset("Profile Images/$user->img") : 'https://cdn.vox-cdn.com/thumbor/vXZVNs0NfakrDpnZI-wnuihPlp8=/0x0:1600x900/1400x933/filters:focal(672x322:928x578):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/71741860/Jujutsu_Kaisen_season_2_01.6.jpg' }}" alt="image" class="w-full" />
                      </a>
                    </div>
                    <p class="text-base font-medium text-white">
                      By
                      <a href="{{ route('profile', $user->id ) }}" class="text-white hover:opacity-70">
                        {{ $user->name }}
                      </a>
                    </p>
                  </div>
                  <div class="mb-4 flex items-center" x-data={isOpen:false}>
                    <p href="#" class="mr-5 flex items-center text-sm font-medium text-white md:mr-6">
                      <span class="mr-3">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                          class="fill-current">
                          <path
                            d="M13.9998 2.6499H12.6998V2.0999C12.6998 1.7999 12.4498 1.5249 12.1248 1.5249C11.7998 1.5249 11.5498 1.7749 11.5498 2.0999V2.6499H4.4248V2.0999C4.4248 1.7999 4.1748 1.5249 3.8498 1.5249C3.5248 1.5249 3.2748 1.7749 3.2748 2.0999V2.6499H1.9998C1.1498 2.6499 0.424805 3.3499 0.424805 4.2249V12.9249C0.424805 13.7749 1.1248 14.4999 1.9998 14.4999H13.9998C14.8498 14.4999 15.5748 13.7999 15.5748 12.9249V4.1999C15.5748 3.3499 14.8498 2.6499 13.9998 2.6499ZM1.5748 7.2999H3.6998V9.7749H1.5748V7.2999ZM4.8248 7.2999H7.4498V9.7749H4.8248V7.2999ZM7.4498 10.8999V13.3499H4.8248V10.8999H7.4498V10.8999ZM8.5748 10.8999H11.1998V13.3499H8.5748V10.8999ZM8.5748 9.7749V7.2999H11.1998V9.7749H8.5748ZM12.2998 7.2999H14.4248V9.7749H12.2998V7.2999ZM1.9998 3.7749H3.2998V4.2999C3.2998 4.5999 3.5498 4.8749 3.8748 4.8749C4.1998 4.8749 4.4498 4.6249 4.4498 4.2999V3.7749H11.5998V4.2999C11.5998 4.5999 11.8498 4.8749 12.1748 4.8749C12.4998 4.8749 12.7498 4.6249 12.7498 4.2999V3.7749H13.9998C14.2498 3.7749 14.4498 3.9749 14.4498 4.2249V6.1749H1.5748V4.2249C1.5748 3.9749 1.7498 3.7749 1.9998 3.7749ZM1.5748 12.8999V10.8749H3.6998V13.3249H1.9998C1.7498 13.3499 1.5748 13.1499 1.5748 12.8999ZM13.9998 13.3499H12.2998V10.8999H14.4248V12.9249C14.4498 13.1499 14.2498 13.3499 13.9998 13.3499Z" />
                        </svg>
                      </span>
                      {{ $art->created_at->format('M d, Y') }}
                    </p>
                    <a href="{{ route("art.edit", $art->id) }}" class="mr-5 px-5 py-1 text-xl font-medium leading-loose text-center text-white rounded-[5px] bg-primary md:mr-6">
                      Edit
                    </a>
                    {{-- <div class="section full-height">
                        <input class="modal-btn" type="checkbox" hidden id="modal-btn" name="modal-btn"/>
                        <div x-show="isOpen" class="modal">		
                          <div class="modal-wrap">	
                            <form method="POST" action="{{ route("art.update" , $art->id) }}" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                              <input type="text" name="title" autocomplete="title">
                              <input type="text" name="description" autocomplete="description">
                              <input type="file" name="image">
                              <button type="submit">save</button>
                            </form>
                            <button @click="isOpen=false">X</button>     		
                          </div>			          		
                        </div>
                    </div> --}}
                    <form action="{{ route('art.delete', $art->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="mr-5 px-5 py-1 text-xl font-medium leading-loose text-center text-white rounded-[5px] md:mr-6" style="background: red">
                        Delete
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
              <div class="w-full px-4 lg:w-8/12">
                <div>
                  <h2 class="wow fadeInUp mb-8 text-2xl font-bold text-dark dark:text-white sm:text-3xl md:text-[35px] md:leading-[1.28]"
                    data-wow-delay=".1s
                      ">
                    {{ $art->title }}
                  </h2>
                  <p class="wow fadeInUp mb-6 text-base text-body-color dark:text-dark-6" data-wow-delay=".1s">
                    {{ $art->desc }}
                  </p>
                  <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-[5px] bg-primary/5 py-8 px-6 text-center sm:p-10 md:px-[60px]" data-wow-delay=".1s">
                    <div class="mx-auto max-w-[530px]">
                      <span class="mb-[14px] flex justify-center text-primary">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg"
                          class="fill-current">
                          <path
                            d="M13.7995 35.5781C12.937 35.5781 12.1464 35.075 11.8589 34.2844L9.48702 28.5344C6.82765 28.1031 4.45577 26.7375 2.9464 24.6531C1.36515 22.5687 0.862021 19.9812 1.5089 17.4656C2.51515 13.3687 6.75577 10.2781 11.4276 10.35C14.7339 10.4219 17.4651 11.7875 19.262 14.2312C20.987 16.675 21.4183 19.9812 20.412 23C19.4776 25.7312 18.2558 28.4625 17.1058 31.1219C16.6745 32.2 16.1714 33.2781 15.7401 34.2844C15.4526 35.075 14.662 35.5781 13.7995 35.5781ZM11.2839 13.5844C8.1214 13.5844 5.2464 15.5969 4.59952 18.2562C4.24015 19.8375 4.52765 21.4187 5.5339 22.7125C6.6839 24.2937 8.62452 25.3 10.7089 25.4437L11.7151 25.5156L13.7995 30.5469C13.8714 30.3312 14.0151 30.0437 14.087 29.8281C15.237 27.2406 16.387 24.5812 17.2495 21.9219C17.9683 19.9094 17.6808 17.6812 16.5308 16.1C15.3808 14.5187 13.5839 13.6562 11.3558 13.5844C11.3558 13.5844 11.3558 13.5844 11.2839 13.5844Z" />
                          <path
                            d="M37.5905 35.65C36.728 35.65 35.9374 35.1469 35.6499 34.3563L33.278 28.6063C30.6187 28.175 28.2468 26.8094 26.7374 24.725C25.1562 22.6406 24.653 20.0531 25.2999 17.5375C26.3062 13.4406 30.5468 10.35 35.2187 10.4219C38.5249 10.4938 41.2562 11.8594 42.9812 14.3031C44.7062 16.7469 45.1374 20.0531 44.1312 23.0719C43.1968 25.8031 41.9749 28.5344 40.8249 31.1938C40.3937 32.2719 39.8905 33.35 39.4593 34.3563C39.2437 35.1469 38.453 35.65 37.5905 35.65ZM35.0749 13.5844C31.9124 13.5844 29.0374 15.5969 28.3905 18.2563C28.0312 19.8375 28.3187 21.4188 29.3249 22.7844C30.4749 24.3656 32.4155 25.3719 34.4999 25.5156L35.5062 25.5875L37.5905 30.6188C37.6624 30.4031 37.8062 30.1156 37.878 29.9C39.028 27.3125 40.178 24.6531 41.0405 21.9938C41.7593 19.9813 41.4718 17.7531 40.3218 16.1C39.1718 14.5188 37.3749 13.6563 35.1468 13.5844C35.1468 13.5844 35.1468 13.5844 35.0749 13.5844Z" />
                        </svg>
                      </span>
                      <p class="mb-[18px] text-base italic leading-[28px] text-dark dark:text-white">
                        A spring of truth shall flow from it: like a new star it
                        shall scatter the darkness of ignorance, and cause a
                        light heretofore unknown to shine amongst men.
                      </p>
                      <span class="text-xs italic text-body-color dark:text-dark-6">
                        “Andrio Domeco”
                      </span>
                    </div>
                    <div>
                      <span class="absolute left-0 top-0">
                        <svg width="103" height="109" viewBox="0 0 103 109" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <ellipse cx="0.483916" cy="3.5" rx="102.075" ry="105.5" transform="rotate(180 0.483916 3.5)"
                            fill="url(#paint0_linear_2014_9016)" />
                          <defs>
                            <linearGradient id="paint0_linear_2014_9016" x1="-101.591" y1="-50.4346" x2="49.1618"
                              y2="-49.6518" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#3056D3" stop-opacity="0.15" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                      <span class="absolute bottom-0 right-0">
                        <svg width="102" height="106" viewBox="0 0 102 106" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <ellipse cx="102.484" cy="105.5" rx="102.075" ry="105.5" fill="url(#paint0_linear_2014_9017)" />
                          <defs>
                            <linearGradient id="paint0_linear_2014_9017" x1="0.409163" y1="51.5654" x2="151.162"
                              y2="52.3482" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#3056D3" stop-opacity="0.15" />
                              <stop offset="1" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                          </defs>
                        </svg>
                      </span>
                    </div>
                  </div>
                  <div class="-mx-4 mb-12 flex flex-wrap items-center">
                    <div class="w-full px-4 md:w-1/2">
                      <div class="wow fadeInUp mb-8 flex flex-wrap items-center gap-3 md:mb-0" data-wow-delay=".1s">
                        <a href="javascript:void(0)"
                          class="block rounded-md bg-primary/[0.08] py-[5px] px-[14px] text-base text-dark dark:text-white hover:bg-primary hover:text-white">
                          Design
                        </a>
                        <a href="javascript:void(0)"
                          class="block rounded-md bg-primary/[0.08] py-[5px] px-[14px] text-base text-dark dark:text-white hover:bg-primary hover:text-white">
                          Development
                        </a>
                        <a href="javascript:void(0)"
                          class="block rounded-md bg-primary/[0.08] py-[5px] px-[14px] text-base text-dark dark:text-white hover:bg-primary hover:text-white">
                          Info
                        </a>
                      </div>
                    </div>
                    <div class="w-full px-4 md:w-1/2">
                      <div class="wow fadeInUp flex items-center md:justify-end" data-wow-delay=".1s">
                        <span class="mr-5 text-sm font-medium text-body-color dark:text-dark-6">
                          Share This Post
                        </span>
                        <div class="flex items-center gap-[10px]">
                          <a href="javascript:void(0)">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                                fill="#1877F2" />
                              <path
                                d="M17 15.5399V12.7518C17 11.6726 17.8954 10.7976 19 10.7976H21V7.86631L18.285 7.67682C15.9695 7.51522 14 9.30709 14 11.5753V15.5399H11V18.4712H14V24.3334H17V18.4712H20L21 15.5399H17Z"
                                fill="white" />
                            </svg>
                          </a>
                          <a href="javascript:void(0)">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                                fill="#55ACEE" />
                              <path
                                d="M24.2945 11.375C24.4059 11.2451 24.2607 11.0755 24.0958 11.1362C23.728 11.2719 23.3918 11.3614 22.8947 11.4166C23.5062 11.0761 23.7906 10.5895 24.0219 9.99339C24.0777 9.84961 23.9094 9.71915 23.7645 9.78783C23.1759 10.0669 22.5408 10.274 21.873 10.3963C21.2129 9.7421 20.272 9.33331 19.2312 9.33331C17.2325 9.33331 15.6117 10.8406 15.6117 12.6993C15.6117 12.9632 15.6441 13.2202 15.7051 13.4663C12.832 13.3324 10.2702 12.1034 8.49031 10.2188C8.36832 10.0897 8.14696 10.1068 8.071 10.2643C7.86837 10.6846 7.7554 11.1509 7.7554 11.6418C7.7554 12.8093 8.39417 13.8395 9.36518 14.4431C8.92981 14.4301 8.51344 14.3452 8.12974 14.2013C7.94292 14.1312 7.72877 14.2543 7.75387 14.4427C7.94657 15.8893 9.11775 17.0827 10.6295 17.3647C10.3259 17.442 10.0061 17.483 9.67537 17.483C9.59517 17.483 9.51567 17.4805 9.43688 17.4756C9.23641 17.4632 9.07347 17.6426 9.15942 17.8141C9.72652 18.946 10.951 19.7361 12.376 19.7607C11.1374 20.6637 9.57687 21.2017 7.88109 21.2017C7.672 21.2017 7.5823 21.4706 7.7678 21.5617C9.20049 22.266 10.832 22.6666 12.5656 22.6666C19.2231 22.6666 22.8631 17.5377 22.8631 13.0896C22.8631 12.944 22.8594 12.7984 22.8528 12.6542C23.3932 12.2911 23.8789 11.8595 24.2945 11.375Z"
                                fill="white" />
                            </svg>
                          </a>
                          <a href="javascript:void(0)">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z"
                                fill="#007AB9" />
                              <path
                                d="M11.7836 10.1666C11.7833 10.8452 11.3716 11.4559 10.7426 11.7106C10.1137 11.9654 9.39306 11.8134 8.92059 11.3263C8.44811 10.8392 8.31813 10.1143 8.59192 9.49341C8.86572 8.87251 9.48862 8.4796 10.1669 8.49996C11.0678 8.527 11.784 9.26533 11.7836 10.1666ZM11.8336 13.0666H8.50024V23.4999H11.8336V13.0666ZM17.1003 13.0666H13.7836V23.4999H17.0669V18.0249C17.0669 14.9749 21.0419 14.6916 21.0419 18.0249V23.4999H24.3336V16.8916C24.3336 11.75 18.4503 11.9416 17.0669 14.4666L17.1003 13.0666Z"
                                fill="white" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full px-4 lg:w-4/12">
                <div>
                    <div
                      class="wow fadeInUp relative mb-12 overflow-hidden rounded-[5px] bg-primary py-[60px] px-11 text-center lg:px-8"
                      data-wow-delay=".1s
                        ">
                      <h3 class="mb-[6px] text-[28px] leading-[40px] font-semibold text-white">
                        Join our newsletter!
                      </h3>
                      <p class="mb-5 text-base text-white">
                        Enter your email to receive our latest newsletter.
                      </p>
                      <form>
                        <input type="email" placeholder="Your email address"
                          class="mb-4 h-[50px] w-full rounded-md border border-transparent bg-white/10 text-center text-base text-white placeholder:text-white/60 outline-none focus:border-white focus-visible:shadow-none" />
                        <input type="submit" value="Subscribe Now"
                          class="mb-4 h-[50px] w-full cursor-pointer rounded-md bg-secondary text-center text-sm font-medium text-white transition duration-300 ease-in-out hover:bg-opacity-90 hover:bg-[#0BB489]" />
                      </form>
                      <p class="text-sm font-medium text-white">
                        Don't worry, we don't spam
                      </p>

                      <div>
                        <span class="absolute top-0 right-0">
                          <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="1.39737" cy="44.6026" r="1.39737" transform="rotate(-90 1.39737 44.6026)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="1.39737" cy="7.9913" r="1.39737" transform="rotate(-90 1.39737 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="13.6943" cy="44.6026" r="1.39737" transform="rotate(-90 13.6943 44.6026)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="13.6943" cy="7.9913" r="1.39737" transform="rotate(-90 13.6943 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="25.9911" cy="44.6026" r="1.39737" transform="rotate(-90 25.9911 44.6026)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="25.9911" cy="7.9913" r="1.39737" transform="rotate(-90 25.9911 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="38.288" cy="44.6026" r="1.39737" transform="rotate(-90 38.288 44.6026)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="38.288" cy="7.9913" r="1.39737" transform="rotate(-90 38.288 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="1.39737" cy="32.3058" r="1.39737" transform="rotate(-90 1.39737 32.3058)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="13.6943" cy="32.3058" r="1.39737" transform="rotate(-90 13.6943 32.3058)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="25.9911" cy="32.3058" r="1.39737" transform="rotate(-90 25.9911 32.3058)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="38.288" cy="32.3058" r="1.39737" transform="rotate(-90 38.288 32.3058)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="1.39737" cy="20.0086" r="1.39737" transform="rotate(-90 1.39737 20.0086)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="13.6943" cy="20.0086" r="1.39737" transform="rotate(-90 13.6943 20.0086)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="25.9911" cy="20.0086" r="1.39737" transform="rotate(-90 25.9911 20.0086)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="38.288" cy="20.0086" r="1.39737" transform="rotate(-90 38.288 20.0086)" fill="white"
                              fill-opacity="0.44" />
                          </svg>
                        </span>
                        <span class="absolute bottom-0 left-0">
                          <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="1.39737" cy="44.6026" r="1.39737" transform="rotate(-90 1.39737 44.6026)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="1.39737" cy="7.9913" r="1.39737" transform="rotate(-90 1.39737 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="13.6943" cy="44.6026" r="1.39737" transform="rotate(-90 13.6943 44.6026)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="13.6943" cy="7.9913" r="1.39737" transform="rotate(-90 13.6943 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="25.9911" cy="44.6026" r="1.39737" transform="rotate(-90 25.9911 44.6026)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="25.9911" cy="7.9913" r="1.39737" transform="rotate(-90 25.9911 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="38.288" cy="44.6026" r="1.39737" transform="rotate(-90 38.288 44.6026)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="38.288" cy="7.9913" r="1.39737" transform="rotate(-90 38.288 7.9913)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="1.39737" cy="32.3058" r="1.39737" transform="rotate(-90 1.39737 32.3058)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="13.6943" cy="32.3058" r="1.39737" transform="rotate(-90 13.6943 32.3058)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="25.9911" cy="32.3058" r="1.39737" transform="rotate(-90 25.9911 32.3058)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="38.288" cy="32.3058" r="1.39737" transform="rotate(-90 38.288 32.3058)" fill="white"
                              fill-opacity="0.44" />
                            <circle cx="1.39737" cy="20.0086" r="1.39737" transform="rotate(-90 1.39737 20.0086)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="13.6943" cy="20.0086" r="1.39737" transform="rotate(-90 13.6943 20.0086)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="25.9911" cy="20.0086" r="1.39737" transform="rotate(-90 25.9911 20.0086)"
                              fill="white" fill-opacity="0.44" />
                            <circle cx="38.288" cy="20.0086" r="1.39737" transform="rotate(-90 38.288 20.0086)" fill="white"
                              fill-opacity="0.44" />
                          </svg>
                        </span>
                      </div>
                    </div>
                    <div class="-mx-4 mb-8 flex flex-wrap">
                      <div class="w-full px-4">
                        <h2 class="wow fadeInUp relative pb-5 text-2xl font-semibold text-dark dark:text-white sm:text-[28px]"
                          data-wow-delay=".1s
                            ">
                          Popular Articles
                        </h2>
                        <span class="mb-10 inline-block h-[2px] w-20 bg-primary"></span>
                      </div>
                      @foreach ($arts as $item)
                        @if ($loop->index < 4)
                          <div class="w-full px-4 md:w-1/2 lg:w-full">
                            <div class="wow fadeInUp mb-5 flex w-full items-center border-b border-stroke dark:border-dark-3 pb-5" data-wow-delay=".1s">
                              <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded-full">
                                <a href=" {{ route('art.show', $item->id) }}">
                                  <img src="{{ asset("Art Images/$item->img") }}" alt="image" class="w-full" />
                                </a>
                              </div>
                              <div class="w-full">
                                <h4>
                                  <a href="{{ route('art.show', $item->id) }}"
                                    class="mb-1 inline-block truncut text-lg font-medium leading-snug text-dark dark:text-dark-6 hover:text-primary dark:hover:text-primary lg:text-base xl:text-lg">
                                    {{ $item->title }}
                                  </a>
                                </h4>
                                <p class="text-sm truncut text-body-color dark:text-dark-6">{{ $item->desc }}</p>
                              </div>
                            </div>
                          </div>
                        @endif
                      @endforeach
                    </div>
                    <div class="wow fadeInUp mb-12 overflow-hidden rounded-[5px]" data-wow-delay=".1s">
                      <img src="assets/images/blog/bannder-ad.png" alt="image" class="w-full" />
                    </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="-mx-4 flex flex-wrap">
        <div class="wow fadeInUp mt-14 w-full px-4" data-wow-delay=".2s">
          <h2 class="relative pb-5 text-2xl font-semibold text-dark dark:text-white sm:text-[36px]">
            Related Articles
          </h2>
          <span class="mb-10 inline-block h-[2px] w-20 bg-primary"></span>
        </div>
        @foreach ($artByAuthor as $item)
          @if ($loop->index < 3)
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
              <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                <div class="mb-8 overflow-hidden rounded-[5px]">
                  <a href="{{ route('art.show', $item->id) }}" class="block">
                    <img src="{{ asset("Art Images/$item->img") }}" alt="image"
                      class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                  </a>
                </div>
                <div>
                  <span
                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                    {{ $item->created_at->format('M d, Y') }}
                  </span>
                  <h3>
                    <a href="{{ route('art.show', $item->id) }}"
                      class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                      {{ $item->title }}
                    </a>
                  </h3>
                  <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                    {{ $item->desc }}
                  </p>
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </section>
  <!-- ====== Blog Details Section End -->
@endsection
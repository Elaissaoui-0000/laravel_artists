<!doctype html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/tailwind.css') }}" />

    @livewireStyles
    @stack('style')

    <!-- ==== WOW JS ==== -->
    <script src="{{ url('assets/js/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
</head>
<body>

    <!-- ====== Navbar Section Start -->
    <x-navbar />
    <!-- ====== Navbar Section End -->

        @yield('content')    

        <!-- ====== Footer Section Start -->
    <x-footer />
    <!-- ====== Footer Section End -->

     <!-- ====== Back To Top Start -->
        <a href="javascript:void(0)"
        class="back-to-top fixed bottom-8 right-8 left-auto z-[999] hidden h-10 w-10 items-center justify-center rounded-md bg-primary text-white shadow-md transition duration-300 ease-in-out hover:bg-dark">
        <span class="mt-[6px] h-3 w-3 rotate-45 border-t border-l border-white"></span>
        </a>
    <!-- ====== Back To Top End -->

    <!-- ====== Made With Button Start -->
        <a target="_blank" rel="nofollow noopener"
        class="inline-flex items-center gap-[10px] py-2 px-[14px] rounded-lg bg-white dark:bg-dark-2 shadow-2 fixed bottom-8 left-4 sm:left-9 z-[999]"
        href="https://tailgrids.com/">
        <span class="text-base font-medium text-dark-3 dark:text-dark-6">
            Made with
        </span>
        <span class="w-px h-4 block bg-stroke dark:bg-dark-3"></span>
        <span class="block max-w-[88px] w-full">
            Elssw_dev
        </span>
        </a>
    <!-- ====== Made With Button End -->

    <script src="{{ url('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");
  
      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });
  
      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;
  
        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }
  
      window.document.addEventListener("scroll", onScroll);
  
      // Testimonial
      const testimonialSwiper = new Swiper('.testimonial-carousel', {
        slidesPerView: 1,
        spaceBetween: 30,
  
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
  
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>

    @stack('script')
    @livewireScripts
</body>
</html>

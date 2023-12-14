<div class="w-full px-4 md:w-1/2 lg:w-1/3">
  <div class="wow fadeInUp group mb-6 relative" data-wow-delay=".2s">
    <div class="mb-6 overflow-hidden rounded-[5px] relative">
      <a href="{{ route('art.show', $art->id) }}" class="block relative">
        <img src="{{ asset("Art Images/$art->img") }}" alt="image"
          class="w-full transition group-hover:rotate-6 group-hover:scale-125 imgOpacity" />
        <span class="absolute top-0 left-0 px-4 py-0.5 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary opacity-0 invisible transition-opacity">
          {{ $art->created_at->format('M d, Y') }} 
          <span class="font-semibold text-white text-[1px]">
            ({{ $art->created_at->diffForHumans() }})
          </span>
        </span>
        <span class="absolute top-0 right-0 px-4 py-0.5 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary opacity-0 invisible transition-opacity">
          author
        </span>
        <span
          class="absolute bottom-0 left-0 ml-2 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
          {{ $art->title }}
        </span>
      </a>
    </div>
  </div>
</div>


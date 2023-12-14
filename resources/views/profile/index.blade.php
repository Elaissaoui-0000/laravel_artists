@extends('layouts.app')
@section('content')

<section class="relative z-10 overflow-hidden pt-[120px] pb-[60px] md:pt-[130px] lg:pt-[160px] dark:bg-dark">
  <div class="container mx-auto">
    @if ($user->role == 1 && $user->id == auth()->id())
    <a href="{{ route('art.create') }}" class="px-5 py-2 mb-4 text-xl font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
      create
    </a>
  @endif
    <div class="w-full flex flex-wrap justify-center items-center">
      <div class="w-full flex justify-center items-center lg:w-2/5 text-center border">
        <div class="relative inline-block rounded-full overflow-hidden" style="margin: 12px">
          @if ($user->img)
          <img src="{{ asset("Profile Images/$user->img") }}" alt="Profile Image" class="w-[120px] h-[120px] object-cover">              
          @else
              <img src="https://cdn.vox-cdn.com/thumbor/vXZVNs0NfakrDpnZI-wnuihPlp8=/0x0:1600x900/1400x933/filters:focal(672x322:928x578):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/71741860/Jujutsu_Kaisen_season_2_01.6.jpg" alt="Profile Image" class="w-[120px] h-[120px] object-cover">                            
          @endif
        </div>
      </div>
      <div class="w-full lg:w-3/5 border rounded p-4 dark:bg-gray-800">
        <div class="flex items-center">
          <h2 class="xl:text-2xl text-lg font-bold mb-4 text-dark dark:text-white">{{ $user->name }}</h2>
          <button
              class="xl:px-4 py-0.5 mb-4 ml-2 px-2 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
              {{ $user->role == 1 ? 'artist' : 'user' }}
          </button>
          @if (auth()->id() == $user->id)
            <button class="xl:px-4 py-0.5 mb-4 ml-2 px-2 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                <a href="{{ route('profile.edit', $user->id) }}">Edit</a>
            </button>
          @endif
          @if (auth()->id() == $user->id)
            <a href="{{ route("profile.editSocial", $user->id) }}">
              <button class="xl:px-4 py-0.5 mb-4 ml-2 px-2 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                Add social
              </button>
            </a>
          @endif
        </div>
        <p class="text-base mb-4 text-body-color dark:text-dark-6">{{ $user->desc }}</p>
        <p class="text-sm mb-2 text-body-color dark:text-dark-6">
          <strong>Birthday:</strong> {{ $user->birth ? \Carbon\Carbon::parse($user->birth)->format('M d, Y') : "Null" }}
        </p>
        <p class="text-sm mb-2 text-body-color dark:text-dark-6">
          <strong>Joined:</strong> {{ $user->created_at->format('M d, Y') }} ({{ $user->created_at->diffForHumans() }})
        </p>
        <p class="text-sm mb-2 text-body-color dark:text-dark-6">
          <strong>Location:</strong> New York, USA
        </p>
        <p class="text-sm mb-2 text-body-color dark:text-dark-6">
          <strong>Email:</strong> {{ $user->email }}
        </p>
        <p class="text-sm mb-2 text-body-color dark:text-dark-6">
          <strong>Phone:</strong> +212 {{ $user->mobile ? $user->mobile : "Null" }}
        </p>
      </div>
    </div>
  </div>
</section>


<section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-white dark:bg-dark">
  <div class="container mx-auto">
    <div class="flex flex-wrap -mx-4">
        @foreach ($user->art as $art)
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
              <div class="wow fadeInUp group mb-10" data-wow-delay=".2s">
                <div class="mb-8 overflow-hidden rounded-[5px]">
                  <a href="{{ route("art.show", $art->id) }}" class="block">
                    <img src="{{ asset("Art Images/$art->img") }}" alt="image"
                      class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                  </a>
                </div>
                <div>
                  <span class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                    {{ $art->created_at->format('M d, Y') }} <span class="font-semibold text-white text-[1px]">({{ $art->created_at->diffForHumans() }})</span> 
                  </span>
                  <span
                      class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                      author
                  </span>
                  <h3>
                    <a href="{{ route("art.show", $art->id) }}" class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                        {{ $art->title }}
                    </a>
                  </h3>
                  <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                        {{ $art->desc }}
                  </p>
                </div>
              </div>
            </div>
        @endforeach
    </div>
  </div>
</section>
@endsection
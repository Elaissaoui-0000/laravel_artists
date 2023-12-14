@extends('layouts.actions')
@section('content')
    
<section class="py-14 lg:py-20">
    <div class="container">
       <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="wow relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-dark-2 py-14 px-8 text-center sm:px-12 md:px-[60px]">
                    <form method="POST" action="{{ route('profile.updateSocial', $social->id) }}">
                        @csrf
                        @method("PUT")

                        <div class="mb-[22px]">
                            <label for="instagrame" class=" flex justify-start">instagrame | old {{ $social->instagrame }}</label>
                            <input type="text"  name="instagrame" id="instagrame" value="{{ old('instagrame') }}"
                            class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('instagrame')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-[22px]">
                            <label for="twitter" class="flex justify-start">twitter | old {{ $social->twitter }}</label>
                            <input type="text" name="twitter" id="twitter" value="{{ old('twitter') }}"
                            class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('twitter')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-[22px]">
                            <label for="facebook" class="flex justify-start">facebook | old {{ $social->facebook }}</label>
                            <input type="text" name="facebook" id="facebook" value="{{ old('facebook') }}"
                            class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('facebook')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-9">
                            <button type="submit" class="border-primary w-full cursor-pointer rounded-md border bg-primary py-3 px-5 text-base text-white transition duration-300 ease-in-out hover:bg-blue-dark">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
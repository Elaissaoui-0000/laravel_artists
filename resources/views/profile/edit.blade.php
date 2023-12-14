@extends('layouts.actions')
@section('content')
    
<section class="py-14 lg:py-20">
    <div class="container">
       <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="wow relative mx-auto max-w-[525px] overflow-hidden rounded-lg bg-dark-2 py-14 px-8 text-center sm:px-12 md:px-[60px]">
                    <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")

                        <div class="mb-[22px]">
                            <input type="text" placeholder="name" name="name" value="{{ $user->name }}"
                            class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('name')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-[22px]">
                            <input type="text" placeholder="mobile" name="mobile" value="{{ $user->mobile }}"
                            class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('mobile')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-[22px]">
                            <input type="text" placeholder="description" name="description" value="{{ $user->desc }}"
                            class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('description')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-[22px]">
                            <input type="date" name="birthday" value="{{ $user->birth }}"
                            class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('birthday')
                                <span>
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-[22px]">
                            <input type="file" name="image" accept="png, jpg, jpeg, gif" class="border-dark-3 bg-transparent w-full rounded-md border py-3 px-5 text-base text-dark-6 placeholder:text-dark-6 outline-none transition focus:border-primary focus-visible:shadow-none" />
                            @error('image')
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
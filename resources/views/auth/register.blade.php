@extends('layouts.auth')
@section('title','register meet doctor')
@section('content')
    <div class="min-h-screen">
        <div class="grid lg:grid-cols-2">
            <!-- form -->
            <div class="px-4 lg:px-[91px] pt-10">
                    <a  href="{{ route('index') }}" class="flex-shrink-0 inline-flex items-center">
                        <img class="h-12 lg:h-16"  src="{{ asset('assets/frontsite/images/logo_copy.png') }}" alt="Meet Doctor Logo"/>
                    </a>
                    <div class="flex flex-col justify-center py-14 h-screen lg:min-h-screen">
                        <h2 class="text-[#1E2B4F] text-4xl font-semibold leading-normal">
                        Improve Your <br />
                        Health With Expert
                        </h2>
                
                    <div class="mt-12">
                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <!-- Form input -->
                            <form action="{{ route('register') }}" class="grid gap-6" method="post">
                                @csrf
                                <label class="block">
                                <input type="name" name="name" 
                                class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]" placeholder="Complete Name"
                                value="{{ old('name') }}" required autofocus
                                />
                                @if ($errors->has('name'))
                                    <p class="text-red-500 mb-3 text-sn">{{ $errors->first('name') }}</p>
                                @endif
                                </label>
                                <label class="block">
                                <input type="email" name="email" 
                                class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]" placeholder="Email Address"
                                value="{{ old('email') }}" required autofocus
                                />
                                @if ($errors->has('email'))
                                    <p class="text-red-500 mb-3 text-sn">{{ $errors->first('email') }}</p>
                                @endif
                                </label>

                                <label class="block">
                                <input
                                    type="password" name="password"
                                    class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                    value="{{ old('password') }}" placeholder="Password" required
                                />
                                @if ($errors->has('password'))
                                    <p class="text-red-500 mb-3 text-sn">{{ $errors->first('password') }}</p>
                                @endif
                                </label>
                                <label class="block">
                                <input
                                    type="password" name="password_confirmation"
                                    class="block w-full rounded-full py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                    value="{{ old('password_confirmation') }}" placeholder="Password_confirmation" required
                                />
                                @if ($errors->has('password_confirmation'))
                                    <p class="text-red-500 mb-3 text-sn">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                                </label>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-jet-label for="terms">
                                            <div class="flex items-center">
                                                <x-jet-checkbox name="terms" id="terms"/>

                                                <div class="ml-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-jet-label>
                                    </div>
                                @endif
                                
                                <div class="mt-10 grid gap-6">
                                <button type="submit" name="submit"
                                    class="text-center text-white text-lg font-medium bg-[#0D63F3] px-10 py-4 rounded-full"
                                >
                                Continue
                                </button>
                                
                            
                                <a
                                    href="{{ route('login') }}"
                                    class="text-center text-lg text-[#1E2B4F] font-medium bg-[#F2F6FE] px-10 py-4 rounded-full"
                                >
                                    Sign In
                                </a>
                                </div>
                            </form>
                    </div>  
                </div>
            </div>
            <!-- end form -->
            <!-- quote -->
            <div class="hidden sm:block bg-[#F9FBFC]">
                <div class="flex flex-col justify-center h-full px-24 pt-10 pb-20">
                    <div class="relative">
                        <div class="relative top-0 -left-5 mb-7">
                            <img
                            src="{{ asset('assets/frontsite/images/blockqoutation_copy.svg') }}"
                            class="h-[30px]"
                            alt=""
                            />
                        </div>
                        <p class="text-2xl leading-loose">
                            MeetDoctor telah membantu saya terhubung dengan dokter yang
                            professional dan memberikan dampak yang sangat besar kepada
                            kesehatan yang baik kepada saya
                        </p>
                        <div class="flex-shrink-0 group block mt-7">
                            <div class="flex items-center">
                                <div class="ring-1 ring-[#0D63F3] ring-offset-4 rounded-full">
                                    <img
                                    class="inline-block h-14 w-14 rounded-full"
                                    src="{{ asset('assets/frontsite/images/patient-testimonial_copy.png') }}"
                                    alt=""
                                    />
                                </div>
                                <div class="ml-5">
                                    <p class="font-medium text-[#1E2B4F]">Shayna</p>
                                    <p class="text-sm text-[#AFAEC3]">Product Designer</p>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            <!-- end quote -->
        </div>
    </div>

@endsection
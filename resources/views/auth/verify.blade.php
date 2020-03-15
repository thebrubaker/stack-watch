@extends('layouts.marketing')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex justify-center items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Verify Your Email Address
                </h3>
                <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                    @if (session('resent'))
                    <p class="text-green-600 mb-2" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </p>
                    @endif
                    <p>
                        Before proceeding, please check your email for a verification link. If you did not receive the
                        email,
                        click below to request another.
                    </p>
                </div>
                <div class="mt-3 text-sm leading-5">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit"
                            class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Send another verification request &rarr;
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
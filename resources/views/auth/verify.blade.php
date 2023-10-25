@extends('layouts.app')

@section('content')

<div id="exampleModal" class="modal show" style="display:block; padding-left:0px" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">{{ __('Verify Your Email Address') }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('We Sent Another Link to your E-mail!')}}
                  </div>


                @endif
            <p>{{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here for another request') }}</button>.
                    </form>
            </p>

            </div>
        </div>
        </div>
    </div>
</div>

<div class="modal-backdrop fade show" id="backdrop" style="display: block;"></div>


@endsection

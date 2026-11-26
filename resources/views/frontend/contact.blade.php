@extends('frontend.layouts.master')

@section('title', config('app.name'))
@section('keywords', config('app.name').")
@section('description', config('app.name').")
@section('body_menu')
@include('frontend.layouts.header')
@endsection
@section('body_content')
<section class="flat-spacing">
    <div class="container">
        <div class="contact-us-content">
            <div class="left">
                <h4>Get In Touch</h4>
                <p class="text-secondary-2">Use the form below to get in touch with the sales team</p>
                <form id="contactform" action="" method="post" class="form-leave-comment">
                    <div class="wrap">
                        <div class="cols">
                            <fieldset class="">
                                <input class="" type="text" placeholder="Your Name*" name="name" id="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="">
                                <input class="" type="email" placeholder="Your Email*" name="email" id="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <fieldset class="">
                            <textarea name="message" id="message" rows="4" placeholder="Your Message*" tabindex="2" aria-required="true" required=""></textarea>
                        </fieldset>
                    </div>
                    <div class="button-submit send-wrap">
                        <button class="tf-btn btn-fill" type="submit">
                            <span class="text text-button">Send message</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="right">
                <h4>Information</h4>
                <div class="mb_20">
                    <div class="text-title mb_8">Phone:</div>
                    <p class="text-secondary">+1 666 234 8888</p>
                </div>
                <div class="mb_20">
                    <div class="text-title mb_8">Email:</div>
                    <p class="text-secondary">themesflat@gmail.com</p>
                </div>
                <div class="mb_20">
                    <div class="text-title mb_8">Address:</div>
                    <p class="text-secondary">2163 Phillips Gap Rd, West Jefferson, North Carolina, United States</p>
                </div>
                <div>
                    <div class="text-title mb_8">Open Time:</div>
                    <p class="mb_4 open-time">
                        <span class="text-secondary">Mon - Sat:</span> 7:30am - 8:00pm PST
                    </p>
                    <p class="open-time">
                        <span class="text-secondary">Sunday:</span> 9:00am - 5:00pm PST
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('body_footer')
@include('frontend.layouts.footer')
@endsection
@section('contact-us-scripts')
<script type="text/javascript" src="{{ asset('asset/js/jquery-validate.js') }}"></script>
@endsection
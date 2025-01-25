@php
    $site = App\Models\Sites::find(1);
@endphp

<footer class="footer--area">
    <div class="footer--top pt-50 pb-25">
        <div class="footer-topbar">
            <p class="mb-0 text-center text-white p-3">Discover a wide range of products at {{ $site->site_name }}, your one-stop
                e-commerce destination. Enjoy seamless shopping, great deals, and excellent customer service.</p>
        </div>
        <div class="contaner-fluid footer-bg">
            <div class="container">
                <div class="row gx-0 pt-5">
                    <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div>
                            <a class="logo__link" href="{{ route('index') }}"><img class="" width="250px"
                                    src="{{ asset('upload/logo_black/' . $site->logo_black) }}" alt=""></a>

                            <p class="pt-3">{{ $site->site_slogan }}</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Inquery</h6>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="{{ route('template.one.about') }}">About Us</a></li>
                                    <li><a href="{{ route('template_one.contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('template.one.term') }}">Terms</a></li>

                                    @if (Auth::user())
                                        <li><a href="{{ route('template.one.dashboard') }}">DashBoard</a></li>
                                    @else
                                        <li><a href="{{ route('template.one.login') }}">Login</a></li>
                                    @endif



                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Social Platform</h6>
                            </div>
                            <div class="footer-menu h1foote-menu2">
                                <ul>
                                    <li><a href="{{ $site->facebook_url }}">Facebook</a></li>
                                    <li><a href="{{ $site->skype_url }}">Skype</a></li>
                                    <li><a href="{{ $site->youtube_url }}">Youtube</a></li>
                                    <li><a href="{{ $site->linkedin_url }}">Linkdin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-8 mb-30 order-md-3 order-lg-2">
                        <div class="footer-widget">
                            <div class="footer-title">
                                <h6 class="f-800">Connect With Us</h6>
                            </div>
                            <div>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous"
                                    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v19.0&appId=1071946983902795" nonce="2wAZemwC">
                                </script>

                                <div class="fb-wrap">
                                    <div class="fb-page" data-href="{{ $site->facebook_url }}"
                                        data-tabs="timeline" data-width="500" data-height="135"
                                        data-small-header="false" data-adapt-container-width="true"
                                        data-hide-cover="false" data-show-facepile="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom gray-bg pt-20 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright text-center">
                        <a class="m-0 text-center text-muted" href="{{ route('index') }}">
                            Copyright 2024
                            <span class="grenadier-color">{{ $site->site_name }}</span> All Rights
                            Reserved.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

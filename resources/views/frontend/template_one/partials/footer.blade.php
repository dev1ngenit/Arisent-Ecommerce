
<style>
    .footer-icons {
        font-size: 20px;
        padding-right: 10px;
        color: #252525;
        border: 1px solid #eee;
        text-align: center;
        padding: 8px;
        transition: color 0.3s ease;
    }

    .footer-icons:hover {
        color: #007bff;
    }

    .footer-menu li {
        padding-top: 5px;
        padding-bottom: 10px;
    }

    .footer-menu a {
        color: #252525;

    }

    .footer-bg {
        text-align: center;
    }
</style>

<footer class="footer-area">
    <div class="footer-top pt-50 pb-25">
        <div class="text-center footer-topbar">
            <p class="p-3 mb-0 text-white">
                Discover a wide range of products at {{ optional($site)->site_name }}, your one-stop e-commerce
                destination. Enjoy seamless shopping, great deals, and excellent customer service.
            </p>
        </div>
        <div class="container-fluid footer-bg">
            <div class="container">
                <div class="pt-5 row gx-0">
                    <!-- Logo and Social Links -->
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="footer-logo">
                            <a href="{{ route('index') }}" class="logo__link">
                                <img width="250px"
                                    src="{{ asset('upload/logo_black/' . optional($site)->logo_black) }}"
                                    alt="Logo">
                            </a>
                            <p class="pt-3">{{ optional($site)->site_slogan }}</p>

                        </div>
                    </div>

                    <!-- Company Links -->
                    <div class="col-xl-2 col-lg-6 col-md-8">
                        <div class="footer-widget">
                            <h6 class="f-800">Company</h6>
                            <ul class="footer-menu">
                                <li><a href="{{ route('template.one.about') }}">About Us</a></li>
                                <li><a href="{{ route('template_one.contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('template.one.all_product') }}">All Products</a></li>
                                @auth
                                    <li><a href="{{ route('template.one.dashboard') }}">My Dashboard</a></li>
                                @else
                                    <li><a href="{{ route('template.one.login') }}">Login</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>

                    <!-- Inquiry Links -->
                    <div class="col-xl-2 col-lg-6 col-md-8">
                        <div class="footer-widget">
                            <h6 class="f-800">Inquiry</h6>
                            <ul class="footer-menu">
                                <li><a href="{{ route('template.one.term') }}">Terms</a></li>
                                <li><a href="{{ route('template.one.faq') }}">FAQ</a></li>
                                <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('return-policy') }}">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Join Us Section -->
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="footer-widget">
                            <div class="pb-4 social-icons">
                                <a href="{{ optional($site)->facebook_url }}" class="social-icon">
                                    <i class="fab fa-facebook-f footer-icons"></i>
                                </a>
                                <a href="{{ optional($site)->skype_url }}" class="social-icon">
                                    <i class="fab fa-skype footer-icons"></i>
                                </a>
                                <a href="{{ optional($site)->youtube_url }}" class="social-icon">
                                    <i class="fab fa-youtube footer-icons"></i>
                                </a>
                                <a href="{{ optional($site)->linkedin_url }}" class="social-icon">
                                    <i class="fab fa-linkedin-in footer-icons"></i>
                                </a>
                                <a href="{{ route('template.one.faq') }}" class="faq-icon">
                                    <i class="fas fa-question-circle footer-icons"></i>
                                </a>
                            </div>
                            <h6 class="f-800">Join our community to stay updated with the latest products and exclusive offers</h6>
                            <form action="{{ route('submit.email') }}" method="POST">
                                @csrf
                                <div class="mb-3 input-group w-100">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Enter Email Address" required>

                                    <div class="input-group-append">
                                        <button class="px-3 btn btn-outline-secondary" style="background: #12a0c6;"
                                            type="submit" id="button-addon2">
                                            <i class="fa-regular fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            {{-- <p></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="pt-20 pb-20 footer-bottom gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center footer-copyright">
                        <a href="{{ route('index') }}" class="text-muted">
                            Copyright 2025 <span class="primary-color fw-bold">{{ optional($site)->site_name }}</span> All
                            Rights Reserved.
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

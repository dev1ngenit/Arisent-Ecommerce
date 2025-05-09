@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
@section('title', 'Dada Bhaai | About Us')
    <!-- page banner area start -->
    <section class="page-banner-area" data-background="{{ asset('frontend/template_one/assets/img/bg/banner.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <div class="banner-text text-center pt-90 pb-90">
                        <h2 class="f-800 cod__black-color">{{ optional($about)->breadcrumb_title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ optional($about)->breadcrumb_sub_title }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page banner area end -->

    <!-- about area start -->
    <section class="about-area pt-80 pb-45">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="pb-30">
                        <p>{{ optional($about)->section_one_badge }}</p>
                        <h1 class="font-weight-bold grenadier-color">
                            {{ optional($about)->section_one_title }}
                        </h1>
                        <p>{{ optional($about)->section_one_sub_title }}</p>
                    </div>

                    <p>{!! optional($about)->section_one_description !!}</p>


                </div>
                <div class="col-lg-4">
                    <img class="img-fluid rounded" src="{{ asset('upload/about/' . optional($about)->section_one_image) }}"
                        alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->


    <!-- about area start -->
    <section class="about-area pt-80 pb-45">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <img class="img-fluid rounded" src="{{ asset('upload/about/' . optional($about)->ceo_section_image) }}"
                        alt="" />
                </div>
                <div class="col-lg-8">
                    <div class="pb-30">
                        <p>{{ optional($about)->ceo_section_badge }}</p>
                        <h1 class="font-weight-bold grenadier-color">
                            {{ optional($about)->ceo_section_title }}
                        </h1>
                        <p>{{ optional($about)->ceo_section_sub_title }}</p>
                    </div>
                    <p>{!!optional($about)->ceo_section_description !!}</p>
                    <h6 class="font-weight-bold grenadier-color">{{ optional($about)->ceo_section_ceo_name }}</h6>
                    <p>{{ optional($about)->ceo_section_ceo_designation }}</p>
                    <div>
                        <img class="" width="150px"
                            src="{{ asset('upload/about/' . optional($about)->ceo_section_signature_image) }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

@endsection

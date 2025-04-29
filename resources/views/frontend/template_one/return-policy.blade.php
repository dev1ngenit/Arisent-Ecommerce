@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <style>
        .return-banner {
            height: 330px;
            object-fit: cover;
        }
    </style>
    {{-- <section>
        <div class="shadow-sm">
            <img class="w-100 return-banner" src="{{ asset('images/refund-policy-1024x259.jpg') }}" alt="">
        </div>
    </section> --}}
    <section>
        <div class="container py-4">
            <h3 class="text-start pure__black-color mb-30 mt-30">
                <span class="f-800">Our Return</span>
                <span class="f-800">Policy</span>
            </h3>
            <div class="py-5 row">
                <div class="col-lg-12">
                    {!! optional($return)->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <div class="container py-4">
        <h3 class="pure__black-color mb-30 mt-30 text-center">
            {{-- <span class="f-300">Discover Our</span> --}}
            <span class="f-800">Privacy</span>
            <span class="f-800">Policy</span>
        </h3>
        <div class="row py-5">
            <div class="col-lg-12">

                {!! optional($privacy)->content !!}

            </div>
        </div>
    </div>
@endsection

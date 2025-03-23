@extends('frontend.template_one.frontend_dashboard_template_one')
@section('index_template_one')
    <style>
        .bgacc {
            position: absolute;
            background: #eee;
            height: 100%;
            width: 100%;
            z-index: -1;
            left: 0;
            top: 0;
        }

        .collapse.show span {
            animation: minus-opacity 0s;
            opacity: 1;
        }

        .bodyicon {
            position: absolute;
            right: 36px;
            background: #fff;
            color: red;
            top: -35px;
            right: 18px;
            width: 15px;
            height: 17px;
            text-align: center;
            pointer-events: none;
            z-index: 0;
        }

        .collapse span {
            opacity: 0;
        }

        .card .card-body {
            color: #252525;
            font-size: 14px;
            position: relative;
            z-index: 1;
        }

        .card-link {
            color: var(--theme-color);
            width: 100%;
            display: flex;
            justify-content: space-between;
            font-size: 15px;
        }
    </style>
    <section class="bg-light" style="padding-top: 50px; padding-bottom: 50px;">
        <h3 class="text-center pure__black-color">
            <span class="f-800">Frequently Asked Questions</span>
        </h3>
    </section>
    <div class="container">
        <!-- Updated Title and Description -->
        <div class="row align-items-center" style="margin-top: 50px;">
            <div class="col-lg-6">
                <div class="container">
                    <!-- Updated Subsection Title and Description -->
                    <h2>Need Assistance?</h2>
                    <p><strong>Tip:</strong> Find <strong>answers</strong> to common questions or contact us for further
                        assistance. <br> We're here to help!</p>

                    <!-- FAQ Accordion -->
                    <div id="accordion">
                        @forelse ($faqs as $faq)
                            <div class="mb-3 border-0 card">
                                <div class="bg-transparent card-header">
                                    <a class="card-link" data-toggle="collapse" href="#faq{{ $faq->id }}">
                                        {{ $faq->question }}<span class="fa fa-plus headicon"></span>
                                    </a>
                                </div>
                                <div id="faq{{ $faq->id }}" class="collapse show" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="bgacc"></div>
                                        <span class="fa fa-minus bodyicon"></span>
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>No Questions Available</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <img class="img-fluid" src="{{ asset('images/faq-img.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('frontend.astell.frontend_dashboard_astell')
@section('index_astell')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <style>
        .accordion .card-header:after {
            font-family: 'FontAwesome';
            content: "\f068";
            float: right;
        }

        .accordion .card-header.collapsed:after {
            /* symbol for "collapsed" panels */
            content: "\f067";
        }
    </style>
    <section>
        <div class="contact-group">
            <div class="visual">
                <h2>FAQ</h2>
                <p>Have some question? We are here to help!</p>
            </div>

        </div>
    </section>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="sub-tit">FAQ</h2>
                </div>
            </div>
            <div class="row">
                <div id="accordion" class="accordion w-100">
                    <div class="card mb-0">
                        @foreach ($faqs as $key => $faq)
                            <div class="card-header {{ $key == 0 ? '' : 'collapsed' }}" data-toggle="collapse" href="#collapse{{ $key }}">
                                <a class="card-title">
                                    {{ $key + 1 }}. {{ $faq->question }}
                                </a>
                            </div>
                            <div id="collapse{{ $key }}" class="card-body collapse {{ $key == 0 ? 'show' : '' }}" data-parent="#accordion">
                                <p>
                                    {{ $faq->answer }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

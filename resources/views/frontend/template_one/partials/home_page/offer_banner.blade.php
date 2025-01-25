@php
    $offercats = App\Models\Admin\OfferCategory::where('status', '1')->inRandomOrder()->limit(2)->get();
@endphp

@if (count($offercats) > 0)
    <div class="product pt-60 fix">
        <div class="container">

            <div class="row">


                @foreach ($offercats as $offercat)
                    <div class="col-lg-6">

                        <a href="{{ route('offer-categorywise.product', $offercat->id) }}"
                            title="{{ $offercat->offer_category_name }}">

                            <div class="offer-banner offer--banner__bg mb-30"
                                data-background="{{ !empty($offercat->offer_category_image) ? url('storage/offer_category_image/' . $offercat->offer_category_image) : url('https://ui-avatars.com/api/?size=500&color=fff&rounded=false&name=' . urlencode($offercat->offer_category_name) . '&font-size=0.1') }}">

                                <div class="offer--banner__text">
                                    {{-- <span class="f-200 white-color">{{ $offercat->offer_category_name }}</span> --}}
                                    {{-- <h4 class="white-color f-900 mb-40">55% Flate</h4> --}}
                                    {{-- <a href="">View Collection<i
                                            class="icofont-long-arrow-right"></i></a> --}}
                                </div>

                            </div>

                        </a>

                    </div>
                @endforeach


            </div>
        </div>
    </div>
@endif

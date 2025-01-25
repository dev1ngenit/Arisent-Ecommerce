@php
    $brands = App\Models\Brand::where('status', '1')->latest()->get();
@endphp

@if (count($brands) > 0)
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="brand-active">

                        @foreach ($brands as $brand)
                            <div class="single-brand">
                                <a href="{{ url('product/brand/' . $brand->id . '/' . $brand->brand_slug) }}">

                                    @if ($brand->icon)
                                        <img src="{{ asset('storage/brand/' . $brand->icon) }}"
                                            style="width: 157px; height: 56px;" alt="" />
                                    @else
                                        <img src="{{ url('https://ui-avatars.com/api/?size=80&color=fff&rounded=false&name=' . urlencode($brand->brand_name) . '&font-size=0.3') }}"
                                            alt="" style="width: 157px; height: 56px;" />
                                    @endif


                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

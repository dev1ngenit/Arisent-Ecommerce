@php
    $heros = App\Models\Banner::where('status', '1')->orderBy('id', 'ASC')->get();
@endphp

<style>
    .home-main-banner {
        height: 550px
    }

    @media only screen and (max-width: 600px) {
        .home-main-banner {
            height: 150px;
            padding: 8px;
            margin-top: 0px;
        }
    }
</style>
<section class="hero hero__area">
    <div class="hero__active slider-active">

        @if (count($heros) > 0)
            @foreach ($heros as $hero)
                <div class="single__hero single-slider hero__bg pt-140 pb-120 home-main-banner" {{-- data-background="{{ asset($hero->banner_image) }}"> --}}
                    data-background="{{ asset($hero->banner_image) }}">
                </div>
            @endforeach
        @else
        @endif
    </div>

</section>

@php
    $setting = App\Models\Setting::find(1);
@endphp

@extends('client.layout.layout')

@section('title') {{ __('Главная страница') }} @endsection

@section('content')

    <section data-aos="fade-down" data-aos-duration="800" class="hero">
        <div class="hero__container container">
            <div class="hero__inner">

                <div class="hero__item-text-section">
                    <div class="hero__item-text-section-inner">
                        <h1 data-aos="fade-right" data-aos-duration="800"  class="hero__title">{{ $setting->welcome_text }}!</h1>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="800"  class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ asset('/assets/images/palais-des-papes-4164657_1280 2.png') }}" alt="" class="swiper-slide__img"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="part1"  class="painting">
        <div class="painting__container container">
            <div class="painting__inner">

                @forelse($blocks as $block)
                    <div class="painting__item">
                        <div class="painting__item-img-section">
                            <img src="{{ Storage::url( $block->img ) }}" alt="" class="painting__item-img">
                        </div>
                        <p class="painting__item-text">{{ $block->text }}</p>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>

    <section id="part2" class="provodnic">
        <div class="provodnic__container container">
            <div class="provodnic__inner">

                <div class="provodnic__item">

                    <div class="provodnic__img-section">
                        <img src="{{ asset('/assets/images/tima 1 1.png') }}" alt="" class="provodnic__img">
                    </div>
                </div>

                <div class="provodnic__item provodnic__item-text">
                    <div class="provodnic__text-sction">
{{--                        <h2 class="provodnic__text-title">Проводник </h2>--}}
                        <p class="provodnic__text-decr">{{ $setting->conductor_text }}</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="dog">
        <div class="dog__container container">
            <div class="dog__inner">

                <div class="dog__item-text">
                    <p class="dog__item-text-desc">
                        {{ $setting->musem_text }}
                    </p>
                </div>

                <div class="dog__item-img-section">
                    <img src="{{ asset('/assets/images/pla-a-del-rei 1.png') }}" alt="" class="dog__item-img">
                </div>

            </div>
        </div>
    </section>

    <section id="part3" class="onis">
        <div class="onis__container container">
            <div class="onis__inner">
                <p class="onis__text">  {{ $setting->pred_footer_text }}</p>
            </div>
        </div>
    </section>

    <!-- scr -->
    <section id="button-uptogo" class="uptogo">
        <i class='bx bxs-chevron-up'></i>
    </section>


    <div class="aos">
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </div>

@endsection

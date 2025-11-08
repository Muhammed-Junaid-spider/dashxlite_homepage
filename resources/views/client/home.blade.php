@extends('client.layouts.app')
@section('header')

    <style>
        .swiper-button-lock {
            display: unset;
        }

        #readMoreBtn {
            cursor: pointer;
        }
    </style>
@endsection

@section('content')
    @include('client.home.banner.' . $obj->content['s1_style'])
    @include('client.home.introduction.' . $obj->content['s2_style'])
    @include('client.home.services.' . $obj->content['s3_style'])
    @include('client.home.testimonials.' . $obj->content['s4_style'])
    @include('client.home.statistics.' . $obj->content['s5_style'])
    @include('client.home.contactform.' . $obj->content['s6_style'])
    @include('client.home.faq.' . $obj->content['s7_style'])
    @include('client.home.contact.' . $obj->content['s8_style'])









    <section class="py-[85px] footer-content">
        <div class="container">
            <h2>{{ $obj->content['s9_title'] }}</h2>
            <p id="description" class="text-gray-700">
                {!! $obj->content['s9_content_1'] !!}
            </p>
            <div id="extraContent" style="display: none;">
                {!! $obj->content['s9_content_2'] !!}
            </div>
            <button id="readMoreBtn" class="btn mt-4">Read More...</button>
        </div>
    </section>
@endsection


@section('bottom')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    
    <script type="text/javascript" src="{{ asset('js/formValidation.js') }}"></script>


    <script>
        AOS.init();
    </script>

    @include('client.home.js.services.' . $obj->content['s3_style'])
    @include('client.home.js.testimonials.' . $obj->content['s4_style'])
    @include('client.home.js.faq.' . $obj->content['s7_style'])

    





    <script>
        $(document).ready(function() {
            $('#readMoreBtn').on('click', function() {
                $('#extraContent').slideToggle(300); // toggle the second content smoothly
                $(this).text(function(i, text) {
                    return text === "Read Less" ? "Read More..." : "Read Less";
                });
            });
        });
    </script>


    <script>
        const menuBtn = document.querySelector('header a.md\\:hidden'); // mobile menu icon
        const navMenu = document.querySelector('ul.nav');

        menuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dropdownBtn').click(function(e) {
                e.stopPropagation();
                const $menu = $('#dropdownMenu');
                const $icon = $(this).find('svg');

                if ($menu.hasClass('opacity-0')) {
                    // Show dropdown with smooth transition
                    $menu.removeClass('opacity-0 scale-95 pointer-events-none')
                        .addClass('opacity-100 scale-100 pointer-events-auto');
                    $icon.addClass('rotate-180');
                } else {
                    // Hide dropdown
                    $menu.removeClass('opacity-100 scale-100 pointer-events-auto')
                        .addClass('opacity-0 scale-95 pointer-events-none');
                    $icon.removeClass('rotate-180');
                }
            });

            // Close dropdown if clicking outside
            $(document).click(function() {
                $('#dropdownMenu')
                    .removeClass('opacity-100 scale-100 pointer-events-auto')
                    .addClass('opacity-0 scale-95 pointer-events-none');
                $('#dropdownBtn svg').removeClass('rotate-180');
            });
        });
    </script>

@endsection

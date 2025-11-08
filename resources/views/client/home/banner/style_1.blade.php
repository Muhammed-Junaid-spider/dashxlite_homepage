<section class="relative banner-option-one">
    @php
        $title = $obj->content['s1_title'] ?? '';
        $words = explode(' ', trim($title));
        $lastWord = array_pop($words);
        $before = implode(' ', $words);
    @endphp
    <div class="relative"><img loading="lazy" width="1920" height="1080" decoding="async" data-nimg="1"
            class="w-full  h-[calc(100vh-0px)] object-cover" style="color:transparent" srcset=""
            src="{{ optional($obj->content['s1_media_id'])->file_path }}">
        <div class="absolute bottom-0 left-0 pb-[48px] w-[100%]">
            <div class="container">
                <div data-aos="fade-up">
                    <h1 class="max-w-[430px] text-[#fff]">{{ $before }} <span>{{ $lastWord }}</span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-cap bg-[#1D82CC] py-[25px]">
        <div class="container flex items-center justify-between">
            <h3 class="max-w-[400px]">{{ $obj->content['s1_small_title'] }}</h3><a
                class="btn flex items-center gap-[9px]">Learn more <svg xmlns="http://www.w3.org/2000/svg"
                    width="15" height="9" viewBox="0 0 15 9" fill="none">
                    <path
                        d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                        fill="#060606"></path>
                </svg> </a>
        </div>
    </div>
</section>

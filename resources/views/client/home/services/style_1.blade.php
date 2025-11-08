<section class="relative py-[110px]">
        <div class="container md:flex gap-[15px] lg:gap-[35px] xl:gap-[115px] ">
            <div
                class="md:w-[340px] xl:w-[460px] mb-[50px] md:mb-0 flex flex-col justify-between gap-[55px] hm-product-left">
                <div>
                    <h3>{{ $obj->content['s3_title'] }}</h3>
                    <p>{{ $obj->content['s3_small_title']}} </p>
                </div>
                <div data-aos="fade-up"><img alt=" image text" loading="lazy" width="458" height="226" decoding="async"
                        data-nimg="1" class="w-full h-[226px] object-cover" style="color:transparent" srcset=""
                        src="{{ optional($obj->content['s3_media_id'])->file_path }}">
                </div>
            </div>
            <div class="md:w-[calc(100%-360px)] xl:w-[calc(100%-460px)]">
                <div data-aos="fade-up">
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 gap-x-[20px] lg:gap-x-[30px] gap-y-[35px] lg:gap-y-[67px]">
                        
                        
                        @foreach ($obj->content['Service_listing_id']->list as $item )
                        
                            <div class="product-sm-list">
                                <div class="w-full h-[226px] mb-[13px] overflow-hidden group"><img alt="Product"
                                        loading="lazy" width="458" height="226" decoding="async" data-nimg="1"
                                        class="w-full h-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-110"
                                        style="color:transparent" srcset="" src="{{ optional($item->media)->file_path}}">
                                </div><a class="flex items-center justify-between gap-[15px]">
                                    <h4>{{ $item->title }}</h4><svg xmlns="http://www.w3.org/2000/svg" width="15"
                                        height="9" viewBox="0 0 15 9" fill="none">
                                        <path
                                            d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                                            fill="#060606"></path>
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
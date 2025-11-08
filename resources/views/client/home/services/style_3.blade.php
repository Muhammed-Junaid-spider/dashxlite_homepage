<section id="products-section" class="py-[50px]">
        <div class="container relative ">
            <div class="md:flex mx-[-15px] justify-between">
                <div class="md:w-6/12 w-full px-[15px] mb-[35px] md:mb-0">
                    <h2 class="text-[#0F1826] text-[30px] md:text-[40px] font-[400] leading-[40px] ">{!! $obj->content['s3_title'] !!}
                    </h2>
                </div>
                <div class="md:w-6/12 w-full px-[15px]">
                    <p class="text-[#5B6879] text-[17px] font-[400] leading-[31px]">{{ $obj->content['s3_small_title']}}</p>
                </div>
            </div>
        </div>
        <div class="products-btm-block bg-[#F5F5F5] pt-[95px] pb-[22px] mt-[48px]">
            <div class="container  p-0">
                <div class="md:flex justify-between">
                    <div class="md:w-3/12 w-full mb-[25px] md:mb-0 ">
                        <div
                            class="text-[#1D1D1D] text-[12px] font-[400] leading-[10px] w-fit border border-[#000] rounded-[30px] bg-[#fff] py-[4px] px-[12px]">
                            {{ $obj->content['s3_name'] }}</div>
                    </div>
                    <div class="md:w-9/12 w-full ">
                        <div
                            class="swiper-custom-navigation-block flex items-center gap-[10px] justify-end mb-[25px] mr-[80px] relative mt-[-40px]">
                            <div class="swiper-navigation-prev cursor-pointer swiper-button-disabled"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="15" viewBox="0 0 18 15"
                                    fill="none">
                                    <path
                                        d="M1.02325 6.96983C0.65049 7.34259 0.65049 7.94696 1.02325 8.31972L7.09778 14.3942C7.47054 14.767 8.07491 14.767 8.44767 14.3942C8.82043 14.0215 8.82043 13.4171 8.44767 13.0444L3.04809 7.64478L8.44767 2.2452C8.82043 1.87244 8.82043 1.26807 8.44767 0.895305C8.07491 0.522542 7.47054 0.522542 7.09778 0.895305L1.02325 6.96983ZM17.0928 7.64478V6.69026L1.6982 6.69026V7.64478V8.59929L17.0928 8.59929V7.64478Z"
                                        fill="#060606"></path>
                                </svg></div>
                            <div class="swiper-navigation-next cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="17" height="15" viewBox="0 0 17 15" fill="none">
                                    <path
                                        d="M16.5929 8.30385C16.9656 7.93109 16.9656 7.32672 16.5929 6.95396L10.5184 0.879436C10.1456 0.506673 9.54122 0.506673 9.16846 0.879436C8.79569 1.2522 8.79569 1.85657 9.16846 2.22933L14.568 7.62891L9.16846 13.0285C8.79569 13.4012 8.79569 14.0056 9.16846 14.3784C9.54122 14.7511 10.1456 14.7511 10.5184 14.3784L16.5929 8.30385ZM0.865234 7.62891V8.58343H15.9179V7.62891V6.67439H0.865234V7.62891Z"
                                        fill="#060606"></path>
                                </svg></div>
                        </div>
                        <div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper">
                                @foreach ($obj->content['Service_listing_id']->list as $item )
                                <div class="swiper-slide swiper-slide-next" style="width: 345px; margin-right: 30px;">
                                    <div style="opacity: 1; transform: none;">
                                        <div class="plroduct-slider-block-item">
                                            <div class="product-slider-item-img"><img alt="Product" loading="lazy"
                                                    width="526" height="390" decoding="async" data-nimg="1"
                                                    class="w-full" style="color:transparent" srcset=""
                                                    src="{{ optional($item->media)->file_path }}">
                                            </div>
                                            <div class="flex gap-[25px] justify-between mt-4">
                                                <div class="w-[70%]">
                                                    <h3
                                                        class="text-[#060606] text-[19px] font-[500] leading-[29px] capitalize mb-[4px]">
                                                        {{ $item->title }}</h3>
                                                    <p class="text-[#060606] text-[15px] leading-[23px]">{{ $item->short_description}}</p>
                                                </div><a
                                                    class="text-[#000] text-[16px] font-[400] leading-[18px] flex items-center gap-[5px]">View
                                                    details <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                        height="20" viewBox="0 0 20 20" fill="none">
                                                        <path d="M16.4346 9.95911L3.34408 9.95911" stroke="black"
                                                            stroke-width="1.22723" stroke-miterlimit="10"
                                                            stroke-linecap="round"></path>
                                                        <path
                                                            d="M10.6803 16.2262L16.058 10.8501C16.1758 10.7337 16.2692 10.5951 16.333 10.4423C16.3968 10.2895 16.4297 10.1255 16.4297 9.95994C16.4297 9.79436 16.3968 9.63042 16.333 9.47762C16.2692 9.32483 16.1758 9.1862 16.058 9.06979L10.6803 3.69205"
                                                            stroke="black" stroke-width="1.22723" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div
                            class="swiper-custom-pagination-block  flex items-center gap-[6px] justify-end mt-[50px] mr-[80px]">
                            <h5 class="text-[#060606] text-[13px] font-[300] leading-[24px]">{{ $obj->content['s3_name_1'] }}</h5>
                            <div
                                class="swiper-custom-pagination  flex items-center gap-[6px] justify-end ss swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                <span class="swiper-custom-bullet  swiper-custom-bullet-active"></span><span
                                    class="swiper-custom-bullet"></span><span class="swiper-custom-bullet"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
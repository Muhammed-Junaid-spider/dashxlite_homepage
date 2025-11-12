<section class="relative py-[110px]">
        <div class="max-w-[1280px] w-full  mx-auto px-[15px] ">
            <div class="flex flex-col md:flex-row items-center justify-between gap-[25px] m:gap-[50px] mb-[50px]">
                <div class="md:max-w-[350px]">
                    <h3 class="fontDM text-[#0F1826] text-4xl font-normal leading-10">{!! $obj->content['s3_title'] !!}</h3>
                </div>
                <div class="max-w-[500px] xl:max-w-[640px]">
                    <p class="fontDM text-[#0F1826]  max-w-[640px] justify-start text-base font-normal  leading-loose">
                       {{ $obj->content['s3_small_title']}} </p>
                </div>
            </div>
        </div>
        <div class="px-[15px]">
            <div class="max-w-[1280px] w-full  mx-auto">
                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-x-[26px] gap-y-[40px]">
                    @foreach ($services as $item )
                    <div data-aos="fade-up">
                        <div class="product-md-list  rounded-[5px] overflow-hidden bg-zinc-100">
                            <div class="w-full h-[337px] mb-[24px] overflow-hidden group"><img alt="Product"
                                    loading="lazy" width="458" height="226" decoding="async" data-nimg="1"
                                    class="w-full h-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-110"
                                    style="color:transparent" srcset="" src="{{ optional($item->banner)->file_path}}">
                            </div>
                            <div class="p-[20px]"><a class="flex items-center justify-between gap-[30px]">
                                    <div>
                                        <h4>{{ $item->title }}</h4>
                                        <p>{{ $item->short_description}}</p>
                                    </div><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9"
                                        viewBox="0 0 15 9" fill="none">
                                        <path
                                            d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                                            fill="#060606"></path>
                                    </svg>
                                </a></div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </section>
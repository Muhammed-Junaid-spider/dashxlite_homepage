<div>
        <section id="about-section" class="py-[100px]">
            <div class="container ">
                <div class="flex mx-[-15px] justify-center">
                    <div class="md:w-full w-full px-[15px]">
                        <div style="opacity: 1; transform: none;">
                            <div
                                class="bg-[#F6ECDC] rounded-[12px] pt-[80px] md:pt-[140px] pl-[25px] md:pl-[62px] pr-[25px] pb-[20px]">
                                <div class="w-full">
                                    <h3 class="text-[#000] text-[15px] font-[400] mb-[20px] font-general-sans">{{ $obj->content['s2_small_title'] }}
                                    </h3>
                                </div>
                                <div class="md:flex mx-[-15px] justify-between">
                                    <div class="lg:w-5/12 md:w-full w-full px-[15px]">
                                        <div
                                            class="about-text-block flex flex-col justify-between items-stretch gap-[25px] h-full">
                                            <div>
                                                <h2
                                                    class="text-[#060606] text-[30px] md:text-[50px] font-[400] leading-[40px] md:leading-[61px] tracking-[-1.5px] font-general-sans">
                                                    {!! $obj->content['s2_title']  !!}</h2>
                                            </div><a
                                                class="text-[#000] text-[16px] font-[400] leading-[18px] flex items-center gap-[5px] pb-[30px]">About
                                                Us <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
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
                                    <div class="lg:w-6/12 md:w-full w-full px-[15px]">
                                        <div class="flex flex-col justify-between items-end gap-[80px] h-full">
                                            <p
                                                class="text-[#060606] text-justify text-[17px] font-[400] leading-[23px] md:pr-[60px]">
                                                {!! $obj->content['s2_content'] !!}</p><img
                                                alt="About03" loading="lazy" width="170" height="102" decoding="async"
                                                data-nimg="1" class="w-[170.38px] h-[102px] object-cover rounded-[4px] "
                                                style="color:transparent" srcset="" src="{{ optional($obj->content['s2_media_id'])->file_path }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
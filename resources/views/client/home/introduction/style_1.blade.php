<div>
        <section id="about-section" class="bg-[#F5FFFC] pt-[70px] pb-[85px] border-b border-[#CFCFCF]">
             @php
$title = $obj->content['s2_title'] ?? '';
$words = explode(' ', trim($title));
$lastWord = array_pop($words); 
$before = implode(' ', $words);
@endphp
            <div class="container ">
                <div class="flex mx-[-15px] justify-center">
                    <div class="md:w-11/12 w-full px-[15px]">
                        <div class="md:flex mx-[-15px] justify-between ">
                            <div class="lg:w-6/12 md:w-6/12 w-full px-[15px] mb-[50px] md:mb-[0px]">
                                <div
                                    class="about-text-block flex flex-col justify-between items-stretch gap-[25px] h-full">
                                    <div data-aos="fade-up">
                                        <div>
                                            <h3 class="text-[#000] text-[15px] font-[400] mb-[20px] font-general-sans">
                                                {{ $obj->content['s2_small_title'] }}</h3>
                                            <h2
                                                class="text-[#060606] text-[44px] md:text-[56px] font-[400] leading-[48px] md:leading-[63px] tracking-[-1.68px] max-w-[377px]">
                                                {{-- Experience the<br><span class="text-[#008080] font-[600]">Skin
                                                </span>Essence Advantage --}}
                                                {{-- {{ $before }}<br><span class="text-[#008080] font-[600]">{{ $lastWord }} --}}
                                                    {!! $obj->content['s2_title']  !!}
                                                </span>
                                            </h2>
                                        </div>
                                    </div>
                                    <div data-aos="fade-up">
                                        <p class="text-[#060606] text-[17px] leading-[28px] font-[400]">{!! $obj->content['s2_content'] !!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-4/12 md:w-6/12 w-full px-[15px]">
                                <div data-aos="fade-up">
                                    <div class="about-img-block relative"><img alt="About01" loading="lazy" width="450"
                                            height="600" decoding="async" data-nimg="1" class="w-full rounded-[8px]"
                                            style="color:transparent" srcset="" src="{{ optional($obj->content['s2_media_id'])->file_path }}">
                                        <div class="absolute top-[23px] left-[25px]">
                                            <h4 class="text-[#fff] text-[26px] font-[500] leading-[18px] ">{{$obj->content['s2_content_1']}}<span
                                                    class="block text-[#fff] text-[18px] leading-[18px] mt-[4px]">{{ $obj->content['s2_content_2'] }}</span>
                                            </h4>
                                        </div>
                                        <div
                                            class="absolute bottom-[14px] left-[50%] transform translate-x-[-50%] flex justify-center w-full">
                                            <button
                                                class="bg-[#FFF] rounded-[100px] hover:bg-[#008080] transition-all hover:text-[#fff] flex items-center gap-2 font-medium text-[#000] w-fit py-[13px] px-[70px] text-[17px] font-[400] leading-[18px]">About
                                                Us<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9"
                                                    viewBox="0 0 15 9" fill="none">
                                                    <path
                                                        d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                                                        fill="#060606"></path>
                                                </svg></button>
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
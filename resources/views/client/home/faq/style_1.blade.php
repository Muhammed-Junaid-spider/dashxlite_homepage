<div data-aos="fade-up">
        <section class="bg-[#F5FFFC] py-[85px] mt-[115px]">
            <div class="container mx-auto px-4">
                <div class="faq-title mb-[58px] ">
                    <div class="grid md:grid-cols-2">
                        <div><span>{{ $obj->content['s7_short_title'] }}</span>
                            <h3>{{ $obj->content['s7_title'] }}</h3>
                        </div>
                        <div class="flex md:justify-end mt-[25px] md:mt-0"><a> <button
                                    class=" h-[46px] bg-[#FFF] border border-[#008080] hover:bg-[#008080] transition-all hover:text-[#fff] rounded-[70px] flex items-center gap-[14px] font-medium text-[#000] w-fit px-[23px] py-[12px]">
                                    View all<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9"
                                        viewBox="0 0 15 9" fill="none">
                                        <path
                                            d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                                            fill="#060606"></path>
                                    </svg></button> </a></div>
                    </div>
                </div>

                <!-- Accordion Section -->
                <div class="faq-accordion space-y-4">
                    <!-- Item 1 -->
                    @foreach ($obj->faq as $faq)
                        
                    
                    <div class="border-b border-gray-300">
                        <button
                            class="accordion-header w-full flex justify-between items-center py-3 text-left font-medium cursor-pointer">
                            <span>{{$faq->question}}</span>
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v16m8-8H4" />
                            </svg>
                        </button>
                        <div class="accordion-body max-h-0 overflow-hidden transition-all duration-300">
                            <p class="text-sm text-gray-700 py-2">{!! $faq->answer !!}</p>
                        </div>
                    </div>
                    @endforeach

                    <!-- Item 2 -->
                    
                </div>
            </div>
        </section>
    </div>

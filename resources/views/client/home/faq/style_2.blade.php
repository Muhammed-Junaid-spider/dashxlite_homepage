
    <div data-aos="fade-up">
        <section class="py-[85px]">
            <div class="max-w-[768px] px-3 w-full mx-auto">
                <div class="faq-title2 mb-[72px] text-center">
                    <h3 class="text-[28px] font-semibold mb-2">{{ $obj->content['s7_title'] }}</h3>
                    <h5 class="text-lg text-gray-600">{{ $obj->content['s7_small_title'] }}</h5>
                </div>

                <div class="faq-accordion2 space-y-3">
                    <!-- Accordion 1 -->
                    @foreach ($obj->faq as $faq )
                        
                   
                    <div class="accordian-cntr border-b overflow-hidden">
                        <button class="accordion-button w-full flex items-center justify-between py-3 text-left">
                            <span class="font-medium text-gray-900">{{ $faq->question }}</span>
                            <span
                                class="w-4 h-4 flex items-center justify-center acco-close-btn transition-transform duration-200">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.90039 7.85205V13.2856H6.03418V7.85205H0.651367V5.99854H6.03418V0.564941H7.90039V5.99854H13.2832V7.85205H7.90039Z"
                                        fill="#4D4D4D"></path>
                                </svg>
                            </span>
                        </button>
                        <div
                            class="accordion-panel transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                            <p class="text-sm text-gray-700 py-2">
                                {!! $faq->answer !!}
                            </p>
                        </div>
                    </div>

                     @endforeach

                    <!-- Accordion 2 -->
                    {{-- <div class="accordian-cntr border-b overflow-hidden">
                        <button class="accordion-button w-full flex items-center justify-between py-3 text-left">
                            <span class="font-medium text-gray-900">Why Tailwind?</span>
                            <span
                                class="w-4 h-4 flex items-center justify-center acco-close-btn transition-transform duration-200">
                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.90039 7.85205V13.2856H6.03418V7.85205H0.651367V5.99854H6.03418V0.564941H7.90039V5.99854H13.2832V7.85205H7.90039Z"
                                        fill="#4D4D4D"></path>
                                </svg>
                            </span>
                        </button>
                        <div
                            class="accordion-panel transition-all duration-300 ease-in-out max-h-0 opacity-0 overflow-hidden">
                            <p class="text-sm text-gray-700 py-2">
                                Tailwind gives you utility-first styling for rapid UI development.
                            </p>
                        </div>
                    </div> --}}

                    <!-- Accordion 3 -->
                    
                </div>
            </div>
            </section>
            </div>
<div style="opacity: 1; transform: none;">
        <section class="py-[85px] bg-[#F5FAFF]">
            <div class="container">
                <div class="grid md:grid-cols-2 gap-[25px]">
                    <div class="flex flex-col justify-between faq-leftbox">
                        <div class="mb-[72px] text-left">
                            <h3>{{ $obj->content['s7_title'] }}</h3>
                            <h4 class="text-lg">
                                {{ $obj->content['s7_small_title'] }}
                            </h4>
                        </div>
                        <div>
                            <h5>{{ $obj->content['s8_title'] }}</h5>
                            <a class="btn flex justify-center items-center gap-[7px]">
                                Contact Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9"
                                    fill="none">
                                    <path
                                        d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                                        fill="#060606"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="faq-accordion2">
                            <div class="w-full">
                                <!-- Accordion 1 -->
                                @foreach ($obj->faq as $faq )
                                    
                                
                                <div class="accordian-cntr overflow-hidden border-b border-gray-200">
                                    <button aria-expanded="true"
                                        class="accordion-button w-full flex items-center justify-between py-3 text-left transition-all duration-300">
                                        <span class="font-medium">{{ $faq->question }}</span>
                                        <span
                                            class="relative w-4 h-4 flex items-center justify-center acco-close-btn transition-transform duration-300">
                                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.10755 11.119L5.26852 14.9642L3.94785 13.6457L7.78688 9.80047L3.97759 5.99732L5.28717 4.68563L9.09646 8.48878L12.9355 4.64356L14.2562 5.9621L10.4171 9.80733L14.2264 13.6105L12.9168 14.9222L9.10755 11.119Z"
                                                    fill="#2A2A2A"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <div
                                        class="accordion-panel max-h-[500px] opacity-100 overflow-hidden transition-all duration-500 ease-in-out">
                                        <div class="text-sm text-gray-700 pb-4">
                                            {!! $faq->answer !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <!-- Accordion 2 -->
                                {{-- <div class="accordian-cntr overflow-hidden border-b border-gray-200">
                                    <button aria-expanded="false"
                                        class="accordion-button w-full flex items-center justify-between py-3 text-left transition-all duration-300">
                                        <span class="font-medium">Why Tailwind?</span>
                                        <span
                                            class="relative w-4 h-4 flex items-center justify-center acco-close-btn transition-transform duration-300">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.90039 7.85205V13.2856H6.03418V7.85205H0.651367V5.99854H6.03418V0.564941H7.90039V5.99854H13.2832V7.85205H7.90039Z"
                                                    fill="#4D4D4D"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <div
                                        class="accordion-panel max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
                                        <div class="text-sm text-gray-700 pb-4">
                                            Tailwind gives you utility-first styling for rapid UI
                                            development.
                                        </div>
                                    </div>
                                </div> --}}

                                <!-- Accordion 3 -->
                                {{-- <div class="accordian-cntr overflow-hidden">
                                    <button aria-expanded="false"
                                        class="accordion-button w-full flex items-center justify-between py-3 text-left transition-all duration-300">
                                        <span class="font-medium">Accessibility</span>
                                        <span
                                            class="relative w-4 h-4 flex items-center justify-center acco-close-btn transition-transform duration-300">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.90039 7.85205V13.2856H6.03418V7.85205H0.651367V5.99854H6.03418V0.564941H7.90039V5.99854H13.2832V7.85205H7.90039Z"
                                                    fill="#4D4D4D"></path>
                                            </svg>
                                        </span>
                                    </button>
                                    <div
                                        class="accordion-panel max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
                                        <div class="text-sm text-gray-700 pb-4">
                                            This simple accordion uses aria attributes and keyboard-focus
                                            styles.
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
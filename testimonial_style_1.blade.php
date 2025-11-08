<section class="relative bg-[#F4F8FB] pt-[75px] pb-[35px]">
    @php
$title = $obj->content['s4_title'] ?? '';
$words = explode(' ', trim($title));
$lastWord = array_pop($words); 
$before = implode(' ', $words);
@endphp
        <div class="container">
            <div data-aos="fade-up">
                <div class="flex">
                    <div class="w-full text-center flex flex-col justify-center">
                        <h2
                            class="text-[#0F1826] text-[34px] font-[500] leading-[35px] testimonial-title flex items-center gap-[5px] justify-center">
                            {{$before}}<!-- --> <span
                                class="text-[#FFF] text-[28px] font-[500] leading-[35px] block px-[8px] py-[4px]">{{ $lastWord }}</span>
                        </h2>
                        <p
                            class="text-[#5B6879] text-center text-[17px] font-[400] leading-[21px] mt-[8px] max-w-[650px] my-0 m-auto">
                            {{$obj->content['s4_content']}}<!-- --> </p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center ">
                <div class="md:w-11/12 w-full">
                    <div class="swiper">
                        <div class="swiper-wrapper  py-8">
                            @foreach ($testimonials as $item)
                                
                            <div class="swiper-slide swiper-slide-active" >
                                    <div data-aos="fade-up">
                                        <div class="testimonials-item hover:rotate-8 transition-all transition-normal">
                                            <div>
                                                <div class="testimonials-item-top flex items-center justify-between">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39"
                                                        viewBox="0 0 39 39" fill="none">
                                                        <path
                                                            d="M19.1448 29.7622C24.9015 30.0471 29.7992 25.6113 30.0841 19.8545C30.369 14.0978 25.9332 9.2001 20.1764 8.91522C14.4197 8.63035 9.52199 13.0662 9.23712 18.8229C8.95224 24.5797 13.3881 29.4773 19.1448 29.7622Z"
                                                            fill="#FFE57C"></path>
                                                        <path
                                                            d="M12.9844 26.7227C12.2295 28.4556 10.269 30.786 8.49239 31.8475C12.083 32.0251 14.6751 31.1025 16.6908 28.5995"
                                                            fill="#FFE57C"></path>
                                                        <path
                                                            d="M14.5771 20.5615C15.3679 20.6006 16.0406 19.9913 16.0797 19.2006C16.1188 18.4099 15.5096 17.7372 14.7188 17.698C13.9281 17.6589 13.2554 18.2682 13.2163 19.0589C13.1771 19.8496 13.7864 20.5224 14.5771 20.5615Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M19.5879 20.8095C20.3786 20.8487 21.0513 20.2394 21.0905 19.4487C21.1296 18.6579 20.5203 17.9852 19.7296 17.9461C18.9389 17.907 18.2661 18.5162 18.227 19.307C18.1879 20.0977 18.7972 20.7704 19.5879 20.8095Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M24.5991 21.0576C25.3898 21.0967 26.0626 20.4874 26.1017 19.6967C26.1408 18.906 25.5315 18.2333 24.7408 18.1941C23.9501 18.155 23.2774 18.7643 23.2382 19.555C23.1991 20.3457 23.8084 21.0185 24.5991 21.0576Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M12.9844 26.7227C12.2295 28.4556 10.269 30.786 8.49239 31.8475C12.083 32.0251 14.6751 31.1025 16.6908 28.5995"
                                                            stroke="black" stroke-width="1.00349" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M12.9844 26.7227C12.2295 28.4556 10.269 30.786 8.49239 31.8475C12.083 32.0251 14.6751 31.1025 16.6908 28.5995"
                                                            stroke="black" stroke-width="1.00349" stroke-miterlimit="10"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path
                                                            d="M11.5705 25.2765C10.2034 23.4191 9.52077 21.146 9.63832 18.8427C9.91224 13.3072 14.6214 9.04212 20.1569 9.31604C25.6924 9.58997 29.9574 14.2991 29.6835 19.8346C29.4096 25.3701 24.7004 29.6352 19.1649 29.3612C18.9795 29.3521 18.7954 29.3379 18.6124 29.3188"
                                                            stroke="black" stroke-width="1.00349" stroke-miterlimit="10"
                                                            stroke-linecap="round"></path>
                                                    </svg>
                                                    <div class="rating flex items-center gap-[7px]">
                                                        <h5 class="text-[#000] text-[15px] font-[400] leading-[10px]">5
                                                        </h5><svg xmlns="http://www.w3.org/2000/svg" width="21"
                                                            height="21" viewBox="0 0 21 21" fill="none">
                                                            <path
                                                                d="M10.5105 14.498L7.07655 16.5666C6.92485 16.6631 6.76626 16.7045 6.60077 16.6907C6.43528 16.6769 6.29047 16.6218 6.16635 16.5252C6.04224 16.4287 5.9457 16.3082 5.87675 16.1636C5.80779 16.0191 5.794 15.8569 5.83537 15.6771L6.74557 11.7674L3.70468 9.14022C3.56677 9.0161 3.48072 8.8746 3.44651 8.71573C3.41231 8.55686 3.42252 8.40185 3.47713 8.25071C3.53174 8.09956 3.61449 7.97544 3.72537 7.87835C3.83624 7.78126 3.98794 7.7192 4.18047 7.69217L8.19362 7.34051L9.74509 3.65834C9.81405 3.49285 9.92106 3.36873 10.0661 3.28598C10.2112 3.20324 10.3593 3.16187 10.5105 3.16187C10.6616 3.16187 10.8097 3.20324 10.9548 3.28598C11.0999 3.36873 11.2069 3.49285 11.2759 3.65834L12.8274 7.34051L16.8405 7.69217C17.0336 7.71976 17.1853 7.78181 17.2956 7.87835C17.4059 7.97489 17.4887 8.09901 17.5438 8.25071C17.599 8.40241 17.6095 8.55769 17.5753 8.71656C17.5411 8.87543 17.4548 9.01665 17.3163 9.14022L14.2754 11.7674L15.1856 15.6771C15.227 15.8564 15.2132 16.0186 15.1442 16.1636C15.0753 16.3087 14.9787 16.4293 14.8546 16.5252C14.7305 16.6212 14.5857 16.6764 14.4202 16.6907C14.2547 16.7051 14.0961 16.6637 13.9444 16.5666L10.5105 14.498Z"
                                                                fill="#19A473"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <p
                                                    class="text-[#5B6879] text-[16px] font-[400] leading-[22px] max-w-[230px] mt-[18px] mb-[15px]">
                                                    Highly effective and completely natural—exactly what I wanted.</p>
                                            </div>
                                            <div>
                                                <h4 class="text-[#060606] text-[16px] font-[400] leading-[22px]">Meera
                                                    L.</h4>
                                                <p class="text-[#5B6879] text-[12px] font-[400] leading-[22px]">Happy
                                                    Customer</p>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="slider-nav-testimonial flex items-center justify-center gap-[20px] ">
                        <div class="nav-prev cursor-pointer swiper-button-disabled"> <svg
                                xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41"
                                fill="none">
                                <rect x="39.2344" y="39.9387" width="38.2324" height="38.4266" rx="19.1162"
                                    transform="rotate(-180 39.2344 39.9387)" stroke="#D7D7D7"></rect>
                                <path
                                    d="M12.068 20.3169C11.8337 20.5513 11.8337 20.9312 12.068 21.1655L15.8863 24.9839C16.1207 25.2182 16.5006 25.2182 16.7349 24.9839C16.9692 24.7495 16.9692 24.3696 16.7349 24.1353L13.3408 20.7412L16.7349 17.3471C16.9692 17.1128 16.9692 16.7329 16.7349 16.4986C16.5006 16.2643 16.1207 16.2643 15.8863 16.4986L12.068 20.3169ZM27.5449 20.7412L27.5449 20.1412L12.4922 20.1412L12.4922 20.7412L12.4922 21.3412L27.5449 21.3412L27.5449 20.7412Z"
                                    fill="#1D1D1D"></path>
                            </svg> </div>
                        <div class="nav-next cursor-pointer rotate-180"> <svg xmlns="http://www.w3.org/2000/svg"
                                width="41" height="41" viewBox="0 0 41 41" fill="none">
                                <rect x="39.2344" y="39.9387" width="38.2324" height="38.4266" rx="19.1162"
                                    transform="rotate(-180 39.2344 39.9387)" stroke="#D7D7D7"></rect>
                                <path
                                    d="M12.068 20.3169C11.8337 20.5513 11.8337 20.9312 12.068 21.1655L15.8863 24.9839C16.1207 25.2182 16.5006 25.2182 16.7349 24.9839C16.9692 24.7495 16.9692 24.3696 16.7349 24.1353L13.3408 20.7412L16.7349 17.3471C16.9692 17.1128 16.9692 16.7329 16.7349 16.4986C16.5006 16.2643 16.1207 16.2643 15.8863 16.4986L12.068 20.3169ZM27.5449 20.7412L27.5449 20.1412L12.4922 20.1412L12.4922 20.7412L12.4922 21.3412L27.5449 21.3412L27.5449 20.7412Z"
                                    fill="#1D1D1D"></path>
                            </svg> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
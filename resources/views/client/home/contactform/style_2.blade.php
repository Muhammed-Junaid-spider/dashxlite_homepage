

    <section>
        <div class="container">
            <div data-aos="fade-up">
                <div class="cta-form-cntr relative">
                    <div class="cta-form-cap py-[40px] px-[25px]">
                        <div class="flex flex-col md:flex-row justify-between gap-[50px]">
                            <div class="w-full max-w-[440px] flex flex-col justify-end">
                                <h3>{{ $obj->content['s6_title'] }}</h3>
                            </div>
                            <form id="form">
                            <div
                                class="cta-form cta-form2 rounded-[9px] bg-[#fff] px-[35px] py-[50px] max-w-[788px] w-full flex flex-col gap-[22px]">
                                <div class="grid grid-cols-2 gap-[22px] md:gap-[82px]">
                                    <div><label for='firstName'>First Name*</label>
                                        <div class="border border-[#BFBFBF] rounded-[7px]"><input name="firstName" type="text"
                                                placeholder="Enter you first name"></div>
                                    </div>
                                    <div><label for=lastName>Last Name*</label>
                                        <div class="border border-[#BFBFBF] rounded-[7px]"><input name="lastName" type="text"
                                                placeholder="Enter you Last name"></div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-[22px] md:gap-[82px]">
                                    <div><label for="Phone">Phone Number*</label>
                                        <div class="border border-[#BFBFBF] rounded-[7px]"><input name="phone" type="text"
                                                placeholder="+91"></div>
                                    </div>
                                    <div><label for="email">Email</label>
                                        <div class="border border-[#BFBFBF] rounded-[7px]"><input name="email" type="text"
                                                placeholder="Enter you Email address"></div>
                                    </div>
                                </div>
                                <div><label for="message">Message</label>
                                    <div class="border border-[#BFBFBF] rounded-[7px]"><textarea name="message"
                                            placeholder="Enter your Message" class="h-[130px] w-full"></textarea></div>
                                </div><button class="flex items-center justify-between gap-[13px]">Contact Now <svg
                                        xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9"
                                        fill="none">
                                        <path
                                            d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                                            fill="#060606"></path>
                                    </svg></button>
                            </div>
                            </form>
                        </div>
                    </div><img alt="About01" loading="lazy" width="1400" height="600" decoding="async" data-nimg="1"
                        class="w-full rounded-[8px]" style="color:transparent" srcset="" src="{{ optional($obj->content['s6_media_id'])->file_path }}">
                </div>
            </div>
        </div>
    </section>



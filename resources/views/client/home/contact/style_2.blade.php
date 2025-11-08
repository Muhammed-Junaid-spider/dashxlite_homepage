<div class="max-w-[1216px] mx-auto rounded-[16px] bg-[#E5FFF7] p-[32px] mt-[30px] text-center faq-cta">
                <img alt="FAQ" loading="lazy" width="120" height="56" class="mx-auto mb-[30px]"
                    src="{{ optional($obj->content['s8_media_id'])->file_path }}" />
                <h4 class="text-xl font-semibold mb-1">{{ $obj->content['s8_title'] }}</h4>
                <h5 class="text-gray-700 mb-4">{{$obj->content['s8_small_title']}}</h5>
                <a class="flex items-center justify-center gap-[10px] btn">Contact Now <svg
                        xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                        <path
                            d="M13.8707 4.86836C14.105 4.63404 14.105 4.25414 13.8707 4.01983L10.0523 0.201451C9.81798 -0.0328636 9.43808 -0.0328636 9.20377 0.201451C8.96945 0.435766 8.96945 0.815665 9.20377 1.04998L12.5979 4.44409L9.20377 7.8382C8.96945 8.07252 8.96945 8.45242 9.20377 8.68673C9.43808 8.92105 9.81798 8.92105 10.0523 8.68673L13.8707 4.86836ZM0.344238 4.44409V5.04409H13.4464V4.44409V3.84409H0.344238V4.44409Z"
                            fill="#060606"></path>
                    </svg></a>
            </div>
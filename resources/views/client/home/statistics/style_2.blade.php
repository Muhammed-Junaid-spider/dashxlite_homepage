<section class="relative pt-[100px] pb-[100px]">
        <div class="max-w-[880px] mx-auto px-[15px]">
            <div class=" archive-title text-center">
                <div class="max-w-[400px] mx-auto mb-[10px]">
                    <h3>{{ $obj->content['s5_title'] }}</h3>
                </div>
                <h4>{{$obj->content['s5_small_title']}}</h4>
            </div>
            <hr class="my-[32px] opacity-10">
            <div class="    ">
                 @php
                    $title = $obj->content['s5_highlight_title_1'] ?? '';
                    $words = explode(' ', trim($title));
                    $lastWord = array_pop($words); 
                    $before = implode(' ', $words);
                @endphp
                <div class="grid grid-cols-2 gap-[11px]">
                    <div data-aos="fade-up">
                        <div
                            class=" count-list rounded-[12px] border border-[#D8D8D8] p-[20px] flex flex-col justify-between gap-[12px] h-[330px]">
                            <p>{{$obj->content['s5_small_title_2']}}</p>
                            <h4>{{ $before }} <span>{{ $lastWord }}</span></h4>
                        </div>
                    </div>
                    <div data-aos="fade-up">
                        <div
                            class=" count-list rounded-[12px] border border-[#D8D8D8] p-[20px] flex flex-col justify-between gap-[12px] h-[330px]">
                            <p>{{$obj->content['s5_small_title_3']}}.</p>
                            <div>
                                <h4 class="flex items-center gap-[5px] mb-[10px]"> <span>25</span> <b> + </b></h4>
                                <p>{{ $obj->content['s5_small_title_4'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up">
                    <div class="relative mt-[11px] ">
                        <div
                            class="absolute top-0 right-0 z-[1] bg-[#F0F0F0] w-[320px] count-list rounded-[8px] border-[5px] border-[#fff] p-[20px] flex items-center gap-[12px]">
                            <img loading="lazy" width="105" height="31" decoding="async" data-nimg="1"
                                class="ml-[-18px] mb-[-15px]" style="color:transparent" srcset=""
                                src="{{ optional($obj->content['s5_media_id_1'])->file_path }}">
                            <div>
                                <h5 class=""> <b>{{$obj->content['s5_rating']}}</b> <br>{{ $obj->content['s5_small_title_1'] }} </h5>
                            </div>
                        </div>
                        <div
                            class=" count-list with-bg overflow-hidden relative rounded-[12px] border border-[#D8D8D8] p-[20px] flex flex-col justify-between gap-[12px] h-[300px]">
                            <div class="max-w-[430px]">
                                <h3>{{$obj->content['s5_small_title_6']}}</h3>
                            </div>
                            <div class="flex justify-end pr-[120px]">
                                <div>
                                    <h4 class="flex items-center mb-[10px]"> <span>{{ $obj->content['s5_highlight_title_3'] }}&nbsp;</span> <b> + </b></h4>
                                    <p>{{ $obj->content['s5_small_title_7'] }}</p>
                                </div>
                            </div><img loading="lazy" width="110" height="94" decoding="async" data-nimg="1"
                                class="absolute right-[10px] bottom-[10px]" style="color:transparent" srcset=""
                                src="{{ optional($obj->content['s5_media_id_2'])->file_path }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
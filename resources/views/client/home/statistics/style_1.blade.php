<section class="relative pt-[100px] pb-[100px]">
        <div class="max-w-[1080px] mx-auto px-[15px]">
            <div data-aos="fade-up">
                <div class="grid md:grid-cols-2 gap-[20px] archive-title">
                    <div class="max-w-[390px]">
                        <h3>{{ $obj->content['s5_title'] }}</h3>
                    </div>
                    <div class="flex md:justify-end">
                        <div class="max-w-[504px] ">
                            <h4>{{$obj->content['s5_small_title']}} </h4>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-[32px] opacity-10">
            <div class="flex flex-col md:flex-row  gap-[20px]   ">
                 @php
                    $title = $obj->content['s5_highlight_title_1'] ?? '';
                    $words = explode(' ', trim($title));
                    $lastWord = array_pop($words); 
                    $before = implode(' ', $words);
                @endphp
                <div data-aos="fade-up">
                    <div class="flex flex-col gap-[18px]">
                        <div
                            class=" count-list rounded-[12px] border border-[#D8D8D8] p-[20px] flex items-center gap-[12px]">
                            <img alt=" image text" loading="lazy" width="105" height="31" decoding="async" data-nimg="1"
                                class="ml-[-18px] mb-[-15px]" style="color:transparent" srcset=""
                                src="{{ optional($obj->content['s5_media_id_1'])->file_path }}">
                            <div>
                                <h5 class=""> <b>{{$obj->content['s5_rating']}}</b> <br>{{ $obj->content['s5_small_title_1'] }} </h5>
                            </div>
                        </div>
                        <div
                            class=" count-list rounded-[12px] border border-[#D8D8D8] p-[20px] flex flex-col justify-between gap-[12px] h-[330px]">
                            <p>{{$obj->content['s5_small_title_2']}}</p>
                            <h4>{{ $before }} <span>{{ $lastWord }}</span></h4>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up">
                    <div class="flex flex-col gap-[18px]">
                        <div
                            class=" count-list rounded-[12px] border border-[#D8D8D8] p-[20px] flex flex-col justify-between gap-[12px] h-[345px]">
                            <p>{{$obj->content['s5_small_title_3']}}</p>
                            <div>
                                <h4 class="flex items-center gap-[5px] mb-[10px]"> <span>{{ $obj->content['s5_highlight_title_2'] }}</span> <b> + </b></h4>
                                <p>{{ $obj->content['s5_small_title_4'] }}</p>
                            </div>
                        </div>
                        <div
                            class=" count-list rounded-[12px] border border-[#D8D8D8] p-[20px] flex items-center gap-[12px]">
                           @php
                                $title = $obj->content['s5_small_title_5'] ?? '';
                                $words = explode(' ', trim($title));

                                $firstWord = $words[0] ?? ''; 
                                $rest = implode(' ', array_slice($words, 1)); 
                            @endphp

                            <h5 class=""> <span>{{$firstWord}}</span> {{ $rest }} </h5>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up">
                    <div class="flex flex-col gap-[18px] min-w-[300px] h-full lg:min-w-[372px] ">
                        <div
                            class="min-h-[400px] md:min-h-[auto] count-list with-bg overflow-hidden relative rounded-[12px] border border-[#D8D8D8] p-[20px] flex flex-col justify-between gap-[12px] h-[100%]">
                            <p>{{$obj->content['s5_small_title_6']}}</p>
                            <div>
                                <h4 class="flex items-center mb-[10px]"> <span>{{ $obj->content['s5_highlight_title_3'] }}&nbsp;</span> <b> + </b></h4>
                                <p>{{ $obj->content['s5_small_title_7'] }}</p>
                            </div><img alt=" image text" loading="lazy" width="110" height="94" decoding="async"
                                data-nimg="1" class="absolute right-[10px] bottom-[10px]" style="color:transparent"
                                srcset="" src="{{ optional($obj->content['s5_media_id_2'])->file_path }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
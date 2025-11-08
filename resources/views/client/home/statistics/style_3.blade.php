
    <section class="relative pt-[100px] pb-[100px]">
        <div
            class="max-w-[1365px] mx-auto p-[25px] md:p-[38px] bg-[#D7EEF3] rounded-[13px] flex flex-col md:flex-row gap-[40px] xl:gap-[85px]">
            <div class=" archive-title text-left w-full md:w-[400px] flex flex-col justify-between  ">
                <div><span>{{ $obj->content['s5_short_title'] }}</span>
                    <h3 class="mb-[15px] md:mb-0 mt-[15px]">{{ $obj->content['s5_title'] }}</h3>
                </div>
                <div><a class="btn flex items-center justify-between"> Know More <svg width="15" height="15"
                            viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.0183 7.50505L0.927816 7.50505" stroke="white" stroke-width="1.22723"
                                stroke-miterlimit="10" stroke-linecap="round"></path>
                            <path
                                d="M8.26401 13.7722L13.6417 8.39605C13.7595 8.27963 13.853 8.14101 13.9168 7.98821C13.9806 7.83542 14.0134 7.67148 14.0134 7.5059C14.0134 7.34031 13.9806 7.17638 13.9168 7.02358C13.853 6.87078 13.7595 6.73216 13.6417 6.61574L8.26401 1.238"
                                stroke="white" stroke-width="1.22723" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg> </a>
                    <h4 class="mt-[20px]">{{$obj->content['s5_small_title']}} </h4>
                </div>
            </div>
            <div class=" archive-main-bg  w-full md:w-[calc(100%-400px)]  ">
                <div style="opacity: 1; transform: none;">
                     @php
                        $title = $obj->content['s5_highlight_title_1'] ?? '';
                        $words = explode(' ', trim($title));
                        $lastWord = array_pop($words); 
                        $before = implode(' ', $words);
                    @endphp
                    <div>
                        <div class=" count-list2 flex flex-col md:flex-row justify-between gap-[10px] xl:gap-[50px] ">
                            <div class="min-w-[185px]">
                                <h4> {{ $lastWord }} </h4>
                                <h5>{{ $before }}</h5>
                            </div>
                            <div class="max-w-[400px]">
                                <p>{{$obj->content['s5_small_title_2']}}</p>
                            </div>
                        </div>
                        <hr class="mt-[40px] mb-[40px] border-[#2BC9C9]">
                        <div class=" count-list2 flex  flex-col md:flex-row justify-between gap-[10px] xl:gap-[50px] ">
                            <div class="min-w-[185px]">
                                <h4> {{ $obj->content['s5_highlight_title_2'] }} <b>+</b></h4>
                                <h5>{{ $obj->content['s5_small_title_4'] }}</h5>
                            </div>
                            <div class="max-w-[400px]">
                                <p>{{$obj->content['s5_small_title_3']}}</p>
                            </div>
                        </div>
                        <hr class="mt-[40px] mb-[40px] border-[#2BC9C9]">
                        <div class=" count-list2 flex   flex-col md:flex-row justify-between gap-[10px] xl:gap-[50px] ">
                            <div class="min-w-[185px]">
                                <h4> {{ $obj->content['s5_highlight_title_3'] }} </h4>
                            </div>
                            <div class="max-w-[400px]">
                                <p>{{$obj->content['s5_small_title_6']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-[25px] mt-[68px] md:mx-[-30px] xl:mx-[-50px]">
                        <div
                            class="  bg-[#F0F0F0] w-[100%] count-list rounded-[8px] border-[5px] border-[#fff] p-[20px] flex items-center gap-[12px]">
                            <img loading="lazy" width="105" height="31" decoding="async" data-nimg="1"
                                class="ml-[-18px] mb-[-15px]" style="color:transparent" srcset=""
                                src="{{ optional($obj->content['s5_media_id_1'])->file_path }}">
                            <div>
                                <h5 class=""> <b>{{$obj->content['s5_rating']}}</b> <br>{{ $obj->content['s5_small_title_1'] }} </h5>
                            </div>
                        </div>
                         @php
                            $title = $obj->content['s5_small_title_5'] ?? '';
                            $words = explode(' ', trim($title));

                            $firstWord = $words[0] ?? ''; 
                            $rest = implode(' ', array_slice($words, 1)); 
                        @endphp
                        <div
                            class=" count-list3  rounded-[12px] border border-[#D8D8D8] p-[20px] flex items-center justify-center gap-[12px]">
                            <h5 class="text-[#fff]"> <span>{{$firstWord}}</span> {{ $rest }} </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

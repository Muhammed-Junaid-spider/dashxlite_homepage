<header class="absolute left-0 top-0 w-full z-[10]">
        <div class="container flex items-center justify-between  gap-[25px] md:gap-[46px]">
            <div class="nav-img ">
                <a href={{ url('/') }}>
                <img alt="logo text" loading="lazy" width="132" height="51" decoding="async" data-nimg="1"
                    style="color:transparent" src="{{ asset($logoPath) }}"></a>
            </div>
            <div class="flex items-center gap-[20px] md:gap-[46px]">
                <ul class=" flex flex-col md:flex-row md:items-center md:gap-[10px]  lg:gap-[20px] nav ">
                    {{-- <li> <a>home</a> </li>
                    <li> <a class="flex items-center gap-[5px]">Shop <svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="6" viewBox="0 0 9 6" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.52191 5.26107L8.92479 0.859325L8.1171 0.0504913L4.52191 3.64569L0.927852 0.0504913L0.119019 0.859325L4.52191 5.26107Z"
                                    fill="white"></path>
                            </svg></a> </li>
                    <li><a class="flex items-center gap-[5px]">About us <svg xmlns="http://www.w3.org/2000/svg"
                                width="9" height="6" viewBox="0 0 9 6" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.52191 5.26107L8.92479 0.859325L8.1171 0.0504913L4.52191 3.64569L0.927852 0.0504913L0.119019 0.859325L4.52191 5.26107Z"
                                    fill="white"></path>
                            </svg></a> </li>
                    <li><a class="flex items-center gap-[5px]">skin care <svg xmlns="http://www.w3.org/2000/svg"
                                width="9" height="6" viewBox="0 0 9 6" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.52191 5.26107L8.92479 0.859325L8.1171 0.0504913L4.52191 3.64569L0.927852 0.0504913L0.119019 0.859325L4.52191 5.26107Z"
                                    fill="white"></path>
                            </svg> </a></li>
                    <li><a class="flex items-center gap-[5px]">Contact us <svg xmlns="http://www.w3.org/2000/svg"
                                width="9" height="6" viewBox="0 0 9 6" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.52191 5.26107L8.92479 0.859325L8.1171 0.0504913L4.52191 3.64569L0.927852 0.0504913L0.119019 0.859325L4.52191 5.26107Z"
                                    fill="white"></path>
                            </svg> </a></li> --}}

                            @php
                                $lastItem = $menuItems->last(); // store last item
                            @endphp
                          
                       @foreach ($menuItems as $item)
                           @if (!$loop->last)
                            {{-- <div class="dropdown inline-flex items-center space-x-1"> --}}
                            <li class="menu-item dropdown">
                                <a href="{{ url($item->url) }}" class="menu-link">
                                    {{ $item->title }}
                                </a>

                               
                                
                                @if ($item->children->isNotEmpty())
                                    
                                     <button class="dropbtn" type="button">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg> --}}
                                        <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                                    </button>
                                    
                                    <ul class="dropdown-content">
                                        @foreach ($item->children as $child)
                                            
                                            <li><a href="{{ url($child->url) }}">{{ $child->title }}</a></li>
                                        @endforeach
                                    </ul>
                                    
                                    
                                @endif
                            </li>
                            {{-- </div> --}}
                            @endif
                        @endforeach
                </ul>
                
                <a href="{{ url($lastItem->url) }}">
                    <button class=" flex items-center gap-[37px] btn-main"> <!-- -->{{ $lastItem->title }}<!-- --> <svg width="15"
                            height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.0183 7.50505L0.927816 7.50505" stroke="white" stroke-width="1.22723"
                                stroke-miterlimit="10" stroke-linecap="round"></path>
                            <path
                                d="M8.26401 13.7722L13.6417 8.39605C13.7595 8.27963 13.853 8.14101 13.9168 7.98821C13.9806 7.83542 14.0134 7.67148 14.0134 7.5059C14.0134 7.34031 13.9806 7.17638 13.9168 7.02358C13.853 6.87078 13.7595 6.73216 13.6417 6.61574L8.26401 1.238"
                                stroke="white" stroke-width="1.22723" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg></button>
                </a>
                <a class="md:hidden"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32"
                        fill="rgba(255,255,255,1)">
                        <path d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </header>
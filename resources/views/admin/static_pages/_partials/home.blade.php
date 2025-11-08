<fieldset>
    @php
        $data = [
            [
                "heading" => "Banner Content",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of Banner section",
                        "key" => "s1_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"
                    ],
                    ["type" => "text", "label" => "Title of the banner section", "key" => "s1_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Short description of Banner", "key" => "s1_small_title","class"=>"col-md-12"],
                    ["type" => "image", "label" => "Banner Image", "key" => "s1_media_id","class"=>"col-md-12"],
                ]
            ],
            [
                "heading" => "Introduction Section Content",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of Intoduction section",
                        "key" => "s2_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"
                    ],
                    ["type" => "text", "label" => "Small Title", "key" => "s2_small_title","class"=>"col-md-12"],
                    ["type" => "textarea", "label" => "Title of the introduction", "key" => "s2_title","class"=>"col-md-12"],
                    ["type" => "textarea", "label" => "Content of introduction", "key" => "s2_content","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Content 1 on image", "key" => "s2_content_1", "class"=>"col-md-6"],
                    ["type" => "text", "label" => "Content 2 on image", "key" => "s2_content_2", "class"=>"col-md-6"],
                    ["type" => "text", "label" => "Content 3 on image", "key" => "s2_content_3", "class"=>"col-md-6"],
                    ["type" => "image", "label" => "introduction Image", "key" => "s2_media_id","class"=>"col-md-12"],
                ]
            ],
            [
                "heading" => "List of Services/Products",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of Service section",
                        "key" => "s3_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"
                    ],
                    ["type" => "textarea", "label" => "Title of the Service section", "key" => "s3_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Short description of the Service section", "key" => "s3_small_title","class"=>"col-md-12"],
                    ["type" => "image", "label" => "Service main image", "key" => "s3_media_id","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Section name", "key" => "s3_name","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Slide header", "key" => "s3_name_1","class"=>"col-md-12"],
                    [
                        "type" => "button",
                        "label" => "Service Listing",
                        "key" => "s3_button",
                        "href"=>route('admin.listing-items.index',[1]),
                        "hidden_value"=>[
                            "name" => "Service_listing_id",
                            "value" =>"1"
                        ],
                        "class" => "col-md-12"
                    ],
                ]
            ],
            [
                "heading" => "Testimonials",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of Testimonials section",
                        "key" => "s4_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"

                    ],
                    ["type" => "textarea", "label" => "Title for Testimonials", "key" => "s4_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Small description for Testimonials", "key" => "s4_content","class"=>"col-md-12"],
                    ["type" => "image", "label" => "Image for Testimonials", "key" => "s4_media_id","class"=>"col-md-12"],

                    [
                        "type" => "button",
                        "label" => "Testimonials",
                        "key" => "s4_button",
                        "href"=>route('admin.testimonials.index'),
                        "class" => "col-md-12"
                    ],
                ]
            ],
            [
                "heading" => "Statistics",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of Statistics section",
                        "key" => "s5_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"
                    ],
                    ["type" => "text", "label" => "Short title", "key" => "s5_short_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Title for Statistics", "key" => "s5_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Short description for Testimonials", "key" => "s5_small_title","class"=>"col-md-12"],
                    ["type" => "image", "label" => "First-box image", "key" => "s5_media_id_1","class"=>"col-md-12"],
                    ["type" => "text", "label" => "First-box rating", "key" => "s5_rating","class"=>"col-md-12"],
                    ["type" => "text", "label" => "First-box short description", "key" => "s5_small_title_1","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Second-box short description", "key" => "s5_small_title_2","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Second-box higlighted text", "key" => "s5_highlight_title_1","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Third-box Short description", "key" => "s5_small_title_3","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Third-box higlighted text", "key" => "s5_highlight_title_2","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Third-box short text", "key" => "s5_small_title_4","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Fourth-box short text", "key" => "s5_small_title_5","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Fifth-box short description", "key" => "s5_small_title_6","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Fifth-box higlighted text", "key" => "s5_highlight_title_3","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Fifth-box short text", "key" => "s5_small_title_7","class"=>"col-md-12"],
                    ["type" => "image", "label" => "Fifth-box image icon", "key" => "s5_media_id_2","class"=>"col-md-12"],
                ]
            ],
            [
                "heading" => "Contact Form Section Content",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of Contact form section",
                        "key" => "s6_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"
                    ],
                    ["type" => "text", "label" => "Title of the Contact form Section", "key" => "s6_title","class"=>"col-md-12"],
                    ["type" => "image", "label" => "Background image", "key" => "s6_media_id","class"=>"col-md-12"],
                    
                ]
            ],
            [
                "heading" => "FAQ Section",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of FAQ section",
                        "key" => "s7_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"
                    ],
                    ["type" => "text", "label" => "Small Title", "key" => "s7_short_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Title of the FAQ Section", "key" => "s7_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Short description of the FAQ Section", "key" => "s7_small_title","class"=>"col-md-12"],
                    
                ]
            ],
            [
                "heading" => "Contact Section Content",
                "fields" => [
                    [
                        "type" => "dropdown",
                        "label" => "Style of Contact section",
                        "key" => "s8_style",
                        "options" => [
                            "style_1" => "style 1",
                            "style_2" => "style 2",
                            "style_3" => "style 3"
                        ],
                        "class"=>"col-md-12"
                    ],
                    ["type" => "text", "label" => "Title of the Contact Section", "key" => "s8_title","class"=>"col-md-12"],
                    ["type" => "text", "label" => "Short description of the Contact Section", "key" => "s8_small_title","class"=>"col-md-12"],
                    ["type" => "image", "label" => "Image for Contact section", "key" => "s8_media_id","class"=>"col-md-12"],
                    
                ]
            ],
            [
                "heading" => "Bottom Section Content",
                "fields" => [
                    ["type" => "text", "label" => "Bottom content title", "key" => "s9_title","class"=>"col-md-12"],
                    ["type" => "textarea", "label" => "Bottom content First content", "key" => "s9_content_1","class"=>"col-md-12"],
                    ["type" => "textarea", "label" => "Bottom content Below content", "key" => "s9_content_2","class"=>"col-md-12"],
                    
                ]
            ],
        ];
    @endphp

    @foreach($data as $section)
        <h3>{{ $section['heading'] }}</h3>
        {{-- <div class="row"> --}}
        @foreach($section['fields'] as $field)
            @include("admin.static_pages._partials.inputs.{$field['type']}", [
                "label" => $field['label'],
                "key" => $field['key'],
                "value" => $obj->content[$field['key']] ?? ($field['type'] === 'image' ? null : ''),
                "href" => (isset($field['href'])) ? $field['href'] : '',
                "hidden_value" =>  $field['hidden_value'] ?? null,
                "class" => (isset($field['class'])) ? $field['class'] : '',
                "options" => $field['options'] ?? []

            ])
        @endforeach
    @endforeach
</fieldset>

@extends('admin._layouts.fileupload')
@section('content')
<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        @include('admin._partials.profile_menu')

        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <button class="nav-link button-menu-mobile">
                    <i data-feather="menu" class="align-self-center topbar-icon"></i>
                </button>
            </li>

        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->

<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">All brochures</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('admin')}}">Admin</a></li>
                                <li class="breadcrumb-item active">All Widgets</li>
                            </ol>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->
        @include('admin._partials.notifications')
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm"
                    data-validate=true>
                    @csrf
                    <input type="hidden" name="id" value="1">
                    <div class="card">
                        <div class="card-header">
                       Bottom content
                        </div>
                        <div class="card-body row">

                            <div class=" col-md-12">
                                
                                <div class="form-group">
                                    {{-- @php
                                    $media_id1 =
                                    isset($data['address']['media_id1'])?(object)($data['address']['media_id1']):null;
                                    @endphp --}}
                                    {{-- @include('admin.media.set_file', ['file'=>$media_id1, 'title'=>'place',
                                    'popup_type'=>'single_image', 'type'=>'image',
                                    'holder_attr'=>'section[media_id1]', 'id'=>'media_id1',
                                    'display'=> 'horizontal']) --}}
                                    {{-- @php
                                    isset($data['title']['text_id1'])?(object)($data['title']['text_id1']):null;
                                    @endphp --}}
                                    {{-- @php
                                        $content = $data['address'] ?? [];
                                    @endphp --}}
                                   <div class="space-y-4" style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 50vh;">
                                        <!-- Title -->
                                        <div style="text-align: center;">
                                            <div class="block font-medium">
                                                <label for="title">Bottom content Title</label>
                                            </div>
                                            <input type="text" id="title" name="section[title]"
                                                value="{{ old('section.title', $data['bottom_content']['title'] ?? '') }}"
                                                class="w-full border rounded px-3 py-2">
                                        </div>
                                         <div style="text-align: center;">
                                            <div class="block font-medium">
                                                <label for="description">Bottom content description</label>
                                            </div>
                                            <textarea type="text" id="description" name="section[description]" class="editor"
                                                class="w-full border rounded px-3 py-2">{{ old('section.description', $data['bottom_content']['description'] ?? '') }}</textarea>
                                        </div>
                                        
                                        
                                    </div>



                                    
                                    {{-- @php
                                    $media_id2 =
                                    isset($data['address']['media_id2'])?(object)($data['address']['media_id2']):null;
                                    @endphp
                                    @include('admin.media.set_file', ['file'=>$media_id2, 'title'=>'QR',
                                    'popup_type'=>'single_image', 'type'=>'image',
                                    'holder_attr'=>'section[media_id2]', 'id'=>'media_id2',
                                    'display'=> 'horizontal']) --}}

                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-12">
                <form method="POST" action="{{ route('admin.widgets.save') }}" class="p-t-15" id="InputFrm2"
                    data-validate=true>
                    @csrf
                    <input type="hidden" name="id" value="2">
                    <div class="card">
                        <div class="card-header">
                       Background_image
                        </div>
                        <div class="card-body row">

                            <div class=" col-md-12">
                                
                                <div class="form-group">
                                    @php
                                    $media_id3 =
                                    isset($data['background_image']['media_id3'])?(object)($data['background_image']['media_id3']):null;
                                    @endphp
                                    @include('admin.media.set_file', ['file'=>$media_id3, 'title'=>'Backgound Image',
                                    'popup_type'=>'single_image', 'type'=>'image',
                                    'holder_attr'=>'section[media_id3]', 'id'=>'media_id3',
                                    'display'=> 'horizontal'])
                                    {{-- @php
                                    isset($data['title']['text_id1'])?(object)($data['title']['text_id1']):null;
                                    @endphp --}}
                                    {{-- @php
                                        $content = $data['address'] ?? [];
                                    @endphp --}}

                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div><!-- container -->

    @include('admin._partials.footer')
</div>
<!-- end page content -->
@endsection
@section('footer')
@parent

@endsection
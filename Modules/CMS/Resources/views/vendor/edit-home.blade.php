@extends('vendor.layouts.app')
@section('page_title', __('Edit :x', ['x' => __('Pages')]))
@section('css')
    <link rel="stylesheet" href="{{ asset('public/datta-able/plugins/summer-note/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Modules/MediaManager/Resources/assets/css/media-manager.min.css') }}">
@endsection
@section('content')
    <div class="col-sm-12" id="page-container">
        <div class="card">
            <div class="card-header">
                <h5><a href="{{ route('vendor.home') }}">{{ __('Homepage') }}</a> 
                    >> {{ __('Edit') }}
                </h5>
                <div class="card-header-right w-25 d-flex align-items-center">
                    <label class="fw-bold mx-2" for="language">{{ __('Language') }}</label>
                    <x-backend.select2.language id="language" :activeShortName="request()->input('lang', 'en')" />
                </div>
            </div>
            <div class="card-body p-0" id="no_shadow_on_card">
                <div class="col-sm-12 m-t-20 form-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase fw-bold" id="home-tab" data-bs-toggle="tab" href="#home"
                                role="tab" aria-controls="home"
                                aria-selected="true">{{ __(':x Information', ['x' => __('Page')]) }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase fw-bold" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                role="tab" aria-controls="profile" aria-selected="false">{{ __('SEO Fields') }}</a>
                        </li>
                    </ul>
                    <form action='{{ route('vendor.home.update', ['id' => $page->id, 'type' => $page->type, 'lang' => request()->input('lang', 'en')]) }}' method="post"
                        class="form-horizontal" id="userEdit" enctype="multipart/form-data">

                        <div class="col-sm-12 tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token" id="token">
                                <input type="hidden" value="{{ $page->id }}" name="id">
                                <input type="hidden" name="type" value="{{ $page->type }}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group row">
                                            <label for="first_name"
                                                class="col-sm-2 col-form-label require ltr:pe-0 rtl:ps-0">{{ __('Name') }}
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="{{ __('Name') }}"
                                                    class="form-control inputFieldDesign" id="name" name="name" required
                                                    value="{{ !empty(old('name')) ? old('name') : $page->getTranslated('name', request()->input('lang', 'en')) }}"
                                                    oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="first_name"
                                                class="col-sm-2 col-form-label require ltr:pe-0 rtl:ps-0">{{ __('Slug') }}
                                            </label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="{{ __('Slug') }}"
                                                    class="form-control inputFieldDesign" id="slug" name="slug" required
                                                    value="{{ !empty(old('name')) ? old('name') : $page->slug }}"
                                                    oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                                            </div>
                                        </div>
                                        @if ($page->default != 1)
                                            <div class="form-group row">
                                                <label for="Status"
                                                    class="col-sm-2 col-form-label">{{ __('Status') }}</label>
                                                <div class="col-sm-6">
                                                    <input type="hidden" name="status" value="Inactive">
                                                    <div class="switch switch-bg d-inline m-r-10">
                                                        <input class="status status_c" type="checkbox" value="Active"
                                                            name="status" id="is_private"
                                                            {{ $page->status == 'Active' ? 'checked' : '' }}>
                                                        <label for="is_private" class="cr"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="form-group row">
                                            <label for="Status"
                                                class="col-sm-2 col-form-label">{{ __('Default') }}</label>
                                            <div class="col-sm-6 d-flex">
                                                <input type="hidden" name="default" value="0">
                                                <div class="switch switch-bg d-inline m-r-10 mt-1">
                                                    <input class="is_private default_c" type="checkbox"
                                                        value="1" name="default" id="default"
                                                        {{ $page->default == 1 ? 'checked' : '' }}>
                                                    <label for="default" class="cr"></label>
                                                </div>
                                                <div class="mt-2">
                                                    <span class="badge badge-danger mt-1">{{ __('Note') }}!</span>
                                                    <small
                                                        class="mt-1 ltr:ms-2 rtl:me-2">{{ __('Status must be active to make it default.') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-group row">
                                            <label for="meta_title"
                                                class="col-sm-2 text-left col-form-label">{{ __('Meta Title') }}</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control inputFieldDesign" name="meta_title"
                                                    placeholder="{{ __('Meta Title') }}"
                                                    value="{{ !empty(old('meta_title')) ? old('meta_title') : $page->getTranslated('meta_title', request()->input('lang', 'en')) }}">

                                            </div>
                                        </div>
                                        <div class="form-group row mb-1">
                                            <label for="meta_description"
                                                class="col-sm-2 text-left col-form-label">{{ __('Meta Description') }}</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="meta_description">{{ !empty(old('meta_description')) ? old('meta_description') : $page->getTranslated('meta_description', request()->input('lang', 'en')) }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 control-label">{{ __('Meta Image') }}</label>
                                            <div class="col-sm-8">
                                                <div data-toggle="modal" data-target="#exampleModalCenter"
                                                    class="custom-file" data-val="single" id="image-status">
                                                    <input class="form-control up-images attachment d-none" name="attachment"
                                                        id="validatedCustomFile" accept="image/*">
                                                    <label class="custom-file-label overflow_hidden position-relative d-flex align-items-center"
                                                        for="validatedCustomFile">{{ __('Upload image') }}</label>
                                                </div>
                                                <div id="img-container">
                                                    <!-- img will be shown here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="fixSize">
                                                    <a class="cursor_pointer" href='{{ $page->fileUrl() }}'
                                                        data-lightbox="image-1"> <img
                                                            class="profile-user-img img-responsive fixSize"
                                                            src='{{ $page->fileUrl() }}' alt="{{ __('Image') }}"
                                                            class="img-thumbnail attachment-styles"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 px-0">
                                <a href="{{ route('vendor.home') }}"
                                    class="py-2 custom-btn-cancel ltr:me-2 rtl:ms-2">{{ __('Cancel') }}</a>
                                <button class="btn custom-btn-submit page-submit ltr:me-2 rtl:ms-2" type="submit"
                                    id="btnSubmit1">{{ __('Update') }}</button>
                                <a href="{{ route('vendor.builder.edit', ['slug' => $page->slug]) }}"
                                    class="btn btn-warning has-spinner-loader">{{ __('Page Builder') }}</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('mediamanager::image.modal_image')
@endsection
@section('js')
    <script>
        const langUrl = '{{ route('vendor.home.edit', ['slug' => $page->slug]) }}';
    </script>
    <script src="{{ asset('public/dist/js/custom/validation.min.js') }}"></script>
    <script src="{{ asset('Modules/CMS/Resources/assets/js/page.min.js') }}"></script>
    <script src="{{ asset('Modules/CMS/Resources/assets/js/app.min.js') }}"></script>
@endsection

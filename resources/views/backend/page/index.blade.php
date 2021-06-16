@extends('layouts.backend.app')
@push('title') | Edit @endpush
@push('style')

@endpush
@push('summernote')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('.description').summernote({
            placeholder: 'Write here',
            tabsize: 2,
            height: 320,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

        $('.designation').summernote({
            placeholder: 'Write designation here',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['']],
                ['insert', ['link', '', '']],
                ['view', ['', '', '']]
            ]
        });
    </script>
@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <h5 class="mb-0">Page Edit</h5>
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card component-wrapper border-0 rounded shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="mb-0"> {{ $page->name }} </h5>
                    </div>

                    <div class="p-4">
                        <form method="post" action="{{ route('page.update', $page) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Page Name <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" value="{{ $page->name }}">
                                        @error('name')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Page Title <span class="text-danger">*</span></label>
                                        <input name="title" id="title" type="text" class="form-control" placeholder="Full title" value="{{ $page->title }}">
                                        @error('title')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Image</label>
                                        <input name="meta_image" id="meta_image" type="file" accept="image/*" class="form-control">
                                        @error('meta_image')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description</label>
                                        <textarea name="meta_description" id="meta_description" rows="4" class="form-control">{!! $page->meta_description !!}</textarea>
                                        @error('meta_description')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Meta Keywords</label>
                                        <textarea name="meta_keywords" id="meta_keywords" rows="2" class="form-control">{!! $page->meta_keywords !!}</textarea>
                                        @error('meta_keywords')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" id="status" @if($page->active) value="1" checked="" @endif>
                                            <label class="form-check-label" for="status">Check for status activated</label>
                                        </div>
                                        @error('status')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="UPDATE NOW">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


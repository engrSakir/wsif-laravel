@extends('layouts.backend.app')
@push('title') | Edit Basic Information @endpush
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
            height: 150,
            toolbar: [
                ['style', ['']],
                ['font', ['bold', '', 'clear']],
                ['color', ['color']],
                ['para', ['', '', 'paragraph']],
                ['table', ['']],
                ['insert', ['link', '', '']],
                ['view', ['', 'codeview', '']]
            ]
        });
    </script>
@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <h5 class="mb-0">Edit Home</h5>
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card component-wrapper border-0 rounded shadow">
                    <div class="p-4">
                        <form method="post" action="{{ route('basic.update') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta author</label>
                                        <input name="meta_author" id="meta_author" type="text" class="form-control" value="{{ get_static_option('meta_author') }}">
                                        @error('meta_author')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta keywords</label>
                                        <input name="meta_keywords" id="meta_keywords" type="text" class="form-control" value="{{ get_static_option('meta_keywords') }}">
                                        @error('meta_keywords')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta title</label>
                                        <input name="meta_title" id="meta_title" type="text" class="form-control" value="{{ get_static_option('meta_title') }}">
                                        @error('meta_title')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta description</label>
                                        <input name="meta_description" id="meta_description" type="text" class="form-control" value="{{ get_static_option('meta_description') }}">
                                        @error('meta_description')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Meta image</label>
                                        <input name="meta_image" id="meta_image" type="file" class="form-control" value="{{ get_static_option('meta_image') }}">
                                        @error('meta_image')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <hr>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Facebook</label>
                                        <input name="facebook" id="facebook" type="text" class="form-control" value="{{ get_static_option('facebook') }}">
                                        @error('facebook')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Instagram</label>
                                        <input name="instagram" id="instagram" type="text" class="form-control" value="{{ get_static_option('instagram') }}">
                                        @error('instagram')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Twitter</label>
                                        <input name="twitter" id="twitter" type="text" class="form-control" value="{{ get_static_option('twitter') }}">
                                        @error('twitter')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Linkedin</label>
                                        <input name="linkedin" id="linkedin" type="text" class="form-control" value="{{ get_static_option('linkedin') }}">
                                        @error('linkedin')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <hr>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" id="email" type="text" class="form-control" value="{{ get_static_option('email') }}">
                                        @error('email')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Office name one</label>
                                        <input name="office_name_one" id="office_name_one" type="text" class="form-control" value="{{ get_static_option('office_name_one') }}">
                                        @error('office_name_one')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Office address one</label>
                                        <input name="office_address_one" id="office_address_one" type="text" class="form-control" value="{{ get_static_option('office_address_one') }}">
                                        @error('office_address_one')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Office name two</label>
                                        <input name="office_name_two" id="office_name_two" type="text" class="form-control" value="{{ get_static_option('office_name_two') }}">
                                        @error('office_name_two')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Office address two</label>
                                        <input name="office_address_two" id="office_address_two" type="text" class="form-control" value="{{ get_static_option('office_address_two') }}">
                                        @error('office_address_two')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Office name three</label>
                                        <input name="office_name_three" id="office_name_three" type="text" class="form-control" value="{{ get_static_option('office_name_three') }}">
                                        @error('office_name_three')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Office address three</label>
                                        <input name="office_address_three" id="office_address_three" type="text" class="form-control" value="{{ get_static_option('office_address_three') }}">
                                        @error('office_address_three')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Footer note</label>
                                        <textarea name="footer_note" id="footer_note" rows="4" class="form-control description">{!! get_static_option('footer_note') !!}</textarea>
                                        @error('footer_note')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Footer credit</label>
                                        <textarea name="footer_credit" id="footer_credit" rows="4" class="form-control description">{!! get_static_option('footer_credit') !!}</textarea>
                                        @error('footer_credit')
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


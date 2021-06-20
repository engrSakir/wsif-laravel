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
                ['view', ['codeview', '', '']]
            ]
        });
    </script>
@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <h5 class="mb-0">Edit</h5>
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card component-wrapper border-0 rounded shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="mb-0"> Edit for: {{ $team->name }} </h5>
                    </div>

                    <div class="p-4">
                        <form method="post" action="{{ route('team.update', $team) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" value="{{ $team->name }}">
                                        @error('name')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Image <span class="text-danger">*</span></label>
                                        <input name="image" id="image" type="file" accept="image/*" class="form-control">
                                        @error('image')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        @foreach(\App\Models\Flag::all() as $flag)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="flag" id="flag-{{ $loop->iteration }}" value="{{ $flag->id }}" @if($team->flag_id == $flag->id) checked @endif>
                                                <label class="form-check-label" for="flag-{{ $loop->iteration }}">
                                                    <img id="showFlag" src="{{ $flag->url }}" />
                                                </label>
                                            </div>
                                        @endforeach
                                        @error('flag')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">LinkedIn</label>
                                        <input name="linkedin" id="linkedin" class="form-control" placeholder="Linkedin url" value="{{ $team->linkedin }}">
                                        @error('linkedin')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Designation</label>
                                        <textarea name="designation" id="designation" rows="4" class="form-control designation">{!! $team->designation !!}</textarea>
                                        @error('designation')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" id="description" rows="4" class="form-control description">{!! $team->description !!}</textarea>
                                        @error('description')
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
                                            <input class="form-check-input" type="checkbox" name="status" id="status" @if($team->active) value="1" checked="" @endif>
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


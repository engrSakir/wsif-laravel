@extends('layouts.backend.app')
@push('title') | Show @endpush
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
    </script>
@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card component-wrapper border-0 rounded shadow">
                    <div class="p-4 border-bottom">
                        <h5 class="mb-0"> Contact us message details  </h5>
                    </div>

                    <div class="p-4">
                        <form method="post" action="{{ route('contactMessage.update', $contactMessage) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name </label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" readonly value="{{ $contactMessage->name }}">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input name="email" id="email" class="form-control" placeholder="Email address" readonly value="{{ $contactMessage->email }}">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input name="subject" id="subject" class="form-control" placeholder="Subject" readonly value="{{ $contactMessage->subject }}">
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Comments</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" readonly>{!! $contactMessage->comments !!}</textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Send email from <span class="text-danger">*</span></label>
                                        <input name="send_email_from" id="send_email_from" class="form-control" placeholder="you@example.com" value="{{ auth()->user()->email }}">
                                        @error('send_email_from')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div><!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email body <span class="text-danger">*</span></label>
                                        <textarea name="description" id="description" rows="4" class="form-control description"></textarea>
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
                                            <input class="form-check-input" type="checkbox" name="process_completed" id="process_completed" @if($contactMessage->process_completed) value="1" checked="" @endif>
                                            <label class="form-check-label" for="status">Check for status completed</label>
                                        </div>
                                        @error('process_completed')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="submit" id="submit" name="send" class="btn btn-primary" value="SEND EMAIL">
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


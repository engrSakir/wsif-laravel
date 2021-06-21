@extends('layouts.backend.app')
@push('title') | Messages @endpush
@push('style')

@endpush
@push('script')

@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <div class="row">
            <div class="col-xl-8 col-lg-6">
                <h5 class="mb-0">Messages List</h5>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-12 mt-4 pt-2">
                <div class="table-responsive shadow rounded">
                    <table class="table table-center bg-white mb-0">
                        <thead>
                        <tr>
                            <th class="border-bottom py-2">#</th>
                            <th class="border-bottom py-2" style="min-width: 250px;">Name</th>
                            <th class="border-bottom py-2">Email</th>
                            <th class="border-bottom py-2" style="min-width: 150px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td class="py-3">
                                <a href="#" class="text-primary">
                                    <div class="d-flex align-items-center">
                                        <span class="ms-2">{{ $message->name }}</span>
                                    </div>
                                </a>
                            </td>
                            <td>{{ $message->email }}</td>
                            <td class="text-end">
                                <a href="{{ route('contactMessage.show', $message) }}" class="btn btn-soft-primary"> Show </a>
                                <button class="btn btn-soft-danger delete-btn" value="{{ route('contactMessage.destroy', $message) }}"> Delete </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


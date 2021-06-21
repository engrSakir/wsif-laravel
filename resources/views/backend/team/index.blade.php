@extends('layouts.backend.app')
@push('title') | Team @endpush
@push('style')

@endpush
@push('script')

@endpush

@section('content')
    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
        <div class="row">
            <div class="col-xl-8 col-lg-6">
                <h5 class="mb-0">Team List</h5>
            </div><!--end col-->
            <div class="col-xl-4 col-lg-6 mt-4 mt-lg-0">
                <div class="justify-content-md-end">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-12 col-md-auto mt-4 mt-sm-0">
                            <div class="d-grid">
                                <a href="{{ route('team.create') }}" class="btn btn-primary">+ Add New One</a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
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
                            <th class="border-bottom py-2">Created At</th>
                            <th class="border-bottom py-2" style="min-width: 150px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teams as $team)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td class="py-3">
                                <a href="#" class="text-primary">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($team->image) }}" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <span class="ms-2">{{ $team->name }}</span> &nbsp; <img src="{{ $team->flag->url ?? '' }}" alt="">
                                    </div>
                                </a>
                            </td>
                            <td>{{ $team->created_at->format('h:i A d-M-Y') }}</td>
                            <td class="text-end">
                                <a href="{{ route('team.edit', $team) }}" class="btn btn-soft-primary"> Edit </a>
                                <button class="btn btn-soft-danger delete-btn" value="{{ route('team.destroy', $team) }}"> Delete </button>
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


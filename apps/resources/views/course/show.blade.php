@extends('layout.master.backend.index')
@push('title', 'Detail')
@push('subtitle', 'Detail')
@push('description', 'Detail course')
@push('tools')
    @include('layout.public-component.back-button', ['url' => url('course')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <div class="row d-flex justify-content-center align-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-inner">
                    <div class="mb-4">
                        <label class="form-label required">Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $course->name }}" readonly>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label required">Category</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $course->category->name }}" readonly>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label required">Type</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control text-capitalize" value="{{ $course->type }}" readonly>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label required">Status</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control text-capitalize" value="{{ $course->status }}" readonly>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label required">Created</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $course->created_time() }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




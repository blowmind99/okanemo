@extends('layout.master.backend.index')
@push('title', 'Detail')
@push('subtitle', 'Detail')
@push('description', 'Detail permission')
@push('tools')
    @include('layout.public-component.back-button', ['url' => url('permission')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <div class="row d-flex justify-content-center align-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-inner">
                    <div class="mb-4">
                        <label class="form-label">Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $permission->name }}" readonly>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Created</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $permission->created_at }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




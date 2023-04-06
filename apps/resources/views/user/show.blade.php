@extends('layout.master.backend.index')
@push('title', 'Detail')
@push('subtitle', 'Detail')
@push('description', 'Detail user')
@push('tools')
    @include('layout.public-component.back-button', ['url' => url('user')])
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
                            <input type="text" class="form-control" value="{{ $user->name }}" readonly>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label required">Email</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label required">Role</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control text-capitalize" value="{{ $user->roles->first()->name }}" readonly>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label required">Created</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control text-capitalize" value="{{ $user->created_time() }}" readonly>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection




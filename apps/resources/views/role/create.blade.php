@extends('layout.master.backend.index')
@push('title', 'Create')
@push('subtitle', 'Create')
@push('description','Create role')
@push('tools')
    @include('layout.public-component.back-button', ['url' => url('role')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <form action="{{ url('role') }}" method="post" class="form-input">
        @csrf
        @method('POST')
        <div class="card">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Add role</h5>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <label class="form-label required">Role name</label>
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control mt-2 @error('name') error @enderror" value="{{ old('name') }}" placeholder="input role name">
                                <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px">string | maks : 225 </span>
                                @include('layout.public-component.error-input', ['name' => 'name'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-inner">
                <div class="card-head">
                    <h5 class="card-title">Permission</h5>
                </div>
                @include('layout.public-component.error-input', ['name' => 'permission'])
                <div class="row g-gs mt-3">
                    @foreach($permissions as $permission)
                        <div class="col-12 col-md-3 mt-2">
                            <div class="custom-control custom-control-md custom-checkbox">
                                <input type="checkbox" name="permission[]" class="custom-control-input checkInput" id="checkbox-{{$permission->name}}" value="{{$permission->id}}">
                                <label class="custom-control-label text-soft letter-space-1 text-capitalize" for="checkbox-{{$permission->name}}">{{ $permission->name }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary me-2"><em class="icon ni ni-save"></em><span>Simpan</span></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection



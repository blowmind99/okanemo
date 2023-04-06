@extends('layout.master.backend.index')
@push('title', 'Create')
@push('subtitle', 'Create')
@push('description', 'Create category')
@push('tools')
    @include('layout.public-component.back-button', ['url' => url('category')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <form action="{{ url('category') }}" method="post" class="form-input" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-inner">
                        <div class="mb-4">
                            <label class="form-label required">Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control @error('name') error @enderror" value="{{ old('name') }}" placeholder="Please input name" required>
                                <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> string | min : 8 | maks : 225 </span>
                                @include('layout.public-component.error-input', ['name' => 'name'])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary"><em class="icon ni ni-save"></em><span>Save</span></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection




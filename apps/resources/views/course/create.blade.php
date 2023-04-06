@extends('layout.master.backend.index')
@push('title', 'Create')
@push('subtitle', 'Create')
@push('description', 'Create course')
@push('tools')
    @include('layout.public-component.back-button', ['url' => url('course')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <form action="{{ url('course') }}" method="post" class="form-input">
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

                        <div class="mb-4">
                            <label class="form-label required">Category</label>
                            <div class="form-control-wrap @error('category_id') border border-danger rounded @enderror">
                                <select name="category_id" class="form-control js-select2" required>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" {{ (old('category_id') == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> data category </span>
                            @include('layout.public-component.error-input', ['name' => 'category_id'])
                        </div>

                        <div class="mb-4">
                            <label class="form-label required">Type</label>
                            <div class="form-control-wrap @error('type') border border-danger rounded @enderror">
                                <select name="type" class="form-select js-select2">
                                    <option value="self" {{old('type', 'self') == 'self' ? 'selected' : ''}}>Self learning</option>
                                    <option value="online" {{old('type', 'online') == 'online' ? 'selected' : ''}}>Online learning</option>
                                    <option value="offline" {{old('type', 'offline') == 'offline' ? 'selected' : ''}}>Offline learning</option>
                                </select>
                            </div>
                            <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> course type </span>
                            @include('layout.public-component.error-input', ['name' => 'type'])
                        </div>

                        <div class="mb-4">
                            <label class="form-label required">Description</label>
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <textarea name="description" class="form-control no-resize @error('description') error @enderror" id="default-textarea">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> string | min : 25 </span>
                            @include('layout.public-component.error-input', ['name' => 'description'])
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




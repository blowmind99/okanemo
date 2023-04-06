@extends('layout.master.backend.index')
@push('title', 'Create')
@push('subtitle', 'Create')
@push('description', 'Create enrollment for a user')
@push('tools')
    @include('layout.public-component.back-button', ['url' => url('enrollment')])
@endpush
@section('content')
<div class="nk-block nk-block-lg">
    <form action="{{ url('enrollment') }}" method="post" class="form-input">
        @csrf
        @method('post')
        <div class="row d-flex justify-content-center align-content-center">
            <div class="col-sm-12 col-md-6">
                <div class="card">
                    <div class="card-inner">
                        <div class="mb-4">
                            <label class="form-label required">Users</label>
                            <div class="form-control-wrap @error('users') border border-danger rounded @enderror">
                                <select name="users[]" class="form-control js-select2" multiple data-search="on" required>
                                    @foreach ($users as $user)
                                        <option value="{{$user->id}}" {{ (old('users') == $user->id) ? 'selected' : '' }}>{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> you can enroll multiple user </span>
                            @include('layout.public-component.error-input', ['name' => 'users'])
                        </div>

                        <div class="mb-4">
                            <label class="form-label required">Course</label>
                            <div class="form-control-wrap @error('course') border border-danger rounded @enderror">
                                <select name="course" class="form-control js-select2" data-search="on" required>
                                    @foreach ($courses as $course)
                                        <option value="{{$course->id}}" {{ (old('course') == $course->id) ? 'selected' : '' }}>{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="d-flex justify-content-end mt-1 letter-space-1 fs-12px"> select course </span>
                            @include('layout.public-component.error-input', ['name' => 'course'])
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




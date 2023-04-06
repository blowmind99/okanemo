@extends('layout.master.backend.index')
@push('title', 'User')
@push('subtitle', 'User')
@push('description', 'Data User')
@push('tools')
    <a href="{{ url('user/create') }}" class="btn btn-primary letter-space-1">
        <em class="icon ni ni-plus-sm"></em>
        <span>Add User</span>
    </a>
@endpush
@section('content')
<div class="nk-block">
    <table class="datatable-init nowrap nk-tb-list is-separate" data-auto-responsive="false">
        <thead>
            <tr class="nk-tb-item nk-tb-head letter-space-1">
                <th class="nk-tb-col nk-tb-col-check ff-mono"><span>No</span></th>
                <th class="nk-tb-col ff-mono"><span>Name</span></th>
                <th class="nk-tb-col tb-col-md ff-mono"><span>email</span></th>
                <th class="nk-tb-col tb-col-md ff-mono"><span>role</span></th>
                <th class="nk-tb-col nk-tb-col-tools">
                    <ul class="nk-tb-actions gx-1 my-n1">
                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                    </ul>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="nk-tb-item">
                    <td class="nk-tb-col nk-tb-col-check">
                        <span> {{ $loop->iteration }} </span>
                    </td>
                    <td class="nk-tb-col">
                        <span class="tb-lead letter-space-1">{{ $user->name }}</span>
                    </td>
                    <td class="nk-tb-col tb-col-md">
                        <span class="letter-space-1">{{ $user->email }}</span>
                    </td>
                    <td class="nk-tb-col tb-col-md">
                        <span class="letter-space-1 text-capitalize">{{ $user->roles->first()->name }}</span>
                    </td>
                    <td class="nk-tb-col nk-tb-col-tools">
                        <ul class="nk-tb-actions gx-1 my-n1">
                            <li class="me-n1">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <ul class="link-list-opt no-bdr ff-mono letter-space-1">
                                            <li><a href="{{ 'user/'.$user->id }}"><em class="icon ni ni-eye"></em><span>Detail</span></a></li>
                                            <li><a href="{{ 'user/'.$user->id.'/edit' }}"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                            <li><a data-bs-toggle="modal" data-bs-target="#delete{{ $user->id }}"><em class="icon ni ni-trash-empty"></em><span>Hapus</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </td>
                </tr>
                @include('layout.public-component.delete', ['id' => 'delete'.$user->id , 'url' => url('user/'.$user->id)])
            @endforeach
        </tbody>
    </table>
</div>
@endsection




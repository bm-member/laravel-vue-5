@extends('layouts.adminlte')

@section('title', 'User List')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="/admin/user/create" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Create User
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User list</h3>
    
                    <div class="card-tools">
                        <form>
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" value="{{ request('search') }}" class="form-control float-right" placeholder="Search">
                            
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ url("/admin/user/$user->id/edit") }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ url("/admin/user/$user->id/delete") }}" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{ $users->links() }}
        </div>
    </div>
</div>

@endsection


@section('style')
    <style>
        /* .pagination {
            justify-content: center;
        } */
    </style>
@endsection
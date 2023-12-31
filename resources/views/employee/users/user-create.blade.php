@extends('admin.master')

@section('page-title')
    User Create
@endsection

@section('content')
    <main class="main-content t-mt-15 t-mb-15">
        <div class="container-fluid px-3">

            <div class="row g-3">
                <h4>Create User</h4>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                <div class="card p-3">
                    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control mb-3" placeholder="Name">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control mb-3" placeholder="Email">
                        <input type="file" name="profile_photo" class="form-control mb-3" id="">
                        <div class="my-3">
                            <label for="is_admin">User Role</label>
                            <select name="is_admin" class="form-control" id="is_admin">
                            <option value="admin">Admin</option>
                            <option value="employee" selected='selected'>Employee</option>
                        </select>
                        </div>
                        <input type="password" name="password" class="form-control mb-3" placeholder="Password">
                        <input type="password" name="password_confirmation" class="form-control mb-3"
                            placeholder="Confirm Password">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>



            </div>





        </div>
    </main>
@endsection

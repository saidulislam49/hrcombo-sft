@extends('admin.master')

@section('page-title')
    Employee
@endsection

@section('content')
    <main class="main-content t-mt-15 t-mb-15">
        <div class="container-fluid px-3">
            <div class="row g-3">
                <div class="col-lg-12 col-xxl-12">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="cards__header t-pt-30 t-pb-30 px-3 px-md-4 border-bottom">
                            <h6 class="mt-0 mb-0 text-capitalize">
                                Employees
                            </h6>

                        </div>
                        <div class="cards__body t-pt-30 px-3 px-md-4 t-pb-30">

                            <div class="table-responsive" style="min-height: 300px">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Employee ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">User Role</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>EMP-1</td>
                                            <td>Jammie Lebsack</td>
                                            <td>jammie@gmail.com</td>
                                            <td>
                                                <select class="form-select">
                                                    <option selected>Admin</option>
                                                    <option value="1">Employee</option>
                                                    <option value="2">Manager</option>
                                                </select>
                                            </td>
                                            <td>Active</td>
                                            <td>
                                                <!-- Example single danger button -->
                                                <div class="btn-group action_dots">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <button class="dropdown-item" type="button"><i
                                                                class="bx bx-show"></i> View</button>
                                                        <button class="dropdown-item" type="button"><i
                                                                class="bx bx-edit"></i> Edit</button>
                                                        <button class="dropdown-item" type="button"><i
                                                                class="bx bx-trash-alt"></i> Delete</button>
                                                    </div>
                                                </div>


                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('admin.master')

@section('page-title')
    Leave
@endsection

@section('content')
    <main class="main-content t-mt-15 t-mb-15">
        <div class="container-fluid px-3">
            <div class="row g-3">
                <div class="col-lg-12 col-xxl-12">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="cards__header t-pt-30 t-pb-30 px-3 px-md-4 border-bottom">
                            <h6 class="mt-0 mb-0 text-capitalize">
                                Leaves
                            </h6>

                        </div>
                        <div class="cards__body t-pt-30 px-3 px-md-4 t-pb-30">

                            <div class="table-responsive" style="min-height: 300px">
                                <table class="table">
                                    <thead class="table-light">
                                        <tr role="row">
                                            <th><input type="checkbox"></th>
                                            <th colspan="1" style="width: 320px">Employee</th>
                                            <th>Leave Date</th>
                                            <th>Duration</th>
                                            <th>Leave Status</th>
                                            <th>Leave Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="row-12" role="row" class="odd">
                                            <td><input type="checkbox"></td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <a href="#" class="position-relative"
                                                        style="width: 20%; margin-right: 10px">
                                                        <img src="{{ asset('assets/img/avatar.png') }}"
                                                            class="mr-2 taskEmployeeImg rounded-circle" alt="Emaployee">
                                                    </a>


                                                    <div class="">
                                                        <h5 class="mb-0 f-12">
                                                            <a href="#" class="text-darkest-grey ">Dr. Abigail O'Keefe
                                                                DVM</a>
                                                        </h5>
                                                        <p class="mb-0 f-12 text-dark-grey">
                                                            Senior
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>04-01-2023</td>
                                            <td>
                                                <div class="media-body">
                                                    <span class="mb-0 f-13 "> Full Day </span><br>
                                                </div>
                                            </td>
                                            <td>Approved </td>
                                            <td><span class="badge badge-success"
                                                    style="background-color:#16813D">Casual</span></td>
                                            <td class=" text-right pr-20">
                                                <div class="task_view">

                                                    <div class="dropdown">
                                                        <a class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle"
                                                            type="link" id="dropdownMenuLink-41" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="icon-options-vertical icons"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink-41" tabindex="0"
                                                            x-placement="bottom-end"
                                                            style="position: absolute; transform: translate3d(-137px, 26px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                            <a href="#" class="dropdown-item">View</a><a
                                                                data-leave-id="12" data-unique-id="" data-duration="single"
                                                                class="dropdown-item delete-table-row" href="javascript:;"> Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- @foreach ($employees as $item)
                                            <tr>
                                                <td>EMP-{{ $item->id }}</td>
                                                <td>{{ $item->user->name ?? '' }}</td>
                                                <td>{{ $item->user->email ?? '' }}</td>

                                                <td>{{ $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <!-- Example single danger button -->
                                                    <div class="btn-group action_dots">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <button class="dropdown-item" type="button"><i
                                                                    class="bx bx-show"></i> <a href="{{ route('admin.employees.show', $item->id) }}">View</a></button>
                                                            <button class="dropdown-item" type="button"><i
                                                                    class="bx bx-edit"></i> Edit</button>
                                                            <button class="dropdown-item" type="button"><i
                                                                    class="bx bx-trash-alt"></i> Delete</button>
                                                        </div>
                                                    </div>


                                                </td>
                                            </tr>
                                        @endforeach --}}
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

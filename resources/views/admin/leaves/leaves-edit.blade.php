@extends('admin.master')

@section('page-title')
    Leave Update
@endsection

@section('content')
    <main class="main-content t-mt-15 t-mb-15">
        <div class="container-fluid px-3">
            <div class="row g-3">
                <div class="col-lg-12 col-xxl-12">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="cards__header t-pt-20 t-pb-20 px-3 px-md-4 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h6 class="mt-0 mb-0 text-capitalize">Update Leave</h6>
                                </div>
                                <div class="col-md-6 text-end">
                                    <a href="{{ route('admin.leaves') }}" class="btn btn-primary"><i class="bx bx-plus"></i>
                                        Leave List</a>
                                </div>
                            </div>
                        </div>

                        <div class="cards__body t-pt-10 px-3 px-md-4 t-pb-30">

                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="employ_id">Employees</label>
                                            <select name="employ_id" class="form-control select2" id="employ_id">
                                                <option selected='selected' disabled>Select Employee</option>
                                                <option value="employ_id">Employee 1</option>
                                                <option value="employ_id">Employee 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="leave_id">Leave Type</label>
                                            <div class="input-group">
                                                <select name="leave_id" class="form-control select2" id="leave_id"
                                                    aria-describedby="leave_id">
                                                    <option selected='selected' disabled>Select Leave Type</option>
                                                    <option value="leave_id">Type 1</option>
                                                    <option value="leave_id">Type 2</option>
                                                </select>
                                                {{-- <button class="btn btn-outline-secondary add_leave_type" type="button" >Button</button> --}}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="status">Status</label>
                                            <select name="status" class="form-control select2" id="status">
                                                <option selected='selected' disabled>Select Status</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Approved">Approved</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group my-3">
                                            <label class="f-14 text-dark-grey mb-12 w-100" for="usr">Select
                                                Duration</label>
                                            <div class="d-block d-lg-flex d-md-flex">
                                                <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                                    <input type="radio" value="single" class="custom-control-input"
                                                        id="duration_single" name="duration" checked=""
                                                        autocomplete="off">
                                                    <label class="custom-control-label pt-1 cursor-pointer"
                                                        for="duration_single">Full Day</label>
                                                </div>
                                                <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                                    <input type="radio" value="multiple" class="custom-control-input"
                                                        id="duration_multiple" name="duration" autocomplete="off">
                                                    <label class="custom-control-label pt-1 cursor-pointer"
                                                        for="duration_multiple">Multiple</label>
                                                </div>

                                                <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                                    <input type="radio" value="first_half" class="custom-control-input"
                                                        id="half_day_first" name="duration" autocomplete="off">
                                                    <label class="custom-control-label pt-1 cursor-pointer"
                                                        for="half_day_first">First Half</label>
                                                </div>
                                                <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                                    <input type="radio" value="second_half" class="custom-control-input"
                                                        id="half_day_second" name="duration" autocomplete="off">
                                                    <label class="custom-control-label pt-1 cursor-pointer"
                                                        for="half_day_second">Second Half</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="duration_dates">Duration Date</label>
                                            <input type="date" class="form-control" name="duration_dates">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="my-3">
                                            <label class="mb-2" for="reason">Reason</label>
                                            <textarea name="reason" id="reason" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- modal for creating leave type --}}
@endsection

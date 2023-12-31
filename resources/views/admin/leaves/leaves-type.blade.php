@extends('admin.master')

@section('page-title')
    Leave Type Create
@endsection

@section('content')
    <main class="main-content t-mt-15 t-mb-15">
        <div class="container-fluid px-3">
            <div class="row g-3 justify-content-center">
                <div class="col-lg-8 col-xxl-8">
                    <div class="cards t-bg-white t-shadow h-100">
                        <div class="cards__header t-pt-20 t-pb-20 px-3 px-md-4 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h6 class="mt-0 mb-0 text-capitalize">New Leave Type</h6>
                                </div>
                                <div class="col-md-6 text-end">
                                    <a href="#" class="btn btn-primary"><i class="bx bx-plus"></i>
                                        Leave Type List</a>
                                </div>
                            </div>
                        </div>

                        <div class="cards__body t-pt-10 px-3 px-md-4 t-pb-30">

                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="employ_id">Leave Type *</label>
                                             <input type="text" class="form-control" name="type_name" placeholder="Type Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="status">Status</label>
                                            <select name="status" class="form-control select2" id="status">
                                                <option selected='selected' disabled>Select Status</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Unpaid">Unpaid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="maximum_limit">Maximum Limits</label>
                                             <input type="text" class="form-control" name="maximum_limit">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="monthly_limit">Monthly Limits</label>
                                             <input type="text" class="form-control" name="monthly_limit">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="my-3">
                                            <label class="mb-2" for="color_code">Color Code</label>
                                             <input type="text" class="form-control" name="color_code" placeholder="Color code here">
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

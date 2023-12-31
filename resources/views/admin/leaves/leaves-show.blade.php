@extends('admin.master')

@section('page-title')
    Leave Details
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
                                    <h6 class="mt-0 mb-0 text-capitalize">Leave Details of Dr. Abigail O'Keefe DVM</h6>
                                </div>
                                <div class="col-md-6 text-end">
                                    <a href="{{ route('admin.leaves') }}" class="btn btn-primary"><i class='bx bx-list-ul' ></i> Leave List</a>
                                </div>
                            </div>
                        </div>

                        <div class="cards__body t-pt-30 px-3 px-md-4 t-pb-30">

                            <div class="row py-2">
                                <div class="col-md-3">
                                    <h5>Applicant Name</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>Dr. Abigail O'Keefe DVM </p>
                                </div>
                            </div>

                            <div class="row py-2">
                                <div class="col-md-3">
                                    <h5>Designation</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>Senior Software Engeneer</p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3">
                                    <h5>Leave Date</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>10-12-2023</p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3">
                                    <h5>Leave Type</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>Casual</p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3">
                                    <h5>Paid</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>Yes</p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3">
                                    <h5>Reason for absence</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>
                                        WILL do next! As for pulling me out of the Shark, But, when the White Rabbit, with a sigh: 'he taught Laughing and Grief, they used to read fairy-tales, I fancied that kind of serpent, that's all I.</p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-3">
                                    <h5>Status</h5>
                                </div>
                                <div class="col-md-9">
                                    <p>Approved</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    {{-- modal for creating leave type --}}
@endsection

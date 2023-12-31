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
                                Single Employee Information
                            </h6>

                        </div>
                        <div class="cards__body t-pt-30 px-3 px-md-4 t-pb-30">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <img class="image-responsive rounded" src="{{ $employee->user->profile_picture ? asset('storage').'/'.$employee->user->profile_picture : 'https://placehold.co/600x400?text=Saidul Islam' }}" alt="Employee Profile">
                                        </div>
                                        <div class="col-8">
                                            <div class="employee-name">{{ $employee->user->name ?? '' }}</div>
                                            <div class="employee-designation">{{  $employee->designation->designation_name ?? '' }}</div>
                                            {!! $employee->status == 1 ? '<div class="employee-status text-success">Active</div>' : '<div class="employee-status text-danger">InActive</div>' !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">About</div>
                                        <div class="col-8">{{ $employee->about }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="profile-info">Profile Info</h2>
                                    <div class="row">
                                        <div class="col-2">Employee ID</div>
                                        <div class="col-8">EMP-{{ $employee->id }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Full Name</div>
                                        <div class="col-8">{{ $employee->user->name ?? '' }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Designation</div>
                                        <div class="col-8">{{ $employee->designation->designation_name ?? '' }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Department</div>
                                        <div class="col-8">{{ $employee->department->department_name ?? '' }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Gender</div>
                                        <div class="col-8">{{ $employee->gender }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Date of Birth</div>
                                        <div class="col-8">{{ $employee->birth_date }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Country</div>
                                        <div class="col-8">{{ $employee->country->country_name ?? '' }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Mobile Number</div>
                                        <div class="col-8">{{ $employee->mobile }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Joining Date</div>
                                        <div class="col-8">{{ $employee->joining_date }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Language</div>
                                        <div class="col-8">{{ $employee->language->language_name ?? '' }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Address</div>
                                        <div class="col-8">{{ $employee->address }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Hour Rate</div>
                                        <div class="col-8">{{ $employee->hourly_rate }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Slack Username</div>
                                        <div class="col-8">{{ $employee->slack_username }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-2">Skills</div>
                                        <div class="col-8">{{ $employee->skills }}</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

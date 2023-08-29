@extends('admin.master')

@section('page-title')
    User Lists
@endsection

@section('content')
    <main class="main-content t-mt-15 t-mb-15">
        <div class="container-fluid px-3">
            <div class="user-search my-3">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <form action="" method="GET">
                    <input type="text" name="user" value="{{ isset($_GET['user']) ? $_GET['user'] : '' }}"
                        class="form-control" placeholder="Search By User">
                </form>
            </div>
            <div class="row g-3">
                @if ($users->count() <= 0)
                    <p class="alert alert-warning text-center w-50 mx-auto">Nothing Found For This keyword:
                        {{ $_GET['user'] }}</p>
                @endif
                @foreach ($users as $index => $user)
                    <div class="col-md-6 col-lg-4 col-xxl-3">
                        <div class="id-card t-shadow t-bg-white text-center">
                            <span
                                class="id-card__number id-card__number--{{ ($loop->index + 1) % 3 == 1 ? 'warning' : (($loop->index + 1) % 3 == 2 ? 'success' : 'primary') }}">
                                @if ($user->id < 10)
                                    {{ '0' . $user->id }}
                                @else
                                    {{ $user->id }}
                                @endif
                            </span>
                            <div class="avatars avatars--circle avatars--xl mx-auto">
                                <img src="{{ $user->getFirstMediaUrl('profile_picture') }}" alt="max" class="img-fulid w-100 h-100">
                                <div class="avatars__status">
                                    <i class="las la-check"></i>
                                </div>
                            </div>
                            <div class="id-card__body t-mt-30">
                                <h5 class="id-card__title text-capitalize mt-0 mb-0">{{ $user->name }}</h5>
                                <span
                                    class="id-card__sub-title text-capitalize xsm-text">{{ $user->employee->designation->designation_name ?? '' }}</span>
                                <p class="sm-text t-mt-15">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit adipisicing
                                </p>
                                <ul class="t-list">
                                    <li class="t-mb-5">
                                        <span class="id-card__icon t-mr-8">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                        <span class="d-inlin-block sm-text">{{ $user->email }}</span>
                                    </li>
                                    <li class="t-mb-5">
                                        <span class="id-card__icon t-mr-8">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <span class="d-inlin-block sm-text text-capitalize">south road, miami</span>
                                    </li>
                                </ul>
                                <div class="action-buttons">
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger delete-button">Delete</a>

                                    <form action="{{ route('admin.users.delete', $user->id) }}" class="delete-form" method="POST">
                                        @csrf
                                        <div class="modal">
                                            <div class="modal-background"></div>
                                            <div class="modal-content">
                                                <div class="bootstrap-content py-5">
                                                    <h2 class="mb-5">Are you sure you want to delete this user: {{ $user->name }}</h2>
                                                    <button type="submit" class="btn btn-primary delete-yes">Yes</button>
                                                    <a href="#" class="btn btn-danger delete-no">No</a>
                                                </div>
                                            </div>
                                            <button class="modal-close is-large" aria-label="close"></button>
                                        </div>
                                    </form>

                                </div>
                                <button type="button"
                                    class="btn btn-transparent btn-{{ ($loop->index + 1) % 3 == 1 ? 'warning' : (($loop->index + 1) % 3 == 2 ? 'success' : 'primary') }} sm-text font-weight-bold w-100 text-capitalize t-mt-15">write
                                    message</button>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>

            {{-- pagination --}}

            @if ($pagination == 1)
                @if ($users->hasPages())
                    {{ $users->links('vendor.pagination.bootstrap-5-modified') }}
                @endif
            @endif




        </div>
    </main>
@endsection

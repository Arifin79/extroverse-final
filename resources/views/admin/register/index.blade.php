@extends('admin.register.layout.main')

@section('content')

<div class="text-wrapper-6">Register Account</div>
    <div class="frame">
        <main class="container">
            <section>
                <div class="titlebar">
                    <h4>Register</h4>
                    <a href="{{ route('register') }}" class="btn-link">Add Task</a>
                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                </div>
                @if ($message = Session::get('success'))
                    <script type="text/javascript">
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                            });
                                Toast.fire({
                                icon: "success",
                                title: "{{ $message }}"
                        });
                    </script>
                @endif
                <div class="table">
                    <div class="table-filter">
                        <div>
                            <ul class="table-filter-list">
                                <li>
                                    <p class="table-filter-link link-active">All</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form method="GET" action="{{ route('admin/register/index') }}" accept-charset="UTF-8" role="search">
                        <div class="table-search">
                            <div>
                                <button class="search-select">
                                   Search Assignments
                                </button>
                            </div>
                            <div class="relative">
                                <input class="search-input" type="text" name="search" placeholder="Search assignment..." value="{{ request('search') }}">
                            </div>
                        </div>
                    </form>
                    <div class="table-product-head">
                        <p>name</p>
                        <p>Job Description</p>
                        <p>Email</p>
                        <p>Phone</p>
                        <p>Image</p>
                        <p>Actions</p>
                    </div>
                    <div class="table-product-body">
                        @if (count($user) > 0)
                            @foreach ($user as $product)
                                <p style="padding-top: 15px">{{ $product->name }}</p>
                                <p style="padding-top: 15px">{{ $product->job_desc }}</p>
                                <p style="padding-top: 15px">{{ $product->email }}</p>
                                <p style="padding-top: 15px">{{ $product->phone }}</p>
                                <img style="margin-right:15px;" src="{{ asset('images/' . $product->image)}}"/>
                                <p></p>
                                <div style="display: flex">
                                    {{-- <a href="{{ route('admin/register/edit', ['id' => $product->id]) }}" class="btn-link btn btn-success" style="padding-right:12px; padding-left:12px; padding-top:10px; margin-top: 0px; margin-right:15px;">
                                        <i class="fas fa-pencil-alt" ></i>
                                    </a> --}}
                                    <form method="post" action="{{ route('admin/register/destroy', ['id' => $product->id]) }}">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger" onclick="deleteConfirm(event)" style="margin:-10px; padding-top:9px; padding-bottom:9px; padding-right:13px; padding-left:13px;">
                                            <i class="far fa-trash-alt"></i>
                                        </button>

                                    </form>
                                </div>
                            @endforeach
                        @else
                            <p>product not found</p>
                        @endif
                    </div>
                    <div class="table-paginate">
                        {{ $user->links('admin/register/layout/pagination') }}
                    </div>
                </div>
            </section>
            <br>
        </main>
      </div>
</div>

<script>
    window.deleteConfirm = function (e) {
        e.preventDefault();
        var form = e.target.form;
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
        });
    }
</script>

@endsection

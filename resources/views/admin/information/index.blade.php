@extends('admin.information.layout.main')

@section('content')

<div class="text-wrapper-6">Information</div>
    <div class="frame">
        <main class="container">
            <section>
                <div class="titlebar">
                    <h4>Information</h4>
                    <a href="{{ route('admin/information/create') }}" class="btn-link">Add Information</a>
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
                    <form method="GET" action="{{ route('admin/information/index') }}" accept-charset="UTF-8" role="search">
                        <div class="table-search">
                            <div>
                                <button class="search-select">
                                   Search Informations
                                </button>
                            </div>
                            <div class="relative">
                                <input class="search-input" type="text" name="search" placeholder="Search Information..." value="{{ request('search') }}">
                            </div>
                        </div>
                    </form>
                    <div class="table-product-head">
                        <p>No</p>
                        <p>Title</p>
                        <p>Description</p>
                        <p>Date</p>
                        <p>Actions</p>
                    </div>
                    <div class="table-product-body">
                        @if (count($information) > 0)
                            @foreach ($information as $product)
                                <p style="padding-top: 15px">{{ $product->id }}</p>
                                <p style="padding-top: 15px">{{ $product->title }}</p>
                                <p style="padding-top: 15px">{{ $product->description }}</p>
                                <p style="padding-top: 15px">{{ $product->date }}</p>
                                <div style="display: flex">
                                    <a href="{{ route('admin/information/edit', ['id' => $product->id]) }}" class="btn-link btn btn-success" style="padding-right:12px; padding-left:12px; padding-top:10px; margin-top: 0px; margin-right:15px;">
                                        <i class="fas fa-pencil-alt" ></i>
                                    </a>
                                    <form method="post" action="{{ route('admin/information/destroy', ['id' => $product->id]) }}">
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
                        {{ $information->links('admin/information/layout/pagination') }}
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

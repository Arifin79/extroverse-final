@extends('admin.assignment.layout.main')

@section('content')

<div class="text-wrapper-6">Register</div>
    <div class="frame">
        <main class="container">
            <section>

                    <div class="titlebar">
                        <h4>Add Account</h4>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                    <div class="card">
                       <div>
                            <label>Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <hr>
                            <label>Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <hr>
                            <label>Password Confirm</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                       <div>
                            <label>Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <hr>
                            <label>Phone</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <hr>
                            <label>Job Description</label>
                            <input id="job_desc" type="text" class="form-control @error('job_desc') is-invalid @enderror" name="job_desc" value="{{ old('job_desc') }}" required autocomplete="job_desc" autofocus>
                                @error('job_desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       </div>
                    </div>
                    <div class="titlebar">
                        <h1></h1>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</div>
@endsection

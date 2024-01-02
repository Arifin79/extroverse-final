@extends('admin.team.layout.main')

@section('content')

<div class="create-account">
    <div class="text-wrapper-6">Team</div>
    <div class="frame">
        <div class="text-wrapper">Team Members</div>
        <div class="text-wrapper-5">Extroverse</div>
        <div class="group">
            <div class="row">
                @foreach ($user as $product)
                    <div class="overlap-group">
                        <img class="account-wrapper" src="{{ asset('images/' . $product->image)}}"/>
                        <div class="div">{{ $product->name }}</div>
                        <div class="text-wrapper-2">{{ $product->job_desc }}</div>
                        <a style="text-decoration:none !important; text-decoration:none;" href="mailto:kucingmeong@gmail.com" target="_blank" rel="noopener noreferrer"><div class="text-wrapper-3">{{ $product->email }}</div></a>
                        <div class="text-wrapper-4">{{ $product->phone }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

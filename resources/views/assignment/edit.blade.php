@extends('assignment.layout.main')

@section('content')


<div class="detail-project">
    <div class="overlap">
      <div class="frame">
        <div class="group">
          {{-- <div class="text-wrapper">{{ $assignment->deadline}}</div> --}}
          {{-- <img class="clock" src="{{ asset('images/clock.png') }}" /> --}}
        </div>
        <div class="div">Send Task</div>
        {{-- <div class="text-wrapper-2">{{ $assignment->customer_type}}</div> --}}
        <img class="line" src="img/line-5.svg" />
        <div class="overlap-group-wrapper">
          <div class="overlap-group">
            <a href="{{ route('assignment/create') }}" class="text-wrapper-3">Add Assignment</a>
          </div>
        </div>
      </div>
      <div class="overlap-wrapper">
        <div class="row"></div>
        @foreach ($task as $product)
            <div class="overlap-2">
                <div class="text-wrapper-4">{{ $product->date }}</div>
                <div class="text-wrapper-5">{{ $product->title }}</div>
                <a class="text-wrapper-6" href="{{ asset('images') . '/' . $product->image }}" download>Download File</a>
                <img class="img" src="{{ asset('images/clock.png') }}" />
                    <div class="group-2">
                        <div class="text-wrapper-7">{{ $product->name }}</div>
                    </div>
                {{-- <a href="{{ route('admin/information/edit', ['id' => $product->id]) }}" class="edit" style="padding-right:12px; padding-left:12px; padding-top:10px; margin-top: 0px; margin-right:15px;">
                    <i class="fas fa-pencil-alt" ></i>
                </a>
                <form method="post" action="{{ route('assignment/destroyer', ['id' => $product->id]) }}">
                    @method('delete')
                    @csrf
                    <button class="remove" onclick="deleteConfirm(event)" style="background-color: transparent; border: none; padding-right:12px; padding-left:12px; padding-top:10px; margin-top: 0px; margin-right:15px">
                        <i class="far fa-trash-alt"></i>
                    </button>
                </form> --}}
            </div>
        @endforeach
      </div>
    </div>
    <div class="text-wrapper-9">Detail Project</div>
</div>
@endsection

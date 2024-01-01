@extends('assignment.layout.main')

@section('content')

<div class="text-wrapper-6">Tugas</div>
    <div class="frame">
      <div class="group">
        <div class="overlap-group">
          <div class="text-wrapper">Search Here...</div>
          {{-- <img class="vector" src="img/1.png" /> --}}
        </div>
    </div>

    <div class="overlap-wrapper">
        <div class="row">
            @foreach ($assignment as $product)
                <div class="overlap">
                    <img class="image-wrapper" src="{{ asset('images/' . $product->image)}}"/>
                    <div class="div">{{ $product->project_name }}</div>
                    <div class="text-wrapper-2">{{ $product->customer_type }}</div>
                    <div class="text-wrapper-3">{{ $product->deadline }}</div>
                    <img class="clock" src="img/1.png" />
                </div>
            @endforeach
        </div>
    </div>

    <div class="text-wrapper-7">130 Results</div>
</div>

@endsection

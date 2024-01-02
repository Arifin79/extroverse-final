@extends('assignment.layout.main')

@section('content')

<div class="detail-project">
    <div class="overlap">
      <div class="frame">
        <div class="group">
          <div class="text-wrapper">{{ $assignment->deadline}}</div>
          <img class="clock" src="images/clock.png" />
        </div>
        <div class="div">{{ $assignment->project_name}}</div>
        <div class="text-wrapper-2">{{ $assignment->customer_type}}</div>
        <img class="line" src="img/line-5.svg" />
        <div class="overlap-group-wrapper">
          <div class="overlap-group">
            <a href="{{ route('assignment/create') }}" class="text-wrapper-3">Add Assignment</a>
          </div>
        </div>
      </div>
      <div class="overlap-wrapper">
        <div class="overlap-2">
          <div class="text-wrapper-4">18-05-2001</div>
          <div class="text-wrapper-5">Input Prototype</div>
          <div class="text-wrapper-6">Download File</div>
          <img class="img" src="images/clock.png" />
            <div class="group-2">
                <div class="ellipse"></div>
                <div class="text-wrapper-7">Rafi Dahnu Fahrezi</div>
                <div class="text-wrapper-8">Chef Operational</div>
            </div>
          <img class="remove" src="img/remove-2.png" />
          <img class="line-2" src="img/line-6-2.svg" />
          <img class="edit" src="img/image.svg" />
        </div>
      </div>
    </div>
    <div class="text-wrapper-9">Detail Project</div>
</div>
@endsection

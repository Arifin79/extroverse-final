@extends('assignment.layout.main')

@section('content')

<div class="text-wrapper-6">Send Task</div>
    <div class="frame">
        <main class="container">
            <section>
                <form action="{{ route('assignment/taskStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="titlebar">
                        <h4 class="add">Add Assignment</h4>
                    </div>
                    <div class="card">
                       <div>
                            <label>Name</label>
                            <input type="text" name="name" value="{{ Auth::user()->name }}">
                            <label>Project Name</label>
                            <input type="text" name="title" >
                            <label>Upload Time</label>
                            <input type="date" name="date" />
                            <label>File Project</label>
                            <img src="" alt="" class="img-product" id="file-preview" />
                            <input type="file" name="image" accept="image/*" onchange="showFile(event)">
                        </div>
                    </div>
                    <div class="titlebar">
                        <h1></h1>
                        <button>Save</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</div>

<script>
    function showFile(event){
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('file-preview');
            output.src = dataURL;
        }
        reader.readAsDataURL(input.files[0]);
    }
</script>

@endsection

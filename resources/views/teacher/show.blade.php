<x-layout>
 <div class="container mt-5">
    <div class="row flex justify-content-center">
        <div class="col-8">
            <div class="display-6 text-center text-muted">details page</div>
            <div class="card shadow-sm">
                <div class="card-header"> Full-Name: {{ $student->name }}</div>
                <div class="card-body">
                    <p>name : <strong>{{ $student->name }}</strong></p>
                    <p>address : <strong>{{ $student->address }}</strong></p>
                    <p>age : <strong>{{ $student->age }}</strong></p>
                    <p>phone : <strong>{{ $student->phone }}</strong></p>
                    <a href="" class="btn btn-primary my-2">update</a>
                    <a href="" class="btn btn-danger"> delete</a>
                </div>
            </div>
        </div>
    </div>
 </div>
</x-layout>
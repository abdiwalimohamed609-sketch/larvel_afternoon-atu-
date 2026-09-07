<x-layout>
    <h1 class="text-format">List of Students</h1>
<div class="container">
    <div class="row flex justify-content-center">
        <div class="col-10">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Adress</th>
                        <th>Phone</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student['id'] }}</td>
                        <td>{{ $student['name'] }}</td>
                        <td>{{ $student['age'] }}</td>
                        <td>{{ $student['address'] }}</td>
                        <td>{{ $student['phone'] }}</td>
                         <td><a href="{{route('teacher.show' , $student -> id)}}" class="btn btn-sm btn-outline-primary"> view more </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-layout>
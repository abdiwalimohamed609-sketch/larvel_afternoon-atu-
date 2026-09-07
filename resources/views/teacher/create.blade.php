<x-layout>
    <div class="row flex justify-content-center">
        <div class=col-8>
            <div class="display-6 text-center my-3">Add Student</div>
            <form action="{{route('teacher.store')}}" method="post">
                <label for="" class=form-label>Name</label>
                <input type="text" class="form-control">
                <label for="" class=form-label>Address</label>
                <input type="text" class="form-control">
                <label for="" class=form-label>Age</label>
                <input type="text" class="form-control">
                <label for="" class=form-label>Phone</label>
                <input type="text" class="form-control">
                <input class="btn btn-info form-control my-2" type="submit" value="Submit">
                
            </form>
        </div>
    </div>
    
</x-layout>
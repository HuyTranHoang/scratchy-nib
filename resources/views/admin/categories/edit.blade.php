<x-admin.layouts.master>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calligraphy Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Add New Categories</button>
            </div>
        </div>
    </div>


    <h3>Add category</h3>

    <form method="POST" action="{{route('categories.update',$category->category_id)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-5">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" name="category_name" id="category_name" class="form-control" value="{{$category -> category_name}}">
                @error('category_name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="my-3">
                    <label for="category_description" class="form-label">Category Description</label>
                    <textarea class="form-control" name="category_description" id="category_description" rows="3">
                        {{$category -> category_description}}
                    </textarea>
                    @error('category_description')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>


</x-admin.layouts.master>

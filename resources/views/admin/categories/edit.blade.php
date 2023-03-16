<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="">Calligraphy Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Add New Categories</button>
            </div>
        </div>
    </div>


    <h3>Update category</h3>

    <form method="POST" action="{{route('categories.update',$category->category_id)}}" enctype="multipart/form-data">
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

                <div class="mb-3" id="previewCard">
                    <div class="card" style="width: 13rem;">
                        <img src="{{ asset('storage/' . $category->category_image) }}" alt=""
                             class="card-img-top" id="ImgOutput">
                        <div class="card-body">
                            Image preview
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="category_image" id="image" class="form-control">
                    @error('category_image')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="row justify-content-end my-3">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

</x-admin-layout>

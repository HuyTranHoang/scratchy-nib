<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="">Calligraphy Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('categories.index') }}" class="btn btn-sm btn-outline-primary">Categories List</a>
            </div>
        </div>
    </div>


    <h3>Create new category</h3>

    <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-8 col-xl-5">
                <label for="category_name" class="form-label">Category Name</label>
                <input type="text" name="category_name" id="category_name" class="form-control" value="{{old('category_name')}}">
                @error('category_name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="my-3">
                    <label for="category_description" class="form-label">Category Description</label>
                    <textarea class="form-control" name="category_description" id="category_description" rows="3">
                        {{old('category_description')}}
                    </textarea>
                    @error('category_description')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3" id="previewCard" style="display: none">
                    <div class="card" style="width: 13rem;">
                        <img src="" alt=""
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

                <div class="row justify-content-end">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Store</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

    {{--    Tinymce Script  --}}
    <script src="https://cdn.tiny.cloud/1/r2ca2qp43km71mdmbvjwkdd99vpglucckcwto4flreqbh93a/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            entity_encoding : "raw",
            height: 250,
            selector: 'textarea',
            plugins: 'lists link anchor charmap',
            toolbar: 'formatselect | bold italic bullist numlist | link image charmap',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            menubar: false,
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
    </script>


</x-admin-layout>

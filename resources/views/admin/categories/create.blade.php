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

    <form method="POST" action="{{route('categories.store')}}">
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

                <div class="row justify-content-end">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Store</button>
                    </div>
                </div>

            </div>
        </div>
    </form>


</x-admin-layout>

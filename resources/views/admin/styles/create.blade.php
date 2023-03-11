<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="">Calligraphy Styles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Add New Styles</button>
            </div>
        </div>
    </div>


    <h3>Create new style</h3>

    <form method="post" action="{{route('styles.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-5">
                <label for="style_name" class="form-label">Style Name</label>
                <input type="text" class="form-control" id="style_name" name="style_name">
                @error('style_name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="my-3">
                    <label for="style_description" class="form-label">Style Description</label>
                    <textarea class="form-control" name="style_description" id="style_description"></textarea>
                    @error('style_description')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="category_id" class="form-label">Category Name</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="" hidden="">-- Select One --</option>
                        @foreach($categories as $category)
                            <option {{ $category -> category_id == old('category_id') ? 'selected' : ''}}
                                    value="{{$category -> category_id}}">{{$category -> category_name}}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
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
                    <input type="file" name="style_image" id="image" class="form-control">
                    @error('style_image')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Store</button>
    </form>
</x-admin-layout>

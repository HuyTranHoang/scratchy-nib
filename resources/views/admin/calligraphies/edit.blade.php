<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Calligraphies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('calligraphies.index')}}" class="btn btn-sm btn-outline-primary">Calligraphies List</a>
            </div>
        </div>
    </div>


    <h3>Update calligraphy</h3>

    <form method="POST" action="{{route('calligraphies.update', $calligraphy->calligraphy_id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8 col-xl-5">
                <div class="mb-3">
                    <label for="calligraphy_name" class="form-label">Name</label>
                    <input type="text" name="calligraphy_name" id="calligraphy_name" class="form-control" value="{{ old('calligraphy_name',$calligraphy -> calligraphy_name) }}">
                    @error('calligraphy_name')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="calligraphy_description" class="form-label">Description</label>
                    <textarea class="form-control" name="calligraphy_description" id="calligraphy_description" rows="3">
                        {{ old('calligraphy_description',$calligraphy -> calligraphy_description) }}
                    </textarea>
                    @error('calligraphy_description')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="style_id" class="form-label">Filter Style by Category (optional)</label>
                    <select class="form-select" name="category_id" id="category_id" aria-label="Calligraphy style select">
                        <option value="" hidden="">-- Select One --</option>
                        @foreach($categories as $category)
                            <option {{ $calligraphy->calligraphyStyle->calligraphyCategory->category_id == $category->category_id ? 'selected' : '' }} value="{{ $category -> category_id }}">{{ $category -> category_name }}</option>
                        @endforeach
                    </select>
                    @error('style_id')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="style_id" class="form-label">Calligraphy Style</label>
                    <select class="form-select" name="style_id" id="style_id" aria-label="Calligraphy style select">
                        @foreach($styles as $style)
                            <option {{ ($calligraphy -> style_id == $style -> style_id) ? 'selected' : '' }} value="{{ $style -> style_id }}">{{ $style -> style_name }}</option>
                        @endforeach
                    </select>
                    @error('style_id')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3" id="previewCard">
                    <div class="card" style="width: 13rem;">
                        <img src="{{ asset('storage/' . $calligraphy->galleryImage->first()->image_name) }}" alt=""
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

    <script type="module">
        $('#category_id').on('change', function() {
            let cateID = $('#category_id').val();
            $.post('{{ route('api.styles') }}', {
                category_id: cateID
            },function(data) {
                let _html = '';
                for (const style of data) {
                    _html += `<option value="${style['style_id']}">${style['style_name']}</option>`;
                }
                $('#style_id').html(_html);
            });
        });
    </script>
</x-admin-layout>






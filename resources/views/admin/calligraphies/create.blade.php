<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Calligraphies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('calligraphies.index')}}" class="btn btn-sm btn-outline-primary">Calligraphies List</a>
            </div>
        </div>
    </div>


    <h3>Create new calligraphy</h3>

    <form method="POST" action="{{route('calligraphies.store')}}">
        @csrf
        <div class="row">
            <div class="col-lg-8 col-xl-5">
                <label for="calligraphy_name" class="form-label">Calligraphy Name</label>
                <input type="text" name="calligraphy_name" id="calligraphy_name" class="form-control" value="{{old('calligraphy_name')}}">
                @error('calligraphy_name')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="my-3">
                    <label for="calligraphy_description" class="form-label">Calligraphy Description</label>
                    <textarea class="form-control" name="calligraphy_description" id="calligraphy_description" rows="3">
                        {{old('calligraphy_description')}}
                    </textarea>
                    @error('calligraphy_description')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <label for="style_id" class="form-label">Calligraphy Style</label>
                <select class="form-select" name="style_id" id="style_id" aria-label="Calligraphy style select">
                    @foreach($styles as $style)
                        <option value="{{ $style -> style_id }}">{{ $style -> style_name }}</option>
                    @endforeach
                </select>
                @error('style_id')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="row justify-content-end my-3">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Store</button>
                    </div>
                </div>

            </div>
        </div>
    </form>


</x-admin-layout>






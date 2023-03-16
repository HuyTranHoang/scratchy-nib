<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Calligraphies</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('calligraphies.create')}}" class="btn btn-sm btn-outline-primary">Add New Calligraphy</a>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-12 col-lg-4">
            <h3>Calligraphies list</h3>
        </div>

        <div class="col-md-12 d-sm-block col-lg-8 d-md-flex justify-content-md-end admin-form-group">

            <form action="" class="d-flex mt-3 mt-lg-0">
                <a class="btn btn-primary-color rounded me-3 mb-3 mb-md-0" href="{{ route('calligraphies.index') }}" style="line-height: 30px">Reset</a>

                <div class="field me-md-0 me-lg-3" style="min-width: 200px">
                    <label for="cateID" class="label">Filter by Category</label>
                    <select class="select" id="cateID" name="cateID" onchange='this.form.submit()'>
                        <option value="">All</option>
                        @foreach( $categories as $category)
                            <option {{ $category->category_id == request()->cateID ? 'selected' : '' }} value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </form>

            <form action="" class="d-flex mt-3 mt-lg-0 admin-form-group">
                <div class="field me-md-0 me-lg-3 mb-3 mb-lg-0" style="min-width: 200px">
                    <input type="hidden" name="cateID" value="{{request()->cateID}}">
                    <label for="styleID" class="label">Filter by Style</label>
                    <select class="select" id="styleID" name="styleID" onchange='this.form.submit()'>
                        <option value="">All</option>
                        @foreach($styles as $style)
                            <option {{ $style->style_id == request()->styleID ? 'selected' : '' }} value="{{ $style->style_id }}">{{ $style->style_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex w-100">
                    <input class="form-control rounded-start rounded-0" style="min-width: 200px" value="{{ request()->calligraphyName }}"
                           name="calligraphyName" type="text" placeholder="Search by name.." aria-label="search">
                    <button class="btn rounded-end rounded-0 btn-primary-color" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 15%">
                        @if(request()->orderby=='name' && request()->sort=='desc')
                            <a class="text-decoration-none text-success" href="?orderby=name&sort=asc&cateID={{request()->cateID}}&styleID={{request()->styleID}}&calligraphyName={{request()->calligraphyName}}">Calligraphies Name <i class="fa-solid fa-caret-down"></i></a>
                        @else
                            <a class="text-decoration-none {{request()->orderby=='name' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=name&sort=desc&cateID={{request()->cateID}}&styleID={{request()->styleID}}&calligraphyName={{request()->calligraphyName}}">Calligraphies Name <i class="fa-solid fa-caret-up"></i></a>
                        @endif
                    </th>
                    <th scope="col" style="max-width: 200px">Image</th>
                    <th scope="col">Calligraphy Description</th>
                    <th scope="col">Style</th>
                    <th scope="col" colspan="2" class="text-center">Action</th>
                    <th scope="col" style="width: 10%">
                        @if(request()->orderby=='date' && request()->sort=='desc')
                            <a class="text-decoration-none text-success" href="?orderby=date&sort=asc&cateID={{request()->cateID}}&styleID={{request()->styleID}}&calligraphyName={{request()->calligraphyName}}">Created At <i class="fa-solid fa-caret-down"></i></a>
                        @else
                            <a class="text-decoration-none {{request()->orderby=='date' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=date&sort=desc&cateID={{request()->cateID}}&styleID={{request()->styleID}}&calligraphyName={{request()->calligraphyName}}">Created At <i class="fa-solid fa-caret-up"></i></a>
                        @endif
                    </th>
                </tr>
            </thead>
            <tbody>
            @php
                $redirectTo = $calligraphies->url($calligraphies->currentPage());
                if (!$calligraphies -> hasMorePages() && $calligraphies -> count() == 1) {
                    $redirectTo = $calligraphies -> previousPageUrl();
                }
            @endphp
            @forelse($calligraphies as $index => $calligraphy)
                <tr>
                    <td>{{$calligraphy -> calligraphy_id}}</td>
                    <td>{{$calligraphy-> calligraphy_name}}</td>
                    <td>
                        @forelse($calligraphy-> galleryImage as $image)
                            <img src="{{ asset('storage/'.$image -> image_name) }}" alt="{{ $image -> image_name }}"
                                 style="max-width: 200px">
                        @empty
                            <img src="{{ asset('storage/images/noimage.jpg') }}" alt="No image" style="max-width: 200px">
                        @endforelse
{{--                        @foreach ($calligraphy-> galleryImage as $image)--}}
{{--                            <img src="{{ asset('storage/'.$image -> image_name) }}" alt="{{ $image -> image_name }}"--}}
{{--                                 style="max-width: 120px">--}}
{{--                        @endforeach--}}
                    </td>
                    <td>{{$calligraphy -> calligraphy_description}}</td>
                    <td>{{$calligraphy-> calligraphyStyle -> style_name}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('calligraphies.edit', $calligraphy -> calligraphy_id)}}"><i class="px-1 fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0  delete-calligraphy" style="background-color: inherit"
                                data-id="{{$calligraphy -> calligraphy_id}}" data-name="{{$calligraphy -> calligraphy_name}}"
                                data-style="{{$calligraphy -> calligraphyStyle -> style_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d/m/Y H:i', strtotime($calligraphy -> created_at))}}</td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td colspan="7" class="">No search results found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $calligraphies->links() }}
    </div>

    <!-- Modal -->
    <x-delete-modal>
        <x-slot:action>
            {{route('calligraphies.destroy','id')}}
        </x-slot:action>

        <x-slot:body>
            <input id="calligraphy_id" name="calligraphy_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this calligraphy?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>

            <label for="calligraphy_name">Calligraphy name: </label>
            <input class="form-control mt-1 mb-2" type="text" id="calligraphy_name" name="calligraphy_name" disabled readonly>
            <label for="calligraphy_style">Calligraphy style: </label>
            <input class="form-control mt-1" type="text" id="calligraphy_style" name="calligraphy_style" disabled readonly>
        </x-slot:body>
    </x-delete-modal>

</x-admin-layout>

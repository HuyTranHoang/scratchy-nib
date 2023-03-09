<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Calligraphy Styles</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{route('styles.create')}}" class="btn btn-sm btn-outline-primary">Add New Styles</a>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-12 col-lg-4">
            <h3>Styles list</h3>
        </div>

        <div class="colmd-12 d-sm-block col-lg-8 d-md-flex justify-content-md-end">
            <form action="" class="d-flex form-outline">
                <a class="btn btn-primary-color rounded me-3" href="{{ route('styles.index') }}" style="line-height: 30px">Reset</a>
                <div class="field me-3" style="min-width: 200px">
                    <label for="cateID" class="label">Filter by Category Name</label>
                    <select class="select" id="cateID" name="cateID" onchange='this.form.submit()'>
                        <option value="">All</option>
                        @foreach($categories as $category)
                            <option {{ $category->category_id == request()->cateID ? 'selected' : '' }} value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <input class="form-control rounded-start rounded-0" style="width: 200px" value="{{ request()->styleName }}"
                       name="styleName" type="text" placeholder="Search by name.." aria-label="search">
                <button class="btn rounded-end rounded-0 btn-primary-color" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="width: 10%">Styles Name</th>
                <th scope="col">Styles Description</th>
                <th scope="col" style="width: 15%">Category Name</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col" style="width: 10%;">Created At</th>
            </tr>
            </thead>
            <tbody>
            @php
                $redirectTo = $styles->url($styles->currentPage());
                if (!$styles -> hasMorePages() && $styles -> count() == 1) {
                    $redirectTo = $styles -> previousPageUrl();
                }
            @endphp
            @forelse($styles as $index => $style)
                <tr>
                    <td>{{$style -> style_id}}</td>
                    <td>{{$style -> style_name}}</td>
                    <td>{{$style -> style_description}}</td>
                    <td>{{$style -> calligraphyCategory -> category_name}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('styles.edit', $style -> style_id)}}"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 delete-style" style="background-color: inherit"
                                data-id="{{$style -> style_id}}" data-name="{{$style -> style_name}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d-m-Y', strtotime($style -> created_at))}}</td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td colspan="6" class="">No search results found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $styles->links() }}
    </div>

    <!-- Modal -->
    <x-admin.delete-modal>
        <x-slot:action>
            {{route('styles.destroy',['id','redirect_to' => $redirectTo])}}
        </x-slot:action>

        <x-slot:body>
            <input id="style_id" name="style_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this style?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>

            <label for="style_name">Style name: </label>
            <input class="form-control mt-1" type="text" id="style_name" name="style_name" disabled readonly>
        </x-slot:body>
    </x-admin.delete-modal>

</x-admin-layout>

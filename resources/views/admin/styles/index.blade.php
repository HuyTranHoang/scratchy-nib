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

        <div class="col-md-12 d-sm-block col-lg-8 d-md-flex justify-content-md-end">
            <form action="" class="d-flex form-outline">
                <a class="btn btn-primary-color rounded me-3 mb-3 mb-md-0" href="{{ route('styles.index') }}" style="line-height: 30px">Reset</a>
                <div class="field me-3" style="min-width: 200px">
                    <input name="perPage" type="hidden" value="{{ request()->perPage }}">
                    <label for="cateID" class="label">Filter by Category Name</label>
                    <select class="select" id="cateID" name="cateID" onchange='this.form.submit()'>
                        <option value="">All</option>
                        @foreach($categories as $category)
                            <option {{ $category->category_id == request()->cateID ? 'selected' : '' }} value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

            </form>

            <form action="{{ route('admin.remove-empty-parameters') }}" class="d-flex form-outline">
                <input name="cateID" type="hidden" value="{{request()->cateID}}">
                <input name="perPage" type="hidden" value="{{ request()->perPage }}">
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
                <th scope="col" style="width: 10%">
                    @if(request()->orderby=='name' && request()->sort=='desc')
                        <a class="text-decoration-none text-success"
                           href="{{ route('admin.remove-empty-parameters', ['orderby' => 'name',
                                    'sort' => 'asc',
                                    'perPage' => request()->perPage,
                                    'cateID' => request()->cateID,
                                    'styleName' => request()->styleName]) }}"
                        >Styles Name <i class="fa-solid fa-caret-down"></i></a>
                    @else
                        <a class="text-decoration-none {{request()->orderby=='name' && request()->sort=='asc' ? 'text-success' : ''}}"
                           href="{{ route('admin.remove-empty-parameters', ['orderby' => 'name',
                                    'sort' => 'desc',
                                    'perPage' => request()->perPage,
                                    'cateID' => request()->cateID,
                                    'styleName' => request()->styleName]) }}"
                        >Styles Name <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
                <th scope="col" style="max-width: 200px">Styles Image</th>
                <th scope="col" style="min-width: 400px">Styles Description</th>
                <th scope="col" style="width: 15%">Category Name</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col" style="width: 10%;">
                    @if(request()->orderby=='date' && request()->sort=='desc')
                        <a class="text-decoration-none text-success"
                           href="{{ route('admin.remove-empty-parameters', ['orderby' => 'date',
                                    'sort' => 'asc',
                                    'perPage' => request()->perPage,
                                    'cateID' => request()->cateID,
                                    'styleName' => request()->styleName]) }}"
                        >Created At <i class="fa-solid fa-caret-down"></i></a>
                    @else
                        <a class="text-decoration-none {{request()->orderby=='date' && request()->sort=='asc' ? 'text-success' : ''}}"
                           href="{{ route('admin.remove-empty-parameters', ['orderby' => 'date',
                                    'sort' => 'desc',
                                    'perPage' => request()->perPage,
                                    'cateID' => request()->cateID,
                                    'styleName' => request()->styleName]) }}"
                        >Created At <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
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
                    <td>
                        <img src="{{ asset('storage/'.$style -> style_image) }}" alt="{{ $style -> style_image }}"
                             style="max-width: 200px">
                    </td>
                    <td>{!! $style -> style_description !!}</td>
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
                    <td>{{date('d/m/Y H:i', strtotime($style -> created_at))}}</td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td colspan="7" class="">No search results found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        <form action="{{ route('admin.remove-empty-parameters') }}" class="small text-muted @if(!$styles->hasMorePages()) mb-3 @endif">
            Styles per page:
            <input name="styleName" type="hidden" value="{{ request()->styleName }}">
            <input name="cateID" type="hidden" value="{{ request()->cateID }}">
            <select class="form-select-sm border border-1" name="perPage" onchange="this.form.submit()">
                <option {{request()->perPage == 5 ? 'selected' : ''}} value="5">5</option>
                <option {{request()->perPage == 10 ? 'selected' : ''}} value="10">10</option>
                <option {{request()->perPage == 15 ? 'selected' : ''}} value="15">15</option>
            </select>
        </form>
        {{ $styles->links() }}
    </div>

    <!-- Modal -->
    <x-delete-modal>
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
    </x-delete-modal>

</x-admin-layout>

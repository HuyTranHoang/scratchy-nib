<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Feedback</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('feedback.create') }}" class="btn btn-sm btn-outline-primary">Add New Feedback</a>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-4">
            <h3>Feedback List</h3>
        </div>

        <div class="d-sm-block col-md-8 d-md-flex justify-content-md-end">
            <a class="btn btn-primary-color rounded me-3 mb-3 mb-md-0" href="{{ route('feedback.index') }}">Reset</a>
            <form action="" class="d-flex form-outline admin-searchform">
                <input class="form-control rounded-start rounded-0" value="{{ request()->feedbackFilter }}"
                       name="feedbackFilter" type="text" placeholder="Search by user name, message.." aria-label="search">
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
                <th scope="col" style="min-width: 400px">Message</th>
                <th scope="col" style="min-width: 200px;">
                    @if(request()->orderby=='userid' && request()->sort=='desc')
                        <a class="text-decoration-none text-success" href="?orderby=userid&sort=asc&feedbackFilter={{request()->feedbackFilter}}">User Name <i class="fa-solid fa-caret-down"></i></a>
                    @else
                        <a class="text-decoration-none {{request()->orderby=='userid' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=userid&sort=desc&feedbackFilter={{request()->feedbackFilter}}">User Name <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
                <th scope="col">Calligraphy Name</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col" style="width: 10%;">
                    @if(request()->orderby=='date' && request()->sort=='desc')
                        <a class="text-decoration-none text-success" href="?orderby=date&sort=asc&feedbackFilter={{request()->feedbackFilter}}">Created At <i class="fa-solid fa-caret-down"></i></a>
                    @else
                        <a class="text-decoration-none {{request()->orderby=='date' && request()->sort=='asc' ? 'text-success' : ''}}" href="?orderby=date&sort=desc&feedbackFilter={{request()->feedbackFilter}}">Created At <i class="fa-solid fa-caret-up"></i></a>
                    @endif
                </th>
            </tr>
            </thead>
            <tbody>
            @php
                $redirectTo = $feedback->url($feedback->currentPage());
                if (!$feedback -> hasMorePages() && $feedback -> count() == 1) {
                    $redirectTo = $feedback -> previousPageUrl();
                }
            @endphp
            @forelse($feedback as $index => $feb)
                <tr>
                    <td>{{$feb -> feedback_id}}</td>
                    <td>{!! $feb -> feedback_message !!}</td>
                    <td>{{$feb -> user -> name}}</td>
                    <td>{{$feb -> calligraphy -> calligraphy_name}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('feedback.edit', $feb -> feedback_id)}}"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 delete-feedback" style="background-color: inherit"
                                data-id="{{$feb -> feedback_id}}" data-message="{{$feb -> feedback_message}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d/m/Y H:i', strtotime($feb -> created_at))}}</td>
                </tr>
            @empty
                <tr>
                    <td></td>
                    <td colspan="6" class="">No search results found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
        {{ $feedback->links() }}
    </div>

    <!-- Modal -->
    <x-delete-modal>
        <x-slot:action>
            {{route('feedback.destroy',['id','redirect_to' => $redirectTo])}}
        </x-slot:action>

        <x-slot:body>
            <input id="feedback_id" name="feedback_id" hidden value="">
            <h5 class="text-center text-danger">Are you sure you want to delete this feedback?</h5>
            <h6 class="text-center mb-3 text-primary-color fw-light" style="font-size: 0.8rem">
                <i>this action cannot be reversed</i></h6>
            <label for="feedback_message">Feedback message: </label>
            <input class="form-control mt-1" type="text" id="feedback_message" name="feedback_message" disabled readonly>
        </x-slot:body>
    </x-delete-modal>

</x-admin-layout>

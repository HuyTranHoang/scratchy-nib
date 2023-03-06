<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Feedback</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-primary">Add New Feedback</button>
            </div>
        </div>
    </div>
    <h3>Feeback List</h3>
    <div class="table-responsive table-bordered">
        <table class="table table-striped align-middle">
            <thead class="table-success">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Message</th>
                <th scope="col">User Name</th>
                <th scope="col">Calligraphy Name</th>
                <th scope="col" colspan="2" class="text-center">Action</th>
                <th scope="col">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feedback as $index => $feb)
                <tr>
                    <td>{{$feb -> feedback_id}}</td>
                    <td>{{$feb -> feedback_message}}</td>
                    <td>{{$feb -> user -> name}}</td>
                    <td>{{$feb -> calligraphy -> calligraphy_name}}</td>
                    <td class="text-center px-0">
                        <a href="{{route('feedback.edit', $feb -> feedback_id)}}"><i class="fa-solid fa-pen"></i></a></td>
                    <td class="text-center px-0">
                        <button type="button" class="px-1 border-0 {{$index % 2 != 0 ? 'bg-white' : ''}} delete-feedback"
                                data-id="{{$feb -> feedback_id}}" data-message="{{$feb -> feedback_message}}"
                                data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="text-primary fa-solid fa-trash"></i>
                        </button>
                    </td>
                    <td>{{date('d-m-Y', strtotime($feb -> created_at))}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>

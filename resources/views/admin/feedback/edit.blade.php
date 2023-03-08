<x-admin-layout>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class=" text-primary-color">Feedback</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('feedback.index') }}" class="btn btn-sm btn-outline-primary">Feedback list</a>
            </div>
        </div>
    </div>

    <h3>Update feedback</h3>

    <form method="POST" action="{{route('feedback.update', $feedback -> feedback_id)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg-8 col-xl-5">
                <label for="feedback_message" class="form-label">Feedback Message</label>
                <textarea class="form-control" name="feedback_message" id="feedback_message" rows="3">
                        {{ $feedback -> feedback_message }}
                </textarea>
                @error('feedback_message')
                <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                @enderror

                <div class="my-3">
                    <label for="user_id" class="form-label">User Name</label>
                    <select name="user_id" id="user_id" class="form-select">
                        <option value="" hidden="">-- Select One --</option>
                        @foreach($users as $user)
                            <option {{ $user -> user_id == $feedback -> user_id ? 'selected' : ''}}
                                    value="{{$user -> user_id}}">{{$user -> name}}
                            </option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="my-3">
                    <label for="calligraphy_id" class="form-label">Calligraphy Name</label>
                    <select name="calligraphy_id" id="calligraphy_id" class="form-select">
                        <option value="" hidden="">-- Select One --</option>
                        @foreach($calligraphies as $calligraphy)
                            <option {{ $calligraphy -> calligraphy_id == $feedback -> calligraphy_id ? 'selected' : ''}}
                                    value="{{$calligraphy -> calligraphy_id}}">{{$calligraphy -> calligraphy_name}}
                            </option>
                        @endforeach
                    </select>
                    @error('calligraphy_id')
                    <span class="text-danger mt-1 error-validate"><i class="fa-light fa-xmark"></i> {{$message}}</span>
                    @enderror
                </div>

                <div class="row justify-content-end">
                    <div class="col-md-12 col-lg-6 col-xl-4">
                        <button type="submit" class="btn btn-primary w-100">Update</button>
                    </div>
                </div>

            </div>
        </div>
    </form>


</x-admin-layout>

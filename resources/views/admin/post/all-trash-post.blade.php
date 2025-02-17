@extends('admin.layout.app')


@section('body')
    @include('admin.layout.helper.success-msg')


    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Trash Posts</h4>

                <a href="{{ route('all-delete-trash') }}">
                    <button style="background-color:yellow">

                        Empty Trash
                    </button>
                </a>
                <br><br>
                <br><br>

                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">

                            <tr>

                                <th> Id </th>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($posts as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>{{ $row['title'] }}</td>

                                    @if ($row['image'] || $row['thumbnail'] || $row['image-1'])
                                        <td>
                                            <img src="{{ $row['image'] ?? ($row['thumbnail'] ?? $row['image-1']) }}"
                                                alt="" style="max-width: 120px ; max-height: 120px ">
                                        </td>
                                    @endif

                                    <td>

                                        <a href="{{ route('restore-trash-posts', ['id' => $row['id']]) }}"
                                            class="btn btn-success">Restore</a>

                                        <a href="{{ route('delete-trash-posts', ['id' => $row['id']]) }}"
                                            class="btn btn-danger">Delete</a>


                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>



            </div>
        </div>
    </div>
@endsection

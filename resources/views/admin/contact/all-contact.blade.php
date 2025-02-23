@extends('admin.layout.app')


@section('body')
    @include('admin.layout.helper.success-msg')


    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Contact</h4>
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">

                            <tr>

                                <th> Id </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($data as $row)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>{{ $row['name'] }}</td>

                                    <td>{{ $row['email'] }}</td>


                                    <td>

                                        <a href="{{ route('view-contact', ['id' => $row['id']]) }}"
                                            class="btn btn-success">View</a>

                                        <a href="{{ route('delete-contact', ['id' => $row['id']]) }}"
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

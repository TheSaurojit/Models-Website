
{{-- @dd($arrayData , $editUrl , $deleteUrl , $headers ) --}}
<div class="table-responsive">
                <table class="table mb-0">

                    <thead class="table-light">
                    
                        <tr>

                            <th> Id </th>



                            @foreach ($headers as $header)
                                <th>{{ Str::title($header) }}</th>
                            @endforeach

                                <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($arrayData as $row)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                @foreach ($columns as $column)
                                    <td>{{ $row[$column] ?? 'N/A' }}</td>
                                @endforeach

                                <td>

                                    <a href="{{ route($editUrl ,["id" => $row["id"]] ) }}" class="btn btn-success">Modify</a>

                                    <a href="{{ route($deleteUrl  ,["id" => $row["id"]] ) }}" class="btn btn-danger">Delete</a>

                               
                                </td>

                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>


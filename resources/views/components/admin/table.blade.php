
{{-- @dd($arrayData , $editUrl , $deleteUrl , $headers ) --}}
<div class="table-responsive">
                <table class="table mb-0">

                    <thead class="table-light">
                    
                        <tr>

                            <th> Id </th>



                            @foreach ($headers as $header)

                                <th>{{ Str::title($header) }}</th>

                            @endforeach


                            @if ( $headers == "Image"  )

                                <th> Image </th>

                            @endif


                            <th>Action</th>

                            @if ($first)

                            <th>First Post</th>
                            
                            @endif


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


                                @if ( $row["image"] || $row["thumbnail"] || $row["image-1"] )

                                <td>
                                    <img src="{{ $row["image"] ?? $row["thumbnail"] ?? $row["image-1"] }}" alt="" style="max-width: 120px ; max-height: 120px ">
                                </td>
                                    
                                @endif

                                @if ($first)

                                <td>

                                    <a href="{{ route('first_post' ,["id" => $row["id"]] ) }}" class="btn btn-success">Make First Post</a>


                                </td>
                                
                                @endif
    

                                <td>

                                    <a href="{{ route($editUrl ,["id" => $row["id"]] ) }}" class="btn btn-success">Modify</a>

                                    <a href="{{ route($deleteUrl  ,["id" => $row["id"]] ) }}" class="btn btn-danger">Delete</a>

                               
                                </td>

                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>


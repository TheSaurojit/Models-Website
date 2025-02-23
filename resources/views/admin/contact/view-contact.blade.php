@extends('admin.layout.app')


@section('body')


    @include('admin.layout.helper.error-msg')



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">

                    <div class="my-4">
                        <h5> Name :</h5>
                        <h4>{{ $data['name'] }}</h4> 
                    </div> 

                    <div class="my-4">
                        <h5> Email :</h5>
                        <h4>{{ $data['email'] }}</h4> 
                    </div> 
                    
                    <div class="my-4">
                        <h5> Message :</h5>
                        <h4>{{ $data['message'] }}</h4> 
                    </div>

                        


                </div>
            </div>
        </div>
    </div>

    @endsection


@section('script')

@include('admin.layout.helper.image-script')



@include('admin.layout.helper.ck-editor-script')


@endsection

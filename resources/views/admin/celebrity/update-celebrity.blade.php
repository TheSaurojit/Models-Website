@extends('admin.layout.app')


@section('body')


    @include('admin.layout.helper.error-msg')



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Model</h4>

               
                    
                    <form action="{{ route('update-celebrity',[ "id" => $celebrity["id"] ]) }}" method="POST" enctype="multipart/form-data">

                        {{-- @dd($celebrity) --}}

                        <x-admin.input-field  type="text" name="name" value="{{ $celebrity['name'] }}"/>

                        <x-admin.input-field  type="text" name="bio" value="{{ $celebrity['bio'] }}"/>

                        <x-admin.select-field name="gender" :options="['Male' ,'Female','Transgender']" value="{{ $celebrity['gender'] }}"/>

                        <x-admin.image-component name="image" value="{{ $celebrity['image'] }}"/>




                        <x-admin.input-field  type="submit" name="submit" />

                    </form>

                </div>
            </div>
        </div>
    </div>

    @endsection


@section('script')

@include('admin.layout.helper.image-script')

@endsection

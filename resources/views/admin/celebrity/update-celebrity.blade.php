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


                        <x-admin.input-field  type="text" name="instagram"  value="{{ $celebrity['instagram'] }}"/>


                        <x-admin.image-component name="image-1"  value="{{ $celebrity['image-1'] }}" />
                        <x-admin.image-component name="image-2"  value="{{ $celebrity['image-2'] }}" />
                        <x-admin.image-component name="image-3"  value="{{ $celebrity['image-3'] }}" />
                        <x-admin.image-component name="image-4"  value="{{ $celebrity['image-4'] }}" />





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

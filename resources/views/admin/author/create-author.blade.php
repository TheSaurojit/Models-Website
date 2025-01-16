@extends('admin.layout.app')


@section('body')


    @include('admin.layout.helper.error-msg')



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Author</h4>

                    <form action="{{ route('create-author') }}" method="POST" enctype="multipart/form-data">

                        <x-admin.input-field  type="text" name="name" />

                        <x-admin.input-field  type="text" name="bio" />

                        <x-admin.image-component name="image"/>



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

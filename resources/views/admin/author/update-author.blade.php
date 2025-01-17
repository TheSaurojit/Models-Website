

@extends('admin.layout.app')


@section('body')


    @include('admin.layout.helper.error-msg')



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Author</h4>

                    <form action="{{ route('update-author',['id' => $author["id"] ]) }}" method="POST" enctype="multipart/form-data">

                        <x-admin.input-field  type="text" name="name" value="{{ $author['name'] }}" />

                        <x-admin.input-field  type="text" name="bio" value="{{ $author['bio'] }}"/>

                        <x-admin.image-component name="image" value="{{ $author['image'] }}"/>



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


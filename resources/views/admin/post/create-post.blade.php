@extends('admin.layout.app')


@section('body')


    @include('admin.layout.helper.error-msg')



    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Post</h4>

                    <form action="{{ route('create-post') }}" method="POST" enctype="multipart/form-data">

                        <x-admin.input-field  type="text" name="title" />

                        <x-admin.input-field  type="text" name="keywords" />

                        <x-admin.input-field  type="text" name="description" />

                        @php

                            $name = "model" ;

                        @endphp

                        <div class="my-4">
                            <label for="{{ $name }}" class="form-label">{{ Str::title($name) }}</label>
                            <select class="form-select w-75" id="{{ $name }}" name="model" >
                                <option value="">Select {{ Str::title($name) }}</option>

                                @foreach($allCelebrity as $celeb )
                                <option value="{{ $celeb["id"] }}" >{{ $celeb["name"] }}</option>
                                @endforeach

                                
                            </select>
                        </div>

                        <x-admin.image-component name="thumbnail"/>

                        <x-admin.input-field  type="text" name="image_caption" />

                        <x-admin.input-field  type="datetime-local" name="created_at" />


                        <x-admin.text-area />

                        <x-admin.input-field  type="submit" name="submit" />

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')

@include('admin.layout.helper.image-script')


@include('admin.layout.helper.ck-editor-script')


@endsection

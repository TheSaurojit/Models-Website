@extends('admin.layout.app')


@section('body')


    @include('admin.layout.error-msg')


    <div class="row">
        <div class="w-100">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Category</h4>

                    <form action="{{ route('create-category') }}" method="POST">

                        <x-admin.input-field  type="text" name="category" />

                        <x-admin.input-field  type="submit" name="submit" />

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

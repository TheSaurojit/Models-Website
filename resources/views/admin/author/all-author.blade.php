@extends('admin.layout.app')


@section('body')


    @include('admin.layout.helper.success-msg')


    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Authors</h4>
                
                <x-admin.table 
                    :headers="['Name' ,'Image']"
                    :columns="['name']"
                    :arrayData="$authors"
                    :editUrl="'update-author'"
                    :deleteUrl="'delete-author'"
                />
                
            </div>
        </div>
    </div>


@endsection
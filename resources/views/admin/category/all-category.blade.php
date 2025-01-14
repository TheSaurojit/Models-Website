@extends('admin.layout.app')




@section('body')


    @include('admin.layout.success-msg')

    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Categories</h4>
                
                <x-admin.table 
                    :headers="[ 'Name']"
                    :columns="[ 'name']"
                    :arrayData="$allCategory"
                    :editUrl="'update-category'"
                    :deleteUrl="'delete-category'"
                />
                
            </div>
        </div>
    </div>


@endsection
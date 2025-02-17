@extends('admin.layout.app')


@section('body')


    @include('admin.layout.helper.success-msg')


    <div class="w-100">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">All Posts</h4>

                <a href="{{ route('all-delete-posts') }}">
                    <button style="background-color:yellow">

                        Delete Posts
                    </button>
                </a>
                <br><br>
                <br><br>
                
                <x-admin.table 
                    :headers="['Title' ,'Thumbnail']"
                    :columns="['title']"
                    :arrayData="$posts"
                    :editUrl="'update-post'"
                    :deleteUrl="'delete-post'"
                    :first="true"
                />
                
            </div>
        </div>
    </div>


@endsection
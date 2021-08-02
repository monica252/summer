@extends('layouts.profile') 

@section('title','プロフィールの編集')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール編集</h2>
                    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                        @if(count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>
                                        </li{{ $e }}>
                                @endif
                </div>
            </div>
        </div>
    @endsection
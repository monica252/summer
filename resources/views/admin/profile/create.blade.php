@extends('layouts.profile') 

@section('title','プロフィールの新規作成')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール新規作成</h2>
                    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                </div>
            </div>
        </div>
    @endsection
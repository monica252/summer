@extends('layouts.profile') 

@section('title','プロフィールの新規作成')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール新規作成</h2>
                    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-md-2" for="title">氏名</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="title">性別</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="title">趣味</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="title">自己紹介欄</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="更新">
                    </form>
                </div>
            </div>
        </div>
    @endsection
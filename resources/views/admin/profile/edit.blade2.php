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
                                @endforeach
                        @endif
                        {{-- 以下を追記　--}}
                        <div class="row mt-5">
                            <div class="col-md-4 mx-auto">
                                <h2>編集履歴</h2>
                                <ul class="list-group">
                                    @if($news_form->histories != NULL)
                                        @foreach($news_form->histories as $history)
                                            <li class="list-group-item">{{ $history->edited_at }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    @endsection

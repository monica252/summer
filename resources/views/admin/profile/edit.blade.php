@extends('layouts.profile') 

@section('title','プロフィールの編集')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール編集</h2>
                    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                </div>
            </div>
        </div>
        </form>
        <div class="row mt-5">
            <div class="col-md-4 mx-auto">
                <h2>編集履歴</h2>
                <ul class="list-group">
                    @if($profile_form->prohis != NULL)
                        @foreach($profile_form->prohis as $prohis)
                            <li class="list-group-item">{{ $prohis->edited_at }}</li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
        </div>
        </div>
        </div>
    @endsection
@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>{{ $headline->name }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mx-auto">
                            <div class="gender">性別：{{ $headline->gender }}</div>
                            <div class="hobby">趣味：{{ $headline->hobby }}</div>
                            <div class="introduction">自己紹介欄：{{ $headline->introduction }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-12">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="gender">
                                    性別：{{ $post->gender }}
                                </div>
                                <div class="hobby mt-3">
                                    趣味：{{ $post->hobby }}
                                </div>
                                 <div class="introduction mt-3">
                                    自己紹介欄：{{ $post->introduction }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>

    </div>
@endsection
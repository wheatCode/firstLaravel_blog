@extends('layouts.app') 

@section('title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">部落格文章管理</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">首頁</a>
                    </li>
                    <li class="active">
                    <a href="/posts">部落格文章管理</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="page-content">
    <div class="row">
        <div class="container">
            <div class="clearfix">
                <a href="/posts/create" class="btn-primary btn-lg pull-right">+</a>
            </div>
            <ul class="list-group">
                @foreach ($posts as $post)
                <li class="list-group-item">{{$post->title}}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">新增文章</h4>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">首頁</a>
                    </li>
                    <li>
                        <a href="/posts/admin">部落格文章管理</a>
                    </li>
                    <li class="active">新增文章</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <form method="post" action="/posts">
            @csrf
            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="請輸入標題...">
            </div>
            <div class="form-group">
                <label for="content">內文</label>
                <textarea class="form-control" name="content" id="content" placeholder="請輸入文章內容..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送出</button>
            <button type="button" class="btn btn-success" onclick="history.go(-1)">取消</button>
        </form>
    </div>
</div>
@endsection

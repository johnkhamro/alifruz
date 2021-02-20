@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Добавить категорию
    <small>приятные слова..</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Меняем категорию</h3>
    </div>
    @include('admin.errors')
    {{Form::open(['route' => ['freights.update', $item->id], 'method' => 'put'])}}
    <div class="box-body">
        <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$item->title}}">
        </div>
    </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <a href="{{route('freights.index')}}" class="btn btn-default">Назад</a>
        <button class="btn btn-warning pull-right">Изменить</button>
    </div>
    <!-- /.box-footer-->
    {{Form::close()}}
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
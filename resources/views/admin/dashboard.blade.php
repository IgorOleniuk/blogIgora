@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
           <p><span class="badge badge-primary" style="font-size: large">Категорий 0</span></p>

        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
           <p><span class="badge badge-primary" style="font-size: large">Материалов 0</span></p>

        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
           <p><span class="badge badge-primary" style="font-size: large">Посетителей 0</span></p>

        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
           <p><span class="badge badge-primary" style="font-size: large">Сегодня 0</span></p>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
         <a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Создать категорию</a>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Категория первая</h4>
            <p class="list-group-item-text">
              Кол-во материалов
            </p>
          </a>
        </div>
        <div class="col-sm-6">
          <a class="btn btn-block btn-default" href="#">Создать материал</a>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Материал первый</h4>
            <p class="list-group-item-text">
              Категория
            </p>
          </a>
        </div>
     </div>
  </div>
@endsection

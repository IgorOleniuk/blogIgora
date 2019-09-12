@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
      @component('admin.components.breadcrumb')
        @slot('title') Список новостей @endslot
        @slot('parent') <span class="mr-1">Главная </span> @endslot
        @slot('active') / Новости @endslot
      @endcomponent

      <hr>
      <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">
        <i class="fa fa-plus-square-o"></i> Создать новость</a>
      <table class="table table-striped">
        <thead>
           <th>Наименования</th>
           <th>Публикация</th>
           <th class="text-right">Дейстивия</th>
        </thead>
        <tbody>
            @forelse ($articles as $article)
              <tr>
                <td>{{$articles->title}}</td>
                <td>{{$articles->published}}</td>
                <td class="text-right">

                  <form onsubmit="return confirm('Удалить?')"
                  action="{{route('admin.category.destroy', $category)}}"  method="post">
                      <input type="hidden" name="_method" value="DELETE">
                      {{csrf_field() }}
                      <a class="btn btn-default" href="{{route('admin.category.edit', $category)}}">
                        <i class="fa fa-edit"></i></a>
                      <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                  </form>

                </td>
              </tr>

            @empty
              <tr>
                  <td class="text-center" colspan="3"><h2>Данные отсуствуют</h2></td>
              </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
              <td colspan="3">
                <ul class="pagination pull-right">
                    {{$articles->links()}}
                </ul>
              </td>
            </tr>
        </tfoot>
      </table>
  </div>
@endsection

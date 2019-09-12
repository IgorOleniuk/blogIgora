@extends ('admin.layouts.app_admin')

@section ('content')

    <div class="container">

        @component ('admin.components.breadcrumb')
          @slot ('title') Создания новости @endslot
          @slot ('parent')  <span class="mr-1">Главная </span>  @endslot
          @slot ('active') / Новости @endslot
        @endcomponent
        <hr>

        <form class="form-horizontal" method="post" action="{{route('admin.category.store')}}">
            {{csrf_field()}}

           @include('admin.categories.partials.form')

           <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection

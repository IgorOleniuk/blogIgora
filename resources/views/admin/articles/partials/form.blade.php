<div class="form-group w-100">
 <label for="">Статус</lablel>
 <select class="form-control" name="published">

@if (isset($article->id))
    <option value="0" @if($article->published == 0) selected="" @endif>Не опубликовано</option>
    <option value="1"  @if($article->published == 1) selected="" @endif>Опубликовано</option>
@else
    <option value="0">Не опубликовано</option>
    <option value="1">Опубликовано</option>
@endif

 </select>

  <label for="">Заголовок</lablel>
  <input type="text" class="form-control" name="title" placeholder="Заголовок новости"
    value="{{$article->title ?? ""}}" required></input>

  <label for="">Slug (Уникальное значение)</lablel>
  <input type="text" class="form-control" name="slug" placeholder="Автоматичекская генерация"
    value="{{$article->slug ?? ""}}" readonly></input>

  <label for="">Родительская категория</lablel>
  <select class="form-control" name="categories[]" multiple>

     @include('admin.articles.partials.categories', ['categories' => $categories])
  </select>

  <lable for="">Краткое описание</label>
  <textarea class="form-control" name="description_short" id="description_short">
    {{$article->description_short ?? ""}}
  </textarea>
   <lable for="">Полное описание</label>
    <textarea class="form-control" name="description" id="description">
      {{$article->description ?? ""}}
    </textarea>
   <hr>
   <label for="">Мета заголовок</label>
   <input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title or ""}}">

   <label for="">Мета описание</label>
   <input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description or ""}}">

   <label for="">Ключевые слова</label>
   <input type="text" class="form-control" name="meta_keeyword" placeholder="Ключевые слова" value="{{$article->meta_keeyword or ""}}">
   <hr>

  <input class="btn btn-primary" type="submit" value="Сохранить">
</div>

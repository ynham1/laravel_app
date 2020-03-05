@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">ToDo作成</h2>
{!! Form::open(['route' => 'todo.store']) !!}
<div class="form-group">
    {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control', 'placeholder' => 'ToDo内容']) !!}
    <input type='hidden' name="test" value="test">  
  </div>
  {!! Form::submit('追加', ['class' => 'btn btn-success float-right']) !!}
{!! Form::close() !!}
<!--  action = コントローラーを指定/URL生成
      method = HTTPメソッドを指定('get','put','patch','post','delete')
      form.open : form作成(formメソッドの利用開始) /route : アクセス制御 View側で転送先URLを指定
      form.input : 入力フィールドの作成 1.入力タイプ　2.フィールド名 3.入力フィールドの初期値 4.追加したいフィールド属性を配列で指定-->

@endsection
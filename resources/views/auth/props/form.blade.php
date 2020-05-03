@extends('admin/master')
@isset($prop)
@section('title', 'Редактировать свойство '.$prop->name)
@else

@section('title', 'Создать свойство')
@endisset
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @isset($prop) <h1>Редактировать свойство {{ $prop->name }}</h1> @else <h1>Добавить
                        свойство</h1> @endisset
                </div>
                <form method="POST" enctype="multipart/form-data" @isset($prop)
                    action="{{ route('props.update', $prop) }}" @else action="{{ route('props.store') }}" @endisset>
                    @csrf
                    @isset($prop)
                    @method('PUT')
                    @endisset

                    <input type="hidden" name="code" value="@isset($prop) {{ $prop->code }} @endisset">

                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Название</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="name" id="name"
                                value="@isset($prop) {{ $prop->name }} @endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="unit" class="col-sm-2 col-form-label">Единицы измерения</label>
                        <div class="col-sm-6">
                            <input type="text" name="unit" class="form-control" id="unit"
                                value="@isset($prop) {{ $prop->name }} @endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <h3 class="col-sm-12">Относится к категории</h3>
                        @foreach ($categories as $category)
                        <label class="col-sm-4 col-form-label">
                            {{$category->name}}
                            <input type="checkbox" name="categori[{{$category->id}}]" value="{{$category->id}}"
                                @isset($prop) @if($prop->categories()->find($category->id))
                            checked="checked"
                            @endif
                            @endisset>
                        </label>
                        @endforeach
                    </div>

                    <button class="btn" type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
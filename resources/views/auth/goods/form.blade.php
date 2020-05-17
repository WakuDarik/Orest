@extends('admin/master')
@isset($good)
@section('title', 'Редактировать товар '.$good->name)
@else

@section('title', 'Создать товар')
@endisset
@section('content')
<style>
    .more_img img {
        max-width: 250px;
    }

    .tox .tox-editor-container,
    .tox.tox-tinymce {
        width: 920px !important;
        height: 500px !important;
    }
</style>
{{-- @dd($propsGood) --}}
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @isset($good) <h1>Редактировать товар {{ $good->name }}</h1> @else <h1>Добавить
                        товар</h1> @endisset
                </div>
                <form method="POST" enctype="multipart/form-data" @isset($good)
                    action="{{ route('goods.update', $good) }}" @else action="{{ route('goods.store') }}" @endisset>
                    @csrf
                    @isset($good)
                    @method('PUT')
                    @endisset

                    <div class="input-group row">
                        <label for="name" class="col-sm-2 col-form-label">Назване: </label>
                        <div class="col-sm-6">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ old('name', isset($good) ? $good->name : null) }}">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="articul" class="col-sm-2 col-form-label">Артикул: </label>
                        <div class="col-sm-6">
                            <input type="text" name="articul" class="form-control" id="articul"
                                value="@isset($good) {{ $good->articul }} @endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="price" class="col-sm-2 col-form-label">Залог: </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="price" id="price"
                                value="@isset($good) {{ $good->price }} @endisset">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="rent1" class="col-sm-2 col-form-label">Оренда на 4 часа: </label>
                        <div class="col-sm-6">
                            <input type="text" name="rent1" class="form-control" id="rent1"
                                value="{{ old('rent1', isset($good) ? $good->rent1  : null) }}">
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="rent2" class="col-sm-2 col-form-label">Оренда на 1 - 2 дня: </label>
                        <div class="col-sm-6">
                            <input type="text" name="rent2" class="form-control" id="rent2"
                                value="{{ old('rent2', isset($good) ? $good->rent2  : null) }}">
                        </div>
                    </div>
                    <div class="input-group row">
                        <label for="rent3" class="col-sm-2 col-form-label">Оренда на 3 - 6 дней: </label>
                        <div class="col-sm-6">
                            <input type="text" name="rent3" class="form-control" id="rent3"
                                value="{{ old('rent3', isset($good) ? $good->rent3  : null) }}">
                        </div>
                    </div>
                    <div class="input-group row">
                        <label for="rent4" class="col-sm-2 col-form-label">Оренда на от 7 дней: </label>
                        <div class="col-sm-6">
                            <input type="text" name="rent4" class="form-control" id="rent4"
                                value="{{ old('rent4', isset($good) ? $good->rent4  : null) }}">
                        </div>
                    </div>
                    <div class="input-group row">
                        @if(!isset($good))
                        <label for="categories_select" class="col-sm-2 col-form-label">Категория </label>
                        <div class="col-sm-6">
                            <select name="category_id" id="categories_select" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{$category->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        @else
                        <label class="col-sm-8 col-form-label">Категория {{$categories->name}}</label>
                        <input type="hidden" disabled name="category_id" value="{{$categories->id}}"
                            placeholder="{{$categories->name}}">
                        @endif
                    </div>
                    <div class="input-group row">
                        <h3 class="col-md-12">Свойства</h3>
                        <div class="props-wrap">
                            @foreach ($props as $prop)
                            {{-- @dd($good->propsProds->firstWhere('id', $prop->id)->pivot->unit) --}}

                            <div class="prop-wrap">
                                <label class="col-sm-2 col-form-label">{{ $prop->name }}</label>
                                <div class="col-sm-6">
                                    <input type="text" name="unit[{{$prop->id}}]" class="form-control"
                                        value="@isset($good)@if(isset($good->propsProds->firstWhere('id', $prop->id)->pivot->unit) && !empty($good->propsProds->firstWhere('id', $prop->id)->pivot->unit)){{$good->propsProds->firstWhere('id', $prop->id)->pivot->unit}}@endif @endisset">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="input-group row">
                        <label for="description" class="col-sm-2 col-form-label">Описание
                        </label>
                        <div class="col-sm-6">
                            <textarea name="description" class="form-control" id="description" style="width: 100%">@isset($good) {{ $good->description }} @endisset
                            </textarea>
                        </div>
                    </div>

                    <div class="input-group row">
                        @isset($good)
                        <img src="{{Storage::url($good->iamge)}}" alt="" class="col-sm-12 col-form-label">
                        @endisset
                        <div class="col-sm-6">
                            Выбрать / изменить фото<input class="form-control" type="file" name="iamge">
                        </div>
                    </div>
                    <div class="input-group row">
                        @isset($good)
                        <div class="more_img">
                            @foreach ($good->images()->get() as $images)
                            <div class="moreImg-wrap">
                                <a class="delMoreImg" data-img-id="{{$images->id}}">x</a>
                                <img src="{{Storage::url($images->iamge)}}" alt="">
                            </div>
                            @endforeach
                        </div>
                        @endisset
                        <label for>Дополнительные фото<input type="file" class="form-control" name="goods_images[]"
                                multiple> </label>
                    </div>
                    <button type="submit">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({selector:'textarea',plugins: "image imagetools"});
</script>
<script>
    $(function() {
        $('#categories_select').on('change',function(){
       let category = $(this).val()
            $.ajax({
            url: '{{ route('getProps') }}',
            type: "POST",
            data: {category:category},
            headers: {
                'X-CSRF-Token': $('input[name=_token]').val()
            },
            success: function (data) {
                $('.props-wrap').html('')
                data.forEach(el => {
                    $('.props-wrap').append(`
                    <label>${el.name}<input type="text" name="unit[${el.id}]"></label>`); 
                });
               
            },
                error: function (msg) {
                    alert('Ошибка');
                }   
            });
        });

        $('.delMoreImg').on('click',function(){
        let img_id = $(this).data('img-id')
            $.ajax({
            url: '{{ route('delMoreImg') }}',
            type: "POST",
            data: {img_id:img_id},
            headers: {
                'X-CSRF-Token': $('input[name=_token]').val()
            },
            success: function (data) {
                location.reload(true);

            },
                error: function (msg) {
                    alert('Ошибка');
                }   
            });
        });
    })
</script>
@endsection
<div class="item product-item sort-item" price="150 2">
    <div class="wrap">
        <h4><a href="{{ route('prod', [$prod->category->code, $prod->code]) }}">{{$prod->name}}</a></h4>
        <div class="visual">
            <a href="{{ route('prod', [$prod->category->code, $prod->code]) }}">
                <img src="{{Storage::url($prod->iamge)}}" alt="{{$prod->name}}" title="{{$prod->name}}">
            </a>
        </div>

        {{-- <div class="description">
        <ul>
                    <li style="text-align: left;">Высота пропила до 79 мм</li>
                              <li style="text-align: left;">Мощность 1800 Вт</li>
                     <li style="text-align: left;"></li>
        </ul>
  
      </div> --}}
        <div class="pre-price">
            <span style="" class="price">
                <strong style="font-size: 16px;"> {{$prod->rent1}}</strong> грн</span>
            <a href="#" class="btn btn-success open-modal" data-modal="rent-now"><span>Набрати менеджера</span></a>
            <a style="" href="{{route('basket-add', $prod->id)}}" data-title="{{$prod->name}}"
                class="btn btn-blue popup-toggle reserv-show">Орендувати</a>

        </div>
    </div>
</div>
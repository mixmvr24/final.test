@extends('layouts.shop')
@section('content')
    <div id="main">
        <div class="container">
            <div class="text-center indh">
                <h1 class="s24 f-m"><span class="pos-rel">Все категории</span></h1>
            </div>
            <div class="main-cont row">
                <div class="col-content">
                    <div class="categories">
                        <ul class="row tree4 wrapper-scroll-tree4">
                            @foreach($categories as $category)
                                <li id="{{$category->id}}" class="categories-item col-xs-6 col-sm-4 col-md-3">
                                    <a href="https://coredo.elite-board.org/Nedvizhimost/"
                                       class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/cat2.png')}}" alt="Недвижимость">
                                </span>
                                        <span class="tree-n bl-bl sp-now">{{$category->description}}</span>
                                        <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="list_message_block" class="list-block-ind row">
                        <div class="title-name s19 col-sm-12">Свежие объявления
                            <a class="a-all s14 bl-inl al-top a-hov" href="{{route('allmess')}}">Все объявления</a>
                        </div>
                        <div class="wrapper-scroll">
                            <div class="wrapper-scroll-bl">
                                @foreach($products as $product)
                                    <div class="list_message_block col-xs-6 col-sm-4 col-md-3 col5">
                                        <div id="{{$product->id}}" class="b-f br10">
                                        <span class="notepad-fav">
                                            <span class='notepad ic-star' data-id="1"
                                                  data-toggle="tooltip" data-placement="top"
                                                  title="Добавить в избранные">
                                            </span>
                                        </span>
                                            <div class="message_block_imag pos-rel br6">
                                                <a title="{{$product->name}}"
                                                   href='https://coredo.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html'>
                                                    <div class="carousel-img">
                                                        <img
                                                            alt="{{$product->name}}"
                                                            src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_0.webp">
                                                        <img
                                                            alt="{{$product->name}}"
                                                            src="/uploads/usr/0/ts_6700bfa7268531f7b9f11d5875989502_35_1.webp">
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message_block_tit pos-rel">
                                                <h3>
                                                    <a class="c-20 s14" title="{{$product->name}}"
                                                       href='https://coredo.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html'>
                                                        {{$product->name}}
                                                    </a>
                                                </h3>
                                                <div class="sp-now">
                                                <span class="s15">
                                                    <span class="currency">&#8381;</span>{{$product->price}}</span>
                                                    <span class="reg_cat s13 c-7">{{$product->country}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.shop')
@section('content')
    <div id="main">
        <div class="container">
            <div class="main-cont row">
                <div class="col-sm-12 col-content b-f bl-pad br3">
                    <h1>Все объявления</h1>
                    <div class="filter-panel bl-tb br6">
                    </div><!--// <- filter-panel//-->
                    <div class="count-a pad">Всего: {{$products->total()}} объявлений</div>
                    <div class="offerlist">
                        @foreach($products as $product)
                        <div id="{{$product->id}}" class="offer bl-tb pos-rel">
                            <div class="offer-photo bl-cell al-top pos-rel br3">
                                <div class="pos-rel ov-h">
                                    <a title="{{$product->name}}" href="#">
                                        <div class="carousel-img brazzers-daddy">
                                            <div class="tmb-wrap">
                                                <div class="tmb-wrap-table">
                                                    <div class="active"></div>
                                                    <div></div>
                                                </div>
                                            </div>
                                            <div class="image-wrap">
                                                <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready"
                                                     style="background-image: url(&quot;/uploads/usr/0/ts_2218d7c80632656c7fec8d0f8ffa6431_35_2.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img alt="{{$product->name}}"
                                                         src="#"
                                                         style="display: none;"></div>
                                                <div class="imgLiquidFill imgLiquid_bgSize imgLiquid_ready"
                                                     style="background-image: url(&quot;/uploads/usr/0/ts_2218d7c80632656c7fec8d0f8ffa6431_35_3.webp&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img alt="{{$product->name}}"
                                                         src="#"
                                                         style="display: none;">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="offer-title bl-cell al-top pos-rel">
                                <h3><a class="f-m a-hov" title="{{$product->name}}"
                                       href="#">{{$product->name}}</a></h3>
                                <div class="offer-location s13 c-7">{{$product->sub_category_id}}<br> {{$product->country}}</div>
                                <div class="offer-details pos-abs">
                                    <span class="offer-date bl-inl al-top s13 c-7">{{$product->created_at}}</span>
                                </div>
                            </div>
                            <div class="offer-price bl-cell al-top pos-rel text-right">
                                <div class="price bl-inl al-top s16 f-m">
                                    <span class="currency">₽</span>{{$product->price}}
                                </div>
                                <div class="offer-actions pos-abs">
                                    <div class="btn-group"></div>
                                    <span class="notepad ic-star" data-id="4" data-toggle="tooltip" data-placement="top"
                                          title="Добавить в избранные"></span>
                                </div>
                            </div>
                        </div><!--/bl-tb offer-->
                        @endforeach
                    </div><!--/offerlist-->
                    <div class="pagination-bar bl-tb">
                        <div class="pagination-btn pull-right">
                            {{$products->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

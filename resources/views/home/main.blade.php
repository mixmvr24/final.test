<div id="main">
        <div class="container">
            <div class="text-center indh">
                <h1 class="s24 f-m">
                    <span class="pos-rel">Все категории</span>
                </h1>
            </div>
            <div class="main-cont row">
                <div class="col-content">
                    <div class="categories">
                        <ul class="row tree4 wrapper-scroll-tree4">
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/auto.png')}}" alt="Autotransport">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Авто и транспорт</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/appliances.png')}}" alt="Appliances">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Бытовая техника</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/decor.png')}}" alt="decor">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Декор</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/electronics.png')}}" alt="electronics">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Электроника</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/musical.png')}}" alt="musicalEquipment">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Музыкальное оборудование</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/office.png')}}" alt="officeEquipment">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Офисная техника</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/personal.png')}}" alt="personalEquipment">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Гардероб</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                            <li class="categories-item col-xs-6 col-sm-4 col-md-3">
                                <a href="#" class="c-20 s15 bl-bl b-f pos-rel row">
                                <span class="img-circ pull-left">
                                    <img src="{{asset('/images/services.png')}}" alt="services">
                                </span>
                                    <span class="tree-n bl-bl sp-now">Услуги</span>
                                    <span class="count-tree c-7 s13 bl-bl sp-now">5 объявлений</span>
                                </a>
                            </li>
                        </ul>
                    </div>
{{--                    <div id="list_message_block" class="list-block-ind row">
                        <div class="title-name s19 col-sm-12">Свежие объявления
                            <a class="a-all s14 bl-inl al-top a-hov" href="{{route('allmess')}}">Все объявления</a>
                        </div>
                        <div class="wrapper-scroll">
                            <div class="wrapper-scroll-bl">
                                @foreach($posts as $post)
                                    <div class="list_message_block col-xs-6 col-sm-4 col-md-3 col5">
                                        <div id="{{$post->id}}" class="b-f br10">
                                        <span class="notepad-fav">
                                            <span class='notepad ic-star' data-id="1"
                                                  data-toggle="tooltip" data-placement="top"
                                                  title="Добавить в избранные">
                                            </span>
                                        </span>
                                            <div class="message_block_imag pos-rel br6">
                                                <a title="{{$post->name}}"
                                                   href='https://coredo.elite-board.org/Russia/Moscow/Nedvizhimost/apartmen/sale/1-prodam-1-k-kvartiru-41-m-9-24-jet.html'>
                                                    <div class="carousel-img">
                                                        <img
                                                            alt="{{$post->name}}"
                                                            src="{{asset('/images/test.webp')}}">
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
                    </div>--}}
                </div>
            </div>
        </div>
    </div>


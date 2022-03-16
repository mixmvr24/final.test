@extends('layouts.shop')
@section('content')
    <div id="main">
        <div class="container page-add">
            <div class="main-cont row">
                <div class="col-sm-9 col-content b-f bl-pad br3">
                    <h1>Добавить объявление</h1>
                    <div class="text-center">
                        <div class="bl-inl text-left form-add">
                            <form name="add" action="?" method="post" id="main_form">
                                <input type="hidden" name="form_id" id="form_id" value="0e718e2d9e41ea4a91e9321b631b2dde"><input type="hidden" name="add_cat" id="add_cat" value="">
                                <input type="hidden" name="add_region" id="add_region" value="">
                                <input name="post_filter" type="hidden" value="false">
                                <div class="section-title f-m s15">Личные данные</div>
                                <div class="bl-tb add-tb pos-rel">
                                    <div class="bl-celln bl-cell al-mid">
                                        <label for="name">Ваше имя</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top"><input name="name" value="" class="form-control" required="" type="text">
                                        <span class="icon-info" data-original-title="Представьтесь, пожалуйста" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="bl-tb add-tb pos-rel">
                                    <div class="bl-celln bl-cell al-mid">
                                        <label for="email">Ваш e-mail</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top"><input name="email" value="" class="form-control" required="" type="email">
                                        <span class="icon-info" data-original-title="Будет использоваться в качестве логина для входа в систему На этот адрес будут приходить ответы на Ваше объявление. Адрес будет защищён от спам-ботов." data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="bl-tb add-tb pos-rel">
                                    <div class="bl-celln bl-cell al-top">
                                        <label for="password1">Пароль</label>
                                    </div>
                                    <div class="bl-cellf bl-cell al-top">
                                        <div class="pos-rel"><input name="password1" id="password1" value="" class="form-control show-pas1" required="" type="password"><span class="masked1 bl-bl pos-abs point"></span></div>
                                        <div class="pos-rel"><input name="password2" id="password2" value="" class="form-control password2 show-pas2" placeholder="Повторите пароль" required="" type="password" style="display:none;"><span class="masked2 bl-bl pos-abs point"></span></div>
                                        <div class="alert alert-success text-center form-alert" style="display: none;" id="password_success">Пароли совпали!</div>
                                        <div class="alert alert-warning text-center form-alert" style="display: none;" id="password_warning">Пароли не совпадают!</div>
                                        <div class="alert alert-info form-alert" style="display: none;" id="password_info">Пароль слишком короткий!</div>
                                        <span class="icon-info" data-original-title="Укажите пароль для регистрации, не меньше 6-ти символов" data-placement="top" data-toggle="tooltip"></span></div>
                                </div>
                                <div class="section-title f-m s15">Размещение объявления</div>
                                <div class="bl-tb add-tb pos-rel">
                                    <div class="bl-celln bl-cell al-mid"><label class="control-label" for="title">Заголовок объявления</label></div>
                                    <div class="bl-cellf bl-cell al-top"><input value="" maxlength="100" name="title" data-original-title="Сформулируете кратко основную тему сообщения" class="form-control calcletters" required="" type="text">
                                        <span class="icon-info" data-original-title="Сформулируете кратко основную тему сообщения" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="bl-tb add-tb pos-rel">
                                    <div class="bl-celln bl-cell al-mid"><label for="timing">Срок публикации</label></div>
                                    <div class="bl-cellf bl-cell al-top"><select size="1" name="timing" class="form-control" required="">
                                            <option>[ Ваш выбор ]</option>
                                            <option value="11">1 неделя</option><option value="10">1 месяц</option><option value="9">1 год</option></select>
                                        <span class="icon-info" data-original-title="Выберите срок размещения объявления. Если объявление не потеряет своей	актуальности, Вы сможете продлить его размещение до окончания этого срока." data-placement="top" data-toggle="tooltip"></span></div>
                                </div>
                                <div class="bl-tb add-tb pos-rel multiselect_cont">
                                    <div class="bl-celln bl-cell al-top"><label>Выберите регион</label></div>
                                    <div class="bl-cellf bl-cell al-top"><div class="multiselect" data-action="" data-name="region" data-default="">
                                            <div><select class="form-control" size="1"><option value="">[ Ваш выбор ]</option><option value="1">Россия</option><option value="104">Украина</option><option value="105">Белоруссия</option><option value="114">Грузия</option><option value="113">Туркмения</option><option value="112">Узбекистан</option><option value="111">Таджикистан</option><option value="110">Молдавия</option><option value="109">Киргизия</option><option value="108">Казахстан</option><option value="107">Армения</option><option value="106">Азербайджан</option><option value="115">Другое</option></select></div></div>
                                        <div class="alert alert-success text-center form-alert" id="alert_region_success" style="display: none;">[ Выбрано ]</div>
                                        <div class="alert alert-warning text-center form-alert" id="alert_region_warning" style="display: none;">Продолжите выбор</div>
                                        <span class="icon-info" data-original-title="Выберите регион, к которому относится Ваше объявление" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="bl-tb add-tb pos-rel multiselect_cont">
                                    <div class="bl-celln bl-cell al-top"><label>Выберите рубрику</label></div>
                                    <div class="bl-cellf bl-cell al-top"><div class="multiselect" data-action="load" data-name="cat" data-default="">
                                            <div><select class="form-control" size="1"><option value="">[ Ваш выбор ]</option><option value="1">Автотранспорт</option><option value="5">Недвижимость</option><option value="4">Работа</option><option value="6">Личные вещи</option><option value="13">Мебель, интерьер</option><option value="16">Знакомства</option><option value="15">Товары</option><option value="3">Животные</option><option value="14">Музыка, искусство</option><option value="9">Бытовая техника</option><option value="2">Бизнес</option><option value="11">Услуги</option><option value="7">Телефоны</option><option value="12">Строй материалы</option><option value="154">Оборудование</option><option value="155">Оргтехника</option></select></div></div>
                                        <div class="alert alert-success text-center form-alert" id="alert_cat_success" style="display: none;">[ Выбрано ]</div>
                                        <div class="alert alert-warning text-center form-alert" id="alert_cat_warning" style="display: none;">Продолжите выбор</div>
                                        <span class="icon-info" data-original-title="Выберите категорию, к которой относится Ваше объявление" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div id="fields"></div>
                                <div class="add-tb pos-rel"><div class="section-title_2 f-m s15">Описание объявления</div>
                                    <div class="text_field bl-cellf pos-rel">
                                        <textarea required="" maxlength="2000" class="form-control calcletters" name="content" rows="5"></textarea>
                                        <span class="icon-info" data-original-title="Максимум символов в сообщении: 2000" data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="add-tb"><div class="section-title_2 f-m s15">Теги быстрого поиска</div>
                                    <div class="pos-rel tag-ic"><div class="bl-cellf"><input name="tagsinput" type="text" value="" id="tagsinput" class="form-control"></div>
                                        <div id="tag_block"></div>
                                        <span class="icon-info" data-original-title="Введите через запятую ключевые слова соответствующие тематике Вашего объявления или выберите из списка ниже. Вы можете использовать до 10 ключевых слов или словосочетаний. Длина каждого слова или словосочетания не должна превышать 30 символов." data-placement="top" data-toggle="tooltip"></span>
                                    </div>
                                </div>
                                <div class="bl-tb add-tb add-tb-captcha pos-rel">
                                    <div class="bl-celln bl-cell al-mid"><label>Защита от роботов</label></div>
                                    <div class="bl-cellf bl-cell al-top"><div class="captcha_cont">
                                            <img alt="" src="/captcha/832091">
                                            <input name="captcha" required="" class="form-control bl-inl al-top required" type="text" placeholder="Код" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form_submit text-center">
                                    <br>
                                    <div class="form-group"><div class="checkbox cl-check"><input id="rules" type="checkbox" required=""><label for="rules">Ваше согласие с <a class="license" href="#">правилами публикации</a></label></div></div>
                                    <div class="modal fade" id="license_text" tabindex="-1" role="dialog" aria-labelledby="license_title" aria-hidden="true"><div class="modal-dialog text-left"><div class="modal-content">
                                                <div class="modal-header"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                                    <h4 class="modal-title" id="license_title">Правила публикации</h4></div>
                                                <div class="modal-body">Все материалы, добавляемые на сайт, становятся собственностью сайта и администрация сайта имеет право использовать все тексты и медиа материалы в своих нуждах. Вся ответственность за содержание объявлений в полном объёме возлагается на авторов объявлений. Администрация сайта оставляет за собой право удалять и редактировать объявление без уведомления автора объявления и без объяснения причин.<br>
                                                    Вы согласны получать смс и/или email сообщения от администрации сайта. <br>
                                                    Вы подтверждаете свое согласие на обработку персональных данных: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, передачу, блокирование, обезличивание, уничтожение. Срок действия Вашего согласия является неограниченным.<br>
                                                    <br>
                                                    К публикации запрещается:<br>
                                                    - информация, нарушающая законы Российской Федерации;<br>
                                                    - одинаковые объявления;<br>
                                                    - объявления содержащие заведомо ложную информацию.</div>
                                            </div></div></div>
                                    <input class="btn btn-success btn-block s18" type="submit" name="submit" value="Разместить">
                                </div>
                                <input type="hidden" name="_csrf" value="6aa5d8dcdc73cff2a5ded1cc1e0bc0061646068239"></form>
                        </div>
                    </div>
                    <link href="{{asset('css/style.css')}}" rel="stylesheet">
                </div>
                <div class="col-sm-3 col-sidebar"><div class="sidebar_right">
                        <div class="headerblock b-f bl-pad br3">
                            <div class="headercontent">
                                <div class="bl-ad1 pos-rel br3">
                                    <div class="bl-ad1-tit s18 f-m text-up">Как продать быстрее</div>
                                    <ul class="bl-ad1-cont s13">
                                        <li>Указывайте разумную цену</li>
                                        <li>Добавьте фотографии</li>
                                        <li>Добавьте видео</li>
                                        <li>Подробно опишите товар</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/lightslider.min.js')}}"></script>
    <link href="{{asset('css/lightslider.min.css')}}" rel="stylesheet" />
    <script src="{{asset('js/script.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fileupload.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fileupload-ui.css')}}">
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/inputmask_all.js')}}"></script>
    <script src="{{asset('js/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('js/fu/tmpl.min.js')}}"></script>
    <script src="{{asset('js/fu/load-image.all.min.js')}}"></script>
    <script src="{{asset('js/fu/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('js/fu/jquery.fileupload.js')}}/"></script>
    <script src="{{asset('js/fu/jquery.fileupload-process.js')}}"></script>
    <script src="{{asset('js/fu/jquery.fileupload-image.js')}}"></script>
    <script src="{{asset('js/fu/jquery.fileupload-validate.js')}}"></script>
    <script src="{{asset('js/fu/jquery.fileupload-ui.js')}}"></script>
    <script>
        $(function() {
            $('#fields').on('load_form', function() {
                file_containers = $(this).find('.ajaxupload');
                file_containers.each(
                    function() {
                        var el = $(this);
                        var regexp = new RegExp("(.|/)(" + el.attr('data-ext') + ")$", "i");
                        el.fileupload({
                            acceptFileTypes: regexp,
                            maxNumberOfFiles: parseInt(el.attr('data-cnt')),
                            maxFileSize: parseInt(el.attr('data-max')) * 1024,
                            url: '/ajaxfileupload/?field_id=' + el.attr('data-id') + '&form_id=' + form_id,
                            autoUpload: true,
                            previewCrop: true,
                            previewMaxWidth: 100
                        });

                        $.ajax({
                            url: el.fileupload('option', 'url'),
                            dataType: 'json',
                            context: el[0]
                        }).always(function() {
                            $(this).removeClass('fileupload-processing');
                        }).done(function(result) {
                            $(this).fileupload('option', 'done')
                                .call(this, $.Event('done'), {
                                    result: result
                                });
                            $(".files").sortable();
                        });

                    }
                );

            });
        });
    </script>
    <style>
        .template-upload,
        .template-download {
            margin-right: 20px;
            float: left;
            position: relative;
            margin-bottom: 10px;
        }

        .progress-striped {
            height: 8px
        }

        .progress-extended {
            line-height: normal;
            font-size: 12px;
            color: #444;
            margin: -1px 0px 4px;
        }

        .preview-img {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .preview-img,
        .files .preview,
        .preview canvas {
            width: 100px;
            height: 100px;
            border-radius: 3px;
            -webkit-border-radius: 3px;
        }

        .template-upload .fileact,
        .template-download .fileact {
            display: block;
            height: 28px;
            left: -5px;
            position: absolute;
            top: -4px;
            width: 28px;
        }

        .fileact a.delete,
        .fileact a.delete:hover {
            background: #e74c3c;
            border-radius: 100%;
            color: #fff;
            display: block;
            font-size: 16px;
            height: 28px;
            line-height: 29px;
            text-align: center;
            width: 28px;
        }

        .fileact a.cancel,
        .fileact a.cancel:hover {
            background: #f1c40f;
            border-radius: 100%;
            color: #fff;
            display: block;
            font-size: 16px;
            height: 28px;
            line-height: 29px;
            text-align: center;
            width: 28px;
        }

        .preview img {
            max-width: 100px;
            max-height: 100px;
        }

        .ajaxupload .error,
        .fileerr {
            background: rgba(255, 255, 255, 0.85);
            border-radius: 3px;
            border: none;
            font-size: 12px;
            padding: 35px 0 0 3px;
            height: 100px;
            line-height: normal;
            position: absolute;
            top: 0;
        }

        .ajaxupload .error.text-danger {
            background-color: transparent !important;
        }

        .progress.progress-striped.active {
            margin-bottom: 0px !important;
        }

        .fileact {
            width: 10px;
        }

        .filesize {
            width: 50%;
        }

        .ajaxupload-f .preview-img {
            background-size: auto;
            background-position: 20% 0;
        }

        .files .preview {
            cursor: move;
        }

        @media screen and (max-width: 410px) {
            .template-upload,
            .template-download {
                margin-right: 6px
            }
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".imgLiquidFill").imgLiquid();
        });
    </script>
    <script>
        $(".mobile-btn").click(function() {
            $(".mobile-menu").addClass("open");
            $(".menu-overly-mask").addClass("open");
        });
        $(".mbtn-close").click(function() {
            $(".mobile-menu").removeClass("open");
            $(".menu-overly-mask").removeClass("open");
        });
    </script>
    <script src="{{asset('js/imgLiquid-min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        var _csrf = document.cookie.split("_csrf=");
        if (_csrf[1] !== undefined) {
            _csrf = _csrf[1].split(";");
            _csrf = _csrf[0]
            $("form[method=post]").each(function() {
                $("<input>").attr("type", "hidden").attr("name", "_csrf").attr("value", _csrf).appendTo($(this));
            });
        }
    </script>
@endsection

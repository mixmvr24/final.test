@extends('layouts.shop')
@section('content')
    <div id="main">
        <div class="container">
            <div class="bl-tb container-tb">
                <div class="bl-cell al-top bl-center">
                    <div class="registr_block1 text-center" id="panel_reg">
                        <form name="panel_reg" action="" method="post"
                              class="form-registr form-container bl-inl al-top form-hover">
                            @csrf
                            <div class="text-left">
                                <div class="text-center"><h1>Регистрация</h1></div>
                                <div class="form-group pos-rel">
                                    <input placeholder="email" id="email" class="form-control"  name="email" type="email" value="">
                                </div>
                                <div class="form-group pos-rel">
                                    <div class="pos-rel">
                                        <input placeholder="Пароль" name="password" id="password1" value="" class="form-control show-pas1" type="password">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                    </div>
                                </div>
                            </div>
                                <input type="submit" name="submit_registr" value="Сохранить" class="btn btn-primary s16">
                    </div>
                </div>
                        </form>
            </div>
        </div>
    </div>
@endsection

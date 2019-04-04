<div class="widget-author widget-register-form boxed">
    <div class="row">
        <div class="col-xs-10  col-xs-offset-1">
            <h2>Регистрация</h2>
            <p>Для регистрации заполните все поля</p>

            <form class="form-horizontal" method="POST" enctype="application/x-www-form-urlencoded" action="{{ route('registerPost') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Имя/Никнейм</label>
                    <div class="btn-warning--transparent">{{$errors->first('name')}} </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ivan Ivanov"  value="{{ old('name') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail</label>
                    <div class="btn-warning--transparent">{{$errors->first('email')}} </div>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="user@domain.ru" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                    <div class="btn-warning--transparent">{{$errors->first('password')}} </div>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="" name="password" value="{{ old('password') }}" placeholder="Придумайте пароль">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Подтверждение пароля</label>
                    <div class="btn-warning--transparent">{{$errors->first('password2')}} </div>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" id="" name="password2" value="{{ old('password2') }}" placeholder="Пароль еще раз">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label">Номер телефона</label>
                    <div class="btn-warning--transparent">{{$errors->first('phone')}} </div>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="" name="phone" placeholder="+375 (29) 525-45-57" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">

                        <div class="checkbox">

                            <label>
                                <div class="btn-warning--transparent">{{$errors->first('is_confirmed')}} </div>
                                <input type="checkbox" name="is_confirmed" {{ old('is_confirmed') ? 'checked' : '' }}>Согласен с условиями сайта</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-gray">Очистить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
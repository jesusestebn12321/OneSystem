<div class="modal modalLogin" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="app-modal-header modal-header">
                <button class="close cerrarLogin">&times;</button>
                <h3>Login <span class="fa fa-user"></span></h3>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif                          
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>                           
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div> 
                </div>
                <div class="app-modal-footer modal-footer">
                    <div class="form-group">
                        <a class="btn btn-link" href="{{ route('password.request') }}">Recuperar Contraseña?</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

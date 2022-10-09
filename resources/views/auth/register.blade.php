<x-guest-layout>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{url('/dashboard')}}" class="h1"><b>Inventario</b>SV</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Registrar un nuevo usuario</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="input-group mb-3">
          <input type="text" id="name" name="name" class="form-control" placeholder="Nombre completo">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               He leído los <a href="#">términos y condiciones</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{url('login')}}" class="text-center">Ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</x-guest-layout>

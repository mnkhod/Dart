@extends('../layouts/main')

@section('content')

<div class="container my-5 py-5">
  <div class="row position-relative">
   <div class="toast"  style="position: absolute; top: -12%; right: 2%;" role="alert" aria-live="assertive" aria-atomic="true">
    @error('email')
        <div class="toast-header text-white bg-info">
          <strong class="mr-auto">Dart Notification</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="text-white">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          {{ $message }}
        </div>
    @enderror
    @error('password')
        <div class="toast-header text-white bg-info">
          <strong class="mr-auto">Dart Notification</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="text-white">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          {{ $message }}
        </div>
    @enderror
    @error('name')
        <div class="toast-header text-white bg-info">
          <strong class="mr-auto">Dart Notification</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="text-white">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          {{ $message }}
        </div>
    @enderror
    @error('email')
        <div class="toast-header text-white bg-info">
          <strong class="mr-auto">Dart Notification</strong>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true" class="text-white">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          {{ $message }}
        </div>
    @enderror
    </div>





    <div class="col-md">
      <div class="jumbotron rounded-lg h-100">
        <h1>{{ __('Register') }}</h1>
        <hr class="mt-3 mb-0">
        <form class="d-flex flex-column justify-content-center h-100" method="POST" action="{{ route('register') }}">
          @csrf

          <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          </div>

          <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          </div>

          <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          </div>

          <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
          </div>

          <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
              </a>
          @endif

        </form>
      </div>
    </div>
    <div class="col-md d-flex flex-column justify-content-center">
      <div class="jumbotron w-75 mx-auto">
        <h5 class="text-center">Register With Social Media</h5>
        <hr class="my-3" >
        <button type="button" class="btn btn-primary d-block w-75 my-2 mx-auto">Facebook</button>
        <button type="button" class="btn btn-danger d-block w-75 my-2 mx-auto">Gmail</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
  <script>
    $('.toast').toast({autohide:false});
    $('.toast').toast('show');
  </script>
@endsection

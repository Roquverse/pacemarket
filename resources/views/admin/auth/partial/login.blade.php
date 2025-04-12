@extends('admin.auth.login_templates.' . (isset($template) ? $template : preference('auth_template_name', 'template-1')) . '.index')

@section('sub-content')
<form action="{{ route('login.post') }}" method="post" class="admin-login-con my-0">
    @csrf
    
    <h3 class="mb-4">{{ __("Login") }}</h3>
                            
    <div>
        @include('admin.auth.partial.notification')
    </div>

    <div class="input-group mb-3">
        <input id="login-email" type="email" class="form-control py-2" value="{{ old('email') }}" name="email" placeholder="{{ __('Email') }}">
    </div>
    <div class="input-group mb-4">
        <input id="login-password" type="password" class="form-control py-2" name="password" placeholder="{{ __('Password') }}">
    </div>
    <div class="form-group text-left mb-4">
        <div class="checkbox checkbox-fill d-inline">
            <input type="checkbox" name="remember" id="checkbox-fill-a1" checked="">
            <label for="checkbox-fill-a1" class="cr">{{ __('Remember Me') }}</label>
        </div>
    </div>

    @include('admin.auth.partial.re-captcha')
    
    <button class="btn btn-sm btn-mv-primary mb-4 ltr:me-1 rtl:ms-1 loader" type="submit">
        {{ __("Login") }}
        <svg role="status" class="anim spin" viewBox="0 0 100 101" fill="#ff0" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#000"></path>
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="#ddd"></path>
        </svg>
    </button>
    
    <p class="mb-2 text-muted">{{ __("Forgot password?") }} <a class="text-muted" href="{{ route('login.reset') }}">{{ __("Reset") }}</a></p>
    @if ((App\Facades\Theme::current()?->theme['name'] ?? '') == 'minimal')
        <p class="mb-2 text-muted">{{ __("New to :x?", ['x' => preference('company_name')]) }} <a class="text-muted" href="{{ route('registration') }}">{{ __("Join now") }}</a></p>
    @endif

    @include('admin.auth.partial.demo-credential')
</form>
@endsection

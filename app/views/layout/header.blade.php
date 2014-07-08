    <header>
        @if(Auth::check())
        @section('lib')
            {{ HTML::script('js/admin.js') }}
        @stop
        <nav class="admin">
            <ul class="right">
                <li><button type="button" id="adm_btn_create">Create <i class="fa fa-caret-down"></i></button></li>
                <li><button type="button" id="adm_btn_view">View <i class="fa fa-caret-down"></i></button></li>
                <li><button type="button" id="adm_btn_pass">Change password <i class="fa fa-lock"></i></button></li>
                <li><button type="button" id="adm_btn_logout">Logout <i class="fa fa-sign-out"></i></button></li>
                <!--
                <li><a href="/admin/password">Change password </a>
                <li><a href="/logout">Logout </i></a>
                -->
            </ul>
        </nav>
        @endif
        <img src="/img/logo.svg" height="70" alt="Jamie Shepherd logo">
        @if(Session::has('message'))
            <div class="site-message">
                <span class="fa fa-times close-button"></span>
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif

        @foreach($errors->all() as $message)
            <div class="site-message alert">
                <span class="fa fa-times close-button"></span>
                <p>{{ $message }}</p>
            </div>
        @endforeach
    </header>

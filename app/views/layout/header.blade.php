    <header>
        @if(Auth::check())
        <nav class="admin">
            <ul class="right">
                <li><a href="/admin">Admin home <i class="fa fa-laptop"></i></a>
                <li><a href="/admin/password">Change password <i class="fa fa-lock"></i></a>
                <li><a href="/logout">Logout <i class="fa fa-sign-out"></i></a>
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

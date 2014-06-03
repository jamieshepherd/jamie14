    <header>
        @if(Auth::check())
        <nav class="admin">
            <ul class="left">
                <li><a href="/admin"><i class="fa fa-laptop"></i> Admin</a>
                <li><a href="/admin/blog"><i class="fa fa-quote-left"></i> Blog</a>
                <li><a href="/admin/tutorials"><i class="fa fa-graduation-cap"></i> Tutorials</a>
                <li><a href="/admin/projects"><i class="fa fa-rocket"></i> Projects</a>
            </ul>
            <ul class="right">
                <li><a href="/admin/password">Change password <i class="fa fa-lock"></i></a>
                <li><a href="/logout">Logout <i class="fa fa-sign-out"></i></a>
            </ul>
        </nav>
        @endif
        <img src="/img/logo.svg" height="70" alt="Jamie Shepherd logo">
        @if(isset($message))
        <div class="site-message">
                <span class="fa fa-times-circle close-button"></span>
                <p>{{{ $message }}}</p>
        </div>
        @endif
    </header>

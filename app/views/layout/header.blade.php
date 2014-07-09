    <header>
        @if(Auth::check())
@section('css')
    {{ HTML::style('css/admin.css') }}
@stop
        <nav class="admin">
            <ul class="right">
            <li><button type="button" id="adm_btn_create" data-dropdown="#dropdown-1">Create <i class="fa fa-caret-down"></i></button></li>
                <li><button type="button" id="adm_btn_view" data-dropdown="#dropdown-2">View <i class="fa fa-caret-down"></i></button></li>

                <li><button type="button" id="adm_btn_pass" onclick="window.location='/admin/password'">Change password <i class="fa fa-lock"></i></button></li>
                <li><button type="button" id="adm_btn_logout" onclick="window.location='/logout'">Logout <i class="fa fa-sign-out"></i></button></li>
            </ul>
        </nav>
        <div id="dropdown-1" class="dropdown dropdown-tip">
            <ul class="dropdown-menu">
                <li><a href="/admin/blog/create">Blog</a></li>
                <li><a href="/admin/tutorial/create">Tutorial</a></li>
                <li><a href="/admin/project/create">Project</a></li>
            </ul>
        </div>
        <div id="dropdown-2" class="dropdown dropdown-tip">
            <ul class="dropdown-menu">
                <li><a href="/admin/blog/view">Blog posts</a></li>
                <li><a href="/admin/tutorial/view">Tutorials</a></li>
                <li><a href="/admin/project/view">Projects</a></li>
            </ul>
        </div>
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

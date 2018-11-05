<header class="header">
    <div class="branding">
        <a href="/"><h1 class="title">Giraffe.test <small>by Bilohlazov V.</small></h1></a>
    </div>
    <nav class="menu">
        @auth
            <span class="username">{{Auth::user()->username}}</span>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-secondary">Logout</button>
            </form>

        @endauth
        @guest
                <a href="{{route('login')}}" class="btn btn-primary">Login</a>
        @endguest
    </nav>
</header>
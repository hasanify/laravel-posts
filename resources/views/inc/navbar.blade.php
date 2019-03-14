<style>
.nav-item a
{
  transition: .3s;
  font-weight: bolder;
  opacity: 0.8;
  padding-left: 20px;

}
.nav-item a:hover
{
  opacity: 1;
}
.navbar-brand
{

  color : #FFCC00 !important;
  opacity: 0.8;
  transition: .3s;
}
.navbar-brand:hover
{
  opacity: 1;
}
</style>

<div id="app">
  <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #404040">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <h3><b>
          {{ config('app.name', 'Laravel') }} <i class="fa fa-book"></i>
        </b></h3>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon text-light"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/posts') }}" style="color: #f1f1f1">Posts</a>
            </li>
          </ul>
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" style="color: #f1f1f1" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" style="color: #f1f1f1" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a style="color: #f1f1f1" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('dashboard') }}">
                Dashboard
              </a>
              <a class="dropdown-item" href="{{ url('/posts/create') }}">
                Add Post
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>


            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>

        @endguest
      </ul>
    </div>
  </div>
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<br>

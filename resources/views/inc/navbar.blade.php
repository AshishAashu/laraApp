<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MyApp 1</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
      
      <li class="{{Request::is('signup') ? 'active' : ''}}"><a href="/signup">SignUp</a></li>
      <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
    </ul>
  </div>
</nav>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MyApp 1</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
      @if(!Session::has('user_token'))        
        <li class="{{Request::is('/userapi/login') ? 'active' : ''}}"><a href="/userapi/login">Login</a></li>
        <li class="{{Request::is('/userapi/signup') ? 'active' : ''}}"><a href="/userapi/register">Signup</a></li>
        <li class="{{Request::is('/about') ? 'active' : ''}}"><a href="/about">About</a></li>
        @else
          <li class="{{Request::is('/userapi/aboutuser') ? 'active' : ''}}"><a href="/userapi/aboutuser">MyDetails</a></li>
          <li class="{{Request::is('/userapi/update') ? 'active' : ''}}"><a href="/userapi/update">Update</a></li>
          <li class=""><a href ="/userapi/logout">Logout</a></li>
      @endif 
      
    </ul>
  </div>
</nav>

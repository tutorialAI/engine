this is <font color="#aef" size="14"> {{ $name }} </font> user acount page
<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
    Выйти
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
@extends('layouts.admin')

@section('content')
<h3>
  Админпанель
</h3>
<h4>
  Привет
  <font color="#3eA">
    {{ $users->name }}
  </font>
    <i>Адсинистратор</i>
</h4>

<a class="dropdown-item" href="{{ route('logout') }}"
    onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
    Выйти
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
@endsection
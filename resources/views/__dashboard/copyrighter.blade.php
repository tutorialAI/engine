@extends('layouts.admin')


@section('content')
    <div class="display">
      <h3>
        Админпанель 
      </h3>
      <h4>
        Привет
        <font color="#c5c98e">
          {{ $users->name }}
        </font>
        <i>Копирайтер</i>
      </h4>
    </div>
@endsection
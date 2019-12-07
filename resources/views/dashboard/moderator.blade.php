@extends('layouts.admin')

@section('content')
    <div class="display">
      <h3>
        Админпанель 
      </h3>
      <h4>
        Привет
        <font color="#16beff">
          {{ $users->name }}
        </font>
        <i>Модератор</i>
      </h4>
    </div>
@endsection
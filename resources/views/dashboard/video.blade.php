@extends('layouts.admin')

@section('content')
video.blade.php <br>
	
<div class="writer-info bd-example">
  <h3>выберите пункт</h3>
  <hr class="my-4">
	<ul class="writer" style="padding: 0">
		<button type="button" onclick="get_video()" class="btn btn-outline-primary btn-sm">Получить видео</button>
		<a href="/adminiztrator.php?page=writer&amp;mode=pay"><button type="button" class="btn btn-outline-primary btn-sm">Оплата</button></a>
		<button type="button" style="display: none" onclick="distribute()" class="btn btn-outline-primary btn-sm">Установить сайты</button>
	</ul>
</div>

	<div class="col-lg-12">

		<table class="table table-ligth table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">site</th>
		      <th scope="col">videoinfo</th>
		      <th scope="col">title</th>
		      <th scope="col">keywords</th>
		      <th scope="col">description</th>
		      <th scope="col">info</th>
		      <th scope="col">creating</th>
		    </tr>
		  </thead>
		  <tbody>
			@foreach ($videos as $video)
		    <tr>
		    	<td>{{$video->id}}</td>
				<td>{{$video->site}}</td>
				<td>{{$video->videoinfo}}</td>
				<td>{{$video->title}}</td>
				<td>{{$video->keywords}}</td>
				<td>{{$video->description}}</td>
				<td>{{$video->info}}</td>
				<td>{{$video->creating}}</td>
		    </tr>
			@endforeach
		  </tbody>
		</table>
	</div>
	{{ $videos->links() }}
@endsection
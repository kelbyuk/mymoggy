@extends('layout.base')
<?php $url = URL::to('/'); ?>
@section('main')
	<div id="dashboard">
	    <h1>My Cats Dashboard</h1>
		<div class="primary">
		user <br>
		{{$user->firstname}} {{$user->lastname}}<br>
		{{$user->address1}}<br>
		{{$user->address2}}<br>
		{{$user->town}}<br>
		{{$user->postcode}}<br><br>
		{{$user->phone}}<br>
		@{{$user->twitter}}	
		<br />
		<a href = "{{$url}}/owners/{{$user->id}}/edit"> profile</a>
		</div>
		<div class="secondary">
		cats :<br>
		
		<?php 	
			foreach($cats as $cat) { ?>
			<div class="dashCat">
				
				<div class="dashCatName">{{$cat->name}}</div>
				{{$cat->status}} 
				<div class="dashCatFunctions">
					<ul>
						<li><a href = "{{$url}}/cats/{{$cat->id}}" class="icoProfile"> profile</a><br /></li>
						<li><a href = "{{$url}}/cats/{{$cat->id}}/edit" class="icoEdit"> Edit details</a><br /></li>
						<li><a href = "{{$url}}/cats/{{$cat->id}}/remove" class="icoRemove"> Remove</a><br /></li>
					</ul>
				</div>
				<div class="dashCatContent"> </div>
					<div class="dashCatPhotos">
						<ul>
							<li>1&nbsp;</li>
							<li>2&nbsp;</li>
							<li>3&nbsp;</li>
							<li>4&nbsp;</li>
							<li>5&nbsp;</li>
						</ul>
					</div>
					<!-- display if less than 5 photos -->
					<a href = "{{$url}}/cats/{{$cat->id}}/photos/create" class="icoAddPhoto"> Add photo </a><br />
					<!-- conditional based on cat->status -->
					<a href = "{{$url}}/cats/{{$cat->id}}/missing" class="ico missing"> Notify {{$cat->name}} as Missing</a><br />
					<a href = "{{$url}}/cats/{{$cat->id}}/home" class="ico missing"> Notify {{$cat->name}} as back home</a><br />
					<a href = "{{$url}}/cats/{{$cat->id}}/poster" class="ico poster"> Make Poster</a><br />
				
			</div>
			<?php } ?>
			
		<div class="addlink">
		<br />
		<a href = "{{$url}}/cats/create">add a new cat</a><br /><br /><br /><br />
		
		
		</div>

		</div>
			
	</div>
@stop
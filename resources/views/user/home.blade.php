@extends('layouts.index')


@section('title', 'AlgebraBox | The greatest cloud storage')

@section('content')
<div class="row">
  <ol class="breadcrumb">
    <li class="active">Home</li>
  </ol>
</div>

@include('user.categories.status')

<div id="folders" class="row">
		
	<div class="col-md-3">

		
		<div class="list-group">
			<a href="#" class="list-group-item active">Folders &amp; Files </a>
			<a href="{{route('categories.index')}}" class="list-group-item">Categories</a>
			<a href="{{--  {{route('categories.shared')}} // {{route('shared.index')}} --}}#" class="list-group-item">Shared</a>
		</div>	
	</div>
	

	
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<div>
				<h3 class="pull-left panel-title">Folders &amp; Files</h3>
				</div>
				<div class="dropdown">
				<button id="options-btn" class="btn background-green dropdown-toggle" type="button" data-toggle="dropdown">Sort By
				  <span class="caret"></span></button>
				  <ul class="dropdown-menu">
					<li><a href="#">Date</a></li>
					<li><a href="#">Size</a></li>
					<li><a href="#">Type</a></li>
				  </ul>
				  </div>
				  
				  <div class="dropdown">
				  <button id="options-btn" class="btn background-green dropdown-toggle" type="button" data-toggle="dropdown">Share
				  <span class="caret"></span></button>
				  <ul class="dropdown-menu">
					<li><a href="#">All</a></li>
					<li><a href="#">Folder</a></li>
					<li><a href="#">File</a></li>
				  </ul>
				</div>
				
				<div class="pull-right">
				
				  
					<a title="Create new folder" href="">
						<span class="pull-right glyphicon glyphicon-folder-close" aria-hidden="true"></span>
						<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<div class="panel-body">
				
			</div>
		</div>
	</div>
</div>
@stop

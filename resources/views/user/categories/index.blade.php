@extends('layouts.index')

@section('title', 'Categories | AlgebraBox')

@section('content')

@include('user.categories.status')

<div class="row">
  <ol class="breadcrumb">
    <li><a href="{{route('home')}}">Home</a></li>
	<li class="active">Categories</li>
  </ol>
</div>

<div class="categories" class="row">	
	<div class="col-md-3">
		<div class="list-group">
			<a href="{{route('home')}}" class="list-group-item">Folders &amp; Files </a>
			<a href="#" class="list-group-item active">Categories</a>
			<a href="#" class="list-group-item">Shared</a>
		</div>	
	</div>
	<div class="col-md-9">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<h3 class="pull-left panel-title">Categories</h3>
				<div class="pull-right">
					<a href="{{route('categories.create')}}">
						<span class="pull-right glyphicon glyphicon-tag" aria-hidden="true"></span>
						<span class="pull-right glyphicon glyphicon-plus" aria-hidden="true"></span>
					</a>
				</div>
			</div>

			<div class="panel-body">
				<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Category name</th>
        <th>Section</th>
	  	<th>Action</th>
		<th></th>
      </tr>
    </thead>
    <tbody>
		
		
	@foreach($categories as $category)

			
			
      <tr>
        <td>{{ $category->id }}</td>
		 <td>{{ $category->name }}</td>
		  <td>{{ $category->sections->name }}</td>
		  <td>
		  <button><span class="label label-success">Edit</span></button>
			  <button name="delete" value="{{ $category->id }}" onclick="return 'Jeste li sigurni da želite obrisati {{ $category->name }}'"><span class="label label-danger">
					  <a href="{{route('categories.destroy', $category->id)}}">Delete</a>
				  </span></button>
		  </td>
		  
        <td>
		</td>
        <td></td>
      </tr>
	  
	@endforeach
      
    </tbody>
  </table>
			<div>
				
			</div>
		</div>
	</div>
</div>


@stop

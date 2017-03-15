@extends('layouts.app')

@section('content')
@if(Auth::guest())

	Please log in to view your recipes!

@else

<h2>My Recipes</h2>

<table>
	<thead>
		<th>Name</th>
		<th>Title</th>
		<th>Description</th>
		<th>Ingredients</th>
		<th>Steps</th>

	</thead>
	<tbody>
	@foreach($recipes as $recipe)
		<tr>
			<td>{{ $recipe->name }}</td>
			<td>{{ $recipe->title }}</td>
			<td>{{ $recipe->description }}</td>
			<td>{{ $recipe->ingredients }}</td>
			<td>{{ $recipe->steps }}</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endif

@show

<style>

th {
	padding:10px;
}
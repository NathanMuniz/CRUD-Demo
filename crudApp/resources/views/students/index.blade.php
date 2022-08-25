@extends('layouts.master')

@section('pageTitle', 'Students Index')

@section('content')
<h1 class="display-6">Students</h1>
<a href="{{route('students.create')}}">Create New</a>
<hr />


<table class="table">
  <thead>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Email</th>
    <th colspan="3">Actions</th>
  </thead>

  @foreach($students as $student)
  <tr>
    <td>{{$student->first_name}}

  </tr>







</table>

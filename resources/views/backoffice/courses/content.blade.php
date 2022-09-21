@extends('layouts.backoffice')
@section('content')
@livewire('admin.course-content',['courseid'=>$courseid])
@endsection
@extends('layouts.master')
@include('admin.sub_nav', array('active'=>'users'))
@section('content')
    <h2 class="page-title">
        {{ _('Neuen Nutzer anlegen') }}
    </h2>
    @include('users._partials.form')
@endsection
@extends('template.index')

@section('content')

<div id="container">
        <div id="editMenu">
            <ul class="nav nav-tabs nav-fill shadow" style="background-color:#d8c15e;">
                <li class="nav-item">
                    <a class="nav-link  btnEditMenu"  href="#" style="color:white;">Basic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btnEditMenu"  href="#">Slides</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btnEditMenu"  href="#">Personnages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btnEditMenu"  href="#">Localisations</a>
                </li>
            </ul>
        </div>



    <div id="editContent">
        <div class=".editContentItem" id="basic">@include('editeur.basic.index')</div>
        <div class=".editContentItem" id="slides">@include('editeur.slides.index')</div>
        <div class=".editContentItem" id="personnages">@include('editeur.personnages.index')</div>
        <div class=".editContentItem" id="loc">@include('editeur.loc.index')</div>
    </div>
</div>

<script src="{{ asset('js/edit.js') }}" defer></script>
<link href="{{ asset('css/edit.css') }}" rel="stylesheet">

@endsection

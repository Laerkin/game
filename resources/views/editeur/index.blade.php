@extends('template.index')

@section('content')

<div id="container">
        <div id="editMenu">
            <button class="btnEditMenu" value="0">Basic</button>
            <button class="btnEditMenu" value="1">Slides</button>
            <button class="btnEditMenu" value="2">Personnages</button>
            <button class="btnEditMenu" value="3">Localisations</button>
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
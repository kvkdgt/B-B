@extends('hometheme')
@section('content')

<?php
echo html_entity_decode($cms->content);
?>
@extends('master')

@section('title','Firme')

<style>
    body {
  height: 100%;
  position: relative;
  background: url("{{url('/images/firme.jpg')}}");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 14px;
  font-family: Arial, san-serif; }

.container {
   
    padding: 10px;
    margin: 20px auto;
    -webkit-box-shadow: 0 0 500px rgba(0, 0, 0, 0.05);
    box-shadow: 0 0 500px rgba(0, 0, 0, 0.05); }

.container .list {
   
    display: grid;
    grid-template-columns: auto auto auto; 
    justify-content: space-between;
    grid-gap: 10px;
    padding: 10px;
}
.container .list li {
    display: block;
    background: #fff;
    padding: 20px;
    margin-bottom: 15px;
    position: relative; 
    border-radius: 10px;
    border:2px solid black;
}

.title{
  font-size: 1.5em;
  color: #666;
  text-align: center;
  margin: 5px;}


.container .list li:before, .container .list li:after {
    content: "";
    display: table; }

.container .list li:after {
    clear: both; }

    .container .list li .btn a {
    display: inline-block;
    zoom: 1.3;
    padding: 4px 9px;
    font-size: 15px;
    color: #000;
    border-radius: 10px;
    border:1px solid black;

    
    text-decoration: none; }

.container .list li .btn a:hover {

    background: #b8b8b8;

    transition: background-color 0.3s ease-in-out;}

</style>

@section('content')


<div class="container">
        <div class="title">
          <h1><Strong>{{$grad->imegrada}}</strong></h1>
        </div>

        <ul class="list">
        @foreach($grad->firme as $firme)
          <li>
            <div ><h2 style="text-align:center">{{$firme->naziv}}</h2></div>
            <div ><h4 style="text-align:center">{{$firme->pozicija}}</h4></div>
            <div class="btn" name="select" type="select"  data-submit="...Sending"><a href="{{$grad->id}}/{{$firme->id}}">Prijavi se</a></div>
          </li>
          @endforeach
        </ul>
      </div>

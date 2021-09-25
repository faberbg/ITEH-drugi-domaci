@extends('master')

@section('title','Prijava')

<style>
    * {
  box-sizing: border-box;
  background: url("{{url('/images/prijava.jpg')}}");
  margin: 0;
  outline: none;
  padding: 0;
}

a {
  text-decoration: none;
}

body {
  background: #444f5a;
}

.container {
  align-items: center;
  display: flex;
  height: 100%;
  justify-content: center;
  margin: 0 auto;
  max-width: 1000px;
  width: 100%;
}


.content {
  color: #444f5a;
  padding: 35px;
  transition: width 0.4s ease-out;
  width: 35%;
}

.content h1 {
  color: #3e4149;
  display: inline-block;
  font-weight: 400;
  margin-bottom: 30px;
  
}

.content p {
  font-weight: 300;
  line-height: 1.4em;
  margin-bottom: 15px;
  text-align: justify;
}

.content h3 {
  color: #3e4149;
  margin: 20px 0;
}

.content ul {
  margin-bottom: 30px;
}

.content li {
  margin: 10px 0;
}

.button {
  background: #b8b8b8;
  border: none;
  color: #fff;
  display: block;
  font-weight: 500;
  letter-spacing: 4px;
  padding: 20px 0;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
  border-radius: 15px;
}

.button:hover {
  background: #c8e3aa;
  cursor: pointer;
}

</style>

@section('content')


<div class="container">
      <div class="content">
        <div class="description">
        <h1 style="text-align:center"><Strong>Prijava za posao</strong></h1><br>
          <h2 style="text-align:center">{{$firme->naziv}}</h2><br>
          <h4>
          {{$firme->pozicija}}
          </h4><br>
          <p>
          {{$firme->opis}}
          </p>
         

          <form action="/prijava" method="post">
            {{ csrf_field() }}
            <input style="padding: 5px 10px; margin: 8px 0px; display: block;" type="text" name="ime" placeholder="ime">
            <input style="padding: 5px 10px; margin: 8px 0px; display: block;" type="text" name="prezime" placeholder="prezime">
            <input style="padding: 5px 10px; margin: 8px 0px; display: block;" type="text" name="email" placeholder="email">
            <input style="display:none;" type="text" name="firma_id" value="{{$firme->id}}">
            <button style="margin-top: 25px;" class="button" type="submit">Prijavi se</button>
        </form>

        </div>
      </div>

    

  </div>

  @endsection
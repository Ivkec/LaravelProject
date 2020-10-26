@extends('layouts.app')

@section('title')
  GamerSrbija | Kontakt
@endsection

@section('content')

<div class="container">
   <div class="text-center text-white"><h1>{{ $naslov }}</h1></div><br><br>
      <div class="col-lg-12 text-white text-center">
         <p>
           Ukoliko imate neke pregloge, kritike ili nedoumice slobodno nas kontaktirajte.
         </p>
         <p>E-mail: <a href="mailto:gamingsrbija@office.rs">gamingsrbija@office.rs</a></p>
         <p>Telefon: +381-66-588-99</p>
         <p>Adresa: Bulevar evrope 3, Novi Sad</p>
         </div><br><br><br>
   <div class="text-center text-white"><img src="img/gamer_srbija.png" alt="gamer srbija"><br><i>Gamer Srbija</i></div>
</div>

@endsection
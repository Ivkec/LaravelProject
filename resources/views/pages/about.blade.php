@extends('layouts.app')

@section('title')
  GamerSrbija | O nama
@endsection

@section('content')
<div class="container">
   <div class="text-center text-white"><h1>{{ $naslov }}</h1></div><br><br>
      <div class="col-lg-12 text-white">
         <p class="text-justify">GamerSrbija je blog za ljubitelje video igara. Ovaj web je kreiran 2020. godine u cilju da okupi sve ljubitelje video igara. 
            Kod nas možete naći sve vezano za gaming sadržaj. 
            GamerSrbija je najbolji gaming sajt na balkanu. Nudimo puno zabave i razonode. Bićete obavešteni o 
            trenutnom trendingu, top igrama, kao i raznim novostima. Nadamo se da ćete biti i vi zadovoljni, 
            ulažemo maksimalan trud i radimo na tome da stranica uvek bude u trendu i izbacuje novosti o novim update-ovima. 
             Lepo se zabavite, i nadamo se da će vam se svideti naš sadržaj, želi Vam GamerSrbija tim. </p>
             <div class="col-lg-12 text-white text-center">
         <p>
           Ukoliko imate neke pregloge, kritike ili nedoumice slobodno nas kontaktirajte.
         </p>
         <p>E-mail: <a href="mailto:gamingsrbija@office.rs">gamingsrbija@office.rs</a></p>
         <p>Telefon: +381-66-588-99</p>
         <p>Adresa: Bulevar evrope 3, Novi Sad</p>
         </div>
         </div><br><br>
   <div class="text-center text-white"><img src="img/gamer_srbija.png" alt="gamer srbija"><br><i>Gamer Srbija</i></div>
</div>

@endsection
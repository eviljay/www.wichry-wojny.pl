  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Gra online Wichry Wojny - zmień bieg historii</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-2" />
    <meta name="language" content="pl" />
    <link href="styl.css" rel="stylesheet" type="text/css"/>
    <link rel="Shortcut icon" href="img/logo_male.gif" />
</head>
<body onload="KoniecLadowania()">

<script type="text/javascript">
 function KoniecLadowania() {
 document.getElementById('deska').style.opacity="1";
 document.getElementById('preloader').style.display="none";
 }
</script>


<div id="preloader">
<img src="img/preloader_logo.gif" alt="Wichry Wojny" style="margin-left: -180px; padding-top: 20%; padding-left: 50%;" />
<img src="img/preloader_animacja.gif" alt="WW" id="preloader_animacja" />
<img src="img/preloader_napis.gif" alt="Ładuję, proszę czekać..." id="preloader_napis" />
</div>
<!-- koniec preloadera, początek strony głównej -->
<!-- tło - stół, sęki, mapy, luger, zakładki -->

<div id="deska">
<script type="text/javascript">
document.getElementById('deska').style.opacity="0";
document.getElementById('preloader').style.display="block";
</script>
  <div id="deska_mapaGorna"></div>
  <div id="deska_sek"></div>
  <div id="deska_luger"></div>
  <div id="deska_mapaDolna"></div>
<div id="zakladka_StronaGlowna"><a class="zakladki" href="index.php"></a></div>
     <div id="zakladka_Forum"><a class="zakladki" href="http://www.forum.wichry-wojny.pl" target="_blank"></a></div>
     <div id="zakladka_Screeny"><a class="zakladki" href="screeny.php"></a></div>
     <div id="zakladka_Faq" style="top: 107px; height: 38px;"><a class="zakladki" href="poradnik.php"></a></div>
<div id="notes">
 <div id="notes_logo"></div>

   <div id="notes_srodek"> 
      <div id="notes_tekst">       <!-- główna część strony - tekst w notesie -->

	<center><h2>FAQ</h2></center><br/>
<center>
<b><a href='poradnik.php?pyt=1'>Dlaczego nie widzę jednostek?</a></b><br />
<b><a href='poradnik.php?pyt=2'>Jak budować jednostki?</a></b><br />
<b><a href='poradnik.php?pyt=3'>Ile jest tur i w jakich godzinach są przeliczane?</a></b><br />
<b><a href='poradnik.php?pyt=4'>Połączyłem dwie jednostki komandosów i nie mogę wykonać nimi desantu. Dlaczego? </a></b><br />
<b><a href='poradnik.php?pyt=5'>Jak uruchomić sonar?</a></b><br />
	  	    

<div style="position: absolute; left: 165px; top: 140px; line-height: 15px;">
</div><br /><br /><br />
<center>Jeżeli nie znajdziesz odpowiedzi na swoje pytanie - zadaj je. Wypełnij poniższy formularz.<br /><br />

<!--    SKRZYNKA NADAWCZA ////////////////////////////////////////////////////////////            -->
	<table class="table_style" style="width: 480px;">
	 <tr><td class="td_lg"></td><td class="td_kreska_gorna"></td><td class="td_pg"></td></tr>
           <tr style="font-family: monospace, verdana; font-size: 18px; color: #4c4c4c; border: solid #4c4c4c; border-width: 0px 0px 1px 0px; height: 30px;">
	   <td class="td_bok"></td><td class="naglowek" style="border: 0px; text-align: center;"><b>Wyślij do nas swoje pytanie!</b></td><td class="td_bok_p"></td></tr> 
  	     <tr>
 	     <td class="td_bok"></td>
             <td style="padding-top: 5px;"><br/>
	
<form action="poradnik.php?id=" method="post">
<b>Twoje pytanie:</b><textarea name="tresc" class="formy" style="width: 250px; height: 100px"></textarea><br />
<b>Imię, nazwisko lub nick:</b><input type="text" name="imie" style="width:185px; height: 16px;" class="formy"><br />
<b>Adres e-mail:</b><input type="text" name="email" style="width:260px; height: 16px;" class="formy"><br />
<input type="hidden" name="wyslane" value="tak">
<input type="hidden" name="id" value="">
<input style="border:0;  margin: 5px 0 5px 0; background: transparent url(img/wyslij.png); cursor:pointer; width:67px; height:25px" type="submit" value="      " />
</form>
             <td class="td_bok2"></td>
             </tr>
	   <tr><td class="td_ld"></td><td class="td_kreska_dolna"></td><td class="td_pd"></td></tr>
        </table></center>       

</br><br/><center><div class="banner"><small>Reklama</small><br/>
<script type="text/javascript"><!--
google_ad_client = "pub-3574813742955681";
/* 468x60, utworzono 09-09-20 */
google_ad_slot = "5611123777";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div></center>
  
      </div>              <!-- zamykanie diva o id="notes_tekst" -->
         <div id="notes_kartka_logowanie">
          <div style="margin-left: 20px; margin-top: 50px; width: 170px; height: 180px;">
            Tutaj zbieramy wszystkie odpowiedzi na Wasze pytania, podzielone na grupy tematyczne. 
            Jeśli masz jakiś problem z grą - <b>napisz</b> do Nas
          </div>
	 </div>     <!-- zamykanie diva o id="notes_kartka_logowanie" -->


   </div>      <!-- zamykanie diva o id="notes_srodek" -->
<div id="notes_stopka"> <div style="padding-right: 100px; padding-top: 21px;">Copyright &copy;2009 Wichry Wojny</div> </div>  
</div>   <!-- zamykanie diva o id="notes" -->
</div>   <!-- zamykanie diva o id="deska" --> 
</body>
</html>

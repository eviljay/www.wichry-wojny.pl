<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Gra online Wichry Wojny - zmie� bieg historii</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=iso-8859-2"/>
    <meta name="language" content="pl" />
    <link href="styl.css" rel="stylesheet" type="text/css"/>
    <link rel="Shortcut icon" href="img/logo_male.gif" />
<script type="text/javascript">
                <!-- //
                        function regulamin()
                        {
                        if(document.getElementById('reg').checked == true )
                        {
                                document.getElementById('dalej').disabled=false;
                        }
                        else
                        {
                                document.getElementById('dalej').disabled=true;
                        }
                        }
                // ]]> -->
</script>
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
<img src="img/preloader_napis.gif" alt="�aduj� prosz� czeka�..." id="preloader_napis" />
</div>
<!-- koniec preloadera, pocz�_tek strony g�_ównej -->
<!-- t�_o - stó�_, s�_ki, mapy, luger, zak�_adki -->

<div id="deska">
<script type="text/javascript">
document.getElementById('deska').style.opacity="0";
document.getElementById('preloader').style.display="block";
</script>
  <div id="deska_mapaGorna"></div>
  <div id="deska_luger"></div>
  <div id="deska_mapaDolna"></div>
     <div id="zakladka_StronaGlowna"><a class="zakladki" href="index.php"></a></div>
     <div id="zakladka_Forum"><a class="zakladki" href="http://www.forum.wichry-wojny.pl" target="_blank"></a></div>
     <div id="zakladka_Screeny"><a class="zakladki" href="screeny.php"></a></div>
     <div id="zakladka_Faq"><a class="zakladki" href="poradnik.php"></a></div>

<div id="notes">
 <div id="notes_logo"></div>

   <div id="notes_srodek"> 
      <div id="notes_tekst">       <!-- g�_ówna cz�_�_�_ strony - tekst w notesie -->
 
	<center>

	<table class="table_style" style="width: 500px;">
	 <tr><td class="td_lg"></td><td class="td_kreska_gorna"></td><td class="td_pg"></td></tr>
  	     <tr>
 	     <td class="td_bok"></td>
             <td><h2>Rejestracja</h2>
Aby zarejestrowa� si� w grze, musisz wybra� kt�r� nacj� gra�!<br />
 Je�li jeszcze nie wiesz jak� - podpowiemy Ci. <br/>Kr�tkie statystyki poni�ej.<br />
<form action="rejestracja.php" method="post">
<input type="hidden" name="opcja" value="test" />
<center><table style="text-align: center;">
<tr>
  <td>Login:*</td>
  <td><input type="text" class="formy" name="login"  /></td>
</tr>
<tr>
  <td>Has�o:*</td>
  <td><input type="password" class="formy" name="haslo"  /></td>
</tr>
<tr>
  <td>Powt�rz has�o:*</td>
  <td><input type="password" class="formy" name="haslo2"  /></td>
</tr>
<tr>
  <td>E-mail:*</td>
  <td><input type="text" class="formy" name="email"  /></td>
</tr>
<tr>
  <td>Twoje pytanie:**</td>
  <td><input type="text" class="formy" name="pytanie" maxlength="255"  /></td>
</tr>
<tr>
  <td>Twoja odpowied�:**</td>
  <td><input type="text" class="formy" name="odpowiedz" maxlength="255"  /></td>
</tr>

 
<tr><td>Nacja</td><td><b>Polacy</b></td><td><b>Niemcy</b></td></tr>
<tr><td>Ilo�� graczy:</td><td>26</td><td>17</td></tr>
<tr><td>Suma punkt�w:</td><td>16033</td><td>21244</td></tr>
<tr><td>�rednia pkt na gracza:</td><td>617</td><td>1250</td></tr>
<tr><td>Najwy�szy wynik:</td><td>3631</td><td>4439</td></tr>
<tr><td>Wybierz �wiat:</td><td><select class="formy"  style="width: 100px;" name="swiat">
		<option value='1'>�wiat 1</option>
		</select></td></tr> 
<tr><td>Wybierz nacj�:</td><td><select class="formy" style="width: 100px;" name="nacja">
		<option value="niemcy">Niemcy</option>
		<option value="alianci">Polacy</option>
		</select></td></tr> 
<tr>
    <td>

<img src="pic.php?id=16">
</td><td><input type="text" class="formy" name="token" style="width: 150px;"  value="przepisz kod z obrazka" onblur="if(this.value=='')this.value='przepisz kod z obrazka'" onfocus="if(this.value=='przepisz kod z obrazka')this.value=''">
</td>
  </tr>
  <tr>
    <td colspan="2">
   </td>
    </tr>
</table></center>
  <b>O�wiadczam, �e zapozna�em si� z <a  href="regulamin.php">regulaminem</a><br  />
 i zgadzam si� na warunki tam zamieszczone</b>
<input type="checkbox" id="reg" onclick="regulamin()" /><br  />
&nbsp;<br  />
<input type="hidden" name="los" value="16">
<input style="font-weight: bold; width: 80px;" type="submit" name="submit" value="rejestruj" id="dalej" disabled="disabled">		
</form>

<div style="text-align: left; padding-left: 10px;"><small><b>*</b> Pola obowi�zkowe.<br />
<b>**</b> Pytanie i odpowied� potrzebne s� do generowania nowego has�a, je�li stare zapomnisz.
 Je�eli nie wpiszesz tych danych - nie b�dzie mo�liwe wygenerowanie nowego has�a dla Ciebie!<br /></small></div>

             </td>
             <td class="td_bok2"></td>
             </tr>
	   <tr><td class="td_ld"></td><td class="td_kreska_dolna"></td><td class="td_pd"></td></tr>
        </table>
	
	
	
	
	</center>

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
           Wype�nij formularz i czekaj na wiadomo�� zwrotn�, kt�r� dostaniesz na swoj� skrzynk� <b>e-mail</b>. 
           
           </div>
	 </div>     <!-- zamykanie diva o id="notes_kartka_logowanie" -->

           <div id="notes_kartka_top10">
	   <img src="img/naglowek_top10.png" style="padding-left: 70px; padding-top: 25px;" alt="Top10" />
              <div style="margin-left: 17px; width: 183px; height: 230px; line-height: 22px; font-size: 10px;">
<small>1</small>.<img src="ranks/genmaj.gif" width="10px" height="10px" alt="1"/> <strong><a href='profil.php?gracz=maka'>maka</a> </strong> <small> (4439)-ger</small><br />
<small>2</small>.<img src="ranks/genbryg.gif" width="10px" height="10px" alt="2"/> <strong><a href='profil.php?gracz=karolek'>karolek</a> </strong> <small> (3631)-pol</small><br />
<small>3</small>.<img src="ranks/pol.gif" width="10px" height="10px" alt="3"/> <strong><a href='profil.php?gracz=testowe'>testowe</a> </strong> <small> (3050)-pol</small><br />
<small>4</small>.<img src="ranks/oberst.gif" width="10px" height="10px" alt="4"/> <strong><a href='profil.php?gracz=miccom'>miccom</a> </strong> <small> (2899)-ger</small><br />
<small>5</small>.<img src="ranks/pol.gif" width="10px" height="10px" alt="5"/> <strong><a href='profil.php?gracz=Idacho'>Idacho</a> </strong> <small> (2853)-pol</small><br />
<small>6</small>.<img src="ranks/oberst.gif" width="10px" height="10px" alt="6"/> <strong><a href='profil.php?gracz=sztetke'>sztetke</a> </strong> <small> (2787)-ger</small><br />
<small>7</small>.<img src="ranks/major.gif" width="10px" height="10px" alt="7"/> <strong><a href='profil.php?gracz=ThomasVonTichau'>ThomasV...</a> </strong> <small> (2206)-ger</small><br />
<small>8</small>.<img src="ranks/maj.gif" width="10px" height="10px" alt="8"/> <strong><a href='profil.php?gracz=gustlik'>gustlik</a> </strong> <small> (2143)-pol</small><br />
<small>9</small>.<img src="ranks/major.gif" width="10px" height="10px" alt="9"/> <strong><a href='profil.php?gracz=Mr.BLOND'>Mr.BLOND</a> </strong> <small> (1679)-ger</small><br />
<small>10</small>.<img src="ranks/hauptmann.gif" width="10px" height="10px" alt="10"/> <strong><a href='profil.php?gracz=Tasquo'>Tasquo</a> </strong> <small> (1429)-ger</small><br />

              </div>
           </div>   <!-- zamykanie diva o id="notes_kartka_top10" -->

   </div>      <!-- zamykanie diva o id="notes_srodek" -->
<div id="notes_stopka">
<div style="padding-right: 100px; padding-top: 21px;"><!-- GoStats JavaScript Based Code -->
<script type="text/javascript" src="http://gostats.pl/js/counter.js"></script>
<script type="text/javascript">_gos='c3.gostats.pl';_goa=316098;
_got=6;_goi=6;_goz=0;_gol='darmowe liczniki stron';_GoStatsRun();</script>
<noscript><a target="_blank" title="darmowe liczniki stron" 
href="http://gostats.pl"><img alt="darmowe liczniki stron" 
src="http://c3.gostats.pl/bin/count/a_316098/t_6/i_6/counter.png" 
style="border-width:0" /></a></noscript>
<!-- End GoStats JavaScript Based Code --> | Copyright &copy;2009 Wichry Wojny</div> </div>  
</div>   <!-- zamykanie diva o id="notes" -->
</div>   <!-- zamykanie diva o id="deska" --> 
</body>
</html>

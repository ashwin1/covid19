<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UTD-Covid-19</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
  </head>
  <body>
    <div class = "container">
    </div>
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
<html lang="en">
<head>
	<title>Welcome to my page</title>
	<meta charset="UTF-8">
<!-- <meta name="author" content="Ashwin Ramananda/> -->
<!-- <meta name="Description" content="Hi, I am Ashwin Ramananda Computer Science graduate student at The University of Texas at Dallas"/> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <meta name="keywords" content="Web Designer, UTD, Dallas, Software Engineer, Data Science"/> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<link
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
  rel="stylesheet"  type='text/css'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<style>
 #map {
        height: 600px;
      }
#rightc, #leftc{
	background-color: #000000;

}
.a{
	font-color = "white"
}
       #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #000000;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>

      <style>
      div.container {
        overflow: scroll;
        width: 2000px;
        height:20px;
      }


      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        display: block;
        height: 530px;
        overflow-y: scroll;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(odd){background-color: #778899;}
      #customers tr:nth-child(even){background-color: white;}
      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #708090;
        color: white;
      }
      </style>
      <style>
      div.container {
        overflow: scroll;
        width: 2000px;
        height:20px;
      }


      #customers {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 85%;
        display: block;
        height: 530px;
        overflow-y: scroll;
        border: 1px solid #ddd;
      }

      #customers td {
        padding: 8px;
      }

      #customers tr:nth-child(odd){background-color: #778899;}
      #customers tr:nth-child(even){background-color: white;}
      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding: 12px;
        text-align: left;
        background-color: #708090;
        color: white;
      }
      </style>

      <style>
      /* precautions button */
      /* #precautions {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 80%;
        display: block;
        height: 530px;
        overflow-y: scroll;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(odd){background-color: #778899;}
      #customers tr:nth-child(even){background-color: white;}
      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #708090;
        color: white;
      } */
      </style>

</head>
<body style="background-color: black;">


<nav class="navbar navbar-expand-sm   navbar-nav">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="logo.png" alt="logo" style="width:40px;">
  </a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
  </ul>
</nav>
 <div class="row ">
    <div class="col-2 " id = "leftc">
       <!-- <ul class="nav flex-column">
<li class="nav-item">

	<a class="nav-link" href="https://www.cdc.gov/coronavirus/2019-nCoV/index.html">CDC - Precautions for Covid19</a>
</li>
</ul>   -->
      <div class="card" style="max-width: 18rem; height: 8.5rem;">
           <div class="card-header bg-dark content-center">
              <h2 >Texas</h2>
           </div>
           <div class="card-body row text-center">
             <div class="col">
               <div class="text-value-xl" id="texasConfirmedCasesCard">007</div>
               <div class="text-uppercase text-muted small">Confirmed</div>
             </div>
             <div class="vr"></div>
             <div class="col">
               <div class="text-value-xl" id="texasDeathCasesCard">007</div>
               <div class="text-uppercase text-muted small">Deaths</div>
             </div>
         </div>
       </div><br>
       <div class="card" style="max-width: 18rem; height: 8.5rem;">
              <div class="card-header bg-dark content-center">
                 <h2 style="text-align:center">DFW </h2>
              </div>
              <div class="card-body row text-center">
                <div class="col">
                  <div class="text-value-xl" id="dfwConfirmedCases">007</div>
                  <div class="text-uppercase text-muted small">Confirmed</div>
                </div>
                <div class="vr"></div>
                <div class="col">
                  <div class="text-value-xl" id="dfwDeathCases">007</div>
                  <div class="text-uppercase text-muted small">Deaths</div>
                </div>
            </div>
          </div>   <br> <div class="card" style="max-width: 18rem; height: 8.5rem;">
                     <div class="card-header bg-dark content-center">
                        <h2 style="text-align:center">Dallas</h2>
                     </div>
                     <div class="card-body row text-center">
                       <div class="col">
                         <div class="text-value-xl" id="dallasConfirmedCard">007</div>
                         <div class="text-uppercase text-muted small">Confirmed</div>
                       </div>
                       <div class="vr"></div>
                       <div class="col">
                         <div class="text-value-xl" id="dallasDeathCard">007</div>
                         <div class="text-uppercase text-muted small">Deaths</div>
                       </div>
                   </div>
                 </div><br><div class="card" style="max-width: 18rem; height: 8.5rem;">
                            <div class="card-header bg-dark content-center">
                               <h2 style="text-align:center">Harris</h2>
                            </div>
                            <div class="card-body row text-center">
                              <div class="col">
                                <div class="text-value-xl" id="harrisConfirmedCard">007</div>
                                <div class="text-uppercase text-muted small">Confirmed</div>
                              </div>
                              <div class="vr"></div>
                              <div class="col">
                                <div class="text-value-xl" id="harrisDeathCard">007</div>
                                <div class="text-uppercase text-muted small">Deaths</div>
                              </div>
                          </div>
                        </div>
      </div>

    <div class="col-8">
		<div id="floating-panel">
			<select id="address" onchange="initMap(this.value)">
				<option value="Dallas">Dallas</option>
				<option value="Collin">Collin</option>
				<!-- <option value="denton">denton</option> -->
				<option value="Anderson">Anderson</option>
				<option value="Angelina">Angelina</option>
				<option value="Aransas">Aransas</option>
				<option value="Archer">Archer</option>
				<option value="Armstrong">Armstrong</option>
				<option value="Atascosa">Atascosa</option>
				<option value="Austin">Austin</option>
				<option value="Bailey">Bailey</option>
				<option value="Bandera">Bandera</option>
				<option value="Bastrop">Bastrop</option>
				<option value="Baylor">Baylor</option>
				<option value="Bee">Bee</option>
				<option value="Bell">Bell</option>
				<option value="Bexar">Bexar </option>

				<option value="Blanco">Blanco</option>
        <option value="Borden">Borden</option>
				<option value="Bosque">Bosque</option>
				<option value="Bowie">Bowie</option>
				<option value="Brazoria">Brazoria</option>
				<option value="Brazos">Brazos</option>
				<option value="Brewster">Brewster</option>
				<option value="Briscoe">Briscoe</option>
				<option value="Brooks">Brooks</option>
				<option value="Brown">Brown</option>
				<option value="Burleson">Burleson</option>
				<option value="Burnet">Burnet</option>

				<option value="Caldwell">Caldwell</option>
				<option value="Calhoun">Calhoun</option>
				<option value="Callahan">Callahan</option>
				<option value="Cameron">Cameron</option>
				<option value="Camp">Camp</option>
				<option value="Carson">Carson </option>
				<option value="Cass">Cass</option>

        <option value="Castro">Castro</option>
        <option value="Chambers">Chambers</option>
        <option value="Cherokee">Cherokee</option>
        <option value="Childress">Childress</option>
        <option value="Clay">Clay</option>
        <option value="Cochran">Cochran</option>
        <option value="Coke">Coke</option>
        <option value="Coleman">Coleman</option>
        <option value="Collin">Collin</option>
        <option value="Collingsworth">Collingsworth</option>
        <option value="Colorado">Colorado</option>
        <option value="Comal">Comal</option>

        <option value="Culberson">Culberson</option>
        <option value="Dallam">Dallam</option>
        <option value="Dallas">Dallas</option>
        <option value="Dawson">Dawson</option>
        <option value="Deaf Smith">Deaf Smith</option>
        <option value="Delta">Delta </option>
        <option value="Denton">Denton</option>
        <option value="DeWitt">DeWitt</option>
        <option value="Dickens">Dickens</option>
        <option value="Dimmit">Dimmit</option>
        <option value="Donley">Donley</option>
        <option value="Duval">Duval</option>
        <option value="Eastland">Eastland</option>
        <option value="Ector">Ector</option>
        <option value="Edwards">Edwards</option>
        <option value="Ellis">Ellis</option>
        <option value="El Paso">El Paso</option>

        <option value="Erath">Erath</option>
        <option value="Falls">Falls</option>
        <option value="Fannin">Fannin</option>
        <option value="Fayette">Fayette</option>
        <option value="Fisher">Fisher</option>
        <option value="Floyd">Floyd </option>
        <option value="Foard">Foard</option>

        <option value="Fort Bend">Fort Bend</option>
        <option value="Franklin">Franklin</option>
        <option value="Freestone">Freestone</option>
        <option value="Frio">Frio</option>
        <option value="Gaines">Gaines</option>
        <option value="Galveston">Galveston</option>
        <option value="Garza">Garza</option>
        <option value="Gillespie">Gillespie</option>
        <option value="Glasscock">Glasscock</option>
        <option value="Goliad">Goliad</option>
        <option value="Gonzales">Gonzales</option>
        <option value="Gray">Gray</option>

        <option value="Grayson">Grayson</option>
        <option value="Gregg">Gregg</option>
        <option value="Grimes">Grimes</option>
        <option value="Guadalupe">Guadalupe</option>
        <option value="Hale">Hale</option>
        <option value="Hall">Hall</option>
        <option value="Hamilton">Hamilton</option>
        <option value="Hansford">Hansford</option>
        <option value="Hardeman">Hardeman</option>
        <option value="Hardin">Hardin</option>
        <option value="Harris">Harris</option>
        <option value="Harrison">Harrison</option>

        <option value="Hartley">Hartley</option>
        <option value="Haskell">Haskell</option>
        <option value="Hays">Hays</option>
        <option value="Hemphill">Hemphill</option>
        <option value="Henderson">Henderson</option>
        <option value="Hidalgo">Hidalgo </option>
        <option value="Hill">Hill</option>
        <option value="Hockley">Hockley</option>
        <option value="Hood">Hood</option>
        <option value="Hopkins">Hopkins</option>
        <option value="Houston">Houston</option>
        <option value="Howard">Howard</option>
        <option value="Hudspeth">Hudspeth</option>
        <option value="Hunt">Hunt</option>
        <option value="Hutchinson">Hutchinson</option>
        <option value="Jack">Jack</option>
        <option value="Jackson">Jackson</option>

        <option value="Jasper">Jasper</option>
        <option value="Jeff Davis">Jeff Davis</option>
        <option value="Jefferson">Jefferson</option>
        <option value="Jim Hogg">Jim Hogg </option>
        <option value="Jim Wells">Jim Wells</option>
        <option value="Johnson">Johnson</option>
        <option value="Jones">Jones</option>

        <option value="Karnes">Karnes</option>
        <option value="Kaufman">Kaufman</option>
        <option value="Kendall">Kendall</option>
        <option value="Kenedy">Kenedy</option>
        <option value="Kent">Kent</option>
        <option value="Kerr">Kerr</option>
        <option value="Kimble">Kimble</option>
        <option value="King">King</option>
        <option value="Kinney">Kinney</option>
        <option value="Kleberg">Kleberg</option>
        <option value="Knox">Knox</option>
        <option value="Lamar">Lamar</option>
        <option value="Lamb">Lamb</option>
        <option value="Lampasas">Lampasas</option>
        <option value="La Salle">La Salle</option>
        <option value="Lavaca">Lavaca</option>
        <option value="Lee">Lee</option>
        <option value="Leon">Leon</option>
        <option value="Liberty">Liberty</option>
        <option value="Limestone">Limestone</option>
        <option value="Lipscomb">Lipscomb</option>
        <option value="Live Oak">Live Oak</option>
        <option value="Llano">Llano</option>

        <option value="Loving">Loving</option>
        <option value="Lubbock">Lubbock</option>
        <option value="Lynn">Lynn</option>
        <option value="McCulloch">McCulloch</option>
        <option value="McLennan">McLennan</option>
        <option value="Madison">Madison</option>
        <option value="Marion">Marion</option>
        <option value="Martin">Martin</option>
        <option value="Mason">Mason</option>
        <option value="Matagorda">Matagorda</option>
        <option value="Maverick">Maverick</option>
        <option value="Medina">Medina</option>
        <option value="Menard">Menard</option>
        <option value="Midland">Midland</option>
        <option value="Milam">Milam</option>
        <option value="Mills">Mills</option>
        <option value="Mitchell">Mitchell</option>
        <option value="Montague">Montague</option>
        <option value="Montgomery">Montgomery</option>
        <option value="Moore">Moore</option>
        <option value="Morris">Morris</option>
        <option value="Motley">Motley</option>
        <option value="Nacogdoches">Nacogdoches</option>

        <option value="Navarro">Navarro</option>
        <option value="Newton">Newton</option>
        <option value="Nolan">Nolan</option>
        <option value="Nueces">Nueces</option>
        <option value="Ochiltree">Ochiltree</option>
        <option value="Oldham">Oldham</option>
        <option value="Orange">Orange</option>
        <option value="Palo Pinto">Palo Pinto</option>
        <option value="Panola">Panola</option>
        <option value="Parker">Parker</option>
        <option value="Parmer">Parmer</option>
        <option value="Pecos">Pecos</option>
        <option value="Polk">Polk</option>
        <option value="Potter">Potter</option>
        <option value="Presidio">Presidio</option>
        <option value="Rains">Rains</option>
        <option value="Randall">Randall</option>
        <option value="Reagan">Reagan</option>
        <option value="Real">Real</option>
        <option value="Red River">Red River</option>
        <option value="Reeves">Reeves</option>
        <option value="Refugio">Refugio</option>
        <option value="Roberts">Roberts</option>

        <option value="Robertson">Robertson</option>
        <option value="Rockwall">Rockwall</option>
        <option value="Runnels">Runnels</option>
        <option value="Rusk">Rusk</option>
        <option value="Sabine">Sabine</option>
        <option value="San Augustine">San Augustine</option>
        <option value="San Jacinto">San Jacinto</option>
        <option value="San Patricio">San Patricio</option>
        <option value="San Saba">San Saba</option>
        <option value="Schleicher">Schleicher</option>
        <option value="Scurry">Scurry</option>
        <option value="Shackelford">Shackelford</option>
        <option value="Shelby">Shelby</option>
        <option value="Sherman">Sherman</option>

        <option value="Smith">Smith</option>
        <option value="Somervell">Somervell</option>
        <option value="Starr">Starr</option>
        <option value="Stephens">Stephens</option>
        <option value="Sterling">Sterling</option>
        <option value="Stonewall">Stonewall</option>
        <option value="Sutton">Sutton</option>
        <option value="Swisher">Swisher</option>
        <option value="Tarrant">Tarrant</option>
        <option value="Taylor">Taylor</option>
        <option value="Terry">Terry</option>
        <option value="Throckmorton">Throckmorton</option>
        <option value="Titus">Titus</option>

        <option value="Tom Green">Tom Green</option>
        <option value="Travis">Travis</option>
        <option value="Trinity">Trinity</option>
        <option value="Tyler">Tyler</option>
        <option value="Upshur">Upshur</option>
        <option value="Upton">Upton</option>
        <option value="Uvalde">Uvalde</option>
        <option value="Val Verde">Val Verde</option>
        <option value="Van Zandt">Van Zandt</option>
        <option value="Victoria">Victoria</option>
        <option value="Walker">Walker</option>
        <option value="Waller">Waller</option>
        <option value="Ward">Ward</option>

        <option value="Washington">Washington</option>
        <option value="Webb">Webb</option>
        <option value="Wharton">Wharton</option>
        <option value="Wheeler">Wheeler</option>
        <option value="Wichita">Wichita</option>
        <option value="Wilbarger">Wilbarger</option>
        <option value="Willacy">Willacy</option>
        <option value="Williamson">Williamson</option>
        <option value="Wilson">Wilson</option>
        <option value="Winkler">Winkler</option>
        <option value="Wise">Wise</option>
        <option value="Wood">Wood</option>
        <option value="Yoakum">Yoakum</option>

        <option value="Young">Young</option>
        <option value="Zavala">Zavala</option>
        <option value="New York">New York</option>
        <option value="Los Angeles">Los Angeles</option>
        <option value="Wichita">Wichita</option>
        <option value="Wilbarger">Wilbarger</option>
        <option value="Willacy">Willacy</option>
        <option value="Williamson">Williamson</option>
        <option value="Wilson">Wilson</option>
        <option value="Winkler">Winkler</option>
        <option value="Wise">Wise</option>
        <option value="Wood">Wood</option>
        <option value="Yoakum">Yoakum</option>
</select>
    <input id="submit" type="button" value="Search"></div>
    <div id="map"></div>
</div>

 <div class="col-2 " id = "rightc">  <ul class="nav flex-column">
  <li class="nav-item">
	  <br>


 <table id="customers">
   <tr>
     <th>County</th>
     <th>Confirmed   </th>
   </tr>
   <tr>
     <td>US</td>
     <td>US</td>
   </tr>
   <tr>
     <td>Texas</td>
     <td>Texas</td>
   </tr>
   <tr>
     <td>Dallas</td>
     <td>Dallas</td>
   </tr>
   <tr>

   </tr>
 </table>
 <br>
 <a href="CovidDataSets.zip" class="btn btn-primary btn-primary"><i class="fa fa-download" aria-hidden="true"></i>
  Download Datasets</a>
  </li>
</ul>    </div>
</div>
<!-- //till here -->



<div class="row" style="background-color:black">
  <div style="position:absolute; right:600px;" >
        <div id="floating-panel">
            <select id="address" onchange="confirmed(this.value)">
              <option value="Dallas">Dallas</option>
              <option value="Collin">Collin</option>
              <option value="Anderson">Anderson</option>
              <option value="Angelina">Angelina</option>
              <option value="Aransas">Aransas</option>
              <option value="Archer">Archer</option>
              <option value="Armstrong">Armstrong</option>
              <option value="Atascosa">Atascosa</option>
              <option value="Austin">Austin</option>
              <option value="Bailey">Bailey</option>
              <option value="Bandera">Bandera</option>
              <option value="Bastrop">Bastrop</option>
              <option value="Baylor">Baylor</option>
              <option value="Bee">Bee</option>
              <option value="Bell">Bell</option>
              <option value="Bexar">Bexar </option>

              <option value="Blanco">Blanco</option>
              <option value="Borden">Borden</option>
              <option value="Bosque">Bosque</option>
              <option value="Bowie">Bowie</option>
              <option value="Brazoria">Brazoria</option>
              <option value="Brazos">Brazos</option>
              <option value="Brewster">Brewster</option>
              <option value="Briscoe">Briscoe</option>
              <option value="Brooks">Brooks</option>
              <option value="Brown">Brown</option>
              <option value="Burleson">Burleson</option>
              <option value="Burnet">Burnet</option>

              <option value="Caldwell">Caldwell</option>
              <option value="Calhoun">Calhoun</option>
              <option value="Callahan">Callahan</option>
              <option value="Cameron">Cameron</option>
              <option value="Camp">Camp</option>
              <option value="Carson">Carson </option>
              <option value="Cass">Cass</option>

              <option value="Castro">Castro</option>
              <option value="Chambers">Chambers</option>
              <option value="Cherokee">Cherokee</option>
              <option value="Childress">Childress</option>
              <option value="Clay">Clay</option>
              <option value="Cochran">Cochran</option>
              <option value="Coke">Coke</option>
              <option value="Coleman">Coleman</option>
              <option value="Collin">Collin</option>
              <option value="Collingsworth">Collingsworth</option>
              <option value="Colorado">Colorado</option>
              <option value="Comal">Comal</option>

              <option value="Culberson">Culberson</option>
              <option value="Dallam">Dallam</option>
              <option value="Dallas">Dallas</option>
              <option value="Dawson">Dawson</option>
              <option value="Deaf Smith">Deaf Smith</option>
              <option value="Delta">Delta </option>
              <option value="Denton">Denton</option>
              <option value="DeWitt">DeWitt</option>
              <option value="Dickens">Dickens</option>
              <option value="Dimmit">Dimmit</option>
              <option value="Donley">Donley</option>
              <option value="Duval">Duval</option>
              <option value="Eastland">Eastland</option>
              <option value="Ector">Ector</option>
              <option value="Edwards">Edwards</option>
              <option value="Ellis">Ellis</option>
              <option value="El Paso">El Paso</option>

              <option value="Erath">Erath</option>
              <option value="Falls">Falls</option>
              <option value="Fannin">Fannin</option>
              <option value="Fayette">Fayette</option>
              <option value="Fisher">Fisher</option>
              <option value="Floyd">Floyd </option>
              <option value="Foard">Foard</option>

              <option value="Fort Bend">Fort Bend</option>
              <option value="Franklin">Franklin</option>
              <option value="Freestone">Freestone</option>
              <option value="Frio">Frio</option>
              <option value="Gaines">Gaines</option>
              <option value="Galveston">Galveston</option>
              <option value="Garza">Garza</option>
              <option value="Gillespie">Gillespie</option>
              <option value="Glasscock">Glasscock</option>
              <option value="Goliad">Goliad</option>
              <option value="Gonzales">Gonzales</option>
              <option value="Gray">Gray</option>

              <option value="Grayson">Grayson</option>
              <option value="Gregg">Gregg</option>
              <option value="Grimes">Grimes</option>
              <option value="Guadalupe">Guadalupe</option>
              <option value="Hale">Hale</option>
              <option value="Hall">Hall</option>
              <option value="Hamilton">Hamilton</option>
              <option value="Hansford">Hansford</option>
              <option value="Hardeman">Hardeman</option>
              <option value="Hardin">Hardin</option>
              <option value="Harris">Harris</option>
              <option value="Harrison">Harrison</option>

              <option value="Hartley">Hartley</option>
              <option value="Haskell">Haskell</option>
              <option value="Hays">Hays</option>
              <option value="Hemphill">Hemphill</option>
              <option value="Henderson">Henderson</option>
              <option value="Hidalgo">Hidalgo </option>
              <option value="Hill">Hill</option>
              <option value="Hockley">Hockley</option>
              <option value="Hood">Hood</option>
              <option value="Hopkins">Hopkins</option>
              <option value="Houston">Houston</option>
              <option value="Howard">Howard</option>
              <option value="Hudspeth">Hudspeth</option>
              <option value="Hunt">Hunt</option>
              <option value="Hutchinson">Hutchinson</option>
              <option value="Jack">Jack</option>
              <option value="Jackson">Jackson</option>

              <option value="Jasper">Jasper</option>
              <option value="Jeff Davis">Jeff Davis</option>
              <option value="Jefferson">Jefferson</option>
              <option value="Jim Hogg">Jim Hogg </option>
              <option value="Jim Wells">Jim Wells</option>
              <option value="Johnson">Johnson</option>
              <option value="Jones">Jones</option>

              <option value="Karnes">Karnes</option>
              <option value="Kaufman">Kaufman</option>
              <option value="Kendall">Kendall</option>
              <option value="Kenedy">Kenedy</option>
              <option value="Kent">Kent</option>
              <option value="Kerr">Kerr</option>
              <option value="Kimble">Kimble</option>
              <option value="King">King</option>
              <option value="Kinney">Kinney</option>
              <option value="Kleberg">Kleberg</option>
              <option value="Knox">Knox</option>
              <option value="Lamar">Lamar</option>
              <option value="Lamb">Lamb</option>
              <option value="Lampasas">Lampasas</option>
              <option value="La Salle">La Salle</option>
              <option value="Lavaca">Lavaca</option>
              <option value="Lee">Lee</option>
              <option value="Leon">Leon</option>
              <option value="Liberty">Liberty</option>
              <option value="Limestone">Limestone</option>
              <option value="Lipscomb">Lipscomb</option>
              <option value="Live Oak">Live Oak</option>
              <option value="Llano">Llano</option>

              <option value="Loving">Loving</option>
              <option value="Lubbock">Lubbock</option>
              <option value="Lynn">Lynn</option>
              <option value="McCulloch">McCulloch</option>
              <option value="McLennan">McLennan</option>
              <option value="Madison">Madison</option>
              <option value="Marion">Marion</option>
              <option value="Martin">Martin</option>
              <option value="Mason">Mason</option>
              <option value="Matagorda">Matagorda</option>
              <option value="Maverick">Maverick</option>
              <option value="Medina">Medina</option>
              <option value="Menard">Menard</option>
              <option value="Midland">Midland</option>
              <option value="Milam">Milam</option>
              <option value="Mills">Mills</option>
              <option value="Mitchell">Mitchell</option>
              <option value="Montague">Montague</option>
              <option value="Montgomery">Montgomery</option>
              <option value="Moore">Moore</option>
              <option value="Morris">Morris</option>
              <option value="Motley">Motley</option>
              <option value="Nacogdoches">Nacogdoches</option>

              <option value="Navarro">Navarro</option>
              <option value="Newton">Newton</option>
              <option value="Nolan">Nolan</option>
              <option value="Nueces">Nueces</option>
              <option value="Ochiltree">Ochiltree</option>
              <option value="Oldham">Oldham</option>
              <option value="Orange">Orange</option>
              <option value="Palo Pinto">Palo Pinto</option>
              <option value="Panola">Panola</option>
              <option value="Parker">Parker</option>
              <option value="Parmer">Parmer</option>
              <option value="Pecos">Pecos</option>
              <option value="Polk">Polk</option>
              <option value="Potter">Potter</option>
              <option value="Presidio">Presidio</option>
              <option value="Rains">Rains</option>
              <option value="Randall">Randall</option>
              <option value="Reagan">Reagan</option>
              <option value="Real">Real</option>
              <option value="Red River">Red River</option>
              <option value="Reeves">Reeves</option>
              <option value="Refugio">Refugio</option>
              <option value="Roberts">Roberts</option>

              <option value="Robertson">Robertson</option>
              <option value="Rockwall">Rockwall</option>
              <option value="Runnels">Runnels</option>
              <option value="Rusk">Rusk</option>
              <option value="Sabine">Sabine</option>
              <option value="San Augustine">San Augustine</option>
              <option value="San Jacinto">San Jacinto</option>
              <option value="San Patricio">San Patricio</option>
              <option value="San Saba">San Saba</option>
              <option value="Schleicher">Schleicher</option>
              <option value="Scurry">Scurry</option>
              <option value="Shackelford">Shackelford</option>
              <option value="Shelby">Shelby</option>
              <option value="Sherman">Sherman</option>

              <option value="Smith">Smith</option>
              <option value="Somervell">Somervell</option>
              <option value="Starr">Starr</option>
              <option value="Stephens">Stephens</option>
              <option value="Sterling">Sterling</option>
              <option value="Stonewall">Stonewall</option>
              <option value="Sutton">Sutton</option>
              <option value="Swisher">Swisher</option>
              <option value="Tarrant">Tarrant</option>
              <option value="Taylor">Taylor</option>
              <option value="Terry">Terry</option>
              <option value="Throckmorton">Throckmorton</option>
              <option value="Titus">Titus</option>

              <option value="Tom Green">Tom Green</option>
              <option value="Travis">Travis</option>
              <option value="Trinity">Trinity</option>
              <option value="Tyler">Tyler</option>
              <option value="Upshur">Upshur</option>
              <option value="Upton">Upton</option>
              <option value="Uvalde">Uvalde</option>
              <option value="Val Verde">Val Verde</option>
              <option value="Van Zandt">Van Zandt</option>
              <option value="Victoria">Victoria</option>
              <option value="Walker">Walker</option>
              <option value="Waller">Waller</option>
              <option value="Ward">Ward</option>

              <option value="Washington">Washington</option>
              <option value="Webb">Webb</option>
              <option value="Wharton">Wharton</option>
              <option value="Wheeler">Wheeler</option>
              <option value="Wichita">Wichita</option>
              <option value="Wilbarger">Wilbarger</option>
              <option value="Willacy">Willacy</option>
              <option value="Williamson">Williamson</option>
              <option value="Wilson">Wilson</option>
              <option value="Winkler">Winkler</option>
              <option value="Wise">Wise</option>
              <option value="Wood">Wood</option>
              <option value="Yoakum">Yoakum</option>

              <option value="Young">Young</option>
              <option value="Zavala">Zavala</option>
              <option value="New York">New York</option>
              <option value="Los Angeles">Los Angeles</option>
              <option value="Wichita">Wichita</option>
              <option value="Wilbarger">Wilbarger</option>
              <option value="Willacy">Willacy</option>
              <option value="Williamson">Williamson</option>
              <option value="Wilson">Wilson</option>
              <option value="Winkler">Winkler</option>
              <option value="Wise">Wise</option>
              <option value="Wood">Wood</option>
              <option value="Yoakum">Yoakum</option>
              <option value="">Please Choose one County</option>

''
          </select>
          <input id="submit" type="button" value="Search">
        </div>
  </div>

  <div class="col-sm-12" style="height:400px; background-color: black; top:40px;"><h2 id="name">Confirmed Cases - Dallas</h2>
        <!-- <div id="map"></div> -->
    <div id="container" ></div>
    <center><a href="https://github.com/CSSEGISandData/COVID-19/tree/master/csse_covid_19_data/csse_covid_19_time_series">Data Source</a></center>
  </div>


  <div class="col-sm-12" style="height:400px; background-color: black;top:140px;"> <h2 id="name1">Fatalities - Dallas</h2>
    <div id="container1" >
    </div>
  <center><a href="https://github.com/CSSEGISandData/COVID-19/tree/master/csse_covid_19_data/csse_covid_19_time_series">Data Source</a></center>
  </div>


</div>
<!-- //starts here compare_county_confirmed -->
<div class="row" style="margin-top:100px; background-color: black;">
<div class="col-sm-12" style="height:600px; background-color: black;top:150px;">

  <h2 id="main_heading_confirmed_comparison">County Compare Confirmed Cases</h2> <div id="compare_county_c"  style="height: 100%"></div>

    <div id="floating-panel"  style="margin-left:825px";>
      <select id="County_in_DFW" onchange="getonevalue(this.value)" >
        <option value="Collin">Collin</option>
        <option value="Dallas">Dallas</option>
        <option value="Denton">Denton</option>
        <option value="Ellis">Ellis</option>
        <option value="Hood">Hood</option>
        <option value="Hunt">Hunt</option>
        <option value="Johnson">Johnson</option>
        <option value="Kaufman">Kaufman</option>
        <option value="Parker">Parker</option>
        <option value="Rockwall">Rockwall</option>
        <option value="Somervell">Somervell</option>
        <option value="Tarrant">Tarrant</option>
        <option value="Wise">Wise</option>
      </select>
      <select id="compare_county_c"; onchange="getsecondvalue(this.value)">
        <option value="Dallas">Dallas</option>
        <option value="Collin">Collin</option>
        <option value="Anderson">Anderson</option>
        <option value="Angelina">Angelina</option>
        <option value="Aransas">Aransas</option>
        <option value="Archer">Archer</option>
        <option value="Armstrong">Armstrong</option>
        <option value="Atascosa">Atascosa</option>
        <option value="Austin">Austin</option>
        <option value="Bailey">Bailey</option>
        <option value="Bandera">Bandera</option>
        <option value="Bastrop">Bastrop</option>
        <option value="Baylor">Baylor</option>
        <option value="Bee">Bee</option>
        <option value="Bell">Bell</option>
        <option value="Bexar">Bexar </option>
        <option value="Blanco">Blanco</option>
        <option value="Borden">Borden</option>
        <option value="Bosque">Bosque</option>
        <option value="Bowie">Bowie</option>
        <option value="Brazoria">Brazoria</option>
        <option value="Brazos">Brazos</option>
        <option value="Brewster">Brewster</option>
        <option value="Briscoe">Briscoe</option>
        <option value="Brooks">Brooks</option>
        <option value="Brown">Brown</option>
        <option value="Burleson">Burleson</option>
        <option value="Burnet">Burnet</option>
        <option value="Caldwell">Caldwell</option>
        <option value="Calhoun">Calhoun</option>
        <option value="Callahan">Callahan</option>
        <option value="Cameron">Cameron</option>
        <option value="Camp">Camp</option>
        <option value="Carson">Carson </option>
        <option value="Cass">Cass</option>
        <option value="Castro">Castro</option>
        <option value="Chambers">Chambers</option>
        <option value="Cherokee">Cherokee</option>
        <option value="Childress">Childress</option>
        <option value="Clay">Clay</option>
        <option value="Cochran">Cochran</option>
        <option value="Coke">Coke</option>
        <option value="Coleman">Coleman</option>
        <option value="Collin">Collin</option>
        <option value="Collingsworth">Collingsworth</option>
        <option value="Colorado">Colorado</option>
        <option value="Comal">Comal</option>
        <option value="Culberson">Culberson</option>
        <option value="Dallam">Dallam</option>
        <option value="Dallas">Dallas</option>
        <option value="Dawson">Dawson</option>
        <option value="Deaf Smith">Deaf Smith</option>
        <option value="Delta">Delta </option>
        <option value="Denton">Denton</option>
        <option value="DeWitt">DeWitt</option>
        <option value="Dickens">Dickens</option>
        <option value="Dimmit">Dimmit</option>
        <option value="Donley">Donley</option>
        <option value="Duval">Duval</option>
        <option value="Eastland">Eastland</option>
        <option value="Ector">Ector</option>
        <option value="Edwards">Edwards</option>
        <option value="Ellis">Ellis</option>
        <option value="El Paso">El Paso</option>
        <option value="Erath">Erath</option>
        <option value="Falls">Falls</option>
        <option value="Fannin">Fannin</option>
        <option value="Fayette">Fayette</option>
        <option value="Fisher">Fisher</option>
        <option value="Floyd">Floyd </option>
        <option value="Foard">Foard</option>
        <option value="Fort Bend">Fort Bend</option>
        <option value="Franklin">Franklin</option>
        <option value="Freestone">Freestone</option>
        <option value="Frio">Frio</option>
        <option value="Gaines">Gaines</option>
        <option value="Galveston">Galveston</option>
        <option value="Garza">Garza</option>
        <option value="Gillespie">Gillespie</option>
        <option value="Glasscock">Glasscock</option>
        <option value="Goliad">Goliad</option>
        <option value="Gonzales">Gonzales</option>
        <option value="Gray">Gray</option>
        <option value="Grayson">Grayson</option>
        <option value="Gregg">Gregg</option>
        <option value="Grimes">Grimes</option>
        <option value="Guadalupe">Guadalupe</option>
        <option value="Hale">Hale</option>
        <option value="Hall">Hall</option>
        <option value="Hamilton">Hamilton</option>
        <option value="Hansford">Hansford</option>
        <option value="Hardeman">Hardeman</option>
        <option value="Hardin">Hardin</option>
        <option value="Harris">Harris</option>
        <option value="Harrison">Harrison</option>
        <option value="Hartley">Hartley</option>
        <option value="Haskell">Haskell</option>
        <option value="Hays">Hays</option>
        <option value="Hemphill">Hemphill</option>
        <option value="Henderson">Henderson</option>
        <option value="Hidalgo">Hidalgo </option>
        <option value="Hill">Hill</option>
        <option value="Hockley">Hockley</option>
        <option value="Hood">Hood</option>
        <option value="Hopkins">Hopkins</option>
        <option value="Houston">Houston</option>
        <option value="Howard">Howard</option>
        <option value="Hudspeth">Hudspeth</option>
        <option value="Hunt">Hunt</option>
        <option value="Hutchinson">Hutchinson</option>
        <option value="Jack">Jack</option>
        <option value="Jackson">Jackson</option>
        <option value="Jasper">Jasper</option>
        <option value="Jeff Davis">Jeff Davis</option>
        <option value="Jefferson">Jefferson</option>
        <option value="Jim Hogg">Jim Hogg </option>
        <option value="Jim Wells">Jim Wells</option>
        <option value="Johnson">Johnson</option>
        <option value="Jones">Jones</option>
        <option value="Karnes">Karnes</option>
        <option value="Kaufman">Kaufman</option>
        <option value="Kendall">Kendall</option>
        <option value="Kenedy">Kenedy</option>
        <option value="Kent">Kent</option>
        <option value="Kerr">Kerr</option>
        <option value="Kimble">Kimble</option>
        <option value="King">King</option>
        <option value="Kinney">Kinney</option>
        <option value="Kleberg">Kleberg</option>
        <option value="Knox">Knox</option>
        <option value="Lamar">Lamar</option>
        <option value="Lamb">Lamb</option>
        <option value="Lampasas">Lampasas</option>
        <option value="La Salle">La Salle</option>
        <option value="Lavaca">Lavaca</option>
        <option value="Lee">Lee</option>
        <option value="Leon">Leon</option>
        <option value="Liberty">Liberty</option>
        <option value="Limestone">Limestone</option>
        <option value="Lipscomb">Lipscomb</option>
        <option value="Live Oak">Live Oak</option>
        <option value="Llano">Llano</option>

        <option value="Loving">Loving</option>
        <option value="Lubbock">Lubbock</option>
        <option value="Lynn">Lynn</option>
        <option value="McCulloch">McCulloch</option>
        <option value="McLennan">McLennan</option>
        <option value="Madison">Madison</option>
        <option value="Marion">Marion</option>
        <option value="Martin">Martin</option>
        <option value="Mason">Mason</option>
        <option value="Matagorda">Matagorda</option>
        <option value="Maverick">Maverick</option>
        <option value="Medina">Medina</option>
        <option value="Menard">Menard</option>
        <option value="Midland">Midland</option>
        <option value="Milam">Milam</option>
        <option value="Mills">Mills</option>
        <option value="Mitchell">Mitchell</option>
        <option value="Montague">Montague</option>
        <option value="Montgomery">Montgomery</option>
        <option value="Moore">Moore</option>
        <option value="Morris">Morris</option>
        <option value="Motley">Motley</option>
        <option value="Nacogdoches">Nacogdoches</option>

        <option value="Navarro">Navarro</option>
        <option value="Newton">Newton</option>
        <option value="Nolan">Nolan</option>
        <option value="Nueces">Nueces</option>
        <option value="Ochiltree">Ochiltree</option>
        <option value="Oldham">Oldham</option>
        <option value="Orange">Orange</option>
        <option value="Palo Pinto">Palo Pinto</option>
        <option value="Panola">Panola</option>
        <option value="Parker">Parker</option>
        <option value="Parmer">Parmer</option>
        <option value="Pecos">Pecos</option>
        <option value="Polk">Polk</option>
        <option value="Potter">Potter</option>
        <option value="Presidio">Presidio</option>
        <option value="Rains">Rains</option>
        <option value="Randall">Randall</option>
        <option value="Reagan">Reagan</option>
        <option value="Real">Real</option>
        <option value="Red River">Red River</option>
        <option value="Reeves">Reeves</option>
        <option value="Refugio">Refugio</option>
        <option value="Roberts">Roberts</option>

        <option value="Robertson">Robertson</option>
        <option value="Rockwall">Rockwall</option>
        <option value="Runnels">Runnels</option>
        <option value="Rusk">Rusk</option>
        <option value="Sabine">Sabine</option>
        <option value="San Augustine">San Augustine</option>
        <option value="San Jacinto">San Jacinto</option>
        <option value="San Patricio">San Patricio</option>
        <option value="San Saba">San Saba</option>
        <option value="Schleicher">Schleicher</option>
        <option value="Scurry">Scurry</option>
        <option value="Shackelford">Shackelford</option>
        <option value="Shelby">Shelby</option>
        <option value="Sherman">Sherman</option>

        <option value="Smith">Smith</option>
        <option value="Somervell">Somervell</option>
        <option value="Starr">Starr</option>
        <option value="Stephens">Stephens</option>
        <option value="Sterling">Sterling</option>
        <option value="Stonewall">Stonewall</option>
        <option value="Sutton">Sutton</option>
        <option value="Swisher">Swisher</option>
        <option value="Tarrant">Tarrant</option>
        <option value="Taylor">Taylor</option>
        <option value="Terry">Terry</option>
        <option value="Throckmorton">Throckmorton</option>
        <option value="Titus">Titus</option>

        <option value="Tom Green">Tom Green</option>
        <option value="Travis">Travis</option>
        <option value="Trinity">Trinity</option>
        <option value="Tyler">Tyler</option>
        <option value="Upshur">Upshur</option>
        <option value="Upton">Upton</option>
        <option value="Uvalde">Uvalde</option>
        <option value="Val Verde">Val Verde</option>
        <option value="Van Zandt">Van Zandt</option>
        <option value="Victoria">Victoria</option>
        <option value="Walker">Walker</option>
        <option value="Waller">Waller</option>
        <option value="Ward">Ward</option>

        <option value="Washington">Washington</option>
        <option value="Webb">Webb</option>
        <option value="Wharton">Wharton</option>
        <option value="Wheeler">Wheeler</option>
        <option value="Wichita">Wichita</option>
        <option value="Wilbarger">Wilbarger</option>
        <option value="Willacy">Willacy</option>
        <option value="Williamson">Williamson</option>
        <option value="Wilson">Wilson</option>
        <option value="Winkler">Winkler</option>
        <option value="Wise">Wise</option>
        <option value="Wood">Wood</option>
        <option value="Yoakum">Yoakum</option>

        <option value="Young">Young</option>
        <option value="Zavala">Zavala</option>
        <option value="New York">New York</option>
        <option value="Los Angeles">Los Angeles</option>
        <option value="Wichita">Wichita</option>
        <option value="Wilbarger">Wilbarger</option>
        <option value="Willacy">Willacy</option>
        <option value="Williamson">Williamson</option>
        <option value="Wilson">Wilson</option>
        <option value="Winkler">Winkler</option>
        <option value="Wise">Wise</option>
        <option value="Wood">Wood</option>
        <option value="Yoakum">Yoakum</option>
        <option value="">Please Choose one County</option>

    </select>
    <input id="submit-cmp-confirmed-cases" type="button" value="Search"></div>
    <!-- <div id="map"></div> -->
    <!-- </div> -->

</div><br><br><br>
<br>

<div class="col-sm-12" style="height:50px; background-color: black;top:140px;">
  <div id="one" >
  </div>
<br>
<center><a href="https://github.com/CSSEGISandData/COVID-19/tree/master/csse_covid_19_data/csse_covid_19_time_series">Data Source</a></center>
</div>

</div>




  <div class="row" style="margin-top:100px; background-color: black;">
  <div class="col-sm-12" style="height:600px; background-color: black;top:150px;">
    <!--
      <div class="col-sm-12" style="height:400px; background-color: black;"top:140px;"> <h2 id="name2">Confirmed Deaths Dallas vs Harris - Texas</h2>
        <div id="compare_county_deaths" >
        </div>
      <center><a href="https://github.com/CSSEGISandData/COVID-19/tree/master/csse_covid_19_data/csse_covid_19_time_series">Data Source</a></center>
      </div> -->
    <h2 id = "main_heading_fatalities_comparison">County Compare Fatalities</h2> <div id="compare_county_d" style="height: 100%"></div>

      <div id="floating-panel" style=" margin-left:820px">
        <select id="County_in_DFW" onchange="getonevalue(this.value)" >
          <option value="Collin">Collin</option>
          <option value="Dallas">Dallas</option>
          <option value="Denton">Denton</option>
          <option value="Ellis">Ellis</option>
          <option value="Hood">Hood</option>
          <option value="Hunt">Hunt</option>
          <option value="Johnson">Johnson</option>
          <option value="Kaufman">Kaufman</option>
          <option value="Parker">Parker</option>
          <option value="Rockwall">Rockwall</option>
          <option value="Somervell">Somervell</option>
          <option value="Tarrant">Tarrant</option>
          <option value="Wise">Wise</option>
        </select>
        <select id="Compare_county_d" onchange="getsecondvalue(this.value)">
          <option value="Dallas">Dallas</option>
          <option value="Collin">Collin</option>
          <option value="Anderson">Anderson</option>
          <option value="Angelina">Angelina</option>
          <option value="Aransas">Aransas</option>
          <option value="Archer">Archer</option>
          <option value="Armstrong">Armstrong</option>
          <option value="Atascosa">Atascosa</option>
          <option value="Austin">Austin</option>
          <option value="Bailey">Bailey</option>
          <option value="Bandera">Bandera</option>
          <option value="Bastrop">Bastrop</option>
          <option value="Baylor">Baylor</option>
          <option value="Bee">Bee</option>
          <option value="Bell">Bell</option>
          <option value="Bexar">Bexar </option>
          <option value="Blanco">Blanco</option>
          <option value="Borden">Borden</option>
          <option value="Bosque">Bosque</option>
          <option value="Bowie">Bowie</option>
          <option value="Brazoria">Brazoria</option>
          <option value="Brazos">Brazos</option>
          <option value="Brewster">Brewster</option>
          <option value="Briscoe">Briscoe</option>
          <option value="Brooks">Brooks</option>
          <option value="Brown">Brown</option>
          <option value="Burleson">Burleson</option>
          <option value="Burnet">Burnet</option>
          <option value="Caldwell">Caldwell</option>
          <option value="Calhoun">Calhoun</option>
          <option value="Callahan">Callahan</option>
          <option value="Cameron">Cameron</option>
          <option value="Camp">Camp</option>
          <option value="Carson">Carson </option>
          <option value="Cass">Cass</option>
          <option value="Castro">Castro</option>
          <option value="Chambers">Chambers</option>
          <option value="Cherokee">Cherokee</option>
          <option value="Childress">Childress</option>
          <option value="Clay">Clay</option>
          <option value="Cochran">Cochran</option>
          <option value="Coke">Coke</option>
          <option value="Coleman">Coleman</option>
          <option value="Collin">Collin</option>
          <option value="Collingsworth">Collingsworth</option>
          <option value="Colorado">Colorado</option>
          <option value="Comal">Comal</option>
          <option value="Culberson">Culberson</option>
          <option value="Dallam">Dallam</option>
          <option value="Dallas">Dallas</option>
          <option value="Dawson">Dawson</option>
          <option value="Deaf Smith">Deaf Smith</option>
          <option value="Delta">Delta </option>
          <option value="Denton">Denton</option>
          <option value="DeWitt">DeWitt</option>
          <option value="Dickens">Dickens</option>
          <option value="Dimmit">Dimmit</option>
          <option value="Donley">Donley</option>
          <option value="Duval">Duval</option>
          <option value="Eastland">Eastland</option>
          <option value="Ector">Ector</option>
          <option value="Edwards">Edwards</option>
          <option value="Ellis">Ellis</option>
          <option value="El Paso">El Paso</option>
          <option value="Erath">Erath</option>
          <option value="Falls">Falls</option>
          <option value="Fannin">Fannin</option>
          <option value="Fayette">Fayette</option>
          <option value="Fisher">Fisher</option>
          <option value="Floyd">Floyd </option>
          <option value="Foard">Foard</option>
          <option value="Fort Bend">Fort Bend</option>
          <option value="Franklin">Franklin</option>
          <option value="Freestone">Freestone</option>
          <option value="Frio">Frio</option>
          <option value="Gaines">Gaines</option>
          <option value="Galveston">Galveston</option>
          <option value="Garza">Garza</option>
          <option value="Gillespie">Gillespie</option>
          <option value="Glasscock">Glasscock</option>
          <option value="Goliad">Goliad</option>
          <option value="Gonzales">Gonzales</option>
          <option value="Gray">Gray</option>
          <option value="Grayson">Grayson</option>
          <option value="Gregg">Gregg</option>
          <option value="Grimes">Grimes</option>
          <option value="Guadalupe">Guadalupe</option>
          <option value="Hale">Hale</option>
          <option value="Hall">Hall</option>
          <option value="Hamilton">Hamilton</option>
          <option value="Hansford">Hansford</option>
          <option value="Hardeman">Hardeman</option>
          <option value="Hardin">Hardin</option>
          <option value="Harris">Harris</option>
          <option value="Harrison">Harrison</option>
          <option value="Hartley">Hartley</option>
          <option value="Haskell">Haskell</option>
          <option value="Hays">Hays</option>
          <option value="Hemphill">Hemphill</option>
          <option value="Henderson">Henderson</option>
          <option value="Hidalgo">Hidalgo </option>
          <option value="Hill">Hill</option>
          <option value="Hockley">Hockley</option>
          <option value="Hood">Hood</option>
          <option value="Hopkins">Hopkins</option>
          <option value="Houston">Houston</option>
          <option value="Howard">Howard</option>
          <option value="Hudspeth">Hudspeth</option>
          <option value="Hunt">Hunt</option>
          <option value="Hutchinson">Hutchinson</option>
          <option value="Jack">Jack</option>
          <option value="Jackson">Jackson</option>
          <option value="Jasper">Jasper</option>
          <option value="Jeff Davis">Jeff Davis</option>
          <option value="Jefferson">Jefferson</option>
          <option value="Jim Hogg">Jim Hogg </option>
          <option value="Jim Wells">Jim Wells</option>
          <option value="Johnson">Johnson</option>
          <option value="Jones">Jones</option>
          <option value="Karnes">Karnes</option>
          <option value="Kaufman">Kaufman</option>
          <option value="Kendall">Kendall</option>
          <option value="Kenedy">Kenedy</option>
          <option value="Kent">Kent</option>
          <option value="Kerr">Kerr</option>
          <option value="Kimble">Kimble</option>
          <option value="King">King</option>
          <option value="Kinney">Kinney</option>
          <option value="Kleberg">Kleberg</option>
          <option value="Knox">Knox</option>
          <option value="Lamar">Lamar</option>
          <option value="Lamb">Lamb</option>
          <option value="Lampasas">Lampasas</option>
          <option value="La Salle">La Salle</option>
          <option value="Lavaca">Lavaca</option>
          <option value="Lee">Lee</option>
          <option value="Leon">Leon</option>
          <option value="Liberty">Liberty</option>
          <option value="Limestone">Limestone</option>
          <option value="Lipscomb">Lipscomb</option>
          <option value="Live Oak">Live Oak</option>
          <option value="Llano">Llano</option>

          <option value="Loving">Loving</option>
          <option value="Lubbock">Lubbock</option>
          <option value="Lynn">Lynn</option>
          <option value="McCulloch">McCulloch</option>
          <option value="McLennan">McLennan</option>
          <option value="Madison">Madison</option>
          <option value="Marion">Marion</option>
          <option value="Martin">Martin</option>
          <option value="Mason">Mason</option>
          <option value="Matagorda">Matagorda</option>
          <option value="Maverick">Maverick</option>
          <option value="Medina">Medina</option>
          <option value="Menard">Menard</option>
          <option value="Midland">Midland</option>
          <option value="Milam">Milam</option>
          <option value="Mills">Mills</option>
          <option value="Mitchell">Mitchell</option>
          <option value="Montague">Montague</option>
          <option value="Montgomery">Montgomery</option>
          <option value="Moore">Moore</option>
          <option value="Morris">Morris</option>
          <option value="Motley">Motley</option>
          <option value="Nacogdoches">Nacogdoches</option>

          <option value="Navarro">Navarro</option>
          <option value="Newton">Newton</option>
          <option value="Nolan">Nolan</option>
          <option value="Nueces">Nueces</option>
          <option value="Ochiltree">Ochiltree</option>
          <option value="Oldham">Oldham</option>
          <option value="Orange">Orange</option>
          <option value="Palo Pinto">Palo Pinto</option>
          <option value="Panola">Panola</option>
          <option value="Parker">Parker</option>
          <option value="Parmer">Parmer</option>
          <option value="Pecos">Pecos</option>
          <option value="Polk">Polk</option>
          <option value="Potter">Potter</option>
          <option value="Presidio">Presidio</option>
          <option value="Rains">Rains</option>
          <option value="Randall">Randall</option>
          <option value="Reagan">Reagan</option>
          <option value="Real">Real</option>
          <option value="Red River">Red River</option>
          <option value="Reeves">Reeves</option>
          <option value="Refugio">Refugio</option>
          <option value="Roberts">Roberts</option>

          <option value="Robertson">Robertson</option>
          <option value="Rockwall">Rockwall</option>
          <option value="Runnels">Runnels</option>
          <option value="Rusk">Rusk</option>
          <option value="Sabine">Sabine</option>
          <option value="San Augustine">San Augustine</option>
          <option value="San Jacinto">San Jacinto</option>
          <option value="San Patricio">San Patricio</option>
          <option value="San Saba">San Saba</option>
          <option value="Schleicher">Schleicher</option>
          <option value="Scurry">Scurry</option>
          <option value="Shackelford">Shackelford</option>
          <option value="Shelby">Shelby</option>
          <option value="Sherman">Sherman</option>

          <option value="Smith">Smith</option>
          <option value="Somervell">Somervell</option>
          <option value="Starr">Starr</option>
          <option value="Stephens">Stephens</option>
          <option value="Sterling">Sterling</option>
          <option value="Stonewall">Stonewall</option>
          <option value="Sutton">Sutton</option>
          <option value="Swisher">Swisher</option>
          <option value="Tarrant">Tarrant</option>
          <option value="Taylor">Taylor</option>
          <option value="Terry">Terry</option>
          <option value="Throckmorton">Throckmorton</option>
          <option value="Titus">Titus</option>

          <option value="Tom Green">Tom Green</option>
          <option value="Travis">Travis</option>
          <option value="Trinity">Trinity</option>
          <option value="Tyler">Tyler</option>
          <option value="Upshur">Upshur</option>
          <option value="Upton">Upton</option>
          <option value="Uvalde">Uvalde</option>
          <option value="Val Verde">Val Verde</option>
          <option value="Van Zandt">Van Zandt</option>
          <option value="Victoria">Victoria</option>
          <option value="Walker">Walker</option>
          <option value="Waller">Waller</option>
          <option value="Ward">Ward</option>

          <option value="Washington">Washington</option>
          <option value="Webb">Webb</option>
          <option value="Wharton">Wharton</option>
          <option value="Wheeler">Wheeler</option>
          <option value="Wichita">Wichita</option>
          <option value="Wilbarger">Wilbarger</option>
          <option value="Willacy">Willacy</option>
          <option value="Williamson">Williamson</option>
          <option value="Wilson">Wilson</option>
          <option value="Winkler">Winkler</option>
          <option value="Wise">Wise</option>
          <option value="Wood">Wood</option>
          <option value="Yoakum">Yoakum</option>

          <option value="Young">Young</option>
          <option value="Zavala">Zavala</option>
          <option value="New York">New York</option>
          <option value="Los Angeles">Los Angeles</option>
          <option value="Wichita">Wichita</option>
          <option value="Wilbarger">Wilbarger</option>
          <option value="Willacy">Willacy</option>
          <option value="Williamson">Williamson</option>
          <option value="Wilson">Wilson</option>
          <option value="Winkler">Winkler</option>
          <option value="Wise">Wise</option>
          <option value="Wood">Wood</option>
          <option value="Yoakum">Yoakum</option>
          <option value="">Please Choose one County</option>
          <br>

      </select>

      <input id="submit-cmp-deaths" type="button" value="Search"></div>
      <!-- <div id="map"></div> -->
      <!-- </div> -->

  </div>
  <div class="col-sm-12" style="height:50px; background-color: black;top:140px;">
    <div id="two"></div>
  <br>
  <center><a href="https://github.com/CSSEGISandData/COVID-19/tree/master/csse_covid_19_data/csse_covid_19_time_series">Data Source</a></center>
  </div>
    </div>

<br>
<br>
<br>
<br>

<!-- <div class="row" style="margin-top:100px; background-color: black;"> -->
  <div class="col-sm-12" style="height:400px; background-color: black;top:140px;"> <h2 id="name2">Hospital Resource Use - Texas</h2>
    <div id="container2"  >
    </div>
  <div id="floating-panel" style="margin-left:850px">

    <!-- <input id="submit" type="button" value="Search"></div> -->
    <!-- ['', '', 'West Virginia', '', 'Virginia', 'Vermont', 'Utah', 'United States of America', 'Texas', 'Tennessee', 'South Dakota', 'South Carolina', 'Rhode Island', 'Pennsylvania', 'Oregon', 'Oklahoma', 'Ohio', 'North Dakota', 'North Carolina', 'New York', 'New Mexico', 'New Jersey', 'New Hampshire', 'Nevada', 'Nebraska', 'Montana', 'Missouri', 'Mississippi', 'Minnesota', 'Michigan', 'Massachusetts', 'Maryland', 'Maine', 'Louisiana', 'Kentucky', 'Kansas', 'Iowa', 'Indiana', 'Illinois', 'Idaho', 'Hawaii', 'Georgia', 'Florida', 'District of Columbia', 'Delaware', 'Connecticut', 'Colorado', 'California', 'Arkansas', 'Arizona', 'Alaska', 'Alabama', 'Veneto', "Valle d'Aosta", 'Valencian Community', 'United Kingdom', 'Umbria', 'Toscana', 'Thuringia', 'Sweden', 'Spain', 'Slovenia', 'Slovakia', 'Sicilia', 'Schleswig-Holstein', 'Saxony', 'Saxony-Anhalt', 'Sardegna', 'Saarland', 'Romania', 'Rhineland-Palatinate', 'Puglia', 'Provincia autonoma di Trento', 'Provincia autonoma di Bolzano', 'Portugal', 'Poland', 'Piemonte', 'Other Counties', ' WA', 'Norway', 'North Rhine-Westphalia', 'Netherlands', 'Navarre', 'Murcia', 'Molise', 'Melilla', 'Mecklenburg-Vorpommern', 'Marche', 'Malta', 'Luxembourg', 'Lower Saxony', 'Lombardia', 'Lithuania', 'Liguria', 'Life Care Center', ' Kirkland', 'Lazio', 'Latvia', 'La Rioja', 'King and Snohomish Counties (excluding Life Care Center)', 'Italy', 'Ireland', 'Hungary', 'Hesse', 'Hamburg', 'Greece', 'Germany', 'Galicia', 'Friuli-Venezia Giulia', 'France', 'Finland', 'Extremadura', 'Estonia', 'Emilia-Romagna', 'Denmark', 'Czechia', 'Cyprus', 'Croatia', 'Community of Madrid', 'Ceuta', 'Catalonia', 'Castilla-La Mancha', 'Castile and Leon', 'Cantabria', 'Canary Islands', 'Campania', 'Calabria', 'Bulgaria', 'Bremen', 'Brandenburg', 'Berlin', 'Belgium', 'Bavaria', 'Basque County', 'Basilicata', 'Balearic Islands', 'Baden-Wurttemberg', 'Austria', 'Asturias', 'Aragon', 'Andalucia', 'Abruzzo']
    <div id="floating-panel" >
      <!-- <input id="address" type="textbox" value="" onchange="initMap(this.value)"> -->
      <!-- <input id="submit" type="button" value="Search"></div> -->
      <select id="container2" onchange="hospitals(this.value)">
        <option value="Texas">Texas</option>
        <option value="United States of America">United States of America</option>
        <option value="Tennessee">Tennessee</option>
        <option value="Alabama">Alabama</option>
        <option value="Arizona">Arizona</option>
        <option value="Alaska">Alaska</option>
        <option value="Arkansas">Arkansas</option>
        <option value="California">California</option>
        <option value="Colorado">Colorado</option>
        <option value="Connecticut">Connecticut</option>
        <option value="Delaware">Delaware</option>
        <option value="Columbia">Columbia</option>
        <option value="Florida">Florida</option>
        <option value="Georgia">Georgia</option>
        <option value="Hawaii">Hawaii</option>
        <option value="Idaho">Idaho </option>
        <option value="Maryland">Maryland</option>
        <option value="Maine">Maine</option>
        <option value="Louisiana">Louisiana</option>
        <option value="Kentucky">Kentucky</option>
        <option value="Kansas">Kansas</option>
        <option value="Iowa">Iowa</option>
        <option value="Indiana">Indiana</option>
        <option value="Illinois">Illinois</option>
        <option value="New York">New York</option>
        <option value="New Mexico">New Mexico</option>
        <option value="New Jersey">New Jersey</option>
        <option value="New Hampshire">New Hampshire</option>
        <option value="Nevada">Nevada</option>
        <option value="Nebraska">Nebraska</option>
        <option value="Montana">Montana</option>
        <option value="Missouri">Missouri</option>
        <option value="Mississippi">Mississippi</option>
        <option value="Minnesota">Minnesota </option>
        <option value="Michigan">Michigan</option>
        <option value="Massachusetts">Massachusetts</option>
        <option value="North Carolina">North Carolina</option>
        <option value="North Dakota">North Dakota</option>
        <option value="Ohio">Ohio</option>
        <option value="Oklahoma">Oklahoma</option>
        <option value="Oregon">Oregon</option>
        <option value="Pennsylvania">Pennsylvania</option>
        <option value="Rhode Island">Rhode Island</option>
        <option value="South Carolina">South Carolina</option>
        <option value="South Dakota">South Dakota</option>
        <option value="Utah">Utah</option>
        <option value="Vermont">Vermont</option>
        <option value="Virginia">Virginia</option>
        <option value="West Virginia">West Virginia'</option>
        <option value="Spain">Spain</option>
        <option value="Italy">Italy</option>
        <option value="United Kingdom">United Kingdom</option>

        <option value="Wyoming">Wyoming </option>
        <option value="Wisconsin">Wisconsin</option>

    </select>
    <!-- <input id="submit" type="button" value="Search"></div> -->
    <!-- <div id="map"></div> -->
    </div>
</div>
</div>
<footer>
<style>

</style>

    <div class="row"><div class="col-sm-12" style="top:200px;">
      <center><a href="http://www.healthdata.org/covid/data-downloads">Data Source</a></center>
      <br>
    <br><br>
    <br>
  <div class="card bg-dark text-white">

    <div class="card-body1">Data sources:
      <a href="https://github.com/CSSEGISandData/COVID-19"style="color:#3399cC"> JHU</a>
      <a href="http://www.healthdata.org/covid/data-downloads"style="color:#3399cC">Hospital_Estimates,</a>
      <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/situation-reports"style="color:#3399cC">WHO,</a>
      <a href="https://www.cdc.gov/coronavirus/2019-ncov/index.html"style="color:#3399cC">CDC,</a>
      <a href="https://www.ecdc.europa.eu/en/geographical-distribution-2019-ncov-cases"style="color:#3399cC">ECDC,</a>
      <a href="http://www.nhc.gov.cn/xcs/yqtb/list_gzbd.shtml"style="color:#3399cC">NHC,</a>
      <a href="https://coronavirus.1point3acres.com/"style="color:#3399cC">1point3acres,</a>
      <a href="https://www.worldometers.info/coronavirus/"style="color:#3399cC">WorldOdometers,</a>
      <a href="https://bnonews.com/index.php/2020/04/the-latest-coronavirus-cases/"style="color:#3399cC">BNO,</a>
      <a href="https://covid19.healthdata.org/united-states-of-america"style="color:#3399cC">healthdata,</a>
      state and national government health departments, and local media reports.  Read more in this
      <a href="https://coronavirus.jhu.edu/map.html"style="color:#3399cC">blog.</a>
      Confirmed cases include presumptive positive cases.
      Active cases = total confirmed - total recovered - total deaths.
      Time Zones: lower-left corner indicator - your local time; lower-right corner plot - UTC.
      Note: All cases of COVID-19 in repatriated US citizens from the Diamond Princess are grouped together. These individuals have been assigned to various quarantine locations (in military bases and hospitals) around the US. This grouping is consistent with the CDC.
      *The names of locations included on the Website correspond with the official designations used by the U.S. Department of State.
    </div>
  </div>

  <center>Developed by <a href="https://www.linkedin.com/in/ashwin-ramananda-baa80572/">Ashwin Ramananda</a></center>
  </div>
  </div>
  <br>
  </footer>



  <script>

     texasConfirmedDeathsCounties();
     function texasConfirmedDeathsCounties(){
       var Texas = "Texas";
       var bodyData ={'placeValue': Texas};
       fetch('http://129.110.176.20:5000/texasData', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
         .then((response) => {
           return response.json();
         })
         .then((data) => {
           // console.log('TexasConfirmedDeaths-data ', data);
           var currentDate = new Date();
           var date = currentDate.getDate() - 1;
           var month = currentDate.getMonth() + 1;
           var year = ('' + currentDate.getFullYear()).slice(2,4);
           var dateStr = month + '/' + date + '/' + year;
           var texasConfirmedCasesCard = 0;
           var texasDeathCasesCard = 0;
           var countyColumnCard = [];
           var countyConfirmedCases = [];
           var key_value = [];

           var dateStr2 = dateStr;

           for(i =0; i<data["texasDataRows"].length; i++){

             key_value.push({key:data["texasDataRows"][i].Admin2, value: parseInt(data["texasDataRows"][i][dateStr])})
           }


           key_value = key_value.sort((a, b) => a.value  - b.value);
           key_value.reverse();

           for(var i = 0 ; i < key_value.length; i++){
             countyColumnCard.push(key_value[i].key)
             countyConfirmedCases.push(key_value[i].value)
           }


           var test = '<tr><th>County</th><th>Confirmed</th></tr>';
           for(i=0;i<countyColumnCard.length;i++){
           test += ' <tr><td>'+countyColumnCard[i]+'</td><td>'+countyConfirmedCases[i]+'</td></tr>';
           }
           document.getElementById("customers").innerHTML = test;
           data["texasDataRows"].forEach(element => texasConfirmedCasesCard += parseInt(element[dateStr]));
           data["texasDataRows"].forEach(element => texasDeathCasesCard += parseInt(element[dateStr]));
           data["texasDataRows"].forEach(element => texasConfirmedCasesCard += parseInt(element[dateStr]));
     });
   }

   function initMap(placeValue) {
// use fetch api

// after getting Data
// console.log("inside initMap");
var bodyData ={'placeValue': placeValue}
fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    // console.log('data- ', data);

    var currentDate = new Date();
    var date = currentDate.getDate() - 1;
    var month = currentDate.getMonth() + 1;
    var year = ('' + currentDate.getFullYear()).slice(2,4);

    var dateStr = month + '/' + date + '/' + year;
    // console.log(dateStr)

    var place = {
    name: data.confirmed.Combined_Key,
    ConfirmedCases: data.confirmed[dateStr],
    ConfirmedDeaths: data.deaths[dateStr],
    date: dateStr};
	      var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">'+place.name+'</h1>'+
            '<div id="bodyContent">'+
            'Date: <b>'+place.date+'</b><br>'+
						'Confirmed Cases: <b>'+place.ConfirmedCases+'</b><br>'+
						'Confirmed Deaths: <b>'+place.ConfirmedDeaths+'</b><br>'+
            '</div>'+
            '</div>';
        var marker;
        var map = new google.maps.Map(document.getElementById('map'), {
        //  center: {lat: 40.674, lng: -73.945},
         center: {lat: 32.7767, lng: -96.7970},//31.9686° N, 99.9018° W
          zoom: 10,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });

        var geocoder = new google.maps.Geocoder();
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });

      //}

      function geocodeAddress(geocoder, resultsMap) {

        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
              var uluru = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()};

          if(marker && marker.setMap){
            marker.setMap(null);
          }
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          tilte: 'Test'
        });


        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

      confirmed("Dallas");

      //here

      // deaths("Dallas");

hospitals('Texas')

dallasConfirmedDeaths();
//populate this data in cards-------pending
function dallasConfirmedDeaths(){
  var Dallas = "Dallas";
  var bodyData ={'placeValue': Dallas};
  fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      // console.log('dallasConfirmedDeaths-data ', data);
      var currentDate = new Date();
      var date = currentDate.getDate() - 1;
      var month = currentDate.getMonth() + 1;
      var year = ('' + currentDate.getFullYear()).slice(2,4);
      var dateStr = month + '/' + date + '/' + year;
      // console.log("dallasConfirmedDeaths------",dateStr);
      var place = {
      name: data.confirmed.Combined_Key,
      DallasConfirmedCases: data.confirmed[dateStr],
      DallasConfirmedDeaths: data.deaths[dateStr],
      // RecoveredCases: data.recovered[dateStr],
      date: dateStr
    };
    document.getElementById("dallasConfirmedCard").innerHTML = place.DallasConfirmedCases;
    document.getElementById("dallasDeathCard").innerHTML = place.DallasConfirmedDeaths;

});
}



harrisConfirmedDeaths();
//populate this data in cards-------pending
function harrisConfirmedDeaths(){
  var Harris = "Harris";
  var bodyData ={'placeValue': Harris};
  fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      // console.log('dallasConfirmedDeaths-data ', data);
      var currentDate = new Date();
      var date = currentDate.getDate() - 1;
      var month = currentDate.getMonth() + 1;
      var year = ('' + currentDate.getFullYear()).slice(2,4);
      var dateStr = month + '/' + date + '/' + year;
      // console.log("dallasConfirmedDeaths------",dateStr);
      var place = {
      name: data.confirmed.Combined_Key,
      HarrisConfirmedCases: data.confirmed[dateStr],
      HarrisConfirmedDeaths: data.deaths[dateStr],
      // RecoveredCases: data.recovered[dateStr],
      date: dateStr
    };
    document.getElementById("harrisConfirmedCard").innerHTML = place.HarrisConfirmedCases;
    document.getElementById("harrisDeathCard").innerHTML = place.HarrisConfirmedDeaths;

});
}




texasConfirmedDeaths();
function texasConfirmedDeaths(){
  var Texas = "Texas";
  var bodyData ={'placeValue': Texas};
  fetch('http://129.110.176.20:5000/texasData', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      // console.log('TexasConfirmedDeaths-data ', data);
      var currentDate = new Date();
      var date = currentDate.getDate() - 1;
      var month = currentDate.getMonth() + 1;
      var year = ('' + currentDate.getFullYear()).slice(2,4);
      var dateStr = month + '/' + date + '/' + year;
      var texasConfirmedCasesCard = 0;
      var texasDeathCasesCard = 0;
      var countyColumnCard = [];
      var countyConfirmedCases = [];
      var dateStr2 = dateStr;

      for(i =0; i<data["texasDeathsCardRow"].length; i++){
        countyColumnCard.push(data["texasDeathsCardRow"][i].Admin2)
        countyConfirmedCases.push(data["texasDeathsCardRow"][i][dateStr])


      }
      // console.log("harris", data);
      data["texasDataRows"].forEach(element => texasConfirmedCasesCard += parseInt(element[dateStr]));
      document.getElementById("texasConfirmedCasesCard").innerHTML = texasConfirmedCasesCard;
      data["texasDeathsCardRow"].forEach(element => texasDeathCasesCard += parseInt(element[dateStr]));
      document.getElementById("texasDeathCasesCard").innerHTML = texasDeathCasesCard;
      data["texasDataRows"].forEach(element => texasConfirmedCasesCard += parseInt(element[dateStr]));
});
}

// Collin,Dallas,Denton,Ellis,Hood,Hunt,Johnson,Kaufman,Parker,Rockwall,Somervell,Tarrant,Wise are the 13 counties for DFW
DallasFortWorthConfirmedDeaths();
function DallasFortWorthConfirmedDeaths(){
  var Texas = "Texas";
  var Counties = ["Collin","Dallas","Denton","Ellis","Hood","Hunt","Johnson","Kaufman","Parker","Rockwall","Somervell","Tarrant","Wise"]
  var bodyData ={'placeValue': Texas,'counties': Counties};
  fetch('http://129.110.176.20:5000/DFWData', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
    .then((response) => {
      return response.json();
    })
    .then((data) => {
      // console.log('DFW-data ', data);
      var currentDate = new Date();
      var date = currentDate.getDate() - 1;
      var month = currentDate.getMonth() + 1;
      var year = ('' + currentDate.getFullYear()).slice(2,4);
      var dateStr = month + '/' + date + '/' + year;
      var dfwConfirmedCasesCard = 0;
      var dfwDeathCasesCard = 0;



      // console.log("dfw death card",data);
      data["dfwDataRows"].forEach(element => dfwConfirmedCasesCard += parseInt(element[dateStr]));
      document.getElementById("dfwConfirmedCases").innerHTML = dfwConfirmedCasesCard;


      data["dfwDataDeathRows"].forEach(element => dfwDeathCasesCard += parseInt(element[dateStr]));
      document.getElementById("dfwDeathCases").innerHTML = dfwDeathCasesCard;
    // console.log("dallasConfirmedDeaths", place );
});
}
});


			//till here
		}

    function hospitals(placeValue){
// console.log("1111",placeValue);
      document.getElementById("name2").innerHTML = "Hospital resource use - " + placeValue;
      var dom = document.getElementById("container2");
      var myChart = echarts.init(dom);
      // var US = "US";
      // console.log("inside hosp",placeValue);
      var bodyData ={'placeValue': placeValue};
      fetch('http://129.110.176.20:5000/hospitalBedInfo',  {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          // console.log('data***********- ', data);
          var dateStr = [], ICU_beds_mean = [], Ventilator_mean = [], allbed_mean = [], fatality_mean = [], hosp_admissions =[];

          // var currentDate = new Date();
          // var date = currentDate.getDate() - 1;
          // var month = currentDate.getMonth() + 1;
          // var year = ('' + currentDate.getFullYear()).slice(2,4);
          for(i =0; i<data.USBeds.length; i++){
            dateStr.push(data.USBeds[i].date)
            ICU_beds_mean.push(data.USBeds[i].ICUbed_mean)
            Ventilator_mean.push(data.USBeds[i].InvVen_mean)
            allbed_mean.push(data.USBeds[i].allbed_mean)
            fatality_mean.push(data.USBeds[i].deaths_mean)
            hosp_admissions.push(data.USBeds[i].admis_mean)
          }
      var app = {};
      option = null;
      option = {
          title: {
          },
          tooltip: {
              trigger: 'axis',
              axisPointer: {
                  type: 'cross',
                  label: {
                      backgroundColor: '#6a7985'
                  }
              }
          },
          legend: {
              data: ['ICU Beds needed', 'Ventilator needed', 'All Beds needed', 'Fatality Rate', 'Hospital Admissions Rate'],
            textStyle: {
                color: '#fff',
                fontSize: 13
            }
              // data: ['All Beds needed','ICU Beds needed', 'Ventilator needed',  'Fatality', 'e']
          },

          grid: {
              left: '3%',
              right: '4%',
              bottom: '3%',
              containLabel: true
          },

          xAxis: [
              {name: 'Date',
    nameLocation: 'center',
    nameGap: 18,
    nameTextStyle: {
      color: '#fff',
      fontSize: 13
    },
                  type: 'category',
                  boundaryGap: false,
                  data: dateStr,
                  axisLine: {
                    lineStyle: {
                      color: 'white'
                    }
                  }
              }
          ],
          yAxis: [
              {

                            type: 'value',
                            axisLine: {
                    lineStyle: {
                        color: 'white'
                    }
                }          }
          ],
          series: [
              {
                  name: 'ICU Beds needed',
                  type: 'line',
                  stack: '总量',
                  areaStyle: {},
                  data: ICU_beds_mean
              },
              {
                  name: 'Ventilator needed',
                  type: 'line',
                  stack: '总量',
                  areaStyle: {},
                  data: Ventilator_mean
              },
              {
                  name: 'All Beds needed',
                  type: 'line',
                  stack: '总量',
                  areaStyle: {},
                  data: allbed_mean
              },
              {
                  name: 'Fatality Rate',
                  type: 'line',
                  stack: '总量',
                  areaStyle: {},
                  data: fatality_mean
              },
              {
                  name: 'Hospital Admissions Rate',
                  type: 'line',
                  stack: '总量',
                  areaStyle:{},
                  data: hosp_admissions,
                  label: {
                      normal: {
                          // show: true,
                          position: 'bottom'
                      }
                  },

              }
          ]
      };
      ;
      if (option && typeof option === "object") {
          myChart.setOption(option, true);
      }
      });

    }

    function confirmed(placeValue){
      document.getElementById("name").innerHTML = "Confirmed Cases- " + placeValue;
      // console.log("confirmed-placevalue",placeValue);
      var dom = document.getElementById("container");
      var myChart = echarts.init(dom);
     var bodyData ={'placeValue': placeValue};

     fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
       .then((response) => {
         return response.json();
       })
       .then((data) => {
     var confirmedLast7daysKeys = [], confirmedLast7daysValues = [];
     var currentDate = new Date();
     var date = currentDate.getDate() - 1;
     var month = currentDate.getMonth() + 1;
     var year = ('' + currentDate.getFullYear()).slice(2,4);
     var i=1;
     while(i<= 31){
       if (date == 0) {
         date = 31;
         month = month -1;
         continue;
       }
       var dateStr = month + '/' + date + '/' + year;
       confirmedLast7daysKeys.push(dateStr)
       confirmedLast7daysValues.push(data.confirmed[dateStr])
       date = date - 1;
       i++;
     }

     confirmedLast7daysKeys.reverse()
     confirmedLast7daysValues.reverse()


     var app = {};
     option = null;
     option = {
         color: ['#3398DB'],
         tooltip: {
             trigger: 'axis',
             axisPointer: {
                 type: 'shadow'        // 'line' | 'shadow'
             }
         },
         grid: {
             left: '3%',
             right: '4%',
             bottom: '3%',
             containLabel: true
         },
         legend:{
           color:['#ffffff']
         },
         xAxis: [
             {
                 type: 'category',
                 name: 'Date',
     nameLocation: 'center',
     nameGap: 18,
     nameTextStyle: {
         color: '#fff',
         fontSize: 13
     },
                 data: confirmedLast7daysKeys,
                 axisTick: {
                     alignWithLabel: true
                 },
                 axisLine: {
         lineStyle: {
             color: 'white'
         }
     }
             }
         ],
         yAxis: [
             {
               // name: 'Cases Confirmed - Dallas',
     nameLocation: 'center',
     nameGap: 35,
     nameTextStyle: {
         color: '#fff',
         fontSize: 12
     },
                 type: 'value',
                 axisLine: {
         lineStyle: {
             color: 'white'
         }
     }
             }

         ],
         series: [
             {
                 name: '',
                 type: 'bar',
                 barWidth: '60%',
                 data: confirmedLast7daysValues
             }
         ]
     };
     ;
     if (option && typeof option === "object") {
         myChart.setOption(option, true);
     }
     });

     deaths(placeValue);
    }


    function deaths(placeValue){
      document.getElementById("name1").innerHTML = "Fatality - " + placeValue;
      var dom = document.getElementById("container1");
      var myChart = echarts.init(dom);
      // console.log("dabc", placeValue);
      // var Dallas = "Dallas";
      var bodyData ={'placeValue': placeValue};

      fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
        .then((response) => {
          return response.json();
        })
        .then((data) => {
      var confirmedLast30daysKeys = [], confirmedLast30daysValues = [];
      var currentDate = new Date();
      var date = currentDate.getDate() - 1;
      var month = currentDate.getMonth() + 1;
      var year = ('' + currentDate.getFullYear()).slice(2,4);

      var i=1;
      while(i<= 31){
        if (date == 0) {
          date = 31;
          month = month -1;
          continue;
        }
        var dateStr = month + '/' + date + '/' + year;
        confirmedLast30daysKeys.push(dateStr)
        confirmedLast30daysValues.push(data.deaths[dateStr])
        date = date - 1;
        i++;
      }
      confirmedLast30daysKeys.reverse()
      confirmedLast30daysValues.reverse()



      var app = {};
      option = null;
      option = {
          color: ['#3398DB'],
          tooltip: {
              trigger: 'axis',
              axisPointer: {
                  type: 'shadow'        // 'line' | 'shadow'
              }
          },
          grid: {
              left: '3%',
              right: '4%',
              bottom: '3%',
              containLabel: true
          },
          xAxis: [
              {
                  type: 'category',
                  name: 'Date',
      nameLocation: 'center',
      nameGap: 18,
      nameTextStyle: {
          color: '#fff',
          fontSize: 13
      },
                  data: confirmedLast30daysKeys,
                  axisTick: {
                      alignWithLabel: true
                  },
                  axisLine: {
          lineStyle: {
              color: 'white'
          }
      }
              }
          ],
          yAxis: [
              {
                //name: 'Deaths-Dallas',
                nameLocation: 'end',
                nameGap: 35,
                nameTextStyle: {
                  color: '#fff',
                  fontSize: 12
                },
                  type: 'value',
                  axisLine: {
                    lineStyle: {
                      color: 'white'
                      }
                    }
                  }
                ],
                series: [
                  {
                    name: '',
                    type: 'bar',
                    barWidth: '60%',
                    data: confirmedLast30daysValues
                  }
                ]
              };

      if (option && typeof option === "object") {
          myChart.setOption(option, true);
      }
      });
      // console.log("here",placeValue);
      compare_county_confirmed(placeValue,"Harris")
}


var one;
var two;
function getonevalue(placeValue)
{
  one = placeValue;
}


function getsecondvalue(placeValue)
{
  two = placeValue;
}

document.getElementById("submit-cmp-confirmed-cases").onclick = function()
{
  compare_county_confirmed(one,two);
}

document.getElementById("submit-cmp-deaths").onclick = function()
{
  compare_county_deaths(one,two);
}

function compare_county_confirmed(placeValue,placeValue2){
  document.getElementById("main_heading_confirmed_comparison").innerHTML = "Confirmed Cases " + placeValue + " vs " + placeValue2;
  console.log("data1!!!!!",placeValue);
  console.log("data2",placeValue2);
  var dom = document.getElementById("compare_county_c");
  var myChart = echarts.init(dom);
  var bodyData ={'placeValue': placeValue};
  var bodyData2 = {'placeValue':placeValue2};

  fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
    .then((response) => {
      return response.json();
    })
    .then((data) => {

      fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData2)})
        .then((response) => {
          return response.json();
        })
        .then((data2) => {
  var confirmedLast30daysKeys = [], confirmedLast30daysValues = []; confirmedLast30daysValues2 =[];
  var currentDate = new Date();
  var date = currentDate.getDate() - 1;
  var month = currentDate.getMonth() + 1;
  var year = ('' + currentDate.getFullYear()).slice(2,4);

  var i=1;
  while(i<= 31){
    if (date == 0) {
      date = 31;
      month = month -1;
      continue;
    }
    var dateStr = month + '/' + date + '/' + year;
    confirmedLast30daysKeys.push(dateStr)
    confirmedLast30daysValues.push(data.confirmed[dateStr])
    confirmedLast30daysValues2.push(data2.confirmed[dateStr])
    date = date - 1;
    i++;
  }
  confirmedLast30daysKeys.reverse()
  confirmedLast30daysValues.reverse()
  confirmedLast30daysValues2.reverse()

  var app = {};
  option = null;
  option = {
      title: {
          text: 'County Confirmed Cases Comparison',
          subtext: 'Choose the counties to be compare'
      },
      tooltip: {
          trigger: 'axis'
      },
      legend: {
          data: [bodyData.placeValue, bodyData2.placeValue]
      },
      toolbox: {
          show: true,
          feature: {
              dataView: {show: true, readOnly: false},
              magicType: {show: true, type: ['line', 'bar']},
              restore: {show: true},
              saveAsImage: {show: true}
          }
      },
      calculable: true,
      xAxis: [
          {
              type: 'category',
              data: confirmedLast30daysKeys
              // ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
          }
      ],
      yAxis: [
          {
              type: 'value'
          }
      ],
      series: [
          {
              name: bodyData.placeValue,
              type: 'bar',
              data: confirmedLast30daysValues,
              // [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
              markPoint: {
                  data: [
                      {type: 'max', name: '最大值'},
                      {type: 'min', name: '最小值'}
                  ]
              },
              markLine: {
                  data: [
                      {type: 'average', name: '平均值'}
                  ]
              }
          },
          {
              name: bodyData2.placeValue,
              type: 'bar',
              data: confirmedLast30daysValues2,
              // [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
              markPoint: {
                  data: [
                    {type: 'max', name: '最大值'},
                    {type: 'min', name: '最小值'}
                  ]
              },
              markLine: {
                  data: [
                      {type: 'average', name: '平均值'}
                  ]
              }
          }
      ]
  };
  ;
  if (option && typeof option === "object") {
      myChart.setOption(option, true);
  }
  });
  });

compare_county_deaths(placeValue,placeValue2);
}

function compare_county_deaths(placeValue,placeValue2){
  // console.log("deaths",placeValue);
  // console.log("daths2",placeValue2);
  document.getElementById("main_heading_fatalities_comparison").innerHTML = " Fatalities " + placeValue + " vs " + placeValue2;

  var dom = document.getElementById("compare_county_d");
  var myChart = echarts.init(dom);


  var bodyData ={'placeValue': placeValue};

  var bodyData2 = {'placeValue':placeValue2};

  fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData)})
    .then((response) => {
      return response.json();
    })
    .then((data) => {

      fetch('http://129.110.176.20:5000/about', {method: "POST",headers: {'Content-Type': 'application/json'},body: JSON.stringify(bodyData2)})
        .then((response) => {
          return response.json();
        })
        .then((data2) => {
          console.log('county comparison data- deaths ', data);

      console.log('county comparison deaths data2- ', data2);
  var confirmedLast30daysKeys = [], confirmedLast30daysValues = []; confirmedLast30daysValues2 =[];
  var currentDate = new Date();
  var date = currentDate.getDate() - 1;
  var month = currentDate.getMonth() + 1;
  var year = ('' + currentDate.getFullYear()).slice(2,4);

  var i=1;
  while(i<= 31){
    if (date == 0) {
      date = 31;
      month = month -1;
      continue;
    }
    var dateStr = month + '/' + date + '/' + year;
    confirmedLast30daysKeys.push(dateStr)
    confirmedLast30daysValues.push(data.deaths[dateStr])
    confirmedLast30daysValues2.push(data2.deaths[dateStr])
    date = date - 1;
    i++;
  }
  confirmedLast30daysKeys.reverse()
  confirmedLast30daysValues.reverse()
  confirmedLast30daysValues2.reverse()
  console.log("confirmedLast30daysValues", confirmedLast30daysValues);
  console.log("confirmedLast30daysValues2", confirmedLast30daysValues2);


  // console.log("pasdasdad", bodyData2.placeValue);
  var app = {};
  option = null;
  option = {
      title: {
          text: 'County DataComparison',
          subtext: 'Choose counties to be compared'
      },
      tooltip: {
          trigger: 'axis'
      },
      legend: {
          data: [bodyData.placeValue, bodyData2.placeValue]
      },
      toolbox: {
          show: true,
          feature: {
              dataView: {show: true, readOnly: false},
              magicType: {show: true, type: ['line', 'bar']},
              restore: {show: true},
              saveAsImage: {show: true}
          }
      },
      calculable: true,
      xAxis: [
          {
              type: 'category',
              data: confirmedLast30daysKeys
              // ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月']
          }
      ],
      yAxis: [
          {
              type: 'value'
          }
      ],
      series: [
          {
              name: bodyData.placeValue,
              type: 'bar',
              data: confirmedLast30daysValues,
              // [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
              markPoint: {
                  data: [
                      {type: 'max', name: '最大值'},
                      {type: 'min', name: '最小值'}
                  ]
              },
              markLine: {
                  data: [
                      {type: 'average', name: '平均值'}
                  ]
              }
          },
          {
              name: bodyData2.placeValue,
              type: 'bar',
              data: confirmedLast30daysValues2,
              // [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
              markPoint: {
                  data: [
                    {type: 'max', name: '最大值'},
                    {type: 'min', name: '最小值'}
                  ]
              },
              markLine: {
                  data: [
                      {type: 'average', name: '平均值'}
                  ]
              }
          }
      ]
  };
  ;
  if (option && typeof option === "object") {
      myChart.setOption(option, true);
  }
  });
  });


}
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-gl/dist/echarts-gl.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts-stat/dist/ecStat.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/dist/extension/dataTool.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/map/js/china.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/map/js/world.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts/dist/extension/bmap.min.js"></script>
    <script type="text/javascript"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcWhzcS0fRqtT4czOHzFBfbw4PqiIhnk4&callback=initMap" async defer></script>
</body>
</htmL>

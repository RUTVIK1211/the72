  <?php
	require_once 'dbconnection.php';
	$id = $_POST['id'];
	$sql =  "SELECT * FROM user_testing WHERE userno=$id";

	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);


	$output = " <form action='controller' id='edit' method='post' enctype='multipart/form-data' class='p-3'>
		<div class='row'>
			<div class='form-group col'>
				<label for='1'>User ID</label>
				<input type='text' class='form-control border-dark' id='userid' name='userid' readonly value='".$data['userid']." ' >
        		<input type='hidden' id='userno' name='userno' value='".$data['userno']."'>
			</div>
		</div>
        <div class='row'>
          <div class='form-group col'>
            <label for='1'>Date Actuelle</label>
            <input type='date' class='form-control border-dark  '  id='dateactuelle' name='dateactuelle' value='".$data['dateactuelle']."' >
          </div>
          <div class='form-group col'>
            <label for='2'>societe</label>
            <input type='text' class='form-control border-dark ' id='societe' name='societe' value='".$data['societe']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='3'>Agence maritime</label>
            <input type='text' class='form-control border-dark ' id='agencemaritime' name='agencemaritime' value='".$data['agencemaritime']."' >
          </div>
          <div class='form-group col'>
            <label for='4'>Numbero BL</label>
            <input type='text' class='form-control border-dark  ' id='numberbl' name='numberbobl' value='".$data['numberbobl']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='5'>Numbero CO</label>
            <input type='number' class='form-control border-dark  ' id='numberco' name='numberco' value='".$data['numberco']."' >
          </div>
          <div class='form-group col'>
            <label for='6'>Date Reception BL</label>
            <input type='date' class='form-control border-dark ' id='datereceptionbl' name='datereceptionbl' value='".$data['datereceptionbl']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='7'>Date Arrivee Co</label>
            <input type='date' class='form-control border-dark  ' id='datearriveeco' name='datearriveeco' value='".$data['datearriveeco']."' >
          </div>
          <div class='form-group col'>
            <label for='8'>Remaining Day Avant Arrivee CO</label>
            <input type='number' class='form-control border-dark ' id='redaac' name='redaac' value='".$data['redaac']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='9'>Date DE Legalistation 7 Jours avant arrivee CO</label>
            <input type='date' class='form-control border-dark ' id='ddljaac' name='ddljaac' value='".$data['ddljaac']."' >
          </div>
          <div class='form-group col'>
            <label for='10'>Date De sortie CO Port Luanda 4 jours apres date arrivee</label>
            <input type='date' class='form-control border-dark ' id='ddscpl4jada' name='ddscpl4jada' value='".$data['ddscpl4jada']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='11'>Date DE Sortie Reelle</label>
            <input type='date' class='form-control border-dark ' id='ddsr' name='ddsr' value='".$data['ddsr']."' >
          </div>
          <div class='form-group col'>
            <label for='12'>Jours DE Penalites Date DE Sortie Reelle Moins Date DE sortie Normale</label>
            <input type='number' class='form-control border-dark ' id='jdpddsrmddsn' name='jdpddsrmddsn' value='".$data['jdpddsrmddsn']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='13'>Date DE Retour CO</label>
            <input type='date' class='form-control border-dark ' id='ddrc' name='ddrc' value='".$data['ddrc']."' >
          </div>
          <div class='form-group col'>
            <label for='14'>Date Reelle DE Retour CO</label>
            <input type='date' class='form-control border-dark ' id='drdrc' name='drdrc' value='".$data['drdrc']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='15'>Jours DE Penalites Date DE Retour CO Reelle Moins Date DE Retour Normale</label>
            <input type='number' class='form-control border-dark ' id='jdpddrcrmddrn' name='jdpddrcrmddrn' value='".$data['jdpddrcrmddrn']."' >
          </div>
          <div class='form-group col'>
            <label for='16'>Type DE</label>
            <input type='text' class='form-control border-dark ' id='tdc' name='tdc' value='".$data['tdc']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='17'>POIDS</label>
            <input type='number' class='form-control border-dark ' id='poids' name='poids' value='".$data['poids']."' >
          </div>
          <div class='form-group col'>
            <label for='18'>Nombre DE Colis</label>
            <input type='number' class='form-control border-dark ' id='nombredecolis' name='nombredecolis' value='".$data['nombredecolis']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='19'>Nature marchandise</label>
            <input type='text' class='form-control border-dark ' id='nam' name='nam' value='".$data['nam']."' >
          </div>
          <div class='form-group col'>
            <label for='20'>Camions DE Transport </label>
            <input type='number' class='form-control border-dark ' id='cdt' name='cdt' value='".$data['cdt']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='21'> NOM DU CHAUFFEUR</label>
            <input type='text' class='form-control border-dark ' id='ndc' name='ndc' value='".$data['ndc']."' >
          </div>
          <div class='form-group col'>
            <label for='22'>PLAQUE </label>
            <input type='text' class='form-control border-dark ' id='plaque' name='plaque' value='".$data['plaque']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='23'>TELEPHONE</label>
            <input type='number' class='form-control border-dark ' id='telephone' name='telephone' value='".$data['telephone']."' >
          </div>
          <div class='form-group col'>
            <label for='24'>JOUR OU IL QUITTE LUANDA </label>
            <input type='text' class='form-control border-dark ' id='joiql' name='joiql' value='".$data['joiql']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='25'>JOUR ARRIVEE A LUFU </label>
            <input type='text' class='form-control border-dark ' id='jaal' name='jaal' value='".$data['jaal']."' >
          </div>
          <div class='form-group col'>
            <label for='26'> JOUR DEPOTAGE</label>
            <input type='text' class='form-control border-dark ' id='jourdepotag' name='jourdepotag' value='".$data['jourdepotag']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='27'>ARTICLES RETIRES PAR OCC </label>
            <input type='text' class='form-control border-dark ' id='arpo' name='arpo' value='".$data['arpo']."' >
          </div>
          <div class='form-group col'>
            <label for='28'>ARTICLES RETIRES PAR VERIFICATION  </label>
            <input type='text' class='form-control border-dark ' id='arpv' name='arpv' value='".$data['arpv']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='29'> ARTICLES RETIRES PAR SANTE</label>
            <input type='text' class='form-control border-dark ' id='arps' name='arps' value='".$data['arps']."' >
          </div>
          <div class='form-group col'>
            <label for='30'>  ARTICLES RETIRES PAR AUTRE 31 SOLDE DU NOMBRE ARTICLES</label>
            <input type='text' class='form-control border-dark ' id='arpa1sdna' name='arpa1sdna' value='".$data['arpa1sdna']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='31'>SOLDE DU NOMBER ARTICLES </label>
            <input type='text' class='form-control border-dark ' id='sdna' name='sdna' value='".$data['sdna']."' >
          </div>
          <div class='form-group col'>
            <label for='32'>DATE ARRIVEE A KIN  </label>
            <input type='date' class='form-control border-dark ' id='aak' name='aak' value='".$data['aak']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='33'>DATE DEPART DE KIN </label>
            <input type='date' class='form-control border-dark ' id='ddk' name='ddk' value='".$data['ddk']."' >
          </div>
          <div class='form-group col'>
            <label for='34'>DATE ARRIVEE A LUANDA  </label>
            <input type='date' class='form-control border-dark ' id='aal' name='aal' value='".$data['aal']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='35'>RETOUR CO ET INTERCHANGE </label>
            <input type='text' class='form-control border-dark ' id='rcei' name='rcei' value='".$data['rcei']."' >
          </div>
          <div class='form-group col'>
            <label for='36'> COUT DE LEGALISATION ET NUMERO FACTURE </label>
            <input type='text' class='form-control border-dark ' id='cdlenf' name='cdlenf' value='".$data['cdlenf']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='37'>COUT DE DOUANE ANGOLA </label>
            <input type='number' class='form-control border-dark ' id='cdda' name='cdda' value='".$data['cdda']."' >
          </div>

          <div class='form-group col'>
            <label for='38'>COUT DE PORT LUANDA </label>
            <input type='number' class='form-control border-dark ' id='cdpl' name='cdpl' value='".$data['cdpl']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='39'> COUT DE TERMINALE LUANDA </label>
            <input type='number' class='form-control border-dark ' id='cdtl' name='cdtl' value='".$data['cdtl']."' >
          </div>
          <div class='form-group col'>
            <label for='40'>AUTRES DEPENSES </label>
            <input type='text' class='form-control border-dark ' id='autresdepenses' name='autresdepenses' value='".$data['autresdepenses']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='41'> COUT DE TRANSPORT </label>
            <input type='number' class='form-control border-dark ' id='coutdetransport' name='coutdetransport' value='".$data['coutdetransport']."' >
          </div>
          <div class='form-group col'>
            <label for='42'> COUT DE PASSA DE TRAVERSIA</label>
            <input type='number' class='form-control border-dark ' id='cdpdt' name='cdpdt' value='".$data['cdpdt']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='43'>COUT DE FUMIGATION </label>
            <input type='number' class='form-control border-dark ' id='coutdefumigation' name='coutdefumigation' value='".$data['coutdefumigation']."' >
          </div>
          <div class='form-group col'>
            <label for='44'> COUT DE POLICE FRONTIERE  </label>
            <input type='number' class='form-control border-dark ' id='cdpf' name='cdpf' value='".$data['cdpf']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='45'> COUT DE SANTE FRONTIERE</label>
            <input type='number' class='form-control border-dark ' id='cdsf' name='cdsf' value='".$data['cdsf']."' >
          </div>
          <div class='form-group col'>
            <label for='46'> COUT DE FONER </label>
            <input type='text' class='form-control border-dark ' id='cdf' name='cdf' value='".$data['cdf']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='47'> IMMIGRATION DGM </label>
            <input type='text' class='form-control border-dark ' id='immigrationdgm' name='immigrationdgm' value='".$data['immigrationdgm']."' >
          </div>
          <div class='form-group col'>
            <label for='48'> FERI</label>
            <input type='text' class='form-control border-dark ' id='feri' name='feri' value='".$data['feri']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='49'> DOUANE </label>
            <input type='text' class='form-control border-dark ' id='douane' name='douane' value='".$data['douane']."' >
          </div>
          <div class='form-group col'>
            <label for='50'>NUMERO E DOUANE </label>
            <input type='text' class='form-control border-dark ' id='numeroedouane' name='numeroedouane' value='".$data['numeroedouane']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='51'> BULLETIN</label>
            <input type='text' class='form-control border-dark ' id='bulletin' name='bulletin' value='".$data['bulletin']."' >
          </div>
          <div class='form-group col'>
            <label for='52'>OCC LABO </label>
            <input type='text' class='form-control border-dark ' id='occlabo' name='occlabo' value='".$data['occlabo']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='53'> REDRESSEMENT OCC </label>
            <input type='text' class='form-control border-dark ' id='redressementocc' name='redressementocc' value='".$data['redressementocc']."' >
          </div>
          <div class='form-group col'>
            <label for='54'> CAUTION CO</label>
            <input type='text' class='form-control border-dark ' id='cautionco' name='cautionco' value='".$data['cautionco']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='55'>PEAGE LUFU </label>
            <input type='text' class='form-control border-dark ' id='peagelufu' name='peagelufu' value='".$data['peagelufu']."' >
          </div>
          <div class='form-group col'>
            <label for='56'>PEAGE NOKI</label>
            <input type='text' class='form-control border-dark ' id='peagenoki' name='peagenoki' value='".$data['peagenoki']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='57'> PEAGE KENGE </label>
            <input type='text' class='form-control border-dark ' id='peagekenge' name='peagekenge' value='".$data['peagekenge']."' >
          </div>
          <div class='form-group col'>
            <label for='58'>PEAGE KASANGULU </label>
            <input type='text' class='form-control border-dark ' id='peagekasangulu' name='peagekasangulu' value='".$data['peagekasangulu']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='59'> ASSURANCE</label>
            <input type='text' class='form-control border-dark ' id='assurance' name='assurance' value='".$data['assurance']."' >
          </div>
          <div class='form-group col'>
            <label for='60'> FEUILLE DE ROUTE </label>
            <input type='text' class='form-control border-dark ' id='feuillederoute' name='feuillederoute' value='".$data['feuillederoute']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='61'>MITENDI </label>
            <input type='text' class='form-control border-dark ' id='mitendi' name='mitendi' value='".$data['mitendi']."' >
          </div>
          <div class='form-group col'>
            <label for='62'> ANTI FRAUDE</label>
            <input type='text' class='form-control border-dark ' id='antifraude' name='antifraude' value='".$data['antifraude']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='63'> DOUANE VILLE </label>
            <input type='text' class='form-control border-dark ' id='douaneville' name='douaneville' value='".$data['douaneville']."' >
          </div>
          <div class='form-group col'>
            <label for='64'>BDLF </label>
            <input type='text' class='form-control border-dark ' id='bdlf' name='bdlf' value='".$data['bdlf']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='65'> PONT PESE </label>
            <input type='text' class='form-control border-dark ' id='pontpese' name='pontpese' value='".$data['pontpese']."' >
          </div>
          <div class='form-group col'>
            <label for='66'>CAUTION 1 </label>
            <input type='text' class='form-control border-dark ' id='caution1' name='caution1' value='".$data['caution1']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='67'> CAUTION 2 </label>
            <input type='text' class='form-control border-dark ' id='caution2' name='caution2' value='".$data['caution2']."' >
          </div>
          <div class='form-group col'>
            <label for='68'>FACTURE CLIENT </label>
            <input type='text' class='form-control border-dark ' id='factureclient' name='factureclient' value='".$data['factureclient']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='69'>REMBOURSEMENT CLIENT </label>
            <input type='text' class='form-control border-dark ' id='remboursementlient' name='remboursementlient' value='".$data['remboursementlient']."' >
          </div>
          <div class='form-group col'>
            <label for='70'>AVANCE SUR FACTURE </label>
            <input type='number' class='form-control border-dark ' id='avancesurfacture' name='avancesurfacture' value='".$data['avancesurfacture']."' >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='71'>SOLDE SUR FACTURE </label>
            <input type='number' class='form-control border-dark ' id='soldesurfacture' name='soldesurfacture' value='".$data['soldesurfacture']."' >
          </div>
          <div class='form-group col'>
            <label for='72'> MARGE SOCIETE </label>
            <input type='number' class='form-control border-dark ' id='margesociete' name='margesociete' value='".$data['margesociete']."'  >
          </div>
        </div>
        <div class='row'>
          <div class='form-group col-md-12'>
            <input type='submit' value='updatedata' name='action' class='btn btn-outline-info'>
          </div>
        </div>
      </form>
";
	echo ($output);
	// echo "<pre>";
	// print_r($data);
	// die("moj ma revu ne moj ma khavu");
 ?>

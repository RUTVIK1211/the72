  <?php
	require_once 'dbconnection.php';
	$id = $_POST['id'];
	$sql =  "SELECT * FROM user_testing WHERE userno=$id";

	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);


	$output = " <form action='controller' id='insertform' method='post' enctype='multipart/form-data' class='p-3'>

		<div class='row'>
			<div class='form-group col'>
				<label for='1'>User ID</label>
				<input type='text' class='form-control border-dark' id='userid' name='userid' value='".$data['userid']."' readonly>
			</div>
		</div>
        <div class='row'>
          <div class='form-group col'>
            <label for='1'>Date Actuelle</label>
            <input type='text' class='form-control border-dark  '  id='dateactuelle' name='dateactuelle' value='".$data['dateactuelle']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='2'>societe</label>
            <input type='text' class='form-control border-dark ' id='societe' name='societe' value='".$data['societe']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='3'>Agence maritime</label>
            <input type='text' class='form-control border-dark  ' id='agencemaritime' name='agencemaritime' value='".$data['agencemaritime']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='4'>Numbero BL</label>
            <input type='number' class='form-control border-dark  ' id='numberbl' name='numberbl' value='".$data['numberbobl']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='5'>Numbero CO</label>
            <input type='number' class='form-control border-dark  ' id='numberco' name='numberco' value='".$data['numberco']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='6'>Date Reception BL</label>
            <input type='text' class='form-control border-dark ' id='datereceptionbl' name='datereceptionbl' value='".$data['datereceptionbl']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='7'>Date Arrivee Co</label>
            <input type='text' class='form-control border-dark  ' id='datearriveeco' name='datearriveeco' value='".$data['datearriveeco']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='8'>Remaining Day Avant Arrivee CO</label>
            <input type='number' class='form-control border-dark ' id='redaac' name='redaac' value='".$data['redaac']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='9'>Date DE Legalistation 7 Jours avant arrivee CO</label>
            <input type='text' class='form-control border-dark ' id='ddljaac' name='ddljaac' value='".$data['ddljaac']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='10'>Date De sortie CO Port Luanda 4 jours apres date arrivee</label>
            <input type='text' class='form-control border-dark ' id='ddscpl4jada' name='ddscpl4jada' value='".$data['ddscpl4jada']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='11'>Date DE Sortie Reelle</label>
            <input type='text' class='form-control border-dark ' id='ddsr' name='ddsr' value='".$data['ddsr']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='12'>Jours DE Penalites Date DE Sortie Reelle Moins Date DE sortie Normale</label>
            <input type='number' class='form-control border-dark ' id='jdpddsrmddsn' name='jdpddsrmddsn' value='".$data['jdpddsrmddsn']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='13'>Date DE Retour CO</label>
            <input type='text' class='form-control border-dark ' id='ddrc' name='ddrc' value='".$data['ddrc']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='14'>Date Reelle DE Retour CO</label>
            <input type='text' class='form-control border-dark ' id='drdrc' name='drdrc' value='".$data['drdrc']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='15'>Jours DE Penalites Date DE Retour CO Reelle Moins Date DE Retour Normale</label>
            <input type='number' class='form-control border-dark ' id='jdpddrcrmddrn' name='jdpddrcrmddrn' value='".$data['jdpddrcrmddrn']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='16'>Type DE</label>
            <input type='text' class='form-control border-dark ' id='tdc' name='tdc' value='".$data['tdc']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='17'>POIDS</label>
            <input type='number' class='form-control border-dark ' id='poids' name='poids' value='".$data['poids']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='18'>Nombre DE Colis</label>
            <input type='number' class='form-control border-dark ' id='nombredecolis' name='nombredecolis' value='".$data['nombredecolis']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='19'>Nature marchandise</label>
            <input type='text' class='form-control border-dark ' id='nam' name='nam' value='".$data['nam']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='20'>Camions DE Transport </label>
            <input type='number' class='form-control border-dark ' id='cdt' name='cdt' value='".$data['cdt']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='21'> NOM DU CHAUFFEUR</label>
            <input type='text' class='form-control border-dark ' id='ndc' name='ndc' value='".$data['ndc']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='22'>PLAQUE </label>
            <input type='text' class='form-control border-dark ' id='plaque' name='plaque' value='".$data['plaque']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='23'>TELEPHONE</label>
            <input type='number' class='form-control border-dark ' id='telephone' name='telephone' value='".$data['telephone']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='24'>JOUR OU IL QUITTE LUANDA </label>
            <input type='text' class='form-control border-dark ' id='joiql' name='joiql' value='".$data['joiql']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='25'>JOUR ARRIVEE A LUFU </label>
            <input type='text' class='form-control border-dark ' id='jaal' name='jaal' value='".$data['jaal']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='26'> JOUR DEPOTAGE</label>
            <input type='text' class='form-control border-dark ' id='jourdepotag' name='jourdepotag' value='".$data['jourdepotag']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='27'>ARTICLES RETIRES PAR OCC </label>
            <input type='text' class='form-control border-dark ' id='arpo' name='arpo' value='".$data['arpo']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='28'>ARTICLES RETIRES PAR VERIFICATION  </label>
            <input type='text' class='form-control border-dark ' id='arpv' name='arpv' value='".$data['arpv']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='29'> ARTICLES RETIRES PAR SANTE</label>
            <input type='text' class='form-control border-dark ' id='arps' name='arps' value='".$data['arps']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='30'>  ARTICLES RETIRES PAR AUTRE 31 SOLDE DU NOMBRE ARTICLES</label>
            <input type='text' class='form-control border-dark ' id='arpa1sdna' name='arpa1sdna' value='".$data['arpa1sdna']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='31'>SOLDE DU NOMBER ARTICLES </label>
            <input type='text' class='form-control border-dark ' id='sdna' name='sdna' value='".$data['sdna']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='32'>DATE ARRIVEE A KIN  </label>
            <input type='text' class='form-control border-dark ' id='aak' name='aak' value='".$data['aak']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='33'>DATE DEPART DE KIN </label>
            <input type='text' class='form-control border-dark ' id='ddk' name='ddk' value='".$data['ddk']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='34'>DATE ARRIVEE A LUANDA  </label>
            <input type='text' class='form-control border-dark ' id='aal' name='aal' value='".$data['aal']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='35'>RETOUR CO ET INTERCHANGE </label>
            <input type='text' class='form-control border-dark ' id='rcei' name='rcei' value='".$data['rcei']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='36'> COUT DE LEGALISATION ET NUMERO FACTURE </label>
            <input type='text' class='form-control border-dark ' id='cdlenf' name='cdlenf' value='".$data['cdlenf']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='37'>COUT DE DOUANE ANGOLA </label>
            <input type='number' class='form-control border-dark ' id='cdda' name='cdda' value='".$data['cdda']."' readonly>
          </div>

          <div class='form-group col'>
            <label for='38'>COUT DE PORT LUANDA </label>
            <input type='number' class='form-control border-dark ' id='cdpl' name='cdpl' value='".$data['cdpl']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='39'> COUT DE TERMINALE LUANDA </label>
            <input type='number' class='form-control border-dark ' id='cdtl' name='cdtl' value='".$data['cdtl']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='40'>AUTRES DEPENSES </label>
            <input type='text' class='form-control border-dark ' id='autresdepenses' name='autresdepenses' value='".$data['autresdepenses']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='41'> COUT DE TRANSPORT </label>
            <input type='number' class='form-control border-dark ' id='coutdetransport' name='coutdetransport' value='".$data['coutdetransport']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='42'> COUT DE PASSA DE TRAVERSIA</label>
            <input type='number' class='form-control border-dark ' id='cdpdt' name='cdpdt' value='".$data['cdpdt']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='43'>COUT DE FUMIGATION </label>
            <input type='number' class='form-control border-dark ' id='coutdefumigation' name='coutdefumigation' value='".$data['coutdefumigation']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='44'> COUT DE POLICE FRONTIERE  </label>
            <input type='number' class='form-control border-dark ' id='cdpf' name='cdpf' value='".$data['cdpf']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='45'> COUT DE SANTE FRONTIERE</label>
            <input type='number' class='form-control border-dark ' id='cdsf' name='cdsf' value='".$data['cdsf']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='46'> COUT DE FONER </label>
            <input type='text' class='form-control border-dark ' id='cdf' name='cdf' value='".$data['cdf']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='47'> IMMIGRATION DGM </label>
            <input type='text' class='form-control border-dark ' id='immigrationdgm' name='immigrationdgm' value='".$data['immigrationdgm']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='48'> FERI</label>
            <input type='text' class='form-control border-dark ' id='feri' name='feri' value='".$data['feri']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='49'> DOUANE </label>
            <input type='text' class='form-control border-dark ' id='douane' name='douane' value='".$data['douane']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='50'>NUMERO E DOUANE </label>
            <input type='text' class='form-control border-dark ' id='numeroedouane' name='numeroedouane' value='".$data['numeroedouane']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='51'> BULLETIN</label>
            <input type='text' class='form-control border-dark ' id='bulletin' name='bulletin' value='".$data['bulletin']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='52'>OCC LABO </label>
            <input type='text' class='form-control border-dark ' id='occlabo' name='occlabo' value='".$data['occlabo']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='53'> REDRESSEMENT OCC </label>
            <input type='text' class='form-control border-dark ' id='redressementocc' name='redressementocc' value='".$data['redressementocc']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='54'> CAUTION CO</label>
            <input type='text' class='form-control border-dark ' id='cautionco' name='cautionco' value='".$data['cautionco']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='55'>PEAGE LUFU </label>
            <input type='text' class='form-control border-dark ' id='peagelufu' name='peagelufu' value='".$data['peagelufu']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='56'>PEAGE NOKI</label>
            <input type='text' class='form-control border-dark ' id='peagenoki' name='peagenoki' value='".$data['peagenoki']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='57'> PEAGE KENGE </label>
            <input type='text' class='form-control border-dark ' id='peagekenge' name='peagekenge' value='".$data['peagekenge']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='58'>PEAGE KASANGULU </label>
            <input type='text' class='form-control border-dark ' id='peagekasangulu' name='peagekasangulu' value='".$data['peagekasangulu']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='59'> ASSURANCE</label>
            <input type='text' class='form-control border-dark ' id='assurance' name='assurance' value='".$data['assurance']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='60'> FEUILLE DE ROUTE </label>
            <input type='text' class='form-control border-dark ' id='feuillederoute' name='feuillederoute' value='".$data['feuillederoute']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='61'>MITENDI </label>
            <input type='text' class='form-control border-dark ' id='mitendi' name='mitendi' value='".$data['mitendi']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='62'> ANTI FRAUDE</label>
            <input type='text' class='form-control border-dark ' id='antifraude' name='antifraude' value='".$data['antifraude']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='63'> DOUANE VILLE </label>
            <input type='text' class='form-control border-dark ' id='douaneville' name='douaneville' value='".$data['douaneville']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='64'>BDLF </label>
            <input type='text' class='form-control border-dark ' id='bdlf' name='bdlf' value='".$data['bdlf']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='65'> PONT PESE </label>
            <input type='text' class='form-control border-dark ' id='pontpese' name='pontpese' value='".$data['pontpese']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='66'>CAUTION 1 </label>
            <input type='text' class='form-control border-dark ' id='caution1' name='caution1' value='".$data['caution1']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='67'> CAUTION 2 </label>
            <input type='text' class='form-control border-dark ' id='caution2' name='caution2' value='".$data['caution2']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='68'>FACTURE CLIENT </label>
            <input type='text' class='form-control border-dark ' id='factureclient' name='factureclient' value='".$data['factureclient']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='69'>REMBOURSEMENT CLIENT </label>
            <input type='text' class='form-control border-dark ' id='remboursementlient' name='remboursementlient' value='".$data['remboursementlient']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='70'>AVANCE SUR FACTURE </label>
            <input type='number' class='form-control border-dark ' id='avancesurfacture' name='avancesurfacture' value='".$data['avancesurfacture']."' readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col'>
            <label for='71'>SOLDE SUR FACTURE </label>
            <input type='number' class='form-control border-dark ' id='soldesurfacture' name='soldesurfacture' value='".$data['soldesurfacture']."' readonly>
          </div>
          <div class='form-group col'>
            <label for='72'> MARGE SOCIETE </label>
            <input type='number' class='form-control border-dark ' id='margesociete' name='margesociete' value='".$data['margesociete']."' readonly readonly>
          </div>
        </div>
        <div class='row'>
          <div class='form-group col-md-12'>
            <input type='submit' value='exportoexel' name='action' class='btn btn-outline-info'>
          </div>
        </div>
      </form>
";
	echo ($output);
 ?>

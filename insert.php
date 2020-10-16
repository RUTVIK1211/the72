 <?php

 require 'import/header.php';

?>
	
	<div class="content-wrapper" style="background-color: #FFDEE9;
background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 50%, #ffffff 100%);" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insert</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Insert</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	
   <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">

              <div class="card-header  bg-teal">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <div class="container">
			<form action="insq.php" method="post" class="p-3">
				<div class="row">
					<div class="form-group col">
						<label for="1">Date Actuelle</label>
						<input type="date" class="form-control border-dark  "  id="input" name="D1" value="">
					</div>
					<div class="form-group col">
						<label for="2">societe</label>
						<input type="text" class="form-control border-dark " id="input" name="D2" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="3">Agence maritime</label>
						<input type="time" class="form-control border-dark  " id="input" name="D3" value="">
					</div>
					<div class="form-group col">
						<label for="4">Numbero BL</label>
						<input type="number" class="form-control border-dark  " id="input" name="D4" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="5">Numbero CO</label>
						<input type="number" class="form-control border-dark  " id="input" name="D5" value="">
					</div>
					<div class="form-group col">
						<label for="6">Date Reception BL</label>
						<input type="date" class="form-control border-dark " id="input" name="D6" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="7">Date Arrivee Co</label>
						<input type="date" class="form-control border-dark  " id="input" name="D7" value="">
					</div>
					<div class="form-group col">
						<label for="8">Remaining Day Avant Arrivee CO</label>
						<input type="text" class="form-control border-dark " id="input" name="D8" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="9">Date DE Legalistation 7 Jours avant arrivee CO</label>
						<input type="date" class="form-control border-dark " id="input" name="D9" value="">
					</div>
					<div class="form-group col">
						<label for="10">Date De sortie CO Port Luanda 4 jours apres date arrivee</label>
						<input type="date" class="form-control border-dark " id="input" name="D10" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="11">Date DE Sortie Reelle</label>
						<input type="date" class="form-control border-dark " id="input" name="D11" value="">
					</div>
					<div class="form-group col">
						<label for="12">Jours DE Penalites Date DE Sortie Reelle Moins Date DE sortie Normale</label>
						<input type="date" class="form-control border-dark " id="input" name="D12" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="13">Date DE Retour CO</label>
						<input type="date" class="form-control border-dark " id="input" name="D13" value="">
					</div>
					<div class="form-group col">
						<label for="14">Date Reelle DE Retour CO</label>
						<input type="date" class="form-control border-dark " id="input" name="D14" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="15">Jours DE Penalites Date DE Retour CO Reelle Moins Date DE Retour Normale</label>
						<input type="date" class="form-control border-dark " id="input" name="D15" value="">
					</div>
					<div class="form-group col">
						<label for="16">Type DE</label>
						<input type="text" class="form-control border-dark " id="input" name="D16" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="17">POIDS</label>
						<input type="text" class="form-control border-dark " id="input" name="D17" value="">
					</div>
					<div class="form-group col">
						<label for="18">Nombre DE Colis</label>
						<input type="text" class="form-control border-dark " id="input" name="D18" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="19">Nature marchandise</label>
						<input type="text" class="form-control border-dark " id="input" name="D19" value="">
					</div>
					<div class="form-group col">
						<label for="20">Camions DE Transport </label>
						<input type="text" class="form-control border-dark " id="input" name="D20" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="21"> NOM DU CHAUFFEUR</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="22">PLAQUE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="23">TELEPHONE</label>
						<input type="number" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="24">JOUR OU IL QUITTE LUANDA </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="25">JOUR ARRIVEE A LUFU </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="26"> JOUR DEPOTAGE</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="27">ARTICLES RETIRES PAR OCC </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="28">ARTICLES RETIRES PAR VERIFICATION  </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="29"> ARTICLES RETIRES PAR SANTE</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="30">  ARTICLES RETIRES PAR AUTRE 31 SOLDE DU NOMBRE ARTICLES</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="31">SOLDE DU NOMBER ARTICLES </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="32">DATE ARRIVEE A KIN  </label>
						<input type="date" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="33">DATE DEPART DE KIN </label>
						<input type="date" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="34">DATE ARRIVEE A LUANDA  </label>
						<input type="date" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="35">RETOUR CO ET INTERCHANGE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="36"> COUT DE LEGALISATION ET NUMERO FACTURE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="37">COUT DE DOUANE ANGOLA </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="38">COUT DE PORT LUANDA </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="39"> COUT DE TERMINALE LUANDA </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="40">AUTRES DEPENSES </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="41"> COUT DE TRANSPORT </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="42"> COUT DE PASSA DE TRAVERSIA</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="43">COUT DE FUMIGATION </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="44"> COUT DE POLICE FRONTIERE  </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="45"> COUT DE SANTE FRONTIERE</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="46"> COUT DE FONER </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="47"> IMMIGRATION DGM </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="48"> FERI</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="49"> DOUANE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="50">NUMERO E DOUANE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="51"> BULLETIN</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="52">OCC LABO </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="53"> REDRESSEMENT OCC </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="54"> CAUTION CO</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="55">PEAGE LUFU </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="56">  PEAGE NOKI</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="57"> PEAGE KENGE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="58">  PEAGE KASANGULU </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="59"> ASSURANCE</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="60"> FEUILLE DE ROUTE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="61">MITENDI </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="62"> ANTI FRAUDE</label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="63"> DOUANE VILLE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="64">BDLF </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="65"> PONT PESE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="66">CAUTION 1 </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="67"> CAUTION 2 </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="68">FACTURE CLIENT </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="69">REMBOURSEMENT CLIENT </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="70">AVANCE SUR FACTURE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col">
						<label for="71">SOLDE SUR FACTURE </label>
						<input type="file" class="form-control border-dark " id="input" name="" value="">
					</div>
					<div class="form-group col">
						<label for="72"> MARGE SOCIETE </label>
						<input type="text" class="form-control border-dark " id="input" name="" value="">
					</div>
				</div>
				<div class="form-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">e</label>
                    </div>
                  </div>
				
				
				<div class="row">
					<div class="form-group col-md-12">
						<input type="submit" value="submit" name="submit" class="btn btn-outline-info">
						<input type="reset" value="reset" class="btn btn-outline-danger">
					</div>
				</div>
			</form>
		</div>
            </div>
            <!-- /.card -->

           

          </div>
     
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->



 <?php

 require 'import/footer.php';

?>
<?php
require 'import/header.php';
require_once 'dbconnection.php';
// session_start();
if(empty($_SESSION['email']))
{
   header("Location: login");
}

?>

 <div class="content-wrapper"  style="background-color: #edfffc;
background-image: linear-gradient(180deg, #edfffc 0%, #39cc8c 100%);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content"	>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card ">
              <div class="card-header bg-teal">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped rounded border-info">
                  <thead>
                  <tr>
                    <th>Form id</th>
                    <th>Agence maritime</th>
                    <th>Numbero BL</th>
                    <th>Date Arrivee Co</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php  $sql = "SELECT * FROM user_testing";
                      $result = mysqli_query($conn,$sql);
                     ?>
                    <?php while($data = mysqli_fetch_assoc($result)): ?>
                  <tr>
                    <td><?=$data['userid']; ?></td>
                    <td><?=$data['societe']; ?></td>
                    <td><?=$data['numberbobl'];?></td>
                    <td><button type="button" class="btn btn-block btn-outline-secondary btn-xs border-0"  data-toggle="modal" data-target="#modal-x2">
                      View more
                </button></td>
                    <td>
                    <button type="button" class="btn btn-block btn-outline-secondary btn-xs border-0" data-toggle="modal"  data-target="#modal-xl" data-id="<?=$data['userno'];?>" onclick="getbtn(this)">
                  		Edit
                </button></td>
                  </tr>
                  <?php endwhile; ?>
                  </tbody>
                 <tfoot>

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
<!-- /.modal disabled  --> <div class="modal fade" id="modal-x2">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Extra Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="controller" id="insertform" method="post" enctype="multipart/form-data" class="p-3">
        <div class="row">
          <div class="form-group col">
            <label for="1">Date Actuelle</label>
            <input type="date" class="form-control border-dark  "  id="dateactuelle" name="dateactuelle" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="2">societe</label>
            <input type="text" class="form-control border-dark " id="societe" name="societe" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="3">Agence maritime</label>
            <input type="text" class="form-control border-dark  " id="agencemaritime" name="agencemaritime" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="4">Numbero BL</label>
            <input type="number" class="form-control border-dark  " id="numberbl" name="numberbl" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="5">Numbero CO</label>
            <input type="number" class="form-control border-dark  " id="numberco" name="numberco" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="6">Date Reception BL</label>
            <input type="date" class="form-control border-dark " id="datereceptionbl" name="datereceptionbl" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="7">Date Arrivee Co</label>
            <input type="date" class="form-control border-dark  " id="datearriveeco" name="datearriveeco" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="8">Remaining Day Avant Arrivee CO</label>
            <input type="number" class="form-control border-dark " id="redaac" name="redaac" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="9">Date DE Legalistation 7 Jours avant arrivee CO</label>
            <input type="date" class="form-control border-dark " id="ddljaac" name="ddljaac" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="10">Date De sortie CO Port Luanda 4 jours apres date arrivee</label>
            <input type="date" class="form-control border-dark " id="ddscpl4jada" name="ddscpl4jada" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="11">Date DE Sortie Reelle</label>
            <input type="date" class="form-control border-dark " id="ddsr" name="ddsr" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="12">Jours DE Penalites Date DE Sortie Reelle Moins Date DE sortie Normale</label>
            <input type="number" class="form-control border-dark " id="jdpddsrmddsn" name="jdpddsrmddsn" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="13">Date DE Retour CO</label>
            <input type="date" class="form-control border-dark " id="ddrc" name="ddrc" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="14">Date Reelle DE Retour CO</label>
            <input type="date" class="form-control border-dark " id="drdrc" name="drdrc" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="15">Jours DE Penalites Date DE Retour CO Reelle Moins Date DE Retour Normale</label>
            <input type="number" class="form-control border-dark " id="jdpddrcrmddrn" name="jdpddrcrmddrn" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="16">Type DE</label>
            <input type="text" class="form-control border-dark " id="tdc" name="tdc" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="17">POIDS</label>
            <input type="number" class="form-control border-dark " id="poids" name="poids" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="18">Nombre DE Colis</label>
            <input type="number" class="form-control border-dark " id="nombredecolis" name="nombredecolis" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="19">Nature marchandise</label>
            <input type="text" class="form-control border-dark " id="nam" name="nam" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="20">Camions DE Transport </label>
            <input type="number" class="form-control border-dark " id="cdt" name="cdt" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="21"> NOM DU CHAUFFEUR</label>
            <input type="text" class="form-control border-dark " id="ndc" name="ndc" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="22">PLAQUE </label>
            <input type="text" class="form-control border-dark " id="plaque" name="plaque" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="23">TELEPHONE</label>
            <input type="number" class="form-control border-dark " id="telephone" name="telephone" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="24">JOUR OU IL QUITTE LUANDA </label>
            <input type="text" class="form-control border-dark " id="joiql" name="joiql" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="25">JOUR ARRIVEE A LUFU </label>
            <input type="text" class="form-control border-dark " id="jaal" name="jaal" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="26"> JOUR DEPOTAGE</label>
            <input type="text" class="form-control border-dark " id="jourdepotag" name="jourdepotag" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="27">ARTICLES RETIRES PAR OCC </label>
            <input type="text" class="form-control border-dark " id="arpo" name="arpo" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="28">ARTICLES RETIRES PAR VERIFICATION  </label>
            <input type="text" class="form-control border-dark " id="arpv" name="arpv" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="29"> ARTICLES RETIRES PAR SANTE</label>
            <input type="text" class="form-control border-dark " id="arps" name="arps" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="30">  ARTICLES RETIRES PAR AUTRE 31 SOLDE DU NOMBRE ARTICLES</label>
            <input type="text" class="form-control border-dark " id="arpa1sdna" name="arpa1sdna" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="31">SOLDE DU NOMBER ARTICLES </label>
            <input type="text" class="form-control border-dark " id="sdna" name="sdna" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="32">DATE ARRIVEE A KIN  </label>
            <input type="date" class="form-control border-dark " id="aak" name="aak" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="33">DATE DEPART DE KIN </label>
            <input type="date" class="form-control border-dark " id="ddk" name="ddk" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="34">DATE ARRIVEE A LUANDA  </label>
            <input type="date" class="form-control border-dark " id="aal" name="aal" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="35">RETOUR CO ET INTERCHANGE </label>
            <input type="text" class="form-control border-dark " id="rcei" name="rcei" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="36"> COUT DE LEGALISATION ET NUMERO FACTURE </label>
            <input type="text" class="form-control border-dark " id="cdlenf" name="cdlenf" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="37">COUT DE DOUANE ANGOLA </label>
            <input type="number" class="form-control border-dark " id="cdda" name="cdda" value="" disabled>
          </div>

          <div class="form-group col">
            <label for="38">COUT DE PORT LUANDA </label>
            <input type="number" class="form-control border-dark " id="cdpl" name="cdpl" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="39"> COUT DE TERMINALE LUANDA </label>
            <input type="number" class="form-control border-dark " id="cdtl" name="cdtl" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="40">AUTRES DEPENSES </label>
            <input type="text" class="form-control border-dark " id="autresdepenses" name="autresdepenses" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="41"> COUT DE TRANSPORT </label>
            <input type="number" class="form-control border-dark " id="coutdetransport" name="coutdetransport" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="42"> COUT DE PASSA DE TRAVERSIA</label>
            <input type="number" class="form-control border-dark " id="cdpdt" name="cdpdt" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="43">COUT DE FUMIGATION </label>
            <input type="number" class="form-control border-dark " id="coutdefumigation" name="coutdefumigation" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="44"> COUT DE POLICE FRONTIERE  </label>
            <input type="number" class="form-control border-dark " id="cdpf" name="cdpf" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="45"> COUT DE SANTE FRONTIERE</label>
            <input type="number" class="form-control border-dark " id="cdsf" name="cdsf" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="46"> COUT DE FONER </label>
            <input type="text" class="form-control border-dark " id="cdf" name="cdf" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="47"> IMMIGRATION DGM </label>
            <input type="text" class="form-control border-dark " id="immigrationdgm" name="immigrationdgm" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="48"> FERI</label>
            <input type="text" class="form-control border-dark " id="feri" name="feri" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="49"> DOUANE </label>
            <input type="text" class="form-control border-dark " id="douane" name="douane" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="50">NUMERO E DOUANE </label>
            <input type="text" class="form-control border-dark " id="numeroedouane" name="numeroedouane" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="51"> BULLETIN</label>
            <input type="text" class="form-control border-dark " id="bulletin" name="bulletin" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="52">OCC LABO </label>
            <input type="text" class="form-control border-dark " id="occlabo" name="occlabo" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="53"> REDRESSEMENT OCC </label>
            <input type="text" class="form-control border-dark " id="redressementocc" name="redressementocc" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="54"> CAUTION CO</label>
            <input type="text" class="form-control border-dark " id="cautionco" name="cautionco" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="55">PEAGE LUFU </label>
            <input type="text" class="form-control border-dark " id="peagelufu" name="peagelufu" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="56">PEAGE NOKI</label>
            <input type="text" class="form-control border-dark " id="peagenoki" name="peagenoki" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="57"> PEAGE KENGE </label>
            <input type="text" class="form-control border-dark " id="peagekenge" name="peagekenge" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="58">PEAGE KASANGULU </label>
            <input type="text" class="form-control border-dark " id="peagekasangulu" name="peagekasangulu" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="59"> ASSURANCE</label>
            <input type="text" class="form-control border-dark " id="assurance" name="assurance" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="60"> FEUILLE DE ROUTE </label>
            <input type="text" class="form-control border-dark " id="feuillederoute" name="feuillederoute" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="61">MITENDI </label>
            <input type="text" class="form-control border-dark " id="mitendi" name="mitendi" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="62"> ANTI FRAUDE</label>
            <input type="text" class="form-control border-dark " id="antifraude" name="antifraude" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="63"> DOUANE VILLE </label>
            <input type="text" class="form-control border-dark " id="douaneville" name="douaneville" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="64">BDLF </label>
            <input type="text" class="form-control border-dark " id="bdlf" name="bdlf" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="65"> PONT PESE </label>
            <input type="text" class="form-control border-dark " id="pontpese" name="pontpese" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="66">CAUTION 1 </label>
            <input type="text" class="form-control border-dark " id="caution1" name="caution1" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="67"> CAUTION 2 </label>
            <input type="text" class="form-control border-dark " id="caution2" name="caution2" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="68">FACTURE CLIENT </label>
            <input type="file" class="form-control border-dark " id="factureclient" name="factureclient" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="69">REMBOURSEMENT CLIENT </label>
            <input type="text" class="form-control border-dark " id="remboursementlient" name="remboursementlient" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="70">AVANCE SUR FACTURE </label>
            <input type="number" class="form-control border-dark " id="avancesurfacture" name="avancesurfacture" value="" disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="71">SOLDE SUR FACTURE </label>
            <input type="number" class="form-control border-dark " id="soldesurfacture" name="soldesurfacture" value="" disabled>
          </div>
          <div class="form-group col">
            <label for="72"> MARGE SOCIETE </label>
            <input type="number" class="form-control border-dark " id="margesociete" name="margesociete" value="" disabled disabled>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <input type="submit" value="adddata" name="action" class="btn btn-outline-info">
            <input type="reset" value="reset" class="btn btn-outline-danger">
          </div>
        </div>
      </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!-- model upadate   -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Extra Large Modal</h4>
              <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="editform">
        <!-- <form action="controller" method="post">
          <div class="row">
          <div class="form-group col">
            <label for="1">User ID</label>
            <input type="text" class="form-control border-dark  "  id="dateactuelle" name="dateactuelle" value="">
          </div>

        </div>
        <div class="row">
          <div class="form-group col">
            <label for="1">Date Actuelle</label>
            <input type="date" class="form-control border-dark  "  id="dateactuelle" name="dateactuelle" value="">
          </div>
          <div class="form-group col">
            <label for="2">societe</label>
            <input type="text" class="form-control border-dark " id="societe" name="societe" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="3">Agence maritime</label>
            <input type="text" class="form-control border-dark  " id="agencemaritime" name="agencemaritime" value="">
          </div>
          <div class="form-group col">
            <label for="4">Numbero BL</label>
            <input type="number" class="form-control border-dark  " id="numberbl" name="numberbl" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="5">Numbero CO</label>
            <input type="number" class="form-control border-dark  " id="numberco" name="numberco" value="">
          </div>
          <div class="form-group col">
            <label for="6">Date Reception BL</label>
            <input type="date" class="form-control border-dark " id="datereceptionbl" name="datereceptionbl" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="7">Date Arrivee Co</label>
            <input type="date" class="form-control border-dark  " id="datearriveeco" name="datearriveeco" value="">
          </div>
          <div class="form-group col">
            <label for="8">Remaining Day Avant Arrivee CO</label>
            <input type="number" class="form-control border-dark " id="redaac" name="redaac" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="9">Date DE Legalistation 7 Jours avant arrivee CO</label>
            <input type="date" class="form-control border-dark " id="ddljaac" name="ddljaac" value="">
          </div>
          <div class="form-group col">
            <label for="10">Date De sortie CO Port Luanda 4 jours apres date arrivee</label>
            <input type="date" class="form-control border-dark " id="ddscpl4jada" name="ddscpl4jada" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="11">Date DE Sortie Reelle</label>
            <input type="date" class="form-control border-dark " id="ddsr" name="ddsr" value="">
          </div>
          <div class="form-group col">
            <label for="12">Jours DE Penalites Date DE Sortie Reelle Moins Date DE sortie Normale</label>
            <input type="number" class="form-control border-dark " id="jdpddsrmddsn" name="jdpddsrmddsn" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="13">Date DE Retour CO</label>
            <input type="date" class="form-control border-dark " id="ddrc" name="ddrc" value="">
          </div>
          <div class="form-group col">
            <label for="14">Date Reelle DE Retour CO</label>
            <input type="date" class="form-control border-dark " id="drdrc" name="drdrc" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="15">Jours DE Penalites Date DE Retour CO Reelle Moins Date DE Retour Normale</label>
            <input type="number" class="form-control border-dark " id="jdpddrcrmddrn" name="jdpddrcrmddrn" value="">
          </div>
          <div class="form-group col">
            <label for="16">Type DE</label>
            <input type="text" class="form-control border-dark " id="tdc" name="tdc" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="17">POIDS</label>
            <input type="number" class="form-control border-dark " id="poids" name="poids" value="">
          </div>
          <div class="form-group col">
            <label for="18">Nombre DE Colis</label>
            <input type="number" class="form-control border-dark " id="nombredecolis" name="nombredecolis" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="19">Nature marchandise</label>
            <input type="text" class="form-control border-dark " id="nam" name="nam" value="">
          </div>
          <div class="form-group col">
            <label for="20">Camions DE Transport </label>
            <input type="number" class="form-control border-dark " id="cdt" name="cdt" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="21"> NOM DU CHAUFFEUR</label>
            <input type="text" class="form-control border-dark " id="ndc" name="ndc" value="">
          </div>
          <div class="form-group col">
            <label for="22">PLAQUE </label>
            <input type="text" class="form-control border-dark " id="plaque" name="plaque" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="23">TELEPHONE</label>
            <input type="number" class="form-control border-dark " id="telephone" name="telephone" value="">
          </div>
          <div class="form-group col">
            <label for="24">JOUR OU IL QUITTE LUANDA </label>
            <input type="text" class="form-control border-dark " id="joiql" name="joiql" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="25">JOUR ARRIVEE A LUFU </label>
            <input type="text" class="form-control border-dark " id="jaal" name="jaal" value="">
          </div>
          <div class="form-group col">
            <label for="26"> JOUR DEPOTAGE</label>
            <input type="text" class="form-control border-dark " id="jourdepotag" name="jourdepotag" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="27">ARTICLES RETIRES PAR OCC </label>
            <input type="text" class="form-control border-dark " id="arpo" name="arpo" value="">
          </div>
          <div class="form-group col">
            <label for="28">ARTICLES RETIRES PAR VERIFICATION  </label>
            <input type="text" class="form-control border-dark " id="arpv" name="arpv" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="29"> ARTICLES RETIRES PAR SANTE</label>
            <input type="text" class="form-control border-dark " id="arps" name="arps" value="">
          </div>
          <div class="form-group col">
            <label for="30">  ARTICLES RETIRES PAR AUTRE 31 SOLDE DU NOMBRE ARTICLES</label>
            <input type="text" class="form-control border-dark " id="arpa1sdna" name="arpa1sdna" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="31">SOLDE DU NOMBER ARTICLES </label>
            <input type="text" class="form-control border-dark " id="sdna" name="sdna" value="">
          </div>
          <div class="form-group col">
            <label for="32">DATE ARRIVEE A KIN  </label>
            <input type="date" class="form-control border-dark " id="aak" name="aak" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="33">DATE DEPART DE KIN </label>
            <input type="date" class="form-control border-dark " id="ddk" name="ddk" value="">
          </div>
          <div class="form-group col">
            <label for="34">DATE ARRIVEE A LUANDA  </label>
            <input type="date" class="form-control border-dark " id="aal" name="aal" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="35">RETOUR CO ET INTERCHANGE </label>
            <input type="text" class="form-control border-dark " id="rcei" name="rcei" value="">
          </div>
          <div class="form-group col">
            <label for="36"> COUT DE LEGALISATION ET NUMERO FACTURE </label>
            <input type="text" class="form-control border-dark " id="cdlenf" name="cdlenf" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="37">COUT DE DOUANE ANGOLA </label>
            <input type="number" class="form-control border-dark " id="cdda" name="cdda" value="">
          </div>

          <div class="form-group col">
            <label for="38">COUT DE PORT LUANDA </label>
            <input type="number" class="form-control border-dark " id="cdpl" name="cdpl" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="39"> COUT DE TERMINALE LUANDA </label>
            <input type="number" class="form-control border-dark " id="cdtl" name="cdtl" value="">
          </div>
          <div class="form-group col">
            <label for="40">AUTRES DEPENSES </label>
            <input type="text" class="form-control border-dark " id="autresdepenses" name="autresdepenses" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="41"> COUT DE TRANSPORT </label>
            <input type="number" class="form-control border-dark " id="coutdetransport" name="coutdetransport" value="">
          </div>
          <div class="form-group col">
            <label for="42"> COUT DE PASSA DE TRAVERSIA</label>
            <input type="number" class="form-control border-dark " id="cdpdt" name="cdpdt" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="43">COUT DE FUMIGATION </label>
            <input type="number" class="form-control border-dark " id="coutdefumigation" name="coutdefumigation" value="">
          </div>
          <div class="form-group col">
            <label for="44"> COUT DE POLICE FRONTIERE  </label>
            <input type="number" class="form-control border-dark " id="cdpf" name="cdpf" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="45"> COUT DE SANTE FRONTIERE</label>
            <input type="number" class="form-control border-dark " id="cdsf" name="cdsf" value="">
          </div>
          <div class="form-group col">
            <label for="46"> COUT DE FONER </label>
            <input type="text" class="form-control border-dark " id="cdf" name="cdf" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="47"> IMMIGRATION DGM </label>
            <input type="text" class="form-control border-dark " id="immigrationdgm" name="immigrationdgm" value="">
          </div>
          <div class="form-group col">
            <label for="48"> FERI</label>
            <input type="text" class="form-control border-dark " id="feri" name="feri" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="49"> DOUANE </label>
            <input type="text" class="form-control border-dark " id="douane" name="douane" value="">
          </div>
          <div class="form-group col">
            <label for="50">NUMERO E DOUANE </label>
            <input type="text" class="form-control border-dark " id="numeroedouane" name="numeroedouane" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="51"> BULLETIN</label>
            <input type="text" class="form-control border-dark " id="bulletin" name="bulletin" value="">
          </div>
          <div class="form-group col">
            <label for="52">OCC LABO </label>
            <input type="text" class="form-control border-dark " id="occlabo" name="occlabo" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="53"> REDRESSEMENT OCC </label>
            <input type="text" class="form-control border-dark " id="redressementocc" name="redressementocc" value="">
          </div>
          <div class="form-group col">
            <label for="54"> CAUTION CO</label>
            <input type="text" class="form-control border-dark " id="cautionco" name="cautionco" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="55">PEAGE LUFU </label>
            <input type="text" class="form-control border-dark " id="peagelufu" name="peagelufu" value="">
          </div>
          <div class="form-group col">
            <label for="56">PEAGE NOKI</label>
            <input type="text" class="form-control border-dark " id="peagenoki" name="peagenoki" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="57"> PEAGE KENGE </label>
            <input type="text" class="form-control border-dark " id="peagekenge" name="peagekenge" value="">
          </div>
          <div class="form-group col">
            <label for="58">PEAGE KASANGULU </label>
            <input type="text" class="form-control border-dark " id="peagekasangulu" name="peagekasangulu" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="59"> ASSURANCE</label>
            <input type="text" class="form-control border-dark " id="assurance" name="assurance" value="">
          </div>
          <div class="form-group col">
            <label for="60"> FEUILLE DE ROUTE </label>
            <input type="text" class="form-control border-dark " id="feuillederoute" name="feuillederoute" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="61">MITENDI </label>
            <input type="text" class="form-control border-dark " id="mitendi" name="mitendi" value="">
          </div>
          <div class="form-group col">
            <label for="62"> ANTI FRAUDE</label>
            <input type="text" class="form-control border-dark " id="antifraude" name="antifraude" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="63"> DOUANE VILLE </label>
            <input type="text" class="form-control border-dark " id="douaneville" name="douaneville" value="">
          </div>
          <div class="form-group col">
            <label for="64">BDLF </label>
            <input type="text" class="form-control border-dark " id="bdlf" name="bdlf" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="65"> PONT PESE </label>
            <input type="text" class="form-control border-dark " id="pontpese" name="pontpese" value="">
          </div>
          <div class="form-group col">
            <label for="66">CAUTION 1 </label>
            <input type="text" class="form-control border-dark " id="caution1" name="caution1" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="67"> CAUTION 2 </label>
            <input type="text" class="form-control border-dark " id="caution2" name="caution2" value="">
          </div>
          <div class="form-group col">
            <label for="68">FACTURE CLIENT </label>
            <input type="file" class="form-control border-dark " id="factureclient" name="factureclient" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="69">REMBOURSEMENT CLIENT </label>
            <input type="text" class="form-control border-dark " id="remboursementlient" name="remboursementlient" value="">
          </div>
          <div class="form-group col">
            <label for="70">AVANCE SUR FACTURE </label>
            <input type="number" class="form-control border-dark " id="avancesurfacture" name="avancesurfacture" value="">
          </div>
        </div>
        <div class="row">
          <div class="form-group col">
            <label for="71">SOLDE SUR FACTURE </label>
            <input type="number" class="form-control border-dark " id="soldesurfacture" name="soldesurfacture" value="">
          </div>
          <div class="form-group col">
            <label for="72"> MARGE SOCIETE </label>
            <input type="number" class="form-control border-dark " id="margesociete" name="margesociete" value="">
          </div>
        </div>

      </form> -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




  <?php
   require 'import/footer.php';
  ?>
<script type="text/javascript">
// $(document).ready(function() {
    function getbtn(e){
        var id = $(e).data('id');
     $.ajax({
      url: 'fetch.php',
      type: 'POST',
      data: {
        'id': id
      },
      success: function(response){
        $('#editform').append(response);
      }
    });
      }
</script>

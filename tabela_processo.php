

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/dataTable.bootstrap4.min.css" rel="stylesheet">

<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">SSUS</h5>
      <span class="text-muted">Conta</span>
    </div>
  </div>
  <nav class="navbar navbar-pink bg-pink">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Local</th>
                <th>Exame</th>
                <th>Situação</th>
                <th>Profissional</th>
                <th>Data</th>
                <th>Mais</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Unidade de Saúde Castro Alves</td>
                <td>Tomografia</td>
                <td>Aguardando Vaga</td>
                <td>Aguardando</td>
                <td>Aguardando</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Unidade de Saúde Ivo Ferronato</td>
                <td>Eletrocardiograma</td>
                <td>Marcado</td>
                <td>Pedro</td>
                <td>23/08/2021</td>
                <td>...</td>
            </tr>
            <tr>
                <td>Unidade de Saúde Popular</td>
                <td>Raio X</td>
                <td>Marcado</td>
                <td>Marcela</td>
                <td>28/09/2021</td>
                <td>...</td>
            </tr>
        </tbody>
        
    </table>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>



    <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
    </script>
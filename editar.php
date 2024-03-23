<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset="utf_8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Clientes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <style> 
        body {
            background-color: #FFE4C4;
        }
        </style>
    <head>   
    <body>
        <center><h1>CADASTRO DE CLIENTES</h1></center>]
        <hr/>
        <br/>
        <br/>
        <br/>
        <br/>
        <main> 
            <div class="container">
                <div class="row row-cols-2 row row-md-4 text-center">
                    <div class="col-md-12">
                        <div class="card mb-4 rounded-3 shadow-sw">
                            <div class="card-heard py-3">
                                <h4 class="y-0 fw-normal"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
  <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
</svg>&nbsp;&nbsp;EDIÇÃO DE CLIENTES</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                    include 'conecta.php';
                                    $id = $_GET['id'];
                                    $slq = "SELECT * FROM pessoa WHERE id=$id";
                                    $query = $conn->query($slq);
                                    while ($dados = $query->fetch_assoc()) {
                                        $nome = $dados ['nome'];
                                        $celular = $dados ['celular'];
                                        $email = $dados ['email'];
                                    }
                                ?>
        <form action="editarcli.php?id=<?php echo $id; ?>" method="post">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" value = "<?php echo $nome; ?>"required/>
            <br/>
            <label>Celular</label>
            <input type="text" class="form-control" name="celular" <?php echo $celular; ?>required/>    
            <br/>
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" <?php echo $email; ?> required/>
            <br/>
            <button type="submit" class="btn btn-outline-success">Atualizar</button>
        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="cadcli.php" method="post">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" required/>
            <br/>
            <label>Celular</label>
            <input type="text" class="form-control" name="celular" required/>
            <br/>
            <label>E-mail</label>
            <input type="email" class="form-control" name="email" required/>
            <br/>
            <button type="submit" class="btn btn-outline-success">CADASTRAR</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div> 
        <main>
    <body> 
</html>

<?php include __DIR__ . "/../header-html.php"; ?>
    <form action="/salvar-curso" method="POST">
       <div class="form-group">
         <label for="descricao">Descrição</label>
         <input type="text" class="form-control" id="descricao" name="descricao">
       </div>
       <button class="btn btn-primary">Salvar</button>
    </form>
<?php include __DIR__ . "/../footer-html.php"; ?>

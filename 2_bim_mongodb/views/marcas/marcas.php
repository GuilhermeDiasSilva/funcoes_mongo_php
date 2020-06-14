<div class="container">
    <table class="table">
        <thead>

            <tr>
            <th scope="col">Marcas</th>
            <th scope="col">Descrição</th>
            <th scope="col"></th>
            
            
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d->marca) { ?>
            <tr>
                <td><?php echo $d->marca?></td>
                <td><?php echo $d->descricao?></td>
                <td><a href="marcas_edit?id=<?php echo $d->_id ?>" class="bnt"><img src="assets/svg/editar.svg" alt="width:1em;height:auto""></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="float-right"><a href="marcas_add"><img src="assets/svg/editar.svg" style="width:4em;height:auto"></a></div>
</div>
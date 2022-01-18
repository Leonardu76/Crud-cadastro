<?php
include_once ("Templates/header.php");
include_once ("process.php");
?>

<body>
    <div class="container">

        <h1 class="title">Minha agenda</h1>
        <?php if(count($contacts) > 0): ?>

        <table class="table" id="contacts-table">

            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th colspan="2">Data de nascimento</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                <tr>
                    <td scope="row">
                        <?=$contact['id'] ?>
                    </td>
                    <td scope="row">
                        <?=$contact['nome_cliente'] ?>
                    </td>
                    <td scope="row">
                        <?=$contact['email_cliente'] ?>
                    </td>
                    <td scope="row">
                        <?=$contact['telefone_cliente'] ?>
                    </td>
                    <td scope="row">
                        <?=$contact['data_nasc_cliente'] ?>
                    </td>

                    <td class="actions">
                        <a href="process/edit.php?id=<?=$contact['id'] ?>"> <i class="far fa-edit edit-icon"></i></a>
                        <a href="process/delete.php?id=<?=$contact['id'] ?>"> <i
                                class="fas fa-times delete-icon"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>

        </table>
        <?php else: ?>
        <p id="empty-list-text"> Ainda não há contatos, <a href="create.php">Clique aqui para adicionar</a></p>
        <?php endif ?>

    </div>



    <?php
include_once ("Templates/footer.php");
?>
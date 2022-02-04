<?php
$pageTitle = 'Members';
require_once '../app/view/includes/header.php';
require_once '../app/view/includes/nav.php';

?>
<h1 class="text-center"><?= lang('MANAGE MEMBERS') ?></h1>

<div class ="container">
    <?php
    require_once '../app/lib/functions.php';
    
    ?>
    <div class='table-responsive'>
        <table class='main-table text-center table table-bordered'>
            <thead>
                <tr>
                    <th><?= lang('ID') ?></th>
                    <th><?= lang('USERNAME') ?></th>
                    <th><?= lang('E-MAIL') ?></th>
                    <th><?= lang('FULLNAME') ?></th>
                    <th><?= lang('REGISTERED DATE') ?></th>
                    <th><?= lang('CONTROL') ?></th>
                    <th><?= lang('CONFORM') ?> </th>
                </tr>
            </thead>
            <?php
            foreach($data as $object){ ?>
                <tr>
                    <td><?= $object->user_id ?></td>
                    <td><?= $object->user_name ?></td>
                    <td><?= $object->user_email ?></td>
                    <td><?= $object->user_fullName ?></td>
                    <td><?= $object->user_date ?></td>
                    <td>
                        <a href="<?= URLROOT ?>UserController/edit/<?= $object->user_id ?>"class='btn btn-success'><i class='fa fa-edit'></i></a>
                        <a href="<?= URLROOT ?>UserController/delete/<?= $object->user_id ?>"class='btn btn-danger'><i class='fa fa-close'></i></a>
                    </td>
                    <td><?php
                        if($object->user_regStatus == '0'){ ?>
                            <a href="<?= URLROOT ?>UserController/conformation/<?= $object->user_id ?>"class='btn btn-success'><i class='fa fa-check'></i></a>
                        <?php }
                        ?></td>
                </tr>
            <?php }
            
            ?>
            

        </table>
    </div>
    <a href="<?= URLROOT ?>UserController/add" class='btn btn-primary'><i class='fa fa-plus'></i> <?= lang('ADD MEMBER') ?></a>
</div>



<?php
require_once '../app/view/includes/footer.php';
?>
<h1 class="display-6 mb-4">Listado Usuarios</h1>

<div class="shadow p-3 mb-5 rounded">
   <div class="d-flex justify-content-end">
      <a href="<?php echo base_url('user/create') ?>" class="btn btn-primary mb-2">Nuevo Usuario</a>
   </div>

   <div class="mt-3">
      <div class="table-responsive"> 

      <table class="table table-striped"  id="users-list">
         <thead>
            <tr>
               <th>ID</th>
               <th>Nombre</th>
               <th>Apellido</th>
               <th>Email</th>
               <th>Teléfono</th>
               <th width="3%">Acción</th>
            </tr>
         </thead>
         <tbody>
            <?php if ($users) : ?>
               <?php foreach ($users as $user) : ?>
                  <tr>
                     <td><strong><?php echo $user['id_users']; ?></strong></td>
                     <td><?php echo $user['name']; ?></td>
                     <td><?php echo $user['last_name']; ?></td>
                     <td><?php echo $user['mail']; ?></td>
                     <td><?php echo $user['phone']; ?></td>
                     <td>
                        <a href="<?= base_url()?>/user/update/<?php echo $user['id_users']; ?>" class="text-primary"><i class="fa-solid fa-pen"></i></a>

                        <a href="<?= base_url()?>/user/delete/<?php echo $user['id_users']; ?>/<?php echo $user['name']; ?>" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                     </td>
                  </tr>
               <?php endforeach; ?>
            <?php endif; ?>
         </tbody>
      </table>
      </div>
   </div>
</div>
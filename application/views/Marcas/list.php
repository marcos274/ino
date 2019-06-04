
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Marcas
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>Marcas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus">Agregar Marcas</span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                    <table id="example1" class="table table-bordered btn-hover">
                        <thead>
                            <tr>
                                <th>id_marca</th>
                                <th>descripcion_marca</th>
                                <th>estado_marca</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php if(!empty($marcas)):?>
                                <?php foreach($marcas as $marca):?>
                            <tr>
                                <td><?php echo $marca->id_marca ;?></td>
                                <td><?php echo $marca->descripcion_marca ;?></td>
                                <td><?php echo $marca->estado_marca ;?></td>
                                
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-info"
                                        value="<?php echo $marca->id_marca;?>">
                                            <span class="fa fa-search"></span>
                                        </button>
                                        
                                        <a href="<?php echo base_url();?>Marcas/edit/<?php echo $marca->id_marca;?>"class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo base_url(); ?>Marcas/delete/<?php echo $marca->id_marca; ?>"class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                    </div>
                                </td>
                            </tr>
                <?php endforeach; ?>
                <?php endif; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Informacion de Usuarios</h4>
              </div>
              <div class="modal-body">
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info pull-right" data-dismiss="modal">Cerrar</button>
                
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


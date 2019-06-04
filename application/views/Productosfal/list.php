
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Productos
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
                        <a href="<?php echo base_url(); ?>Productos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus">Agregar Producto</span></a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                    <table id="example1" class="table table-bordered btn-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>descripcion_producto</th>
                                <th>precio_compra_producto</th>
                                <th>precio_venta_producto</th>
                                <th>stock_producto</th>
                                 <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php if(!empty($productos)):?>
                                <?php foreach($productos as $producto):?>
                            <tr>
                                <td><?php echo $producto->id_producto;?></td>
                                <td><?php echo $producto->descripcion_producto;?></td>
                                <td><?php echo $producto->precio_costo;?></td>
                                <td><?php echo $producto->stock;?></td>
                                
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info btn-view-usuario" data-toggle="modal" data-target="#modal-info"
                                        value="<?php echo $producto->id_producto;?>">
                                            <span class="fa fa-search"></span>
                                        </button>
                                        <a href="<?php echo base_url();?>Productos/edit/<?php echo $producto->id_producto;?>"class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                        <a href="<?php echo base_url(); ?>Prodcutos/delete/<?php echo $producto->id_producto; ?>"class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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


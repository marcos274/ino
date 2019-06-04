
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Productos
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php if($this->session->flashdata("error")): ?>
                <div class="alert alert-danger alert-dismissible">
                <p><?php echo $this->session->flashdata("error");?></p>
                </div>
            <?php endif; ?>
                         <form action="<?php echo base_url(); ?>Productos/update" method="post">
                        <input type="text" name="id_producto"value="<?php echo $productos->id_producto;?>">
                        <div class="form-group">

                        <label for="nombre">descripcion_producto:</label>
                        <input type="text" class="form-control"id="descripcion_producto" name="descripcion_producto"value="<?php echo $productos->descripcion_producto;?>">
                        </div>
                        <div class="form-group">

                        <label for="nombre">estado_producto:</label>
                        <input type="text" class="form-control"id="estado_producto" name="estado_producto"value="<?php echo $productos->estado_producto;?>">
                        </div>
            
                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">
                                Guardar
                                </button>
                            </div>
                        </form>
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


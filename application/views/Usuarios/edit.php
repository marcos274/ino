
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuarios
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
                         <form action="<?php echo base_url(); ?>Usuarios/update" method="post">
                        <input type="text" name="id_usuario"value="<?php echo $usuarios->id_usuario;?>">
                        <div class="form-group">

                        <label for="nombre">descripcion_usuario:</label>
                        <input type="text" class="form-control"id="descripcion_usuario" name="descripcion_usuario"value="<?php echo $usuarios->descripcion_usuario;?>">
                        </div>
                        <div class="form-group">

                        <label for="nombre">estado_usuario:</label>
                        <input type="text" class="form-control"id="estado_categoria" name="estado_usuario"value="<?php echo $usuarios->estado_usuario;?>">
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


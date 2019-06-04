
<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
        <small>Nueva Cliente</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                    <?php if ($this->session->flashdata("error")) : ?>
                <div class="alert alert-danger alert-dismissible">
                <p><?php echo $this->session->flashdata("error"); ?></p>
                </div>
            <?php endif; ?>
                        <form action="<?php echo base_url(); ?>Clientes/store" method="post">
                        <div class="form-group">
                        <label for="nombre">nombre_cliente:</label>
                        <input type="text" class="form-control"id="nombre_cliente" name="nombre_cliente">
                        </div>


                         <div class="form-group">
                        <label for="nombre">nro_doc_cliente:</label>
                        <input type="text" class="form-control"id="nro_doc_cliente" name="nro_doc_cliente">
                        </div>
                         <div class="form-group">
                        <label for="nombre">direccion_cliente:</label>
                        <input type="text" class="form-control"id="direccion_cliente" name="direccion_cliente">
                        </div>

                         <div class="form-group">
                        <label for="nombre">telefono_cliente:</label>
                        <input type="text" class="form-control"id="telefono_cliente" name="telefono_cliente">
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


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ventas1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Usuario</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa  fa-building"></i>
              <p>
                PANEL DE CONTROL
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-tv"></i>
              <p>
                PRODUCTOS
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Productos" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>PRODUCTOS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Categorias" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>CATEGORIAS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Marcas" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>MARCAS</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="<?php echo base_url(); ?>reportes/Productos" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>REPORTE PROD</p>
                </a>
              </li>
</ul>
              <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-tv"></i>
              <p>
                CLIENTES
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
              <a href="<?php echo base_url(); ?>Clientes" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>CLIENTES</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>NUEVO CLIENTES</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>reportes/Clientes" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>REPORTES</p>
                </a>
              </li>
</ul>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-tv"></i>
              <p>
                VENTAS
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Ventas/" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>VENTA NUEVA</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Ventas/list" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>VENTA</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa  fa-bullseye"></i>
                  <p>REPORTE VENTA</p>
                </a>
              </li>
</ul>
           <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-tv"></i>
              <p>
                CONFIGUIRACION
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>Usuarios" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>USUARIOS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>EMPRESA</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa  fa-bullseye"></i>
                  <p>COMPROVANTE</p>
                </a>
              </li>

 <li class="nav-item">
                <a href="<?php echo base_url(); ?>reportes/Usuarios" class="nav-link ">
                  <i class="fa  fa-bullseye"></i>
                  <p>REPORTES</p>
                </a>
              </li>



              </ul>


              </li>

            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">NUEVO</span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Notificaciones</h5>
      <p>Contenido notificaciones</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

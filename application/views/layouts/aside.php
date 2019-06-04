        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">      
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu Principal</li>
                    <li>
                        <a href="<?php echo base_url();?>dashboard">
                            <i class="fa fa-home"></i> <span>Inicio</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cogs"></i> <span>Productos</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                        <!-- se envia a la vista de el listado de categorias -->
                            <li><a href="<?php echo base_url();?>mantenimiento/Categorias"><i class="fa fa-circle-o"></i> Categorias</a></li>
                            <li><a href="<?php echo base_url();?>mantenimiento/Productos"><i class="fa fa-circle-o"></i> Productos</a></li>
                            <li><a href="<?php echo base_url();?>mantenimiento/Marcas"><i class="fa fa-circle-o"></i> Marcas</a></li>
                            <li><a href="<?php echo base_url();?>mantenimiento/Reporte de Stosck"><i class="fa fa-circle-o"></i> Reporte de Stock</a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share-alt"></i> <span>Compras</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>mantenimiento/Compras/add"><i class="fa fa-circle-o"></i> Nueva Compra</a></li>
                            <li><a href="<?php echo base_url();?>mantenimiento/Compras"><i class="fa fa-circle-o"></i> Gestionar Compras</a></li>
                            <li><a href="<?php echo base_url();?>mantenimiento/Proveedores"><i class="fa fa-circle-o"></i> Reporte de Compras</a></li>
                            <li><a href="<?php echo base_url();?>mantenimiento/Proveedores"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-print"></i> <span>Ventas</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>Ventas/add"><i class="fa fa-circle-o"></i> Nueva Venta</a></li>
                            <li><a href="<?php echo base_url();?>Ventas"><i class="fa fa-circle-o"></i> Gestionar Ventas</a></li>
                            <li><a href="<?php echo base_url();?>Ventas"><i class="fa fa-circle-o"></i> Reporte Ventas</a></li>
                            <li><a href="<?php echo base_url();?>Clientes"><i class="fa fa-circle-o"></i> Clientes</a></li>
                            
                            
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user-circle-o"></i> <span>Reportes</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>Reportes/productos"><i class="fa fa-circle-o"></i> Reporte de Productos</a></li>
                            <li><a href="<?php echo base_url();?>Reportes/compras"><i class="fa fa-circle-o"></i> Reporte de Compras</a></li>
                            <li><a href="<?php echo base_url();?>Reportes/ventas"><i class="fa fa-circle-o"></i> Reporte de Ventas</a></li>
                         </ul>
                    </li>
                
                <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user-circle-o"></i> <span>Configuracion</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>administrador/usuarios"><i class="fa fa-circle-o"></i> Empresa</a></li>
                            <li><a href="<?php echo base_url();?>administrador/usuarios"><i class="fa fa-circle-o"></i> Comprobantes</a></li>
                            <li><a href="<?php echo base_url();?>administrador/usuarios"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                            </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->
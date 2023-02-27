<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/icons/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">John Doe</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="<?= base_url(); ?>/dashboard""><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-laptop"></i>
            <span class="app-menu__label"> Usuarios </span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/usuarios">
                <i class="icon fa fa-circle-o"></i> Usurarios
              </a>
            </li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i>Roles</a></li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/clientes"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Clientes</span></a>
        </li>
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/proveedores"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Proveedores</span></a>
        </li>
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/compras"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Compras</span></a>
        </li>
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/ventas"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Ventas</span></a>
        </li>     
        

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-th-list"></i>
            <span class="app-menu__label">Productos</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/productos">
                <i class="icon fa fa-circle-o"></i>Productos
              </a>
            </li>
            <li>
              <a class="treeview-item" href="<?= base_url(); ?>/categorias">
                <i class="icon fa fa-circle-o"></i>Categoria
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/logout">
            <i class="app-menu__icon fa fa-file-code-o"></i>
            <span class="app-menu__label">Logout</span>
          </a>
        </li>
      </ul>
    </aside>
<!-- Main Sidebar Container -->
 <?php 

  $rol = $this->session->userdata('role');

 ?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link">
      <img src="<?= base_url('assets/dist/img/pln.png'); ?>" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MANPRO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Hi, <?php echo $this->session->userdata('nama'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url(); ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

<?php if($rol == 1){ ?>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                USER ROLE
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url(); ?>user/role" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('user/akses'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Akses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('menu/menu'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Menu</p>
                </a>
              </li>
              <?php 
                $this->db->select('*');
                $this->db->from('tb_akses');
                $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
                $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
                $this->db->order_by('tb_menu.id_menu', 'ASC');
                $this->db->where('tb_akses.id_role', $rol);
                $this->db->where('tb_menu.parent', 'USER ROLE');
                $query = $this->db->get();

                foreach ($query->result() as $row)
                  { 
              ?>

              <li class="nav-item">
               <a href="<?= base_url(); ?><?php echo $row->url; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p><?php echo $row->tittle; ?></p>
                </a>
              </li>

              <?php
                }
              ?>
   
            </ul>
          </li>
          
<?php } ?>
    
          <?php 
            $main_title = "UNIT";
            $this->db->select('*');
            $this->db->from('tb_akses');
            $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
            $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
            $this->db->order_by('tb_menu.id_menu', 'ASC');
            $this->db->where('tb_akses.id_role', $rol);
            $this->db->where('tb_menu.parent', $main_title);
            $query = $this->db->get();
            $x=0;

            foreach ($query->result() as $row){
              $title[$x] = $row->tittle;
              $x++;
             }
            if($x>0){
          ?>
          <li class="nav-item has-treeview">
            

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                <?= $main_title?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
                $this->db->select('*');
                $this->db->from('tb_akses');
                $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
                $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
                $this->db->order_by('tb_menu.id_menu', 'ASC');
                $this->db->where('tb_akses.id_role', $rol);
                $this->db->where('tb_menu.parent', $main_title);
                $query = $this->db->get();

                for($i=0;$i<$x;$i++)
                  { 
              ?>

              <li class="nav-item">
               <a href="<?= base_url(); ?><?php echo $row->url; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p><?php echo $title[$i]; ?></p>
                </a>
              </li>

              <?php
                }
              ?>
   
            </ul>
          </li><?php } ?>

          <?php 
            $main_title = "ASET";
            $this->db->select('*');
            $this->db->from('tb_akses');
            $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
            $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
            $this->db->order_by('tb_menu.id_menu', 'ASC');
            $this->db->where('tb_akses.id_role', $rol);
            $this->db->where('tb_menu.parent', $main_title);
            $query = $this->db->get();
            $x=0;

            foreach ($query->result() as $row){
              $title[$x] = $row->tittle;
              $x++;
             }
            if($x>0){
          ?>
          <li class="nav-item has-treeview">
            

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                <?= $main_title?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
                $this->db->select('*');
                $this->db->from('tb_akses');
                $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
                $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
                $this->db->order_by('tb_menu.id_menu', 'ASC');
                $this->db->where('tb_akses.id_role', $rol);
                $this->db->where('tb_menu.parent', $main_title);
                $query = $this->db->get();

                for($i=0;$i<$x;$i++)
                  { 
              ?>

              <li class="nav-item">
               <a href="<?= base_url(); ?><?php echo $row->url; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p><?php echo $title[$i]; ?></p>
                </a>
              </li>

              <?php
                }
              ?>
   
            </ul>
          </li><?php } ?>

           <?php 
            $main_title = "DATA UTAMA";
            $this->db->select('*');
            $this->db->from('tb_akses');
            $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
            $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
            $this->db->order_by('tb_menu.id_menu', 'ASC');
            $this->db->where('tb_akses.id_role', $rol);
            $this->db->where('tb_menu.parent', $main_title);
            $query = $this->db->get();
            $x=0;

            foreach ($query->result() as $row){
              $title[$x] = $row->tittle;
              $x++;
             }
            if($x>0){
          ?>
          <li class="nav-item has-treeview">
            

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                <?= $main_title?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
                $this->db->select('*');
                $this->db->from('tb_akses');
                $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
                $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
                $this->db->order_by('tb_menu.id_menu', 'ASC');
                $this->db->where('tb_akses.id_role', $rol);
                $this->db->where('tb_menu.parent', $main_title);
                $query = $this->db->get();

                for($i=0;$i<$x;$i++)
                  { 
              ?>

              <li class="nav-item">
               <a href="<?= base_url(); ?><?php echo $row->url; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p><?php echo $title[$i]; ?></p>
                </a>
              </li>

              <?php
                }
              ?>
   
            </ul>
          </li><?php } ?>

          <?php 
            $main_title = "TEMPLATE";
            $this->db->select('*');
            $this->db->from('tb_akses');
            $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
            $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
            $this->db->order_by('tb_menu.id_menu', 'ASC');
            $this->db->where('tb_akses.id_role', $rol);
            $this->db->where('tb_menu.parent', $main_title);
            $query = $this->db->get();
            $x=0;

            foreach ($query->result() as $row){
              $title[$x] = $row->tittle;
              $x++;
             }
            if($x>0){
          ?>
          <li class="nav-item has-treeview">
            

            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                <?= $main_title?>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php 
                $this->db->select('*');
                $this->db->from('tb_akses');
                $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
                $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
                $this->db->order_by('tb_menu.id_menu', 'ASC');
                $this->db->where('tb_akses.id_role', $rol);
                $this->db->where('tb_menu.parent', $main_title);
                $query = $this->db->get();

                for($i=0;$i<$x;$i++)
                  { 
              ?>

              <li class="nav-item">
               <a href="<?= base_url(); ?><?php echo $row->url; ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                   <p><?php echo $title[$i]; ?></p>
                </a>
              </li>

              <?php
                }
              ?>
   
            </ul>
          </li><?php } ?>

           <?php 
                $this->db->select('*');
                $this->db->from('tb_akses');
                $this->db->join('tb_menu', 'tb_menu.id_menu = tb_akses.id_menu');
                $this->db->join('tb_role', 'tb_role.id_role = tb_akses.id_role');
                $this->db->order_by('tb_menu.id_menu', 'ASC');
                $this->db->where('tb_akses.id_role', $rol);
                $this->db->where('tb_menu.parent', '-');
                $query = $this->db->get();

                foreach ($query->result() as $row)
                  { 
              ?>
                 <li class="nav-item">
                  <a href="<?= base_url(); ?><?php echo $row->url; ?>" class="nav-link">
                    <i class="<?php echo $row->icon; ?>"></i>
                    <p><?php echo $row->tittle; ?></p>
                  </a>
                </li>
              <?php
                }
              ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
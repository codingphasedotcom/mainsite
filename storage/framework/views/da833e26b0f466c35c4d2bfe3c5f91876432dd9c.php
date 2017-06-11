<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="/admin"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Channels</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="/admin/channels/create"><i class="fa fa-circle-o"></i> Add Channel</a></li>
          <li><a href="/admin/channels"><i class="fa fa-circle-o"></i> View All</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Stacks</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo e(route('stacks.create')); ?>"><i class="fa fa-circle-o"></i> Add Stack</a></li>
          <li><a href="<?php echo e(route('stacks.index')); ?>"><i class="fa fa-circle-o"></i> View All</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Skills</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo e(route('skills.create')); ?>"><i class="fa fa-circle-o"></i> Add Skill</a></li>
          <li><a href="<?php echo e(route('skills.index')); ?>"><i class="fa fa-circle-o"></i> View All</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Podcasts</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="<?php echo e(route('podcasts.create')); ?>"><i class="fa fa-circle-o"></i> Add Podcats</a></li>
          <li><a href="<?php echo e(route('podcasts.index')); ?>"><i class="fa fa-circle-o"></i> View All</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

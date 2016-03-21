<?php $currentRouter =  '/'.$this->router->class.'/'.$this->router->method; ?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="../../../static/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <?php foreach($tree as $val){ ?>

                <li class="treeview <?php if($val['class'] == $currentClass){echo 'active';} ?>">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span><?=$val['name']?></span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <?php if(!empty($val['node'])){ ?>
                            <?php foreach($val['node'] as $v){ ?>
                                <li <?php if($currentMethod == $v['method'] && $val['class'] == $currentClass){echo 'class="active"';} ?>><a href="<?=$v['uri']?>"><i class="fa fa-circle-o"></i> <?=$v['name']?></a></li>
                            <?php } ?>
                        <?php } ?>

                    </ul>
                </li>
            <?php } ?>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
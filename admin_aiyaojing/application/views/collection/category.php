<?php $this->load->view('header'); ?>
<?php $this->load->view('left', ['currentClass' => 'collection', 'currentMethod' => 'index']); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            合集分类
            <small>数据</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">合集</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                        <div class="box-tools">
                            <a href="/collection/add_category" class="btn btn-default btn-block btn-sm">添加分类</a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>合集分类</th>
                                <th>添加时间</th>

                                <th style="width: 80px">操作</th>
                            </tr>
                            <?php foreach($list as $val){ ?>
                                <tr>
                                    <td><?=$val['id']?></td>
                                    <td><?=$val['category_name']?></td>
                                    <td><?=date('Y-m-d', $val['add_time'])?></td>
                                    <td><a class="btn btn-default btn-sm" href="">查看</a></td>
                                </tr>
                            <?php } ?>

                            </tbody></table>
                    </div><!-- /.box-body -->

                </div><!-- /.box -->


            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('footer'); ?>

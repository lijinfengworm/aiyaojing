<?php $this->load->view('header'); ?>
<?php $this->load->view('left'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            合集列表
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
                            <a href="/collect/add_collect" class="btn btn-default btn-block btn-sm">添加合集</a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>添加用户</th>
                                <th>标题</th>
                                <th>图片数量</th>
                                <th>添加时间</th>
                                <th>上架时间</th>

                                <th style="width: 80px">操作</th>
                            </tr>
                            <?php foreach($list as $val){ ?>
                            <tr>
                                <td><?=$val['id']?></td>
                                <td><?=$val['real_name']?></td>
                                <td><?=$val['title']?></td>
                                <td><span class="badge bg-red"><?=$val['images_num']?></span></td>
                                <td><?=$val['add_time']?></td>
                                <td><?=$val['show_time']?></td>
                                <td><a class="btn btn-default btn-sm" href="">查看</a></td>
                            </tr>
                            <?php } ?>

                            </tbody></table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <?php echo $this->pagination->create_links();?>
                    </div>
                </div><!-- /.box -->


            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('footer'); ?>

<?php $this->load->view('header'); ?>
<?php $this->load->view('left', ['currentClass' => 'collection', 'currentMethod' => 'list_index']); ?>
<!-- Content Wrapper. Contains page content -->
<link href="<?=STATIC_PATH;?>css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?=STATIC_PATH?>/js/jquery.datetimepicker.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            分类列表
            <small>数据</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">合集</li>
        </ol>
    </section>
    <section class="content">
        <form action="/collection/add_collection" method="post" class="form-horizontal">
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"></h3>
                            <div class="box-tools">
                                <!--<a href="/collection/add_collection" class="btn btn-default btn-block btn-sm">添加合集</a>-->
                            </div>
                        </div><!-- /.box-header -->

                        <div class="box-body">


                                <div class="col-md-8">
                                    <input type="hidden" name="id" value="<?=$id?>">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">分类名称</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="category_name" class="form-control" value="<?=$info['category_name']?>" id="inputEmail3" placeholder="输入合集的标题">
                                        </div>
                                    </div>

                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-default btn-normal ">提交</button>
                                </div>

                        </div><!-- /.box-body -->

                    </div><!-- /.box -->


                </div>
            </div>

        </form>
    </section>
    <!-- /.content -->

</div>
<script type="text/javascript">
<!-- /.content-wrapper -->
$(function(){


});
</script>

<?php $this->load->view('footer'); ?>

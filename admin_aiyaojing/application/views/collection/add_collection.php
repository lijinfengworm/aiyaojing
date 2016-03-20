<?php $this->load->view('header'); ?>
<?php $this->load->view('left', ['currentClass' => 'collection', 'currentMethod' => 'list_index']); ?>
<!-- Content Wrapper. Contains page content -->
<link href="<?=STATIC_PATH;?>css/jquery.datetimepicker.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?=STATIC_PATH?>/js/jquery.datetimepicker.js"></script>
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
                                        <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" value="<?=$info['title']?>" id="inputEmail3" placeholder="输入合集的标题">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">简介</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="abstract" value="<?=$info['abstract']?>" class="form-control" id="inputEmail3" placeholder="输入合集的简介（可选）">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">显示时间</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="show_time" class="form-control" id="datetimepicker_mask1" value="<?=date('Y-m-d H:i:s', $info['show_time'])?>" placeholder="输入合集的发布时间">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">合集分类</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="cate_id">
                                                <option value="0">请选择</option>
                                            <?php foreach($category as $val){ ?>
                                                <option value="<?=$val['id']?>" <?php if($val['id'] == $info['cate_id']){echo 'selected';} ?>><?=$val['category_name']?></option>
                                                <?php } ?>

                                            </select>
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
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right"><a class="btn btn-default btn-adn btn-adn-pic">添加</a></div>
                </div>
                <div class="pic-body">
                    <div class="col-md-3">
                        <div class="box box-primary direct-chat direct-chat-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">1</h3>
                                <div class="box-tools pull-right">
                                    <a class="btn btn-box-tool pic-remove" data-widget="remove"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="direct-chat-messages">

                                </div>
                            </div>
                            <div class="box-footer">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="说点什么吧 ..." class="form-control">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target=".bs-example-modal-lg">上传</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myLargeModalLabel">图片选择</h4>
                </div>
                <div class="modal-body">


                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>
<script type="text/javascript">
<!-- /.content-wrapper -->
$(function(){
    $('#datetimepicker_mask1').datetimepicker({
        timepicker:false,
        format:'Y-m-d',
        formatDate:'Y/m/d'
    });
    var removePic = function(){
        $('.pic-remove').click(function(){
            $(this).parent().parent().parent().parent().remove();
        });
    }
    var template = '<div class="col-md-3">' +
        '               <div class="box box-primary direct-chat direct-chat-primary">' +
        '                   <div class="box-header with-border">' +
        '                   <h3 class="box-title">1</h3>' +
        '                   <div class="box-tools pull-right">'+
        '                       <a class="btn btn-box-tool pic-remove" data-widget="remove"><i class="fa fa-times"></i></a>'+
        '                   </div>'+
        '               </div>'+
        '               <div class="box-body">'+
        '                   <div class="direct-chat-messages">'+

        '                   </div>'+
        '               </div>'+
        '               <div class="box-footer">'+
        '                   <div class="input-group">'+
        '                       <input type="text" name="message" placeholder="说点什么吧 ..." class="form-control">'+
        '                       <span class="input-group-btn">'+
        '                       <button type="button" class="btn btn-primary btn-flat">上传</button>'+
        '                       </span>'+
        '                   </div>'+
        '                </div>'+
        '               </div>'+
        '            </div>';
    $('.btn-adn-pic').click(function(){
        $('.pic-body').append(template)
        removePic()
    });
    removePic();

});
</script>

<?php $this->load->view('footer'); ?>

<?php $this->load->view('header'); ?>
<?php $this->load->view('left', ['currentClass' => 'images', 'currentMethod' => 'index']); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            图片库
            <small>数据</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">图片</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                        <div class="box-tools">

                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <?php foreach ($list as $v) { ?>
                                <li>
                                    <img src="<?=CDN_ADDRESS.$v['small_image'];?>" alt="User Image" style="border-radius: 0;">
                                    <div class="users-list-name" style="margin-top: 10px">
                                        <div class="pull-left">
                                            <a class="btn btn-normal add-collection" data-id="<?=$v['id']?>">添加到合集</a>
                                        </div>
                                        <div class="pull-right">
                                            <a class="btn btn-normal delete-image" data-id="<?=$v['id']?>">删除</a>
                                        </div>
                                    </div>

                                    <span class="users-list-date">Today</span>
                                </li>
                                <?php  } ?>
                            </ul><!-- /.users-list -->
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix pull-right">
                        <?php echo $this->pagination->create_links();?>
                    </div>
                </div><!-- /.box -->


            </div>
        </div>
    </section>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">选择合集</h4>
                </div>
                <div class="modal-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <input type="hidden" value="0" name="cid" id="image-id">
                            <label class="col-sm-2 control-label">选择合集</label>
                            <div class="col-sm-10">
                                <select  class="form-control" id="collection-id">
                                    <?php foreach($collection as $val){  ?>
                                    <option value="<?=$val['id']?>"><?=$val['title']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" value="0" name="cid" id="image-id">
                            <label class="col-sm-2 control-label">说点什么</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="image_abstract" id="image-abstract" placeholder="说点什么">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-collection">保存</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    $(function(){
        $('.add-collection').click(function () {
            var id = $(this).data('id');
            $('#image-id').val(id);
            $('#myModal').modal('show');
        });
        $('.save-collection').click(function(){

            var imageID = $('#image-id').val();
            var collectionID = $('#collection-id').val();
            var imageAbstract = $('#image-abstract').val();
            $.ajax({
                type : 'POST',
                url  : '/images/add_collection',
                data : {'image_id':imageID, 'cid':collectionID, 'image_abstract': imageAbstract},
                success:function(s){
                    var data = $.parseJSON(s);
                    if(data.code == 1){
                        $('#image-abstract').val('');
                        $('#myModal').modal('hide');
                    }
                    alert(data.message);

                }
            });

        });
        $('.delete-image').click(function(){
            var id = $(this).data('id');
            $.ajax({
                type: "POST",
                url: "/images/delete_image",
                data: {'image_id': id},
                success: function(s){
                    var obj = $.parseJSON(s);
                    if(obj['code'] == 1){
                        location.reload();
                    }
                }
            });
        });
    });
</script>
<?php $this->load->view('footer'); ?>

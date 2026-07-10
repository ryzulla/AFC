                <div class="page-title">
                    <h3>Comments</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="<?php echo site_url('backend/comment/');?>">Comment</a></li>
                            <li class="active">Unpublish</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                            <div class="panel-body">
                                <div class="search p bg-light m-b-sm">
                                    <form action="<?php echo site_url('backend/comment/results');?>" method="GET" data-default="150">
                                        <div class="input-group">
                                            <input type="text" name="search_query" class="form-control input-search" placeholder="Search...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div><!-- Input Group -->
                                    </form><!-- Search Form -->
                                </div>
                                <form action="<?php echo site_url('backend/comment/delete_all');?>" method="post">
                                <div class="row m-b-sm">
                                    <div class="col-md-12">
                                        <label class="checkbox-inline" style="margin-bottom: 0;">
                                            <input type="checkbox" id="select-all" class="no-uniform"> Select All
                                        </label>
                                        <button type="submit" class="btn btn-danger btn-sm" id="delete-selected" disabled>
                                            <i class="fa fa-trash"></i> Delete Selected
                                        </button>
                                    </div>
                                </div>
                                <div role="tabpanel">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation"><a href="<?php echo site_url('backend/comment');?>">All<span class="badge badge-success pull-right m-l-xs"><?php echo $total_rows;?></span></a></li>
                                        <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab" aria-expanded="false">Unpublish<span class="badge badge-danger pull-right m-l-xs"><?php echo $total_unpublish;?></span></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in p-v-lg" id="all">
                                        <?php foreach ($data->result() as $row) :?>
                                            <div class="search-item">
                                                <div class="pull-left m-r-sm" style="margin-top: 15px;">
                                                    <input type="checkbox" name="ids[]" value="<?php echo $row->comment_id;?>">
                                                </div>
                                                <div class="pull-left m-r-md">
                                                    <a href="javascript:void(0);" class="btn-image" data-comment_id="<?php echo $row->comment_id;?>" data-name="<?php echo $row->comment_name;?>" data-email="<?php echo $row->comment_email;?>">
                                                        <?php if(!empty($row->comment_image)):?>
                                                            <img src="<?php echo base_url().'assets/images/'.$row->comment_image;?>" class="img-circle" width="50" height="50" alt="<?php echo $row->comment_name?>">
                                                        <?php else:?>
                                                            <img src="<?php echo base_url().'assets/images/user_blank.png'?>" class="img-circle" width="50" alt="<?php echo $row->comment_name?>">
                                                        <?php endif;?>
                                                    </a>
                                                </div>
                                                <div class="pull-right m-r-md">
                                                    <div class="btn-group">
                                                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                      </button>
                                                      <ul class="dropdown-menu dropdown-menu-right">
                                                        <li><a href="javascript:void(0);" class="btn-publish" data-comment_id="<?php echo $row->comment_id;?>"><span class="fa fa-send"></span> Publish</a></li>
                                                        <li><a href="javascript:void(0);" class="btn-edit" data-comment_id="<?php echo $row->comment_id;?>" data-comment_msg="<?php echo $row->comment_message;?>"><span class="fa fa-edit"></span> Edit</a></li>
                                                        <li><a href="javascript:void(0);" class="btn-delete" data-comment_id="<?php echo $row->comment_id;?>"><span class="fa fa-trash"></span> Delete</a></li>
                                                      </ul>
                                                    </div>
                                                </div>
                                                <h3 class="no-m"><a href="<?php echo site_url('product/'.$row->product_slug);?>" target="_blank"><?php echo $row->product_title;?></a></h3>
                                                <a href="javascript:void(0);" class="search-link"><b><?php echo $row->comment_name?></b>, <?php echo $row->comment_date;?></a> <span class="label label-danger">Unpublish</span>
                                                <div style="margin-left: 6.5%;">
                                                    <p><?php echo $row->comment_message;?></p>
                                                </div>
                                            </div>
                                        <?php endforeach;?>
                                            
                                            <?php echo $page;?>
                                        </div>
                                       
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

        <!-- MODAL EDIT -->
        <form action="<?php echo site_url('backend/comment/edit');?>" method="post">
            <div class="modal fade" id="EditModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Comment</h4>
                    </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <textarea name="comments2" id="comment" class="form-control comment" rows="6" placeholder="Edit..."></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="comment_id2" required>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--PUBLISH MODAL-->
        <form action="<?php echo site_url('backend/comment/publish');?>" method="post">
            <div class="modal fade" id="PublishModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Publish Comment</h4>
                    </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                Anda yakin mau mempublish komentar ini?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="comment_id4" required>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--DELETE RECORD MODAL-->
        <form action="<?php echo site_url('backend/comment/delete');?>" method="post">
            <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete Comment</h4>
                    </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                Anda yakin mau menghapus komentar ini?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="comment_id3" required>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--DELETE RECORD MODAL-->
        <form action="<?php echo site_url('backend/comment/change');?>" method="post" enctype="multipart/form-data">
            <div class="modal fade" id="ImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Change Image</h4>
                    </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" readonly>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" readonly>
                            </div>

                            <div class="form-group">
                                <input type="file" name="file" class="form-control-file" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="comment_id5" required>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script src="<?php echo base_url().'assets/plugins/summernote/summernote.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.btn-edit').on('click',function(){
                    var comm_id=$(this).data('comment_id');
                    var msg =$(this).data('comment_msg');
                    $('#EditModal').modal('show');
                    $('[name="comment_id2"]').val(comm_id);
                    $('.comment').val(msg);
                    $('.comment').code(msg);
                });

                $('.btn-delete').on('click',function(){
                    var comm_id=$(this).data('comment_id');
                    $('#DeleteModal').modal('show');
                    $('[name="comment_id3"]').val(comm_id);
                });

                $('.btn-publish').on('click',function(){
                    var comm_id=$(this).data('comment_id');
                    $('#PublishModal').modal('show');
                    $('[name="comment_id4"]').val(comm_id);
                });

                $('.btn-image').on('click',function(){
                    var comm_id=$(this).data('comment_id');
                    var name=$(this).data('name');
                    var email=$(this).data('email');
                    $('#ImageModal').modal('show');
                    $('[name="comment_id5"]').val(comm_id);
                    $('[name="name"]').val(name);
                    $('[name="email"]').val(email);
                });

                $('#select-all').on('change', function() {
                    $('input[name="ids[]"]').each(function() {
                        $(this).prop('checked', $('#select-all').prop('checked'));
                    });
                    $.uniform.update();
                    toggleDeleteButton();
                });

                $(document).on('change', 'input[name="ids[]"]:not(#select-all)', function() {
                    toggleDeleteButton();
                });

                function toggleDeleteButton() {
                    var checked = $('input[name="ids[]"]:checked').not('#select-all').length > 0;
                    $('#delete-selected').prop('disabled', !checked);
                }

            });
        </script>
        <?php if($this->session->flashdata('msg')=='success-edit'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Comment Updated!.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success-publish'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Comment Published!.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success-change'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Image Changed!.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success-delete'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Comment Deleted!.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

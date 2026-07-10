<div class="page-title">
    <h3>Tags</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
            <li><a href="#">Post</a></li>
            <li class="active">Tag</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Row</button>
                    <div class="table-responsive">
                        <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">No</th>
                                    <th>Tag</th>
                                    <th>Meta Description</th>
                                    <th style="text-align: center;width: 120px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no=0;
                                foreach ($data->result() as $row):
                                    $no++;
                            ?>
                                <tr>
                                    <td><?php echo $no;?></td>
                                    <td><?php echo $row->tag_name;?></td>
                                    <td><?php echo $row->tag_description;?></td>
                                    <td style="text-align: center;">
                                        <a href="javascript:void(0);" class="btn btn-xs btn-edit" data-id="<?php echo $row->tag_id;?>" data-tag="<?php echo $row->tag_name;?>" data-desc="<?php echo htmlspecialchars($row->tag_description, ENT_QUOTES);?>"><span class="fa fa-pencil"></span></a>
                                        <a href="javascript:void(0);" class="btn btn-xs btn-delete" data-id="<?php echo $row->tag_id;?>"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form action="<?php echo site_url('backend/tag/save');?>" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">New Tag</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="tag" class="form-control" placeholder="Tag Name" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" rows="3" placeholder="Meta Description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="<?php echo site_url('backend/tag/edit');?>" method="post">
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Tag</h4>
            </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="tag2" class="form-control" placeholder="Tag Name" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description2" class="form-control" rows="3" placeholder="Meta Description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kode" required>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="<?php echo site_url('backend/tag/delete');?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Tag</h4>
            </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        Anda yakin mau menghapus data ini?
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" required>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>


<script src="<?php echo base_url().'assets/plugins/jquery-blockui/jquery.blockui.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/classie.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/main.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/main.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery-mockjax-master/jquery.mockjax.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/moment/moment.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/js/jquery.datatables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
<script>
    $(document).ready(function(){
        $('#data-table').dataTable();

        $('.btn-edit').on('click',function(){
            var id=$(this).data('id');
            var name=$(this).data('tag');
            var desc=$(this).data('desc');
            $('[name="kode"]').val(id);
            $('[name="tag2"]').val(name);
            $('[name="description2"]').val(desc);
            $('#EditModal').modal('show');
        });

        $('.btn-delete').on('click',function(){
            var id=$(this).data('id');
            $('[name="id"]').val(id);
            $('#DeleteModal').modal('show');
        });
    });
</script>

<?php if($this->session->flashdata('msg')=='success'):?>
    <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Tag Saved!",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
    </script>
<?php elseif($this->session->flashdata('msg')=='info'):?>
    <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Tag Updated!",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
    </script>
<?php elseif($this->session->flashdata('msg')=='success-delete'):?>
    <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Tag Deleted!.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
    </script>
<?php endif;?>

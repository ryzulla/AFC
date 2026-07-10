<div class="page-title">
    <h3>Contact Admin</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
            <li class="active">Contact Admin</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">No</th>
                                    <th>Name</th>
                                    <th>Status</th>
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
                                    <?php if($row->subscribe_status == '0'):?>
                                    <td><?=$row->subscribe_email?><span class="label label-info">New</span></td>
                                    <?php else:?>
                                    <td><?=$row->subscribe_email?><span class="label label-success">Active</span></td>
                                    <?php endif;?>
                                    <td style="text-align: center;"><a href="<?php echo site_url('backend/subscriber/decrease/'.$row->subscribe_id);?>" class="btn btn-sm btn-default" title="Turunkan Rating"><span class="fa fa-minus"></span></a> <?php echo $row->subscribe_rating;?> <a href="<?php echo site_url('backend/subscriber/increase/'.$row->subscribe_id);?>" class="btn btn-sm btn-default" title="Naikan Rating"><span class="fa fa-plus"></span></a></td>
                                    <td style="text-align: center;">
                                        <?php if($row->subscribe_status == '0'):?>
                                        <a href="javascript:void(0);" class="btn btn-xs btn-edit" data-id="<?php echo $row->subscribe_id;?>" title="Aktifkan Status Email"><span class="fa fa-check"></span></a>
                                        <?php endif;?>
                                        <a href="javascript:void(0);" class="btn btn-xs btn-delete" data-id="<?php echo $row->subscribe_id;?>" title="Hapus"><span class="fa fa-trash"></span></a>
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

<form action="<?php echo site_url('backend/subscriber/update');?>" method="post">
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Aktifkan Email</h4>
            </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        Anda yakin email ini aktif?
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="kode" required>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-success">Yes</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="<?php echo site_url('backend/subscriber/delete');?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Email</h4>
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
            $('[name="kode"]').val(id);
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
                text: "Email Activated.",
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
                text: "Email Deleted!.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
    </script>
<?php endif;?>

<div class="page-title">
    <h3>Product List</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">List</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-white">
                <div class="panel-body">
                    <a href="<?php echo site_url('backend/product/add_new');?>" class="btn btn-success m-b-sm">Add New Product</a>
                    <div class="table-responsive">
                        <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">No</th>
                                    <th>Title</th>
                                    <th>Publish Date</th>
                                    <th>Category</th>
                                    <th>Views</th>
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
                                    <td><?php echo $row->product_title;?></td>
                                    <td><?php echo $row->product_date;?></td>
                                    <td><?php echo $row->category_name;?></td>
                                    <td><?php echo $row->product_views;?></td>
                                    <td style="text-align: center;">
                                        <a href="<?php echo site_url('backend/product/get_edit/'.$row->product_id);?>" class="btn btn-xs"><span class="fa fa-pencil"></span></a>
                                        <a href="javascript:void(0);" class="btn btn-xs btn-delete" data-id="<?php echo $row->product_id;?>"><span class="fa fa-trash"></span></a>
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

<form action="<?php echo site_url('backend/product/delete');?>" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Product</h4>
            </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        Anda yakin mau menghapus Product ini?
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
                text: "Product Saved!",
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
                text: "Product Updated!",
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
                text: "Product Deleted!.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
    </script>
<?php endif;?>

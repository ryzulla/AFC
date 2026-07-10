                <div class="page-title">
                    <h3>Change Password</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li class="active">Change Password</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">

                        <div class="col-lg-12 col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Change Password</h4>
                                </div>
                                <div class="panel-body">

                                    <form class="form-horizontal" action="<?php echo site_url('backend/change_pass/change');?>" method="post">

                                      <div class="form-group">
                                        <label for="inputPassword1" class="col-sm-2 control-label">Old Password</label>
                                        <div class="col-sm-10">
                                          <input type="password" name="old_password" class="form-control" id="inputPassword1" placeholder="Old Password" required>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputPassword2" class="col-sm-2 control-label">New Password</label>
                                        <div class="col-sm-10">
                                          <input type="password" name="new_password" class="form-control" id="inputPassword2" placeholder="New Password" required>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Confirm New Password</label>
                                        <div class="col-sm-10">
                                          <input type="password" name="conf_password" class="form-control" id="inputPassword3" placeholder="Confirm New Password" required>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-success">Change Password</button>
                                        </div>
                                      </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->

        <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
        <!--Toast Message-->
        <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Password Changed.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error-notmatch'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Password and Confirm Password doesn't match.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error-notfound'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "Password was not found.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='error'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Error',
                        text: "User ID was not found.",
                        showHideTransition: 'slide',
                        icon: 'error',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#FF4859'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

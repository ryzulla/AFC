                <div class="page-title">
                    <h3>Site Information</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Site</a></li>
                            <li class="active">Settings</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <form class="form-horizontal" action="<?php echo base_url().'backend/settings/update'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="panel panel-white">

                                <div class="panel-body">

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="input1" value="<?php echo $site_name;?>" placeholder="Site Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" class="form-control" id="input1" value="<?php echo $site_title;?>" placeholder="Site Title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" rows="6"><?php echo $site_description;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Favicon</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_icon" class="form-control" id="input1">
                                                <p class="help-block">Favicon harus beresolusi 32 x 32 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_favicon;?>" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Logo Header</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_header" class="form-control" id="input1">
                                                <p class="help-block">Logo harus beresolusi 248 x 54 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_logo_header;?>" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Logo Big</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_big" class="form-control" id="input1">
                                                <p class="help-block">Logo big harus beresolusi 560 x 315 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_logo_big;?>" width="560" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Facebook URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="facebook" class="form-control" value="<?php echo $site_facebook;?>" id="input1" placeholder="Facebook URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Twitter URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="twitter" class="form-control" value="<?php echo $site_twitter;?>" id="input1" placeholder="Twitter URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Linkedin URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="linkedin" class="form-control" value="<?php echo $site_linkedin?>" id="input1" placeholder="Linkedin URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Instagram URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="instagram" class="form-control" value="<?php echo $site_instagram;?>" id="input1" placeholder="Linkedin URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Pinterest URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pinterest" class="form-control" value="<?php echo $site_pinterest;?>" id="input1" placeholder="Pinterest URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">TikTok URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tiktok" class="form-control" value="<?php echo $site_tiktok;?>" id="input1" placeholder="TikTok URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">YouTube URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="youtube" class="form-control" value="<?php echo $site_youtube;?>" id="input1" placeholder="YouTube URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">WhatsApp Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="whatsapp" class="form-control" value="<?php echo $site_whatsapp;?>" id="input1" placeholder="628111797970">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Google Maps URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="maps" class="form-control" value="<?php echo $site_maps;?>" id="input1" placeholder="Google Maps URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea name="address" class="form-control" rows="3" placeholder="Jakarta Barat, DKI Jakarta"><?php echo $site_address;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="site_id" value="<?php echo $site_id?>" required>
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">UPDATE</button>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>


                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

        <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
        <!--Toast Message-->
        <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Site Information Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

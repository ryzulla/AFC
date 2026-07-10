                <div class="page-title">
                    <h3>About Information</h3>
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
                        <form class="form-horizontal" action="<?php echo base_url().'backend/about_setting/update'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="panel panel-white">

                                <div class="panel-body">
                                     
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="img_about" class="form-control" id="input1">
                                                <p class="help-block">Image Heading harus beresolusi 456 x 470 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$about_img;?>" width="300" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" id="summernote" placeholder="Description"><?php echo $about_desc;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="about_id" value="<?php echo $about_id?>" required>
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success btn-lg">UPDATE</button>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>


                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

        <script src="<?php echo base_url().'assets/plugins/summernote/summernote.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#summernote').summernote({
                  height: 590,
                  toolbar: [    
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],       
                        ['insert', ['link', 'picture', 'hr']],
                        ['view', ["fullscreen", "codeview", "help"]],
                        ['mybutton', ['myVideo']] // custom button
                      ],

                    onImageUpload: function(files, editor, welEditable) {
                        sendFile(files[0], editor, welEditable);
                    },

                    buttons: {
                            myVideo: function(context) {
                                var ui = $.summernote.ui;
                                var button = ui.button({
                                contents: '<i class="fa fa-video-camera"/>',
                                tooltip: 'video',
                                click: function() {
                                    var div = document.createElement('div');
                                    div.classList.add('embed-container');
                                    var iframe = document.createElement('iframe');
                                    iframe.src = prompt('Enter video url:');
                                    iframe.setAttribute('frameborder', 0);
                                    iframe.setAttribute('width', '600px');
                                    iframe.setAttribute('height', '400px');
                                    iframe.setAttribute('allowfullscreen', true);
                                    div.appendChild(iframe);
                                    context.invoke('editor.insertNode', div);
                                }
                                });

                                return button.render();
                            }
                            }

                });
            });
        </script>
        <!--Toast Message-->
        <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "About Information Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

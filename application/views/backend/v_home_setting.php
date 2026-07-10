                <div class="page-title">
                    <h3>Home Information</h3>
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
                        <form class="form-horizontal" action="<?php echo base_url().'backend/home_setting/update'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Image Heading</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="img_heading" class="form-control" id="input1">
                                                <img src="<?php echo base_url().'theme/images/'.$image_heading;?>" width="560" class="thumbnail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Caption 1</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="caption1" class="form-control" id="input1" value="<?php echo $caption_1;?>" placeholder="Site Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            
                                        <label for="input1" class="col-sm-2 control-label">Content</label>
                                            <div class="col-sm-10">
                                            <textarea name="caption2" id="summernote"><?php echo $caption_2;?></textarea>
                                            </div>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Caption 2</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="caption2" class="form-control" id="input1" value="<?php echo $caption_2;?>" placeholder="Site Title">
                                            </div>
                                        </div> -->

                                        <!-- <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Background Testimonial</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="img_testimonial" class="form-control" id="input1">
                                                <p class="help-block">Background Testimonial harus beresolusi 925 x 617 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$image_testimonial;?>" width="560" class="thumbnail">
                                            </div>
                                        </div> -->

                                        <div class="form-group">
                                            <input type="hidden" name="home_id" value="<?php echo $home_id?>" required>
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
        <script src="<?php echo base_url().'assets/js/dropify.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
        <script>
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

                function sendFile(file, editor, welEditable) {
                    data = new FormData();
                    data.append("file", file);
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: "<?php echo site_url()?>backend/post/upload_image",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {
                            editor.insertImage(welEditable, url);
                        }
                    });
                }

                

                $('.dropify').dropify({
                    messages: {
                        default: 'Drag atau drop untuk memilih gambar',
                        replace: 'Ganti',
                        remove:  'Hapus',
                        error:   'error'
                    }
                });

                $('.title').keyup(function(){
                    var title = $(this).val().toLowerCase().replace(/[&\/\\#^, +()$~%.'":*?<>{}]/g,'-');
                    $('.slug').val(title);
                });
                

            });
        </script>
        <!--Toast Message-->
        <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Home Information Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

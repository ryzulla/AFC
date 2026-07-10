                <div class="page-title">
                    <h3>Add New Product</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Product</a></li>
                            <li class="active">Add New</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <form action="<?php echo base_url().'backend/product/publish'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-8">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" name="title" class="form-control title" placeholder="Title" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="slug" class="form-control slug" placeholder="Permalink" style="background-color: #F8F8F8;outline-color: none;border:0;color:blue;" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Desciption Product</label>
                                            <textarea name="contents" id="summernote"></textarea>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="filefoto" class="dropify" data-height="190" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Price (Rp)</label>
                                            <input type="text" name="price" class="form-control Price" placeholder="1.600.000,-" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category" required>
                                                <option value="">-Select Option-</option>
                                                <?php foreach ($category->result() as $row) : ?>
                                                    <option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <label>Tags</label>
                                        <div style="overflow-y:scroll;height:150px;margin-bottom:30px;">
                                            <?php foreach ($tag->result() as $row) : ?>
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="tag[]" value="<?php echo $row->tag_name;?>"> <?php echo $row->tag_name;?>
                                                </label>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                        <div class="btn-group btn-group-justified" role="group">
                                            <button type="submit" class="btn btn-primary btn-lg" style="width:100%"><span class="icon-cursor"></span> PUBLISH</button>
                                        </div>
                                </div>
                            </div>

                            <div class="panel panel-white">
                                <div class="panel-body">
                                        <div class="form-group">
                                            <label>Focus Keyword</label>
                                            <input type="text" name="keyword_focus" class="form-control" placeholder="Focus Keyword">
                                        </div>
                                        <div class="form-group">
                                            <label>Meta Description</label>
                                            <textarea name="description" cols="6" rows="6" class="form-control" placeholder="Meta Description (auto-generated if empty)"></textarea>
                                        </div>
                                </div>
                            </div>

                        </div>

                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

        <script src="<?php echo base_url().'assets/plugins/summernote/summernote.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/dropify.min.js'?>"></script>
        <script>

            $(document).ready(function(){

                $('#summernote').summernote({
                  height: 590,
                    callbacks: {
                        onImageUpload: function(files) {
                            sendFile(files[0]);
                        }
                    }
                });

                function sendFile(file) {
                    data = new FormData();
                    data.append("file", file);
                    $.ajax({
                        data: data,
                        type: "POST",
                        url: "<?php echo site_url()?>backend/product/upload_image",
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(url) {
                            $('#summernote').summernote('insertImage', url);
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

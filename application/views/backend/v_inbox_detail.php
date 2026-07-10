                <div id="main-wrapper">
                    <div class="row m-t-md">
                        <div class="col-md-12">
                            <div class="row mailbox-header">
                                <div class="col-md-8">
                                    <h2>View Message</h2>
                                </div>
                                <div class="col-md-4">
                                    <form action="<?php echo site_url('backend/inbox/result');?>" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search_query" class="form-control input-search" placeholder="Search..." required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div><!-- Input Group -->
                                    </form>
                               </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mailbox-content">
                                <div class="message-header">
                                    <h3><span>Subject:</span> <?php echo $subject;?></h3>
                                    <p class="message-date"><?php echo date('d M Y H:i:s',strtotime($date));?></p>
                                </div>
                                <div class="message-sender">
                                    <img src="<?php echo base_url().'assets/images/user_blank.png'?>" alt="">
                                    <p><?php echo $name;?> <span>&lt;<?php echo $email;?>&gt;</span></p>
                                </div>
                                <div class="message-content">
                                    <p><?php echo $message;?></p>
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->

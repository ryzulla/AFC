<div id="main-wrapper">
    <div class="row m-t-md">
        <div class="col-md-12">
            <div class="row mailbox-header">
                <div class="col-md-6">
                    <h2>IP Blocker</h2>
                </div>
                <div class="col-md-4 col-md-offset-2 text-right">
                    <span class="label label-info">Total: <?php echo $total; ?> blocked</span>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="mailbox-content">
                <?php echo $this->session->flashdata('msg');?>
                <div class="row" style="padding: 10px 0;">
                    <div class="col-md-12 text-right">
                        <div class="btn-group">
                            <?php echo $pagination;?>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>IP Address</th>
                            <th>Attempts</th>
                            <th>Reason</th>
                            <th>Blocked At</th>
                            <th>Expires At</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($data->num_rows() == 0):?>
                        <tr><td colspan="7" class="text-center">No blocked IPs</td></tr>
                        <?php endif;?>
                        <?php foreach($data->result() as $row):?>
                        <tr>
                            <td><code><?php echo $row->ip_address;?></code></td>
                            <td><?php echo $row->attempts;?></td>
                            <td><?php echo htmlspecialchars($row->reason, ENT_QUOTES);?></td>
                            <td><?php echo date('d M Y H:i',strtotime($row->blocked_at));?></td>
                            <td>
                                <?php if ($row->permanent):?>
                                    <span class="label label-danger">Permanent</span>
                                <?php elseif ($row->expires_at):?>
                                    <?php echo date('d M Y H:i',strtotime($row->expires_at));?>
                                <?php else:?>
                                    <span class="label label-default">N/A</span>
                                <?php endif;?>
                            </td>
                            <td>
                                <?php if ($row->permanent):?>
                                    <span class="label label-danger">Permanent</span>
                                <?php elseif ($row->expires_at && strtotime($row->expires_at) > time()):?>
                                    <span class="label label-warning">Temporary</span>
                                <?php elseif ($row->expires_at && strtotime($row->expires_at) <= time()):?>
                                    <span class="label label-success">Expired</span>
                                <?php else:?>
                                    <span class="label label-default">Unknown</span>
                                <?php endif;?>
                            </td>
                            <td>
                                <?php if ($this->session->userdata('access')=='1'):?>
                                    <a href="<?php echo site_url('backend/ip_blocker/unblock/'.$row->id);?>" class="btn btn-success btn-xs" title="Unblock" onclick="return confirm('Unblock this IP?')">
                                        <i class="fa fa-unlock"></i> Unblock
                                    </a>
                                    <?php if ($row->permanent):?>
                                        <a href="<?php echo site_url('backend/ip_blocker/make_temporary/'.$row->id);?>" class="btn btn-warning btn-xs" title="Make Temporary" onclick="return confirm('Make this block temporary (1 hour)?')">
                                            <i class="fa fa-clock-o"></i> Temp
                                        </a>
                                    <?php else:?>
                                        <a href="<?php echo site_url('backend/ip_blocker/make_permanent/'.$row->id);?>" class="btn btn-danger btn-xs" title="Permanent Block" onclick="return confirm('Permanently block this IP?')">
                                            <i class="fa fa-ban"></i> Permanent
                                        </a>
                                    <?php endif;?>
                                <?php endif;?>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

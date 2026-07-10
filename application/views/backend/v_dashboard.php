<div class="page-title">
    <h3>Dashboard</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('backend/dashboard');?>">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </div>
</div>
<div id="main-wrapper">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel info-box panel-white">
                <div class="panel-body">
                    <div class="info-box-stats">
                        <p class="counter"><?php echo number_format($all_visitors);?></p>
                        <span class="info-box-title">Unique Visitors</span>
                    </div>
                    <div class="info-box-icon">
                        <i class="icon-users"></i>
                    </div>
                    <div class="info-box-progress">
                        <div class="progress progress-xs progress-squared bs-n">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel info-box panel-white">
                <div class="panel-body">
                    <div class="info-box-stats">
                        <p class="counter"><?php echo number_format($all_post_views);?></p>
                        <span class="info-box-title">Page Views</span>
                    </div>
                    <div class="info-box-icon">
                        <i class="icon-eye"></i>
                    </div>
                    <div class="info-box-progress">
                        <div class="progress progress-xs progress-squared bs-n">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel info-box panel-white">
                <div class="panel-body">
                    <div class="info-box-stats">
                        <p><span class="counter"><?php echo number_format($all_posts);?></span></p>
                        <span class="info-box-title">All Posts</span>
                    </div>
                    <div class="info-box-icon">
                        <i class="icon-pencil"></i>
                    </div>
                    <div class="info-box-progress">
                        <div class="progress progress-xs progress-squared bs-n">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel info-box panel-white">
                <div class="panel-body">
                    <div class="info-box-stats">
                        <p class="counter"><?php echo number_format($all_comments);?></p>
                        <span class="info-box-title">Comments Received</span>
                    </div>
                    <div class="info-box-icon">
                        <i class="icon-bubbles"></i>
                    </div>
                    <div class="info-box-progress">
                        <div class="progress progress-xs progress-squared bs-n">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="panel panel-white">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="visitors-chart">
                            <div class="panel-heading">
                                <h4 class="panel-title">Visitors This Month</h4>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <canvas id="canvas"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="stats-info">
                            <div class="panel-heading">
                                <h4 class="panel-title">Browser Stats</h4>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li>Google Chrome<div class="text-success pull-right"><?php echo number_format($chrome_visitor,2);?>%</div></li>
                                    <li>Firefox<div class="text-success pull-right"><?php echo number_format($firefox_visitor,2);?>%</div></li>
                                    <li>Internet Explorer<div class="text-success pull-right"><?php echo number_format($explorer_visitor,2);?>%</div></li>
                                    <li>Safari<div class="text-success pull-right"><?php echo number_format($safari_visitor,2);?>%</div></li>
                                    <li>Opera<div class="text-success pull-right"><?php echo number_format($opera_visitor,2);?>%</div></li>
                                    <li>Robots<div class="text-success pull-right"><?php echo number_format($robot_visitor,2);?>%</div></li>
                                    <li>Others<div class="text-success pull-right"><?php echo number_format($other_visitor,2);?>%</div></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h4 class="panel-title">Top 5 Articles</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive project-stats">  
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>#</th>
                                   <th>Post Title</th>
                                   <th style="text-align: right;">Views</th>
                               </tr>
                           </thead>
                           <tbody>
                            <?php
                                $no=0;
                                foreach ($top_five_articles->result() as $row) :
                                    $no++;
                            ?>
                               <tr>
                                   <th scope="row"><?php echo $no;?></th>
                                   <td><?php echo $row->post_title;?></td>
                                   <td style="text-align: right;"><?php echo number_format($row->post_views);?></td>
                               </tr>
                            <?php endforeach;?>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url().'assets/plugins/jquery-blockui/jquery.blockui.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/classie.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/main.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/main.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/waypoints/jquery.waypoints.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery-counterup/jquery.counterup.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/toastr/toastr.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.time.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.symbol.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.resize.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/flot/jquery.flot.tooltip.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/chartsjs/Chart.min.js'?>"></script>

<script>
    $(document).ready(function(){
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });

        var myLine = document.getElementById("canvas").getContext("2d");
        var lineChartData = {
            labels : <?php echo $month;?>,
            datasets : [
                {
                    fillColor: "rgba(34,186,160,0.2)",
                    strokeColor: "rgba(34,186,160,1)",
                    pointColor: "rgba(34,186,160,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(18,175,203,1)",
                    data : <?php echo $value;?>
                }
            ]
        }

        var canvas = new Chart(myLine).Line(lineChartData, {
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.05)",
            scaleGridLineWidth : 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve : true,
            bezierCurveTension : 0.4,
            pointDot : true,
            pointDotRadius : 4,
            pointDotStrokeWidth : 1,
            pointHitDetectionRadius : 2,
            datasetStroke : true,
            tooltipCornerRadius: 2,
            datasetStrokeWidth : 2,
            datasetFill : true,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });
    });
</script>

<?php
foreach ($data as $data) {
    $jumlah_data[] = $data->jumlah_data;
   // $total_beli[] = $data->total_beli;
}
?>
<div class="row">
    <div class="span12">
        <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
                <h3>Grafik Pendaftaran</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">

                <div class="col-mdFXF-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Site Traffic Overview
                            <ul class="pull-right panel-settings panel-button-tab-right">
                                <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                                        <em class="fa fa-cogs"></em>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <ul class="dropdown-settings">
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 1
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 2
                                                    </a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">
                                                        <em class="fa fa-cog"></em> Settings 3
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class="pull-right clickable panel-toggle panel-button-tab-left">
                                <em class="fa fa-toggle-up"></em></span></div>
                        <div class="panel-body">

                            <div class="canvas-wrapper">
                                <canvas id="myChart" height="200" width="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <br>


            </div>
        </div>
        <!-- /widget -->

        <!-- /widget -->

        <!-- /span6 --> 
    </div>
    <!-- /row --> 
</div>

<script src="<?php echo base_url() ?>assets/Chart.min.js"></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        data: {
            labels:<?php echo json_encode($jumlah_data) ?>,
            datasets: [{
                    label: "Grafik Laporan Pendaftaran",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data:<?php echo json_encode($jumlah_data) ?>,
                }]

        },
        options: {
            layout: {
                padding: {
                    left: 50,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }


        }
 });

</script>
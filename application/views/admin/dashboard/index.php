<body class="off-canvas hide-extras">
<h2>Site Statistics</h2>
<script type="text/javascript" src="<?php echo site_url('js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Monthly Statistics'
            },
            subtitle: {
                text: 'Login, Signup'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Person'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Login',
                data: <?php echo $login; ?>
    
            }, {
                name: 'Signup',
                data: <?php echo $monthly; ?>
    
            }, {
                name: 'Exam Finishers',
                data: <?php echo $exams; ?>
    
            }]
        });
    });
</script>

<script type="text/javascript" src="<?php echo site_url('js/highcharts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('js/modules/exporting.js'); ?>"></script>
<!-- <div class="row">
<div class="large-12 columns"> -->
<?php //var_dump($this->session->userdata);?>
  <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<!-- </div>
</div> -->
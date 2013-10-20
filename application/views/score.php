
<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
<script>
    $('#nav_modules').addClass("active");
</script>
<div class="large-6 columns">

    <?php if ($error_exist) {
      echo '<div class="row">';
        echo '<div class="large-12 columns">';
          echo '<div class="panel radius">';
            echo '<h2>NOTICE</h2>';
            echo '<h4>You have already submitted your answers for that subject!</h4>';
          echo '</div>';
        echo '</div>';
      echo '</div>';
    }
    ?>

    <div class="row">
      <div class="large-12 columns">
        <div class="panel radius">
            <h2>Results</h2>
            <table style="width:100%">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Total<br/>Questions</th>
                        <th>Correct<br/>Answers</th>
                        <th>Incorrect<br/>Answers</th>
                        <th>Omitted<br/>Answers</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        //var_dump($this->session->userdata['omit']);
                        $score_total = 0;
                        $omit_total = 0;
                        $hardcode = array(30,30,25,15);
                        for ($i=0;$i<4;$i++) {
                            $score_total+=$score[$i];
                            $omit_total+=$omits[$i];
                            echo '<tr>';
                            echo '<td><strong>';
                            if ($i==0) echo 'Science';
                            elseif ($i==1) echo 'Mathematics';
                            elseif ($i==2) echo 'English';
                            elseif ($i==3) echo 'Reading Comprehension';
                            echo '</strong></td>';
                            // START HARDCODE
                            echo '<td>';
                            echo $hardcode[$i];
                            echo '</td>';
                            // END HARDCODE
                            echo '<td>'.$score[$i].'</td>';

                            // START HARDCODE
                            echo '<td>';
                            echo (($hardcode[$i])-($score[$i]+$omits[$i]));
                            echo '</td>';
                            // END HARDCODE
                            echo '<td>'.$omits[$i].'</td>';
                            echo '</tr>';
                        }
                        echo '<tr>';
                        echo '<td><strong>TOTAL</strong></td>';
                        echo '<td>100</td>';// LE HARDCODE
                        echo '<td>'.$score_total.'</td>';
                        echo '<td>'.(100-($score_total+$omit_total)).'</td>'; // LE HARDCODE
                        echo '<td>'.$omit_total.'</td>';
                        echo '</tr>'

                    ?>
                </tbody>
            </table>
            <a class="button radius alert" href="review">Review Answers</a></li>
            <a class="button radius success" href="site">Back to Home</a></li>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="<?php echo site_url('js/jquery.min.js'); ?>"></script>
    <script type="text/javascript">
    $(function () {
    $('#container').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                backgroundColor:'rgba(255, 255, 255, 0)'
            },
            title: {
                text: 'Performance Chart',
                 style:{
                    fontSize: '25px'
                },
            },
            subtitle: {
                text: 'Hover to the Pie to know more',
                style:{
                    fontSize: '15px'
                }
            },
            tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Performance Breakdown',
                data: [
                    {
                        name: 'Science',
                        y: <?php echo ($score[0]/($correct > 0 ? $correct : 1))*100; ?>,
                    },
                    {
                        name: 'Mathematics', 
                        y: <?php echo ($score[1]/($correct > 0 ? $correct : 1))*100; ?>,
                    },
                    {
                        name: 'English',
                        y: <?php echo ($score[2]/($correct > 0 ? $correct : 1))*100; ?>,
                    },
                    {
                        name: 'Reading Comprehension', 
                        y: <?php echo ($score[3]/($correct > 0 ? $correct : 1))*100; ?>,
                    }
                ]
            }]
        });
    });
    </script>
    <script type="text/javascript" src="<?php echo site_url('js/highcharts.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo site_url('js/modules/exporting.js'); ?>"></script>
    <div id="container" style="width: 600px; height: 400px; margin: 0 auto"></div>
    
</div>
</div>



<?php $this->load->view('includes/footer');?>
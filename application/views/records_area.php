<body class="off-canvas hide-extras">

<?php $this->load->view('includes/header');?>
<?php $this->load->view('navigation');?>
  <script>
    $('#nav_records').addClass('active');
  </script>
  <div class="large-6 columns">
    <div class="panel radius">
      <h2>Track Record</h2>
      <div class="row">
        <div class="large-12 columns"> 
          <div class="panel radius" style="background-color:#fff">
            <h4 class="normalize">Overall Scores</h4>
            <?php
              if($scores != null){
                foreach($scores as $score){
                  // echo '<div class="panel score" title="';
                  // echo $score;
                  // echo '/100">';
                  // echo "</div>";
                  echo '<span data-tooltip class="has-tip" title="';
                  echo $score;
                  echo '/100';
                  echo '">';

                  echo '<div class="panel score level';
                  $percentage=$score/100;
                  if ($percentage<0.20) echo '1';
                  elseif ($percentage<0.40) echo '2';
                  elseif ($percentage<0.60) echo '3';
                  elseif ($percentage<0.80) echo '4';
                  else echo '5';
                  echo '"></div>';

                  echo '</span>';
                }
              }
              else echo '<h5>No results to display.</h5>';
            ?> 
          </div>
        </div>
      </div>

      <div class="row">
        <div class="large-12 columns"> 
          <div class="panel radius" style="background-color:#fff">
            <h4 class="normalize">Science</h4>
            <?php
              if($scores != null){
                foreach($science as $score){
                  // echo '<div class="panel score" title="';
                  // echo $score;
                  // echo '/100">';
                  // echo "</div>";
                  echo '<span data-tooltip class="has-tip" title="';
                  echo $score;
                  echo '/30';
                  echo '">';

                  echo '<div class="panel score level';
                  $percentage=$score/30;
                  if ($percentage<0.20) echo '1';
                  elseif ($percentage<0.40) echo '2';
                  elseif ($percentage<0.60) echo '3';
                  elseif ($percentage<0.80) echo '4';
                  else echo '5';
                  echo '"></div>';
                  
                  echo '</span>';
                }
              }
              else echo '<h5>No results to display.</h5>';
            ?> 
          </div>
        </div>
      </div> 

      <div class="row">
        <div class="large-12 columns"> 
          <div class="panel radius" style="background-color:#fff">
            <h4 class="normalize">Mathematics</h4>
            <?php
              if($scores != null){
                foreach($mathematics as $score){
                  // echo '<div class="panel score" title="';
                  // echo $score;
                  // echo '/100">';
                  // echo "</div>";
                  echo '<span data-tooltip class="has-tip" title="';
                  echo $score;
                  echo '/30';
                  echo '">';

                  echo '<div class="panel score level';
                  $percentage=$score/100;
                  if ($percentage<0.20) echo '1';
                  elseif ($percentage<0.40) echo '2';
                  elseif ($percentage<0.60) echo '3';
                  elseif ($percentage<0.80) echo '4';
                  else echo '5';
                  echo '"></div>';
                  
                  echo '</span>';
                }
              }
              else echo '<h5>No results to display.</h5>';
            ?> 
          </div>
        </div>
      </div> 

      <div class="row">
        <div class="large-12 columns"> 
          <div class="panel radius" style="background-color:#fff">
            <h4 class="normalize">English</h4>
            <?php
              if($scores != null){
                foreach($english as $score){
                  // echo '<div class="panel score" title="';
                  // echo $score;
                  // echo '/100">';
                  // echo "</div>";
                  echo '<span data-tooltip class="has-tip" title="';
                  echo $score;
                  echo '/25';
                  echo '">';

                  echo '<div class="panel score level';
                  $percentage=$score/100;
                  if ($percentage<0.20) echo '1';
                  elseif ($percentage<0.40) echo '2';
                  elseif ($percentage<0.60) echo '3';
                  elseif ($percentage<0.80) echo '4';
                  else echo '5';
                  echo '"></div>';
                  
                  echo '</span>';
                }
              }
              else echo '<h5>No results to display.</h5>';
            ?> 
          </div>
        </div>
      </div> 

      <div class="row">
        <div class="large-12 columns"> 
          <div class="panel radius" style="background-color:#fff">
            <h4 class="normalize">Reading Comprehension</h4>
            <?php
              if($scores != null){
                foreach($reading_comprehension as $score){
                  // echo '<div class="panel score" title="';
                  // echo $score;
                  // echo '/100">';
                  // echo "</div>";
                  echo '<span data-tooltip class="has-tip" title="';
                  echo $score;
                  echo '/15';
                  echo '">';

                  echo '<div class="panel score level';
                  $percentage=$score/100;
                  if ($percentage<0.20) echo '1';
                  elseif ($percentage<0.40) echo '2';
                  elseif ($percentage<0.60) echo '3';
                  elseif ($percentage<0.80) echo '4';
                  else echo '5';
                  echo '"></div>';
                  
                  echo '</span>';
                }
              }
              else echo '<h5>No results to display.</h5>';
            ?> 
          </div>
        </div>
      </div>    
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
            text: 'Currently Selected: Subject You\'re Best At',
            style:{
                fontSize: '15px',
                color: 'black'
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
                    y: <?php echo $sci; ?>,
                    sliced: <?php echo $sci_select;?>,
                },
                {
                    name: 'Mathematics', 
                    y: <?php echo $math; ?>,
                    sliced: <?php echo $math_select;?>,
                },
                {
                    name: 'English',
                    y: <?php echo $eng; ?>,
                    sliced: <?php echo $eng_select;?>,
                },
                {
                    name: 'Reading Comprehension', 
                    y: <?php echo $compre; ?>,
                    sliced: <?php echo $compre_select;?>,
                }    
            ]
        }]
    });
});
$(function () {
        $('#container1').highcharts({
            chart: {
                type: 'bar',
                backgroundColor:'rgba(255, 255, 255, 0)'
            },
            title: {
                text: 'Performance Percentile',
                style:{
                    fontSize: '25px'
                },
            },
            subtitle: {
                text: 'You scored better than the (%) of the takers',
                style:{
                    fontSize: '15px',
                    color: 'black'
                }
            },
            xAxis: {
                categories: ['Area Selected'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Percentile',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                },
                max: 100
            },
            tooltip: {
                valueSuffix: '% Percentile'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Overall',
                data: [<?php echo $percentile_overall; ?>]
            }, {
                name: 'Science',
                data: [<?php echo $percentile_sci; ?>]
            }, {
                name: 'Mathematics',
                data: <?php echo $percentile_math; ?>
            }, {
                name: 'Language',
                data: <?php echo $percentile_eng; ?>
            }, {
                name: 'Reading Comprehension',
                data: <?php echo $percentile_compre; ?>
            }]
        });
    });
</script>
<script type="text/javascript" src="<?php echo site_url('js/highcharts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('js/modules/exporting.js'); ?>"></script>
<div id="container" style="width: 600px; height: 400px; margin: 0 auto"></div>
</br></br></br>
<div id="container1" style="width: 600px; height: 400px; margin: 0 auto"></div>

<?php $this->load->view('includes/footer');?>
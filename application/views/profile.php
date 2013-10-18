<body class="off-canvas hide-extras">

<script type="text/javascript" src="<?php echo site_url('js/jquery.min.js'); ?>"></script>
<script type="text/javascript">

$(function () {

    // create the chart
    $('#container').highcharts({
        chart: {
            events: {
                selection: function(event) {
                   
                }
            },
            zoomType: 'x'
        },
        title: {
                text: 'Track Progress',
                x: -20, //center
                style:{
                    fontSize: '25px'
                },
            },
            subtitle: {
                text: 'Click the legends on the right to select/deselect a graph',
                x: -20,
                style:{
                    fontSize: '15px'
                }
            },
        xAxis: {
            minPadding: 0.05,
            maxPadding: 0.05
            //categories: []
        },
        yAxis: {
            title: {
                text: 'Total Exam Score(120)'
            },
            alternateGridColor: '#ECF0F1',
            min: 0,
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        plotOptions:{
            line: {
                pointStart: 1
            }
        },
        tooltip: {
            valueSuffix: ' Correct Answer'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Overall Score',
            data: <?php echo $hist;?>,
            
        },{
            name: 'Science',
            data: <?php echo $hist_science; ?>
        },{ 
            name: 'Mathematics',
            data: <?php echo $hist_mathematics; ?>
        },{
            name: 'English',
            data: <?php echo $hist_english; ?>
        },{
            name: 'Reading Comprehension',
            data: <?php echo $hist_reading_comprehension; ?>
        }]
    });

        var chart = $('#container').highcharts();
        
        for(var i = 1; i <= 4; i++){
            chart.series[i].hide();
        }
        // chart.series[0].setData(<?php echo $hist; ?>);
});
</script>

<!--Navigation Bar-->
<?php //var_dump($this->session->userdata['startExam']); ?>
<?php $this->load->view('includes/header');?>
<section class="main">
  <?php $this->load->view('navigation');?>
  <!--Body - Mid-->
  <script>
    $('#nav_profile').addClass('active');
  </script>
  <div class="large-8 columns" style="margin:0px;">
    <!--Header/Title-->
    <!-- <div class="row"style="padding-bottom:10px">
    <div class="row headerNav" id="titleNav">
      <h1 class="white" style="text-shadow: 0px 1px 5px #888888;margin-left:25px;">Feed </h1>
      <strong class="white">Something here.</strong>
    </div></div> -->
    <div class="row">
      <div class="large-8 columns">
        <div class = "panel radius">
          <div class="row" style="padding-top:50px">
            <div class="large-3 columns">
              <div class="panel radius" style="width:120px;height:120px;margin-bottom:0px;background-image: url('img/avatars/<?php echo $this->session->userdata('username');?>.jpg');
    background-position: center center;
    background-size:cover;
    background-repeat: no-repeat;">
                <p>&nbsp;</p>
              </div>
            </div>
            <div class="large-9 columns" style="margin-top:20px">
              <h2 style="margin-bottom:0px" class="white"><?php echo ucfirst($firstname) . " " . ucfirst($lastname); ?></h2>
              <h4 class="white" style="margin-bottom:0px">@<?php echo $this->session->userdata('username'); ?></h4>
              <h6 class="white"><?php echo "member since " . $this->session->userdata['since'];?></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="large-4 columns">
        <div class="panel radius" style="height:170px;background-color:rgba(244,166,16,0.6);margin-bottom:0px;margin-top:20px;padding:8px">
          <div class="row" style="margin-bottom:8px">
            <div class="large-4 medium-4 small-4 columns" style="padding-right:4px">
              <div class="panel" style="background-color: #f6b841;height:46px;margin-bottom:0px">
              </div>
            </div>
            <div class="large-8 medium-8 small-8 columns" style="padding-left:4px">
              <div class="panel" style="background-color: #f6b841;height:46px;margin-bottom:0px">
              </div>
            </div>
          </div>
          <div class="row" style="margin-bottom:8px">
            <div class="large-4 medium-4 small-4 columns" style="padding-right:4px">
              <div class="panel" style="background-color: #f6b841;height:46px;margin-bottom:0px">
              </div>
            </div>
            <div class="large-8 medium-8 small-8 columns" style="padding-left:4px">
              <div class="panel" style="background-color: #f6b841;height:46px;margin-bottom:0px">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-4 medium-4 small-4 columns" style="padding-right:4px">
              <div class="panel" style="background-color: #f6b841;height:46px;margin-bottom:0px">
              </div>
            </div>
            <div class="large-8 medium-8 small-8 columns" style="padding-left:4px">
              <div class="panel" style="background-color: #f6b841;height:46px;margin-bottom:0px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="row">
      <?php
        // var_dump($last_fin);
        if($state == 'Resume Exam') { // paused or in transition, close review
          echo '<div class="large-10 push-1 columns">';
          echo '<div class="panel radius" style="background-color:rgba(52,73,94,0.6)">';
          echo '<div class="row"><div class="large-12" style="text-align:center">';
          echo '<h2 class="white">Continue from where you left off.</h2></div></div>';
          echo '<h4><a class="button radius success expand large" href="';
          if($is_paused || $this->session->userdata['startExam']) echo 'question';
          else echo 'transition';
          echo '" style="margin-bottom:0px"><i class="fi-puzzle"style="margin-right:20px"></i>';
          echo $state.': ';
          //var_dump($this->session->userdata('subject'));
          //var_dump($is_paused);
          //var_dump($this->session->userdata);
          if (($last_fin)=='science')
            echo 'Mathematics';
          elseif (($last_fin)=='mathematics')
            echo 'English';
          elseif (($last_fin)=='english')
            echo 'Reading Comprehension';
          else {
            echo 'Science';
          }
          echo '</a></h4>';
          echo '</div></div>';
        }
        else {
          if(strcmp($last_fin,'reading_comprehension')==0) {// finished, open review
            echo '<div class="large-4 columns">';
            echo '<div class="panel radius" style="background-color:rgba(52,73,94,0.6);margin-top:9px;margin-bottom:10px;">';
            echo '<div class="row"><div class="large-10 push-1">';
            echo '<a style="font-size:200%;margin-bottom:10px;padding-top:25px;padding-bottom:25px;" class="button radius success expand large" href="';
            echo 'review';
            echo '">';
            echo '<i class="fi-check"style="margin-right:10px"></i>';
            echo 'REVIEW';
            echo '</a></div></div>';
            echo '<div class="row"><div class="large-10 push-1" style="text-align:center">';
            echo '<h6 class="subheader white" style="margin:0px !important">your most recently finished exam</h6></div></div>';
            echo '</div></div>';

            echo '<div class="large-8 columns">';
            echo '<div class="panel radius" style="background-color:rgba(52,73,94,0.6)">';
            echo '<div class="row"><div class="large-12" style="text-align:center">';
            echo '<h2 class="white">Let\'s test your knowledge</h2></div></div>';
            echo '<h4><a class="button radius success expand large" href="';
            echo 'guideline';
            echo '" style="margin-bottom:0px"><i class="fi-puzzle"style="margin-right:20px"></i>';
            echo 'Take the exam';
            echo '</a></h4>';
            echo '</div></div>';
          }
          else { // first time, close review
            echo '<div class="large-10 push-1 columns">';
            echo '<div class="panel radius" style="background-color:rgba(52,73,94,0.6)">';
            echo '<div class="row"><div class="large-8 push-3" style="text-align:right">';
            echo '<h2 class="white">Welcome to Intelleq, newbie!</h2></div></div>';
            echo '<h4><a class="button radius success expand large" href="';
            echo 'guideline';
            echo '" style="margin-bottom:0px"><i class="fi-puzzle"style="margin-right:20px"></i>';
            echo 'Take your first exam now';
            echo '</a></h4>';
            echo '</div></div>';
          }
        }
      ?>
    </div>

    <!--Panel - Statistics-->
    <div class="row">
      <div class="large-12 columns">
        <div class="panel radius" style="min-height:445px">
          <div class="row" style="margin-bottom:20px;margin-left:0px">
            <h3>Statistics</h3>
          </div>
          <script type="text/javascript" src="<?php echo site_url('js/highcharts.js'); ?>"></script>
          <script type="text/javascript" src="<?php echo site_url('js/modules/exporting.js'); ?>"></script>
          <div class="row">
            <div class="large-12 columns">
              <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end of Article-->

    <!--Article-->
    <div class="row">
      <div class="large-12 columns">
        <div class="panel radius" style="padding-bottom:0px;background-color:rgba(52,73,94,0.6)">
          <div class="row" style="margin-bottom:20px;margin-left:0px">
            <h3>Recent Activity</h3>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="panel radius article">
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="panel radius article">
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="panel radius article">
                <p>&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end of Article-->
  </div>
    </section>
    </div>

<!--Footer - Site Map-->
<?php $this->load->view('includes/footer');?>


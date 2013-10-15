<body class="off-canvas hide-extras">

<script type="text/javascript" src="<?php echo site_url('js/jquery.min.js'); ?>"></script>
<script type="text/javascript">

$(function () {
        $('#container').highcharts({
            title: {
                text: 'Track Progress',
                x: -20 //center
            },
            subtitle: {
                text: 'Enhance your knowledge',
                x: -20
            },
            xAxis: {
                categories: []
            },
            yAxis: {
                title: {
                    text: 'Total Exam Score(120)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
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
                data: <?php echo $hist; ?>
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
        chart.xAxis[0].setCategories(<?php echo $dates; ?>);
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
              <div class="panel radius" style="width:120px;height:120px;margin-bottom:0px;background-color:#c0392b">
                <p>&nbsp;</p>
              </div>
            </div>
            <div class="large-9 columns" style="margin-top:20px">
              <h2 style="margin-bottom:0px" class="white"><?php echo ucfirst($firstname) . " " . ucfirst($lastname); ?></h2>
              <h4 class="white" style="margin-bottom:0px">@<?php echo ($username); ?></h4>
              <h6 class="white">member since the beginning of time</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="large-4 columns">
        <div class="panel radius" style="height:170px;background-color:#f2a70d;margin-bottom:0px;margin-top:20px;padding:8px">
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
      <div class="large-10 push-1 columns">
        <div class="panel radius" style="background-color:#34495e">
          <div class="row"><div class="large-8 push-3" style="text-align:right"></div></div>
          <h2 class="white">Let's twerk your knowledge.</h2>
          <h4><a class="button radius success expand large" href="transition" style="margin-bottom:0px">Twerk the exam!</a></h4></li>
        </div>
      </div>
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
        <div class="panel radius" style="padding-bottom:0px;background-color:#34495e">
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


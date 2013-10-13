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
	</head>
	<body style="margin-top:45px">
	<?php $this->load->view('includes/header');?>
	<section class="main">
		<?php $this->load->view('navigation');?>
		<script type="text/javascript" src="<?php echo site_url('js/highcharts.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('js/modules/exporting.js'); ?>"></script>
		<div class="large-9 columns">
			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		</div>
	</section>
	<?php $this->load->view('includes/footer');?>

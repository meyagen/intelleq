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

<?php $this->load->view('includes/footer');?>
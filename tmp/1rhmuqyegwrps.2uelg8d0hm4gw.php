    <script type="text/javascript">                                  
        google.charts.load('current', {'packages':['corechart']});        
    </script>
 
    <div class="container quiz-title-class">
        <h3><?php echo $quiz['name']; ?> (<b>ADMIN - Results Graphs</b>)</h3>
        <div class="well">
            <div class="row">
                <div class="col-xs-6"><?php echo date('d M',strtotime($quiz['createdat'])); ?></div>
                <div class="col-xs-3 text-right"><?php echo $quiz['numparticipants']; ?> <i class="fa fa-users fa-lg"></i></div>
                <div class="col-xs-3 text-right">
                    <span class="fb-comments-count" data-href="<?php echo $weburl; ?><?php echo $PATH; ?>"></span> 
                    <i class="fa fa-comments fa-lg"></i> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">                        
                        <p><?php echo $this->raw($quiz['description']); ?></p>                                                                        
                    </div>
                    <div class="col-md-6"><?php if ($quiz['image']): ?>
                        <img class="img-responsive img-rounded" src="<?php echo $BASE; ?>/<?php echo $quiz['image']; ?>">
                        <?php else: ?><img class="img-responsive img-rounded" src="<?php echo $BASE; ?>/app/views/images/logo_300_square.png">
                        <?php endif; ?>
                    </div>
            </div>
        </div> 
    </div>
    <div class="container"> <!-- <?php echo $correctcount = 0; ?>   -->
        
        <?php foreach (($questions?:[]) as $count=>$question): ?>
        
            <div class="row">
                <div class="col-md-6">
                    <!--  <?php echo $currentnumber = $count+1; ?>  -->
                    <h5><?php echo $currentnumber; ?>. <?php echo $this->raw($question['text']); ?></h5> 
                    <?php if ($question['byline']): ?>
                        <small><?php echo $question['byline']; ?></small>                            
                    <?php endif; ?>
                </div>            
                <div class="col-md-6">
                    <!-- <?php echo $currentquestion = 'question'.$currentnumber; ?>  -->
                    
                    The correct answer is: <b><?php echo strtoupper($question['correctanswer']); ?></b>
                    
                   </p>                      
                    <p><?php echo $this->raw($question['answerwriteup']); ?></p>
                    <div class="well">
                        <div id="chart_<?php echo $count; ?>" style="width:100%"> </div>                                    
                          <script type="text/javascript">
                            google.charts.setOnLoadCallback(drawChart<?php echo $count; ?>); 
                            function drawChart<?php echo $count; ?>() {
                                // Create the data table.   
                                var data<?php echo $count; ?> = new google.visualization.DataTable();
                                var data<?php echo $count; ?> = google.visualization.arrayToDataTable([
                                    ['Answer','Votes', { role: 'style' }],                                
                            <?php foreach (($question_results[$count]?:[]) as $j=>$thisresult): ?>
                                // {{ <?php if (strtoupper($thisresult[$currentquestion]) == strtoupper($question['correctanswer'])): ?><?php echo $correct = true; ?><?php else: ?><?php echo $correct = false; ?> <?php endif; ?> }}
                                  ['<?php echo strtoupper($thisresult[$currentquestion]); ?>', <?php echo $thisresult['votes']; ?>,<?php if ($correct): ?>'#1abc9c'<?php else: ?>'red'<?php endif; ?>],
                            <?php endforeach; ?>   
                                    ]);
                                    var options = {'title':'Participant Guesses:',
                                                    titleTextStyle : { fontSize: 16, bold: false },
                                                   'height':200,
                                                    legend: { position: "none" },
                                                    hAxis: { format:'0'},
                                                    backgroundColor: '#f5f5f5' 
                                               };

                                    // Instantiate and draw our chart, passing in some options.
                                    var chart<?php echo $count; ?> = new google.visualization.BarChart(document.getElementById('chart_<?php echo $count; ?>'));
                                    chart<?php echo $count; ?>.draw(data<?php echo $count; ?>, options);
                                  }
                                </script>                                                                             
                    </div>                                                                     
                </div>
                <hr class="bg-silver" style="height:1px" />
            </div>

        <?php endforeach; ?>  
        
    </div>        

    <div class="container">            

        <h4>Reflections &amp; Discussion</h4>
        <div class="conclusion"><?php echo $this->raw($quiz['conclusion']); ?></div>
            
        <div id="chart_distribution" style="width:100%"></div>  
            <script type="text/javascript">
                google.charts.setOnLoadCallback(drawDistribution); 
                function drawDistribution() {
                    // Create the data table.   
                    var distribution = new google.visualization.DataTable();
                    var distribution = google.visualization.arrayToDataTable([
                        ['Score','Number', { role: 'style' }],
                        
                <?php foreach (($distribution?:[]) as $j=>$thisresult): ?>                    
                      ['<?php echo $thisresult["score"]; ?> correct', <?php echo $thisresult['distribution']; ?>,'#1abc9c'],
                <?php endforeach; ?>   
                        ]);
                        var options = {'title':'Results distribution',
                                        titleTextStyle : { fontSize: 14, bold: false },                                       
                                       'height':220,
                                        legend: { position: "none" }, 
                                        hAxis: {title: 'Their Score'},
                                        vAxis: {title: 'Number of People'} ,                                      
                                        backgroundColor: '#f5f5f5' 
                                   };

                        // Instantiate and draw our chart, passing in some options.
                        var distributionChart = new google.visualization.ColumnChart(document.getElementById('chart_distribution'));
                        distributionChart.draw(distribution, options);
                      }
            </script>     
         <hr class="bg-silver" style="height:1px"/>
        <div class="fb-comments" data-href="<?php echo $weburl; ?>/answer/<?php echo $quiz['id']; ?>" data-numposts="10" width="100%"></div>

                                

    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-md-1">
                <i class="fa fa-arrow-left fa-pull-left fa-2x pad20"></i> 
            </div>
            <div class="col-md-4 col-xs-4">
                <p>Previous topic: <a href="http://www.confirm.sg/quiz/4">Fake News Headlines (Feb '17)</a></p> 
            </div>
            <div class="col-xs-2"> 
            </div>
            <div class="col-md-4 col-xs-4">
                <p class="text-right">Next topic: <a href="http://www.confirm.sg/quiz/3">Kaypoh Auntie: Married already ah?</a></p> 
            </div>
            <div class="col-xs-1 col-md-1">
                <i class="fa fa-2x pad20 fa-arrow-right"></i> 
            </div>
        </div>
    </div>

 

    <script>
    function postToFeed() {
    // calling the API ...
        var obj = {
          method: 'feed',
          link: '<?php echo $weburl; ?>/quiz/<?php echo $quiz['id']; ?>',
          description: "I took the '<?php echo $quiz['name']; ?>' quiz and scored <?php echo $correctcount; ?>/10 for the <?php echo $award; ?> award! Can you do better?",
          picture: '<?php echo $weburl; ?>/app/views/images/answer<?php echo $correctcount; ?>.jpg',
          name: 'Confirm? Discover the truth about Singapore, 10 hard questions at a time.'       
          };
          FB.ui(obj);
    }
    </script>


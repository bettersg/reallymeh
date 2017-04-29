

        <div class="container quiz-title-class">
            <h3><?php echo $quiz['name']; ?> (<b>Quiz Results</b>)</h3>
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
                    <div class="col-md-12">
                        <p><?php echo $this->raw($quiz['description']); ?></p>
                    </div>
                </div>
            </div> 
        </div>
        <div class="container"> <!-- <?php echo $correctcount = 0; ?> -->
            
            <?php foreach (($questions?:[]) as $count=>$question): ?>
            
                <div class="row">
                    <div class="col-md-6">
                        <!--  <?php echo $currentnumber = $count+1; ?> -->
                        <h5><?php echo $currentnumber; ?>. <?php echo $this->raw($question['text']); ?></h5> 
                        <?php if ($question['byline']): ?>
                            <small><?php echo $question['byline']; ?></small>                            
                        <?php endif; ?>
                    </div>            
                    <div class="col-md-6">
                        <!-- <?php echo $currentquestion = 'question'.$currentnumber; ?> -->

                        <p>You guessed it was: <b><?php echo strtoupper($quizresults[$currentquestion]); ?></b>                            
                            <?php if (strtoupper($quizresults[$currentquestion]) == strtoupper($question['correctanswer'])): ?>
                                
                                    <span class="answer_correct">CORRECT!</span>
                                    <!-- <?php echo $correctcount = $correctcount +1; ?> -->
                                                            
                                <?php else: ?><span class="answer_wrong">Wrong.</span>
                            <?php endif; ?>
                        </p>
                        <p >The correct answer is: <span class="answer_correct" style="float:none"><?php echo $question['correctanswer']; ?></span></p>  

                        <div class="well">
                            <div id="chart_<?php echo $count; ?>"> </div>                                    
                              <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);                         
                                function drawChart() {
                                    // Create the data table.
                                    var data<?php echo $count; ?> = new google.visualization.DataTable();
                                    data<?php echo $count; ?>.addColumn('string', 'Answer');
                                    data<?php echo $count; ?>.addColumn('number', 'Votes');
                                    data<?php echo $count; ?>.addRows([
                                <?php foreach (($question_results[$count]?:[]) as $j=>$thisresult): ?>
                                      ['<?php echo $thisresult[$currentquestion]; ?>', <?php echo $thisresult['votes']; ?>],
                                <?php endforeach; ?>   
                                        ]);
                                        var options = {'title':'Other People Guessed',
                                                        titleTextStyle : { fontSize: 16, bold: false },
                                                       'width':350,
                                                       'height':170,
                                                        pieSliceText: 'label'
                                                   };

                                        // Instantiate and draw our chart, passing in some options.
                                        var chart<?php echo $count; ?> = new google.visualization.PieChart(document.getElementById('chart_<?php echo $count; ?>'));
                                        chart<?php echo $count; ?>.draw(data<?php echo $count; ?>, options);
                                      }
                                    </script>                                                                             
                        </div>                                                 
                        <p><?php echo $this->raw($question['answerwriteup']); ?></p>
                    </div>
                    <hr class="bg-silver" style="height:1px" />
                </div>

            <?php endforeach; ?>  
            <div class="well text-center col-sm-6 col-sm-offset-3">
               <!--  <?php switch ($correctcount): ?><?php case '10': ?><?php echo $award = 'Mugger Toad'; ?> <?php break; ?><?php case '9': ?><?php echo $award = 'Ultra Nerd'; ?><?php break; ?><?php case '8': ?><?php echo $award = 'Super Nerd'; ?><?php break; ?><?php case '7': ?><?php echo $award = 'Exam Smart'; ?><?php break; ?><?php case '6': ?><?php echo $award = 'Good Attempt'; ?><?php break; ?><?php case '5': ?><?php echo $award = 'Just Passed'; ?><?php break; ?><?php case '4': ?><?php echo $award = 'Almost Can'; ?><?php break; ?><?php case '3': ?><?php echo $award = 'Cannot Make It'; ?><?php break; ?><?php case '2': ?><?php echo $award = 'Alamak'; ?><?php break; ?><?php case '1': ?><?php echo $award = 'Sibei Jialat'; ?><?php break; ?><?php case '0': ?><?php echo $award = 'Sotong King'; ?><?php break; ?><?php endswitch; ?> -->
                <img src="<?php echo $BASE; ?>/app/views/images/answer<?php echo $correctcount; ?>.jpg" width="100%" class="img-rounded img-responsive" />
                <h4>
                <?php echo $correctcount; ?>/10 correct! You have received the <b><?php echo $award; ?></b> award!</h4>
                <button  class="btn btn-primary btn-sm" onclick="postToFeed()">Challenge friends on Facebook!</button>
            </div>              

        </div>        

        <div class="container">            

            <h4>Reflections &amp; Discussion</h4>
            <div class="conclusion"><?php echo $this->raw($quiz['conclusion']); ?></div>
             <hr class="bg-silver" style="height:1px"/>
            <div class="fb-comments" data-href="<?php echo $weburl; ?><?php echo $PATH; ?>" data-numposts="5" width="100%"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-md-1">
                    <i class="fa fa-arrow-left fa-pull-left fa-2x pad20"></i> 
                </div>
                <div class="col-md-4 col-xs-4">
                    <p>Previous topic: How rich are we really?</p> 
                </div>
                <div class="col-xs-2"> 
                </div>
                <div class="col-md-4 col-xs-4">
                    <p class="text-right">Next topic: Internet Mob Justice League</p> 
                </div>
                <div class="col-xs-1 col-md-1">
                    <i class="fa fa-2x pad20 fa-arrow-right"></i> 
                </div>
            </div>
        </div>

    <div class="fb-quote"></div>

    <script>
    function postToFeed() {
    // calling the API ...
        var obj = {
          method: 'feed',
          link: '<?php echo $weburl; ?>quiz/<?php echo $quiz['id']; ?>',
          description: "I took the <?php echo $quiz['name']; ?> quiz and scored <?php echo $correctcount; ?>/10 for the <?php echo $award; ?> award! Can you do better?",
          picture: '<?php echo $weburl; ?>app/views/images/answer<?php echo $correctcount; ?>.jpg',
          name: 'Confirm? Discover the truth about Singapore, 10 hard questions at a time.'       
          };
          FB.ui(obj);
    }
    </script>


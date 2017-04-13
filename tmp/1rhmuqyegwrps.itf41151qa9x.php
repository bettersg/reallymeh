
        <div class="container quiz-title-class">
            <h3><?php echo $quiz['name']; ?> (<b>Quiz Results</b>)</h3>
            <div class="well">
                <div class="row">
                    <div class="col-xs-6"><?php echo date('d M',strtotime($quiz['createdat'])); ?></div>
                    <div class="col-xs-3 text-right"><?php echo $quiz['numparticipants']; ?> <i class="fa fa-users fa-lg"></i></div>
                    <div class="col-xs-3 text-right">
                        <span class="fb-comments-count" data-href="http://www.gauravkeerthi.com/reallymeh/quiz/<?php echo $eachquiz['id']; ?>"></span> 
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

                        <p>You guessed it was: <b><?php echo $quizresults[$currentquestion]; ?></b>                            
                            <?php if ($quizresults[$currentquestion] == $question['correctanswer']): ?>
                                
                                    <span class="answer_correct">CORRECT!</span>
                                    <!-- <?php echo $correctcount = $correctcount +1; ?> -->
                                                            
                                <?php else: ?><span class="answer_wrong">Wrong.</span>
                            <?php endif; ?>
                        </p>
                        
                            <div class="well">
                            Other people guessed:  <br/>                            
                            <?php foreach (($question_results[$count]?:[]) as $j=>$thisresult): ?>
                                The option <b><?php echo $thisresult[$currentquestion]; ?></b> received <b><?php echo $thisresult['votes']; ?></b> votes <br/>
                            <?php endforeach; ?> 
                            </div>   
                            
                        
                        <p >The correct answer is: <span class="answer_correct" style="float:none"><?php echo $question['correctanswer']; ?></span></p>                        
                        <p><?php echo $this->raw($question['answerwriteup']); ?></p>
                    </div>
                    <hr class="bg-silver" style="height:1px" />
                </div>

            <?php endforeach; ?>  
            <div class="well text-center col-sm-6 col-sm-offset-3">
                <img src="<?php echo $BASE; ?>/app/views/images/answer<?php echo $correctcount; ?>.jpg" width="100%" class="img-rounded img-responsive" />
                <h4>
                <?php echo $correctcount; ?>/10 correct! You have received the 
                    <b><?php switch ($correctcount): ?><?php case '10': ?>Champion Nerd<?php break; ?><?php case '9': ?>Ultra Nerd<?php break; ?><?php case '8': ?>Super Nerd<?php break; ?><?php case '7': ?>Exam Smart<?php break; ?><?php case '6': ?>Good Attempt<?php break; ?><?php case '5': ?>Just Passed<?php break; ?><?php case '4': ?>Almost Can<?php break; ?><?php case '3': ?>Alamak<?php break; ?><?php case '2': ?>Alamak<?php break; ?><?php case '1': ?>Jialat<?php break; ?><?php case '0': ?>Blur Sotong King<?php break; ?><?php endswitch; ?></b>
                award!</h4>
            </div>              

        </div>
        <div class="container">
            <hr class="bg-silver" />
            <h4>Reflections &amp; Discussion</h4>
            <div class="fb-comments" data-href="https://reallymeh.herokuapp.com<?php echo $PATH; ?>" data-numposts="5" width="100%"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-md-1">
                    <i class="fa fa-arrow-left fa-pull-left fa-2x pad20"></i> 
                </div>
                <div class="col-md-4 col-xs-4">
                    <p>Previous topic: Income Inequality</p> 
                </div>
                <div class="col-xs-1"> 
</div>
                <div class="col-md-4 col-xs-4">
                    <p class="text-right">Next topic: Malnutrition</p> 
                </div>
                <div class="col-xs-1 col-md-1">
                    <i class="fa fa-2x pad20 fa-arrow-right"></i> 
                </div>
            </div>
        </div>
        
    </body>     
</html>

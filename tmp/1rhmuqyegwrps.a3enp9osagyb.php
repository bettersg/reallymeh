
        <nav class="navbar navbar-default" role="navigation"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <a class="navbar-brand aqua" href="#">REALLY, MEH?</a> 
                </div>                 
            </div>             
        </nav>
        <div class="container quiz-title-class">
            <h3><?php echo $quiz['name']; ?></h3>
            <div class="well">
                <div class="row">
                    <div class="col-xs-6"><?php echo date('d M',strtotime($quiz['createdat'])); ?>                         
</div>
                    <div class="col-xs-3 text-right">
                        <?php echo $quiz['numparticipants']; ?> 
                        <i class="fa fa-users fa-lg"></i> 
                    </div>
                    <div class="col-xs-3 text-right">
                        <span class="fb-comments-count" data-href="http://www.gauravkeerthi.com/reallymeh/quiz/<?php echo $eachquiz['id']; ?>"></span> 
                        <i class="fa fa-comments fa-lg"></i> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo $quiz['description']; ?></p>
                    </div>
                </div>
            </div>             
        </div>
        <div class="container">
        
        <?php foreach (($questions?:[]) as $count=>$question): ?>
            
        
            <div class="row">
                <div class="col-md-6">
                    <h5><?php echo $count + 1; ?>. <?php echo $question['text']; ?></h5> 
                </div>
                <div class="col-md-6">
                    <select class="form-control bg-silver"> 
                        <?php echo $this->render('options.html',$this->mime,['id'=>$question['id']]+get_defined_vars(),0); ?>                                           
                    </select>                     
                </div>
            </div>

        <?php endforeach; ?>


            
            <hr class="bg-silver" />
        </div>
        <div class="container">
            <div class="well">
                <p>In order to compare your results against other participants, we need to know a little bit about you. We do <b>not</b> require your name, email, or any other personal identification information.</p>
            </div>
            <table class="table"> 
                <tr> 
                    <td class="pad20">Your Gender:</td> 
                    <td>
                        <a class="btn btn-default btn-sm col-xs-5" href="#">Male</a> 
                        <a class="btn btn-default btn-sm col-xs-5 col-xs-push-2" href="#">FEMALE</a> 
                    </td>                     
                </tr>                 
                <tr> 
                    <td class="pad20">Your Age:</td> 
                    <td>
                        <select class="form-control bg-silver"> 
                            <option>&lt; 20</option>                             
                            <option>20s</option>                             
                            <option>30s</option>                             
                            <option>40s</option>
                            <option>50s</option>
                            <option>60s</option>
                            <option>&gt; 70</option>
                        </select>
                    </td>                     
                </tr>
                <tr> 
                    <td class="pad20">Your Race:</td> 
                    <td>
                        <select class="form-control bg-silver"> 
                            <option>Chinese</option>                             
                            <option>Indian</option>                             
                            <option>Malay</option>                             
                            <option>Other</option>                             
                        </select>
                    </td>                     
                </tr>
                <tr> 
                    <td class="pad20">Your Religion:</td> 
                    <td>
                        <select class="form-control bg-silver"> 
                            <option>Christian</option>                             
                            <option>Hindu</option>                             
                            <option>Buddhist</option>                             
                            <option>Muslim</option>                             
                        </select>
                    </td>                     
                </tr>                 
                <tr> 
                    <td class="pad20">Your Location:</td> 
                    <td class="pad20">Singapore</td> 
                </tr>                 
            </table>
            <a class="btn btn-primary btn-block" href="answer2.html">Compute results</a>
            <hr class="bg-silver" />
        </div> 
        
    </body>     
</html>

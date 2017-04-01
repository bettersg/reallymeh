

        <nav class="navbar navbar-default" role="navigation"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <a class="navbar-brand aqua" href="/">REALLY, MEH?</a> 
                </div>                 
            </div>             
        </nav>
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
                        <p><?php echo $quiz['description']; ?></p>
                    </div>
                </div>
            </div> 
            <div class="well text-center col-sm-6 col-sm-offset-3">
                <img src="<?php echo $BASE; ?>/app/views/images/blursotong.jpg" width="100%" class="img-rounded img-responsive" />
                <h4>
                Only 4/10 correct! You have received the Blur Sotong King award!</h4>
            </div>              
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>1. What percentage of adults over 21 are married?</h5> 
                </div>
                <div class="col-md-6">
                    <p>You guessed: 13%</p>
                    <p>Average group guess was: 19.2%</p>
                    <select class="form-control"> 
                        <option>OTHER GUESSES:</option>                         
                        <option>Males guessed: 12.5%</option>                         
                        <option>Females guessed: 13%</option>                         
                        <option>Teenagers guessed: 23%</option>                         
                        <option>20s-age guessed: 5%</option>                         
                        <option>..etc</option>                         
                    </select>
                    <h6 class="aqua">The correct answer is: <b>18.1%</b></h6>
                    <small>[Data from Department of Statistics <a href="#">2016 Singapore Census</a>]</small>
                    <hr class="bg-aqua" />
                </div>
            </div>

        </div>
        <div class="container">
            <hr />
            <h4>Reflections &amp; Discussion</h4>
            <div class="fb-comments" data-href="https://gauravkeerthi.com/reallymeh" data-numposts="5" width="100%"></div>
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
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/bskit-scripts.js"></script>
        <section class="content-block-nopad footer-wrap-1-2 bg-deepocean">
            <div class="container footer-1-2">
                <h5 class="white text-center">"Really, meh?" is a non-profit, volunteer-run project. For more information, please contact us.</h5>
                <div class="big-social row">
                    <div class="col-sm-2 col-sm-offset-3 social-item facebook col-xs-3 col-xs-offset-2">
                        <a href="http://facebook.com/"><i class="social-icon fa fa-facebook fa-lg"></i><h6 class="action">Like</h6></a>
                    </div>
                    <div class="col-sm-2 social-item twitter col-xs-3">
                        <a href="http://twitter.com/"><i class="social-icon fa fa-twitter fa-lg"></i><h6 class="action">Follow</h6></a>
                    </div>
                    <div class="col-sm-2 social-item google col-xs-3">
                        <a href="http://plus.google.com/"><i class="social-icon fa fa-envelope-o fa-lg"></i><h6 class="action">Email</h6></a>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </section>         
    </body>     
</html>

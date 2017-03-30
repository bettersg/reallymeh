
        <section id="content-1-1" class="content-block content-1-1 bg-white min-height-300px">
            <div class="container text-center">
                <h1 class="aqua"><a href="/reallymeh">REALLY, MEH?</a></h1>
                <div class="col-sm-8 col-sm-offset-2">
                    <p class="lead">Discover the truth about Singapore, <br>10 hard questions at a time.</p>
                </div>
            </div>
        </section>
        <section id="content-3-7" class="content-block content-3-7">
            <div class="container">
                <div class="col-sm-12">
                    <div class="underlined-title">
                        <h5>"<i>Really, meh?</i>" = Singlish for "<i>Is that a fact?</i>" </h5>
                        <hr>
                        <p>With social media today, we often end up living in echo chambers and filter bubbles that define our perception of the world. With just 10 questions about different topics, discover your own misperceptions and compare them against others and against the real facts (not #alternativefacts). Don't be fooled by fake news. Challenge yourself against the facts here.</p>     

                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <table class="table"> 
                <thead> 
                    <tr> 
                        <th><i class="fa fa-caret-down"></i> Date</th> 
                        <th>Topic</th> 
                        <th><i class="fa fa-users fa-lg"></i></th> 
                        <th><i class="fa fa-comments-o fa-lg"></i></th> 
                    </tr>                     
                </thead>                 
                <tbody> 
                    <?php foreach (($quiz?:[]) as $eachquiz): ?>

                        <tr> 
                            <td>  <?php echo date('d M',strtotime($eachquiz['createdat'])); ?></td> 
                            <td>
                                <a href="<?php echo $BASE; ?>/quiz/<?php echo $eachquiz['id']; ?>"><?php echo $eachquiz['name']; ?></a>
                            </td>                         
                            <td> <?php echo $eachquiz['numparticipants']; ?></td> 
                            <td><span class="fb-comments-count" data-href="http://www.gauravkeerthi.com/reallymeh/quiz/<?php echo $eachquiz['id']; ?>"></span></td> 
                        </tr>

                    <?php endforeach; ?>
                                                    
                </tbody>
            </table>
            <button type="button" class="btn btn-block btn-primary margin-bottom30">LOAD MORE...</button>
        </div>


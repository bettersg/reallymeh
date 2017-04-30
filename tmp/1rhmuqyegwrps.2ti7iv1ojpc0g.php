
        <section id="content-1-1" class="content-block content-1-1 bg-white min-height-300px">
            <div class="container text-center">
                <h1 class="aqua">CON<i>FIRM</i>?</h1>
                <div class="col-sm-8 col-sm-offset-2">
                    <p class="lead">Discover the truth about Singapore, <br>10 hard questions at a time.</p>
                </div>
            </div>
        </section>
        <section id="content-3-7" class="content-block content-3-7">
            <div class="container">
                <div class="col-sm-12">
                    <div class="underlined-title">
                        <h5>"<i>Confirm?</i>" = Singlish for "<i>Is that a fact?</i>" </h5>
                        <hr>
                        <p class="text-left">Not everything you read on the internet is true, and not everything you <i>think</i> you know for sure is correct. Discover your misperceptions, compare your understanding of issues against others, and find out what is real and what are just #fakenews or #alternativefacts. 
                        
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
                            <td><span class="fb-comments-count" data-href="<?php echo $weburl; ?>/answer/<?php echo $eachquiz['id']; ?>"></span></td> 
                        </tr>

                    <?php endforeach; ?>
                                                    
                </tbody>
            </table>
             <hr style="height:1px; background: silver;">
           <!-- <button type="button" disabled class="btn btn-block btn-primary margin-bottom30">LOAD MORE...</button> -->
        </div>

        <section id="content-3-7" class="content-block content-3-7">
            <div class="container">
                <div class="col-md-8">
                    <div class="underlined-title">
                        <p>When in doubt, just follow these simple rules::</p> 
                          <ul class="userguide">
                            <li><b>Blur Sotong's Guide to the Internet</b></li>
                            <li>1. Don't be <b data-toggle="tooltip" title="Singlish: a person who does an idiotic thing">bodoh</b>: not sure, better find out. </li>
                            <li>2. Don't <b>kena bluff</b>: don't anyhow believe everything you read online. </li>
                            <li>3. Don't <b>talkcock</b>: not confirm true, don't spread rumor la.</li>
                        </ul>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <hr>
                    <div class="fb-page" data-href="https://www.facebook.com/confirmsg/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-height="300" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/confirmsg/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/confirmsg/">Confirm.sg</a></blockquote></div>
                </div>
            </div>
        </section>

        <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
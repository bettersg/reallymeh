
        <div class="container quiz-title-class">
            <h1>ADMIN INTERFACE</h1>
            <div class="well"><?php echo $topicCount; ?> Topics Total                
            </div>             
        </div>
        <div class="container">
            <table class="table"> 
                <thead> 
                    <tr> 
                        <th><i class="fa fa-caret-down"></i> Date</th> 
                        <th>Topic</th> 
                        <th><i class="fa fa-users fa-lg"></i></th> 
                        <th> </th> 
                    </tr>                     
                </thead>                 
                <tbody> 
                    <?php foreach (($quiz?:[]) as $eachquiz): ?>

                        <tr> 
                            <td>  <?php echo date('d M',strtotime($eachquiz['createdat'])); ?></td> 
                            <td>
                                <a href="<?php echo $BASE; ?>/admin/editquiz/<?php echo $eachquiz['id']; ?>"><?php echo $eachquiz['name']; ?></a> <small> 
                                <!-- <a href="<?php echo $BASE; ?>/admin/editquestions/<?php echo $eachquiz['id']; ?>">questions</a> | <a href="<?php echo $BASE; ?>/admin/editchoices/<?php echo $eachquiz['id']; ?>">choices</a> | --> <a class="btn btn-sm btn-info" href="<?php echo $BASE; ?>/admin/graph/<?php echo $eachquiz['id']; ?>">graphs</a> </small>  
                            </td>                         
                            <td> <?php echo $eachquiz['numparticipants']; ?></td> 
                            <td> <i class="fa fa-remove fa-lg text-danger"></i> </td> 
                        </tr>

                    <?php endforeach; ?>
                                                    
                </tbody>
            </table>
            <a class="btn btn-primary btn-block margin-bottom30" href="<?php echo $BASE; ?>/admin/insert">Insert New Quiz</a>
    
            <hr class="bg-silver" />
        
        </div>

<pre><?php echo $post; ?></pre>
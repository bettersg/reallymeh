<nav class="navbar navbar-default" role="navigation"> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <a class="navbar-brand aqua" href="#">REALLY, MEH?</a> 
                </div>                 
            </div>             
        </nav>
        <div class="container quiz-title-class">
            <h1>ADMIN INTERFACE</h1>
            <div class="well">## Topics (last topic @DATETIME)
                <br>## Participants (last user @DATETIME)
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
                    <tr> 
                        <td>24 Mar</td> 
                        <td>
                            <a href="<?php echo $BASE; ?>/admin/edit/1">Marriage &amp; Divorce</a>
                        </td>                         
                        <td>13</td> 
                        <td><i class="fa fa-remove fa-lg text-danger"></i></td> 
                    </tr>                     
                    <tr> 
                        <td>24 Mar</td> 
                        <td> 
                            <a href="edit.html">Topic 2</a>
                        </td>                         
                        <td>13</td> 
                        <td><i class="fa fa-remove fa-lg text-danger"></i></td> 
                    </tr>                     
                </tbody>
            </table>
            <a class="btn btn-primary btn-block" href="<?php echo $BASE; ?>/admin/insert">Insert New Quiz</a>
            <hr class="bg-silver" />
        </div>
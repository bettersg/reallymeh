
<div class="container">
    <h3>ADMIN: INSERT</h3>
    <div class="col-md-12 form-group" >
        <form  method="POST" action="<?php echo $BASE; ?>/admin/insert">
            <label class=" col-sm-3 text-right" for="quiz_name">Quiz Name</label>
            <div class="  col-sm-9">
                <input id="quiz_name" type="text" class="form-control" name="name" >
            </div>        

            <label  class=" col-sm-3 text-right" for="editor">Quiz Description</label>
            <div class="col-sm-9">
                <input name="description" type="hidden">
                <div id="editor_description" style="height:200px; margin-bottom: 20px "></div>
            </div>
    

            <?php for ($i=1;$i < 11;$i++): ?>            
                <img src="<?php echo $BASE; ?>/app/views/images/black.jpg" width="100%" height="1px">
                <label class="text-right col-sm-3" for="question<?php echo $i; ?>">Question <?php echo $i; ?></label>
                <div class="controls col-sm-9">
                    <input name="question[<?php echo $i; ?>][text]" id="question<?php echo $i; ?>_text" type="hidden">
                    <div id="editor_<?php echo $i; ?>" style="height:100px; margin-bottom: 20px "></div>
                </div> 
                
                <label class="text-right col-sm-3"  >Q<?php echo $i; ?> Byline</label>
                <div class="controls col-sm-9">
                    <input id="question1_byline " type="text" class="form-control " name="question[<?php echo $i; ?>][byline]">
                </div> 
        
                <label class="text-right col-sm-3"  >Q<?php echo $i; ?> Correct Answer</label>
                <div class="controls col-sm-9">
                    <input   type="text" class="form-control  " name="question[<?php echo $i; ?>][correctanswer]">
                </div>

                <label class="text-right col-sm-3"  >Q<?php echo $i; ?> Answer Writeup</label>
                <div class="controls col-sm-9">
                    <input name="question[<?php echo $i; ?>][answerwriteup]" type="hidden">
                    <div id="editor_answer<?php echo $i; ?>" style="height:100px; margin-bottom: 20px "></div>                    
                </div> 

<!--                <label class="text-right col-sm-3" for="question<?php echo $i; ?>_optiontype">Q<?php echo $i; ?> Option Type</label>
                <div class="controls col-sm-9">
                    <select id="optiontype__prev" class="form-control" data-role="select" selected="selected" name="question<?php echo $i; ?>_optiontype">
                        <option value="100percent">100percent</option>
                        <option value="trueorfalse" selected>trueorfalse</option>
                        <option value="months">months</option>
                        <option value="CUSTOM">CUSTOM</option>
                    </select>
                </div> 
-->


            <?php endfor; ?>
     
        <button class="btn btn-primary btn-block" type="submit">Add this Quiz</button>       
        
        </form>
    </div>
</div>




    <!-- Initialize Quill editor  -->
    <script>
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            [{ list: 'ordered' }],
            ['link', 'image'],
            ['clean']                                         // remove formatting button
            ];

      var quill_description = new Quill('#editor_description', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
      });

      <?php for ($i=1;$i < 11;$i++): ?>    
            var quill_question<?php echo $i; ?> = new Quill('#editor_<?php echo $i; ?>', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
          });
      <?php endfor; ?>

        <?php for ($i=1;$i < 11;$i++): ?>    
            var quill_answer<?php echo $i; ?> = new Quill('#editor_answer<?php echo $i; ?>', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
          });
      <?php endfor; ?>

      var form = document.querySelector('form');
        form.onsubmit = function() {
          // Populate hidden form on submit
          var description = document.querySelector('input[name=description]');
          description.value =  quill_description.container.firstChild.innerHTML;       

          var question = new Array(10);          
          for (var i = 0; i < 10; i++) {
              question[i] = new Array(2);
            };

          <?php for ($i=1;$i < 11;$i++): ?>                  
            // question[<?php echo $i; ?>] = null;
            question[<?php echo $i; ?>][text] = document.getElementById('question<?php echo $i; ?>_text');
            question[<?php echo $i; ?>][text].value =  quill_question<?php echo $i; ?>.container.firstChild.innerHTML; 
            // console.log(question[<?php echo $i; ?>][text].value)
          <?php endfor; ?>
      }
          
    </script> 
    </div>


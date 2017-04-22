
<div class="container">
    <h3>ADMIN: INSERT</h3>
    <div class="col-md-12 form-group" >
        <form  method="POST" action="<?php echo $BASE; ?>/admin/insert" enctype="multipart/form-data">
            <label class=" col-sm-3 text-right" for="quiz_name">Quiz Name</label>
            <div class="  col-sm-9">
                <input id="quiz_name" type="text" class="form-control" name="name" >
            </div>        

            <label  class=" col-sm-3 text-right" for="editor">Quiz Description</label>
            <div class="col-sm-9">
                <input name="description" type="hidden">
                <div id="editor_description" style="height:200px; margin-bottom: 20px "></div>
            </div>

            <label  class=" col-sm-3 text-right" for="editor">Quiz Description</label>
            <div class="col-sm-9">
                <input type="file" id="quiz_image" name="image" />
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
                    <input name="question[<?php echo $i; ?>][answerwriteup]" id="question<?php echo $i; ?>_answerwriteup" type="hidden">
                    <div id="editor_answer<?php echo $i; ?>" style="height:100px; margin-bottom: 20px "></div>                    
                </div> 

                <label class="text-right col-sm-3" for="question<?php echo $i; ?>_optiontype">Q<?php echo $i; ?> Option Type</label>
                <div class="controls col-sm-9">
                    <select id="question<?php echo $i; ?>_optiontype" class="form-control" data-role="select"  name="question[<?php echo $i; ?>][optiontype]">
                        <option value="100percent">100percent</option>
                        <option value="trueorfalse" selected>trueorfalse</option>
                        <option value="realorfake" selected>realorfake</option>
                        <option value="months">months</option>
                        <option value="CUSTOM">CUSTOM</option>
                    </select>                    
                </div> 

                <label class="text-right col-sm-3"  >Q<?php echo $i; ?> CUSTOM OPTIONS (only if CUSTOM was selected)</label>
                <div class="controls col-sm-9" id="customoption<?php echo $i; ?>" style="display:none">
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom]"></div>
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom]"></div>
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom]"></div>
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom]"></div>
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom]"></div>
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom]"></div>
                </div>

            <?php endfor; ?>
     
        <button class="btn btn-primary btn-block" type="submit">Add this Quiz</button>       
        
        </form>
    </div>
</div>



    <script>
        <?php for ($i=1;$i < 11;$i++): ?> 
         $(function () {
          $("#question<?php echo $i; ?>_optiontype").change(function() {
            var val = $(this).val();
            if(val === "CUSTOM") {
                $("#customoption<?php echo $i; ?>").show();            
            }
            else {        
                $("#customoption<?php echo $i; ?>").hide();
            }
          });
        });
         <?php endfor; ?>
    </script>

    <script>
    // init the quill

        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            [{ list: 'ordered' }],
            ['link', 'image'],
            ['clean']                                         // remove formatting button
            ];
        
        var Parchment = Quill.import('parchment');
        var Block = Parchment.query('block');
        Block.tagName = 'SPAN';
        // or class NewBlock extends Block {}; NewBlock.tagName = 'DIV';
        Quill.register(Block /* or NewBlock */, true);

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
          // Populate hidden input for quiz description on submit
          var description = document.querySelector('input[name=description]');
          description.value =  quill_description.container.firstChild.innerHTML;       

          <?php for ($i=1;$i < 11;$i++): ?>                  
            // Populate hidden input for question text
            var question = document.getElementById('question<?php echo $i; ?>_text');
            question.value =  quill_question<?php echo $i; ?>.container.firstChild.innerHTML; 
          // Populate hidden input for question answerwriteup
            var answerwriteup = document.getElementById('question<?php echo $i; ?>_answerwriteup');
            answerwriteup.value =  quill_question<?php echo $i; ?>.container.firstChild.innerHTML; 
          <?php endfor; ?>
      }
          


    </script> 
    </div>


<pre><?php echo var_dump($questions); ?></pre>
<div class="container">
    <h3>ADMIN: EDIT</h3>
    <div class="col-md-12 form-group" >
        <form  method="POST" action="<?php echo $BASE; ?>/admin/edit/<?php echo $quiz['id']; ?>" enctype="multipart/form-data">
            <label class=" col-sm-3 text-right" for="quiz_name">Quiz Name</label>
            <div class="  col-sm-9">
                <input id="quiz_name" type="text" class="form-control" name="name" value="<?php echo $quiz['name']; ?>">
            </div>        

            <label  class=" col-sm-3 text-right" for="editor">Quiz Description</label>
            <div class="col-sm-9">
                <textarea name="description"  rows=5 class="form-control"><?php echo $this->raw($quiz['description']); ?></textarea>
                <div id="editor_description" style="height:20px; margin-bottom: 20px "></div>
            </div>

            <label  class=" col-sm-3 text-right" for="editor">Quiz Description</label>
            <div class="col-sm-9">
                <img src="<?php echo $BASE; ?>/<?php echo $quiz['image']; ?>" class="img-responsive">
                <input type="file" id="quiz_image" name="image" />
            </div>
    

             <?php foreach (($questions?:[]) as $i=>$question): ?>       <input  type="hidden" name="question[<?php echo $i; ?>][questionid]"  value="<?php echo $question['id']; ?>">        
                <img src="<?php echo $BASE; ?>/app/views/images/black.jpg" width="100%" height="1px">
                <label class="text-right col-sm-3" for="question<?php echo $i; ?>">Question <?php echo $i+1; ?></label>
                <div class="controls col-sm-9">
                    <textarea name="question[<?php echo $i; ?>][text]" id="question<?php echo $i; ?>_text" rows=5 class="form-control"> <?php echo $this->raw($question['text']); ?> </textarea>
                    <div id="editor_<?php echo $i; ?>" style="height:10px; margin-bottom: 20px "></div>
                </div> 
                
                <label class="text-right col-sm-3"  >Q<?php echo $i+1; ?> Byline</label>
                <div class="controls col-sm-9">
                    <input id="question<?php echo $i; ?>_byline " type="text" class="form-control " name="question[<?php echo $i; ?>][byline]"  value="<?php echo $question['byline']; ?>">
                </div> 
        
                <label class="text-right col-sm-3"  >Q<?php echo $i+1; ?> Correct Answer</label>
                <div class="controls col-sm-9">
                    <input   type="text" class="form-control  " name="question[<?php echo $i; ?>][correctanswer]"  value="<?php echo $question['correctanswer']; ?>" type="hidden">
                </div>

                <label class="text-right col-sm-3"  >Q<?php echo $i+1; ?> Answer Writeup</label>
                <div class="controls col-sm-9">
                    <textarea name="question[<?php echo $i; ?>][answerwriteup]" id="question<?php echo $i; ?>_answerwriteup" rows=5 class="form-control"><?php echo $this->raw($question['answerwriteup']); ?></textarea>
                    <div id="editor_answer<?php echo $i; ?>" style="height:10px; margin-bottom: 20px "></div>                    
                </div> 

                <label class="text-right col-sm-3" for="question<?php echo $i; ?>_optiontype">Q<?php echo $i+1; ?> Option Type: </label>
                <div class="controls col-sm-9">
                    <input  type="hidden" name="question[<?php echo $i; ?>][optionid]"  value="<?php echo $question['options']['0']['id']; ?>"> 
                    <select id="question<?php echo $i; ?>_optiontype" class="form-control" data-role="select"  name="question[<?php echo $i; ?>][optiontype]">                        
                        <option value="100percent" <?php if ($question['options']['0']['optiontype']=='100percent'): ?> selected <?php endif; ?>>100percent</option>
                        <option value="trueorfalse" <?php if ($question['options']['0']['optiontype']=='trueorfalse'): ?> selected <?php endif; ?>>trueorfalse</option>
                        <option value="realorfake" <?php if ($question['options']['0']['optiontype']=='realorfake'): ?> selected <?php endif; ?>>realorfake</option>
                        <option value="months" <?php if ($question['options']['0']['optiontype']=='months'): ?> selected <?php endif; ?>>months</option>
                        <option value="CUSTOM" <?php if ($question['options']['0']['optiontype']=='CUSTOM'): ?> selected <?php endif; ?>>CUSTOM</option>
                    </select>                    
                </div> 

                <label class="text-right col-sm-3"  >Q<?php echo $i+1; ?> CUSTOM OPTIONS (only if CUSTOM was selected)</label>
                <div class="controls col-sm-9" id="customoption<?php echo $i; ?>" <?php if ($question['options']['0']['optiontype']!='CUSTOM'): ?> style="display:none" <?php endif; ?>>
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom][0]" value="<?php echo $question['options']['0']['text']; ?>"></div>
                        <input  type="hidden" name="question[<?php echo $i; ?>][custom][0][id]"  value="<?php echo $question['options']['0']['id']; ?>"> 
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom][1]" value="<?php echo $question['options']['1']['text']; ?>"></div>
                        <input  type="hidden" name="question[<?php echo $i; ?>][custom][0][id]"  value="<?php echo $question['options']['1']['id']; ?>"> 
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom][2]" value="<?php echo $question['options']['2']['text']; ?>"></div>
                        <input  type="hidden" name="question[<?php echo $i; ?>][custom][0][id]"  value="<?php echo $question['options']['2']['id']; ?>"> 
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom][3]" value="<?php echo $question['options']['3']['text']; ?>"></div>
                        <input  type="hidden" name="question[<?php echo $i; ?>][custom][0][id]"  value="<?php echo $question['options']['3']['id']; ?>"> 
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom][4]" value="<?php echo $question['options']['4']['text']; ?>"></div>
                        <input  type="hidden" name="question[<?php echo $i; ?>][custom][0][id]"  value="<?php echo $question['options']['4']['id']; ?>"> 
                    <div class="col-xs-2"><input   type="text" class="form-control  " name="question[<?php echo $i; ?>][custom][5]" value="<?php echo $question['options']['5']['text']; ?>"></div>
                        <input  type="hidden" name="question[<?php echo $i; ?>][custom][0][id]"  value="<?php echo $question['options']['5']['id']; ?>"> 
                </div>

            <?php endforeach; ?>
     
        <button class="btn btn-primary btn-block" type="submit">Submit Changes</button>       
        
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

      <?php for ($i=0;$i < 10;$i++): ?>    
            var quill_question<?php echo $i; ?> = new Quill('#editor_<?php echo $i; ?>', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
          });
      <?php endfor; ?>

        <?php for ($i=0;$i < 10;$i++): ?>    
            var quill_answer<?php echo $i; ?> = new Quill('#editor_answer<?php echo $i; ?>', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
          });
      <?php endfor; ?>

      var form = document.querySelector('form');
       
           quill_description.clipboard.dangerouslyPasteHTML(0, "<?php echo $this->raw($quiz['description']); ?>"); 
          
          <?php for ($i=0;$i < 10;$i++): ?>                  
             quill_question<?php echo $i; ?>.clipboard.dangerouslyPasteHTML(0, "<?php echo $this->raw($questions[$i][text]); ?>"); 
             quill_answer<?php echo $i; ?>.clipboard.dangerouslyPasteHTML(0, "<?php echo $this->raw($questions[$i][answerwriteup]); ?>"); 
          <?php endfor; ?>
     
          


    </script> 
    </div>


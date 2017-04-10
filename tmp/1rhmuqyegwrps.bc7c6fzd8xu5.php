
    <div class="container">
        <h3>ADMIN: INSERT</h3>
        <div class="col-md-12 form-group" >
            <form  method="POST" action="<?php echo $BASE; ?>/admin/insertquestions">
                
                        
               <label class=" col-sm-3 text-right" for="quiz_name">Quiz Name</label>
                    <div class="  col-sm-9">
                    <input id="quiz_name" type="text" class="form-control" name="name" >
                    </div>        
    
                    <label  class=" col-sm-3 text-right" for="editor">Quiz Description</label>
                    <div class="col-sm-9">
                        <input name="description" type="hidden">
                        <div id="editor" style="height:200px; margin-bottom: 20px "></div>
                    </div>
                
                <button class="btn btn-primary btn-block" type="submit">Add this Quiz</button>       
                
            </form>
        </div>
    <!-- Initialize Quill editor <textarea name="description" class="form-control  " rows="5"></textarea> -->
    <script>
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            [{ list: 'ordered' }],
            ['link', 'image'],
            ['clean']                                         // remove formatting button
            ];

      var quill = new Quill('#editor', {
        modules: {
            toolbar: toolbarOptions
        },
        theme: 'snow'
      });

      var form = document.querySelector('form');
        form.onsubmit = function() {
          // Populate hidden form on submit
          var description = document.querySelector('input[name=description]');
          description.value =  quill.container.firstChild.innerHTML;
      }
          
    </script> 
    </div>


<?php
    if( !isset( $_SESSION['username'] ) ) redirect('loginadm');
?>

<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style type="text/css">
            body{
                padding: 50px;
            }
            .hidden{display:none;}
        </style>
        <script src="<?= base_url();?>assets/tinymce/js/tinymce/tinymce.dev.js"></script>
        <script src="<?= base_url();?>assets/tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
        <script src="<?= base_url();?>assets/tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
        <script src="<?= base_url();?>assets/tinymce/js/tinymce/plugins/wordcount/plugin.js"></script>
        <script src="<?= base_url();?>assets/tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    theme: "modern",
    paste_data_images: true,
    plugins: [
      "insertdatetime media table contextmenu paste jbimages",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | jbimages",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    file_picker_callback: function(callback, value, meta) {
      if (meta.filetype == 'image') {
        $('#upload').trigger('click');
        $('#upload').on('change', function() {
          var file = this.files[0];
          var reader = new FileReader();
          reader.onload = function(e) {
            callback(e.target.result, {
              alt: ''
            });
          };
          reader.readAsDataURL(file);
        });
      }
    },
    templates: [{
      title: 'Test template 1',
      content: 'Test 1'
    }, {
      title: 'Test template 2',
      content: 'Test 2'
    }]
  });
</script>
    </head>
    <body>
         <div class="container">


                    <h2 style="margin-top:0px">Artikel <?php echo $button ?></h2>
                    <div class="row">
                      <div class="col-6"><div class="form-group">
                        <label for="varchar">Judul <?php echo form_error('Judul') ?></label>
                        <input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul" value="<?php echo $Judul; ?>" />
                      </div>
                    </div>
                      <div class="col-6">
                          <div class="form-group">
                            <label for="date">Tanggal <?php echo form_error('Tanggal') ?></label>
                            <input type="date" class="form-control" name="Tanggal" id="Tanggal" placeholder="Tanggal" value="<?php echo $Tanggal; ?>" />
                          </div>
                      </div>
                    </div>
            	    <div class="form-group">
                        <label for="longtext">Isi <?php echo form_error('Isi') ?></label>
                        <input name="image" type="file" id="upload" class="hidden" onchange="">
                        <textarea style="height: 500px" class="form-control" name="Isi" id="Isi" placeholder="Isi"><?php echo $Isi; ?></textarea>
                    </div>

            	    <input type="hidden" name="id_news" value="<?php echo $id_news; ?>" /> 
            	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
            	    <a href="<?php echo site_url('artikel') ?>" class="btn btn-default">Cancel</a>
            	</form>



         </div>
    </body>


</html>
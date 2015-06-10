<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery File Upload By Baqir Memon</title>
<meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap styles -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
     <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<!-- Generic page styles -->
<link rel="stylesheet" href="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/css/style.css">
<!-- blueimp Gallery styles -->
<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/css/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/css/jquery.fileupload-ui-noscript.css"></noscript>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-fixed-top .navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://github.com/blueimp/jQuery-File-Upload">Baqir Memon [BM Concepts]</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a  data-toggle="modal" href='#image_resize_modal'>Set Image Resing</a></li>                
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <h1>jQuery File Upload 9.10 Using CodeIgniter 2.1.4</h1>
    <ul class="nav nav-tabs">
        <li class="active"><a href="index.html">File uplaod</a></li>
    </ul>
    <br>
    <blockquote>
        <p>File Upload Using Jquery And CodeIgniter.</p>
    </blockquote>
    <br>
    <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload" action="<?php echo site_url() ?>home/upload_images/" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files...</span>
                    <input type="file" name="userfile" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start upload</span>
                </button>
                <button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
    
</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>


<div class="modal fade" id="image_resize_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Image Resizing Set</h4>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Manage</th>
                                <th>Image Resizing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Manage Ratio</td>
                                <td>
                                        <a href="#" 
                                        id="maintain_ratio_img" 
                                        data-type="select" 
                                        data-name='maintain_ratio' 
                                        data-pk="<?php echo $img_set->id ?>" 
                                        data-url="<?php echo site_url('home/update_image_resizing') ?>"
                                        data-title="Select Ration">
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Manage Thumbnail Size</td>
                                <td><a 
                                    href="#"
                                    data-name='thumbnail' 
                                    class="xeditable" 
                                    data-type="number" 
                                    data-pk="<?php echo $img_set->id; ?>" 
                                    data-url="<?php echo site_url('home/update_image_resizing') ?>" 
                                    data-title="Update Ratio"
                                 ><?php echo $img_set->thumbnail; ?></a>
                                 </td>
                            </tr>
                              <tr>
                                <td>Manage Medium Size</td>
                                <td><a 
                                    href="#"
                                    data-name='medium' 
                                    class="xeditable" 
                                    data-type="number" 
                                    data-pk="<?php echo $img_set->id; ?>" 
                                    data-url="<?php echo site_url('home/update_image_resizing') ?>" 
                                    data-title="Update Ratio"
                                 ><?php echo $img_set->medium; ?></a>
                                 </td>
                            </tr>
                              <tr>
                                <td>Manage Large Size</td>
                                <td><a 
                                    href="#"
                                    data-name='large' 
                                    class="xeditable" 
                                    data-type="number" 
                                    data-pk="<?php echo $img_set->id; ?>" 
                                    data-url="<?php echo site_url('home/update_image_resizing') ?>" 
                                    data-title="Update Ratio"
                                 ><?php echo $img_set->large; ?></a>
                                 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>



<style>
    .img-upload-responsive > img
    {
width: 15%
    }
</style>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade remove_tr" >
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" class="img-upload-responsive" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
           
                <input type="checkbox" name="delete" value="1" class="toggle">
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>



<div class="container">
    <div class="row">
        <?php foreach($images as $image) : ?>
            <div class="col-sm-2 col-md-2 item">
                <div class="thumbnail clearfix">
                  <img src="<?php echo site_url() ?>uploads/<?php echo $image->image; ?>" >
                    <div class="caption">
                        <p class="pull-right">
                        <a href="<?php echo site_url() ?>home/delete/<?php echo $image->id; ?>" class="btn btn-danger btn-mini button-delete-image" ><i class="fa fa-trash-o"></i></a></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

<!-- blueimp Gallery script -->
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="<?php echo site_url() ?>assets/jQuery-File-Upload-9.10.0/js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script>
    $.fn.editable.defaults.mode = 'inline';
    $(".xeditable").editable();
    // delete function
    $(".button-delete-image").on('click', function(e) {
        e.preventDefault();
        var currentLink = $(this);
        $.ajax({
                url: $(this).attr('href'),
                success: function(msg){currentLink.closest('.item').fadeOut('fast').css("background-color", "#F00");}
        });
    });
    // image resize setting
    $(function(){
         $('#maintain_ratio_img').editable({
            value: <?php echo $img_set->maintain_ratio; ?>,    
            source: [

                  {value: 1, text: 'TRUE'},
                  {value: 0, text: 'FALSE'}
               ]
        });
  });
   



</script>
</body>
</html>

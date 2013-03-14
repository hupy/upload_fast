<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>SWFUpload Demos - Simple Demo</title>
<link href="css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="swfupload/swfupload.js"></script>
<script type="text/javascript" src="js/swfupload.queue.js"></script>
<script type="text/javascript" src="js/fileprogress.js"></script>
<script type="text/javascript" src="js/handlers.js"></script>
<script type="text/javascript">
		var swfu;

		window.onload = function() {
			var settings = {
				flash_url : "Flash/SWFUpload.swf",
				upload_url: "http://upd1.ajkimg.com/upload-haozu",
                                img_max_width:640,
                                img_max_size:1,
                                //upload_url:"upload2.php",
                                //upload_url:"http://img1u.soufun.com/upload/rent",
// 
				post_params: {"PHPSESSID" : "<?php echo session_id(); ?>"},
				file_size_limit : "100 MB",
				file_types : "*.*",
                                file_post_name : 'file',
				file_types_description : "All Files",
				file_upload_limit : 100,
				file_queue_limit : 0,
				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel",
                                        encodeProgressTarget:"encodeProgress"
				},
				debug: true,
				// Button settings
				button_image_url: "images/TestImageNoText_65x29.png",
				button_width: "65",
				button_height: "29",
				button_placeholder_id: "spanButtonPlaceHolder",
				button_text: '<span class="theFont">upload</span>',
				button_text_style: ".theFont { font-size: 16; }",
				button_text_left_padding: 12,
				button_text_top_padding: 3,
				
				// The event handler functions are defined in handlers.js
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
                                encode_progress_handler:encodeProgress,
                                encode_success_handler:encodeSuccess,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete,// Queue plugin event
				check_before_select_handler:checkBeforeSelect
			};

			swfu = new SWFUpload(settings);
	     };
	</script>

</head>
<body>
<div id="content">
	
        <div id="encodeProgress" class="fieldset flash">
            <span class="legend">encode Queue</span>
        </div>
	<form id="form1" action="index.php" method="post" enctype="multipart/form-data">
		<p>haozu</p>

			<div class="fieldset flash" id="fsUploadProgress">
                        
			<span class="legend">Upload Queue</span>
			</div>
		<div id="divStatus">0 Files Uploaded</div>
			<div>
				<span id="spanButtonPlaceHolder"></span>
				<input id="btnCancel" type="button" value="Cancel All Uploads" onclick="swfu.cancelQueue();" disabled="disabled" style="margin-left: 2px; font-size: 8pt; height: 29px;" />
				
			</div>

	</form>
</div>
</body>
</html>

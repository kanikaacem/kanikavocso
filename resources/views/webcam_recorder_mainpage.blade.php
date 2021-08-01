<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebCam Recorder</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #mainpageContentHeader{
                background-image: url('webcamImage.jpg');
                height: 300px;
                padding: 0px;
            }
            h1{
                color: white;
                padding-top: 70px;
                padding-left: 300px;
                font-size: 80px;
                font-family: "fangsong";
            }
            small{
                text-align: center;
                color:white;
                font-family: "fangsong";
                padding-left: 500px;
                padding-bottom: 10px;
            }
            iframe{
                 border:1px solid black !important;
            }
        </style>
    
    </head>
    <body>
        <div id="mainpageContentHeader">
            <h1> WEBCAM RECORDER </h1>
            <small> Click the icon below to start the recording </small>
            <div id="videoRecording">
                <button id="start-camera" type="button" class="btn btn-light" style="margin-left:570px; font-family:fangsong;">
                <i class="fa fa-youtube-play" style="font-size:48px;color:red"></i>
                </button>
                
            </div>
        </div>
        
        <div> 
            <h1 style="color:red; font-size:25px; padding-top:10px; padding-left:20px;">Video Recordings</h1>
            <div  class="row">
                <div  class="col" style="padding-left:50px; padding-right:50px;">
                 <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>Video Title</th>
                                <th>Video Preview</th>
                            </tr>
                        </thead>
                        <tbody id="videoRecordings">
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="modal" id="videoRecordingModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Start Recording</h5>
                    <button type="button" class="close" onclick="closeVideoRecordingModal()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <video id="video" width="100%" height="70%" autoplay style="padding:10px;"></video>
                    <button id="start-record" type="button" class="btn btn-primary" style="font-family:fangsong; margin-left:180px;">Start Recording</button>
                    <button id="save-record" type="button" class="btn btn-primary" style="font-family:fangsong; margin-left:200px;">Save</button>
                </div>
                </div>
            </div>
        </div>

        <div class="modal" id="saveVideoModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Save Recording</h5>
                </div>
                <div class="modal-body">
                <form method="post" action="" id="saverecording-form">
						<label><br>
				    		<span >
				    			<input type="text" name="title" id="title" value="" size="45" aria-required="true" aria-invalid="false" placeholder="Your Video Title" required="">
                                <small id="error" style="color:red;"></small>
                            </span>
				    	</label><br>
                        <input type="hidden" name="video_link" id="video_link" value="" size="45">
                    </form><br>
                    <Button type="button" class="btn btn-primary" onclick="saveVideo()" style="margin-left:180px;">Save</button>
                    <!-- <a id="download-video" download="test.webm">Download Video</a> -->
                </div>
                </div>
            </div>
        </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
    
    let camera_button = document.querySelector("#start-camera");
    let video = document.querySelector("#video");
    let start_button = document.querySelector("#start-record");
    let stop_button = document.querySelector("#save-record");
    let download_link = document.querySelector("#download-video");

    let camera_stream = null;
    let media_recorder = null;
    let blobs_recorded = [];

    camera_button.addEventListener('click', async function() {
        camera_stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: true });
        video.srcObject = camera_stream;
        $('#title').val();
        $('#video_link').val();
        $('#start-record').show();
        $('#save-record').hide();
        $('#videoRecordingModal').show();
    });

    start_button.addEventListener('click', function() {
        // set MIME type of recording as video/webm
        media_recorder = new MediaRecorder(camera_stream, { mimeType: 'video/webm' });
        $('#start-record').hide();
        $('#save-record').show();
        // console.log(media_recorder);
        // console.log(media_recorder.state);
        // event : new recorded video blob available 
        media_recorder.addEventListener('dataavailable', function(e) {
            blobs_recorded.push(e.data);
        });
        
        // event : recording stopped & all blobs sent
        media_recorder.addEventListener('stop', function() {
            // create local object URL from the recorded video blobs
            let video_local = URL.createObjectURL(new Blob(blobs_recorded, { type: 'video/webm' }));
            // download_link.href = video_local;
            $('#videoRecordingModal').hide();
            $('#saveVideoModal').show();
            $('#video_link').val(video_local);
            blobs_recorded = [];
            // showrecordingVideo.src = video_local;

        });

        // start recording with each recorded blob having 1 second video
        media_recorder.start(1000);
    });

    stop_button.addEventListener('click', function() {
        media_recorder.stop(); 
    });

    function closeVideoRecordingModal(){
        $('#videoRecordingModal').hide();
    }

    function saveVideo(){
        var title = $('#title').val();
        var videoLink = $('#video_link').val();
        if(title == ""){
            $('#error').html("Please Enter the Title");
        }
        else{
            $.ajax({
            url: "{{url('/save-video')}}",
            type: "POST",
            data: {
                   "_token": "{{ csrf_token() }}",
                   'title' : title,
                   'videoLink' : videoLink
                   },
            dataType: 'json',
            success: function (response)
            { 
              $('#saveVideoModal').hide();
              var tablerow = document.createElement('tr');
              var videotitle = document.createElement('td');
              var  videopreview = document.createElement('td');
              var iframe = document.createElement('iframe');
              iframe.src = response.video_link;
              var heading = document.createElement('h6');
              var text = document.createTextNode(title);
              heading.append(text);
              videotitle.append(heading);
              videopreview.append(iframe)
              tablerow.append(videotitle);
              tablerow.append(videopreview);
              $('#videoRecordings').append(tablerow);

            },
            error: function(err)
            {
            }
          });
        }
      }
</script>
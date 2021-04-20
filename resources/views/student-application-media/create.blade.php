@extends('layouts.app')

@section('page-title','Student Application Media')

@section('head-imports')
    <!-- Dropzone -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js" integrity="sha512-jytq61HY3/eCNwWirBhRofDxujTCMFEiQeTe+kHR4eYLNTXrUq7kY2qQDKOUnsVAKN5XGBJjQ3TvNkIkW/itGw==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" integrity="sha512-zoIoZAaHj0iHEOwZZeQnGqpU8Ph4ki9ptyHZFPe+BmILwqAksvwm27hR9dYH4WXjYY/4/mz8YDBCgVqzc2+BJA==" crossorigin="anonymous" />
@endsection

@section('breadcrumbs')
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Student Application</a></li>
        <li class="breadcrumb-item"><a href="{{ route('students.show',$studentApplication) }}">{{ $studentApplication->fullname() }}</a></li>
        <li class="breadcrumb-item active">Create Media</li>
    </ol>
@endsection

@section('content')
    <!-- File Upload -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">Select Files</h4>
        </div>
        <div class="panel-body">
            <form action="{{ route('students.media.store',$studentApplication) }}" id="dropzoneForm" class="dropzone" style="border-style:dashed" enctype="multipart/form-data">
                @csrf
                <div class="dz-default dz-message">
                    <i class="mdi mdi-cloud-upload-outline mdi-24px"></i>
                    <h4>Drop files here or click to upload.</h4>
                    <p>Accepted file formats: .png, .jpg, .pdf .pdf</p>
                </div>
            </form>
            <div class="mx-auto mt-2">
                <button class="btn btn-block btn-info" id="submit-all">Upload</button>
            </div>
        </div>
    </div>

    <br>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-heading">Uploaded Images</h3>
        </div>

        <div class="panel-body" id="uploaded_images"></div>
    </div>

    <script src="{{ asset('landing/jquery/jquery.min.js') }}"></script>
    
    <script type="text/javascript">
        load_images();

        Dropzone.options.dropzoneForm = {
            autoProcessQueue : false,
            acceptedFiles: ".png, .jpg, .jpeg, .pdf, .jpeg",


            init:function(){
                var submitButton = document.querySelector('#submit-all');
                myDropzone = this;

                submitButton.addEventListener('click', function () {
                    myDropzone.processQueue();
                });

                this.on("complete", function() {
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles.length == 0) {
                        var _this = this;
                        _this.removeAllFiles();

                        alert('Files Uploaded Successfully');

                    }
                    load_images();
                });
            }
        };

        function load_images()
        {
            $.ajax({
                url:"{{ route('students.media.index',$studentApplication) }}",
                success:function(data)
                {
                    $('#uploaded_images').html(data);
                }
            });
        }
    </script>
@endsection
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Upload com Ajax</title>
    <style>
        #recebeFoto{
            float: left;
            margin-top: 30px !important; 
            margin-bottom: 30px !important;
        }

        #recebeFoto .imgRetorno{
            width: 300px;
        }

        .barra{
            display: none;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulário de envio</h1>
        <form id="myForm" > 

            <input class="form-control" type="file" id="photo" name="photo" value="Submit Comment" /> 
        </form>
        <span id="recebeFoto"></span>
        <br>
        <div class="barra">
            <div class="progress" style="">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://malsup.github.com/jquery.form.js"></script> 

<script>

            // wait for the DOM to be loaded 
            $('#photo').change(function(){
                $('#recebeFoto').html('');
                $('.barra').show();
                $('#myForm').ajaxForm({

                    url: 'recebe_upload.php',
                    type: 'post',
                    uploadProgress : function(event,position,total,percentComplete){

                        $('.progress-bar').width(percentComplete+'%');
                        $('.sr-only').html(percentComplete+'%');
                    },
                    success: function (data) {
                        $('.barra').hide();
                        $('#recebeFoto').hide().html("<img class='imgRetorno' src='"+data+"'>").fadeIn(300);

                    }
                }).submit();;
                
            });
        </script> 
    </body>
    </html>

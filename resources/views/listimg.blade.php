<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Hình Ảnh</title>
    <script src="ckeditor.js"></script>
    <style>
        body{
            background: #fcfcfc;
        }
        *{
            margin: 0;
            padding: 0;
        }
        li{
            height: 20em;
            width: 12em;
            border: 1px solid rgb(197, 197, 197);
            border-radius:5px;
            background: white; 
            cursor: pointer;
            display: flex;
            flex-direction: column;
            margin: .7em;
            box-shadow: 3px 3px 5px #ccc;
        }
        li:hover{
            box-shadow: 5px 5px 20px rgba(72, 213, 226, 0.431)
        }
        li .img{
            width: 11em;
            height: 13em;
            overflow: hidden;
            margin: .5em;
        }
        li img{
            width: 100%
        }
        li .p{
            height: 6em;
            width: 11em;
            margin: .5em;
            overflow: hidden;
        }
        li p{
            margin-top:2em;      
            word-break: break-all;
        }
        .list{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin: 2em 1em
        }


    </style>
</head>
<body>
    <div class="list" >
        
    <?php
    
        $paths = glob(public_path('post/*'));
        foreach($paths as $path)
        {
            $url_img = basename($path);
            echo  
           '<li onclick="geturl(`'.$url_img.'`)">
                <div class="img">
                    <img src="post/'.$url_img.'" alt="">
                </div>
                <div class="p">
                    <p>
                    '.$url_img.'
                    </p>
                </div>
                
            </li>';
        }

    ?>
    </div>
    <script>
        function geturl(url)
        {
            let href = this.location.href.split("/");
            href.length--;
            window.opener.CKEDITOR.tools.
            callFunction(<?php echo $_GET['CKEditorFuncNum'] ?>,href.join("/")+'/post/'+url);
            window.close();
        }
    </script>
</body>
</html>
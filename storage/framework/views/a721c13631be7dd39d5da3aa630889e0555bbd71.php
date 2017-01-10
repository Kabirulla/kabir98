<!DOCTYPE html>
<html lang="en">
    <head>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery-2.1.4.js')); ?>">
    </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div style="clear:left;float:left;background-color:#4F4F4F;width:100%;min-height: 100%;min-width:1280px" id="mainDiv">
            <div style='clear:left;float:left;margin-top:10%;'>
                <div style="clear:left;float:left;color:white;margin-left:20px;border-bottom:1px double #00CED1">
                    Hi, my name is Kabir
                </div>
                <div style="clear: left;float:left;margin-left:20px;margin-top:15px;">
                    <div style="clear: left;float:left">
                        <div style="clear:left;float:left;font-size:150%;color:white;">
                            <a href="<?php echo e(route('contactView')); ?>" style="text-decoration:none;color:white">Contact</a>
                        </div>
                    </div>
                    <div style="clear: left;float:left;margin-top:10px">
                        <div style="clear:left;float:left;font-size:150%;color:white;">
                           Projects
                        </div>
                        <?php $__currentLoopData = $phpKnowledges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $knowledges): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <div style="clear:left;float:left;margin-left:10px;font-size:120%;margin-top:10px;color:white;">
                                <a href="<?php echo e(route('phpView',['id'=>$knowledges->id])); ?>" style="text-decoration:none;color:white"><?php echo e($knowledges->name); ?></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>
                    <div style="clear: left;float:left;margin-top:10px">
                        <div style="clear:left;float:left;font-size:150%;color:white;">
                           <a href="<?php echo e(route('indexView')); ?>" style="text-decoration:none;color:white">About</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function () {
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                  alert("1");
               }
            });
        });
    </script>
</html>
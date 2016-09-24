<?php require_once ( __DIR__ . '/helper_functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bootstrap 3, from LayoutIt!</title>

        <meta name="description" content="Source code generated using layoutit.com">
        <meta name="author" content="LayoutIt!">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        Student Registration Form
                    </h3>



                    <form class="form-horizontal">
                        <fieldset>
                            <div id="legend" class="">
                                <legend class="">Form Name</legend>
                            </div>
                            <div class="form-group">

                                <!-- Text input-->
                                <label class="col-md-4 control-label" for="input01">Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="" class="form-control input-md">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="form-group">

                                <!-- Select Basic -->
                                <label class="col-md-4 control-label">Class</label>
                                <div class="col-md-4">
                                    <select class="form-control input-md">
                                        <option>Enter</option>
                                        <option>Your</option>
                                        <option>Options</option>
                                        <option>Here!</option></select>
                                </div>

                            </div>


                            <div class="form-group">

                                <!-- Select Basic -->
                                <label class="col-md-4 control-label">DOB</label>
                                <div class='col-md-8'>
                                    <div class="col-md-2">
                                        <select name="day" class="form-control input-md">
                                            <option>DD</option>
                                            <?php echo dropdown(1, 31); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <select class="form-control input-md">
                                            <option>MM</option>
                                            <?php echo dropdown(1, 12); ?>
                                        </select>  
                                    </div>    


                                    <div class="col-md-2">
                                        <select class="form-control input-md">
                                            <option>YYYY</option>
                                            <?php echo dropdown(1990, 2000,1,1997); ?>
                                        </select>  
                                    </div> 




                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Subjects</label>
                                <div class="col-md-4">
                                    <?php echo subjects( [1,2]); ?>
                                </div>

                            </div>

                            <div class="form-group">

                                <!-- Textarea -->
                                <label class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <div class="textarea">
                                        <textarea class="form-control"> </textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">

                                <!-- Select Basic -->
                                <label class="col-md-4 control-label">Department</label>
                                <div class="col-md-4">
                                    <select class="form-control input-md">
                                        <option>Enter</option>
                                        <option>Your</option>
                                        <option>Options</option>
                                        <option>Here!</option></select>
                                </div>

                            </div>

                        </fieldset>
                    </form>

                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
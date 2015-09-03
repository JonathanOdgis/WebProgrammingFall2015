<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap Practice</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        
    </head>

    <body>
        <div class = "container">
            <div class = "row">
                <div class = "col-sm-8">
                    <h1> Important Table </h1>
                    <a href="#" class = "btn btn-success"> 
                        <i class = "glyphicon glyphicon-plus"> </i>
                    New Record</a>
                    <a href="#" class = "btn btn-danger"> 
                        <i class = "glyphicon glyphicon-trash"> </i>
                    Delete All</a>                    
                    <table class = "table table-hover">
                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Occupation </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Walt </td>
                                <td> Teacher</td>
                            </tr>
                            <tr>
                                <td> James </td>
                                <td> Lawyer </td>
                            </tr>
                            <tr>
                                <td> Rick </td>
                                <td> Scientist </td>
                            </tr>
                        </tbody>
                    </table>                        
                </div>
            </div>    
 
             <div class = "row">
                <div class = "col-sm-8">
                    <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> Thank you for coming to Title of a Website.com
                    </div>
        
                    <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%"> 50% </div>
                    </div>                        
                </div>
            </div>
 



                <div class = "col-sm-4">
                    <h1> Ha </h1>
                </div>                
        </div>


        </div>
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
        <script type = "text/javascript">
            $(".progress").animate({width:"75%"}, 2000);
        </script>
    </body>
</html>
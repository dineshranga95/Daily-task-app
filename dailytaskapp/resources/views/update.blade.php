<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">            
</head>
<body>
<div class="container">
    <br><br>
    <div class="row">
        <div class="col-md-12 text-center">
            <form action="/updatedata" method="post">
            {{csrf_field()}}
        <input type="text" name="task" class="form-control" value="{{$task->task}}"> <br>
        <input type="hidden" name="id" value="{{$task->id}} ">
        <input type="submit" class="btn btn-success" value="update">&nbsp;&nbsp;
        <input type="submit" class="btn btn-success" value="cancel">
        </form></div>
        
</div>
    
</div>
</body>
</html>
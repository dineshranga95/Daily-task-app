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
    <div class="container text-center">
        <h1>task app</h1>
        <br><br>
        <div class="row">
            <div class="col-md-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
                <form action="/savetask" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="task" placeholder="Enter task here">
                <br>
                <input type="submit" class="btn btn-primary" value="save">
                <input type="submit" class="btn btn-warning" value="clear">
                </form>
                <br>
                <table class="table table-dark"> 
                
                <th>id</th>
                <th>task</th>
                <th>is completed</th>
                <th>action</th>
                 @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id}}</td>
                    <td>{{$task->task}}</td>

                    <td>
                        @if($task->is_completed)
                        <button class="btn btn-success">completed</button>
                        @else
                        <button class="btn btn-warning"> Not completed</button>
                        @endif
                    </td>
                    <td>
                    @if(!$task->is_completed)
                    <a href="/completed/{{$task->id}}" class="btn btn-primary">mark as completed</a>
                    @else
                    <a href="/notcompleted/{{$task->id}}" class="btn btn-danger">mark as not completed</a>
                    @endif
                    <a href="/delete/{{$task->id}}" class="btn btn-warning">Delete</a>
                    <a href="/update/{{$task->id}}" class="btn btn-success">Update</a>
                    </td>
                    
                </tr>
                @endforeach
            </table>
            </div>
            
           
        </div>
    </div>
</body>
</html>
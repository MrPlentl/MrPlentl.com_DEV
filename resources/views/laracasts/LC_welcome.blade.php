<!DOCTYPE html>
<html>
    <head>
        <title>Welcome Page</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    </head>
    <body>
    <div class="container">
        <p>
            <ul>
            @foreach( $tasks as $task )
                <li>{{ $task->body }}</li>
            @endforeach
            </ul>
        </p>
        <div style="margin: auto; width: 50%;text-align: center">
        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
        <a href="/LC/tasks"> <button type="button" class="btn btn-primary">View All Tasks</button></a>
        </div>
    </div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Demo</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Send Mail</h1>
                </div>
                <div class="card-body">
                    <form action="{{'/send-mail'}}" method="post">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="email">Email To</label>
                            <input type="email" name="email" class="form-control" placeholder="Sample@gmai.com">
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Sample Demo">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" cols="10" rows="10" class="form-control" placeholder="Simple Message"></textarea>
                        </div>
                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
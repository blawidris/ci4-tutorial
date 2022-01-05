<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add New User</title>
</head>
<body>
    <form action="admin/new" method="post" class="container py-5 px-5">
        <div class="m-auto">
            <div class="row">
                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="James Ibori" name="name">
                </div>
                <div class="col-4 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                </div>
                <div class="col-8 mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" role="button"> Submit</button>
       
    </form>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
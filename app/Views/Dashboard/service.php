<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Gallery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        .book-card {
            max-width: 300px;
            margin: 20px;
        }
        .book-card img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Books Gallery</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card book-card">
                <img src="book1.jpg" class="card-img-top" alt="Book 1">
                <div class="card-body">
                    <h5 class="card-title">Book Title 1</h5>
                    <p class="card-text">Description of Book 1.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card book-card">
                <img src="book2.jpg" class="card-img-top" alt="Book 2">
                <div class="card-body">
                    <h5 class="card-title">Book Title 2</h5>
                    <p class="card-text">Description of Book 2.</p>
                    <a href="#" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Add more book cards here -->
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
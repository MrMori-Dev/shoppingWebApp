<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>لیست کالاها</title>
    <!-- لینک به CSS بوت‌استرپ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<div class="container">
    <h2 class="mb-4 text-center">لیست کالاها</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- کارت کالا 1 -->
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="سفارش 1">
                <div class="card-body">
                    <h5 class="card-title">{{$data[0]['title']}}</h5>
                    <p class="card-text">{{$data[0]['description']}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">قیمت: 100,000 تومان</small>
                </div>
            </div>
        </div>

        <!-- کارت کالا 2 -->
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="سفارش 2">
                <div class="card-body">
                    <h5 class="card-title">{{$data[1]['']}}</h5>
                    <p class="card-text">{{$data[1]['description']}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">قیمت: 150,000 تومان</small>

                </div>
            </div>
        </div>

        <!-- کارت کالا 3 -->
        <div class="col">
            <div class="card h-100">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="سفارش 3">
                <div class="card-body">
                    <h5 class="card-title">{{$data[2]['title']}}</h5>
                    <p class="card-text">{{$data[2]['description']}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">قیمت: 200,000 تومان</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- لینک به JavaScript بوت‌استرپ (اختیاری) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

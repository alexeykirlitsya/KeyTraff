<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <title>Keytraff</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>Вывести запросы с использованием php, mysql, AJAX, jQuery, Bootstrap.<br>
                Есть 3 таблицы (в приложенном файле): offers (товары), operators (операторы), requests (заказы).<br>
                Вывести такие варианты запросов:</p>
            <hr>
            <p>1) Номер заказа, имя товара, цена, количество, имя оператора за которым числится заказ ,ГДЕ количество товара >2 И id оператора 10 ИЛИ 12</p>
            <button type="button" class="btn btn-success" id="first">Результат</button>
            <div class="result-first">
                <table class="table table-bordered table-sm">
                    <thead>
                    <tr>
                        <th scope="col">номер заказа</th>
                        <th scope="col">имя товара</th>
                        <th scope="col">цена</th>
                        <th scope="col">количество</th>
                        <th scope="col">имя оператора</th>
                    </tr>
                    </thead>
                    <tbody class="tbody-result-first">
                    </tbody>
                </table>
            </div>
            <hr>
            <p>2) Имя товара, количество товара, и сумма (price) по каждому товару (сгруппировать)</p>
            <button type="button" class="btn btn-success" id="second">Результат</button>
            <div class="result-second">
                <table class="table table-bordered table-sm">
                    <thead>
                    <tr>
                        <th scope="col">имя товара</th>
                        <th scope="col">количество товара</th>
                        <th scope="col">сумма</th>
                    </tr>
                    </thead>
                    <tbody class="tbody-result-second">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
<script src="public/app.js"></script>
</body>
</html>

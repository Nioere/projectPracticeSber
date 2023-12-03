<?php
session_start();
$connect = mysqli_connect("localhost","root","","sber_db");
if (isset($_POST['add_to_cart'])) {
if (isset($_SESSION['cart'])) {
$session_array_id = array_column($_SESSION['cart'], "id");
if (!in_array($_GET['id'], $session_array_id)) {
    $session_array = array(
        'id' => $_GET['id'],
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "quantity" => $_POST['quantity']
        );
}
}else{
$session_array = array(
'id' => $_GET['id'],
"name" => $_POST['name'],
"price" => $_POST['price'],
"quantity" => $_POST['quantity']
);
$_SESSION['cart'][] = $session_array;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Корзина</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/cart.css">
</head>
<body>
	<div class="container text-center">
		<h2>Корзина</h2>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Название</th>
							<th>Обслуживание</th>
							<th>Действие</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$output = "";
						if (!empty($_SESSION['cart'])) {
							foreach ($_SESSION['cart'] as $key => $value) {
								echo "
								<tr>
									<td>".$value['name']."</td>
									<td>".$value['price']."</td>
									<td>
										<a href='cart.php?action=remove&id=".urlencode($value['id'])."&name=".urlencode($value['name'])."&price=".urlencode($value['price'])."'
										class='btn btn-danger'>
										Удалить
										</a>
									</td>
								</tr>
								";
							}
							
							$output .= "
								<tr>
									<td colspan='2'></td>
									<td>
										<a href='cart.php?action=clearall' class='btn btn-warning'>
										Очистить корзину
										</a>
									</td>
								</tr>
							";
						}

						echo $output;
						?>

					</tbody>
				</table>

				<div class="input-form">
				<button onclick="window.location.href='#'">Оплатить заказ</button>
				</div>
				<div class="input-form">
				<button onclick="window.location.href='catalog.php'">Продолжить покупки</button>
				</div>

			</div>
		</div>
	</div>

	<?php
if (isset($_GET['action'])) {
    if ($_GET["action"] == "clearall") {
        unset($_SESSION['cart']);
    }
    if ($_GET['action'] == "remove") {
        $id = $_GET['id'];
        $name = $_GET['name'];
        $price = $_GET['price'];
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['id'] == $id && $value['name'] == $name && $value['price'] == $price) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']); // Переиндексация массива
                break;
            }
        }
    }
}
?>


</body>
</html>

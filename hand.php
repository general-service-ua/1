<!DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>hand</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css?v=3EpcnF"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css?v=3EpcnF" type="text/css">

  
  
  

</head>
<body>
  
  <div id="custom-html-1r"><?php

session_start();

// формируем массив с товарами в заказе (если товар один - оставляйте только первый элемент массива)
$products_list = array(
    [
        'product_id'    => '2',      // код товара (из каталога CRM)
        'price'         => '349',      // цена товара, по умолчанию указанная цена в карточке товара 1
        'amount'        => '1',      // количество, по умолчанию 1 шт.
        'attributes'    => [''],    // массив с кодом атрибута, через запятую (из каталога CRM)(необязательно)
        'supplier_id'   => ''       // код поставщика (из каталога CRM)(необязательно)
    ],
    [
        'product_id'    => '',      // код товара (из каталога CRM)
        'price'         => '',      // цена товара, по умолчанию указанная цена в карточке товара 2
        'amount'        => '',      // количество, по умолчанию 1 шт.
        'attributes'    => [''],    // массив с кодом атрибута, через запятую (из каталога CRM)(необязательно)
        'supplier_id'   => ''       // код поставщика (из каталога CRM)(необязательно)
    ]
);

$products = urlencode(serialize($products_list));

// параметры запроса
$data = array(
    'api_key'         => 'dc495640e648f8027b6a7e990fc89675eadfadbe',               // Ваш секретный токен
    'products'        => $products,                         // массив с товарами в заказе
    'bayer_fio'       => $_REQUEST['name'],                 // покупатель (Ф.И.О)
    'phone'           => $_REQUEST['phone'],                // телефон
    'email'           => $_REQUEST['email'],                // e-mail
    'status'          => '4',                               // id статуса в crm-системе, по умолчанию "Новый"
    'delivery_type'   => '12',                              // способ доставки (id в CRM)
    'client_comment'  => $_REQUEST['comment'],              // комментарий клиента
    'client_ip'       => $_SERVER['REMOTE_ADDR'],           // IP адрес клиента
    'payment_type'    => '15',                              // вариант оплаты (id в CRM)
    'additional_field'=> $_REQUEST['additional_field'],     // доплнительное поле
    'utm_source'      => $_SESSION['utms']['utm_source'],   // utm_source
    'utm_medium'      => $_SESSION['utms']['utm_medium'],   // utm_medium
    'utm_term'        => $_SESSION['utms']['utm_term'],     // utm_term
    'utm_content'     => $_SESSION['utms']['utm_content'],  // utm_content
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'], // utm_campaign
    'store_url'       => $_SERVER['SERVER_NAME']            // store_url
);

// запрос
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://rebeccaa.trendcrm.biz/api/landing/order');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl);

?>

//$out – ответ сервера в формате JSON


/* Здесь проверяется существование переменных */
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 
/* Сюда впишите свою эл. почту */
 $address = "";
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Тема: SV 459 \nТелефон: $phone\nИмя: $name\nE-mail: $email";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказ'; //сабж
$email='SV 459 <vpluce.ru>'; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 $send = 
ini_set('short_open_tag', 'On');
 
 	echo '<script>window.location.href = "spasibo.php";</script>';
?&gt;
</vpluce.ru></div>


<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
      <script src="assets/theme/js/script.js"></script>
  
  
  

</body>
</html>

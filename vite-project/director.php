<?php
$db = mysqli_connect('localhost','root','','supermarket_chain');

if ($db === false) {
    echo 'error';
    exit;
}
session_start();
$emailuser = $_SESSION['email'];

function getClientNameByEmail($db, $email) {
    // Using a prepared statement to prevent SQL injection
    $query = $db->prepare("SELECT Name FROM Staff WHERE Email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['Name'];
    } else {
        return "Имя не найдено";
    }
}

$clientName = getClientNameByEmail($db, $emailuser);
 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ОАЗИС (Профиль)</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>  
        <div class="header-nav">
            <nav class="header-nav_navbar">
                <div class="container">
                    <div class="header-nav_navbar__nav_row">
                        <div class="header-nav_navbar__nav_logo">
                            <a href="avtorization.php">  <img src="./img/logo.svg" alt=""></a>
                        </div>
                        <div class=" header-nav_navbar__nav_row nav_link-right">
                            <ul class="header-nav_navbar__nav_row nav_link-btn">
                                <li>
                                    <a href="" class="nav_link-btn_izbrannoe">
                                        <div class="like">
                                            <img src="./img/Избранное.svg" class="like" alt="">
                                        </div>   
                                        <span>Избранное</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="director.html" class="nav_link-btn_profile">
                                        <div class="profile">
                                            <img src="./img/Лк.svg" class="profile" alt="">
                                        </div> 
                                        <span>Профиль</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="nav_link-btn_korzina">
                                        <div class="korzina">
                                            <img src="./img/Корзина.svg" class="korzina" alt="">
                                        </div> 
                                        <span>Корзина</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section class="profile">
        <div class="container">
            <div class="profile-content">
                <h2 class="profile-content_h2">Профиль</h2>
                <div class="profile-content_data">
                    <div class="profile-content_data-IMG">
                        <img src="./img/Group174.png" alt=""  class="profile-content_data-IMG">
                    </div>
                    <div class="profile-content_data-TEXT">
                        <p class="profile-content_data-TEXT_p"><?php echo " " . $clientName; ?></p>
                        <p class="profile-content_data-TEXT_p"><?php echo " " . $emailuser; ?></p>
                        <p class="profile-content_data-TEXT_p">Пол: не определён</p>
                    </div>
                </div> 
            </div>
        </div>
</section>
<section class="database">
    <div class="container">
        <div class="database-content">  <!-- Блок с БД контентом-->
          <?php 
$sql = "SELECT * FROM Client";
$result = $db->query($sql);
            ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Имя </th>
                    <th>Фамилия</th>
                    <th>Почта </th>
                    <th>Карта лояльности </th>
                </tr>
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['ID_Client'] . "</td>";
                            echo "<td>" . $row['Name'] . "</td>";
                            echo "<td>" . $row['Surname'] . "</td>";
                            echo "<td>" . $row['Email'] . "</td>";
                            echo "<td>" . $row['LoyaltyCard'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Нет продуктов для отображения</td></tr>";
                    }
                    ?>
            </table>
            <div class="database-content-btn databaseclients_table">  <!-- Блок с кнопками, связанными с БД -->
                <a href="#" data-view="appoinment">Назначения</a>
                <a href="#" data-view="category">Категории</a>
                <a href="#" data-view="orders">Заказы</a>
                <a href="#" data-view="status">Статус заказа</a>
                <a href="#" data-view="product">Товары</a>
                <a href="#" data-view="provider">Поставщики</a>
                <a href="#" data-view="role">Роли</a>
                <a href="#" data-view="shipment">Поставки</a>
                <a href="#" data-view="staff">Персонал</a>
                <a href="#" data-view="warehouse">Склад</a>
            </div>
            <div class="database-content-btn databaseclients">  <!-- Блок с кнопками, связанными с БД -->
                <a href="#" data-view="view">Представление 1</a>
                <a href="#" data-view="view4">Представление 2</a>
                <a href="#" data-view="view1">Представление 3</a>
                <a href="#" data-view="view8">Представление 4</a>
                <a href="#" data-view="view6">Представление 5</a>
                <a href="#" data-view="view2">Представление 6</a>
                <a href="#" data-view="view7">Представление 7</a>
                <a href="#" data-view="view9">Представление 8</a>
                <a href="#" data-view="view3">Представление 9</a>
                <a href="#" data-view="view5">Представление 10</a>
            </div>
            <div class="database-content" id="dynamicContent">

</div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
     <div class="footer-content">
         <div class="footer-content_h2">
             <h2>Оазис</h2>
         </div>
         <div class="footer-content_p">
             <p>сеть супермаркетов</p>
         </div>
         <div class="footer-content_info">
             <div class="footer-content_info part_one">
                 <div class="part_one-h3">
                     Обратная связь
                 </div>
                 <div class="part_one-p">
                     <p class="part_p">+7(991)-232-45-33</p>
                     <p class="part_p">oasismarket@gmail.ru</p>
                 </div>
                 <div class="part_one-h3">
                     Служба поддержки
                 </div>
                 <div class="part_one-p">
                     +7(999)-331-66-83
                 </div>
             </div>
             <div class="footer-content_info part_two">
                 <div class="part_one-h3">
                     Оазис
                 </div>
                 <div class="part_one-p">
                     <a href="filial.html"><p class="part_p">Филиалы</p></a>
                     <a href="index.html"><p class="part_p">Бренды</p></a>
                     <a href="index.html"><p class="part_p">Способы получения товара</p></a>
                 </div>
             </div>
             <div class="footer-content_info part_three">
                 <div class="part_three-h3">
                     <h3>Мы в социальный сетях</h3>
                 </div>
                 <div class="part_three-img">
                     <img src="./img/Rectangle21.png" class="social-icon" alt="">
                     <img src="./img/Rectangle22.png" class="social-icon" alt="">
                     <img src="./img/Rectangle23.png" class="social-icon" alt="">
                     <img src="./img/Rectangle24.png" class="social-icon" alt="">
                 </div>
             </div>
         </div>
     </div>
    </div> 
 </footer>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
  $('a[data-view]').on('click', function(e){
    e.preventDefault();
    var view = $(this).data('view');
    $.get(view + '.php', function(data){
      $('#dynamicContent').html(data);
    });
  });
});
$(document).ready(function(){
  $('a[data-view]').on('click', function(e){
    e.preventDefault();
    var view = $(this).data('view');
    if (view !== 'view6' && view !== 'view7' && view !== 'view8') {
        $('#providerTable').show(); // Показать кнопку "Поставщики" для этих представлений
    } else {
        $('#providerTable').hide(); // Скрыть кнопку "Поставщики" для других представлений
    }
    $.get(view + '.php', function(data){
      $('#dynamicContent').html(data);
    });
  });
});
</script>
</body>
</html>

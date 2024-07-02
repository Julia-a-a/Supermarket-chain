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
    $query = $db->prepare("SELECT Name FROM Client WHERE Email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['Name'];
    } else {
        return " Для отображения данных воспользуйтесь авторизацией";
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
                            <a href="http://localhost/OAZIS — vite/vite-project/index.html">  <img src="./img/logo.svg" alt=""></a>
                        </div>
                        <div class=" header-nav_navbar__nav_row nav_link-right"> <!--Блок образующий меню, расположенное в правой стороне-->
                            <ul class="header-nav_navbar__nav_row nav_link-btn">
                                <li>
                                    <a href="like.html" class="nav_link-btn_izbrannoe">
                                        <div class="like">
                                            <img src="./img/Избранное.svg" class="like" alt="">
                                        </div>   
                                        <span>Избранное</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="profile.html" class="nav_link-btn_profile">
                                        <div class="profile">
                                            <img src="./img/Лк.svg" class="profile" alt="">
                                        </div> 
                                        <span>Профиль</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="busketbuy.html" class="nav_link-btn_korzina">
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
                        <img src="./img/Group192.png" alt=""  class="profile-content_data-IMG">
                    </div>
                    <div class="profile-content_data-TEXT"> <!--Блок с личными данными-->
                    <p class="profile-content_data-TEXT_p"><?php echo " " . $clientName; ?></p>
                        <p class="profile-content_data-TEXT_p"><?php echo " " . $emailuser; ?></p>
                        <p class="profile-content_data-TEXT_p">Пол: не определён</p>
                    </div>
                    <div class="profile-content_data-CARDloyal"> 
                        <img src="./img/Group172.png" alt="" class="profile-content_data-CARDloyal_img">
                    </div>
                </div>
                <h2 class="profile-content_h2">Действующие заказы:</h2>
                <div class="profile-content_order"> <!--Блок для контента с заказами-->
                    <div class="profile-content_order-no"> <!--Блок действующий при отсутствии заказов-->
                        <h2>В ДАННЫЙ МОМЕНТ ВЫ НИЧЕГО НЕ ЗАКАЗАЛИ.
                            ВОЗМОЖНО ЗДЕСЬ ПОЯВИТСЯ ЧТО-ТО ПОЗЖЕ</h2>
                    </div>
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
</body>
</html>

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
                                    <a href="profileADMIN.html" class="nav_link-btn_profile">
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
                        <img src="./img/Group192.png" alt=""  class="profile-content_data-IMG">
                    </div>
                    <div class="profile-content_data-TEXT">  <!--Блок Для личных данных-->
                        <p class="profile-content_data-TEXT_p"><?php echo " " . $clientName; ?></p>
                        <p class="profile-content_data-TEXT_p"><?php echo " " . $emailuser; ?></p>
                        <p class="profile-content_data-TEXT_p">Пол: не определён</p>
                    </div>
                </div>
                <h2 class="profile-content_h2">Вам поступил заказ!!</h2>
                <div class="profile-content_order admin_panel">  <!--Блок для экстренных/свежих заказов-->
                    <div class="profile-content_order-content">
                        <h2 class="profile-content_order-content_h2">Заказ №43239438-е</h2>
                        <p class="profile-content_order-content_p"> 5 позиций</p>
                        <p class="profile-content_order-content_p">Комус</p>
                    </div>
                    <div class="profile-content_order_btn"> <!--Блок для кнопки обработки заказа-->
                        <a class="profile-content_order_btn"> Собрать заказ</a>
                    </div>
                </div>
                <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p class="modal-p">Учтите, время ограниченно.</p> 
                <p>Курьер будет у вас через 10 минут (Компания Самокат)</p>
                <p>В заказ входит детская категория: пижама, платье, детское питание Gerber. СУММА ЗАКАЗА - 900РУБ. оплата наличными</p>
               
            </div>
        </div>
                <div class="profile-content_order admin_paneltwo">   <!--Блок для заказов-->
                    <div class="profile-content_order-content">
                        <h2 class="profile-content_order-content_h2">Заказ №64879438</h2>
                        <p class="profile-content_order-content_p"> 2 позиции</p>
                        <p class="profile-content_order-content_p">“Заказ от пользователя”</p>
                    </div>
                    <div class="profile-content_order_btn"> <!--Блок для кнопки обработки заказа-->
                        <a class="profile-content_order_btn"> Собрать заказ</a>
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
     
<script>
  // Находим кнопку "Собрать заказ"
  var gatheringButton = document.querySelector('.profile-content_order_btn');

  // Находим модальное окно
  var modal = document.getElementById('myModal');

  // Находим элемент для закрытия модального окна
  var closeButton = document.querySelector('.close');

  // Добавляем обработчик события клика на кнопку "Собрать заказ"
  gatheringButton.addEventListener('click', function() {
      modal.style.display = 'block'; // Показываем модальное окно
  });

  // Добавляем обработчик события клика на кнопку закрытия модального окна
  closeButton.addEventListener('click', function() {
      modal.style.display = 'none'; // Скрываем модальное окно
  });

  // Закрываем модальное окно при щелчке за его пределами
  window.addEventListener('click', function(event) {
      if (event.target == modal) {
          modal.style.display = 'none';
      }
  });
</script>
</body>

</html>

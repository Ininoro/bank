<?

$connect = new mysqli('localhost', 'root', '', 'site');
$query=mysqli_query($connect, "SELECT * FROM `form`");

if (isset($_POST['fullname']) != $_SESSION['fullname'] ) {

    $fullname = $_POST["fullname"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $selector = $_POST["selector"];
    $date = date("Y-m-d H:i:s");
    $query=$connect->query("INSERT INTO `form` (`id`,`fullname`, `number`, `email`, `selector`,`date` ) 
    VALUES (NULL, '$fullname', '$number', '$email', '$selector','$date' )");
      header('Location:/');
    
    
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<style>
    body {
    
	line-height: 1;
    font-family: 'PT Sans';
    background-image: url('/img/bg.png'); 
    background-repeat: no-repeat;
    background-size: 100%;
}
</style>

<body>
   <?php
        include 'header.php';
   ?>
    
    <main class="main" id="form">
        <form method='POST'>
            <div id="popup">
            <div class="popup-inner">
            <div class="window_form-wrapper">
                <div class="form_textblock">
                    <img src="./img/chat.png" alt="" style="padding-bottom: 23px;">
                    <h1>Нужна подробная
                        консультация? Оставьте
                        свои контакты и мы
                        свяжемся с вами</h1>
                        <h2>Консультация совершенно бесплатная</h2>
                </div>
                <div class="input_block">
                    <input type="text" name='fullname' placeholder="Как к вам обращаться?" required>
                    <input type="text" name='number' placeholder="Ваш телефон" required pattern="\+?[0-9\s\-\(\)]+" maxlength="12">
                    <input type="text" name='email' placeholder="Ваш e-mail" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    <select class="box" required  name='selector'>
                        <option>Кредит для бизнеса</option>
                        <option>Ипотека</option>
                        <option>Кредит под залог</option>
                        <option selected>Потребительский кредит</option>
                      </select>
                      <div class="check">
                        <input type="checkbox" class="checkbox" required>
                      <label for="">Даю согласие на обработку своих 
                        персональных данных</label>
                        
                      </div>
                      <input type="submit" style=' width: 300px;
    height: 55px;
    color: white;
    background-color: #d4203b;
    font-size: 16px;
    border: none;
    font-weight: 600;
    border-radius: 5px;
    font-family: 'PT Sans';'>
                </div>
                <a href="#popup-close" class="close-popup">X</a>
            </div>
        </div>
            </div>      
        </div>
        </form>
        
        <div class="main_textblock">
            <h1>Мы больше, чем банк</h1>
            <h2>Получите кредит с нами, по выгодной ставке</h2>
        </div> 
        <div class="main_block">
            <div class="main_bet">
                <h1>СТАВКА</h1>
                <p> от 4,99%</p>
            </div>
            <div class="main_bet">
                <h1>СУММА</h1>
                <p>до 100 млн. рублей</p>
            </div>
        </div>
        <div class="calculator_block">
        <a href="#popup" style="text-decoration: none;">
        <button class="claim_button">Оставить заявку</button>
        </a>
        <div class="calc">
           
            <a target="_blank" href="./calc/calc.html" style="
        text-decoration: none; color:#414852;">  <img target="_blank" href="./calc/calc.html" src="./img/calc.png" alt=""> Рассчитать кредит</a>
        </div>
        </div>
        
    </main>
    <section class="block">
        <h1 class="h1_benefits">
            Преимущества кредита под залог квартиры
        </h1>
        <div class="benefits">

            <div class="benefit">
                <div class="headline">
                   <div class="benefits-img"> <img src="./img/first.png" alt="" class="benefits-img"></div> 
                    <div class="benefit_textblock">
                        <h2>Одобрение в день 
                            подачи заявки</h2>
                            <p>  Получение до 100% от кредита на следующий день, остальное — после регистрации залога
                            </p>
                    </div>
                    
                </div>
                
            </div>

            <div class="benefit">
                <div class="headline">
                    <div class="benefits-img"> <img src="./img/first.png" alt="" class="benefits-img"></div> 
                    <div class="benefit_textblock">
                        <h2>Без смены собственника</h2>
                            <p>  Квартира остается у владельца — 
                                не требуется переоформлять 
                                недвижимость на банк, аннулировать 
                                регистрацию и прописку
                            </p>
                    </div>
                    
                </div>
            </div>

            <div class="benefit">
                <div class="headline">
                    <div class="benefits-img"> <img src="./img/first.png" alt="" class="benefits-img"></div> 
                    <div class="benefit_textblock">
                        <h2>До 55 000 000 ₽ 
                            со ставкой от 2.5%</h2>
                            <p>  Кредит на любые цели. Для каждого
                                клиента ставка рассчитывается
                                индивидуально
                                
                            </p>
                    </div>
                    
                </div>
            </div>

            <div class="benefit">
                <div class="headline">
                    <div class="benefits-img"> <img src="./img/first.png" alt="" class="benefits-img"></div> 
                    <div class="benefit_textblock">
                        <h2>Без справок о доходах</h2>
                            <p>  Для получения кредита под залог 
                                недвижимости нужны только паспорт 
                                РФ и СНИЛС для каждого участника 
                                сделки
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="banks">
            <h1 class="h1_banks">
                БАНКИ-ПАРТНЁРЫ
            </h1>
                <img src="./img/arrow.png" alt="" class="arrow_img">
        </div>
        
    </section>
    <div class="cooperation">
        <div class="bank">
            <img src="./img/alfa.png" alt="">
        </div>
        <div class="bank">
            <img src="./img/atb.png" alt="">
        </div>
        <div class="bank">
            <img src="./img/gazprom.png" alt="">
        </div>
        <div class="bank">
            <img src="./img/open.png" alt="">
        </div>
        <div class="bank">
            <img src="./img/tinkoff.png" alt="">
        </div>
    </div>
    <section class="tasks">
        <h1 class="tasks-h1">Мы работаем на результат и гарантируем оперативное решение 
            любых поставленных задач</h1>
            <div class="tasks_blocks">
                <div class="task_textblock">
                    <p>Мы работаем со всеми банками, поэтому получаем лучшие 
                        из существующих предложений. Мы экономим ваше время, 
                        повышаем шансы на получение кредита, находим решение 
                        в самых сложных ситуациях</p>
                </div>
                <div class="task_img">
                    <img src="./img/task-1.png" alt="">
                </div>
                <div class="task_img">
                    <img src="./img/task-2.png" alt="">
                </div>
                <div class="task_textblock">
                    <ul>
                        <li>01/
                            
                        </li>
                        <p>Мы являемся официальными партнерами банков, можем отказаться 
                                от всех дополнительных услуг и наценок банков и обеспечить более 
                                низкие ставки, чем если бы вы обращались напрямую
                                </p>
                        <li>02/
                            
                        </li>
                        <p>Мы являемся официальными партнерами банков, можем отказаться 
                                от всех дополнительных услуг и наценок банков и обеспечить более 
                                низкие ставки, чем если бы вы обращались напрямую
                                </p>
                        <li>03/
                            
                        </li>
                        <p>Мы являемся официальными партнерами банков, можем отказаться 
                                от всех дополнительных услуг и наценок банков и обеспечить более 
                                низкие ставки, чем если бы вы обращались напрямую
                                </p>
                    </ul>
                    <a href="#services">
                    <button class="service_button" >
                        Выбрать услугу
                    </button>
                    </a>
                </div>
                
            </div>
            <div class="company_block">
                <h1 class="company">Наша компания избавит вас от утомительных хождений по банкам, простаивания в очередях и длительных переговоров с сотрудниками финансовых учреждений</h1>  
                <a href="#popup" style="text-decoration: none;">
                <button>Оставить заявку на консультацию</button>
                </a>
            </div>
            <div class="company_services">
                <div class="service_block">
                    <img src="./img/service-pic.png" alt="" class="service_img">
                    <h1>Бесплатный анализ Вашей ситуации</h1>
                    <p>Мы проводим анализ Вашей кредитной истории и предоставляем полный отчет по текущему состоянию
                        </p>
                </div>
                <div class="service_block">
                    <img src="./img/service-pic2.png" alt="" class="service_img">
                    <h1>Индивидуальная подача заявок в банк</h1>
                    <p>Так как от нескольких запросов в банках ухудшается 
                        рейтинговая система и тем самым падает вероятность 
                        получения кредита 
                        </p>
                </div>
                <div class="service_block">
                    <img src="./img/service-pic3.png" alt="" class="service_img">
                    <h1>Мониторинг заявки</h1>
                    <p>Мы ежедневно предоставляем информацию 
                        по текущему статусу вашей заявки.
                        </p>
                </div>
            </div>

            <div class="help_block">
                <img src="./img/help-pic.png" alt="" class="help_pic"><h2>При возникающих у банка спорных вопросах в момент рассмотрения заявки, незамедлительно вносятся все необходимые корректировки и дополнения.</h2>
            </div>
    </section>

    <section class="section_help">
        <div class="section_wrapper">
            <img src="./img/sign.png" alt="">
            <p>Помогаем сохранить время и нервы, а также 
                избежать возможных «подводных камней», 
                возникающих при оформлении
                </p>
        </div>
    </section>

    <section class="our_services">
        <h1>Наши услуги</h1>
        <div class="services_block" id='services'>
            <a href="page.html" style='text-decoration:none;' >
            <div class="service1">
                <div class="head_block">
                    <img src="./img/wallet.png" alt="">
                    <h2>Потребительский кредит</h2>
                </div>
                <ul>
                    <li>
                        Без поручителей 
                        
                        
                    </li>
                    <li>
                        Выгодные условия
                       
                    </li>
                    <li>
                        Минимальные кредитные ставки 
                        
                    </li>
                    <li>
                        Одобрение без поручителей
                    </li>
                </ul>
            </div>
            </a>
            <div class="service2">
                <div class="head_block">
                    <img src="./img/house.png" alt="">
                    <h2>Кредит под залог</h2>
                </div>
                <p>Под залог недвижимости
                </p>
                <ul>
                    <li>
                       
                        Коттеджа

                        
                    </li>
                    <li>Дома
                        
                        
                       
                    </li>
                    <li>
                        Квартиры
                        
                        
                    </li>
                    <li>
                        Приобритаемого жилья
                        
                       
                    </li>
                    <li>
                        Недвижимости без 
                        подтверждения доходов
                       
                        
                    </li>
                    <li>
                        Доли в квартире
                        
                    </li>
                </ul>
            </div>
            <div class="service3">
                <div class="head_block">
                    <img src="./img/circle.png" alt="">
                    <h2>Рефинансирование</h2>
                </div>
                <ul>
                    <li>
                        Рефинансирование кредита

                        
                        
                    </li>
                    <li>
                        Рефинансирование ипотеки
                        
                       
                    </li>
                    <li>
                        Рефинансирование кредитных карт
                        
                    </li>
                    <li>
                        Рефинансирование залога 
                        недвижимости
                        
                    </li>
                    <li>
                        Рефинансирование займов МФО
                        
                    </li>
                </ul>
            </div>
            <div class="service4">
                <div class="head_block">
                    <img src="./img/calculator.png" alt="">
                    <h2>Ипотека</h2>
                </div>
                <ul>
                    <li>
                        Частичная ипотека
                        
                        
                        
                    </li>
                    <li>
                        Ипотека без справок
                        
                        
                       
                    </li>
                    <li>
                        Без первоначального взноса
                        
                    </li>
                    <li>
                        Для собственников бизнеса
                       
                    </li>
                    <li>
                        Под залог недвижимости
                        
                    </li>
                    <li>
                        С плохой кредитной историей
                        
                    </li>
                </ul>
            </div>
            <a href="page2.html" style='text-decoration:none;'>
            <div class="service5">
                <div class="head_block">
                    <img src="./img/deal.png" alt="">
                    <h2>Кредит для бизнеса</h2>
                </div>
                <ul>
                    <li>
                        Доступные программы

                        
                        
                    </li>
                    <li>
                        Пополнение оборотных средств

                        
                       
                    </li>
                    <li>
                        Кредит на исполнение контрактов 
                        по 44 ФЗ и 223 ФЗ
                        
                    </li>
                    <li>
                        Кредит на исполнение 
                        коммерческих и экспортных
                        контрактов
                        
                    </li>
                    <li>
                        Кредит на покупку основных 
                        средств
                        
                    </li>

                </ul>
                <p>+ ещё три</p>
            </div>
            </a>
            <div class="service6">
                <div class="head_block">
                    <img src="./img/chart.png" alt="">
                    <h2>Проверка кредитной истории</h2>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing 
                    elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua
                </p>
            </div>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>
    <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "350px";
          document.getElementById("mySidebar").style.visibility = "visible";
          document.getElementById("main").style.visibility = "visible";
        }
        
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
          document.getElementById("mySidebar").style.visibility = "hidden";
        }

        function openWindow(){
            document.getElementById("windowForm").style.visibility = "visible";
        }

        function closeWindow(){
            document.getElementById("windowForm").style.visibility = "hidden";
        }
        </script>
</body>
</html>
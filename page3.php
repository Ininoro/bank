<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<title>Услуги</title>
</head>

<body>


<header class="header">
    <a href="index.php" style='text-decoration:none'>
    <div class="header_logo">
            <img src="./img/logo.png" alt="" class="logo-pic">
            <p>Единый городской финансовый центр</p>
        </div>
    </a>
    
</header>
<main id="form">
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
<div class="two_sides">
    

    <div class="left">
    <h1 class='left_h1'>Ипотека</h1>
    <h5 class="left_h5">
        Предоставляемый клиентам для приобретения предметов потребления.
        Кредит выдается наличными или переводится на выбранную банковскую карту.    
    </h5>
        <div class="page-calculator_block">
        <a href="#popup" style="text-decoration: none;">
        <button class="left-claim_button">Оставить заявку</button>
        </a>
            <div class="left_calc">
            <a id="open-popup"   style="text-decoration: none; color:#414852; cursor: pointer;">
 <img target="_blank" href="./calc/calc.html" src="./img/calc.png" style="cursor: pointer;"> Рассчитать ипотеку
        </a>
            </div>
            </div>

        <div class="benef-block">
            <div class="benef">
            <h1 class='benef_h1'>18,1 - 26,9%</h1>
            <h2 class='benef_h2'>диапазон стоимости</h2>
            </div>
            <div class="benef">
            <h1 class='benef_h1'>30 лет</h1>
            <h2 class='benef_h2'>максимальный срок</h2>
            </div>
            <div class="benef">
            <h1 class='benef_h1'>100 млн ₽</h1>
            <h2 class='benef_h2'>максимальная сумма</h2>
            </div>
        </div>
    </div>
    <div class="right">
        <img src="./img/image_credit.png" alt="" class="credit-img">
        </div>

        
</div>

<h1 class='left_h1'>Программы ипотеки</h1>

<div class="cards_block">
    <div class="card" id="open-popup"   style="text-decoration: none; cursor: pointer;">
        <img src="./img/card_1.png" alt="" class="card">
    </div>
    <div class="card" id="open-popup"   style="text-decoration: none; cursor: pointer;">
        <img src="./img/card_2.png" alt="" class="card">
    </div>
    <div class="card" id="open-popup"   style="text-decoration: none; cursor: pointer;">
        <img src="./img/card_3.png" alt="" class="card">
    </div>
</div>
</main>



    <style>
        .popup-wrapper {
            display: none; 
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); 
        }
    #loading, #result {
        display: none;
    }


        .popup {
            width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .close-button {
            position: relative;
            top: 10px;
            left: calc(100% - 30px);
            cursor: pointer;
        }
    </style>



    <div class="popup-wrapper" id="popup-wrapper">
        <div class="popup">
            <span class="close-button" id="close-popup">&times;</span>
            <div class="container">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<div class="card card-body text-center mt-5">
						<div class="heading display-5 pb-3">Ипотечный калькулятор</div>
						<form id="loan-form">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-text input-group-prepend">&#8381;</span>
									<input type="number" id="amount" class="form-control" placeholder="Сумма кредита">
								</div>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-text input-group-prepend">%</span>
									<input type="number" id="interest" class="form-control" placeholder="Процентная ставка">
								</div>
							</div>

							<div class="form-group">
								<input type="number" id="years" class="form-control" placeholder="Количество лет">
							</div>

							<div class="form-group">
								<input style='color:pink;' type="submit" value="Рассчитать" class="btn btn-dark btn-block">
							</div>
						</form>
						<!--Loader Here-->
						<div id="loading">
							<img src="img/loading.gif" alt="">
						</div>
						<!--Results-->
						<div id="result" class="pt-4">
							<h5>Информация о платеже</h5>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-text input-group-prepend">Ежемесячный платеж</span>
									<input type="number" id="monthly-payment" class="form-control" disabled>
								</div>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-text input-group-prepend">Итоговый платеж</span>
									<input type="number" id="total-payment" class="form-control" disabled>
								</div>
							</div>

							<div class="form-group">
								<div class="input-group">
									<span class="input-group-text input-group-prepend">Переплата</span>
									<input type="number" id="total-interest" class="form-control" disabled>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
        </div>
    </div>

    <script>
        const openPopupButton = document.getElementById('open-popup');
        const closePopupButton = document.getElementById('close-popup');
        const popupWrapper = document.getElementById('popup-wrapper');

        openPopupButton.addEventListener('click', () => {
            popupWrapper.style.display = 'block';
        });

        closePopupButton.addEventListener('click', () => {
            popupWrapper.style.display = 'none';
        });
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="./calc/app.js"></script>


<?php
        include 'footer.php';
    ?>
</body>
</html>

    



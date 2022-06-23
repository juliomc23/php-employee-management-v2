<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Document</title>
</head>

<body>
    <main>
        <section class="login__container">
            <form autocomplete="off" class="form" method="POST" id="loginForm" action="<?= BASE_URL?>login/login" class="login__form">
                <div class="title">Welcome</div>
                <div class="subtitle">To your Dashboard!</div>

                <div class="input-container ic1">
                    <input require autocomplete="off" type="text" class="form__input input" name="email"/>
                    <div class="cut"></div>
                    <label for=username class=placeholder>Email</label>
                </div>
                <div class="input-container ic2">
                    <input require type="password" class="form__input input" name="password"/>
                    <div class="cut"></div>
                    <label for="password" class="placeholder">Password</label>
                </div>
                <div class="test"> <br>

                </div>
                <div>
                    <button type="submit" class="primary__btn submit" name="login" id="loginFormSubmitBtn">LOGIN</button>
                </div>
            </form>
            <div>

            </div>

        </section>
    </main>
</body>

</html>
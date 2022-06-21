<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <div id="logo" class="logo__container">
            <img src="" alt="" />
        </div>
        <h1>EMPLOYEE MANAGEMENT</h1>
        <nav>
            <div class="links__container">
                <span id="dashboardLink" class="links__container--item">DASHBOARD</span>
                <span id="employeeLink" class="links__container--item">EMPLOYEE</span>
            </div>
            <div class="logout__btn_container">
                <a class="logout__btn" href="../src/library/loginController.php?logout=true" name="logout">LogOut</a>
            </div>
            <div>
            </div>
        </nav>
    </header>
    <main>
        <sectiion class="employee__form__containeer">
            <h2>New Employee</h2>
            <div class="container">
                <form method="POST" action="./library/employeeController.php" class="employee__form" id="employeeForm">
                    <input type="hidden" name="newEmployee" value="new">
                    <input require type="text" name="name" placeholder="Name" class="form__input" />
                    <input require type="text" name="lastName" placeholder="Last Name" class="form__input" />
                    <input require type="email" name="email" placeholder="Email" class="form__input" />
                    <select name="gender" class="form__input">
                        <option selected value="man">Male</option>
                        <option value="woman">Female</option>
                    </select>
                    <input require type="text" name="city" placeholder="City" class="form__input" />
                    <input require type="text" name="streetAddress" placeholder="Street Address" class="form__input" />
                    <input require type="text" name="state" placeholder="State" class="form__input" />
                    <input require type="number" name="age" placeholder="Age" class="form__input" />
                    <input require type="number" name="postalCode" placeholder="Postal Code" class="form__input" />
                    <input require type="tel" name="phoneNumber" placeholder="Phone Number" class="form__input" />
                    <div class="employee__form__btn__container">
                        <button type="submit" value="submint" id="submitForm" class="formSubmitBtn primary__btn">SUBMIT</button>
                    </div>
                </form>
                <button id="formReturnBtn" class="formReturn primary__btn">RETURN</button>
            </div>

        </sectiion>
    </main>
</body>

</html>
</body>

</html>
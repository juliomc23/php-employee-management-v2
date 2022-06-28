<?php
    $genderSelect = "";
// Setting up select echo string
$genderArray = array("male", "female");
foreach ($genderArray as $genderItem) {
    if ($getEmployee["gender"] == $genderItem && $getEmployee["gender"] != null) {
        $genderSelect .= "<option selected>" . $genderItem . "</option>";
    } elseif ($getEmployee["gender"] == $genderItem && $getEmployee["gender"] == null) {
        $genderSelect .= "<option value='' hidden selected>Select</option>";
    } else {
        $genderSelect .= "<option>" . $genderItem . "</option>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/assets/css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="../assets/css/login.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- ------------- FOR JS-GRID ------------- -->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script        type="text/javascript"   src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    </style>
    <title>EMPLOYEE MANAGEMENT</title>
</head>
<body>

<body class="d-flex flex-column h-100">


    <div class="container-fluid">

        <main class="col-lg-8 col-md-10 p-2 mx-auto gy-2">
            <div class="pb-2">
                <h2 id="employeeTitle">Employee</h2>
            </div>
            <div class="col">
                <form method="POST" action="../updateEmp" class="employee__form needs-validation" id="employeeForm">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="name" class="form-label">First name</label>
                            <input require type="text" name="name" placeholder="Name" value='<?php echo $this->employee['name']?>' class="form__input form-control" />
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Last name</label>
                            <input require type="text" name="lastName" placeholder="Last Name" value='<?php echo $this->employee['last_name']?>' class="form__input form-control" />
                        </div>
                        <div class="col-md-8">
                            <label for="email" class="form-label">Email</label>
                            <input require type="email" name="email" placeholder="Email" value='<?php echo $this->employee['email']?>' class="form__input form-control" />
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                            <small class="text-muted">We'll never share this email with anyone else.</small>
                        </div>
                        <div class="col-md-4">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select" id="gender">
                                <option value="">Choose...</option>
                                <option value="woman">Woman</option>
                                <option value="man">Man</option>
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label for="city" class="form-label">City</label>
                            <input require type="text" name="city" placeholder="City" class="form__input form-control" value='<?php echo $this->employee['city']?>'/>
                            <div class="invalid-feedback">
                                Please enter the employee's city.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="streetAddress" class="form-label">Street Address</label>
                            <input require type="text" name="streetAddress" placeholder="Street Address" value='<?php echo $this->employee['street_address']?>' class="form__input form-control" />
                            <div class="invalid-feedback">
                                Please enter the street number.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="state" class="form-label">State</label>
                            <input require type="text" name="state" placeholder="State" value='<?php echo $this->employee['state']?>' class="form__input form-control" />
                            <div class="invalid-feedback">
                                Please enter the state.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="age" class="form-label">Age</label>
                            <input require type="number" name="age" placeholder="Age" value='<?php echo $this->employee['age']?>' class="form__input form-control" />
                            <div class="invalid-feedback">
                                Please enter the employee's age.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="postalCode" class="form-label">Postal Code</label>
                            <input require type="number" name="postalCode" placeholder="Postal Code" value='<?php echo $this->employee['postal_code']?>' class="form__input form-control" />
                            <div class="invalid-feedback">
                                Please enter the employee's postal code.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input require type="tel" name="phoneNumber" placeholder="Phone Number" value='<?php echo $this->employee['phone_number']?>' class="form__input form-control" />
                            <div class="invalid-feedback">
                                Please enter the phone number.
                            </div>
                        </div>
                    </div>

                    <div class="text-center pt-4">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Update Employee</button>
                        <a href="<?= BASE_URL ?>" class="btn btn-secondary">Return</a>

                    </div>

                </form>
                <div id="responseMsg"></div>
            </div>
    </div>
    <div class="modal fade" id="errorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content bg-danger">
                <div class="modal-header border-0">
                    <h3 class="modal-title text-light mx-auto" id="errorModalLabel">Error!</h3>
                </div>
                <div class="modal-body text-center text-light h5">
                    This id is not related to any user
                </div>
                <div class="modal-footer border-0">
                    <a href="<?= BASE_URL ?>" class="btn btn-light mx-auto">Go back to dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="successfulAddModal" tabindex="-1" aria-labelledby="successfulAddModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h3 class="modal-title mx-auto" id="successfulAddModalLabel">Success!</h3>
                </div>
                <div class="modal-body text-center h5">
                    The employee has been added to the database
                </div>
                <div class="modal-footer border-0">
                    <a href="./dashboard.php" class="btn btn-primary mx-auto">Go back to dashboard</a>
                </div>
            </div>
        </div>
    </div>
    </main>
</div>

</body>

</html>
</body>


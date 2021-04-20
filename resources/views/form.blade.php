<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <form method="post" action="{{route('addRecord')}}" class="register-form" id="register-form" />
                    @csrf
                        <h2>Student Management Form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fname">Name :</label>
                                <input type="text" name="fname" id="name" maxlength="25" autofocus required/>
                                <label for="surname">Surname :</label>
                                <input type="text" name="surname" id="name" maxlength="25" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rollno">Roll Number :</label>
                            <input type="text" name="rollno" id="rollno" maxlength="6" pattern="[0-9]{6}" required/>
                        </div>

                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" maxlength="50" required/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="text" name="email" id="email" maxlength="50" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,}" required/>
                        </div>

                        <div class="form-group">
                            <label for="mobile">Mobile Number :</label>
                            <input type="text" name="mobile" id="mobile" maxlength="10"  pattern="[6-9][0-9]{9}" required/>
                        </div>

                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birthDate" id="birth_date" min="01-01-2002" max="01-01-2017"/>
                        </div>

                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" maxlength="50" required/>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="City">City :</label>
                                <input type="text" name="city" id="city" minlength="3" maxlength="20" required/>
                            </div> 
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value="Tamil Nadu" selected>Tamil Nadu</option>
                                    	<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>                                       
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkand/option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>                                       
                                        <option value="Odisha">Odisha</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="country">Country :</label>
                                <input type="text" name="country" id="country" maxlength="50" required/>
                            </div>                       
                        </div>
                
                        <div class="form-submit">
                            <input type="reset" value="Reset" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
  
</body>
</html>
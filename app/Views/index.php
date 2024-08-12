<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday City - Survey</title>

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="https://png.pngtree.com/png-vector/20220701/ourmid/pngtree-check-list-mark-icon-checklist-png-image_5452075.png" type="image/png">


    <!-- Bootstrap-5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- custom-styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animation.css">
    <style>
        .additional-fields {
            display: none;
        }
        .swimming-pool-size {
            display: none;
        }
    </style>
</head>
<body>
    <main>
        <div class="inner">
            <header>
                <div class="logo">
                    <div class="logo-icon">
                        <img src="assets/images/logo.png" alt="BeRifma">
                    </div>
                    <div class="logo-text">
                        Holiday City
                    </div>
                </div>
                <div class="bar-end">
                    <h3><i class="fa-solid fa-square-phone-flip"></i>Need Help? <span>Call an Expert  +93892384</span></h3>
                </div>
            </header>
            <div class="container">
                <div class="wrapper">

                    <!-- form -->
                    <form id="steps" class="show-section" method="post" enctype="multipart/form-data" action="submit_survey">

                        <!-- step1  -->
                        <section class="steps">
                            <article>
                                <div class="main-heading">
                                    Who are you ?
                                </div>
                                <div class="main-text">
                                    <i>Holiday City</i> is an exclusive network of the world's top 
                                    talent in business, design, and technology. 
                                </div>
                            </article>

                            <!-- step-1 form  -->
                            <div id="step1" class="form-inner">
                                <div class="steps-inner lightSpeedIn">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="radio-field">
                                                <img src="assets/images/step1-1.png" alt="">
                                                <label> Friendly̥ Active Senior Living</label>
                                                <input name="who_are_you" checked type="radio" value="friendly_active_senior">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-field">
                                                <img src="assets/images/step1-1.png" alt="">
                                                <label>Back to Home</label>
                                                <input name="who_are_you" type="radio" value="back_to_home">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-field">
                                                <img src="assets/images/step1-1.png" alt="">
                                                <label>Early Retirement Remotework</label>
                                                <input name="who_are_you" type="radio" value="early_retirement_remotework">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-field">
                                                <img src="assets/images/step1-1.png" alt="">
                                                <label>Investment</label>
                                                <input name="who_are_you" type="radio" value="investment">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-field">
                                                <img src="assets/images/step1-1.png" alt="">
                                                <label>Second Home</label>
                                                <input name="who_are_you" type="radio" value="second_home">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="radio-field">
                                                <img src="assets/images/step1-1.png" alt="">
                                                <label>Vacation Home With ROI for NRIs</label>
                                                <input name="who_are_you" type="radio" value="vacation_home_with_roi_for_nris">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next-prev">
                                        <button type="button" id="step1btn" class="next">next<i class="fa-solid fa-arrow-right"></i></button>
                                        <style>
                                            button.next {
                                                background-color: blue;
                                                color: white; /* Optional: to make the text color white */
                                                border: none; /* Optional: to remove any default border */
                                                padding: 10px 20px; /* Optional: to add some padding */
                                                border-radius: 5px; /* Optional: to round the corners */
                                                cursor: pointer; /* Optional: to change the cursor on hover */
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                            <div class="right-map">
                                <img src="assets/images/right.png" alt="">
                            </div>
                        </section>

                        <!-- step2 -->
                        <section class="steps">
                            <article>
                                <div class="main-heading">
                                    About you
                                </div>
                                <div class="main-text">
                                    Holiday City is an exclusive network
                                </div>
                            </article>

                            <!-- step-2 form -->
                            <div id="step2" class="form-inner">
                                <div class="steps-inner lightSpeedIn">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    First Name
                                                </label>
                                                <input required type="text" name="first_name" id="firstName" placeholder="Jonnthan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Last Name
                                                </label>
                                                <input required type="text" name="last_name" id="lastName" placeholder="Jonnthan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="gender">Gender:</label>
                                                <select name="gender" id="gender" required>
                                                    <option value="">Select Gender</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Nationality
                                                </label>
                                                <input required type="text" name="nationality" id="nationality" placeholder="Indian">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label for="phone">
                                                    Age
                                                </label>
                                                <input required type="number" name="age" id="age" placeholder="50">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label for="phone">
                                                    Phone
                                                </label>
                                                <div class="field-c">
                                                    <input required type="text" name="phone" id="phone" placeholder="+91-9999999999">
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Email
                                                </label>
                                                <input required type="text" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Designation
                                                </label>
                                                <input required type="text" name="designation" id="designation" placeholder="Designation">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Current Residential Location
                                                </label>
                                                <input required type="text" name="current_residential_location" id="current_residential_location" placeholder="Current Residential Location">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Hometown
                                                </label>
                                                <input required type="text" name="hometown" id="hometown" placeholder="Hometown">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Project Location
                                                </label>
                                                <input required type="text" name="project_location" id="project_location" placeholder="Project Location">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    Interested District
                                                </label>
                                                <input required type="text" name="interested_district" id="interested_district" placeholder="Interested District">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-field">
                                                <label>
                                                    How far from the city? 
                                                </label>
                                                <input required type="number" name="distance" id="distance" placeholder="Distance">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="info-text">
                                                <i class="fa-solid fa-book"></i>
                                                These are the standard values for number of shares and per value in 
                                                many top tier companies choose to get started
                                            </div>
                                        </div>
                                    </div>
                                    <div class="next-prev">
                                        <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>Previous step</button>
                                        <button type="button" id="step2btn" class="next">next<i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="right-map">
                                <img src="assets/images/right.png" alt="">
                            </div>
                        </section>

                        <!-- step3 -->
                        <section class="steps">
                            <article>
                                <div class="main-heading">
                                    Your Preference Matters
                                </div>
                                <div class="main-text">
                                Which type of house are you interested in?
                                </div>
                            </article>
                            
                            <script>
                                function updateSubType() {
                                    var houseType = document.getElementById("houseType").value;
                                    var farmHouseFields = document.getElementById("farmHouseFields");
                                    var villaFields = document.getElementById("villaFields");
                                    var resortFields = document.getElementById("resortFields");
                                
                                    // Show or hide additional fields based on house type
                                    if (houseType === "farm_house") {
                                        farmHouseFields.style.display = "block";
                                        villaFields.style.display = "none";
                                        resortFields.style.display = "none";
                                    } else if (houseType === "villa") {
                                        villaFields.style.display = "block";
                                        farmHouseFields.style.display = "none";
                                        resortFields.style.display = "none";
                                    } else if (houseType === "resort") {
                                        resortFields.style.display = "block";
                                        villaFields.style.display = "none";
                                        farmHouseFields.style.display = "none";
                                    } else {
                                        farmHouseFields.style.display = "none";
                                        villaFields.style.display = "none";
                                        resortFields.style.display = "none";
                                    }
                                }
                            
                                function toggleSwimmingPoolSize() {
                                    var swimmingPoolYes = document.getElementById("swimmingPoolYes").checked;
                                    var swimmingPoolSize = document.getElementById("swimmingPoolSize");
                                
                                    if (swimmingPoolYes) {
                                        swimmingPoolSize.style.display = "inline";
                                    } else {
                                        swimmingPoolSize.style.display = "none";
                                    }
                                }
                            </script>
                            

                            <!-- step-3 form -->
                            <div id="step3" class="form-inner">
                                <div class="steps-inner lightSpeedIn">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-field select-field">
                                                
                                            <select name="houseType" id="houseType" onchange="updateSubType()" required>
                                                <option value="">--Select--</option>
                                                <option value="villa">Villa</option>
                                                <option value="resort">Resort</option>
                                                <option value="farm_house">Farm House</option>
                                            </select>

                                            <!-- Farm House Fields -->
                                            <div id="farmHouseFields" class="additional-fields">
                                            
                                                <h3>Farm House Details</h3>

                                                <div id="step4" class="form-inner">
                                                    <div class="steps-inner lightSpeedIn">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-field">
                                                                    <label>Type of farm:</label>

                                                                    <div class="d-flex align-items-center mb-2">
                                                                        <input type="radio" id="flower" name="farmType" value="flower">&nbsp&nbsp&nbsp
                                                                        <label for="flower">Flower</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

                                                                        <input type="radio" id="fruits" name="farmType" value="fruits">&nbsp&nbsp&nbsp
                                                                        <label for="fruits">Fruits</label>
                                                                    </div>
                                                                    <label for="otherFarmType">Other:</label>
                                                                    <input type="text" id="otherFarmType" name="otherFarmType">
                                                                </div> 
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <label for="acres">How many acres?</label>
                                                    <input type="number" id="acres" name="acres"><br><br>
                                                    <label>Facility management needed?</label><br>
                                                    <div class="col-md-6">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <input type="radio" id="yes" name="facilityManagement" value="yes">
                                                            <label for="yes">Yes</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                            <input type="radio" id="no" name="facilityManagement" value="no">
                                                            <label for="no">No</label>
                                                        </div>
                                                    </div>
                                                    <label for="additionalServices">Any additional services needed?</label><br>
                                                    <textarea id="additionalServices" name="additionalServices" rows="4" cols="50"></textarea>
                                                </div>
                                            </div>

                                            <!-- Villa Fields -->
                                            <div id="villaFields" class="additional-fields">
                                                <h3>Villa Details</h3>
                                                <label for="bedrooms">How many bedrooms?</label>
                                                <input type="number" id="bedrooms" name="bedrooms"><br><br>
                                                <label for="squareFeet">How many square feet?</label>
                                                <input type="number" id="squareFeet" name="squareFeet"><br><br>
                                                <label for="masterBedroomSize">Master bedroom size?</label>
                                                <input type="number" id="masterBedroomSize" name="masterBedroomSize"><br><br>
                                                <label for="livingRoomSize">Living room size?</label>
                                                <input type="number" id="livingRoomSize" name="livingRoomSize"><br><br>
                                                <label for="bedroomSize">Bedroom size?</label>
                                                <input type="number" id="bedroomSize" name="bedroomSize"><br><br>
                                                <label for="bathroomSize">Bathroom size?</label>
                                                <input type="number" id="bathroomSize" name="bathroomSize"><br><br>
                                                <label>Need swimming pool? If yes, size?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="swimmingPoolYes" name="swimmingPool" value="yes" onclick="toggleSwimmingPoolSize()">
                                                    <label for="swimmingPoolYes">Yes</label>
                                                    <input type="radio" id="swimmingPoolNo" name="swimmingPool" value="no" onclick="toggleSwimmingPoolSize()">
                                                    <label for="swimmingPoolNo">No</label><br>
                                                </div>
                                                <input type="number" id="swimmingPoolSize" name="swimmingPoolSize" class="swimming-pool-size"><br><br>
                                                <label>Facility management needed?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="yes" name="villaFacilityManagement" value="yes">
                                                    <label for="yes">Yes</label><br>
                                                    <input type="radio" id="no" name="villaFacilityManagement" value="no">
                                                    <label for="no">No</label><br><br>
                                                </div>
                                                <label>Need site visiting?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="siteVisitYes" name="siteVisit" value="yes">
                                                    <label for="siteVisitYes">Yes</label><br>
                                                    <input type="radio" id="siteVisitNo" name="siteVisit" value="no">
                                                    <label for="siteVisitNo">No</label><br><br>
                                                </div>
                                                <label>Online booking?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="onlineBookingYes" name="onlineBooking" value="yes">
                                                    <label for="onlineBookingYes">Yes</label><br>
                                                    <input type="radio" id="onlineBookingNo" name="onlineBooking" value="no">
                                                    <label for="onlineBookingNo">No</label><br><br>
                                                </div>
                                                <label>Real-time monitoring needed? (smart home facility needed)</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="realTimeMonitoringYes" name="realTimeMonitoring" value="yes">
                                                    <label for="realTimeMonitoringYes">Yes</label><br>
                                                    <input type="radio" id="realTimeMonitoringNo" name="realTimeMonitoring" value="no">
                                                    <label for="realTimeMonitoringNo">No</label><br><br>
                                                </div>    
                                            </div>

                                            <!-- Resort Fields -->
                                            <div id="resortFields" class="additional-fields">
                                                <h3>Resort Details</h3>
                                                <label for="resortType">What type of resort?</label>
                                                <select id="resortType" name="resortType">
                                                    <option value="traditional">Traditional resort</option>
                                                    <option value="contemporary">Contemporary resort</option>
                                                    <option value="bamboo">Bamboo resort</option>
                                                    <option value="nature">Nature resort</option>
                                                    <option value="tent">Tent house</option>
                                                    <option value="floating">Floating resort</option>
                                                    <option value="preModuled">Pre-moduled home</option>
                                                </select><br><br>

                                                <div class="col-md-6">
                                                    <label for="phone">
                                                            Need campsite?
                                                    </label>
                                                    <div class="d-flex align-items-center mb-2">    
                                                        <input type="radio" id="campsiteYes" name="campsite" value="yes">
                                                        <label for="campsiteYes">Yes</label><br>&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <input type="radio" id="campsiteNo" name="campsite" value="no">
                                                        <label for="campsiteNo">No</label><br><br>
                                                    </div>
                                                </div>

                                                <label>Need pub?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="pubYes" name="pub" value="yes">
                                                    <label for="pubYes">Yes</label><br>
                                                    <input type="radio" id="pubNo" name="pub" value="no">
                                                    <label for="pubNo">No</label><br><br>
                                                </div>
                                                <label>Need bar?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="barYes" name="bar" value="yes">
                                                    <label for="barYes">Yes</label><br>
                                                    <input type="radio" id="barNo" name="bar" value="no">
                                                    <label for="barNo">No</label><br><br>
                                                </div>
                                                <label>Open restaurant?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="openRestaurantYes" name="openRestaurant" value="yes">
                                                    <label for="openRestaurantYes">Yes</label><br>
                                                    <input type="radio" id="openRestaurantNo" name="openRestaurant" value="no">
                                                    <label for="openRestaurantNo">No</label><br><br>
                                                </div>
                                                <label for="additionalServices">Any additional services needed?</label><br>
                                                <textarea id="additionalServices" name="additionalServices" rows="4" cols="50"></textarea>
                                                <label> Need yoga or meditations?</label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="yogaYes" name="yoga" value="yes">
                                                    <label for="yogaYes">Yes</label><br>
                                                    <input type="radio" id="yogaNo" name="yoga" value="no">
                                                    <label for="yogaNo">No</label><br><br>
                                                </div>
                                                <label> Need indoor games? </label><br>
                                                <div class="d-flex align-items-center mb-2">
                                                    <input type="radio" id="gamesYes" name="games" value="yes">
                                                    <label for="gamesYes">Yes</label><br>
                                                    <input type="radio" id="gamesNo" name="games" value="no">
                                                    <label for="gamesNo">No</label><br><br>
                                                </div>
                                                <label for="suggestions"> If any other, type your suggestions : </label><br>
                                                <textarea id="suggestions" name="suggestions" rows="4" cols="50"></textarea>
                                            </div>
                                                <span></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="next-prev">
                                        <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>Previous step</button>
                                        <button type="button" id="step3btn" class="next">next<i class="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="right-map">
                                <img src="assets/images/right.png" alt="">
                            </div>
                        </section>

                        <!-- step4 -->
                        <section class="steps">
                            <article>
                                <div class="main-text">
                                    Please fill in the addition details!
                                </div>
                            </article>

                            <!-- step-4 form --> 
                            <div id="step4" class="form-inner">
                                <div class="steps-inner lightSpeedIn">
                                <div class="col-md-12">
                                    <div class="input-field">
                                        <label for="textfield1"><h4>What facilities are you interested in our wellness park?</h4></label>
                                        <div class="checkbox-grid">
                                            <label><input type="checkbox" name="wellnessFacilities" value="Occupational wellness"> Occupational wellness</label>
                                            <label><input type="checkbox" name="wellnessFacilities" value="Financial wellness"> Financial wellness</label>
                                            <label><input type="checkbox" name="wellnessFacilities" value="Anti-aging"> Anti-aging</label>
                                            <label><input type="checkbox" name="wellnessFacilities" value="Environmental wellness"> Environmental wellness</label>
                                            <label><input type="checkbox" name="wellnessFacilities" value="Spiritual wellness"> Spiritual wellness</label>
                                            <label><input type="checkbox" name="wellnessFacilities" value="Intellectual wellness"> Intellectual wellness</label>
                                            <label><input type="checkbox" name="wellnessFacilities" value="Physical wellness"> Physical wellness</label>
                                            <label><input type="checkbox" name="wellnessFacilities" value="Social wellness"> Social wellness</label>
                                        </div>
                                    </div>
                                </div>
                                    <div id="accordion">
                                        <div class="add-button">
                                            <div>
                                                <div>
                                                    <label><h4> Need smart home facility? </h4></label><br>
                                                    <div class="d-flex align-items-center mb-2">
                                                        <label><input type="radio" name="smartHomeFacilityGeneral" value="Yes"> Yes</label>&nbsp&nbsp&nbsp&nbsp&nbsp
                                                        <label><input type="radio" name="smartHomeFacilityGeneral" value="No"> No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .col-md-12 {
                                            width: 100%;
                                            padding: 15px;
                                            box-sizing: border-box;
                                        }
                                    
                                        .input-field {
                                            margin: 10px 0;
                                        }
                                    
                                        .input-field h4 {
                                            margin-bottom: 15px;
                                        }
                                    
                                        .checkbox-grid {
                                            display: grid;
                                            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                                            gap: 10px;
                                        }
                                    
                                        .checkbox-grid label {
                                            display: flex;
                                            align-items: center;
                                            font-size: 16px;
                                            background: #f9f9f9;
                                            padding: 5px; /* Adjust padding */
                                            border-radius: 5px;
                                            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                                            transition: background 0.3s; /* Smooth transition for hover effect */
                                        }
                                    
                                        .checkbox-grid label:hover {
                                            background: #e0e0e0; /* Lighten background on hover */
                                            cursor: pointer; /* Change cursor to pointer */
                                        }
                                    
                                        .checkbox-grid input {
                                            margin-right: 5px; /* Reduce spacing */
                                            width: 2px; /* Set width for the checkbox */
                                            height: 15px; /* Set height for the checkbox */
                                            transform: scale(0.8); /* Scale down the checkbox */
                                            appearance: none; /* Remove default checkbox */
                                            border: 2px solid #007bff; /* Add a custom border */
                                            border-radius: 3px; /* Round corners for custom checkbox */
                                            outline: none; /* Remove outline */
                                            cursor: pointer; /* Pointer cursor for checkbox */
                                        }
                                    
                                        .checkbox-grid input:checked {
                                            background: #007bff; /* Background color when checked */
                                            border-color: #007bff; /* Border color when checked */
                                        }
                                    
                                        .checkbox-grid input:checked::after {
                                            content: ''; /* Add a checkmark using pseudo-element */
                                            display: block;
                                            position: relative;
                                            left: 4px; /* Adjust positioning */
                                            top: 1px; /* Adjust positioning */
                                            width: 7px; /* Size of the checkmark */
                                            height: 12px; /* Size of the checkmark */
                                            border: solid white; /* Checkmark color */
                                            border-width: 0 2px 2px 0; /* Adjust checkmark lines */
                                            transform: rotate(45deg); /* Rotate to create a checkmark */
                                        }
                                    
                                        .checkbox-grid input:focus {
                                            outline: 2px solid #007bff; /* Blue outline on focus */
                                            outline-offset: 2px; /* Space between the outline and the checkbox */
                                        }
                                    
                                        
                                    </style>
                                    <div class="col-md-12">
                                        <div class="input-field">
                                            <label for="textfield1"><h4>Other facilities :</h4></label>
                                            <div class="checkbox-grid">
                                                <label><input type="checkbox" name="otherFacilities" value="Swimming pool"> Swimming pool</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Football turf"> Football turf</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Island lake"> Island lake</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Flower garden"> Flower garden</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Super market"> Super market</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Movie studio"> Movie studio</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Cafeteria"> Cafeteria</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Natural pond"> Natural pond</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Residents conference hall"> Residents conference hall</label>
                                                <label><input type="checkbox" name="otherFacilities" value="24x7 management team"> 24x7 management team</label>
                                                <label><input type="checkbox" name="otherFacilities" value="Health clinic with wellness park"> Health clinic with wellness park</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="next-prev">
                                        <button type="button" class="prev"><i class="fa-solid fa-arrow-left"></i>Previous step</button>
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                            <div class="right-map">
                                <img src="assets/images/right.png" alt="">
                            </div>
                        </section>

                        

                    </form>
                </div>
            </div>
            <footer>
                <ul class="links">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Insurance Licenses</a></li>
                </ul>
                <div class="progress-counter">
                    <div class="progress-pin">0%</div>
                    <div class="counter-inner">
                        
                    </div>
                </div>
            </footer>

        </div>
    </main>








    
    <div id="error">

    </div>


    <!-- Bootstrap-5 -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Jquery -->
    <script src="assets/js/jquery-3.6.1.min.js"></script>

    <!-- My js -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
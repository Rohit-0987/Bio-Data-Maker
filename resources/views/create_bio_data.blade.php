<!-- multistep form -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/detail-style.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <nav class="flex" aria-label="Breadcrumb" style="padding-top: 30px">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="/"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Home
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Create Bio
                        Data</span>
                </div>
            </li>
        </ol>
    </nav>
    <form id="msform" action="create_bio_data_submit" method="post">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Personal Detail</li>
            <li>Family Detail</li>
            <li>Contact Details</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Personal Detail</h2>
            <h3 class="fs-subtitle">This is step 1</h3>
            <label for="" class="field-label">Name</label>
            <input type="text" name="name" placeholder="Enter Your Name" />
            <span class="text-danger">
                @error('name')
                    {{ $message }}
                @enderror
            </span><br>
            <label for="" class="field-label">Date of birth</label>
            <input type="date" name="dob" placeholder="Select Date of Birth" />
            <label for="" class="field-label">Place of birth</label>
            <input type="text" name="place" placeholder="Enter Place of Birth" />
            <label for="" class="field-label">Select Your Rashi</label>
            <div class="col-md-4">
                <select class="form-control select2" name="rashi">
                    <option value="">Select your Rashi</option>
                    <option value="Aries (Mesh)">Aries (Mesh)</option>
                    <option value="Taurus (Vrushabh)">Taurus (Vrushabh)</option>
                    <option value="Gemini (Mithun)">Gemini (Mithun)</option>
                    <option value="Cancer (Kark)">Cancer (Kark)</option>
                    <option value="Leo (Sinh)">Leo (Sinh)</option>
                    <option value="Virgo (Kanya)">Virgo (Kanya)</option>
                    <option value="Libra (Tula)">Libra (Tula)</option>
                    <option value="Scorpio (Vrushak)">Scorpio (Vrushak)</option>
                    <option value="Sagittarius (Dhanu)">Sagittarius (Dhanu)</option>
                    <option value="Capricorn (Makar)">Capricorn (Makar)</option>
                    <option value="Aquarius (Kumbh)">Aquarius (Kumbh)</option>
                    <option value="Pisces (Meen)">Pisces (Meen)</option>
                </select>

            </div>
            <label for="" class="field-label">Select Your Nakshatra</label>
            <div class="col-md-4">
                <select class="form-control select2" name="nakshatra">
                    <option value="">Select your Nakshatra</option>
                    <option value="Ashvini/Aswini">Ashvini/Aswini</option>
                    <option value="Bharani">Bharani</option>
                    <option value="Krittika/Krithika">Krittika/Krithika</option>
                    <option value="Rohini">Rohini</option>
                    <option value="Mrigashirsha">Mrigashirsha</option>
                    <option value="Ardra">Ardra</option>
                    <option value="Punarvasu">Punarvasu</option>
                    <option value="Pushya">Pushya</option>
                    <option value="Ashlesha">Ashlesha</option>
                    <option value="Magha">Magha</option>
                    <option value="Purva Phalguni">Purva Phalguni</option>
                    <option value="Uttara Phalguni">Uttara Phalguni</option>
                    <option value="Hasta">Hasta</option>
                    <option value="Chitra">Chitra</option>
                    <option value="Swati">Swati</option>
                    <option value="Vishakha">Vishakha</option>
                    <option value="Anuradha">Anuradha</option>
                    <option value="Jyeshtha">Jyeshtha</option>
                    <option value="Mula">Mula</option>
                    <option value="Purva Ashadha">Purva Ashadha</option>
                    <option value="Uttara Ashadha">Uttara Ashadha</option>
                    <option value="Shravana">Shravana</option>
                    <option value="Dhanishtha">Dhanishtha</option>
                    <option value="Shatabhisha">Shatabhisha</option>
                    <option value="Purva Bhadrapada">Purva Bhadrapada</option>
                    <option value="Uttara Bhadrapada">Uttara Bhadrapada</option>
                    <option value="Revati">Revati</option>
                </select>
            </div>
            <label for="" class="field-label">Height</label>
            <input type="text" name="height" placeholder="Enter Your Height" />
            <label for="" class="field-label">Religion</label>
            <div class="col-md-4">
                <select class="form-control select2" name="religion">
                    <option value="">Select your Religion</option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Christian">Christian</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Jewish">Jewish</option>
                    <option value="Jain">Jain</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Parsi">Parsi</option>
                    <option value="Silkh">Sikh</option>
                    <option value="Others">Others</option>
                </select>

            </div>
            <label for="" class="field-label">Caste</label>
            <input type="text" name="caste" placeholder="Enter Your Cast" />
            <label for="" class="field-label">Sub-Caste</label>
            <input type="text" name="sub_caste" placeholder="Enter Your Sub-Caste" />
            <label for="" class="field-label">Gotra</label>
            <input type="text" name="gotra" placeholder="Enter Your Gotra" />
            <label for="" class="field-label">Manglik</label>
            <div class="col-md-4">
                <select class="form-control select2" name="manglik">
                    <option value="">Are you Manglik</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Partial (Anshik)">Partial (Anshik)</option>
                </select>

            </div>
            <label for="" class="field-label">Education</label>
            <div class="col-md-4">
                <select class="form-control select2" name="education">
                    <option value="">Select your education</option>
                    <option value="HSC/ SSC /Intermediate">HSC/ SSC /Intermediate</option>
                    <option value="Graduate">Graduate </option>
                    <option value="Post graduate">Post graduate</option>
                    <option value="Doctrate">Doctrate</option>
                    <option value="CA">CA</option>
                    <option value="Engineer">Engineer</option>
                    <option value="B. Tech/BE">B. Tech/BE</option>
                    <option value="M. Tech/ME">M. Tech/ME</option>
                    <option value="Doctor">Doctor</option>
                    <option value="MBBS">MBBS</option>
                    <option value="BAMS/BHMS">BAMS/BHMS</option>
                    <option value="MD">MD</option>
                    <option value="Lawyer / LLB / LLM">Lawyer / LLB / LLM</option>
                    <option value="Diploma / ITI">Diploma / ITI</option>
                    <option value="B-Pharmacy">B-Pharmacy</option>
                    <option value="M-Pharmacy">M-Pharmacy</option>
                    <option value="D-Pharmacy">D-Pharmacy</option>
                    <option value="BBA">BBA </option>
                    <option value="MBA">MBA</option>
                    <option value="Hotel Management">Hotel Management</option>
                    <option value="Others">Others</option>
                </select>

            </div>
            <label for="" class="field-label">College Name</label>
            <input type="text" name="college" placeholder="Enter Colloge Name" />
            <label for="" class="field-label">Employed in</label>
            <div class="col-md-4">
                <select class="form-control select2" name="employed">
                    <option value="">Employed in</option>
                    <option value="Private Sector">Private Sector</option>
                    <option value="Govt. / Public Sector">Govt. / Public Sector</option>
                    <option value="Civil Services">Civil Services</option>
                    <option value="Defence">Defence</option>
                    <option value="Business / Self Employed">Business / Self Employed</option>
                    <option value="Not Working">Not Working</option>
                    <option value="Others">Others</option>
                </select>

            </div>
            <label for="" class="field-label">Organization Name</label>
            <input type="text" name="organization" placeholder="Enter Organization Name" />
            <label for="" class="field-label">Annual Income</label>
            <div class="col-md-4">
                <select class="form-control select2">
                    <option value="">Annual Income (in ₹)</option>
                    <option value="No income">No income</option>
                    <option value="0 - 2 Lakhs">0 - 2 Lakhs</option>
                    <option value="2 - 5 Lakhs">2 - 5 Lakhs</option>
                    <option value="5 - 7.5 Lakhs">5 - 7.5 Lakhs</option>
                    <option value="7.5 - 10 Lakhs">7.5 - 10 Lakhs</option>
                    <option value="10 - 15 Lakhs">10 - 15 Lakhs</option>
                    <option value="15 - 20 Lakhs">15 - 20 Lakhs</option>
                    <option value="20 - 25 Lakhs">20 - 25 Lakhs</option>
                    <option value="25 - 50 Lakhs">25 - 50 Lakhs</option>
                    <option value="50 - 75 Lakhs">50 - 75 Lakhs</option>
                    <option value="75 Lakhs - 1 Crore">75 Lakhs - 1 Crore</option>
                    <option value="1 Crore &amp; above">1 Crore &amp; above</option>
                </select>

            </div>
            <input type="button" name="next" class="next actionn-button" value="Next" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Family Detail</h2>
            <h3 class="fs-subtitle">This is step 2</h3>
            <label for="" class="field-label">Father Name</label>
            <input type="text" name="father_name" placeholder="Enter Your Father Name" />
            <label for="" class="field-label">Father Occupation</label>
            <div class="col-md-4">
                <select class="form-control select2" name="father_occupation">
                    <option value="">Father's Occupation</option>
                    <option value="Private sector">Private sector</option>
                    <option value="Service - Govt./PSU">Service - Govt./PSU</option>
                    <option value="Business / Entrepreneur">Business / Entrepreneur</option>
                    <option value="Armed Forces">Armed Forces</option>
                    <option value="Civil Services">Civil Services</option>
                    <option value="Not employed">Not employed</option>
                </select>
            </div>
            <label for="" class="field-label">Mother Name</label>
            <input type="text" name="mother_name" placeholder="Enter Your Mother Name" />
            <label for="" class="field-label">Mother Occupation</label>
            <div class="col-md-4">
                <select class="form-control select2" name="mother_occupation">
                    <option value="">Mother's Occupation</option>
                    <option value="Private Sector">Private Sector</option>
                    <option value="Service - Govt./PSU">Service - Govt./PSU</option>
                    <option value="Business / Entrepreneur">Business / Entrepreneur</option>
                    <option value="Army / Armed Forces">Army / Armed Forces</option>
                    <option value="Civil Services">Civil Services</option>
                    <option value="Home maker">Home maker</option>
                </select>
            </div>
            <label for="" class="field-label">Total Brother</label>
            <div class="col-md-4">
                <select class="form-control select2" name="brother">
                    <option value="">Number of brothers</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

            </div>
            <label for="" class="field-label">Total Sister</label>
            <div class="col-md-4">
                <select class="form-control select2" name="sister">
                    <option value="">Number of Sister</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

            </div>
            <label for="" class="field-label">Number of Married Brother</label>
            <div class="col-md-4">
                <select class="form-control select2" name="married_brother">
                    <option value="">Number of Married Brother</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

            </div>
            <label for="" class="field-label">Number of Married Sister</label>
            <div class="col-md-4">
                <select class="form-control select2" name="married_sister">
                    <option value="">Number of Married Sister</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>

            </div>
            <input type="button" name="previous" class="previous actionn-button" value="Previous" />
            <input type="button" name="next" class="next actionn-button" value="Next" />

        </fieldset>
        <fieldset>
            <h2 class="fs-title">Contact Details</h2>
            <h3 class="fs-subtitle">Final Step</h3>
            <input type="text" name="phone" placeholder="Phone" />
            <span class="text-danger">
                @error('phone')
                    {{ $message }}
                @enderror
            </span>
            <textarea name="address" placeholder="Address"></textarea>
            
                <input type="button" name="previous" class="previous actionn-button" value="Previous" />
                <input type="submit" name="" class="actionn-button" value="Submit" />
        </fieldset>
    </form>

</body>

</html>

<!-- jQuery -->

<script src="http://thecodeplayer.com/uploads/js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/detail-script.js"></script>

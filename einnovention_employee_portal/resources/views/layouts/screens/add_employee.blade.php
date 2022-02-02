<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Add Empolyee</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-5.0.2/css/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
        media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- SIDE MENU-->
        @include('layouts.menus.menu')
        <!-- SIDE MENU-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
            @include('layouts.menus.header')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                    <!-- Personal Details-->

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Employee Registration</strong> ( Personal Details )
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group mb-2">
                                                <div class="col col-md-3">
                                                    <label for="name-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="name-input" name="name-input"
                                                        placeholder="Text" class="form-control" oninput="getEmail()">
                                                    <small class="form-text text-muted">Please enter employee full
                                                        name</small>
                                                </div>
                                            </div>
                                            <div class="row form-group  mb-2">
                                                <div class="col col-md-3">
                                                    <label for="father-name-input" class=" form-control-label">Father
                                                        Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="father-name-input" name="father-name-input"
                                                        placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Please enter employee father
                                                        name</small>
                                                </div>
                                            </div>
                                            <div class="row form-group  mb-2">
                                                <div class="col col-md-3">
                                                    <label for="cnic-no-input" class=" form-control-label">CNIC
                                                        No.</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="cnic-no-input" name="cnic-no-input"
                                                        placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Please enter employee
                                                        CNIC No.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group  mb-3">
                                                <div class="col col-md-3">
                                                    <label for="gender-input" class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col col-md-3 ">
                                                    <div class="form-check form-check-inline" id="gender-input">
                                                        <label for="male-radio" class="form-check-label">
                                                            <input type="radio" id="male-radio" name="inline-radios"
                                                                value="Male" class="form-check-input">Male
                                                        </label>
                                                        <label for="female-radio" class="form-check-label ">
                                                            <input type="radio" id="female-radio" name="inline-radios"
                                                                value="Female" class="form-check-input">Female
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col col-md-2">
                                                    <label for="dob-input" class="form-control-label"
                                                        style="text-align: center"> Date of Birth</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="date" id="dob-input" name="dob-input"
                                                        placeholder="Date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="postal-address-input" class=" form-control-label">Postal
                                                        Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="postal-address-input" id="postal-address-input"
                                                        rows="3" placeholder="Content..."
                                                        class="form-control"></textarea>
                                                    <div class="row form-group mt-3">
                                                        <div class="col-12 col-md-4">
                                                            <select name="select" id="select" class="form-control">
                                                                <option value="" disabled selected>Select City
                                                                </option>
                                                                <option value="Islamabad">Islamabad</option>
                                                                <option value="Ahmed Nager Chatha">Ahmed Nager Chatha
                                                                </option>
                                                                <option value="Ahmadpur East">Ahmadpur East</option>
                                                                <option value="Ali Khan Abad">Ali Khan Abad</option>
                                                                <option value="Alipur">Alipur</option>
                                                                <option value="Arifwala">Arifwala</option>
                                                                <option value="Attock">Attock</option>
                                                                <option value="Bhera">Bhera</option>
                                                                <option value="Bhalwal">Bhalwal</option>
                                                                <option value="Bahawalnagar">Bahawalnagar</option>
                                                                <option value="Bahawalpur">Bahawalpur</option>
                                                                <option value="Bhakkar">Bhakkar</option>
                                                                <option value="Burewala">Burewala</option>
                                                                <option value="Chillianwala">Chillianwala</option>
                                                                <option value="Chakwal">Chakwal</option>
                                                                <option value="Chichawatni">Chichawatni</option>
                                                                <option value="Chiniot">Chiniot</option>
                                                                <option value="Chishtian">Chishtian</option>
                                                                <option value="Daska">Daska</option>
                                                                <option value="Darya Khan">Darya Khan</option>
                                                                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                                                <option value="Dhaular">Dhaular</option>
                                                                <option value="Dina">Dina</option>
                                                                <option value="Dinga">Dinga</option>
                                                                <option value="Dipalpur">Dipalpur</option>
                                                                <option value="Faisalabad">Faisalabad</option>
                                                                <option value="Ferozewala">Ferozewala</option>
                                                                <option value="Fateh Jhang">Fateh Jang</option>
                                                                <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                                                <option value="Gojra">Gojra</option>
                                                                <option value="Gujranwala">Gujranwala</option>
                                                                <option value="Gujrat">Gujrat</option>
                                                                <option value="Gujar Khan">Gujar Khan</option>
                                                                <option value="Hafizabad">Hafizabad</option>
                                                                <option value="Haroonabad">Haroonabad</option>
                                                                <option value="Hasilpur">Hasilpur</option>
                                                                <option value="Haveli Lakha">Haveli Lakha</option>
                                                                <option value="Jatoi">Jatoi</option>
                                                                <option value="Jalalpur">Jalalpur</option>
                                                                <option value="Jattan">Jattan</option>
                                                                <option value="Jampur">Jampur</option>
                                                                <option value="Jaranwala">Jaranwala</option>
                                                                <option value="Jhang">Jhang</option>
                                                                <option value="Jhelum">Jhelum</option>
                                                                <option value="Kalabagh">Kalabagh</option>
                                                                <option value="Karor Lal Esan">Karor Lal Esan</option>
                                                                <option value="Kasur">Kasur</option>
                                                                <option value="Kamalia">Kamalia</option>
                                                                <option value="Kamoke">Kamoke</option>
                                                                <option value="Khanewal">Khanewal</option>
                                                                <option value="Khanpur">Khanpur</option>
                                                                <option value="Kharian">Kharian</option>
                                                                <option value="Khushab">Khushab</option>
                                                                <option value="Kot Addu">Kot Addu</option>
                                                                <option value="Jauharabad">Jauharabad</option>
                                                                <option value="Lahore">Lahore</option>
                                                                <option value="Lalamusa">Lalamusa</option>
                                                                <option value="Layyah">Layyah</option>
                                                                <option value="Liaquat Pur">Liaquat Pur</option>
                                                                <option value="Lodhran">Lodhran</option>
                                                                <option value="Malakwal">Malakwal</option>
                                                                <option value="Mamoori">Mamoori</option>
                                                                <option value="Mailsi">Mailsi</option>
                                                                <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                                                <option value="Mian Channu">Mian Channu</option>
                                                                <option value="Mianwali">Mianwali</option>
                                                                <option value="Multan">Multan</option>
                                                                <option value="Murree">Murree</option>
                                                                <option value="Muridke">Muridke</option>
                                                                <option value="Mianwali Bangla">Mianwali Bangla</option>
                                                                <option value="Muzaffargarh">Muzaffargarh</option>
                                                                <option value="Narowal">Narowal</option>
                                                                <option value="Nankana Sahib">Nankana Sahib</option>
                                                                <option value="Okara">Okara</option>
                                                                <option value="Renala Khurd">Renala Khurd</option>
                                                                <option value="Pakpattan">Pakpattan</option>
                                                                <option value="Pattoki">Pattoki</option>
                                                                <option value="Pir Mahal">Pir Mahal</option>
                                                                <option value="Qaimpur">Qaimpur</option>
                                                                <option value="Qila Didar Singh">Qila Didar Singh
                                                                </option>
                                                                <option value="Rabwah">Rabwah</option>
                                                                <option value="Raiwind">Raiwind</option>
                                                                <option value="Rajanpur">Rajanpur</option>
                                                                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                                                <option value="Rawalpindi">Rawalpindi</option>
                                                                <option value="Sadiqabad">Sadiqabad</option>
                                                                <option value="Safdarabad">Safdarabad</option>
                                                                <option value="Sahiwal">Sahiwal</option>
                                                                <option value="Sangla Hill">Sangla Hill</option>
                                                                <option value="Sarai Alamgir">Sarai Alamgir</option>
                                                                <option value="Sargodha">Sargodha</option>
                                                                <option value="Shakargarh">Shakargarh</option>
                                                                <option value="Sheikhupura">Sheikhupura</option>
                                                                <option value="Sialkot">Sialkot</option>
                                                                <option value="Sohawa">Sohawa</option>
                                                                <option value="Soianwala">Soianwala</option>
                                                                <option value="Siranwali">Siranwali</option>
                                                                <option value="Talagang">Talagang</option>
                                                                <option value="Taxila">Taxila</option>
                                                                <option value="Toba Tek Singh">Toba Tek Singh</option>
                                                                <option value="Vehari">Vehari</option>
                                                                <option value="Wah Cantonment">Wah Cantonment</option>
                                                                <option value="Wazirabad">Wazirabad</option>
                                                                <option value="" disabled>Sindh Cities</option>
                                                                <option value="Badin">Badin</option>
                                                                <option value="Bhirkan">Bhirkan</option>
                                                                <option value="Rajo Khanani">Rajo Khanani</option>
                                                                <option value="Chak">Chak</option>
                                                                <option value="Dadu">Dadu</option>
                                                                <option value="Digri">Digri</option>
                                                                <option value="Diplo">Diplo</option>
                                                                <option value="Dokri">Dokri</option>
                                                                <option value="Ghotki">Ghotki</option>
                                                                <option value="Haala">Haala</option>
                                                                <option value="Hyderabad">Hyderabad</option>
                                                                <option value="Islamkot">Islamkot</option>
                                                                <option value="Jacobabad">Jacobabad</option>
                                                                <option value="Jamshoro">Jamshoro</option>
                                                                <option value="Jungshahi">Jungshahi</option>
                                                                <option value="Kandhkot">Kandhkot</option>
                                                                <option value="Kandiaro">Kandiaro</option>
                                                                <option value="Karachi">Karachi</option>
                                                                <option value="Kashmore">Kashmore</option>
                                                                <option value="Keti Bandar">Keti Bandar</option>
                                                                <option value="Khairpur">Khairpur</option>
                                                                <option value="Kotri">Kotri</option>
                                                                <option value="Larkana">Larkana</option>
                                                                <option value="Matiari">Matiari</option>
                                                                <option value="Mehar">Mehar</option>
                                                                <option value="Mirpur Khas">Mirpur Khas</option>
                                                                <option value="Mithani">Mithani</option>
                                                                <option value="Mithi">Mithi</option>
                                                                <option value="Mehrabpur">Mehrabpur</option>
                                                                <option value="Moro">Moro</option>
                                                                <option value="Nagarparkar">Nagarparkar</option>
                                                                <option value="Naudero">Naudero</option>
                                                                <option value="Naushahro Feroze">Naushahro Feroze
                                                                </option>
                                                                <option value="Naushara">Naushara</option>
                                                                <option value="Nawabshah">Nawabshah</option>
                                                                <option value="Nazimabad">Nazimabad</option>
                                                                <option value="Qambar">Qambar</option>
                                                                <option value="Qasimabad">Qasimabad</option>
                                                                <option value="Ranipur">Ranipur</option>
                                                                <option value="Ratodero">Ratodero</option>
                                                                <option value="Rohri">Rohri</option>
                                                                <option value="Sakrand">Sakrand</option>
                                                                <option value="Sanghar">Sanghar</option>
                                                                <option value="Shahbandar">Shahbandar</option>
                                                                <option value="Shahdadkot">Shahdadkot</option>
                                                                <option value="Shahdadpur">Shahdadpur</option>
                                                                <option value="Shahpur Chakar">Shahpur Chakar</option>
                                                                <option value="Shikarpaur">Shikarpaur</option>
                                                                <option value="Sukkur">Sukkur</option>
                                                                <option value="Tangwani">Tangwani</option>
                                                                <option value="Tando Adam Khan">Tando Adam Khan</option>
                                                                <option value="Tando Allahyar">Tando Allahyar</option>
                                                                <option value="Tando Muhammad Khan">Tando Muhammad Khan
                                                                </option>
                                                                <option value="Thatta">Thatta</option>
                                                                <option value="Umerkot">Umerkot</option>
                                                                <option value="Warah">Warah</option>
                                                                <option value="" disabled>Khyber Cities</option>
                                                                <option value="Abbottabad">Abbottabad</option>
                                                                <option value="Adezai">Adezai</option>
                                                                <option value="Alpuri">Alpuri</option>
                                                                <option value="Akora Khattak">Akora Khattak</option>
                                                                <option value="Ayubia">Ayubia</option>
                                                                <option value="Banda Daud Shah">Banda Daud Shah</option>
                                                                <option value="Bannu">Bannu</option>
                                                                <option value="Batkhela">Batkhela</option>
                                                                <option value="Battagram">Battagram</option>
                                                                <option value="Birote">Birote</option>
                                                                <option value="Chakdara">Chakdara</option>
                                                                <option value="Charsadda">Charsadda</option>
                                                                <option value="Chitral">Chitral</option>
                                                                <option value="Daggar">Daggar</option>
                                                                <option value="Dargai">Dargai</option>
                                                                <option value="Darya Khan">Darya Khan</option>
                                                                <option value="Dera Ismail Khan">Dera Ismail Khan
                                                                </option>
                                                                <option value="Doaba">Doaba</option>
                                                                <option value="Dir">Dir</option>
                                                                <option value="Drosh">Drosh</option>
                                                                <option value="Hangu">Hangu</option>
                                                                <option value="Haripur">Haripur</option>
                                                                <option value="Karak">Karak</option>
                                                                <option value="Kohat">Kohat</option>
                                                                <option value="Kulachi">Kulachi</option>
                                                                <option value="Lakki Marwat">Lakki Marwat</option>
                                                                <option value="Latamber">Latamber</option>
                                                                <option value="Madyan">Madyan</option>
                                                                <option value="Mansehra">Mansehra</option>
                                                                <option value="Mardan">Mardan</option>
                                                                <option value="Mastuj">Mastuj</option>
                                                                <option value="Mingora">Mingora</option>
                                                                <option value="Nowshera">Nowshera</option>
                                                                <option value="Paharpur">Paharpur</option>
                                                                <option value="Pabbi">Pabbi</option>
                                                                <option value="Peshawar">Peshawar</option>
                                                                <option value="Saidu Sharif">Saidu Sharif</option>
                                                                <option value="Shorkot">Shorkot</option>
                                                                <option value="Shewa Adda">Shewa Adda</option>
                                                                <option value="Swabi">Swabi</option>
                                                                <option value="Swat">Swat</option>
                                                                <option value="Tangi">Tangi</option>
                                                                <option value="Tank">Tank</option>
                                                                <option value="Thall">Thall</option>
                                                                <option value="Timergara">Timergara</option>
                                                                <option value="Tordher">Tordher</option>
                                                                <option value="" disabled>Balochistan Cities</option>
                                                                <option value="Awaran">Awaran</option>
                                                                <option value="Barkhan">Barkhan</option>
                                                                <option value="Chagai">Chagai</option>
                                                                <option value="Dera Bugti">Dera Bugti</option>
                                                                <option value="Gwadar">Gwadar</option>
                                                                <option value="Harnai">Harnai</option>
                                                                <option value="Jafarabad">Jafarabad</option>
                                                                <option value="Jhal Magsi">Jhal Magsi</option>
                                                                <option value="Kacchi">Kacchi</option>
                                                                <option value="Kalat">Kalat</option>
                                                                <option value="Kech">Kech</option>
                                                                <option value="Kharan">Kharan</option>
                                                                <option value="Khuzdar">Khuzdar</option>
                                                                <option value="Killa Abdullah">Killa Abdullah</option>
                                                                <option value="Killa Saifullah">Killa Saifullah</option>
                                                                <option value="Kohlu">Kohlu</option>
                                                                <option value="Lasbela">Lasbela</option>
                                                                <option value="Lehri">Lehri</option>
                                                                <option value="Loralai">Loralai</option>
                                                                <option value="Mastung">Mastung</option>
                                                                <option value="Musakhel">Musakhel</option>
                                                                <option value="Nasirabad">Nasirabad</option>
                                                                <option value="Nushki">Nushki</option>
                                                                <option value="Panjgur">Panjgur</option>
                                                                <option value="Pishin Valley">Pishin Valley</option>
                                                                <option value="Quetta">Quetta</option>
                                                                <option value="Sherani">Sherani</option>
                                                                <option value="Sibi">Sibi</option>
                                                                <option value="Sohbatpur">Sohbatpur</option>
                                                                <option value="Washuk">Washuk</option>
                                                                <option value="Zhob">Zhob</option>
                                                                <option value="Ziarat">Ziarat</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <select name="select" id="select" class="form-control">
                                                                <option value="" disabled selected>Select State</option>
                                                                <option value="Azad Jammu and Kashmir">Azad Jammu and
                                                                    Kashmir</option>
                                                                <option value="Balochistan">Balochistan</option>
                                                                <option value="Gilgit-Baltistan">Gilgit-Baltistan
                                                                </option>
                                                                <option value="Islamabad Capital Territory">Islamabad
                                                                    Capital Territory</option>
                                                                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa
                                                                </option>
                                                                <option value="Punjab">Punjab</option>
                                                                <option value="Sindh">Sindh</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <input type="number" id="cnic-no-input" name="cnic-no-input"
                                                                placeholder="Zip Code" class="form-control">
                                                        </div>
                                                    </div>
                                                    <small class="form-text text-muted">Please enter employee postal
                                                        address</small>
                                                </div>
                                            </div>
                                            <div class="row form-group  mb-2">
                                                <div class="col col-md-3">
                                                    <label for="phone-no-input" class=" form-control-label">Phone
                                                        No.</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="phone-no-input" name="phone-no-input"
                                                        placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Please enter employee phone
                                                        no.</small>
                                                </div>
                                            </div>
                                            <div class="row form-group  mb-2">
                                                <div class="col col-md-3">
                                                    <label for="emg-phone-no-input"
                                                        class=" form-control-label">Emergency Contact
                                                        No.</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="emg-phone-no-input" name="emg-phone-no-input"
                                                        placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Employment Details-->

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Employee Registration</strong> ( Employment Details )
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group mb-3">
                                                <div class="col-md">
                                                    <label for="designation-input"
                                                        class="form-control-label">Designation</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="select" id="designation-input" class="form-control">
                                                        <option value="" disabled selected>Please Select</option>
                                                        <option value="Backend Developer">Backend Developer</option>
                                                        <option value="Frontend Developer">Frontend Developer</option>
                                                        <option value="Full Stack Developer">Full Stack Developer
                                                        </option>
                                                        <option value="Mobile App Developer">Mobile App Developer
                                                        </option>
                                                        <option value="Wordpress Developer">Wordpress Developer</option>
                                                        <option value="Graphic Designer">Graphic Designer</option>
                                                        <option value="HR Manager">HR Manager</option>
                                                    </select>
                                                </div>
                                                <div class="col-md">
                                                    <label for="responsibilities-input"
                                                        class="form-control-label">Responsibilities</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select name="select" id="responsibilities-input"
                                                        class="form-control">
                                                        <option value="" disabled selected>Please Select</option>
                                                        <option value="Joiner">Joiner</option>
                                                        <option value="Senior">Senior</option>
                                                        <option value="Internee">Internee</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group mb-3">
                                                <div class="col-md">
                                                    <label for="doj-input" class="form-control-label">Date of
                                                        joining</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="date" id="doj-input" name="doj-input"
                                                        placeholder="Date" class="form-control">
                                                </div>
                                                <div class="col-md">
                                                    <label for="salery-input" class="form-control-label">Starting
                                                        Salery</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" id="salery-input" name="salery-input"
                                                        placeholder="Text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Employment Details-->

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Employee Registration</strong> ( Banking Details )
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="bank-name-input" class=" form-control-label">Bank Name</label>
                                                </div>
                                                <div class="col-12 col-md-9 mb-2">
                                                    <input type="text" id="bank-name-input" name="bank-name-input"
                                                        placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Please enter employee bank
                                                        name</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="account-title-input" class=" form-control-label">Account
                                                        Title</label>
                                                </div>
                                                <div class="col-12 col-md-9 mb-2">
                                                    <input type="text" id="account-title-input" name="account-title-input"
                                                        placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Please enter employee account title</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="account-no-input" class=" form-control-label">Account
                                                        No.</label>
                                                </div>
                                                <div class="col-12 col-md-9 mb-2">
                                                    <input type="number" id="account-no-input" name="account-no-input"
                                                        placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Please enter employee
                                                        account no.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- -->

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Employee Registration</strong> ( Attachments Files )
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">CNIC Picture</label>
                                                </div>
                                                <div class="col-12 col-md-9 mb-3">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Profile Picture</label>
                                                </div>
                                                <div class="col-12 col-md-9 mb-3">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Education Document</label>
                                                </div>
                                                <div class="col-12 col-md-9 mb-3">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-multiple-input" class=" form-control-label">Curriculum Vitae</label>
                                                </div>
                                                <div class="col-12 col-md-9 mb-3">
                                                    <input type="file" id="file-multiple-input" name="file-multiple-input" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Employment Login Credential -->

                                    <div class="card">
                                        <div class="card-header">
                                            <strong>Employee Registration</strong> ( Login Credential )
                                        </div>
                                        <div class="card-body card-block">
                                            <div class="row form-group mb-3">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email
                                                        Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="email-input" name="email-input"
                                                        autocomplete="off" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">Please enter employee email
                                                        address</small>
                                                </div>
                                            </div>
                                            <div class="row form-group mb-3">
                                                <div class="col col-md-3">
                                                    <label for="password-input"
                                                        class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="password-input" name="password-input"
                                                        placeholder="Password" class="form-control">
                                                    <small class="help-block form-text">Please enter a complex
                                                        password</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div class="col-lg-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('vendor/bootstrap-5.0.2/js/popper.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-5.0.2/js/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        function getEmail() {
            var x = document.getElementById("name-input").value;
            document.getElementById("email-input").value = x.replaceAll(" ", "_").toLowerCase() + '@einnovention.co.uk';
        }

    </script>
</body>

</html>
<!-- end document-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <script
                src="https://kit.fontawesome.com/64d58efce2.js"
                crossorigin="anonymous"
            ></script>

                <link rel="stylesheet" href="css/style2.css" />
                    <title> iRegister | Registration Form</title>
    </head>   
<body>
    
    <form action="#" method="post" target="_blank" class="form-horizontal">

        <div class="wrapper">
            <div class="title">
              Registration Form
            </div>
        <div class="wrapper">
            <h2>Personal Information</h2>
            <span class="help-block">(Personal na impormasyon)</span>
        </div> 
            <p color=>Note: Make sure that all of the information are correct. Once you submit the form, you will not be able to edit it. You may contact us on our customer service email: iRegister.au@gmail.com, if you have any problems or questions. </a></p><br>
            <div class="form">
               <div class="inputfield">
                  <label>First Name:</label>
                  <input type="text" name="firstname" class="input" placeholder="Iyong unang pangalan" required>
               </div> 
               <div class="inputfield">
                  <label>Middle Name:</label>
                  <input type="text" name="midname" class="input" placeholder="Iyong gitnang pangalan" required>
               </div>   
                <div class="inputfield">
                  <label>Last Name:</label>
                  <input type="text" name="lastname" class="input" placeholder="Iyong apelyido" required>
               </div>  
               <div class="inputfield">
                  <label>Birthdate:</label>
                  <input type="text" name="birthd" class="input" placeholder="Araw ng iyong kapanganakan" required>
               </div>   
                <div class="inputfield">
                  <label>Birthplace:</label>
                  <input type="text" name="bplace" placeholder="Lugar kung saan ka ipinanganak" class="input">
                </div>  
                <div class="inputfield">
                  <label>Sex:</label>
                  <div class="custom_select">
                    <select name="gender" required>
                      <option value="">- Select -</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                </div> 
                <div class="inputfield">
                  <label>Civil Status:</label>
                  <div class="custom_select">
                    <select name="civilstatus" required>
                      <option value="">- Select -</option>
                      <option value="select">Single</option>
                      <option value="married">Married</option>
                      <option value="complicated">Complicated</option>
                    </select>
                  </div>
                </div> 
                <div class="inputfield">
                  <label>Email Address:</label>
                  <input type="email" name="email" placeholder="Ilagay ang iyong email address" class="input">
               </div> 
              <div class="inputfield">
                  <label>Phone Number:</label>
                  <input type="text" name="contact" placeholder="ilagay ang iyong telepono" class="input">
               </div> 
              <div class="inputfield">
                  <label>Postal Code:</label>
                  <input type="text" name="postcode" class="input" placeholder="Postal code ng iyong lugar" required>
               </div> 
            </div>
        </div>

        <div class="wrapper">
            <div class="wrapper">
                <h2>Citizenship Details</h2>
                <span class="help-block">(Detalye ng pagkamamamayan)</span>
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Citizenship:</label>
                    <div class="custom_select" required>
                        <select name="citizenship">
                        <option value="fil">Filipino</option>
                        <option value="nonfil">Non - Filipino</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                    <label>Acquisition:</label>
                    <div class="custom_select" required>
                        <select name="acqui">
                        <option value="">- Select -</option>
                        <option value="bybirth">By Birth</option>
                        <option value="naturalized">Naturalized</option>
                        <option value="reaccquired">Re-accquired</option>
                        </select>
                    </div>
                </div>    
            </div>
        </div>

        <div class="wrapper">
            <div class="wrapper">
                <h2>Residence / Address</h2>
                <span class="help-block">(Tirahan)</span>
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Province:</label>
                    <div class="custom_select">
                    <select name="province" required>
                            <option value="">- Select -</option>
                            <option value="99">OUTSIDE THE PHILIPPINES</option>
                            <option value="39">NCR - 1st DISTRICT (Manila)</option>
                            <option value="74">NCR - 2ND DISTRICT (Mandaluyong, Marikina, Pasig, QC, San Juan)</option>
                            <option value="75">NCR - 3RD DISTRICT (Caloocan, Malabon, Navotas, Valenzuela)</option>
                            <option value="76">NCR - 4TH DISTRICT (Las Piñas, Makati, Muntinlupa, Parañaque, Pasay, Pateros, Taguig)</option>
                            <option value="01">ABRA</option>
                            <option value="02">AGUSAN DEL NORTE</option>
                            <option value="03">AGUSAN DEL SUR</option>
                            <option value="04">AKLAN</option>
                            <option value="05">ALBAY</option>
                            <option value="06">ANTIQUE</option>
                            <option value="81">APAYAO</option>
                            <option value="77">AURORA</option>
                            <option value="07">BASILAN</option>
                            <option value="08">BATAAN</option>
                            <option value="09">BATANES</option>
                            <option value="10">BATANGAS</option>
                            <option value="11">BENGUET</option>
                            <option value="78">BILIRAN</option>
                            <option value="12">BOHOL</option>
                            <option value="13">BUKIDNON</option>
                            <option value="14">BULACAN</option>
                            <option value="15">CAGAYAN</option>
                            <option value="16">CAMARINES NORTE</option>
                            <option value="17">CAMARINES SUR</option>
                            <option value="18">CAMIGUIN</option>
                            <option value="19">CAPIZ</option>
                            <option value="20">CATANDUANES</option>
                            <option value="21">CAVITE</option>
                            <option value="22">CEBU</option>
                            <option value="82">COMPOSTELA VALLEY</option>
                            <option value="47">COTABATO (NORTH COT.)</option>
                            <option value="23">DAVAO (DAVAO DEL NORTE)</option>
                            <option value="24">DAVAO DEL SUR</option>
                            <option value="86">DAVAO OCCIDENTAL</option>
                            <option value="25">DAVAO ORIENTAL</option>
                            <option value="85">DINAGAT ISLANDS</option>
                            <option value="26">EASTERN SAMAR</option>
                            <option value="79">GUIMARAS</option>
                            <option value="27">IFUGAO</option>
                            <option value="28">ILOCOS NORTE</option>
                            <option value="29">ILOCOS SUR</option>
                            <option value="30">ILOILO</option>
                            <option value="31">ISABELA</option>
                            <option value="32">KALINGA</option>
                            <option value="33">LA UNION</option>
                            <option value="34">LAGUNA</option>
                            <option value="35">LANAO DEL NORTE</option>
                            <option value="36">LANAO DEL SUR</option>
                            <option value="37">LEYTE</option>
                            <option value="38">MAGUINDANAO</option>
                            <option value="40">MARINDUQUE</option>
                            <option value="41">MASBATE</option>
                            <option value="42">MISAMIS OCCIDENTAL</option>
                            <option value="43">MISAMIS ORIENTAL</option>
                            <option value="44">MOUNTAIN PROVINCE</option>
                            <option value="45">NEGROS OCCIDENTAL</option>
                            <option value="46">NEGROS ORIENTAL</option>
                            <option value="48">NORTHERN SAMAR</option>
                            <option value="49">NUEVA ECIJA</option>
                            <option value="50">NUEVA VIZCAYA</option>
                            <option value="51">OCCIDENTAL MINDORO</option>
                            <option value="52">ORIENTAL MINDORO</option>
                            <option value="53">PALAWAN</option>
                            <option value="54">PAMPANGA</option>
                            <option value="55">PANGASINAN</option>
                            <option value="56">QUEZON</option>
                            <option value="57">QUIRINO</option>
                            <option value="58">RIZAL</option>
                            <option value="59">ROMBLON</option>
                            <option value="60">SAMAR (WESTERN SAMAR)</option>
                            <option value="80">SARANGANI</option>
                            <option value="61">SIQUIJOR</option>
                            <option value="62">SORSOGON</option>
                            <option value="63">SOUTH COTABATO</option>
                            <option value="64">SOUTHERN LEYTE</option>
                            <option value="97">SPECIAL PROVINCE</option>
                            <option value="65">SULTAN KUDARAT</option>
                            <option value="66">SULU</option>
                            <option value="67">SURIGAO DEL NORTE</option>
                            <option value="68">SURIGAO DEL SUR</option>
                            <option value="69">TARLAC</option>
                            <option value="70">TAWI-TAWI</option>
                            <option value="71">ZAMBALES</option>
                            <option value="72">ZAMBOANGA DEL NORTE</option>
                            <option value="73">ZAMBOANGA DEL SUR</option>
                            <option value="83">ZAMBOANGA SIBUGAY</option>
                        </select>
                    </div>
                </div>
                <div class="inputfield">
                  <label>City/Municipality:</label>

                  <input type="text" name="city" class="input" placeholder="Iyong lungsod na tinitirahan" required>
                </div>
                <div class="inputfield">
                  <label>Baranggay:</label>
                  <input type="text" name="brgy" class="input" placeholder="Baranggay na iyong tinitirahan" required>
                </div>
                <div class="inputfield">
                    <label>Address</label>
                    <textarea class="textarea" name="address" placeholder="Ilagay ang iyong address" ></textarea>
                 </div> 
                <div class="inputfield">
                  <label>No. of Years and Months in the City / Municipality:</label>
                  <textarea class="textarea" name="cityyears" class="input" placeholder="Ilagay kung ilang taon at ilang buwan ka na nakatira sa lungsod" required></textarea>
                </div>
                <div class="inputfield">
                  <label>No. of Years in the Philippines</label>
                  <textarea class="textarea" name="phyears" placeholder="Ilagay kung ilang taon ka na nakatira sa Pilipinas" required></textarea>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="form">
                <div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox" >
                        <span class="checkmark"></span>
                    </label>
                     <p>I agree to <a href="termsandconditions.php"> terms and conditions</a> </p>
                </div> 
                <div class="inputfield">
                    <input type="submit" value="Register" class="btn">
                </div>
            </div>
        </div>

    </form>
</body>
</html>
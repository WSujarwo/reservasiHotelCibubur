<?php
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];

    unset($_SESSION['error']);
}
?>
<div class="container pb-2">
    <div class="card bg-white">
        <div class="card-header">
            <div class="alert alert-danger <?= empty($error) ? "d-none" : null ?>" role="alert">
                <?= $error ?>
            </div>
            <form action="<?= BASEURL ?>/table_booking/update" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Your Name</label>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <input name="booking-name" value="<?= $data['nama'] ?>" id="booking-name" type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email Address</label>
                        <input class="form-control" value="<?= $data['email'] ?>" name="booking-email" id="booking-email" type="email" placeholder="Your Email Address">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Phone Number</label>
                        <input name="booking-phone" value="<?= $data['phone'] ?>" id="booking-phone" type="text" class="form-control" placeholder="Your Phone Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Country</label>
                        <div class="form_select">
                            <select name="booking-country" id="booking-country" class="form-control" title="Select Your Country" data-header="Select Your Country" data-live-search="true" data-size="5">
                                <option value="<?= $data['country'] ?>" selected> <?= $data['country'] ?> </option>
                                <option value="Afganistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Canary Islands">Canary Islands</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Channel Islands">Channel Islands</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos Island">Cocos Island</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote DIvoire">Cote D'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaco">Curacao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="East Timor">East Timor</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Ter">French Southern Ter</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Great Britain">Great Britain</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea North">Korea North</option>
                                <option value="Korea Sout">Korea South</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau">Macau</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Midway Islands">Midway Islands</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Nambia">Nambia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherland Antilles">Netherland Antilles</option>
                                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                <option value="Nevis">Nevis</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau Island">Palau Island</option>
                                <option value="Palestine">Palestine</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Phillipines">Philippines</option>
                                <option value="Pitcairn Island">Pitcairn Island</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of Montenegro">Republic of Montenegro</option>
                                <option value="Republic of Serbia">Republic of Serbia</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="St Barthelemy">St Barthelemy</option>
                                <option value="St Eustatius">St Eustatius</option>
                                <option value="St Helena">St Helena</option>
                                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                <option value="St Lucia">St Lucia</option>
                                <option value="St Maarten">St Maarten</option>
                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tahiti">Tahiti</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uraguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City State">Vatican City State</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                <option value="Wake Island">Wake Island</option>
                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Arrival
                            <a href="#" title="Arrival" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check In from 11:00 am"> <i class="label_icon_info fa fa-info-circle"></i></a>
                        </label>
                        <div class="form_date">
                            <input type="text" value="<?= $data['arrival_date'] ?>" class="datepicker form-control " name="booking-checkin" id="booking-checkin" placeholder="Arrival Date" readonly>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Departure
                            <a href="#" title="Departure" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Check Out from 12:00 am"> <i class="fa fa-info-circle"></i></a>
                        </label>
                        <div class="form_date">
                            <input type="text" value="<?= $data['departure_date'] ?>" class="datepicker form-control" name="booking-checkout" id="booking-checkout" placeholder="Departure Date" readonly>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Adults
                            <a href="#" title="Adults" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="+18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                        </label>
                        <div class="form_select">
                            <select name="booking-adults" id="booking-adults" class="form-control" title="Adults" data-header="Adults">
                                <option value="0" <?php if ($data['adults'] == "0") echo "selected" ?>>0</option>
                                <option value="1" <?php if ($data['adults'] == "1") echo "selected" ?>>1</option>
                                <option value="2" <?php if ($data['adults'] == "2") echo "selected" ?>>2</option>
                                <option value="3" <?php if ($data['adults'] == "3") echo "selected" ?>>3</option>
                                <option value="4" <?php if ($data['adults'] == "4") echo "selected" ?>>4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Children
                            <a href="#" title="Children" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="0-18 years"> <i class="label_icon_info fa fa-info-circle"></i></a>
                        </label>
                        <div class="form_select">
                            <select name="booking-children" id="booking-children" class="form-control" title="Children" data-header="Children">
                            <option value="0" <?php if ($data['children'] == "0") echo "selected"; ?>>0</option>
                                <option value="1" <?php if ($data['children'] == "1") echo "selected"; ?>>1</option>
                                <option value="2" <?php if ($data['children'] == "2") echo "selected"; ?>>2</option>
                                <option value="3" <?php if ($data['children'] == "3") echo "selected"; ?>>3</option>
                                <option value="4" <?php if ($data['children'] == "4") echo "selected"; ?>>4</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Facilitiy</label>
                    <div class="form_select">
                        <select name="booking-roomtype" id="booking-roomtype" class="form-control" title="Select Room Type" data-header="Select Room Type">
                            <option value="Single Room" <?php if ($data['facility'] == "Single Room") echo "selected"; ?> data-subtext="<span class='label label-info'>Rp. 890 / night</span>">Single Room </option>
                            <option value="Double Room" <?php if ($data['facility'] == "Double Room") echo "selected"; ?> data-subtext="<span class='label label-info'>Rp. 1.290 / night</span>">Double Room</option>
                            <option value="Deluxe Room" <?php if ($data['facility'] == "Deluxe Room") echo "selected"; ?> data-subtext="<span class='label label-info'>Rp. 950 / night</span>">Deluxe Room</option>
                            <option value="Restaurant & Bar" <?php if ($data['facility'] == "Restaurant & Bar") echo "selected"; ?> data-subtext="<span class='label label-info'>Rp. 350 / person</span>">Restaurant & Bar</option>
                            <option value="Ballroom" <?php if ($data['facility'] == "Ballroom") echo "selected"; ?> data-subtext="<span class='label label-info'>Rp. 570 / hour</span>">Ballroom</option>
                            <option value="Swiming Pool" <?php if ($data['facility'] == "Swiming Pool") echo "selected"; ?> data-subtext="<span class='label label-info'>Rp. 150 / hour</span>">Swiming Pool</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Hotel Location</label>
                    <div class="form_select">
                        <select name="booking-hotelloc" id="booking-hotelloc" class="form-control" title="Select Hotel Location" data-header="Select Hotel Location">
                            <option value="Hotel Avanzel" <?php if ($data['location'] == "Hotel Avanzel") echo "selected"; ?>>Hotel Avanzel </option>
                            <option value="Hotel Ciputra" <?php if ($data['location'] == "Hotel Ciputra") echo "selected"; ?>>Hotel Ciputra</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Payment Type</label>
                    <div class="form_select">
                        <select name="booking-paymenttype" value="<?= $data['payment_type'] ?>" id="booking-paymenttype" class="form-control" title="Select Payment Type" data-header="Select Payment Type">
                            <option value="Visa"<?php if ($data['payment_type'] == "Visa") echo "selected"; ?>>Visa </option>
                            <option value="Master Card"<?php if ($data['payment_type'] == "Master Card") echo "selected"; ?>>Master Card</option>
                            <option value="Dana"<?php if ($data['payment_type'] == "Dana") echo "selected"; ?>>Dana</option>
                            <option value="Debit Card"<?php if ($data['payment_type'] == "Debit Card") echo "selected"; ?>>Debit Card</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Card Number</label>
                    <input class="form-control" value="<?= $data['card_number'] ?>" name="booking-cardnumber" id="booking-cardnumber" type="text" placeholder="Card Number">
                </div>
                <div class="form-group">
                    <label>Amount</label>
                    <input class="form-control" value="<?= $data['amount'] ?>" name="booking-amount" id="booking-amount" type="number" placeholder="Amount">
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>    
</div>
<!DOCTYPE html>
<html>
	<head>
		<title>Signup_Step1</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles/signup_step1.css">
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/signup/step1.js" ></script>
	</head>

	<body>
		<div id="header">
			<div class="temp">
				<div class="logo" id="logo-linkedin">
				<img src="<?php echo base_url()?>assets/img/images/head_logo.png" >
				</div>
			</div>
		</div>

		<!-- ************* - BODY - *************** -->

		<div id = "body">
			<div class = "wrapper">
				<div class = "ex">
					<div id = "main">
						<div class = "heading">
							<h1>
								<span><strong><?php echo $fname;?></strong></span>, let's start creating your professional profile
							</h1>
						</div>

						<div class = "feat">
							<div class="features">
				                <h3>A LinkedIn profile helps you...</h3>
				                <ul>
				                  <li class="first">Showcase your skills and experience</li>
				                  <li>Be found for new opportunities</li>
				                  <li>Stay in touch with colleagues and friends</li>
				                </ul>
				            </div>
			        	</div>

						<div class = "tempp">
							 <form  action="<?php echo base_url();?>index.php/signup/signup/process" method="POST" id="step1-form" name="step1-form" onsubmit="return validateForm();" >
								<ul class = "infolist">
									<li>
										<label class = "country">
											<abbr><em>*</em>Country</abbr>
										</label>
										<div class = "fieldgroup">
											<select name="country-select" class = "country-select">
												<option value="us">United States</option>
												<option value="af">Afghanistan</option>
												<option value="ax">Aland Islands</option>
												<option value="al">Albania</option>
												<option value="dz">Algeria</option>
												<option value="as">American Samoa</option>
												<option value="ad">Andorra</option>
												<option value="ao">Angola</option>
												<option value="ai">Anguilla</option>
												<option value="aq">Antarctica</option>
												<option value="ag">Antigua and Barbuda</option>
												<option value="ar">Argentina</option>
												<option value="am">Armenia</option>
												<option value="aw">Aruba</option>
												<option value="au">Australia</option>
												<option value="at">Austria</option>
												<option value="az">Azerbaijan</option>
												<option value="bs">Bahamas</option>
												<option value="bh">Bahrain</option>
												<option value="bd">Bangladesh</option>
												<option value="bb">Barbados</option>
												<option value="by">Belarus</option>
												<option value="be">Belgium</option>
												<option value="bz">Belize</option>
												<option value="bj">Benin</option>
												<option value="bm">Bermuda</option>
												<option value="bt">Bhutan</option>
												<option value="bo">Bolivia</option>
												<option value="ba">Bosnia and Herzegovina</option>
												<option value="bw">Botswana</option>
												<option value="br">Brazil</option>
												<option value="io">British Indian Ocean Territory</option>
												<option value="bn">Brunei Darussalam</option>
												<option value="bg">Bulgaria</option>
												<option value="bf">Burkina Faso</option>
												<option value="bi">Burundi</option>
												<option value="kh">Cambodia</option>
												<option value="cm">Cameroon</option>
												<option value="ca">Canada</option>
												<option value="cv">Cape Verde</option>
												<option value="cb">Caribbean Nations</option>
												<option value="ky">Cayman Islands</option>
												<option value="cf">Central African Republic</option>
												<option value="td">Chad</option>
												<option value="cl">Chile</option>
												<option value="cn">China</option>
												<option value="cx">Christmas Island</option>
												<option value="cc">Cocos (Keeling) Islands</option>
												<option value="co">Colombia</option>
												<option value="km">Comoros</option>
												<option value="cg">Congo</option>
												<option value="ck">Cook Islands</option>
												<option value="cr">Costa Rica</option>
												<option value="ci">Cote D'Ivoire (Ivory Coast)</option>
												<option value="hr">Croatia</option>
												<option value="cu">Cuba</option>
												<option value="cy">Cyprus</option>
												<option value="cz">Czech Republic</option>
												<option value="cd">Democratic Republic of the Congo</option>
												<option value="dk">Denmark</option>
												<option value="dj">Djibouti</option>
												<option value="dm">Dominica</option>
												<option value="do">Dominican Republic</option>
												<option value="tp">East Timor</option>
												<option value="ec">Ecuador</option>
												<option value="eg">Egypt</option>
												<option value="sv">El Salvador</option>
												<option value="gq">Equatorial Guinea</option>
												<option value="er">Eritrea</option>
												<option value="ee">Estonia</option>
												<option value="et">Ethiopia</option>
												<option value="fk">Falkland Islands (Malvinas)</option>
												<option value="fo">Faroe Islands</option>
												<option value="fm">Federated States of Micronesia</option>
												<option value="fj">Fiji</option>
												<option value="fi">Finland</option>
												<option value="fr">France</option>
												<option value="gf">French Guiana</option>
												<option value="pf">French Polynesia</option>
												<option value="tf">French Southern Territories</option>
												<option value="ga">Gabon</option>
												<option value="gm">Gambia</option>
												<option value="ge">Georgia</option>
												<option value="de">Germany</option>
												<option value="gh">Ghana</option>
												<option value="gi">Gibraltar</option>
												<option value="gr">Greece</option>
												<option value="gl">Greenland</option>
												<option value="gd">Grenada</option>
												<option value="gp">Guadeloupe</option>
												<option value="gu">Guam</option>
												<option value="gt">Guatemala</option>
												<option value="gg">Guernsey</option>
												<option value="gn">Guinea</option>
												<option value="gw">Guinea-Bissau</option>
												<option value="gy">Guyana</option>
												<option value="ht">Haiti</option>
												<option value="hn">Honduras</option>
												<option value="hk">Hong Kong</option>
												<option value="hu">Hungary</option>
												<option value="is">Iceland</option>
												<option value="in">India</option>
												<option value="id">Indonesia</option>
												<option value="ir">Iran</option>
												<option value="iq">Iraq</option>
												<option value="ie">Ireland</option>
												<option value="im">Isle of Man</option>
												<option value="il">Israel</option>
												<option value="it">Italy</option>
												<option value="jm">Jamaica</option>
												<option value="jp">Japan</option>
												<option value="je">Jersey</option>
												<option value="jo">Jordan</option>
												<option value="kz">Kazakhstan</option>
												<option value="ke">Kenya</option>
												<option value="ki">Kiribati</option>
												<option value="kr">Korea</option>
												<option value="kp">Korea (North)</option>
												<option value="ko">Kosovo</option>
												<option value="kw">Kuwait</option>
												<option value="kg">Kyrgyzstan</option>
												<option value="la">Laos</option>
												<option value="lv">Latvia</option>
												<option value="lb">Lebanon</option>
												<option value="ls">Lesotho</option>
												<option value="lr">Liberia</option>
												<option value="ly">Libya</option>
												<option value="li">Liechtenstein</option>
												<option value="lt">Lithuania</option>
												<option value="lu">Luxembourg</option>
												<option value="mo">Macao</option>
												<option value="mk">Macedonia</option>
												<option value="mg">Madagascar</option>
												<option value="mw">Malawi</option>
												<option value="my">Malaysia</option>
												<option value="mv">Maldives</option>
												<option value="ml">Mali</option>
												<option value="mt">Malta</option>
												<option value="mh">Marshall Islands</option>
												<option value="mq">Martinique</option>
												<option value="mr">Mauritania</option>
												<option value="mu">Mauritius</option>
												<option value="yt">Mayotte</option>
												<option value="mx">Mexico</option>
												<option value="md">Moldova</option>
												<option value="mc">Monaco</option>
												<option value="mn">Mongolia</option>
												<option value="me">Montenegro</option>
												<option value="ms">Montserrat</option>
												<option value="ma">Morocco</option>
												<option value="mz">Mozambique</option>
												<option value="mm">Myanmar</option>
												<option value="na">Namibia</option>
												<option value="nr">Nauru</option>
												<option value="np">Nepal</option>
												<option value="nl">Netherlands</option>
												<option value="an">Netherlands Antilles</option>
												<option value="nc">New Caledonia</option>
												<option value="nz">New Zealand</option>
												<option value="ni">Nicaragua</option>
												<option value="ne">Niger</option>
												<option value="ng">Nigeria</option>
												<option value="nu">Niue</option>
												<option value="nf">Norfolk Island</option>
												<option value="mp">Northern Mariana Islands</option>
												<option value="no">Norway</option>
												<option value="om">Oman</option>
												<option value="pk" selected="">Pakistan</option>
												<option value="pw">Palau</option>
												<option value="ps">Palestinian Territory</option>
												<option value="pa">Panama</option>
												<option value="pg">Papua New Guinea</option>
												<option value="py">Paraguay</option>
												<option value="pe">Peru</option>
												<option value="ph">Philippines</option>
												<option value="pn">Pitcairn</option>
												<option value="pl">Poland</option>
												<option value="pt">Portugal</option>
												<option value="pr">Puerto Rico</option>
												<option value="qa">Qatar</option>
												<option value="re">Reunion</option>
												<option value="ro">Romania</option>
												<option value="ru">Russian Federation</option>
												<option value="rw">Rwanda</option>
												<option value="sh">Saint Helena</option>
												<option value="kn">Saint Kitts and Nevis</option>
												<option value="lc">Saint Lucia</option>
												<option value="pm">Saint Pierre and Miquelon</option>
												<option value="vc">Saint Vincent and the Grenadines</option>
												<option value="ws">Samoa</option>
												<option value="sm">San Marino</option>
												<option value="st">Sao Tome and Principe</option>
												<option value="sa">Saudi Arabia</option>
												<option value="sn">Senegal</option>
												<option value="rs">Serbia</option>
												<option value="sc">Seychelles</option>
												<option value="sl">Sierra Leone</option>
												<option value="sg">Singapore</option>
												<option value="sk">Slovak Republic</option>
												<option value="si">Slovenia</option>
												<option value="sb">Solomon Islands</option>
												<option value="so">Somalia</option>
												<option value="za">South Africa</option>
												<option value="es">Spain</option>
												<option value="lk">Sri Lanka</option>
												<option value="sd">Sudan</option>
												<option value="sr">Suriname</option>
												<option value="sj">Svalbard and Jan Mayen</option>
												<option value="sz">Swaziland</option>
												<option value="se">Sweden</option>
												<option value="ch">Switzerland</option>
												<option value="sy">Syria</option>
												<option value="tw">Taiwan</option>
												<option value="tj">Tajikistan</option>
												<option value="tz">Tanzania</option>
												<option value="th">Thailand</option>
												<option value="tl">Timor-Leste</option>
												<option value="tg">Togo</option>
												<option value="tk">Tokelau</option>
												<option value="to">Tonga</option>
												<option value="tt">Trinidad and Tobago</option>
												<option value="tn">Tunisia</option>
												<option value="tr">Turkey</option>
												<option value="tm">Turkmenistan</option>
												<option value="tc">Turks and Caicos Islands</option>
												<option value="tv">Tuvalu</option>
												<option value="ug">Uganda</option>
												<option value="ua">Ukraine</option>
												<option value="ae">United Arab Emirates</option>
												<option value="gb">United Kingdom</option>
												<option value="uy">Uruguay</option>
												<option value="uz">Uzbekistan</option>
												<option value="vu">Vanuatu</option>
												<option value="va">Vatican City State (Holy See)</option>
												<option value="ve">Venezuela</option>
												<option value="vn">Vietnam</option>
												<option value="vg">Virgin Islands (British)</option>
												<option value="vi">Virgin Islands (U.S.)</option>
												<option value="wf">Wallis and Futuna</option>
												<option value="eh">Western Sahara</option>
												<option value="ye">Yemen</option>
												<option value="zm">Zambia</option>
												<option value="zw">Zimbabwe</option>
												<option value="oo">Other</option></select>
										</div>
									</li>
									<li>

										<label>
											<span>Postal Code</span>
										</label>
										<div class = "fieldgroup">
											<input name="postal-code" type="text">
										</div>
									</li>
									<li>
										<label class = "Iam">
											<span>I am currently:</span>
										</label>
										<ul class = "inner">
											<li>
												<label for = "employed">
													<input type = "radio" checked = "checked" name= "selectType" id="check1" value="Employed" onclick="change(1)">
													Employed
												</label>
											</li>
											<li>
												<label for = "seeker">
													<input type = "radio" name= "selectType" id="check2" value="Seeker" onclick="change(2)">
													Job Seeker
												</label>
											</li>
											<li>
												<label for = "student">
													<input type = "radio" name= "selectType" id="check3" value="Student" onclick="change(3)">
													Student
												</label>
											</li>
										</ul>
									</li>

									<!-- ******** Employe ******** -->
									<span class = "error" id="error1">Please fill the required entry.</span>
									<li id = "jjj">
										<label class = "job">

											<abbr><em>*</em>Job title</abbr>
										</label>
										<div class = "fieldgroup">
											<input name = "job-title" type="text" id="job-title">
										</div>
									</li>
								
									<!-- ********* Job Seeker ********** -->
									 <li id = "seek">
										<label class = "sjob">
											<abbr><em>*</em>Most recent job title</abbr>
										</label>
										<div class = "fieldgroup">
											<input name = "sjob" type="text">
										</div>
									</li>
									<li class = "check-box" id="check-box">
										<input type = "checkbox" id="checkbox" onclick="change(4)" name = "check">
										<label>I am self-employed</label>
									</li> 
										<span class = "error" id="error2">Please fill the required entry.</span>
									<!-- ******* Employe ******** -->
									<li id = "cprofile">
										<label class = "company">
											<abbr><em>*</em>Company</abbr>
										</label>
										<div class = "fieldgroup">
											<input name = "company" type="text">
										</div>
									</li>
								
									<!-- ******** Job Seeker ********* -->
									 <li id = "cjprofile">
										<label class = "scompany">
											<abbr><em>*</em>Most recent company</abbr>
										</label>
										<div class = "fieldgroup">
											<input name = "scompany" type="text">
										</div>
									</li> 

									<!-- ******* Employe ******* --> <!-- And --> <!-- ******* Job Seeker ******** -->
									 <li id = "eprofile">
										<label class = "employe-profile">
											<abbr><em>*</em>Industry</abbr>
										</label>
										<div class = "fieldgroup">
											<select name="industry" id="industryChooser-employeeCompany-employedProfileForm">
												<option value="" selected="">-</option><option value="47" class="corp fin">Accounting</option><option value="94" class="man tech tran">Airlines/Aviation</option><option value="120" class="leg org">Alternative Dispute Resolution</option><option value="125" class="hlth">Alternative Medicine</option><option value="127" class="art med">Animation</option><option value="19" class="good">Apparel &amp; Fashion</option><option value="50" class="cons">Architecture &amp; Planning</option><option value="111" class="art med rec">Arts and Crafts</option><option value="53" class="man">Automotive</option><option value="52" class="gov man">Aviation &amp; Aerospace</option><option value="41" class="fin">Banking</option><option value="12" class="gov hlth tech">Biotechnology</option><option value="36" class="med rec">Broadcast Media</option><option value="49" class="cons">Building Materials</option><option value="138" class="corp man">Business Supplies and Equipment</option><option value="129" class="fin">Capital Markets</option><option value="54" class="man">Chemicals</option><option value="90" class="org serv">Civic &amp; Social Organization</option><option value="51" class="cons gov">Civil Engineering</option><option value="128" class="cons corp fin">Commercial Real Estate</option><option value="118" class="tech">Computer &amp; Network Security</option><option value="109" class="med rec">Computer Games</option><option value="3" class="tech">Computer Hardware</option><option value="5" class="tech">Computer Networking</option><option value="4" class="tech">Computer Software</option><option value="48" class="cons">Construction</option><option value="24" class="good man">Consumer Electronics</option><option value="25" class="good man">Consumer Goods</option><option value="91" class="org serv">Consumer Services</option><option value="18" class="good">Cosmetics</option><option value="65" class="agr">Dairy</option><option value="1" class="gov tech">Defense &amp; Space</option><option value="99" class="art med">Design</option><option value="69" class="edu">Education Management</option><option value="132" class="edu org">E-Learning</option><option value="112" class="good man">Electrical/Electronic Manufacturing</option><option value="28" class="med rec">Entertainment</option><option value="86" class="org serv">Environmental Services</option><option value="110" class="corp rec serv">Events Services</option><option value="76" class="gov">Executive Office</option><option value="122" class="corp serv">Facilities Services</option><option value="63" class="agr">Farming</option><option value="43" class="fin">Financial Services</option><option value="38" class="art med rec">Fine Art</option><option value="66" class="agr">Fishery</option><option value="34" class="rec serv">Food &amp; Beverages</option><option value="23" class="good man serv">Food Production</option><option value="101" class="org">Fund-Raising</option><option value="26" class="good man">Furniture</option><option value="29" class="rec">Gambling &amp; Casinos</option><option value="145" class="cons man">Glass, Ceramics &amp; Concrete</option><option value="75" class="gov">Government Administration</option><option value="148" class="gov">Government Relations</option><option value="140" class="art med">Graphic Design</option><option value="124" class="hlth rec">Health, Wellness and Fitness</option><option value="68" class="edu">Higher Education</option><option value="14" class="hlth">Hospital &amp; Health Care</option><option value="31" class="rec serv tran">Hospitality</option><option value="137" class="corp">Human Resources</option><option value="134" class="corp good tran">Import and Export</option><option value="88" class="org serv">Individual &amp; Family Services</option><option value="147" class="cons man">Industrial Automation</option><option value="84" class="med serv">Information Services</option><option value="96" class="tech">Information Technology and Services</option><option value="42" class="fin">Insurance</option><option value="74" class="gov">International Affairs</option><option value="141" class="gov org tran">International Trade and Development</option><option value="6" class="tech">Internet</option><option value="45" class="fin">Investment Banking</option><option value="46" class="fin">Investment Management</option><option value="73" class="gov leg">Judiciary</option><option value="77" class="gov leg">Law Enforcement</option><option value="9" class="leg">Law Practice</option><option value="10" class="leg">Legal Services</option><option value="72" class="gov leg">Legislative Office</option><option value="30" class="rec serv tran">Leisure, Travel &amp; Tourism</option><option value="85" class="med rec serv">Libraries</option><option value="116" class="corp tran">Logistics and Supply Chain</option><option value="143" class="good">Luxury Goods &amp; Jewelry</option><option value="55" class="man">Machinery</option><option value="11" class="corp">Management Consulting</option><option value="95" class="tran">Maritime</option><option value="80" class="corp med">Marketing and Advertising</option><option value="97" class="corp">Market Research</option><option value="135" class="cons gov man">Mechanical or Industrial Engineering</option><option value="126" class="med rec">Media Production</option><option value="17" class="hlth">Medical Devices</option><option value="13" class="hlth">Medical Practice</option><option value="139" class="hlth">Mental Health Care</option><option value="71" class="gov">Military</option><option value="56" class="man">Mining &amp; Metals</option><option value="35" class="art med rec">Motion Pictures and Film</option><option value="37" class="art med rec">Museums and Institutions</option><option value="115" class="art rec">Music</option><option value="114" class="gov man tech">Nanotechnology</option><option value="81" class="med rec">Newspapers</option><option value="100" class="org">Nonprofit Organization Management</option><option value="57" class="man">Oil &amp; Energy</option><option value="113" class="med">Online Media</option><option value="123" class="corp">Outsourcing/Offshoring</option><option value="87" class="serv tran">Package/Freight Delivery</option><option value="146" class="good man">Packaging and Containers</option><option value="61" class="man">Paper &amp; Forest Products</option><option value="39" class="art med rec">Performing Arts</option><option value="15" class="hlth tech">Pharmaceuticals</option><option value="131" class="org">Philanthropy</option><option value="136" class="art med rec">Photography</option><option value="117" class="man">Plastics</option><option value="107" class="gov org">Political Organization</option><option value="67" class="edu">Primary/Secondary Education</option><option value="83" class="med rec">Printing</option><option value="105" class="corp">Professional Training &amp; Coaching</option><option value="102" class="corp org">Program Development</option><option value="79" class="gov">Public Policy</option><option value="98" class="corp">Public Relations and Communications</option><option value="78" class="gov">Public Safety</option><option value="82" class="med rec">Publishing</option><option value="62" class="man">Railroad Manufacture</option><option value="64" class="agr">Ranching</option><option value="44" class="cons fin good">Real Estate</option><option value="40" class="rec serv">Recreational Facilities and Services</option><option value="89" class="org serv">Religious Institutions</option><option value="144" class="gov man org">Renewables &amp; Environment</option><option value="70" class="edu gov">Research</option><option value="32" class="rec serv">Restaurants</option><option value="27" class="good man">Retail</option><option value="121" class="corp org serv">Security and Investigations</option><option value="7" class="tech">Semiconductors</option><option value="58" class="man">Shipbuilding</option><option value="20" class="good rec">Sporting Goods</option><option value="33" class="rec">Sports</option><option value="104" class="corp">Staffing and Recruiting</option><option value="22" class="good">Supermarkets</option><option value="8" class="gov tech">Telecommunications</option><option value="60" class="man">Textiles</option><option value="130" class="gov org">Think Tanks</option><option value="21" class="good">Tobacco</option><option value="108" class="corp gov serv">Translation and Localization</option><option value="92" class="tran">Transportation/Trucking/Railroad</option><option value="59" class="man">Utilities</option><option value="106" class="fin tech">Venture Capital &amp; Private Equity</option><option value="16" class="hlth">Veterinary</option><option value="93" class="tran">Warehousing</option><option value="133" class="good">Wholesale</option><option value="142" class="good man rec">Wine and Spirits</option><option value="119" class="tech">Wireless</option><option value="103" class="art med rec">Writing and Editing</option></select>
										</div>
									</li> 

										<!-- ********** Student ********** -->
										<li id = "school">
										<label class = "sch">
											<abbr><em>*</em>School/University</abbr>
										</label>
										<div class = "fieldgroup">
											<input type = "text" name = "school">
										</div>
									</li>
									
 									<span class = "error" id="error3" style="margin-right:50px;">Please select a time period.</span>


									<!-- ********* Job Seeker *********** -->
									 <ul id = "time-period">

										<label class = "time">
											<abbr><em>*</em>Time period</abbr>
										</label>
										<li class = "start-year">
											<select name="syear" id="startYear-previousStartEnd-lookingProfileForm">
											<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select>
										</li>
										<li class = "end-year">
											<label class = "to">to</label>
											<select name="eyear" id="endYear-previousStartEnd-lookingProfileForm">
											<option value="" selected="">-</option><option value="PRESENT">Present</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select>
										</li>
									</ul> 	

								

									<ul id = "Dates">
										<label class = "date">
											<abbr><em>*</em>Dates attended</abbr>
										</label>
										<li class = "start-year">
											<select name="sY" id="startYear-startEndYear-education-studentProfileForm">
											<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option></select>
										</li>
										<li class = "end-year">
											<label class = "to">to</label>
											<select name="eY" id="endYear-startEndYear-education-studentProfileForm">
											<option value="" selected="">-</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option></select>
										</li>

									</ul>
									<li><p class="tip">Current students: enter your expected graduation year</p></li>

								</ul>

								
								<div class = "btn">
									<input type = "submit" value = "Create my profile">
								</div>
								<div class = "last">
									<p><em>*</em>Indicates required field.</p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer">
 			<div id="legal">
	 			<p id="copyright">LinkedIn Corporation &copy 2013</p>
				<p id="terms-of-use">
	 			Commercial use of this site without express authorization is prohibited.
				</p>
 			</div>
		</div>

	</body>
</html>
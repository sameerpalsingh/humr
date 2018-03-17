<form method="post" action="registration_submit.php" name="frmRegistration" onsubmit="return login_validate();" >

<table width="100%" border="0" cellpadding="0" cellspacing="0">

               <!-- <?php
                if (isset($message))
                {
                    ?>
                    <tr>
                      <td class="s-title" style="border-bottom:1px solid #CCCCCC"><?php echo $message; ?></td>
                    </tr>
                    <?php
                }
                ?>-->
                    <tr>
                      <td class="s-title" style="border-bottom:1px solid #CCCCCC">Register Now For Free !!! </td>
                    </tr>
                    <tr>
                      <td><table class="form-text" cellspacing="2" cellpadding="0" width="100%" border="0">
                        <tbody>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="images/personal-info.gif" alt="" width="131" height="30" /></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td width="25%"><font class="text">Name</font></td>
                            <td colspan="3"><input class="box" maxlength="40" size="35" name="name" /></td>
                          </tr>
                          <tr>
                            <td><font class="text">Gender</font></td>
                            <td colspan="3"><font class="text">
                              <input type="radio" checked="checked" value="M" name="gender" />
                              Male
                              <input type="radio" value="F" name="gender" />
                              Female</font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Date Of Birth</font></td>
                            <td colspan="3"><select
      style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif"
      size="1" name="day">
                                <option value="0">Day</option>
                                <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                              <option>13</option>
                              <option>14</option>
                              <option>15</option>
                              <option>16</option>
                              <option>17</option>
                              <option>18</option>
                              <option>19</option>
                              <option>20</option>
                              <option>21</option>
                              <option>22</option>
                              <option>23</option>
                              <option>24</option>
                              <option>25</option>
                              <option>26</option>
                              <option>27</option>
                              <option>28</option>
                              <option>29</option>
                              <option>30</option>
                              <option>31</option>
                            </select>
                                <select
      style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif"
      size="1" name="month">
                                  <option value="0" selected="selected">Month</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                  <option>7</option>
                                  <option>8</option>
                                  <option>9</option>
                                  <option>10</option>
                                  <option>11</option>
                                  <option>12</option>
                                </select>
                                <select
      style="font-size: 9pt; width: 60px; font-family: arial, verdana, sans-serif"
      size="1" name="year">
                                  <option value="0" selected="selected">Year</option>
                                  <option>1960</option>
                                  <option>1961</option>
                                  <option>1962</option>
                                  <option>1963</option>
                                  <option>1964</option>
                                  <option>1965</option>
                                  <option>1966</option>
                                  <option>1967</option>
                                  <option>1968</option>
                                  <option>1969</option>
                                  <option>1970</option>
                                  <option>1971</option>
                                  <option>1972</option>
                                  <option>1973</option>
                                  <option>1974</option>
                                  <option>1975</option>
                                  <option>1976</option>
                                  <option>1977</option>
                                  <option>1978</option>
                                  <option>1979</option>
                                  <option>1980</option>
                                  <option>1981</option>
                                  <option>1982</option>
                                  <option>1983</option>
                                  <option>1984</option>
                                  <option>1985</option>
                                  <option>1986</option>
                                  <option>1987</option>
                                  <option>1988</option>
                                  <option>1989</option>
                                  <option>1990</option>
                                  <option>1991</option>
                                </select>                            </td>
                          </tr>
                          <tr>
                            <td><font class="text">Marital Status</font></td>
                            <td colspan="3"><font class="text">
                              <select
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
      name="maritalstatus">
                                <option value="0" selected="selected">-Select any One-</option>
                                <option value="1">Unmarried</option>
                                <option value="2">Devorcee</option>
                                <option value="3">Widow/Widower</option>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Looking For</font></td>
                            <td colspan="3"><font class="text">
                              <select
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
      name="lookingfor">
                                <option value="0" selected="selected">-Select any One-</option>
                                <option value="1">Unmarried</option>
                                <option value="2">Devorcee</option>
                                <option value="3">Widow/Widower</option>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Height</font></td>
                            <td colspan="5"><select
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
      size="1" name="height">
                                <option value="0" selected="selected">-Select any one-</option>
                                <option value="4-6">4ft 6in</option>
                                <option value="4-7">4ft 7in</option>
                                <option value="4-8">4ft 8in</option>
                                <option value="4-9">4ft 9in</option>
                                <option value="4-10">4ft 10in</option>
                                <option value="4-11">4ft
                                  11in</option>
                                <option value="5">5ft</option>
                                <option value="5-1">5ft
                                  1in</option>
                                <option value="5-2">5ft 2in</option>
                                <option value="5-3">5ft
                                  3in</option>
                                <option value="5-4">5ft 4in</option>
                                <option value="5-5">5ft
                                  5in</option>
                                <option value="5-6">5ft 6in</option>
                                <option value="5-7">5ft
                                  7in</option>
                                <option value="5-8">5ft 8in</option>
                                <option value="5-9">5ft
                                  9in</option>
                                <option value="5-10">5ft 10in</option>
                                <option value="5-11">5ft
                                  11in</option>
                                <option value="6">6ft</option>
                                <option value="6-1">6ft
                                  1in</option>
                                <option value="6-2">6ft 2in</option>
                                <option value="6-3">6ft
                                  3in</option>
                                <option value="6-4">6ft 4in</option>
                                <option value="6-5">6ft
                                  5in</option>
                                <option value="6-6">6ft 6in</option>
                                <option value="6-7">6ft
                                  7in</option>
                                <option value="6-8">6ft 8in</option>
                                <option value="6-9">6ft
                                  9in</option>
                                <option value="6-10">6ft 10in</option>
                                <option value="6-11">6ft
                                  11in</option>
                                <option value="7">7ft</option>
                            </select>                            </td>
                          </tr>
                          <tr>
                            <td width="90"><font class="text">Body Type* </font></td>
                            <td colspan="5"><select
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
      size="1" name="bodytype">
                                <option value="0">-Select any one-</option>
                                <option value="1">Slim</option>
                                <option value="2">Average</option>
                                <option
        value="3">Athletic</option>
                                <option value="4">Heavy</option>
                            </select>                            </td>
                          </tr>
                          <tr>
                            <td width="90"><font class="text">Complexion* </font></td>
                            <td colspan="5"><select class="TextBox"
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
      size="1" name="complexion">
                                <option value="0">-Select any
                                  one-</option>
                                <option value="1">Very Fair</option>
                                <option
        value="2">Fair</option>
                                <option value="3">Wheatish</option>
                                <option
        value="4">Wheatish Brown</option>
                                <option value="5">Dark</option>
                            </select>                            </td>
                          </tr>
                          <tr>
                            <td><font class="text">Weight</font></td>
                            <td colspan="3"><font class="text">
                              <select
      style="font-size: 9pt; width: 110px; font-family: arial, verdana, sans-serif"
      name="weight">
                                <option value="0" selected="selected">-Select any one-</option>
                                <option>35</option>
                                <option>36</option>
                                <option>37</option>
                                <option>38</option>
                                <option>39</option>
                                <option>40</option>
                                <option>41</option>
                                <option>42</option>
                                <option>43</option>
                                <option>44</option>
                                <option>45</option>
                                <option>46</option>
                                <option>47</option>
                                <option>48</option>
                                <option>49</option>
                                <option>50</option>
                                <option>51</option>
                                <option>52</option>
                                <option>53</option>
                                <option>54</option>
                                <option>55</option>
                                <option>56</option>
                                <option>57</option>
                                <option>58</option>
                                <option>59</option>
                                <option>60</option>
                                <option>61</option>
                                <option>62</option>
                                <option>63</option>
                                <option>64</option>
                                <option>65</option>
                                <option>66</option>
                                <option>67</option>
                                <option>68</option>
                                <option>69</option>
                                <option>70</option>
                                <option>71</option>
                                <option>72</option>
                                <option>73</option>
                                <option>74</option>
                                <option>75</option>
                                <option>76</option>
                                <option>77</option>
                                <option>78</option>
                                <option>79</option>
                                <option>80</option>
                                <option>81</option>
                                <option>82</option>
                                <option>83</option>
                                <option>84</option>
                                <option>85</option>
                                <option>86</option>
                                <option>87</option>
                                <option>88</option>
                                <option>89</option>
                                <option>90</option>
                                <option>91</option>
                                <option>92</option>
                                <option>93</option>
                                <option>94</option>
                                <option>95</option>
                                <option>96</option>
                                <option>97</option>
                                <option>98</option>
                                <option>99</option>
                                <option>100</option>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Physical Status</font></td>
                            <td colspan="2"><font class="text">
                              <input type="radio" checked="checked" value="0"
      name="physicalstatus" />
                              Normal
                              <input type="radio" value="1" name="physicalstatus" />
                              Disabled</font></td>
                            <td><font class="text">&nbsp; </font></td>
                          </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                  <td><img src="images/social-back.gif" alt="" width="117" height="30" /></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td><font class="text">Religion</font></td>
                            <td colspan="3"><font class="text">
                              <select
      style="font-size: 9pt; width: 120px; font-family: arial, verdana, sans-serif"
      name="relegion">
                                <option value="0" selected="selected">-Select Religion-</option>
                                <option value="1">Hindu</option>
                                <option value="2">Muslim</option>
                                <option
        value="3">Sikh</option>
                                <option value="4">Christian</option>
                                <option
        value="5">Budhist</option>
                                <option value="6">Jain</option>
                                <option
        value="7">Bahai</option>
                                <option value="7">Parasi</option>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Caste</font></td>
                            <td colspan="3"><select
      style="font-size: 9pt; width: 230px; font-family: arial, verdana, sans-serif"
      name="caste">
                                <option value="0">-Select any one option-</option>
                              <?php
                                echo createDropDownForCaste($db);
                              ?>
                            </select>                            </td>
                          </tr>
                          <tr>
                            <td><font class="text">Raasi / Moon Sign</font></td>
                            <td colspan="3"><font class="text">
                              <select
      style="font-size: 9pt; width: 140px; font-family: arial, verdana, sans-serif"
      name="raasi">
                                <option value="0">-Select any one-</option>
                               <?php
                                echo createDropDownForRaasi();
                               ?>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Mother tongue (state of origin) * </font></td>
                            <td colspan="3"><font class="text">
                              <select
          style="font-size: 9pt; width: 380px; font-family: arial, verdana, sans-serif"
          size="1" name="mothertongue">
                                <option value="0">-Select any
                                  one-</option>
                               <?php
                               echo createDropDownForMotherTongue($db);
                               ?>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Manglik </font></td>
                            <td colspan="3"><font class="text">
                              <input type="radio" checked="checked" value="N"       name="manglik" />                               No
                              <input type="radio" value="Y" name="manglik" />                               Yes</font> </td>
                          </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4"><img src="images/educational.gif" alt="" width="254" height="33" /></td>
                          </tr>
                          <tr>
                            <td><font class="text">Education</font></td>
                            <td colspan="3"><select
      style="FONT-SIZE: 9pt; WIDTH: 330px; FONT-FAMILY: arial, Verdana, sans-serif" name="education">
                                <option value="0">Select Education Category</option>
                            <?php
                                echo createDropDownForEducation();
                            ?>
                            </select>
                                <br />
                              <font class="text" id="indetail"
      style="VISIBILITY: visible" name="indetail">In Detail
                                <input class="box"
      id="detaileducation" style="VISIBILITY: visible" maxlength="80"
      name="detaileducation" />
                              </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Occupation</font></td>
                            <td colspan="3"><font class="text">
                              <select
      style="FONT-SIZE: 9pt; FONT-FAMILY: arial, Verdana, sans-serif"
      name="occupation">
                                <option value="0">-Select Occupation-</option>
                               <?php
                                    echo createDropDownForOccupation($db);
                               ?>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Annual Income</font></td>
                            <td colspan="3"><font class="text">
                              <select style="font-size: 9pt; width: 150px; font-family: arial, verdana, sans-serif" name="income">
                                <option value="0" selected="selected">- Select Your Income -</option>
                               <?php
                                    echo createDropDownForIncome();
                               ?>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4"><img src="images/location-info.gif" alt="" width="134" height="33" /></td>
                          </tr>
                          <tr>
                            <td><font class="text">Citizenship</font></td>
                            <td colspan="3"><font class="text">
                              <select
      style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif"       name="citizenship">
                                <option value="0" selected="selected">Select One</option>
                                <?php
                                    echo createDropDownForCountries($db);
                                ?>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Country Living in</font></td>
                            <td colspan="3"><font class="text">
                              <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif"       name="livingin">
                                <option value="0" selected="selected">Select One</option>
                                <?php
                                    echo createDropDownForCountries($db);
                                ?>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Native State</font></td>
                            <td colspan="3">
                              <select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" name="nativestate">
                                <option value="0" selected="selected">Select One</option>
                                <?php
                                    echo createDropDownForState($db);
                                ?>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td><font class="text">Residing City</font></td>
                            <td colspan="3"><select style="font-size: 9pt; width: 200px; font-family: arial, verdana, sans-serif" name="residingcity">
                                <option value="0" selected="selected">Select One</option>
                                <?php
                                    echo createDropDownForCities($db);
                                ?>
                              </select></td>
                          </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4"><img src="images/contact-info.gif" alt="" width="139" height="33" /></td>
                          </tr>
                          <tr>
                            <td><font class="text">E-mail </font></td>
                            <td colspan="3"><font class="text">
                              <input class="box" maxlength="80" name="emailid" />
                              <span id='divEmail' name='divEmail' >Ex: info@humraahi.com</span></font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Contact Phone </font></td>
                            <td colspan="3"><font class="text">
                              <input class="box" maxlength="30" name="phone" />
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Contact Address </font></td>
                            <td colspan="3"><font class="text">
                              <textarea class="box" name="address"></textarea>
                            </font></td>
                          </tr>
                          <tr>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td colspan="4"><img src="images/other-info.gif" alt="" width="119" height="33" /></td>
                          </tr>
                          <tr>
                            <td><font class="text">Profile Description</font></td>
                            <td colspan="3"><font class="text">
                              <textarea class="box" name="description"></textarea>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">LoginId </font></td>
                            <td colspan="3"><font class="text">
                              <input class="box" maxlength="15" name="loginid" onblur="checkLogin(this.value);"/>
							  <span id='divLogin' name='divLogin' ></span>
                            </font>
							</td>
                          </tr>
                          <tr>
                            <td height="22"><font class="text">Choose Password</font></td>
                            <td colspan="3"><font class="text">
                              <input class="box" type="password" maxlength="15" name="password" />
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Confirm Password</font></td>
                            <td colspan="3"><font class="text">
                              <input class="box" type="password" maxlength="15" name="password2" />
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Registered By</font></td>
                            <td colspan="3"><font class="text">
                              <select style="FONT-SIZE: 9pt; WIDTH: 200px; FONT-FAMILY: arial, Verdana, sans-serif" name="registeredby">
                                <option value="0" selected="selected">-Select Registered By-</option>
                                <option value="1">Self</option>
                                <option value="2">Parents</option>
                                <option value="3">Siblings</option>
                                <option value="4">Relatives</option>
                                <option value="5">Friends</option>
                                <option value="6">Brokers</option>
                                <option value="7">Others</option>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td><font class="text">Referred By</font></td>
                            <td colspan="3"><font class="text">
                              <select style="FONT-SIZE: 9pt; WIDTH: 200px; FONT-FAMILY: arial, Verdana, sans-serif" name="referredby">
                                <option value="0" selected="selected">-Select Referred By-</option>
                                <option value="1">Google</option>
                                <option value="2">Yahoo</option>
                                <option value="3">MSN</option>
                                <option value="4">Sify</option>
                                <option value="5">Indiatimes</option>
                                <option value="6">Altavista</option>
                                <option value="7">Newspaper/Magazine Advertisement</option>
                                <option value="8">Article in Newspaper/Magazine</option>
                                <option value="9">Radio City - Mumbai</option>
                                <option value="10">Radio City - Delhi</option>
                                <option value="11">Zee TV</option>
                                <option value="12">Friends</option>
                                <option value="13">Email Promotions</option>
                                <option value="14">Telemarketing</option>
                              </select>
                            </font></td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                            <td colspan="4">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top" width="90">&nbsp;</td>
                            <td colspan="4"><input type="checkbox" checked="checked" value="Y" name="terms" /> <a href="#">I Accept the Terms &amp; Conditions</a> </td>
                          </tr>
                          <tr>
                            <td valign="top">&nbsp;</td>
                            <td colspan="3" align="left">&nbsp;</td>
                          </tr>
                          <tr>
                            <td valign="top" width="90">&nbsp;
                                <input type="hidden" value="1" name="Token" /></td>
                            <td colspan="3" align="left"><font face="verdana" size="2">
                                  <input type="image" src="images/submit.gif" name="submit" />
                              </font><font face="arial" size="2">&nbsp; </font></td>
                          </tr>
                        </tbody>
                      </table>
                      </td>
                    </tr>
                  </table>
                  </form>

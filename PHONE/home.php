<!DOCTYPE html>
<html>
<?php require_once("../register/config.php"); ?>

    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="javascript/script.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="register/registration.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
       
       
        <div class="menu-bar">
            <ul>
                <a href="#">
                    <li>REGISTER</li>
                </a>
                <a href="#">
                    <li>TEAM</li>
                </a>
                <a href="#">
                    <li>SPONSORS</li>
                </a>
                <a href="#">
                    <li>SOCIAL CAUSE</li>
                </a>
                <a href="#">
                    <li>SCHEDULE</li>
                </a>
            </ul>

        </div>
              <!-- --------------- EVENTS NAME MODAL -------------------- -->    
    <div class="event-name-modal">
        <div class="close-modal"></div>
        
            
        
    </div> 
       
        <div class="navbar">
            <div class="explore-logo"></div>
            <div class="nav-icon"></div>
        </div>
        <div class="main-wrapper">


            <div class="body-container">
                <div id="backgrounds-container">
                    <div class="background" id="img1"></div>
                    <div class="background" id="img2"></div>
                    <div class="background" id="img3"></div>
                </div>
                <a href="#register">
                    <div class="register-button"><span>REGISTER NOW</span></div>
                </a>
            </div>

            <div class="events-container">
                <div class="event-category cat1">
                    <div class="cat-heading"><span id="wordwrap">MEGA EVENTS</span></div>
                    <div class="event-description">
                        <div class="desc-text">And when entirely new dimensions of fashion are accustomed, get ready for yet another magnificence.</div>
                        <div class="sub-event-list">
                            <ul>
                                <li class="event-name" id="charisma">CHARISMA</li>
                                <li class="event-name" id="soundcheck">SOUNDCHECK</li>
                                <li class="event-name" id="step-up">STEP UP</li>
                                <li class="event-name" id="ethnic">ETHNIC CONEXION</li>
                            </ul>
                        </div>
                                              
                            <div class="button"><span>ALL EVENTS</span></div>
                        
                    </div>
                    
                </div>
                <div class="event-category cat2">
                    <div class="cat-heading"><span>MUSIC</span></div>
                    <div class="event-description">
                        <div class="desc-text">The heart whelming tones that enchant your soul.</div>
                        <a href="#">
                            <div class="button"><span>ALL EVENTS</span></div>
                        </a>
                    </div>
                </div>
                <div class="event-category cat3">
                    <div class="cat-heading"><span>DANCE</span></div>
                    <div class="event-description">
                        <div class="desc-text">When dance intrigues you to tap your feet to the beats.</div>
                        <a href="#">
                            <div class="button"><span>ALL EVENTS</span></div>
                        </a>
                    </div>
                </div>
                <div class="event-category cat4">
                    <div class="cat-heading"><span id="wordwrap">LITERATURE &amp; QUIZ</span></div>
                    <div class="event-description">
                        <div class="desc-text">The talent as powerful as a weapon.</div>
                        <a href="#">
                            <div class="button"><span>ALL EVENTS</span></div>
                        </a>
                    </div>
                </div>
                <div class="event-category cat5">
                    <div class="cat-heading"><span>DRAMATICS</span></div>
                    <div class="event-description">
                        <div class="desc-text">Emotions crafted to take you along a virtual journey.</div>
                        <a href="#">
                            <div class="button"><span>ALL EVENTS</span></div>
                        </a>
                    </div>
                </div>
                <div class="event-category cat6">
                    <div class="cat-heading"><span>GAMEEKS</span></div>
                    <div class="event-description">
                        <div class="desc-text">Platform to bring out your inner champion.</div>
                        <a href="#">
                            <div class="button"><span>ALL EVENTS</span></div>
                        </a>
                    </div>
                </div>
            
            </div>
    

    <!-- --------------- REGISTRATION FORM -------------------- -->
           
            <div class="register-form-container" id="register">
                <h1>Registration</h1>
                <div class="input-container">
                    <form action="../register/ajaxOnlinePayment.php" method="post">
                        <hr>
                        
                        <div class="input-field">
                            <label id="icon" for="name"><i class="fa fa-user"></i></label>
                            <input type="text" name="name" id="name" placeholder="Name" required onchange="return nvalidation()" />
                            <a id="name_error" class="error_btn"><span>Special Characters and Numerics are not allowed</span></a></div>
                            
                        <div class="input-field">
                            <label id="icon" for="fname"><i class="fa fa-user-md"></i></label>
                            <input type="text" name="fname" id="fname" placeholder="Father's Name" required onchange="return fnvalidation()" />
                            <a id="fname_error" class="error_btn"><span>Speacial Characters and Numerics are not allowed</span></a></div>

                        <div class="gender">
                            <label id="rlabel">Gender</label>
                            <input type="radio" value="male" id="male" name="gender" checked />
                            <label for="male" class="radio">Male</label>
                            <input type="radio" value="female" id="female" name="gender" />
                            <label for="female" class="radio">Female</label>
                        </div>
                        
                        <div class="input-field">
                        <label id="icon" for="email"><i class="fa fa-envelope-o"></i></label>
                        <input type="email" name="emailId" id="email" placeholder="Email" required onchange="return email_val()" />
                        <a id="email_error" class="error_btn"><span>Enter a valid Email ID</span></a></div>
                        
                        <div class="input-field">
                        <label id="icon" for="phone"><i class="fa fa-phone"></i></label>
                        <input type="text" name="phoneNumber" id="phone" placeholder="Mobile Number (10 Digits Only)" required onchange="return mob_val()" />
                        <a id="mob_error" class="error_btn"><span>Enter a valid Mobile Number</span></a></div>
                        
                        <div class="input-field">
                        <label id="icon" for="name"><i class="fa fa-building-o"></i></label>
                        <input type="text" name="college" id="college" placeholder="College / University" required/></div>
                        <div id="events">
                            <label id="rlabel4">Events</label>
                            <select id="evento" name="events">
                                <option>Select your event</option>
                                <?php
		                          for($i=0;$i<count($eventArray);$i++)
		                          {
                                ?>
                                    <option value="<?php echo $eventArray[$i]['id'];?>">
                                        <?php echo $eventArray[$i]['event'];?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                            <label id="rlabel3">Members</label>

                            </select>

                        </div>

                        <div class="accomodation">
                            <label id="rlabel1">Accomodation</label>
                            <input type="radio" value="1" id="acc1" name="isAccomodation" onclick="acc_vis()" />
                            <label for="acc1" class="radio">YES</label>
                            <input type="radio" value="0" id="acc2" name="isAccomodation" onclick="acc_vis()" checked />
                            <label for="acc2" class="radio">NO</label>
                        </div>
                        <div id="days">
                            <label id="rlabel2">Days</label>
                            <select name="howManyDays">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                            <label id="rlabel7">People</label>
                            <select name="noOfPeople">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>

                            </select>
                        </div>
                        <button class="btn" type="submit"><span>SUBMIT</span></button>
                    </form>
                </div>
            </div>
            <script type="text/javascript" src="../register/registration.js"></script>
            <script>
                var members = document.getElementById("rlabel3");
                var eventList = document.getElementById("evento"),
                    eventDiv = document.getElementById("events");
                var mem = document.createElement("SELECT");
                mem.setAttribute("name", "noOfmembers");
                eventList.onchange = function() {
                    selectMembers();
                };

                function selectMembers() {
                    if (eventList.selectedIndex == 1 || eventList.selectedIndex == 3 || eventList.selectedIndex == 4 || eventList.selectedIndex == 18 || eventList.selectedIndex == 20) {
                        members.style.display = "inline-block";
                        mem.innerHTML = '';
                        if (eventList.selectedIndex == 1)
                            var j = 10,
                                max = 26;
                        if (eventList.selectedIndex == 3)
                            var j = 5,
                                max = 51;
                        if (eventList.selectedIndex == 4)
                            var j = 6,
                                max = 51;
                        if (eventList.selectedIndex == 18)
                            var j = 8,
                                max = 51;
                        if (eventList.selectedIndex == 20)
                            var j = 8,
                                max = 17;
                        for (var i = j; i < max; i++) {
                            var memOpt = document.createElement("OPTION");
                            memOpt.setAttribute("value", i);
                            memOpt.innerHTML = i;
                            mem.appendChild(memOpt);
                            eventDiv.appendChild(mem);
                            mem.style.display = "inline-block";
                        }
                    } else {
                        members.style.display = "none";
                        for (var i = 0; i < 1; i++) {
                            var memOpt = document.createElement("OPTION");
                            memOpt.setAttribute("value", i);
                            memOpt.innerHTML = i;
                            mem.appendChild(memOpt);
                            eventDiv.appendChild(mem);
                            mem.style.display = "none";
                        }
                    }
                }
            </script>
        </div>
        </div>
    </body>

</html>
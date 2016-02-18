<!DOCTYPE html>
<html>
    <?php 
    require_once("config.php");
    ?>
    <head>
        <title> Registration</title>
       <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="registration.css">
       
    </head>
    <body>
        <div class="testbox">
          <h1>Registration</h1>
                <div class="input-container">
                  <form action="ajaxOnlinePayment.php" method="post" >
                 <hr>
                        <label id="icon" for="name"><i class="fa fa-user"></i></label>
                  <input type="text" name="name" id="name" placeholder="Name" required onchange="return nvalidation()" />
                      <a id="name_error" class="error_btn"><span>Speacial Characters and Numerics are not allowed</span></a>
                        <label id="icon" for="fname"><i class="fa fa-user-md"></i></label>
                  <input type="text" name="fname" id="fname" placeholder="Father's Name" required onchange="return fnvalidation()" />
                       <a id="fname_error" class="error_btn"><span>Speacial Characters and Numerics are not allowed</span></a>
                   
                 <div class="gender">
                     <label id="rlabel">Gender</label>
                    <input type="radio" value="male" id="male" name="gender" checked />
                        <label for="male" class="radio">Male</label>
                    <input type="radio" value="female" id="female" name="gender" />
                        <label for="female" class="radio">Female</label>
                </div> 
                        <label id="icon" for="email"><i class="fa fa-envelope-o"></i></label>
                  <input type="email" name="emailId" id="email" placeholder="Email" required onchange="return email_val()"/>
                      <a id="email_error" class="error_btn"><span>Enter a valid Email ID</span></a>
                        <label id="icon" for="phone"><i class="fa fa-phone"></i></label>
                  <input type="text" name="phoneNumber" id="phone" placeholder="Mobile Number (10 Digits Only)"  required onchange="return mob_val()"/>
                      <a id="mob_error" class="error_btn"><span>Enter a valid Mobile Number</span></a>
                        <label id="icon" for="name"><i class="fa fa-building-o"></i></label>
                 <input type="text" name="college" id="college" placeholder="College / University" required/>
                        <div id="events">
                            <label id="rlabel4">Events</label>
                            <select id="evento" name="events">
                                <option>Select your event</option>
                                <?php
		                          for($i=0;$i<count($eventArray);$i++)
		                          {
                                ?>
                                    <option value="<?php echo $eventArray[$i]['id'];?>"><?php echo $eventArray[$i]['event'];?>
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
                    <input type="radio" value="1" id="acc1" name="isAccomodation"  onclick="acc_vis()" />
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
         <script type="text/javascript" src="registration.js"></script>
		 <script>
         var members = document.getElementById("rlabel3");
		 var eventList = document.getElementById("evento"),eventDiv = document.getElementById("events");
             var mem = document.createElement("SELECT");
             mem.setAttribute("name","noOfmembers");
		 eventList.onchange = function(){ selectMembers();};
		 function selectMembers(){
		 if(eventList.selectedIndex == 1 || eventList.selectedIndex == 3 || eventList.selectedIndex == 4 || eventList.selectedIndex == 18 || eventList.selectedIndex == 20){
			members.style.display = "inline-block";
            mem.innerHTML = '';
            if(eventList.selectedIndex == 1)
                var j = 10,max = 26;
             if(eventList.selectedIndex == 3)
                var j = 5,max = 51;
             if(eventList.selectedIndex == 4)
                var j = 6,max = 51;
             if(eventList.selectedIndex == 18)
                var j = 8,max = 51;
             if(eventList.selectedIndex == 20)
                var j = 8,max = 17;
            for(var i = j;i<max;i++){
                var memOpt = document.createElement("OPTION");
                memOpt.setAttribute("value",i);
                memOpt.innerHTML = i;
                mem.appendChild(memOpt);
                eventDiv.appendChild(mem);
                mem.style.display = "inline-block";
            }
		 }
		 else{
			members.style.display = "none";
            for(var i = 0;i<1;i++){
                var memOpt = document.createElement("OPTION");
                memOpt.setAttribute("value",i);
                memOpt.innerHTML = i;
                mem.appendChild(memOpt);
                eventDiv.appendChild(mem);
                mem.style.display = "none";
            }
         }
		}
		
        </script>
    </body>
</html>
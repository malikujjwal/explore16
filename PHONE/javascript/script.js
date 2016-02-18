var events = {
    "charisma": {
        "name": "CHARISMA",
        "price": "&#8377 200 Per Member",
        "members": "10-25 Members",
        "description": "For some, singing the soul out is a way of escaping the vicious circle of adversities, a passage leading to another world, a world of illimitable bliss and with no worries whatsoever. Vocal chords are amazing in their capability of reacting to emotions and deepest feelings. While you ignite the stage and enchant the audience with your voice, we at Explore’16 hope that you will use this opportunity and let out the ROCKSTAR in you.",
        "prize": "1st Position : &#8377 1,00,000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2nd Position : &#8377 50,000"
    },
    "soundcheck": {
        "name": "SOUNDCHECK",
        "price": "&#8377 1500 Per Team",
        "members": "4 Member Team (Minimum)",
        "description": "Exemplifying a carnival of pure musical enchantment - Explore '16 decided to create the magic yet again, with some 'Indian touch' and the 'rock gross'- We are back with the sound check. So fuse those drums with the beats of your guitar to create the ultimate mix of music genres!",
        "prize": "1st Position : &#8377 50,000  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2nd Position : &#8377 25,000"
    },
    "step-up": {
        "name": "STEP UP (Group)",
        "price": "&#8377 200 Per Member",
        "members": "5 Member Team (Minimum)",
        "description": "Dance, when you're broken open.<br>Dance, if you've torn the bandage off.<br>Dance in the middle of the fighting.<br>Dance in your blood. Dance when you're perfectly free.<br>With Step Up, you, along with your troop have a chance to create an aura so strong that people enter a trance too deep to recover from.",
        "prize": "1st Position : &#8377 50,000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2nd Position : &#8377 25,000"
    },
    "ethnic": {
        "name": "ETHNIC CONEXION",
        "price": "&#8377 200 Per Member",
        "members": "6 Membered Team (Minimum)",
        "description": "'India is the cradle of human race, the mother of culture and tradition.'<br>To celebrate the uniqueness of this remarkable culture of our nation, Explore '16 gives you an ultimate chance to mark the magnificence of your culture through the folk dances.",
        "prize": "1st Position : &#8377 50,000 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2nd Position : &#8377 25,000"
    }
};

$(document).ready(function () {
    
    $(".button").click(function() {
       $(this).siblings(".desc-text").fadeToggle(); 
       $(this).siblings(".sub-event-list").fadeToggle(); 
    });

    $(".event-name").click(function () {
        $(".event-name-modal").fadeIn();
        var eventName = $(this).attr('id');
        var info = '<div class="modal-content"><h1 id="heading">' + events[eventName].name + '</h1><p id="modal-event-info">' + events[eventName].description + '</p><h2 id="sub-heading">PRICE</h2><p id="modal-event-info">' + events[eventName].price + '</p><h2 id="sub-heading">MEMBERS</h2><p id="modal-event-info">' + events[eventName].members + '</p><h2 id="sub-heading">PRIZE</h2><p id="modal-event-info">' + events[eventName].prize + '</p></div>';
        $(".event-name-modal").append(info);
    });

    
    $(".close-modal").click(function () {
        $(".event-name-modal").fadeOut();
        $(".modal-content").remove();
    });


    $(".nav-icon").click(function () {
        $(this).toggleClass("nav-icon-clicked");
        $(".menu-bar").toggleClass("menu-bar-clicked");
        $(".main-wrapper").toggleClass("main-wrapper-shift");

    });


});
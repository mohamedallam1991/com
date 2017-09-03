$(function() {
   // Let's see if we can get the user's location
   // We do this early on, so when the dealer locator is opened
   // we might already have the user's location and
   // can provide a good map right out of the gate...
   if(navigator.geolocation) {
       console.log("hi again");
       navigator.geolocation.getCurrentPosition(successCallBack, errorCallBack);
   }


   function successCallBack(position) {
       $('#loader').addClass('hidden');
       console.log('Latitude: ' + position.coords.latitude + ', Longitude: ' + position.coords.longitude);
       // Set a cookie with the location information
       document.cookie = 'longitude=' + position.coords.longitude + ';latitude=' + position.coords.latitude;

       var map = $('#embedMap');
       if( map.length ) {
           console.log('Setting up map...');
           // Set the map up
           var mapLink = "https://www.google.com/maps/embed/v1/view?center=" +
               position.coords.latitude + ',' + position.coords.longitude +
               '&zoom=11&maptype=satellite&key=AIzaSyDbtd1acDDfjS0-LWwSf1X1j_7RA0061Ck';
           console.log(mapLink);
           map.attr('src', mapLink);
           $('#loader').addClass('hidden');
       }
   }

   function errorCallBack(error) {
       if(error.code === 1) {
           console.log('User did not share location');
       } else if(error.code === 2) {
           $('#networkDown').removeClass('hidden');
       } else if(error.code === 3) {
           console.log('Position service timed out, bummer');
       } else {
           console.log('You are not locatable. Sneaky one, you are');
       }
   }
});
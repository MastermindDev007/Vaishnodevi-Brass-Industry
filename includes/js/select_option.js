var subjectObject = {
     "India": {
          "Maharashtra": ["Mumbai", "udaipur", "pune"],    
          "Tamil Nadu": ["Coimbatore", "Kanya Kumari", "Chennai"],
          "Gujarat": ["Ahmedabad", "Vaodara", "Gandhinagar"],    
          "Karnataka": ["Bengaluru", "Mysuru", "Mangaluru"],    
          "Uttar Pradesh": ["Lucknow", "Varanasi", "Kanpur"],
          "Andhra Pradesh": ["Visakhapatnam", "Kurnool", "Tirupati"],
          "Telengana": ["Hyderabad", "Warangal", "Karimnagar"],
          "West Bengal": ["Kolkata", "Howrah", "Darjeeling"]
     },
     "USA": {
          "Washington": ["Seattle", "Bellingham", "Port Angeles"],
          "California": ["Los Angeles", "San Francisco", "San Diego"],
          "Florida": ["Miami", "Tampa", "Jacksonville"]
     }
   }
   window.onload = function() {
     var countrysel = document.getElementById("country");
     var stateSel = document.getElementById("state");
     var citySel = document.getElementById("city");
     for (var x in subjectObject) {
       countrysel.options[countrysel.options.length] = new Option(x, x);
     }
     countrysel.onchange = function() {
       //empty Chapters- and Topics- dropdowns
       citySel.length = 1;
       stateSel.length = 1;
       //display correct values
       for (var y in subjectObject[this.value]) {
         stateSel.options[stateSel.options.length] = new Option(y, y);
       }
     }
     stateSel.onchange = function() {
       //empty Chapters dropdown
       citySel.length = 1;
       //display correct values
       var z = subjectObject[countrysel.value][this.value];
       for (var i = 0; i < z.length; i++) {
         citySel.options[citySel.options.length] = new Option(z[i], z[i]);
       }
     }
   }
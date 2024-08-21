// for email js

function toggleStatus(id) {
     var id = id;
     $.ajax({
          url: "./active2.php",
          type: "POST",
          data: {
               id: id
          },
          success: function(result) {
               if (result == '1') {
                    alert('Update Successfuly On');
               } else {
                    alert('Update Successfuly Off');
               }
          }
     });
}
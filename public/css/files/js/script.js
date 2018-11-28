/* ===========< Navbar Fixed Top Part Starts >========== */

// if (window.screen.width > 780) {
//   $(window).scroll(function(){
//       if ($(this).scrollTop() >= 100) {
//              $( "nav" ).addClass( "sticky-top" );
//         } else {
//              $( "nav" ).removeClass( "sticky-top" );
//         }
//     });
// }
/* ============< Navbar Fixed Top Part Ends >=========== */

/* ===========< Navbar Scrolling Animation Part Starts >========== */
// $(function(){
// 	var navbar = $('.navbar');
	
// 	$(window).scroll(function(){
// 		if($(window).scrollTop() <= 40){
// 			navbar.removeClass('navbar-scroll');
// 		} else {
// 			navbar.addClass('navbar-scroll');
// 		}
// 	});
// });
/* ============< Navbar Scrolling Animation Part Ends >=========== */



/* ===========< Part Starts >========== */

/* ============< Part Ends >=========== */


/* ===========< Scroll-Top Part Starts >========== */
$(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});
/* ============< Scroll-Top Part Ends >=========== */

$(function(){
  $("#car1").hide();
  $("#hiace1").hide();

  $("#vehicleType").change(function (){
      if($(this).val()=="car"){
          $("#car1").show();
          $("#hiace1").hide();
      }
      if($(this).val()=="hiace"){
          $("#hiace1").show();
          $("#car1").hide();
      }
  });
});


// $('#selectZoneID').change(function(){
//   var zone_id = $('#selectZoneID').val();
  
//   if(zone_id){
//     $('.removablebuilding').remove();
//     $('.zoneClass').val("");
//     jQuery.ajax({
//       type: "POST",
//       url: "<?php echo base_url(); ?>" + "ajaxFunctions/ajax_getAllBuldingIdForZone",
//       dataType: 'json',
//       data: {
//          zone_id:zone_id
//       },
//       success: function(res) {
//       if (res) {
//           if (res.status === true){
//             var len = res.infos.length;
//             for(var i=0;i<len;i++){
//               $('#selectBuldingID')
//               .append('<option class="removablebuilding" value="'+res.infos[i].buildingId+'"> '+res.infos[i].buildingNumber+' </option>');
//             }
            
//           }
//           else {
//             alert("Pleast Try Again");
//           }
//         }
//       }
//     });
//   }
//   else{
//     alert("Please Select A Zone First");
//   }
// });



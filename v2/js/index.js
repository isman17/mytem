// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('select');
//     var instances = M.FormSelect.init(elems, options);
// });

// $(document).ready(function(){
//     $('select').formSelect();
// });
     
$('.dropdown-button').dropdown({
      	inDuration: 300,
      	outDuration: 225,
      	constrain_width: true, // Does not change width of dropdown to that of the activator
     	hover: true, // Activate on hover
     	gutter: 0, // Spacing from edge
    	belowOrigin: true, // Displays dropdown below the dropdown-button
   		alignment: 'left' // Displays dropdown with edge aligned to the left of button
});
       
$(document).ready(function() {
    $('select').material_select();
});

$(document).ready(function(){
    $('.scrollspy').scrollSpy();
});

(function($){
  $(function(){
    $('.sidenav').sidenav();
  }); 
})(jQuery);


// $(document).ready(function(){
//     $('.sidenav').sidenav();
// });

// $(".dropdown-button").dropdown();
// $(".button-collapse").sideNav();
// $(document).ready(function(){
//     $('.modal-trigger').leanModal();
// });

// $(document).ready(function(){
//     $('.modal').modal();
//   });
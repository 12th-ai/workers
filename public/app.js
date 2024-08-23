tailwind.config = {
   theme: {
      extend: {
         colors: {
            defClr: '#343f52',
            myW: 'rgba(246,247,249)'
         },
         spacing: {
            xPad: '80px'
         }
      }
   }
}

if($('.tabButton').length > 0){
   $('.tabButton').click(function(){
      $('.eachTab').hide();
      let toToggle = $(`#${$(this).attr('data-tab')}`)
      $('.activeBtn').removeClass('activeBtn bg-defClr border-defClr text-myW');
      $(this).addClass('activeBtn bg-defClr border-defClr text-myW');
      toToggle.fadeToggle();
   })
   
   $('.activeBtn').trigger('click')
}

$(window).scroll(function() {
   if($(window).scrollTop() > 100){
      $('nav').addClass('shadow-md');
   }else{
      $('nav').removeClass('shadow-md');
   }
})
jQuery(function($) {
  $(function () {
    const trigger1 = $(".js-accordion-menu1");
    const div1 = $(".accordion__content1");
    const NotFirstText1 = $(".accordion__content1:not(:first)");
    
    NotFirstText1.hide();

    trigger1.on("click", function () {
      $(this).prev(div1).slideToggle();
      $(div1).not($(this).prev(div1)).slideUp();
    });
  });

  $(function () {
    const trigger2 = $(".js-accordion-menu2");
    const div2 = $(".accordion__content2");
    const NotFirstText2 = $(".accordion__content2:not(:first)");
    
    NotFirstText2.hide();

    trigger2.on("click", function () {
      $(this).prev(div2).slideToggle();
      $(div2).not($(this).prev(div2)).slideUp();
    });
  });

  $(function () {
    const trigger3 = $(".js-accordion-menu3");
    const div3 = $(".accordion__content3");
    const NotFirstText3 = $(".accordion__content3:not(:first)");
    
    NotFirstText3.hide();

    trigger3.on("click", function () {
      $(this).prev(div3).slideToggle();
      $(div3).not($(this).prev(div3)).slideUp();
    });
  });

  $(function () {
    const trigger4 = $(".js-accordion-menu4");
    const div4 = $(".accordion__content4");
    const NotFirstText4 = $(".accordion__content4:not(:first)");
    
    NotFirstText4.hide();

    trigger4.on("click", function () {
      $(this).prev(div4).slideToggle();
      $(div4).not($(this).prev(div4)).slideUp();
    });
  });
})
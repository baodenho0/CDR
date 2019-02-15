 $('.get_img').on('click',function(){
    var hinhanh = $(this).find(".get_img").attr("src");
    var ten = $(this).find(".get_ten").text();
    $('.load').find(".load_ten").html(ten);
    $('.load').find(".load_img").attr("src",hinhanh);
  });
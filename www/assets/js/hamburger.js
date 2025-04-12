// 読み込み時にフワッと
// $(window).on("load", function() {
//     $('body').fadeIn(1000); 
// });

// 読み込み時にフワッと
$(window).on('load', function(){
    $('.firstLoadTrigger').addClass('fadeIn');
  });

// ハンバーガー
$(".hamburger-btn").click(function () {
    $(this).toggleClass('active');
      $(".g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
      $("main,footer").toggleClass('mainblur');//ぼかしたいエリアにmainblurクラスを付与

  });
  
  $(".g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
      $(".hamburger-btn").removeClass('active');//ボタンの activeクラスを除去し
      $(".g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
      $("main,footer").removeClass('mainblur');//ぼかしているエリアのmainblurクラスを除去
  });


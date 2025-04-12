function fadeAnime(){
    $('.fadeUpTrigger').each(function(){ //fadeUpTriggerというクラス名が
      var elemPos = $(this).offset().top-10;//要素より、*num*px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
      }else{
      $(this).removeClass('fadeUp');// 画面外に出たらfadeUpというクラス名を外す
      }
      });
  }


  
  // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      fadeAnime();
    });
  
  // 画面が読み込まれたらすぐに動かしたい場合の記述
    // $(window).on('load', function(){
    //   $('.firstLoadTrigger').addClass('fadeIn');
    // });
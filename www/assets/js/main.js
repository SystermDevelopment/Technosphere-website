/**
 * Technosphere ウェブサイト - メインJavaScript
 * ハンバーガーメニュー、スクロールアニメーション、その他インタラクション用スクリプト
 */

// DOMコンテンツロード完了時の処理
document.addEventListener('DOMContentLoaded', function() {
    // ハンバーガーメニュー初期化
    initHamburgerMenu();
    
    // スクロールアニメーション初期化
    initScrollAnimations();
    
    // スムーススクロール初期化
    initSmoothScroll();
    
    // ヘッダースクロール時の処理
    initHeaderScroll();
    
    // フローティングボタンの初期化
    initFloatingButton();
  });
  
  // ページロード完了時の処理
  window.addEventListener('load', function() {
    // 初期ロードアニメーション
    document.querySelectorAll('.firstLoadTrigger').forEach(function(element) {
      element.classList.add('fadeIn');
    });
    
    // 画面内の要素を一度チェック
    fadeAnime();
  });
  
  /**
   * ハンバーガーメニューの初期化
   */
  function initHamburgerMenu() {
    const hamburgerBtn = document.querySelector('.hamburger-btn');
    const gNav = document.querySelector('.g-nav');
    const mainElements = document.querySelectorAll('main, footer');
    const navLinks = document.querySelectorAll('.g-nav a');
    
    if (hamburgerBtn) {
      hamburgerBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        gNav.classList.toggle('panelactive');
        
        // メインコンテンツのブラー効果を切り替え
        mainElements.forEach(function(element) {
          element.classList.toggle('mainblur');
        });
      });
    }
    
    // ナビゲーションリンククリック時の処理
    navLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        hamburgerBtn.classList.remove('active');
        gNav.classList.remove('panelactive');
        
        // ブラー効果を解除
        mainElements.forEach(function(element) {
          element.classList.remove('mainblur');
        });
      });
    });
  }
  
  /**
   * スクロールアニメーションの初期化
   */
  function initScrollAnimations() {
    // スクロールイベントの最適化（スロットリング）
    let scrollTimeout;
    window.addEventListener('scroll', function() {
      if (!scrollTimeout) {
        scrollTimeout = setTimeout(function() {
          fadeAnime();
          scrollTimeout = null;
        }, 50); // 50ミリ秒間隔でアニメーション処理
      }
    });
  }
  
  /**
   * 要素のフェードアップアニメーション
   */
  function fadeAnime() {
    document.querySelectorAll('.fadeUpTrigger').forEach(function(element) {
      const elemPos = element.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;
      
      // 要素が画面内に入ったかどうかを判定
      if (elemPos < windowHeight - 10) {
        element.classList.add('fadeUp');
      } else {
        element.classList.remove('fadeUp');
      }
    });
  }
  
  /**
   * スムーススクロールの初期化
   */
  function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const href = this.getAttribute('href');
        const targetElement = document.querySelector(href === '#' || href === '' ? 'html' : href);
        
        if (targetElement) {
          const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
          const headerOffset = 70; // ヘッダーの高さ分オフセット
          const offsetPosition = targetPosition - headerOffset;
          
          window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  }
  
  /**
   * ヘッダーのスクロール時の処理
   */
  function initHeaderScroll() {
    const header = document.querySelector('.header');
    
    if (header) {
      window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      });
    }
  }
  
  /**
   * 画像の遅延読み込み（Lazy Loading）
   */
  function initLazyLoad() {
    if ('IntersectionObserver' in window) {
      const lazyImages = document.querySelectorAll('img.lazy');
      
      const imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            const lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove('lazy');
            imageObserver.unobserve(lazyImage);
          }
        });
      });
      
      lazyImages.forEach(function(lazyImage) {
        imageObserver.observe(lazyImage);
      });
    } else {
      // IntersectionObserver非対応ブラウザ用のフォールバック
      const lazyImages = document.querySelectorAll('img.lazy');
      
      function lazyLoad() {
        lazyImages.forEach(function(lazyImage) {
          if (lazyImage.getBoundingClientRect().top <= window.innerHeight && 
              lazyImage.getBoundingClientRect().bottom >= 0 && 
              getComputedStyle(lazyImage).display !== 'none') {
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove('lazy');
          }
        });
      }
      
      document.addEventListener('scroll', lazyLoad);
      window.addEventListener('resize', lazyLoad);
      window.addEventListener('orientationChange', lazyLoad);
      window.addEventListener('load', lazyLoad);
    }
  }
  
  // 画像の遅延読み込みを初期化
  document.addEventListener('DOMContentLoaded', initLazyLoad);
  
  /**
   * フローティングお問い合わせボタンの初期化
   */
  function initFloatingButton() {
    const floatingBtn = document.querySelector('.floating-contact-btn');
    
    if (floatingBtn) {
      let lastScrollTop = 0;
      let isScrolling;
      
      // スクロール時の処理
      window.addEventListener('scroll', function() {
        const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // スクロール中はボタンを半透明に
        floatingBtn.style.opacity = '0.7';
        floatingBtn.style.transition = 'opacity 0.3s ease';
        
        // スクロールが停止したらボタンを完全に表示
        clearTimeout(isScrolling);
        isScrolling = setTimeout(function() {
          floatingBtn.style.opacity = '1';
        }, 150);
        
        // 下方向スクロール時はボタンを少し下に移動
        if (currentScrollTop > lastScrollTop && currentScrollTop > 100) {
          floatingBtn.style.transform = 'translateY(10px)';
        } else {
          floatingBtn.style.transform = 'translateY(0)';
        }
        
        lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
      });
      
      // フッター付近でボタンの位置を調整
      window.addEventListener('scroll', function() {
        const footer = document.querySelector('footer');
        if (footer) {
          const footerRect = footer.getBoundingClientRect();
          const windowHeight = window.innerHeight;
          
          // フッターが画面に入ったら、ボタンを上に移動
          if (footerRect.top < windowHeight) {
            const overlap = windowHeight - footerRect.top + 30; // 30pxの余白
            floatingBtn.style.bottom = overlap + 'px';
          } else {
            // レスポンシブに応じた元の位置に戻す
            if (window.innerWidth <= 480) {
              floatingBtn.style.bottom = '15px';
            } else if (window.innerWidth <= 768) {
              floatingBtn.style.bottom = '20px';
            } else {
              floatingBtn.style.bottom = '30px';
            }
          }
        }
      });
    }
  }
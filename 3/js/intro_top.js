$(function(){

  var h = $(window).height();
  var w = $(window).width();

  TweenMax.to('.intro_top_overlay', 1.8, {
    opacity: "0",
    ease: Power1.easeInOut
  });

  var im = new TimelineLite();
  im.to(".intro_top_mess", 3.2, {
    delay: 17,
    opacity:1,
  }).to(".intro_top_mess", 3.2, {
    opacity:0,
    onComplete : function(){
      $('.intro_top_mess').remove();
    }    
  });


  // P0
  var p0 = new TimelineLite();
  p0.to(".intro_top_photo0", 0, {
    delay: 1.8,
    scale:0,
    opacity:1,
  }).to(".intro_top_photo0", 3.4, {
    scale:0.8,
    opacity:1,
    rotation:-5,
    left:"30%",
  }).to(".intro_top_photo0", 0.6, {
    scale:1,
    opacity:0,
    rotation:-8,
    left:"20%",
    onComplete : function(){
      $('.intro_top_photo0').remove();
    }    
  });

  // T0
  var t0 = new TimelineLite();
  t0.to(".intro_top_tt0", 1.2, {
    delay: 2,
    opacity:1,
  }).to(".intro_top_tt0", 1.2, {
    delay: 1.2,
    opacity:0,
    left:"52%",
    onComplete : function(){
      $('.intro_top_tt0').remove();
    }    
  });


  // P1
  var p1 = new TimelineLite();
  p1.to(".intro_top_photo1", 0, {
    delay: 4.8,
    scale:0,
    opacity:1,
  }).to(".intro_top_photo1", 3.4, {
    scale:0.8,
    opacity:1,
    rotation:5,
    left:"70%",
  }).to(".intro_top_photo1", 0.6, {
    scale:1,
    opacity:0,
    rotation:8,
    left:"80%",
    onComplete : function(){
      $('.intro_top_photo1').remove();
    }    
  });

  // T1
  var t1 = new TimelineLite();
  t1.to(".intro_top_tt1", 1.2, {
    delay: 5.0,
    opacity:1,
  }).to(".intro_top_tt1", 1.2, {
    delay: 1.2,
    opacity:0,
    left:"18%",
    onComplete : function(){
      $('.intro_top_tt1').remove();
    }    
  });


  // P2
  var p2 = new TimelineLite();
  p2.to(".intro_top_photo2", 0, {
    delay: 7.8,
    scale:0,
    opacity:1,
  }).to(".intro_top_photo2", 3.4, {
    scale:0.8,
    opacity:1,
    rotation:-5,
    left:"30%",
  }).to(".intro_top_photo2", 0.6, {
    scale:1,
    opacity:0,
    rotation:-8,
    left:"20%",
    onComplete : function(){
      $('.intro_top_photo2').remove();
    }    
  });

  // T2
  var t2 = new TimelineLite();
  t2.to(".intro_top_tt2", 1.2, {
    delay: 8,
    opacity:1,
  }).to(".intro_top_tt2", 1.2, {
    delay: 1.2,
    opacity:0,
    left:"52%",
    onComplete : function(){
      $('.intro_top_tt2').remove();
    }    
  });


  // P3
  var p3 = new TimelineLite();
  p3.to(".intro_top_photo3", 0, {
    delay: 10.8,
    scale:0,
    opacity:1,
  }).to(".intro_top_photo3", 3.4, {
    scale:0.8,
    opacity:1,
    rotation:5,
    left:"70%",
  }).to(".intro_top_photo3", 0.6, {
    scale:1,
    opacity:0,
    rotation:8,
    left:"80%",
    onComplete : function(){
      $('.intro_top_photo3').remove();
    }    
  });

  // T3
  var t3 = new TimelineLite();
  t3.to(".intro_top_tt3", 1.2, {
    delay: 11,
    opacity:1,
  }).to(".intro_top_tt3", 1.2, {
    delay: 1.2,
    opacity:0,
    left:"18%",
    onComplete : function(){
      $('.intro_top_tt3').remove();
    }    
  });

  // P4
  var p4 = new TimelineLite();
  p4.to(".intro_top_photo4", 0, {
    delay: 13.8,
    scale:0,
    opacity:1,
  }).to(".intro_top_photo4", 3.4, {
    scale:0.8,
    opacity:1,
    rotation:-5,
    left:"30%",
  }).to(".intro_top_photo4", 0.6, {
    scale:1,
    opacity:0,
    rotation:-8,
    left:"20%",
    onComplete : function(){
      $('.intro_top_photo4').remove();
    }    
  });

  // T4
  var t4 = new TimelineLite();
  t4.to(".intro_top_tt4", 1.2, {
    delay: 14,
    opacity:1,
  }).to(".intro_top_tt4", 1.2, {
    delay: 1.2,
    opacity:0,
    left:"52%",
    onComplete : function(){
      $('.intro_top_tt4').remove();
    }    
  });


});

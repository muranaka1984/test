// Generated by CoffeeScript 1.10.0
(function() {
  $(function() {
    return app.initialize();
  });

  window.app = {
    initialize: function() {
      this.imagesChange();
      return this.naviOpen();
    },
    naviOpen: function() {
      return $('.navi_toggle').bind('click', function() {
        return $('.navi').slideToggle("fast");
      });
    },
    imagesChange: function() {
      $('.img01').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/01.png",
          'width': "auto"
        });
      });
      $('.img01_guide_on').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/01_guide_on.png",
          'width': "auto"
        });
      });
      $('.imgl01').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/l01.png",
          'width': "auto"
        });
      });
      $('.imgl01_guide_on').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/l01_guide_on.png",
          'width': "auto"
        });
      });
      $('.M_iB').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iB.png",
          'width': "auto"
        });
      });
      $('.M_iC').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iC.png",
          'width': "auto"
        });
      });
      $('.M_iD').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iD.png",
          'width': "auto"
        });
      });
      $('.simg01').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/sp01.png",
          'width': "320"
        });
      });
      $('.simg01_guide_on').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/sp01_guide_on.png",
          'width': "320"
        });
      });
      $('.s-L_iA').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/s-L_iA.png",
          'width': "320"
        });
      });
      $('.s-L_iA_on').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/s-L_iA_on.png",
          'width': "320"
        });
      });
      $('.M_iE-0').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iE-0.png",
          'width': "auto"
        });
      });
      $('.M_iE-1').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iE-1.png",
          'width': "auto"
        });
      });
      $('.M_iF-0').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iF-0.png",
          'width': "auto"
        });
      });
      $('.M_iF-1').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iF-1.png",
          'width': "auto"
        });
      });
      $('.M_iG-0').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iG-0.png",
          'width': "auto"
        });
      });
      $('.M_iG-1').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_iG-1.png",
          'width': "auto"
        });
      });
      $('.M_251048').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_251048.png",
          'width': "auto"
        });
      });
      $('.M_251356').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/M_251356.png",
          'width': "auto"
        });
      });
      return $('.fp').bind('click', function() {
        return $('.mainImage img').attr({
          'src': "img/fp.png",
          'width': "auto"
        });
      });
    }
  };

}).call(this);

//# sourceMappingURL=common.js.map

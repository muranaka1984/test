$(window).load ->
  app.initialize()

window.app =
  initialize: ->
    @w = $(window).width()
    @h = $(window).height()
    @hw = $('.header_wrapper').height()
    @judgeSp()
    @introAnim()
    @particleBox()

  judgeSp: ->
    if $(window).width() <= 800
      @spHeight()
      @risizeLoad()
    else
      @mainLayer()
      @singlePage()

  mainLayer: ->
    hh = @h - @hw
    $('.mainlayer').css "height":"#{hh}px"

  risizeLoad: ->
    $(window).on 'orientationchange', ->
      location.reload()

  spHeight: ->
    hh = $('.mainlayer').height() + 40
    $('.header_wrapper').css {"bottom":"auto","top":"#{hh}px"}
      
  introAnim: ->
    $('.section_wrapper .bg').css "background-position":"center bottom"
    setTimeout (->
      $('.section_wrapper .bg img').css {"margin-top":"0","opacity":"1"}
    ), 2000

  singlePage: ->
    hh = @h - @hw - $('.entry-header').height()
    $('.single .post-thumbnail img').css {"max-height":"#{hh}px","width":"auto"}

  particleBox: ->
    $(window).mousemove (evt) ->
      cy = (evt.clientY) - 40
      cx = (evt.clientX) + 120
#      console.log cx + "/" + cy
      $('.particleBox').css {"opacity":"1", "position":"fixed", "top":"#{cy}px", "left":"#{cx}px"}


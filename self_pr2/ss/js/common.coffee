$ ->
  app.initialize()

window.app =
  initialize: ->
    @imagesChange()

  imagesChange: ->
    $('.img01').bind 'click', ->
      $('.mainImage img').attr 'src':"img/01.png", 'width':"auto"
    $('.img01_guide_on').bind 'click', ->
      $('.mainImage img').attr 'src':"img/01_guide_on.png", 'width':"auto"
    $('.imgl01').bind 'click', ->
      $('.mainImage img').attr 'src':"img/l01.png", 'width':"auto"
    $('.imgl01_guide_on').bind 'click', ->
      $('.mainImage img').attr 'src':"img/l01_guide_on.png", 'width':"auto"
    $('.M_iB').bind 'click', ->
      $('.mainImage img').attr 'src':"img/M_iB.png", 'width':"auto"
    $('.M_iC').bind 'click', ->
      $('.mainImage img').attr 'src':"img/M_iC.png", 'width':"auto"
    $('.M_iD').bind 'click', ->
      $('.mainImage img').attr 'src':"img/M_iD.png", 'width':"auto"
    $('.simg01').bind 'click', ->
      $('.mainImage img').attr 'src':"img/sp01.png", 'width':"320"
    $('.simg01_guide_on').bind 'click', ->
      $('.mainImage img').attr 'src':"img/sp01_guide_on.png", 'width':"320"
    $('.s-L_iA').bind 'click', ->
      $('.mainImage img').attr 'src':"img/s-L_iA.png", 'width':"320"
    $('.s-L_iA_on').bind 'click', ->
      $('.mainImage img').attr 'src':"img/s-L_iA_on.png", 'width':"320"
    $('.M_iE-0').bind 'click', ->
      $('.mainImage img').attr 'src':"img/M_iE-0.png", 'width':"auto"
    $('.M_iE-1').bind 'click', ->
      $('.mainImage img').attr 'src':"img/M_iE-1.png", 'width':"auto"
    $('.M_iF-0').bind 'click', ->
      $('.mainImage img').attr 'src':"img/M_iF-0.png", 'width':"auto"
    $('.M_iF-1').bind 'click', ->
      $('.mainImage img').attr 'src':"img/M_iF-1.png", 'width':"auto"



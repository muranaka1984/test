(function($) {
    $(function() {

  if ($(window).width() >= 1024) {
   DashBoard();
  };

	 function DashBoard(){
	 	$('#wpadminbar').remove();
	 	$('#contextual-help-link-wrap').remove();
	 	$('#wpfooter').remove();
    $('#gadwp-notice').remove();
//    $('#screen-meta-links').remove();
    $('#custom_analytics_widget .handlediv').remove();
    $('#custom_analytics_widget h2.ui-sortable-handle').remove();
    $('.index-php #postbox-container-2').remove();

    $('.post-type-girls label#title-prompt-text').each(function(){
      var txt = $(this).html();
      $(this).html(txt.replace(/ここにタイトルを入力/g,'ここに名前を入力'));
    });


    $('.post-type-girls #cft1 #cft_1 dd').append("<img src=\"\" class=\"img_preview\">");
    $('.post-type-girls #cft1 #cft_1 dd input').change(function(){
        // 1. 選択されたファイルがない場合は何もせずにreturn
        if (!this.files.length) {
            return;
        }
        var file = this.files[0],            // 2. files配列にファイルが入っています
            $_img = $(this).siblings('img'), // 3. jQueryのsiblingsメソッドで兄弟のimgを取得
            fileReader = new FileReader();   // 4. ファイルを読み込むFileReaderオブジェクト

        // 5. 読み込みが完了した際のイベントハンドラ。imgのsrcにデータをセット
        fileReader.onload = function(event) {
            // 読み込んだデータをimgに設定
            $_img.attr('src', event.target.result);
        };
        // 6. 画像読み込み
        fileReader.readAsDataURL(file);
    });

    $('.post-type-girls #cft2 #cft_2 dd').append("<img src=\"\" class=\"img_preview\">");
    $('.post-type-girls #cft2 #cft_2 dd input').change(function(){
        // 1. 選択されたファイルがない場合は何もせずにreturn
        if (!this.files.length) {
            return;
        }
        var file = this.files[0],            // 2. files配列にファイルが入っています
            $_img = $(this).siblings('img'), // 3. jQueryのsiblingsメソッドで兄弟のimgを取得
            fileReader = new FileReader();   // 4. ファイルを読み込むFileReaderオブジェクト

        // 5. 読み込みが完了した際のイベントハンドラ。imgのsrcにデータをセット
        fileReader.onload = function(event) {
            // 読み込んだデータをimgに設定
            $_img.attr('src', event.target.result);
        };
        // 6. 画像読み込み
        fileReader.readAsDataURL(file);
    });




    //$('#dashboard-widgets').load("/analytics.php");


	 };

    $('body').append("<div class=\"my_admin_guide\"><h1>営業サイト</h1><ul><li><a href=\"/\">営業サイトを見る</a></li></ul></div>");

    });
})(jQuery);
// review/commentInput-textCount
$('#js_commentInput').bind('keydown keyup keypress change',function() {
	var thisValueLength = $(this).val().length;
	$('#js_inputCnt').html(thisValueLength);
});

// 口コミ添付ファイル
$(function(){

	// アップロードファイルの幅
	var fileWidth = "75px";

	// アンドロイド標準ブラウザ振り分け
	var ua = navigator.userAgent;
	if ((/Android/.test(ua) && /Linux; U;/.test(ua) && !/Chrome/.test(ua)) ||
	    (/Android/.test(ua) && /Chrome/.test(ua) && /Version/.test(ua)) ||
	    (/Android/.test(ua) && /Chrome/.test(ua) && /SamsungBrowser/.test(ua))) {
	    if (window.confirm(
	    	'お使いのブラウザの開発は終了しており今後サポートはされません。Google Chrome（クローム）への切り替えを推奨いたします。' +
	    	'Google Chromeをダウンロードしますか？')) {
	    	location.href  = 'https://www.google.co.jp/chrome/browser/mobile/index.html';
	    };
	    $('.reviewPost').addClass('androidBrowser');
	}　else {
		$('.reviewPost').addClass('modanBrowser');
		//画像ファイルプレビュー表示のイベント追加 fileを選択時に発火するイベントを登録
		$(document).on('change', 'input[type="file"]', function(e) {
			var file = e.target.files[0],
			reader = new FileReader(),
			$preview = $(this).parents('.js-attachingFile').children('.js-fileUpPreview');
			t = this;
			    // 画像ファイルなのかそれ以外かで分岐
			    if(file.type.indexOf("image") < 0){
			    	$preview.empty();
			    	alert('投稿できるのは画像（jpg,jpeg,png,gif）形式のファイルのみです');
			    } else {
			    // ファイル読み込み開始時点
		    	reader.onloadstart = (function(file) {
		        	//既存のプレビューを削除
		    	    $preview.empty();
		    		$preview.append('<img src="/shared/sp/img/air/preloader01.gif" class="preloader">');
		    		$preview.parents('.js-attachingFile').addClass('loading');
		    	});
		    	// 失敗
		    	reader.onerror = (function(file) {
		    		alert('ファイルの読み込みに失敗しました');
		    		$preview.find('.preloader').addClass('hide');
		    		$preview.parents('.js-attachingFile').removeClass('loading');
		    	});
			    // 読込が成功
			    reader.onload = (function(file) {
			    		return function(e) {
			    		setTimeout(function(){
					        // .prevewの領域の中にロードした画像を表示するimageタグを追加
					        $preview.append($('<img>').attr({
					        	src: e.target.result,
					        	width: fileWidth,
					        	height: fileWidth,
					        	class: "preview",
					        	title: file.name
					        }));
					        $preview.find('.preloader').addClass('hide');
					        $preview.parents('.js-attachingFile').removeClass('loading');
				        	$preview.parent("div").addClass('completed');
					    },1000);
			    	};
				})(file);
				reader.readAsDataURL(file);
			}
		});		
	}

    // コメントフォーム表示
    $(document).on('click', '.js-reviewCommentBtn', function(){
    	var jsReviewComment = $(this).parent().next('.js-reviewComment');
    	$(jsReviewComment).addClass('active');
    	$(jsReviewComment).css({
    		top: $(this).offset().top,
    		property2: $(this).offset().left
    	});
    	$(jsReviewComment).parent().append('<div class="reviewCommentBack"></div>')
    });

    // コメントフォームの背景クリックしたら
    $(document).on('click', '.reviewCommentBack', function(){
		// コメントフォームのテキストエリア
		var reviewTextArea = $(this).prev().children('textarea').val();
    	if(reviewTextArea != ""){
    		$(this).closest('.reviewAttachingFileList').find('.js-reviewCommentBtn').addClass('active');
    	} else {
    		$(this).closest('.reviewAttachingFileList').find('.js-reviewCommentBtn').removeClass('active');
    	}
    	$(this).closest('.reviewAttachingFileList').find('.js-reviewComment').removeClass('active');
    	$(this).detach();
    });

    // 完了ボタンをクリックしたら
    $(document).on('click', '.js-reviewCommentDone', function(){
		// コメントフォームのテキストエリア
		var reviewTextArea = $(this).prev('textarea').val();
    	if(reviewTextArea != ""){
    		$(this).closest('.reviewAttachingFileList').find('.js-reviewCommentBtn').addClass('active');
    	} else {
    		$(this).closest('.reviewAttachingFileList').find('.js-reviewCommentBtn').removeClass('active');
    	}
    	$(this).closest('.reviewAttachingFileList').find('.js-reviewComment').removeClass('active');
    	$(this).parent().next('.reviewCommentBack').detach();
    });

    // ファイル削除ボタン押したら空にする
    $(document).on('click', '.js-fileUpDelete', function(){
    	// $(this).next('.js-fileUpPreview').find('img').attr('src','');
    	// $(fileInputRevive).replaceWith($(fileInputRevive).clone(true));
    	var fileInputRevive = $(this).parents('.js-attachingFile').find('input[type="file"]');
    	$(fileInputRevive).val('');
    	$(this).next('.js-fileUpPreview').empty();
    	$(this).parent("div").removeClass('completed');
    }); 

    // 写真を追加する
    $(document).on('click', '.js-reviewPostAdd', function(){
    	var reviewPostObj = $('.reviewPost').children('div');
    	if(reviewPostObj.length <= 15){
	    	for (var i=1 ; i <= 3 ; i++){
	    		var postObjLen = i + reviewPostObj.length;
	    		$(this).prev('.reviewPost').append(
	    			'<div class="reviewAttachingFileList">' +
	    			'<div class="reviewAttachingFile js-attachingFile">' +
	    			'<label for="fileUpId' + postObjLen + '">' +
	    			'<input type="file" name="image_file[' + postObjLen + ']" id="fileUpId' + postObjLen + '">' +
	    			'</label>' +
	    			'<p class="fileUpDelete js-fileUpDelete"></p>' +
	    			'<div class="reviewFilePreview js-fileUpPreview"></div>' +
	    			'<p class="reviewCommentBtn js-reviewCommentBtn"></p>' +
	    			'</div>' +
	    			'<!-- / reviewAttachingFile -->' +
	    			'<div class="reviewComment js-reviewComment">' +
	    			'<textarea name="image_comment_' + postObjLen + '" placeholder="コメントを入力してください"></textarea>' +
	    			'<p class="reviewCommentDone js-reviewCommentDone btn">完了</p>' +
	    			'</div>' +
	    			'</div>' +
	    			'<!-- / reviewAttachingFileList-->'
	    		);
	    	}
	    } else {
	    	$(this).detach();
	    }
    });


});

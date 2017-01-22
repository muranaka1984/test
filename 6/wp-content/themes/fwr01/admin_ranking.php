<h1>ランキング　<small style="font-size: 13px;">変更後のランキングはマウスをのせて更新してください。数字が更新されます。</small></h1>

<?php if (current_user_can('level_7')): ?>

<div class="admin_ranking">
<iframe src="/wp-admin/admin.php?page=ranking_g">ランキングGのページです。インラインフレーム対応のブラウザでご覧下さい。</iframe>

<iframe src="/wp-admin/admin.php?page=ranking_n">ランキングNのページです。インラインフレーム対応のブラウザでご覧下さい。</iframe>
</div>

<?php endif; ?>


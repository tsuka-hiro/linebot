<?php
// ライブラリを読み込み
require_once __DIR__ . '/linebot.php';
// クラスをインスタンス化
$bot = new LineBotClass();
// メッセージがなくなるまでループ
while ($bot->check_shift_event()) {
    // テキストを取得
    $text = $bot->get_text();
    // テキストメッセージを追加
    $bot->add_text_builder($text);
    // 返信
    $bot->reply();
}
?>

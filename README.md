# TEMP-WP-DartSass

DartSass 対応 WordPress 構築環境を含む gulp ファイル

## 環境

-   Gulp が使える環境が前提（4 系）
-   Node はバージョン 14 以降

## 使い方

-   ダウンロードしたフォルダを開く
-   ターミナルを開き、 npm i とコマンドを入力
-   node_modules と package-lock.json が生成されるのを確認する
-   「 npx gulp 」とコマンドを入力すると動き出します

## 仕様

-   sass の記述は src フォルダの中で行う
-   js の記述は src フォルダの中で行う
-   画像は src フォルダの images の中に格納する（圧縮されます）
-   コンパイルされた js/css/images/は第一階層の assets と WordPressTheme の中の assets に吐き出されます

## 備考

-   PC ファーストが前提の仕様です。
-   rem 記述を前提としています。
-   ルートフォントを vw で設定していることから PC サイズのレイアウトをタブレットで表示させることが出来ます（rem で書いた場合のみ）。

## 静的ファイルをアップするとき

-   html ファイルと assets フォルダをアップロードしてください

## WordPress

-   WordPressTheme をアップロードすればテーマとして反映されます

# TEMP-WP-DartSass

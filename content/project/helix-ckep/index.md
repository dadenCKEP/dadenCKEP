---
# Documentation: https://sourcethemes.com/academic/docs/managing-content/

title: "Helix - CKEP"
summary: "オープンソースの分割型格子配列キーボード[Helix](https://github.com/MakotoKurauchi/helix)のカスタム。メンテナンス性重視で既にテセウスの船状態。"
authors: []
tags: ["Hardware"]
categories: []
date: 2018-09-29T17:22:00+09:00

# Optional external URL for project (replaces project detail page).
external_link: ""

# Featured image
# To use, add an image named `featured.jpg/png` to your page's folder.
# Focal points: Smart, Center, TopLeft, Top, TopRight, Left, Right, BottomLeft, Bottom, BottomRight.
image:
  caption: ""
  focal_point: ""
  preview_only: false

# Custom links (optional).
#   Uncomment and edit lines below to show custom links.
# links:
# - name: Follow
#   url: https://twitter.com
#   icon_pack: fab
#   icon: twitter

url_code: ""
url_pdf: ""
url_slides: ""
url_video: ""

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ""
---
オープンソースの分割型格子配列キーボード[Helix](https://github.com/MakotoKurauchi/helix)のカスタム。

## コンセプト
「タイピングが早いキーボード」ではなく「操作が早いキーボード」。  
ファンクションキーやテンキー、HomeやEndなどのカーソル移動キーを省略せず、押しやすい位置に入れることでトータルでの操作が早くなる。  
反面、通常のタイピングに必要なキーストロークは少し多くなるので純粋な文字列入力には不利。
通常のローマ字入力に関してはほぼ影響がないが、記号入力などレイヤー切り替えが必要な文字は遅い。

## キーキャップ・キースイッチ
キースイッチはCherry MX クリア軸(MX1A-C1NN)で、キーキャップはFILCO Calendar Keycap Setと適当な無刻印のDSA 1U。  
{{<tweet user="dadenCKEP" id="1202556067755855872">}}

## キーマップ
日本語配列をベースにテンキーを追加し、左右交換モードを追加した配列。keymapは気が向いたら公開予定。

## メンテナンス性重視のカスタム
メンテナンス性を重視し、一部の入手性が低い、あるいは互換が低い部品を別のものに交換してある。
また、すでにカバーアクリルプレート、Arduino Pro Micro、キースイッチなどは何度か交換されている。

## 携帯ケース
高さがあるため持ち運びにはあまり向かない。
{{<tweet user="dadenCKEP" id="1108712727554318336">}}

## 今後の予定
キースイッチ交換のために2台目の製作を予定していたが、ベリリウム銅のholtite socketというものの存在を知ったため基板のみの交換を検討中。

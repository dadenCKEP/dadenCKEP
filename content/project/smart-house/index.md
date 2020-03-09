---
# Documentation: https://sourcethemes.com/academic/docs/managing-content/

title: "Smart House"
summary: "各種家電の総合管理とセンシングによる自動制御。"
authors: []
tags: ["Hardware"]
categories: []
date: 2017-03-21T00:00:00+09:00

# Featured image
# To use, add an image named `featured.jpg/png` to your page's folder.
# Focal points: Smart, Center, TopLeft, Top, TopRight, Left, Right, BottomLeft, Bottom, BottomRight.
image:
  caption: ""
  focal_point: ""
  preview_only: false

---
各種家電の総合管理とセンシングによる自動制御。

## Node-RED
Smart Houseの中心は[Node-RED](https://nodered.org/)を使用している。
Raspberry Pi上で運用している。 (https://nodered.org/docs/getting-started/raspberrypi)

## 使用している既製品のデバイス
* Philips Hue
* Google Nest Hub
* Nature remo

## 連携しているサービス
* IFTTT (API非公開のサービスやスマホへの通知など)
* Discord (Webhookが高機能)
* Twitter

## 室内用センサ
{{<tweet 1102823785655226368>}}
使用しているセンサ・マイコン
* BME282
* MH-Z19
* ESP32

大きな台風が来た日のグラフ。気圧が急降下していることがわかる。
{{<tweet 1170913935127543809>}}

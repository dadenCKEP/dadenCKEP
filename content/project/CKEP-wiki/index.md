---
# Documentation: https://sourcethemes.com/academic/docs/managing-content/

title: "CKEP-wiki"
summary: "個人的な情報の集積所 / GitHub ActionsとGitHub Pagesによる運用の自動化"
authors: []
tags: ["Software"]
categories: []
date: 2019-12-19T00:00:00+09:00

---

## 概要
個人的な情報の集積所となっている。

公開ページ: https://wiki.ckep.info  
リポジトリ(GitHub): https://github.com/dadenCKEP/CKEP-wiki

## 静的サイトジェネレーター「Hugo」による生成
[Hugo](https://gohugo.io/)により作成している。テーマは[LEARN](https://learn.netlify.com/en/)を使用している。

## GitHub Actions + GitHub Pagesによる運用
GitHub Actionsにより生成を自動化し、GitHub Pagesによってホストしている。
以前は[ckep-composite-backbone-system](/project/ckep-composite-backbone-system)を使用していたが、
移行やバックアップの手間が酷いため切り替えに至った。

また、HugoはMarkdownベースのため、GitHubのWebサイト上のエディターで容易に編集ができる。
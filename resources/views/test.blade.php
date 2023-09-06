@extends('layouts.app')

@section('title', '犬種診断')

@section('content')
    <!-- これは動かない。CSSではこのサイズを大きく設定しておく -->
    <div class="container">
    <!-- これは最初のタイトル表示のページのラップ。containerよりは幅も高さも小さくする -->
    <div class="title-page-wrap page-wrap">
        <div class="title-wrap">
        <h1 class="title">犬種診断</h1>
        </div>
        <div class="select-wrap">
            <h2>ワンちゃんとの最高の生活のために診断してみよう！</h2>
        </div>
        <div class="btn-wrap">
        <button type="button" class="tool-btn btn-start">診断スタート</button>
        </div>
    </div>
    </div>

<!-- Q1質問 -->
    <div class="q1 page-wrap" style="display: none">
        <div class="title-wrap">
            <h1 class="title">Q1. お住まいはマンション（賃貸）ですか？<br><span class="small">(1つだけ選択)</span></h1>
        </div>
        <div class="select-wrap">
            <button type="button" class="select yes" id="q1yes">Yes</button>
            <button type="button" class="select no" id="q1no">No</button>
        </div>
        <div class="btn-wrap">
            <button type="button" class="tool-btn btn-next" disabled>次の質問へ</button>
        </div>
    </div>

<!-- Q2質問 -->
    <div class="q2 page-wrap" style="display: none">
        <div class="title-wrap">
            <h1 class="title">Q2. 帰りの時間が遅い、もしくは主張がたくさんあるお仕事ですか？<br><span class="small">(1つだけ選択)</span></h1>
        </div>
        <div class="select-wrap">
            <button type="button" class="select yes" id="q2yes">Yes</button>
            <button type="button" class="select no" id="q2no">No</button>
        </div>
        <div class="btn-wrap">
            <button type="button" class="tool-btn btn-next" disabled>次の質問へ</button>
        </div>
    </div>

<!-- Q3質問 -->
<div class="q3 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">Q3. どちらかというと インドア派ですか？<br><span class="small">(1つだけ選択)</span></h1>
    </div>
    <div class="select-wrap">
        <button type="button" class="select yes" id="q3yes">Yes</button>
        <button type="button" class="select no" id="q3no">No</button>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-result" disabled>診断結果へ</button>
    </div>
</div>

<!-- A1回答 -->
<div class="a1 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h2 class="answer" >ウィペット、バセンジー、パグ、チワワ、ボストンテリア、日本スピッツ</h1>
        <h2 class="answer" >バセット・ハウンド、パピヨン、ペキニーズ、ヨークシャー・テリア</h1>        
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>

<!-- A2回答 -->
<div class="a2 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h2 class="answer" >トイプードル、チワワ、ビション フリーゼ、イタリアン・グレイハウンド</h1>
        <h2 class="answer" >マルチーズ、フレンチブルドック、ポメラニアン</h1>        
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>

<!-- A3回答 -->
<div class="a3 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h21 class="answer" >ミニチュアピンシャー、ダルメシアン、シーズー、柴犬、ボストンテリア、アメリカンコッパースパニエル、ウェルシュコーギー</h1>
        <h2 class="answer" >シェットランド・シープドッグ、ジャック・ラッセル・テリア、スタンダードシュナウザー、ミニチュアシュナウザー、ビーグル</h1>        
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>

<!-- A4回答 -->
<div class="a4 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h2 class="answer" >シーズー、柴犬、ボストンテリア、トイプードル、フォックステリア、アイリッシュ・テリア、甲斐犬、シベリアン・ハスキー</h1>        
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>

<!-- A5回答 -->
<div class="a5 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h2 class="answer" >基本的にライフスタイル面においてはどんな犬種でも飼育可能ですが、特に：フォックステリア、ボーダーコリー、ゴールデンレトリバー、アイリッシュ・セター</h1>
        <h2 class="answer" >アメリカンコッパースパニエル、甲斐犬、グレート・デーン、シベリアン・ハスキー、ラブラドール・レトリーバー、ロットワイラー、ワイマラナー</h1>        
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>

<!-- A6回答 -->
<div class="a6 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h2 class="answer" >アイリッシュ・ウルフハウンド、秋田犬、ウェルシュコーギー、グレート・ピレニーズ、シェットランド・シープドッグ、ジャーマン・シェパード・ドッグ</h1>
        <h2 class="answer" >ジャック・ラッセル・テリア、スタンダードシュナウザー、ミニチュアシュナウザー、セント・バーナード、ドーベルマン、土佐犬、バーニーズ・マウンテン・ドッグ、ビーグル</h1>        
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>

<!-- A7回答 -->
<div class="a7 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h2 class="answer" >チワワ、ビション フリーゼ、イタリアン・グレイハウンド、マルチーズ、フレンチブルドック、ポメラニアン</h1>
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>

<!-- A8回答 -->
<div class="a8 page-wrap" style="display: none">
    <div class="title-wrap">
        <h1 class="title">あなたにピッタリな犬種は…</h1>
    </div>
    <div class="answer-wrap">
        <h2 class="answer" >ウィペット、バセンジー、パグ、ボストンテリア、日本スピッツ、バセット・ハウンド、パピヨン、ペキニーズ、ヨークシャー・テリア</h1>
        <p class="answer">です！</p>
    </div>
    <div class="btn-wrap">
        <button type="button" class="tool-btn btn-finish">診断終了</button>
    </div>
</div>
@endsection


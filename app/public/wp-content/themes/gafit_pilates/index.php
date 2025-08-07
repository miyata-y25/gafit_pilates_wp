<?php get_header(); ?>

<section class="top-main">
    <h1 class="top-main__ttl">
        <?php
            $topmain_args = array(
                'post_type' => 'topmain',
                'posts_per_page' => 1,
            );
            $topmain_query = new WP_Query($topmain_args);
            if ($topmain_query->have_posts()) :
                while ($topmain_query->have_posts()) : $topmain_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-main-pc'); ?>">
            <img src="<?php the_field('top-main-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </h1>
</section>

<section class="top-main" id="link01">
    <div class="top-main__info">
        <?php
            $topcam_args = array(
                'post_type' => 'topcam',
                'posts_per_page' => 1,
            );
            $topcam_query = new WP_Query($topcam_args);
            if ($topcam_query->have_posts()) :
                while ($topcam_query->have_posts()) : $topcam_query->the_post();
        ?>
        <picture>
            <source media="(min-width:641px)" srcset="<?php the_field('top-cam-pc'); ?>">
            <img src="<?php the_field('top-cam-sp'); ?>" alt="<?php the_title(); ?>">
        </picture>
        <?php the_content(); ?>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </div>
</section>

<a href="https://lin.ee/ecEvsI5" target="_blank" class="line-bnr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/line_bnr.svg" alt="体験受付スタート!!"></a>

<section class="sec --intro" id="link02">
    <h2 class="sec__ttl2">
        <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/intro_ttl.svg" alt="Introduction"></span>
        <span class="jp">ニューヨークや韓国に続き<br>今日本でも話題の<br class="sp-show">マシンピラティススタジオ！</span>
    </h2>
    <div class="intro-cont">
        <figure class="intro-cont__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/intro_img.png" alt=""></figure>
        <p class="intro-cont__txt">マシンピラティスは「美姿勢」をつくり「けが予防」にも繋がるエクササイズとして、今日本でも話題沸騰中！<br>その中でGAFIT（ガフィット）では「伝統的なピラティス」×「最新ファンクショナル理論」のオリジナルマシンピラティスメソッドを少人数10人制セミパーソナルでご提供。<br>フィットネスジムも会費内で利用できるため、より身体への効果を実感頂けます。</p>
    </div>
    <div class="hr"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/hr.svg" alt=""></div>
    <div class="support-area">
        <h3 class="support-area__ttl">GAFIT（ガフィット）が支持されるワケ</h3>
        <ul class="support-area__ul">
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/support_icon01.svg" alt=""></figure>
                <div>
                    <h4>少人数10人制</h4>
                    <p>一人一人に合わせた指導やサポートが細やかにできるセミパーソナルでご提供</p>
                </div>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/support_icon02.svg" alt=""></figure>
                <div>
                    <h4>ダイエット効果</h4>
                    <p>インナーマッスルを強化によるウエストのサイズダウンやヒップアップはもちろん、続けることで筋肉量が増え徐々に痩せやすく太りにくい身体に</p>
                </div>
            </li>
            <li>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/support_icon03.svg" alt=""></figure>
                <div>
                    <h4>フィットネスジム利用可</h4>
                    <p>ジム・スタジオ・温浴施設（女性：岩盤浴、男性：サウナ）を会費内で利用可</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<div class="point-area">
    <picture>
        <source media="(min-width:641px)" srcset="assets/img/top/point_info2.svg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point_info2_sp.svg" alt="GAFIT（ガフィット）のマシンピラティス">
    </picture>
</div>

<section class="sec --point01 --pt" id="link03">
    <h2 class="sec__ttl2">
        <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point01_ttl.svg" alt="Point01"></span>
        <span class="sub">伝統ピラティス</span>
        <span class="jp min">10回で気分が良くなり、<br>20回で見た目が変わり、<br>30回で体のすべてが変わる<small>by ジョセフ・ピラティス</small></span>
    </h2>
    <ul class="point01-ul">
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point01_thum01.png" alt=""></figure>
            <h3>100年前から変わらない専用器具<br>「リフォーマーピラティス」</h3>
            <p><span>初心者でも安定した動作の軌道を適切な姿勢で行うことができ</span>、エクササイズはただ鍛えるだけでなく、動きと体の矯正に最も効果的な器具の一つです。また<span>上級者にとっても動作を行う筋肉、筋膜、関節、骨に適切な負荷をかけることができ、動作そのものを強化することができます。</span></p>
        </li>
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point01_thum02.png" alt=""></figure>
            <h3>最新ファンクショナル理論</h3>
            <p>ガフィットのピラティスは、ピラティスメソッドの持つ「動きとその動きを行なっている自分自身をその呼吸とともに完璧にコントロールすること」という基本的なメソッドを活かしながら、動きの質を向上させるための<span>最新ファンクショナルトレーニング理論</span>を取り入れ再構築された、より<span>進化したピラティス</span>です。</p>
        </li>
        <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/point01_thum03.png" alt=""></figure>
            <h3>ハーフタワーを採用</h3>
            <p>ガフィットでは「ハーフタワー」付のマシンピラティスを採用、これにより、上半身のエクササイズや全身の統合的な動きのエクササイズなど、エクササイズの幅は各段に広がり身体により効果的なピラティスをご提供しております。</p>
        </li>
    </ul>
</section>

<div class="check-area">
    <figure>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/check_info_sp.svg" alt="ガフィットのキレイなBodyメイクキーワード">
        <a href="#check01" class="abs-link --01"></a>
        <a href="#check02" class="abs-link --02"></a>
        <a href="#check03" class="abs-link --03"></a>
        <a href="#check04" class="abs-link --04"></a>
    </figure>
</div>

<ul class="check-ul --pt" id="link04">
    <li id="check01">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/check_main01.png" alt="基礎体温"></h3>
        <div>
            <h4><span>「基礎体温」</span>を上昇させ脂肪が<br>燃えやすいカラダに</h4>
            <p>
                基礎体温とは･･･朝目覚めたら起き上がる前に測定するの体温のこと。<br>
                基礎体温の標準は36.6度、あなたは？<br>
                低体温だと・・脂肪が燃えにくく太りやすい<br>
                店舗のマシンピラティスエクササイズやマシントレーニングで筋力量アップさせることで、体温を上昇させることが可能！<br>
                体温は筋肉で作られている！
            </p>
        </div>
    </li>
    <li id="check02">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/check_main02.png" alt="糖質供給"></h3>
        <div>
            <h4><span>「糖質補給」</span>で体調を崩さずダイエット</h4>
            <p>
                食事を抜いたり、極端な食事制限は、「ふらふらする」「目の前が真っ白になる」「集中力が続かない」などの症状を引き起こします。エクササイズのエネルギー源は糖質です。低糖質状態だと、自分の筋肉を分解してエネルギーを生産することに！店舗に来る日はスイーツ解禁ＤＡＹに！
            </p>
        </div>
    </li>
    <li id="check03">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/check_main03.png" alt="脂肪燃焼リパーゼ"></h3>
        <div>
            <h4><span>「脂肪燃焼リパーゼ」</span>を促進！</h4>
            <p>
                ガフィットではフィットネスジムが利用できるのが大きな強みです。マシンピラティスでのエクササイズで汗ばむ程度に体温をあげたあと、ランニングマシンなどの有酸素運動で「脂肪燃焼リパーゼ」を促進することがダイエットの近道！
            </p>
        </div>
    </li>
    <li id="check04">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/check_main04.png" alt="骨盤の歪み"></h3>
        <div>
            <h4><span>「骨盤の歪み」</span>の改善！</h4>
            <p>
                インナーマッスルを鍛えるためにガフィットでは専用マシンを使ったピラティスを行います。骨盤が歪むと腰痛や関節痛、内臓の働きも悪くなり消化不良・便秘・また血液やリンパの流れが悪く冷えやむくみの原因になります。
            </p>
        </div>
    </li>
    <li>
        <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/check_main05.png" alt="男性にも"></h3>
        <div>
            <h4>マシンピラティスは<span>男性にもおすすめ</span></h4>
            <p>
                関節の可動域を広げたり、身体の歪みを正すことにより運動機能向上にも働きかけて、けが予防、姿勢＆腰痛改善、趣味のゴルフやテニス、ダンスなどのパフォーマンスアップにも役立ちます。
            </p>
        </div>
    </li>
</ul>

<section class="sec --instructor" id="link05">
    <h2 class="sec__ttl2">
        <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instructor_ttl.svg" alt="Instructor"></span>
        <span class="sub">インストラクター</span>
    </h2>
    <div class="instructor-area">
        <h3 class="instructor-area__ttl">安心・安全のために</h3>
        <p class="instructor-area__txt">GAFIT（ガフィット）豊橋三ノ輪店の<br>インストラクターはスタッフ全員が有資格者</p>
        <ul class="instructor-area__ul">
            <li>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/instructor_logo01.svg" alt="RIGHT PILATES　ロゴ">
                    <figcaption>日本ライトピラティス協会<br>リフォーマーピラティスインストラクター</figcaption>
                </figure>
            </li>
        </ul>
    </div>
    <ul class="staff-list">
        <?php
            $staff_args = array(
                'post_type' => 'staff',
                'posts_per_page' => 100,
            );
            $staff_query = new WP_Query($staff_args);
            if ($staff_query->have_posts()) :
                while ($staff_query->have_posts()) : $staff_query->the_post();
        ?>
        <li class="staff-list__li">
            <figure><?php echo wp_get_attachment_image(get_post_meta($post->ID, 'staff-thumb', true), ''); ?></figure>
            <div class="info">
                <span class="name"><?php the_field('staff-title'); ?>：<?php the_title(); ?></span>
                <span class="name_en"><?php the_field('staff-name'); ?></span>
                <dl>
                    <dt>保有資格</dt>
                    <dd>
                        <?php the_field('staff-license'); ?>
                    </dd>
                </dl>
            </div>
            <p class="read"><?php the_field('staff-read'); ?></p>
        </li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
    <div class="member-area">
        <h3 class="member-area__ttl">ピラティス会員さまは<br>24時間フィットネスジムが<br><span>無料で利用できます</span></h3>
        <ul class="member-area__check">
            <li>ジム初心者も扱いやすいマシン、ラインナップも充実</li>
            <li>アスリートも納得のフリーウエイトエリア有</li>
            <li>スタジオレッスンも充実！（LES MILLS導入、他多数有）</li>
            <li>サロン級マシン採用のコラーゲンライト有</li>
            <li>サウナ（男性）・岩盤浴（女性）の温浴施設有</li>
        </ul>
        <ul class="member-area__img">
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/member_img01.png" alt=""><p>ジム</p></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/member_img02.png" alt=""><p>スタジオ</p></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/member_img03.png" alt=""><p>コラーゲンマシン</p></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/member_img04.png" alt=""><p>温浴施設</p></li>
        </ul>
        <a href="#" class="member-area__btn btn">詳しくはこちら</a>
    </div>
</section>

<section class="sec --price" id="link06">
    <h2 class="sec__ttl2">
        <span class="en"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/price_ttl.svg" alt="Price"></span>
        <span class="sub">料金</span>
    </h2>
    <dl class="price-dl">
        <dt>入会金</dt>
        <dd>
            11,000円（税込）<span>退会まで有効/入会資格18歳以上</span>
        </dd>
    </dl>
    <dl class="price-dl">
        <dt>月会費</dt>
        <dd>
            ピラティス会員<br>12,100円（税込）<span>マシンピラティススタジオ予約4回可<br class="sp-show">＋フィットネス会員同様のサービス</span>
        </dd>
    </dl>
    <h2 class="sec__ttl2">
        <span class="sub">オプション価格</span>
    </h2>
    <ul class="price-ul" data-simplebar data-simplebar-auto-hide="false">
        <li>
            <h3><span>ピラティス<br>チケット追加</span></h3>
            <p>1,100円（税込）/1枚</p>
        </li>
        <li>
            <h3><span>レンタル<br>ロッカー</span></h3>
            <p>1,100円（税込）/月</p>
        </li>
        <li>
            <h3><span>水素水</span></h3>
            <p>1,100円(税込)/月</p>
        </li>
        <li>
            <h3><span>コラーゲン<br>ルーム</span></h3>
            <p>550円（税込）/1回<span>女性専用要予約：20分<br>平日10:00−22:00<br>土日祝日10:00−17:00</span></p>
        </li>
    </ul>
</section>

<section class="sec --flow">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">FLOW</span>
        <span class="sec__ttl__jp">ご利用のながれ</span>
    </h2>
    <div class="flow-area">
        <ol class="flow-area__ol">
            <li>まずはWeb入会</li>
            <li>プレオープン後にご来店手続き</li>
        </ol>
        <h3 class="flow-area__ttl">入会に必要なもの</h3>
        <ul class="flow-area__ul">
            <li>入会金</li>
            <li>クレジットカード</li>
            <li>本人確認書類（運転免許証など）</li>
            <li>スマートフォン<br class="sp-show">（お持ちでない方はご相談ください）</li>
        </ul>
        <h3 class="flow-area__ttl">入会資格</h3>
        <ul class="flow-area__ul">
            <li>満18歳以上の方</li>
            <li>施設を利用いただく上で、<br class="sp-show">ご自身の安全性を確保できる方</li>
            <li>会員規約他、マナーを守れる方</li>
        </ul>
    </div>
</section>

<section class="sec --faq">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">FAQ</span>
        <span class="sec__ttl__jp">よくあるご質問</span>
    </h2>
    <?php
        $faq_args = array(
            'post_type' => 'faq',
            'posts_per_page' => 100,
        );
        $faq_query = new WP_Query($faq_args);
        if ($faq_query->have_posts()) :
            while ($faq_query->have_posts()) : $faq_query->the_post();
    ?>
    <details class="faq-list aco-cont">
        <summary class="faq-list__head aco-cont__head"><?php the_title(); ?></summary>
        <p class="faq-list__body aco-cont__body"><?php the_field('faq-anser'); ?></p>
    </details>
    <?php endwhile; endif;
        wp_reset_postdata();
    ?>
</section>

<section class="sec --access" id="link07">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">ACCESS</span>
        <span class="sec__ttl__jp">アクセス</span>
    </h2>
    <dl class="access-dl">
        <dt>店舗名</dt>
        <dd>GAFIT（ガフィット） 豊橋三ノ輪店</dd>
    </dl>
    <dl class="access-dl">
        <dt>住所</dt>
        <dd>〒440-0837<br>愛知県豊橋市三ノ輪町本興寺10-4</dd>
    </dl>
    <dl class="access-dl">
        <dt>TEL</dt>
        <dd>090-9222-5505<br>GAFIT豊橋三ノ輪オープン準備室<br>受付時間：平日10時〜17時</dd>
    </dl>
    <dl class="access-dl">
        <dt>営業時間</dt>
        <dd>
            24時間営業<br>
            スタッフタイム<br>
            平日10:00−22:00<br>土日祝日10:00−17:00
        </dd>
    </dl>
    <dl class="access-dl">
        <dt>アクセス</dt>
        <dd>国道1号線から大池通りに入り<br class="sp-show">約200m左手</dd>
    </dl>
</section>

<div class="map-cont">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.3430311054544!2d137.40884507574648!3d34.746950772903176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6004d3e466b0a9f9%3A0xa170d9b817a94192!2zR0FGSVTvvIjjgqzjg5XjgqPjg4Pjg4jvvInosYrmqYvkuInjg47ovKrlupc!5e0!3m2!1sja!2sjp!4v1751606259452!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>
<?php
/*
 * Template Name: homepage
 */
?>
<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>國立交通大學人事室(測試版)</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
    <!-- bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>

    <link href="<?php bloginfo('template_url'); ?>/css/homepage.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <script src="//cdn.polyfill.io/v2/polyfill.min.js"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/homepage.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/homepage_db.js"></script>
    
    


</head>

<body>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01" src="<?php bloginfo('template_url'); ?>/image/大地圖_北大門_for人事室專用.jpg">
        <img class="modal-content" id="img02" src="<?php bloginfo('template_url'); ?>/image/office_2nd.jpg" alt="">
        <div id="caption"></div>
    </div>


    <div class="navbar">
        <div class="triangle"></div>

        <a href="<?php echo site_url() ?>"; ><img src="<?php bloginfo('template_url'); ?>/image/logo.png" alt="NCTU logo"
                width="360" height="75" style="position: relative; left: 6%; top: 1.5em;"></a>


        <!--
    <form>
      <input type="text" name="search" placeholder="">
    </form>

    <div class="language-opt">
      <div class="lang-left lang-normal">中文</div>
      <div class="lang-right lang-choose">EN</div>
    </div> -->

        <!-- <div id="tool_bar">

            <form>
                <input type="text" name="search" placeholder="">
            </form>


            <div id="lang">
                <a href="<?php echo site_url() ?>"><div class="lang-left lang-normal">中文</div></a>
                <a href="<?php echo site_url() ?>/working" target="_blank"><div class="lang-right lang-choose">EN</div></a>
            </div>

        </div> -->



        <div class="top" id="top_1">
            <div id="nav1">
                <div id="navid1">關於本室</div>
            </div>
            <div class="navbox1">
                <!-- hover出梯形一 -->
                <div id="navboxw1">可 查 閱 本 室 簡 介 、 本<br>室 位 置 、 主 任 簡 介 、<br>本 室 願 景 、 組 織 架 構<br>、 人 員 職 掌 及 工 作 成<br>果 等 資 訊
                </div>
            </div>
            <div class="navbox1_2">
                <div id="intro_position" class="_hide">
                    <div id="intro_position_slider_container">
                        <div style="position:absolute; top: 1vh;font-size: 1.5em;margin-left: 10.5vw;color: white;">學校地圖</div>
                        <div id="school_map_circle" class="position-circle circle5-2 mouse-hover solid-circle"></div>
                        <div style="position:absolute; top: 1vh;font-size: 1.5em;margin-left: 30vw;color: white;">Google Map
                        </div>
                        <div id="google_map_circle" class="position-circle  circle6-2 mouse-hover"></div>
                        <div style="position:absolute; top: 1vh;font-size: 1.5em;margin-left: 50vw;color: white;">聯外交通資訊</div>
                        <div id="transport_circle" class="position-circle  circle7-2 mouse-hover"></div>
                        <div style="position:absolute; top: 6.3vh; left:13.2vw; width: 18.8vw;height: 1.5px; background:#F4A22C">
                        </div>
                        <div style="position:absolute; top: 6.3vh; left:33.2vw; width: 18.8vw;height: 1.5px; background:#F4A22C">
                        </div>
                    </div>

                    <div id="intro_position_left_font">
                        本室位於<br>
                        交通大學光復校區<br>
                        行政大樓 二樓
                    </div>



                    <div class="position_page pp1">
                        <div id="pp1_photo1">
                            <div class="image-map" id="big-map">
                                <img  style="width: 100%;max-width:300px;"  src="<?php bloginfo('template_url'); ?>/image/大地圖_北大門_for人事室專用.jpg" >

                            <div class="pp1_photo_font">
                                光復校區位置分佈圖
                            </div>
                            </div>
                            <div class="image-map" id="second-floor">
                                <img style="width: 100%;max-width:300px;"  src="<?php bloginfo('template_url'); ?>/image/office_2nd.jpg" >
                            <div class="pp1_photo_font">
                                行政大樓二樓平面圖
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="position_page pp2" style="display:none;">
                        <div style="width:50vw;margin-left:20vw;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d706.2887850892794!2d120.99884471455455!3d24.78774981002353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346836102a748fd7%3A0x7eb013e01a93d031!2zMzAw5paw56u55biC5p2x5Y2A6KGM5pS_5aSn5qiT!5e0!3m2!1szh-TW!2stw!4v1540813184016" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>        
                    </div>
                    <div class="position_page pp3">
                        <div id="pp3-left">
                            <div id="containerself-driving">
                                <div class="containerself-driving-left">自行開車</div>
                                <div class="containerself-driving-right">
                                    <div id="head-south" class="mouse-hover transport-title">南下</div>
                                    <div id="head-north" class="mouse-hover transport-title">北上</div>
                                </div>
                            </div>
                            <div id="public-transport-container">
                                <div class="public-transport-container-left">大眾運輸</div>
                                <div class="public-transport-container-right">
                                    <div id="HSR" class="mouse-hover transport-title"">高鐵</div>
                                    <div id="TRA" class="mouse-hover transport-title"">台鐵</div>
                                    <div id="caoch" class="mouse-hover transport-title"">客運</div>
                                </div>
                            </div>
                        </div>
                        <div id="pp3-right">
                            <div class="pp3-right-context" id="head-south-context">
                            中山高速公路南下:<br>
                            1.台北→中壢→新竹交流道 (靠右)→(左轉入) 大學路 (加油站旁)→交通大學 光復校區<br>
                            第二高速公路南下:<br>
                            2.台北→關西→新竹系統交流道→中山高北上 (往台北方向)→新竹交流道 ( 左彎往新竹市區方向)→經光復路 (高速公路下) →(左轉入) 大學路 (加油 站旁)→交通大學光復校區
                            </div>
                            <div class="pp3-right-context" id="head-north-context">
                            中山高速公路北上:<br>
                            1.台中→中山高北上 (往台北方向)→新竹交流道 (左彎往新竹市區方向)→ 經光復路 (高速公路下)→(左轉入) 大學路 (加油站旁)→交通大學光復校區<br>
                            2.台中→中山高北上 (往台北方向)→科學園區交流道 (左彎)→園區二路 ( 左彎)→新安路→交通大學光復校區

                            <br>
                            第二高速公路北上:<br>
                            請於新竹系統處轉接中山高速公路，後續請參考「中山高速公路北上」走法。<br>
                            備註: 新竹交流道以集散道路連結為一複合式之交流道，南下車輛由交流 道南下出口駛出後，依續有公道五、光復路、新竹科學園區出口，請由光 復路出口右前方轉入大學路抵達交通大學
                            </div>
                            <div class="pp3-right-context" id="HSR-context">
                            抵高鐵新竹站後，可選擇下列方式轉運至交通大學光復校區。<br>
                            1.計程車<br>
                            2.科學園區接駁巴士 :於1號月台搭乘橘線科學園區接駁巴士
                            抵達科技生活館後 轉搭紅線科學園區接駁巴士，即可抵達交通大學<br>
                            3.公車:於2號月台搭乘新竹客運前往火車站後 再轉搭市內公車至交通大學。
                            </div>
                            <div class="pp3-right-context" id="TRA-context">
                            抵達新竹火車站後，可選擇下列方式轉運至交通大學光復校區。<br>
                            1.計程車<br>
                            2.公車:步行至站前民族路上之公車總站轉搭<br>
                            1).1路市區公車(約10至15分鐘一班)
                            (火車站→過溝)<br>
                            2).2路市區公車(約60分鐘一班):
                            (火車站→交通大學)</div>
                            <div class="pp3-right-context" id="caoch-context">
                            搭乘火車抵達新竹火車站，可選擇下列方式轉運至交通大學光復校區。<br>
                            1.計程車<br>
                            2.公車:步行至站前民族路上之公車總站轉搭<br>
                            1路市區公車(約10至15分鐘一班) 火車站→東門市場→東門國小→公園→學園商場→省中→省商→學府路口→光復中學
                            →清華大學→過溝(下車)→徒步從大學路走約10分鐘→交通大學光復校區<br>
                            3.大眾運輸、高鐵<br>
                            2路市區公車(約60分鐘一班):
                            (火車站→交通大學)
                            </div>
                        </div>
                    </div>
                </div>

                    <div id="jobs_page" class="_hide">
                        <div id="intro_position_slider_container">
                            <div style="position:absolute; top: 2vh;font-size: 1.5em;margin-left: 8.5vw;color: white;">
                                主任
                            </div>
                            <div id="director_circle" class="staff-circle circle5-2 mouse-hover solid-circle"></div>
                            <div style="position:absolute; top: 2vh;font-size: 1.5em;margin-left: 25vw;color: white;">
                                第一組
                            </div>
                            <div id="first_group_circle" class="staff-circle circle6-2 mouse-hover"></div>
                            <div style="position:absolute; top: 2vh;font-size: 1.5em;margin-left: 42vw;color: white;">
                                第二組
                            </div>
                            <div id="second_group_circle" class="staff-circle circle7-2 mouse-hover"></div>
                            <div style="position:absolute; top: 2vh;font-size: 1.5em;margin-left: 57vw;color: white;">
                                業務職掌一覽
                                </div>
                            <div id="third_group_circle" class="staff-circle circle8-2 mouse-hover"></div>
                            <div style="position:absolute; top: 7.3vh; left:10.2vw; width: 15.8vw;height: 1.5px; background:#F4A22C">
                            </div>
                            <div style="position:absolute; top: 7.3vh; left:27.2vw; width: 15.8vw;height: 1.5px; background:#F4A22C">
                            </div>
                            <div style="position:absolute; top: 7.3vh; left:44.2vw; width: 15.8vw;height: 1.5px; background:#F4A22C">
                            </div>
                        </div>


                        <div id="staff-content-container">
                            <div id="staff-director-page">
                                <div id="director-info-container">
                                    <div id="director-name">
                                        <?= get_page_by_title('主任大名', OBJECT, 'post')->post_content ?>
                                    </div>
                                    
                                    <div id="director-info">
                                        <?php 
                                        $content = get_page_by_title('主任資訊', OBJECT, 'post')->post_content;
                                        foreach (explode("\n", $content) as $line) {
                                            echo "<div class='director-info-line'>$line</div>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div id="director-words-container">
                                    <div id="director-word">主任的話</div>
                                    <div id="director-word-content">
                                        <?= get_page_by_title('主任的話', OBJECT, 'post')->post_content ?>
                                    </div>
                                </div>
                            </div>

                            <div id="staff-group-1" class="_hide staff-group">
                                <div class="right-container">
                                    <div id="staff-type-container">
                                        <div class="staff-container">
                                            <div class="staff-type chief" >組長</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $ary = explode("\n", get_page_by_title('第一組組長', OBJECT, 'post')->post_content);
                                            $count = 0;
                                            $i_man = 0;
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g1m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">秘書</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $i_man++;
                                            $count = 0;
                                            $ary = explode("\n", get_page_by_title('第一組秘書', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g1m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>

                                        <div class="staff-container">
                                            <div class="staff-type">專員</div>
                                            <div class="staff-name-container">  
                                            <?php
                                            $i_man++;
                                            $ary = explode("\n", get_page_by_title('第一組專員', OBJECT, 'post')->post_content);
                                            $count = 0;
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g1m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">組員</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $count = 0;
                                            $i_man++;
                                            $ary = explode("\n", get_page_by_title('第一組組員', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g1m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">行政專員</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $i_man++;
                                            $count = 0;
                                            $ary = explode("\n", get_page_by_title('第一組行政專員', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g1m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">計畫助理</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $count = 0;
                                            $i_man++;
                                            $ary = explode("\n", get_page_by_title('第一組計畫助理', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g1m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="staff-container">
                                            <div class="staff-type">全時工讀生</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $i_man++;
                                            $count = 0;
                                            $ary = explode("\n", get_page_by_title('第一組全時工讀生', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g1m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div> -->
                                    </div>    
                                </div>    
                            </div>
                            
                            <div id="staff-group-2" class="_hide staff-group">
                                <div id="staff-type-container">
                                    <div class="right-container">
                                        <div class="staff-container">
                                            <div class="staff-type">組長</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $count = 0;
                                            $i_man = 0;
                                            $ary = explode("\n", get_page_by_title('第二組組長', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g2m{$i_man}_{$count}'>" . $name . "</div>";
                                            }
                                            $count++;
                                            ?>
                                            
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">專員</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $i_man++;
                                            $count = 0;
                                            $ary = explode("\n", get_page_by_title('第二組專員', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g2m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">組員</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $count = 0;
                                            $i_man++;
                                            $ary = explode("\n", get_page_by_title('第二組組員', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g2m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">行政專員</div>
                                            <div class="staff-name-container">
                                            <?php
                                            $i_man++;
                                            $count = 0;
                                            $ary = explode("\n", get_page_by_title('第二組行政專員', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g2m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">計畫助理</div>
                                            <div class="staff-name-container">
                                            <?php 
                                            $i_man++;
                                            $count = 0;
                                            $ary = explode("\n", get_page_by_title('第二組計畫助理', OBJECT, 'post')->post_content);
                                            foreach ($ary as $name) {
                                                $name = preg_replace('/[\r\n]+/', '', $name);
                                                if (strlen($name) == 0) {
                                                    continue;
                                                }
                                                echo "<div class='staff-name mouse-hover g2m{$i_man}_{$count}'>" . $name . "</div>";
                                                $count++;
                                            } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">約聘人員</div>
                                            <div class="staff-name-container">
                                                <?php
                                                $i_man++;
                                                $count = 0;
                                                $ary = explode("\n", get_page_by_title('第二組約聘人員', OBJECT, 'post')->post_content);
                                                foreach ($ary as $name) {
                                                    $name = preg_replace('/[\r\n]+/', '', $name);
                                                    if (strlen($name) == 0) {
                                                        continue;
                                                    }
                                                    echo "<div class='staff-name mouse-hover g2m{$i_man}_{$count}'>" . $name . "</div>";
                                                    $count++;
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="staff-container">
                                            <div class="staff-type">全時工讀生</div>
                                            <div class="staff-name-container">
                                                <?php
                                                $i_man++;
                                                $count = 0;
                                                $ary = explode("\n", get_page_by_title('第二組全時工讀生', OBJECT, 'post')->post_content);
                                                foreach ($ary as $name) {
                                                    $name = preg_replace('/[\r\n]+/', '', $name);
                                                    if (strlen($name) == 0) {
                                                        continue;
                                                    }
                                                    echo "<div class='staff-name mouse-hover g2m{$i_man}_{$count}'>" . $name . "</div>";
                                                    $count++;
                                                } ?>
                                            </div>
                                        </div> 
                                    </div>     
                                </div>
                            </div>
                            <!-- 人員職掌一覽 -->
                            <div id="staff-group-3" class="_hide staff-group">
                                <div id="staff-left-slider-container">
                                      <div id="staff-left-circle" class="staff-circle mouse-hover"></div>
                                </div>
                                <div id="staff-group-3-right-container">
                                <?php
                                $item = 1;
                                $group2_start_page;
                                foreach (array("第一組", "第二組") as $gidx => $group) {
                                        // 換組要換頁
                                    if ($gidx == 1)
                                        $item += (14 - $item % 14);
                                    $group2_start_page = (int)($item / 14) + 1;
                                    $_group = $gidx + 1;
                                    echo "<div class='staff-job-overview-container group$_group'>";
                                    $staff_titles = array("組長", "專員", "約聘人員", "行政專員", "計畫助理", "組員", "全時工讀生");
                                    foreach ($staff_titles as $staff_title) {
                                                //get name
                                        $post = get_page_by_title($group . $staff_title, OBJECT, 'post')->post_content;
                                        $staffs = array();
                                        foreach (explode("\n", $post) as $line) {
                                                    // 可能會有多餘的換行 要刪掉
                                            $line = preg_replace('/[\r\n]+/', '', $line);
                                            if (strlen($line) == 0) {
                                                continue;
                                            }
                                            array_push($staffs, $line);
                                        }

                                                // get information
                                        $information = get_page_by_title($group . $staff_title . '資料', OBJECT, 'post')->post_content;
                                        $tels = array(); // 分機
                                        $jobs = array(); // 執掌
                                        foreach (explode("\n", $information) as $line) {
                                            if (strlen(preg_replace('/[\r\n]+/', '', $line)) == 0) {
                                                continue;
                                            }
                                            if (preg_match("/執掌:/", $line)) {
                                                $line = str_replace('執掌:', '', $line);
                                                $line = str_replace("執掌: ", "", $line);
                                                $line = str_replace("執掌:", "", $line);
                                                $line = str_replace("，", " ", $line);
                                                $line = str_replace(",", " ", $line);
                                                $line = str_replace("、", " ", $line);

                                                array_push($jobs, explode(" ", trim($line)));
                                            }
                                            if (preg_match("/聯絡分機:/", $line)) {
                                                $line = str_replace('聯絡分機:', '', $line);
                                                array_push($tels, "#" . preg_replace('/[\r\n]+/', '', $line));
                                            }
                                        }
                                                
                                                // print out
                                        foreach ($staffs as $idx => $staff) {
                                            foreach ($jobs[$idx] as $job) {
                                                $page = (int)(($item - 1) / 14) + 1;
                                                echo "<div class='staff-job-overview-item-container page$page item$item'>";
                                                if (mb_strlen($job, 'utf-8') > 19) {
                                                    $job = mb_substr($job, 0, 19, 'utf-8') . "...";
                                                }
                                                echo "<div class='staff-job-overview-title'> $job </div>";
                                                echo "<div class='staff-job-overview-staff'>$staff $tels[$idx]</div>";
                                                echo "</div>"; // staff-job-overview-container
                                                $item++;
                                            }
                                        }
                                    }
                                    echo "</div>";
                                }
                                echo "<div class='staff-job-overview-dot-container'>";
                                for ($i = 1; $i <= (int)(($item - 1) / 14) + 1; $i++) {
                                    $group_name = "";
                                    if ($i == 1) {
                                        $group_name = "第一組";
                                    } else if ($i == $group2_start_page) {
                                        $group_name = "第二組";
                                    }
                                    if ($i < $group2_start_page) {
                                        $group_idx = 1;
                                    } else {
                                        $group_idx = 2;
                                    }
                                                // 換頁圓點
                                    $class_fade = "";
                                    if ($i != 1)
                                        $class_fade = "_fade";


                                    echo "<div  style='display:flex;'>";
                                    echo "<div class='staff-job-overview-dot page$i mouse-hover group$group_idx $class_fade'></div>";
                                    echo "<div class='staff-job-overview-dot-name page$i'>$group_name</div>";
                                    echo "</div>";
                                }
                                echo "</div>";
                                    /*
                                    $staff_wpcat_id = get_cat_iD("第一組執掌一覽");
                                    $posts = get_posts( array(
                                        'numberposts' => 100,
                                        'category' => $staff_wpcat_id
                                    ));
                                    foreach ($posts as $idx => $post) {
                                        echo "<div class='staff-overview-container'>";
                                            echo "<div class='staff-overview-title-$idx'>" . $post->post_title . "</div>";
                                            echo "<div class='staff-overview-content-$idx'>" . $post->post_content . "</div>";
                                        echo "</div>";
                                    }
                                 */
                                ?>
                                </div>
                                
                            </div>
                            <?php 
                            function staff_line_handle1($info, $total, $i_man)
                            {
                                $count = 0;
                                foreach ($info as $line) {
                                    if (!($count < $total)) {
                                        break;
                                    }
                                    if (preg_match("/聯絡分機:/", $line)) {
                                        echo "<div class='staff-info-container' id='g1m{$i_man}_{$count}'>";
                                        echo "<div class='staff-tel'>$line</div>";
                                    }
                                    $agents = array();
                                    if (preg_match("/職務代理人:/", $line)) {
                                        echo "<div class='staff-agent-block'>";
                                        echo "<div class='staff-agent-title'>職務代理人:</div>";
                                        $line = str_replace("職務代理人: ", "", $line);
                                        $line = str_replace("職務代理人:", "", $line);
                                        $line = str_replace(" ", "<br>", $line);
                                        echo "<div class='staff-agent-container'>" . $line . "</div>";
                                        echo "</div>";
                                    }
                                    if (preg_match("/執掌:/", $line)) {
                                        echo "<div class='staff-job-title'>職掌:</div>";
                                        $line = str_replace("執掌: ", "", $line);
                                        $line = str_replace("執掌:", "", $line);
                                        $line = str_replace("，", " ", $line);
                                        $line = str_replace(",", " ", $line);
                                        $line = str_replace("、", " ", $line);
                                        $line = str_replace(" ", "<br>", $line);
                                            //$jobs = explode(" ",$line);
                                        echo "<div class='staff-job-container'>" . $line . "</div>";
                                            /*
                                            foreach($jobs as $job){
                                                echo "<div class='staff-job'>$job</div>";
                                            }
                                         */
                                        $count++;
                                        echo "</div>"; // staff-info
                                    }
                                }
                            }

                            function staff_line_handle2($info, $total, $i_man)
                            {
                                $count = 0;
                                foreach ($info as $line) {
                                    if (!($count < $total)) {
                                        break;
                                    }
                                    if (preg_match("/聯絡分機:/", $line)) {
                                        echo "<div class='staff-info-container' id='g2m{$i_man}_{$count}'>";
                                        echo "<div class='staff-tel'>$line</div>";
                                    }
                                    $agents = array();
                                    if (preg_match("/職務代理人:/", $line)) {
                                        echo "<div class='staff-agent-block'>";

                                        $line = str_replace("職務代理人: ", "", $line);
                                        $line = str_replace("職務代理人:", "", $line);
                                        $line = str_replace(" ", "<br>", $line);
                                        echo "<div class='staff-agent-title'>職務代理人:</div>";
                                        echo "<div class='staff-agent-container'>" . $line . "</div>";

                                        echo "</div>";
                                    }
                                    if (preg_match("/執掌:/", $line)) {
                                        $line = str_replace("執掌: ", "", $line);
                                        $line = str_replace("執掌:", "", $line);
                                        $line = str_replace("，", " ", $line);
                                        $line = str_replace(",", " ", $line);
                                        $line = str_replace("、", " ", $line);
                                        $line = str_replace(" ", "<br>", $line);
                                        echo "<div class='staff-job-title'>職掌:</div>";
                                        echo "<div class='staff-job-container'>" . $line . "</div>";
                                        $count++;
                                        echo "</div>"; // staff-info
                                    }
                                }
                            }
                            ?>
                            <div id="staff-right-content-container">
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第一組組長', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man = 0;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第一組組長資料', OBJECT, 'post')->post_content);
                                    staff_line_handle1($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第一組專員', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第一組專員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle1($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第一組組員', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第一組組員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle1($info, $total, $i_man);
                                    ?>

                                    <?php
                                    $ary = explode("\n", get_page_by_title('第一組行政專員', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第一組行政專員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle1($info, $total, $i_man);
                                    ?>

                                    <?php
                                    $ary = explode("\n", get_page_by_title('第一組計畫助理', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第一組計畫助理資料', OBJECT, 'post')->post_content);
                                    staff_line_handle1($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第一組秘書', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第一組約聘人員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle1($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第一組全時工讀生', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第一組全時工讀生資料', OBJECT, 'post')->post_content);
                                    staff_line_handle1($info, $total, $i_man);
                                    ?>

                                    <?php
                                    $ary = explode("\n", get_page_by_title('第二組組長', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man = 0;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第二組組長資料', OBJECT, 'post')->post_content);
                                    staff_line_handle2($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第二組專員', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第二組專員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle2($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第二組組員', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第二組組員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle2($info, $total, $i_man);
                                    ?>

                                    <?php
                                    $ary = explode("\n", get_page_by_title('第二組行政專員', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第二組行政專員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle2($info, $total, $i_man);
                                    ?>

                                    <?php
                                    $ary = explode("\n", get_page_by_title('第二組計畫助理', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第二組計畫助理資料', OBJECT, 'post')->post_content);
                                    staff_line_handle2($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第二組約聘人員', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第二組約聘人員資料', OBJECT, 'post')->post_content);
                                    staff_line_handle2($info, $total, $i_man);
                                    ?>
                                    <?php
                                    $ary = explode("\n", get_page_by_title('第二組全時工讀生', OBJECT, 'post')->post_content);
                                    $total = 0;
                                    $i_man++;
                                    foreach ($ary as $element) {
                                        $element = preg_replace('/[\r\n]+/', '', $element);
                                        if (strlen($element) > 0) {
                                            $total++;
                                        }
                                    }
                                    $info = explode("\n", get_page_by_title('第二組全時工讀生資料', OBJECT, 'post')->post_content);
                                    staff_line_handle2($info, $total, $i_man);
                                    ?>
                            </div>
                        </div>

                    </div>




                <div id="intro_page" class="_hide">   <!-- 點擊展開出右大梯形 -->
                    <div class="h1" id="h1">
                    <div class="circle1">
                        <div id="cw1">簡介</div>
                    </div>

                    </div>
                    <div class="cb1">本校人事室係依據人事管理條例、大學法及本校組織規程而設置，掌理本校組織編制，教職員聘(任)免、<br>還調、敘薪、考核、獎懲、差假勤惰、訓練進修、待遇、福利、保險、退休、撫卹、人事資料管理等事務。
                    </div>

                    <div class="h2" id="h2">
                    <div class="circle2">
                        <div id="cw2">現況</div>
                    </div>
                    </div>
                    <div class="cb2">人事室現有同仁21人，置主任1人，綜理人事業務，並分設第一組、第二組辦<br>事，各組置組長1人。</div>
                    <div class="h3" id="h3">
                    <div class="circle3">
                        <div id="cw3">組織</div>
                    </div>

                    </div>
                    <div class="cb3">
                    <div class="cb3-org">
                        <div style="padding-top:6.5vh;">主任｜任明坤</div>
                        <div class="circle3-1"></div>
                        <div class="circle3-2"></div>
                        <div class="circle3-3"></div>
                        <div style="padding-left: 2vw;">
                            <div class="team_name">第一組</div>  
                            <div>組長｜張家綺</div>
                        </div>
                        <div>
                            <div class="team_name">第二組</div>  
                            <div>組長｜姜慶芸</div>
                        </div>
                    </div>
                    </div>


                    <div class="h4" id="h4">
                    <div class="circle4">
                        <div id="cw4">目標</div>
                    </div>

                    </div>
                    <div class="cb4">本校人事服務工作的主要任務，乃依據人事法令及學校人事規章，配合校務發<br>展需要，善盡幕僚職責，支援各單位，達成校務發展目標;並維護職員同仁合<br>法權益，建立顧客導向之服務理念與和諧人際關係，以提升人事服務效能。</div>

                </div>

                <div id="vision_page" class="_hide">   <!-- 點擊展開出右大梯形 -->
                    <div class="h1" id="h1">
                    <div class="circle1">
                        <div id="cw1">願景</div>
                    </div>

                    </div>
                    <div class="cb1">兼具專業與熱忱的團隊，攜手邁向頂尖!</div>
                    <div class="h2" id="h2">
                    <div class="circle2">
                        <div id="cw2">核心任務</div>
                    </div>

                    </div>
                    <div class="cb2">一、以前瞻創新之思維，建立完善的人事體制。<br>二、以專業精進之精神，提升服務的品質效能。<br>三、以關懷同理之熱誠，營造溫馨的校園環境。</div>

                    <div class="h3" id="h3">
                    <div class="circle3">
                        <div id="cw3">核心價值</div>
                    </div>

                    </div>
                    <div class="cb3-title">廉正</div>
                    <div class="cb3-title">忠誠</div>
                    <div class="cb3-title">專業</div>
                    <div class="cb3-title">效能</div>
                    <div class="cb3-title">關懷</div>
                    <div class="core-value-context">
                        廉潔、公正，具有高尚人格。清廉自持，潔身自好，不收受不當利益，並主動利益迴<br>&nbsp;           避;誠信公平執行公務，以兼顧各方利益之均衡，營造全民良善之生存發展環境。<br><br>
                        忠於憲法及法律，忠於國家及全民;重視榮譽、誠信、誠實並應具道德感與責任感。<br><br>
                        以謙虛的態度，終身學習，積極充實職務所需之知識技能，並熟悉主管法令及相關政<br>&nbsp;&nbsp;策措施，以提供全民第一流的公共服務。<br><br>
                        運用有效方法，簡化行政程序;研修相關法令、措施應符合成本效益要求;發揮執行<br>&nbsp;&nbsp;力，以提高行政效率與工作績效，達成政策目標。<br><br>
                        時時以民眾福祉為念，親切提供服務;對人民之需要及所遭遇之困難與問題，能以同<br>&nbsp;&nbsp;理心設身處地著想，並提供必要之協助與照護，以增進其利益。
                    </div>

                </div>
                <!-- hover出梯形二 -->
                <div id="navboxw1_2">
                    <!-- <a href="<?php echo site_url(); ?>/intro/" style="color: #FFFFFF;"> -->
                        <div id="navboxw1_2_1" class="mouse-hover">本 室 簡 介<br></div>
                    <!-- </a> -->
                    <!-- <a href="<?php echo site_url(); ?>/site/" style="color: #FFFFFF;"> -->
                        <div id="navboxw1_2_2" class="mouse-hover">本 室 位 置<br></div>
                    <!-- </a> -->
                    <div id="navboxw1_2_3" class="mouse-hover">人 員 職 掌<br></div>
                    <!-- <a href="<?php echo site_url(); ?>/vision/" style="color: #FFFFFF;"> -->
                        <div id="navboxw1_2_4" class="mouse-hover">本 室 願 景<br></div>
                    <!-- </a> -->
                    <a href="<?php echo site_url() ?>/working" target="_blank"> <div id="navboxw1_2_5" class="mouse-hover">工 作 成 果</div></a>
                </div>
            </div>
            <div class="navbox1_3">
                <!-- 點擊展開出梯形三 -->
                <div id="navboxw1_3">
                    <!-- <div id="navboxw1_3">本 室 簡 介<br></div>
      <div id="navboxw1_4">本 室 位 置<br></div>
      <div id="navboxw1_5">人 員 職 掌<br></div>
      <div id="navboxw1_6">本 室 願 景<br></div>
      <div id="navboxw1_7">工 作 成 果</div> -->
                </div>
            </div>
            <div class="navbox1_4">
                <!-- 點擊展開出梯形四 -->
                <div id="navboxw1_4">
                    <!-- <div id="navboxw1_3">本 室 簡 介<br></div>
      <div id="navboxw1_4">本 室 位 置<br></div>
      <div id="navboxw1_5">人 員 職 掌<br></div>
      <div id="navboxw1_6">本 室 願 景<br></div>
      <div id="navboxw1_7">工 作 成 果</div> -->
                </div>
            </div>
        </div>

        <div class="top" id="top_2">
            <div id="nav2">
                <div id="navid3">訊息公告</div>
                <div class="nav-triangle" id="nav2-triangle"></div>
            </div>
            <div class="announcement-container">
                <div class="navbox2">
                    <div class="navbox2_1_1">可查閱重要訊息、業<br>務訊息、活動訊息、<br>法規訊息及友校訊息</div>
                    <div class="navbox2_1">
                        <div v-on:click="fetch_data(1,'重要訊息')">重要訊息</div>
                        <div v-on:click="fetch_data(1,'業務訊息')">業務訊息</div>
                        <div v-on:click="fetch_data(1,'法規訊息')">法規訊息</div>
                        <div v-on:click="fetch_data(1,'友校訊息')">友校訊息</div>
                        
                        
                    </div>
                </div>
                <div class="navbox2_2">
                    <div id="msg-display-board" v-if="!display">
                        <div class="navbox2_2_1">
                            <div style="display:inline;">公告日期</div>
                            <div style="display:inline; margin-left: 80px;">主旨</div>
                        </div>
                        <div class="navbox2_2_2">
                            <div id="msg-prev-page" v-on:click="prev_page" style="display:inline; cursor: pointer;" >prev page</div>
                            <div id="msg-next-page" v-on:click="next_page" style="display:inline; margin-left: 25px; cursor: pointer;">next page</div>
                        </div>
                        
                        <ul class="msg_container">
                            <announcement-title class="msg_size mouse-hover" v-on:click.native="show_detail();fetch_detail()" v-for="title in msg_titles" v-bind:key="title.id" v-bind:title="title"></announcement-title>
                        </ul>
                    </div>
                    <div id="msg-detail-board" v-if="display" >
                        <div class="left-space" style="float:left; height:100%; width:57%;">
                            <div class="bar-hr"></div>
                            <div style="display:flex; height:18%;align-items:center; width:90%; word-wrap:break-word;">
                                <div style="color:#F4A22C; padding-left: 5%;width:14%; font-size:1.3em;">主旨</div>
                                <div class="msg-detail-title">{{msg_detail_data.title}}</div>
                            </div>
                        
                            <div class="bar-hr"></div>
                            <div style="display:flex; height:46%; align-items:center; width:90%; word-wrap:break-word;">
                                <div style="color:#F4A22C; padding-left: 5%;width:14%; font-size:1.3em;">內容</div>
                                <div class="msg-detail-content" v-html="msg_detail_data.content"></div>
                            </div>
                            
                        </div>

                        <div class="right-space" style="float:left; height:100%; width:41%;">
                            <div class="bar-hr"></div>
                            <div style="display:flex; height:30%;align-items:center; width:90%; word-wrap:break-word;">
                                <div style="color:#F4A22C; padding-left: 5%;width:16%; font-size:1.3em;">附件</div>
                                <ul id="msg-detail-attachment-container">
                                <msg-detail class="msg-detail-attachment" v-for="(content,index) in msg_detail_data.attachments" :key="index" :content="content">{{content}}
                                </msg-detail>
                                </ul>
                            </div>    
                            <div class="bar-hr"></div>

                            <div style="display:flex; height:5%;align-items:center; width:90%; word-wrap:break-word;">
                                <div style="color:#F4A22C; padding-left: 5%;width:16%; font-size:1.3em;">連結</div>
                                <ul id="msg-detail-link-container">
                                <msg-detail class="msg-detail-link" v-for="(content,index) in msg_detail_data.links" :key="index" :content="content">{{content}}
                                </msg-detail>
                                </ul>
                            </div>    
                            <div class="bar-hr"></div>
                            
                            <div style="display:flex; height:5%;align-items:center; width:90%; word-wrap:break-word;">
                                <div style="color:#F4A22C; padding-left: 5%;width:16%; font-size:1.3em;">聯絡人</div>
                                <ul id="msg-detail-contact-container">
                                <msg-detail class="msg-detail-contact" v-for="(content,index) in msg_detail_data.contacts" :key="index" :content="content">{{content}}
                                </msg-detail>
                                </ul>
                            </div>    
                            <div class="bar-hr"></div>

                            <div style="display:flex; height:5%;align-items:center; width:90%; word-wrap:break-word;">
                                <div style="color:#F4A22C; padding-left: 5%;width:16%; font-size:1.3em;">活動日期</div>
                                
                            </div>    
                            <div class="bar-hr"></div>

                            <div style="display:flex; height:5%;align-items:center; width:90%; word-wrap:break-word;">
                                <div style="color:#F4A22C; padding-left: 5%;width:16%; font-size:1.3em;">公告日期</div>
                                
                            </div>    
                            <div class="bar-hr"></div>
                        </div>
                        <!-- <div class="msg-detail-attachment-container"></div> -->
                        

                        <img id="msg-close-button" @click="close_detail" src="<?php bloginfo('template_url'); ?>/image/close-button.png" alt="close button">
                        


                    </div>
                </div>
                
            </div>
        </div>

        <div class="top" id="top_3">
            <div id="nav3">
                <div id="navid3">法令&表件</div>
                <div class="nav-triangle" id="nav3-triangle">
                </div>
            </div>
            <div class="navbox3">
                <!-- 法令左側 -->
                <div id="decree-left-details-container" style="
                    position: fixed;
                    font-size: 18px;
                    margin-left: 0px;
                    letter-spacing: 0.1em;
                    width:350px;
                    height: 100%;
                    display: block;
                    z-index:101;
                    top:25%;
                ">
            <img id="prev-page" class="mouse-hover" style="width:50%;"
            src="<?php bloginfo('template_url'); ?>/image/prev-page.png" alt="prev-page-img">
                    <div id="decree-left-flexbox">

                        <?php
//這邊處理法令表格的內部細向
                        $decree_cat_id = get_cat_iD("法令表格");
//透過wordpress類別將法令表格下的大項自動生成 '歸類大項'
                        $main_cats = get_categories(array('parent' => $decree_cat_id, 'hide_empty' => false));
                        foreach ($main_cats as $m_idx => $main_cat) {
    //echo $main_cat->cat_name;
    //每一個大項的細像

    // S1 or S2 or .. Sn
                            $main_container_class = "main" . substr(($main_cat->description), 1);
                            echo "<div class='$main_container_class decree-main-container'>";
    //歸類大項下的歸類細項
                            $detail_cats = get_categories(array('parent' => $main_cat->cat_ID, 'hide_empty' => true));

                            foreach ($detail_cats as $index => $detail_cat) {
                                $detail_cat_class = "decree-details detail-cat" . ($index + 1);
        //隸屬於哪些人員
                                for ($i = 0; $i < strlen($detail_cat->description); $i++) {
                                    if ($detail_cat->description[$i] == "O") {
                                        $detail_cat_class .= " personnel" . ($i + 1) . " ";
                                    }
                                }
        // 隸屬於哪個歸類大項 （增加往parent的連結）
                                $detail_cat_class .= (" " . explode(" ", $detail_cat->description)[1]);
        //類項container
                                echo "<div class='details-container $detail_cat_class'>";
        //echo 類項名稱

                                echo "<p>" . $detail_cat->cat_name . '</p>';
        //細項下法規
                                $articles = get_posts(array(
                                    'numberposts' => 50,
                                    'category' => $detail_cat->cat_ID,
                                    'hide_empty' => false,
                                ));
                                echo "<div class='articles-container'>";
                                foreach ($articles as $article) {
            // post[num]是用來實作js -> 點選時右邊內容顯示什麼
                                    $article_class = "detail-cat" . ($index + 1) . " decree-detail-articles mouse-hover" . " post_" . $article->ID;
            //var_dump($article);
                                    if (mb_strlen($article->post_title, "utf-8") > 30) {
                                        $tmp_title = $article->post_title;
                                        $tmp_title = mb_substr($tmp_title, 0, 30, "utf-8") . "...";
                                        echo "<div class='$article_class'>" . $tmp_title . "<span class='tooltiptext'>$article->post_title</span>" . "</div>";
                //asdd
                                    } else {
                                        echo "<div class= '$article_class'>" . $article->post_title . "</div>";
                                    }
            //$myJSON = json_decode($article->post_content);
            //echo "<p>" . $myJSON->name . "</p>";
            //var_dump($myJSON);
                                }
                                echo "</div>"; // close tag for {article-container}

        //var_dump($articles);
                                echo "</div>"; // close tag for {details-container}
                                echo ("<hr class='decree-left-hr $detail_cat_class'>");

                            }
                            echo "</div>"; // close tag for main-container
                        }

                        ?>

                    </div>
                </div>
                <div id="decree-right-details-container" style="
                    position: fixed;
                    font-size: 18px;
                    margin-left: 0px;
                    letter-spacing: 0.1em;
                    width:50vw;
                    height: 100%;
                    display: none;
                    z-index:101;
                    right: 0;
                    top:25%;
                    background-color:black;
                ">
                    <div id="decree-right-flexbox">
                        <?php
                        $right_article_has = []; //use to avoid duplicate article content
                        foreach ($main_cats as $m_idx => $main_cat) {
                            $detail_cats = get_categories(array('parent' => $main_cat->cat_ID, 'hide_empty' => true));
                            foreach ($detail_cats as $index => $detail_cat) {
                                $personnel_cat = []; //歸類人員
                                if ($detail_cat->description[0] == 'O') {
                                    array_push($personnel_cat, "教師", "約聘教師", "研究類教師", "助教", "科技部補助延攬人才", "兼任教師", "教官", "研究人員", "計畫類博士後研究");
                                }
                                if ($detail_cat->description[1] == 'O') {
                                    array_push($personnel_cat, "公務人員");
                                }
                                if ($detail_cat->description[2] == 'O') {
                                    array_push($personnel_cat, "研發替代役", "約用人員", "計畫人員", "全時工讀生", "學生兼任助理", "臨時工");
                                }
                                $articles = get_posts(array(
                                    'numberposts' => 500,
                                    'category' => $detail_cat->cat_ID,
                                    'hide_empty' => false,
                                ));
                                foreach ($articles as $article) {
            //過濾重複
                                    if ($right_article_has[$article->ID] == true) {
                                        continue;
                                    } else {
                                        $right_article_has[$article->ID] = true;
                                    }
                                    $article_content = $article->post_content;
                                    $item_container_class = "decree-right-item-container " . "post_" . $article->ID;
                                    echo "<div class='$item_container_class'>";
                                    echo ("<div class='decree-right-cell-container'>");
                                    echo ("<div class='decree-right-item-title'>法規</div>");
                                    echo ("<div style='color:white;'>" . $article->post_title . "</div>");
                                    echo ("</div>"); //cell
                                    echo ("<hr class='decree-right-hr'>");
                                    echo ("<div class='decree-right-cell-container'>");
                                    echo ("<div class='decree-right-item-title'>相關表件</div>");
                                    $article_slices = explode("\n", $article_content);
                                    $forms_pdf = [];
                                    $forms_doc = [];
                                    $forms_odf = [];
                                    $forms_name = [];
                                    $revisions_name = [];
                                    $revisions_link = [];
                                    $prev_idx = 1;
                                    $has_type = [];
                                    foreach ($article_slices as $slice) { //slicing
                                        trim($slice);
                                        //if it's a form:
                                        if (preg_match('/^form/', $slice)) {
                                            //explode the $slice to title and content
                                            $title_content = explode(" ", $slice);
                                            $title = $title_content[0];
                                            $content = substr($slice, strpos($slice, ":") + 1);
                                            //remove spaces from both side
                                            $title = trim($title, " \t\n\r\0\x0B\xC2\xA0");
                                            $content = trim($content, " \t\n\r\0\x0B\xC2\xA0");
                                            //form1-pdf: -> 1-pdf:
                                            $index_type = trim($title, "form");
                                            //1-pdf: -> ["1","pdf:"]
                                            $index_type = explode("-", $index_type);
                                            $index = (int)$index_type[0];
                                            if ($index != $prev_idx) {
                                                if (!array_key_exists("pdf", $has_type)) {
                                                    array_push($forms_pdf, "-1");
                                                }
                                                if (!array_key_exists("doc", $has_type)) {
                                                    array_push($forms_doc, "-1");
                                                }
                                                if (!array_key_exists("odf", $has_type)) {
                                                    array_push($forms_odf, "-1");
                                                }
                                                $has_type = [];
                                                $prev_idx = $index;
                                            }
                                            //"pdf:" -> "pdf"
                                            $type = trim($index_type[1], " \t\n\r\0\x0B\xC2\xA0:");
                                            $type = trim($type, ":");

                                            if ($type == "pdf") {
                                                array_push($forms_pdf, $content);
                                                $has_type["pdf"] = 1;
                                            } else if ($type == "doc") {
                                                array_push($forms_doc, $content);
                                                $has_type["doc"] = 1;
                                            } else if ($type == "odf" || $type == "odt" || $type == "ods" || $type == "odp") {
                                                array_push($forms_odf, $content);
                                                $has_type["odf"] = 1;
                                            } else if ($type == "name") {
                                                array_push($forms_name, $content);
                                            } else {
                                                //echo $type . "\n";
                                            }
                                        } //{forms}
                                        if (preg_match('/^revision/', $slice)) { // matching revision
                                            $content = substr($slice, strpos($slice, ":") + 1);
                                            if (preg_match('/name/', $slice)) {
                                                array_push($revisions_name, $content);
                                            }

                                            if (preg_match('/link/', $slice)) {
                                                array_push($revisions_link, $content);
                                            }

                                        }

                                    }
                                    if (!array_key_exists("pdf", $has_type)) {
                                        array_push($forms_pdf, "-1");
                                    }
                                    if (!array_key_exists("doc", $has_type)) {
                                        array_push($forms_doc, "-1");
                                    }
                                    if (!array_key_exists("odf", $has_type)) {
                                        array_push($forms_odf, "-1");
                                    }
                                    $html_href = function ($link, $type) {
                                        return ("<a href='$link' target='_blank'>"
                                            . '<img border="0" alt="ICON" class="fileIcon" src="'
                                            . (get_bloginfo('template_url')
                                            . '/image/' . strtoupper($type) . 'icon.png ')
                                            . '">'
                                            . "</a>");
                                    };
                                    //form names
                                    echo ("<div class='decree-form-names-container'>");
                                    for ($i = 0; $i < sizeof($forms_name); $i++) {
                                        // shorten long name
                                        if (mb_strlen($forms_name[$i], "utf-8") > 15) {
                                            $tmp_name = $forms_name[$i];
                                            $forms_name[$i] = mb_substr($forms_name[$i], 0, 15, "utf-8") . "...";
                                            echo ("<div class='decree-form-name'>$forms_name[$i]" . "<span class='tooltiptext'>$tmp_name</span>" . "</div>");
                                        } else {
                                            echo ("<div class='decree-form-name'>$forms_name[$i]</div>");
                                        }
                                    }
                                    echo ("</div>");
                                    echo ("<div class='decree-forms-container'>");
                                    for ($i = 0; $i < max(sizeof($forms_pdf), sizeof($forms_doc), sizeof($forms_odf)); $i++) {
                                        echo ("<div class='decree-form-flex-item'>");

                                        if ($forms_doc[$i] != "-1")
                                            echo $html_href($forms_doc[$i], "doc");
                                        if ($forms_pdf[$i] != "-1")
                                            echo $html_href($forms_pdf[$i], "pdf");
                                        if ($forms_odf[$i] != "-1")
                                            echo $html_href($forms_odf[$i], "odf");
                                        //echo "<br>";
                                        echo ("</div>");
                                    }
                                    echo "</div>";
                                    echo "</div>"; //decree-right-cell-container
                                    echo ("<hr class='decree-right-hr'>");
                                    echo ("<div class='decree-right-cell-container'>");
                                    echo ("<div class='decree-right-item-title'>法規動態</div>");
                                    echo ("<div class='decree-revisions-container'>");
                                    foreach (array_reverse($revisions_name) as $idx => $revision) {
                                        echo ("<a href='$revisions_link[$idx]' class='revisions'>$revision</a>");
                                    }
                                    echo ("</div>");
                                    echo ("</div>"); //decree-right-cell-container
                                    echo ("<hr class='decree-right-hr'>");
                                    echo ("<div class='decree-right-cell-container'>");
                                    echo ("<div class='decree-right-item-title'>適用人員</div>");
                                    echo ("<div class='personnel-category'>");
                                    foreach ($personnel_cat as $key => $value) {
                                        echo $value;
                                        if ($key != sizeof($personnel_cat) - 1) {
                                            echo '、';
                                        }
                                    }
                                    echo ("</div>");
                                    echo ("</div>"); //decree-right-cell-container
                                    echo ("<hr class='decree-right-hr'>");
                                    echo "</div>"; // decree-right-item-container

                                }
                            }
                        }

                        ?>
                    </div>
                </div>



                <div id="decree-left-default" style="
                    position: fixed;
                    top: 35vh;
                    font-size: 20px;
                    margin-left: 50px;
                    letter-spacing: 0.3em;
                    line-height: 120%;
                    width:220px;
                    color: white;
                    display: block;">
                    可依人員分類進入項目類別中查閱其適用法規、表格。
                </div>
            </div>

            <div class="navbox3_2">
                <!-- 法令右側 -->
                <div id="decree-flex-container" style="position: fixed; top:38%; display:block;">
                    <div id="personnels-container">
                        <p  style="
                            color: #F4A22C;
                            position: absolute;
                            font-size: 1.5em;
                            top: 25px;
                            left: 150px;
                        ">人員類別</p>

                        <div id="type">
                            <p class="decree-item mouse-hover personnels" id="personnel1">
                                教育/研究人員
                            </p>
                            <p class="decree-item mouse-hover personnels" id="personnel2">
                                公務人員
                            </p>
                            <p class="decree-item mouse-hover personnels" id="personnel3">
                                適用勞基法人員
                            </p>
                        </div>
                    </div>
                    <div id="decree-category" style="
                        margin-top:50px;
                        display:none;
                    ">
                        <p style="
                        color: #F4A22C;
                        position: absolute;
                        font-size: 1.5em;
                        top: 250px;
                        left: 150px;
                        ">項目類別</p>
                        <p class="decree-item decree-main mouse-hover" id="S1">組織、任用、報到、留職停薪</p>
                        <p class="decree-item decree-main mouse-hover" id="S2">兼職、借調</p>
                        <p class="decree-item decree-main mouse-hover" id="S3">升等、陞遷</p>
                        <p class="decree-item decree-main mouse-hover" id="S4">證明書、其他</p>
                        <p class="decree-item decree-main mouse-hover" id="S5">考核、獎懲、績優人員、解聘</p>
                        <p class="decree-item decree-main mouse-hover" id="S6">差勤、進修、休假研究</p>
                        <p class="decree-item decree-main mouse-hover" id="S7">待遇、敘薪、福利、保險</p>
                        <p class="decree-item decree-main mouse-hover" id="S8">退休、離職、撫卹</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="top" id="top_4">
  <div id="nav4">
    <div id="navid4_1">人事系統</div>
    <div id="navid4_2">作業流程</div>
  </div>
  <div class="navbox4">
    <div id="navboxw4"> 可 查 閱 重 要 訊 息 、 業 <br>務 訊 息 、 活 動 訊 息 、<br>法 規 訊 息 及 友 校 訊 息
    </div>
  </div>
  <div class="navbox4_2">
    <div id="navboxw4_2">

    </div>
  </div>
</div> -->
        <!-- <div class="top" id="top_5">
  <div id="nav5">
    <div id="navid5_1">公務員廉政</div>
    <div id="navid5_2">倫理規範</div>
  </div>
  <div class="navbox5">
    <div id="navboxw5"> 查 閱 公 務 員 廉 政 倫 理<br>規 範 相 關 法 令 規 章
    </div>
  </div>
  <div class="navbox5_2">
    <div id="navboxw5_2">
      <a href="<?php echo site_url(); ?>/rules/" style="color: #FFFFFF;"><div id="navboxw5_2_1">條 文 及 總 說 明<br></div></a>
      <a href="<?php echo site_url(); ?>/questions/" style="color: #FFFFFF;"><div id="navboxw5_2_2">問 答 輯<br></div></a>
      <a href="<?php echo site_url(); ?>/process/" style="color: #FFFFFF;"><div id="navboxw5_2_3">受 贈 財 務、飲 宴 應 酬、請 託 關 說 及 其 他 廉 正 倫 理 事 件 處 理 程 序<br></div></a>
      <a href="<?php echo site_url(); ?>/links/" style="color: #FFFFFF;"><div id="navboxw5_2_4">相 關 連 結<br></div></a>
    </div>
  </div>
</div> -->
        <div class="top" id="top_6">
            <div id="nav6">
                <div id="navid6">出勤卡鐘位置</div>

            </div>
            <div class="navbox6"></div>
            <div class="navbox6_2"></div>
            <div class="navbox6_map">

                <div class="map1" style="background-image: " url(<?php bloginfo('template_url'); ?>/image/clock_map_1.png");">

                </div>
                <button id="close">X</button>

                <div id=c_navi>
                    <ul>
                        <li>
                            <span>Menu1</span>
                            <ul>
                                <li>Menu1_1</li>
                                <li>Menu1_2</li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <!-- 留言板 -->
        <div class="top" id="top_7">
            <div id="nav7">
                <div id="navid7">常見Q&A <br>&nbsp留言版</div>
            </div>

            <!-- 後端function -->
            
            <?php
            function hasNextP($text)
            {
                return (strpos($text, "<p>") !== false);
            }
            function getAllP($text)
            {
                $all = array();
                $start_pos = 0;

                while (hasNextP($text)) {
                    $start = strpos($text, "<p>", $start_pos) + 3;
                    $length = strpos($text, "</p>", $start) - $start;
        //echo $length . " ";
                    $string = substr($text, $start, $length);

                    $all[] = $string;
                    $startpos = $start + $length + 5;
                    $text = substr($text, $startpos);
                }

                return $all;
            }

            ?>
<?php
$QA_type = array("abroad", "part-time", "other-questions", "AMS", "personnel", "errand", "specialist", "teachers", "postdoctoral", "resignation");
$QA_cat_id = array("出國申請", "全時工讀生", "其他問題", "研發替代役", "約用人員", "差勤", "專兼任計畫人員", "專兼任教師", "博士後研究員", "離職問題");
foreach ($QA_type as $idx => $type) {
    echo "<div class='msg-board-container $type'>";
    $posts = get_posts(array("category" => get_cat_ID($QA_cat_id[$idx])));
    foreach ($posts as $qidx => $post) {
        echo "<div class='msg-board-QA-container'>";
        $question = "<div class='msg-board-question $type mouse-hover question$qidx' style='display:none'>" . $post->post_title . '</div>';
        $answer = "<div class='msg-board-answer $type mouse-hover answer$qidx _hide' style='display:none'>" . $post->post_content . '</div>';
        echo ($question);
        echo ($answer);
        echo "</div>";

    }

    echo '</div>';
}
?>
   <div class="navbox7">
                <!-- <hr style=" border: 1px solid #EA9C32; position: fixed; top: 30%; left: 5%; width: 10%;"> -->

                <hr-custom style="border-top: 1px solid #f4a22c;
        left: 5%;
        top:33%;
        width:10%;
        position: fixed;
    " />
                <div id="navboxw7_1" class="navbox7-left">出國申請</div>
                <div id="navboxw7_2" class="navbox7-left">全時工讀生</div>
                <div id="navboxw7_3" class="navbox7-left">其他問題</div>
                <div id="navboxw7_4" class="navbox7-left">研發替代役</div>
                <div id="navboxw7_5" class="navbox7-left">約用人員</div>
                <div id="navboxw7_6" class="navbox7-left">差勤</div>
                <div id="navboxw7_7" class="navbox7-left">專兼任計畫人員</div>
                <div id="navboxw7_8" class="navbox7-left">專兼任教師</div>
                <div id="navboxw7_9" class="navbox7-left">博士後研究員</div>
                <div id="navboxw7_10" class="navbox7-left">離職問題</div>
                <div id="navboxw7_11" class="navbox7-left" style="display:inline-block">
                    <hr-custom style=" border: 1px solid #EA9C32; position: fixed; top: 86%; left: 0%; width: 8%;display:inline-block"></hr-custom>
                    留言
                </div>
                <!-- <hr style=" border: 1px solid #EA9C32; position: fixed; top: 30%; left: 35%; width: 45%;" > -->
                <div id="navboxrw7_1">可以左方分類查閱常見問題之相關解答，如需留言請點選左下方留言鈕。</div>
            </div>
        </div>

        <div class="hp-img_wrapper">


            <div class="navbox2"></div>
            <div class="navbox2_2"></div>

            <img id="close-button" src="<?php bloginfo('template_url'); ?>/image/close-button.png" alt="close button">
            <div class="bgd" style="background-image: url(<?php bloginfo('template_url'); ?>/image/picture.jpg);">

                <!-- 左欄抓文章 -->
                <?php
                function debug_to_console($data)
                {
                    $output = $data;
                    if (is_array($output)) {
                        $output = implode(',', $output);
                    }

                    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
                }
                function leftSideBarMsgs()
                {
                    $categorys = array("重要訊息", "業務訊息", "法規訊息", "友校訊息");
                    $cat_class = array("important-msgs", "business-msgs", "legislation-msgs", "friendSchools-msgs");
                    foreach ($categorys as $index => &$catname) {
                        $cat_id = get_cat_ID($catname);
                        $posts = get_posts(array('category' => $cat_id, 'numberposts' => 5));
                        foreach ($posts as $postIndex => $post) {
                            $title = get_post($post->ID)->post_title;
                            //$content = get_post($post->ID)->post_content;
                            //$content = apply_filters('the_content', $content);
                            //$content = str_replace(']]>', ']]&gt;', $content);
                            //$all = getAllP($content);
                            //foreach ($all as $idx => &$text) {
                            //     $print = '<div class="' . $cat_class[$index] . ' left-side-bar-msgs">' . $text . '</div>';
                            //     $date = get_the_date('Y-m-d', $post->ID);
                            //     echo ('<div class="' . $cat_class[$index] . ' left-side-bar-msgs date">' . $date . '</div>');
                            //     echo ($print);
                            //     if ($idx != (sizeof($all) - 1)) {
                            //         echo ('<div class="' . $cat_class[$index] . ' white-hr ' . ' left-side-bar-msgs" ></div>');
                            //     }
                            // }

                            $date = get_the_date('Y-m-d', $post->ID);
                            echo ('<div class="' . $cat_class[$index] . ' left-side-bar-msgs date">' . $date . '</div>');
                            $print = '<div @click="msgClick" class="' . $cat_class[$index] . ' left-side-bar-msgs mouse-hover">' . $title . '</div>';
                            echo ($print);

                            if ($postIndex != (sizeof($posts) - 1)) {
                                echo ('<div class="' . $cat_class[$index] . ' white-hr ' . ' left-side-bar-msgs" ></div>');
                            }


                        }
                    }
                }

                ?>

                <!-- 左欄box -->
                <div class="left-side-bar-bg">

                    <div class="left-side-bar-container">
                        <div class=" left-side-bar-element " id="important-msgs">
                            重要訊息
                        </div>
                        <div class="left-side-bar-element" id="business-msgs">
                            業務訊息
                        </div>
                        <div class="left-side-bar-element" id="legislation-msgs">
                            法規訊息
                        </div>
                        <div class="left-side-bar-element" id="friendSchools-msgs">
                            友校訊息
                        </div>
                        <div id="line" class="" style="border-style: solid;border-width:0.2px;height: 1px;width: 45%;color: #f4a22c;">


                        </div>
                        <div id="calendar-msgs" class="left-side-bar-element ">
                            動態行事曆
                        </div>
                        <div id="insurance-msgs" class="left-side-bar-element ">
                            加保人數
                        </div>

                    </div>
                </div>
                <div class="right-bg">
                    <div id="left-msgs" style="position: relative;overflow-y:auto;overflow-x:hidden;height:100%;top: 0px;left:100px;">
                        <?php leftSideBarMsgs(); ?>
                        <div class="insurance-msgs">
                        <?php
                        $cat_id = get_cat_ID("加保人數");
                        $posts = get_posts(array('category' => $cat_id, 'numberposts' => 5));
                        foreach ($posts as $post) {
                            $print = '<div class="left-side-bar-msgs" style="display:block;">' . $post->post_content . '</div>';
                            echo ($print);
                        }
                        ?>
                        </div>
                    </div>
                    
                    <iframe id="msg-calender" src="https://calendar.google.com/calendar/embed?src=personnel.nctu%40gmail.com&ctz=Asia%2FTaipei" style="border: 0; height:100%; width:55vw;
                    top:0vh; position :absolute; left:15vw; display:none;" frameborder="0" scrolling="no">
                    </iframe>

                </div>
            </div>


            <!-- <div class="one"><div class="one_word"> 105年度人事業務績效考核<br>第一組-第二名</div></div>
  <div class="two"><div class="two_word"> 105年度人事業務績效考核<br>第一組-第二名</div></div>
  <div class="three"><div class="three_word"> 本校106年八月份公勞保人數4,876人<br>(職員244人、教師1,267人、駐衛警15人、聘僱人員及其他人員3,237人、技工友...<br></div></div> -->
            <!-- 左欄文字 -->
            <!-- <div id="left_words">
    <div id ="left" style="position: absolute; top: 5%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 動態</div>
    <div id ="left" style="position: absolute; top: 15%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 行事曆</div>
    <div id ="left" style="position: absolute; top: 40%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 工作</div>
    <div id ="left" style="position: absolute; top: 50%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 成果</div>
    <div id ="left" style="position: absolute; top: 70%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 加保</div>
    <div id ="left" style="position: absolute; top: 80%; left: 3%; font-size: 2.0em; z-index: 8; font-weight: 500; color:  #040000;"> 人數</div>
    <div id ="left7" style="position: absolute; top: 80%; left: 9%; font-size: 1.7em; z-index: 8; font-weight: 500; color:  #040000; display: block;"> 4,876人</div>
  </div> -->



            <!-- <div id = "right1" style="position: absolute; top: 0%;width:20%;height:20%; right:0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B;  border-bottom: 2px solid #1E4E5D;">
   <div id ="w1" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">一 般 訊 息</div>
  </div>
  <div id ="rbox1"> text_right1 </div>
  <div id = "right2" style="position: absolute; top: 20%;height:20%;width:20%; right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B; border-top: 2px solid #1E4E5D;  border-bottom: 2px solid #1E4E5D;">
   <div id ="w2" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">活 動 訊 息</div>
  </div>
  <div id ="rbox2"> text_right2 </div>
  <div id = "right3" style="position: absolute; top: 40%;height:20% ;width:20%;right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B;  border-top: 2px solid #1E4E5D;  border-bottom: 2px solid #1E4E5D;">
   <div id ="w3" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">法 規 訊 息</div>
  </div>
  <div id ="rbox3"> text_right3 </div>
  <div id = "right4" style="position: absolute; top: 60%;height:20% ;width:20%;right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B; border-top: 2px solid #1E4E5D;  border-bottom: 2px solid #1E4E5D;">
    <div id ="w4" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">友 校 訊 息</div>
  </div>
  <div id ="rbox4"> text_right4 </div>
  <div id = "right5" style="position: absolute; top: 80%;height:20%; width:20%;right: 0; font-size: 1.8em; z-index: 8; font-weight: 500; color:#FFFFFF; background-color: #385D6B;  border-top: 2px solid #1E4E5D;">
    <div id ="w5" style="position: absolute; font-size: 1.0em; font-weight: 400; color: #FFFFFF; z-index: 8; left: 33%; top: 20%;">業 務 訊 息</div>
  </div>
    <div id ="rbox5"> text_right5 </div>
  </div> -->


            <div class="pic1">
                <div class="picline1"></div>
                <div class="img1">
                    <img class="buttom-icon" src="<?php bloginfo('template_url'); ?>/image/01.png" class="01" alt="01">
                    <div class="text1">
                        <p>適用勞基法</p>
                        <p>專區</p>
                    </div>
                    <div class="text1-2">    
                        適用勞基法人員（人事代號D/E/F/G/H/Z/Y/V/O/B/Q第三階段/校內外學生及校外人士之本校勞動型兼任助王或臨時工）
                    </div>
                </div>
            </div>


            <div class="pic2">
                <div class="picline2"></div>
                <div class="img2">
                    <img class="buttom-icon" src="<?php bloginfo('template_url'); ?>/image/02.png" alt="02">
                    <div class="text2">
                        <p>外籍教職員</p>
                        <p>專區</p>
                    </div>
                    <div class="text2-2">
                        適用對象：本校外籍人士
                    </div>
                </div>
            </div>

            <div class="pic3">
                <div class="picline3"></div>
                <div class="img3">
                    <img class="buttom-icon" src="<?php bloginfo('template_url'); ?>/image/03.png" alt="03">
                    <div class="text3">
                        <p>兼任教師</p>
                        <p>專區</p>
                    </div>
                    <div class="text3-2">
                        適用對象：本校兼任教師（人事代號PTxxx）
                    </div>
                </div>
            </div>

            <div class="pic4">
                <div class="picline4"></div>
                <div class="img4 ">
                    <img class="buttom-icon" src="<?php bloginfo('template_url'); ?>/image/04.png" alt="04">
                    <div class="text4">
                        <p>學習與勞動</p>
                        <p>權益專區</p>
                    </div>
                    <div class="text4-2">
                        適用對象：校內外學生
                    </div>
                </div>
            </div>

            <div class="pic5">
                <div class="picline5"></div>
                <div class="img5">
                    <img class="buttom-icon" src="<?php bloginfo('template_url'); ?>/image/05.png" alt="05">
                    <div class="text5">
                        <p>教師升等</p>
                        <p>專區</p>
                    </div>
                    <div class="text5-2">
                        適用對象：本校教師（人事代號T/TR/XT/XC）
                    </div>

                </div>

            </div>

            <div class="pic6">
                <div class="picline6"></div>
                <div class="img6">
                    <img class="buttom-icon" src="<?php bloginfo('template_url'); ?>/image/06.png" alt="06">
                    <div class="text6">
                        <p>退休</p>
                        <p>專區</p>
                    </div>
                    <div class="text6-2">
                        適用對象：已退休或待退休之公務員（人事代號T/TR/TS/S/L/P）
                    </div>
                </div>
            </div>

            <div class="pic7">
                <div class="picline7"></div>
                <div class="img7">
                    <img class="buttom-icon" src="<?php bloginfo('template_url'); ?>/image/07.png" alt="07">

                    <div class="text7">
                        <p>福利專區 </p>
                        <p>含自強康樂委員會</p>
                    </div>
                    <div class="text7-2">
                        適用對象：本校教職員工（自強康樂委員會適用對象：T/TR/TS/XT/XC/XB/X/S/L<br>/M/P/D/E/F/G/B/J）
                    </div>
                </div>
            </div>


            <!-- </div> -->
            <!-- 下方7個圖示 -->



        </div>




    </div>



<div id="foot">
  <div id="foot-img"><img src="<?php bloginfo('template_url'); ?>/image/footer.png" alt="01" style=" position: relative; min-height:20% ; top: 0%; left: 0%; height: 4em;width: 100vw;filter: drop-shadow(0px 0px 0px rgba(0, 0, 0, 1));z-index: 25;"></div>

        <div id="foot_left">
            <div id="foot-area1">
                <div class="foot_title">
                    </p>
                    </p>本室簡介</p>
                    </p>
                </div>
                <div class="foot_link">
                    </p>
                    </p>本室簡介|本室位置|人事職掌|</p>
                    </p>
                </div>
                <div class="foot_link">
                    </p>
                    </p>本室願景|工作成果</p>
                    </p>
                </div>


                <div class="foot_title">
                    </p>
                    </p>訊息公告</p>
                    </p>
                </div>
                <div class="foot_link">
                    </p>
                    </p>重要訊息|業務訊息|法規訊息|</p>
                    </p>
                </div>
                <div class="foot_link">
                    </p>
                    </p>友校訊息</p>
                    </p>
                </div>

                <div class="foot_title">
                    </p>
                    </p>法令&表格</p>
                    </p>
                </div>
                <div class="foot_link">
                    </p>
                    </p>教育/研究人員|公務人員</p>
                    </p>
                </div>
                <div class="foot_link">
                    </p>
                    </p>適用勞基法人員</p>
                    </p>
                </div>


            </div>

            <div id="foot-area2">
                <div class="foot_title">
                    </p>
                    </p>人事業務標準作業流程(SOP)</p>
                    </p>
                </div>
                <div class="foot_link">
                    </p>
                    </p>第一組業務|第二組業務</p>
                    </p>
                </div>

                <div class="foot_title">
                    </p>
                    </p>公務員廉政倫理規範</p>
                    </p>
                </div>

                <div class="foot_title">
                    </p>
                    </p>出勤卡鐘位置</p>
                    </p>
                </div>

                <div class="foot_title">
                    </p>
                    </p>留言板&FAQ問答</p>
                    </p>
                </div>

    </div>
  </div>


        <div id="foot_right">
            <div id="foot-area3">
                <div class="foot_title">
                    <p>
                        <p>外籍教職員專區</p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>訊息│法規&表格</p>
                    </p>
                </div>


                <div class="foot_title">
                    <p>
                        <p>兼任教師專區</p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>訊息│法規&表格</p>
                    </p>
                </div>

                <div class="foot_title">
                    <p>
                        <p>教師升等專區</p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>訊息│法規&表格</p>
                    </p>
                </div>
            </div>

            <div id="foot-area4">

                <div class="foot_title">
                    <p>
                        <p>學習與勞動權益專區</p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>訊息│法規&表格|會議紀錄</p>
                    </p>
                </div>



                <div class="foot_title">
                    <p>
                        <p>退休專區</p>
                    </p>
                </div>

                <div class="foot_link">
                    <p>
                        <p>教育人員:訊息│法規&表格</p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>公務人員訊息│法規&表格</p>
                    </p>
                </div>


                <div class="foot_title">
                    <p>
                        <p>福利專區<b>（含自強康樂委員會）</b></p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>各類人員福利│訊息|法規&表格</p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>社團資訊│會議紀錄|特約廠商</p>
                    </p>
                </div>



                <div class="foot_title">
                    <p>
                        <p>員工協助專區</b></p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>訊息|法規&表格|網站連結</p>
                    </p>
                </div>
            </div>

            <div id="foot-area5">
                <div class="foot_title">
                    <p>
                        <p>適用勞基法專區</b></p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>訊息|法規&表格</p>
                    </p>
                </div>

                <div class="foot_title">
                    <p>
                        <p>個人資料保護專區</b></p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>訊息|法規&表格|網站連結</p>
                    </p>
                </div>


                <div class="foot_title">
                    <p>
                        <p>托育專區</b></p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>托育簡介|訊息|法規&表格</p>
                    </p>
                </div>
                <div class="foot_link">
                    <p>
                        <p>哺乳室介紹</p>
                    </p>
                </div>


      <div class="foot_title"> <p><p>線上教學專區</b></p></p></div>
      <div class="foot_link"> <p><p>教學訓練影片|影片課程相關文件</p></p></div>
    </div>
  </div>

  <div id="foot_bottom">
         <img src="<?php bloginfo('template_url'); ?>/image/logo_guide.png" width=200px height=100% float:left alt="03">
         <div id="foot_bottom_description">
            30010 新竹市大學路1001號<br>
            最佳瀏覽環境│IE 8 以上版本│建議解析度│1024 x 768<br>
            國立交通大學人事室版權所有，請尊重智慧財產權勿任意轉載
        </div>
        

  </div>





    <!-- <div class="footer">
  <img src="<?php bloginfo('template_url'); ?>/image/footer.png" alt="footer" width="100%" style="position: fixed; bottom: 0; left: 0;">
</div> -->

</body>

</html>
<?php
/*
 * Template Name: homepage_db
 */
//訊息公告
if (isset($_REQUEST['type'])) {
    /* 訊息公告nav內request 
     ** 回傳所屬頁面跟數量及category的post
     ** param: 'data_per_page', 'category', 'page'
     */
    if ($_REQUEST['type'] == "msg-title") {
        $datas = array();
        $cat_id = get_cat_ID($_REQUEST['category']);
        $data_per_page = $_REQUEST['data_per_page'];
        $page = $_REQUEST['page'];
        $posts = get_posts(array('category' => $cat_id, 'numberposts' => $_REQUEST['data_per_page'], 'offset' => (($page - 1) * $data_per_page)));

        for ($i = 0; $i < sizeof($posts); $i++) {
            $title = $posts[$i]->post_title;
            //$arr = explode("\n", $posts[$i]->post_content);
            $time_title = array();
            $date = get_the_date('Y-m-d', $posts[$i]->ID);
            $time_title["date"] = $date;
            $time_title["title"] = $title;
            array_push($datas, $time_title);
        }
        echo json_encode($datas, JSON_UNESCAPED_UNICODE);
    }

    /*
     **  訊息公告內文
     */
    if ($_REQUEST['type'] == "fetch_detail") {
        $post = get_page_by_title($_REQUEST["title"], OBJECT, 'post');
        $content = $post->content;
        $data = array('title' => $post->post_title, 'content' => $content);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}

?>

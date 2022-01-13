<?php
    try {
        $results = $db->query("SELECT * FROM news_cards");
    } catch(Exception $e) {
        echo $e->getMessage();
        die();
    } 
    $news = $results->fetchAll(PDO::FETCH_ASSOC);

    foreach($news as $card) {
        echo'<div class="news-card '. $card["card_type"] .'">
                <div class="news-card-main">
                    <div class="img-wrap">
                        <div class="card-img-top">
                            <a href='. $card["category_link"] .'>'. $card["category"] .'</a>
                            <img src="'. $card["top_img"] .'" alt="'. $card["top_img_alt"] .'">
                        </div>
                    </div>
                    <div class="news-body">
                        <a class="'. $card["title_class"] .'">'. $card["title"] .'</a>
                        <p class="news-text">'. $card["text"] .'</p>
                        <a href='. $card["read_more_link"] .'>Read More</a>
                    </div>
                </div>
                <div class="card-footer">
                    <img src="'. $card["bottom_img"] .'" class="rounded-circle float-start" alt="'. $card["bottom_img_alt"] .'">
                    <div class="user-date">
                        <p class="posted-by">'. $card["posted_by"] .'</p>
                        <small class="text-muted">'. date("jS F Y", strtotime($card["date_posted"])) .'</small>
                    </div>
                </div>
            </div>';
        }
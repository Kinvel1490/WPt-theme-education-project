<?php get_header( );?>

    <div class="about" id="about" style="background: url(<?= CFS()->get('background_white') ?>) center 100% repeat-x,
                url(<?= CFS()->get('background_black') ?>) center 100% repeat-x,
                #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                <?php $cards = CFS()->get('about');
                foreach($cards as $card) { ?>
                    <div class="about__item">
                        <div class="about__year"><?= $card['year']?></div>
                        <div class="about__text"><?= $card['cardTtxt']?></div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= CFS()->get('team_title')?></h2>
                <p class="block__text"><?= CFS()->get('team_descr')?></p>
            </div>
            <div class="team__inner">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <?php $cards = CFS()->get('team_members');
                            foreach($cards as $card) { ?>
                                <div class="swiper-slide">
                                    <div class="team__item">
                                        <img class="team__item-img" src=<?= $card['team_img']?> alt="">
                                        <h3 class="team__item-title"><?= $card['team_name']?></h3>
                                        <p class="team__item-text"><?= $card['team_post']?></p>
                                        <div class="team__icon-box">
                                            <?php if(!empty($card['team_twiter']['url'])) { ?>
                                                <a href="<?= $card['team_twiter']['url']?>" target="<?= $card['team_twiter']['target']?>"><i class="icon-twitter"></i></a>
                                            <?php } ?>
                                            <?php if(!empty($card['team_vk']['url'])) { ?>
                                                <a href="<?= $card['team_vk']['url']?>" target="<?= $card['team_vk']['target']?>"> <i class="icon-vkontakte"></i></a>
                                            <?php } ?>
                                            <?php if(!empty($card['team_inst']['url'])) { ?>
                                            <a href="<?= $card['team_inst']['url']?>" target="<?= $card['team_inst']['target']?>"> <i class="icon-instagram"></i></a>
                                            <?php } ?>
                                            <?php if(!empty($card['team_fb']['url'])) { ?>
                                            <a href="<?= $card['team_fb']['url']?>" target="<?= $card['team_fb']['target']?>"> <i class="icon-facebook"></i></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title"><?= CFS()->get('serv_title') ?></h2>
                <p class="block__text"><?= CFS()->get('serv_txt') ?></p>
            </div>
            <div class="provide__inner">
                <?php 
                $servCards = CFS()->get('serv_card');
                foreach ($servCards as $servCard) {?>
                    <div class="provide__item">
                        <img src=<?= $servCard['serv_card_img'] ?>>
                        <!-- <i class="icon-chart-line"></i> -->
                        <h3 class="provide__item-title"><?= $servCard['serv_card_h'] ?></h3>
                        <p class="provide__item-text"><?= $servCard['serv_card_txt'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div> 
    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= CFS()->get('footer_title')?></h2>
                <p class="block__text"><?= CFS()->get('footer_txt')?></p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="<?= CFS()->get('phone_number')?>"><?= CFS()->get('phone_number')?></a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-location"></i> 
                        <div class="contact__text"><a href="<?= CFS()->get('footer_geo')['url']?>" target="<?= CFS()->get('footer_geo')['target']?>"><?= CFS()->get('footer_geo')['text']?></a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="mailto:somemail@hotmail.com"><?= CFS()->get('footer_mail')?></a></div>
                    </div>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php get_footer();?>
<?php require('site/sections/data.php'); ?>
<section id="portfolio" class="page-portfolio">
    <div class="container">
        <div class="row">
            <header class="section-header">
                <h2 class="section-title"><span>Portfolio</span></h2>

                <div class="spacer"></div>
            </header>

            <div id="grid-controls-wrapper">
                <ul class="nav nav-pills center-pills grid-controls">
                    <li class="active filter"><a href="javascript:void(0)" data-filter="*">All</a>
                    </li>
                    <li class="filter"><a href="javascript:void(0)" data-filter=".projects">Projects</a>
                    </li>
                    <li class="filter"><a href="javascript:void(0)" data-filter=".work">Work</a>
                    </li>
                    <li class="filter"><a href="javascript:void(0)" data-filter=".code">Code Samples</a>
                    </li>
                </ul>
            </div>

            <div>
                <ul id="grid" class="grid-wrapper">

                    <?php
                    foreach ($items as $index => $item) {
                        $image_small = "img/portfolio/". $item['img_small'];
                        $image = "img/portfolio/". $item['img'];
                        ?>
                        <li class="mix <?= $item['type']; ?>">
                            <a href="#portfolio-<?= $index; ?>" class="open-popup-link">
                                <div class="overlay"><i class="fa fa-search"></i>
                                </div>
                                <img src="<?= $image_small; ?>" alt="<?= $item['title']; ?>">
                            </a>

                            <div id="portfolio-<?= $index; ?>" class="portfolio-overlay white-popup mfp-hide no-padding" style="min-width: 80%; min-height: 80%;">
                                    <div  id="portfolio-info">
                                        <h2><?= $item['title']; ?></h2>
                                        <h3><?= $item['short_description']; ?></h3>
                                        <div>
                                            <?= $item['description']; ?>
                                        </div>
                                        <ul id="portfolio-links">
                                            <li><a href="<?= $item['urls']['web']; ?>" target="_blank">Visit Website <i class="fa fa-link "></i></a></li>
                                            <?php if(isset($item['urls']['github'])){?>
                                            <li><a href="<?= $item['urls']['github']; ?>" target="_blank">Visit GitHub <i class="fa fa-github-alt "></i></a></li>
                                            <?php }?>
                                            <?php if(isset($item['urls']['blog'])){?>
                                            <li><a href="<?= $item['urls']['blog']; ?>" target="_blank">Blog Post</a></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                <div id="portfolio-img">
                                    <a href="<?= $item['urls']['web']; ?>" target="_blank"><img src="<?= $image; ?>" title="<?= $item['title']; ?>"></a>
                                </div>

                            </div>
                        </li>



                    <?php } ?>

                </ul>
            </div>
        </div>
        <div class="row">
            <style>
                .white-popup {
                    position: relative;
                    background: #FFF;
                    padding: 20px;
                    width: auto;
                    max-width: 500px;
                    margin: 20px auto;
                }
                .no-padding{
                    padding: 0;
                }

                .portfolio-overlay{
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                }

                #portfolio-img {
                    overflow: hidden;
                    background-color: #191e23;
                    width: 60%;
                    /*border-left: 1px #323232 solid;*/
                }
                #portfolio-info {
                    padding: 10px;
                    width: 40%;
                }

                #portfolio-info h2, h3 {
                    padding: 0;
                    margin-top: 10px;
                    margin-bottom: 10px;
                }

                @media (max-width: 900px) {
                    .portfolio-overlay{
                        display: block;
                    }
                    #portfolio-img {
                        width: 100%;
                    }
                    #portfolio-info {
                        width: 100%;
                    }
                }

                #portfolio-links{
                    list-style: none;
                    padding: 0;
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                }
                #portfolio-links li{
                    display: inline-block;
                    font-size: 14px;
                    margin: 10px;
                    background-color: #9a0000;
                    color: white;
                    padding: 15px;
                }
                #portfolio-links li a {
                    color: white;

                }
            </style>
        </div>
    </div>
</section>
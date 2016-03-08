<div id="tbd" class="collection">

    <h4 class="collection-header"><span class="collection-toggle" id="first">FIRST CAMPAIGN</span> / <span id="second" class="collection-toggle">SECOND CAMPAIGN</span></h2>

    <ul id="first-campaign" class="campaign">
        <?php

            for($i = 1 ; $i < 22 ; $i++){

                echo '<li class="gallery-image">
                        <a href="/resources/images/tbd/'.$i.'_large.jpg" data-lightbox="tbd">
                            <img src="">
                        </a>
                    </li>';

            }

        ?>


    </ul>

    <ul id="second-campaign" class="campaign">
        <?php

            for($i = 1 ; $i < 18 ; $i++){

                echo '<li class="gallery-image">
                        <a href="/resources/images/tbd2/'.$i.'.jpg" data-lightbox="tb2d">
                            <img src="">
                        </a>
                    </li>';

            }

        ?>


    </ul>


</div>


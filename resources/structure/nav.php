<audio id="audio" loop >
    <source src="/resources/desert.mp3" type="audio/mpeg">
    <source src="/resources/desert.ogg" type="audio/ogg">
</audio>

<?php
    
    echo $page == 'Home' ? '<div id="nav" class="home-nav">' : '<div id="nav">';

?>

    <a href="/"><h1>VENERO</h1></a>

    <span class="icon-menu" aria-hidden="true" id="menu-button"></span>

    <ul id="nav-ul">
        <li><a href="/" data-ajax="/home/content" class="nav_li hoverRed" data-return="#000">HOME</a></li>
        <li><a href="http://store.venero.co" target="_blank" class="hoverRed" data-return="#000">STORE</a></li>
        <br />
        <li class="sub_list_item">COLLECTIONS</li>
            <ul class="sub_list">
                <li><a href="/collections/som" data-ajax="/collections/som" data-title="Collections &mdash; SOM" class="nav_li hoverRed" data-return="#000">&mdash; S/S14 : State of Mankind</a></li>
                <li><a href="/collections/tbd" data-ajax="/collections/tbd" data-title="Collections &mdash; TBD" class="nav_li hoverRed" data-return="#000">&mdash; S/S15 : [TBD]</a></li>
            </ul>
        <br />    
        <li><a href="/about" data-ajax="/about/content" class="nav_li hoverRed" data-return="#000">ABOUT</a></li>
        <li><a href="/mission" data-ajax="/mission/content" class="nav_li hoverRed" data-return="#000">MISSION STATEMENT</a></li>
        <li><a href="/press" data-ajax="/press/content" class="nav_li hoverRed" data-return="#000">PRESS RELEASES</a></li> 
        <li><a href="/terms" data-ajax="/terms/content" class="nav_li hoverRed" data-return="#000">TERMS/CARE</a></li>
        <li><a href="/contact" data-ajax="/contact/content" class="nav_li hoverRed" data-return="#000">CONTACT</a></li> 
        <li class="sub_list_item"><a class="hoverRed" data-return="#000">FOLLOW US</a></li><ul class="sub_list">
                <li>
                    <a href="https://instagram.com/veneronyc" target="_blank">&mdash; INSTAGRAM</a>
                </li>
                <li>
                    <a href="http://veneronyc.tumblr.com" target="_blank">&mdash; TUMBLR</a>
                </li>
                <li>
                    <a href="https://twitter.com/veneronyc" target="_blank">&mdash; TWITTER</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/veneroclothing" target="_blank">&mdash; FACEBOOK</a>
                </li>
            </ul>  
    </ul>

    <br />

    <div id="player">
      <p>White Desert <br />by Niall Byrne</p>
      <span class="icon-play hoverRed" data-return="#000" onClick="document.getElementById('audio').play()"></span>
      <span class="icon-pause hoverRed" data-return="#000" onClick="document.getElementById('audio').pause()"></span>
    </div> 

</div>

<div id="content">
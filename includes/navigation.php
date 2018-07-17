<?php 
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    if ($current_file_name == $requestUri)
        echo 'class="active"';    
}
?>

<div class="container">
            <div class='navbar-header'>
                <!--to make collapse button, for small screens-->
                <button type="button" class="navbar-toggle" data-toggle='collapse' data-target='.navbar-collapse'>
                    <!--Screen readers will have trouble with your forms if you don't include a label for every input. -->
                    <span class="sr-only">Toggle navigation</span>
                    <!--vertical lines for button-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>            
                </button>
                <a class="navbar-brand" href='index.php'><img src="img/logo.svg" alt="puzzle"></a>
            </div>
            <!--now we're referencing to collapse button, and will include contend that will be next-->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li <?=echoActiveClassIfRequestMatches("index")?>><a href='index.php'>Home</a></li>         
                    <li ><a href='#'>Machine Learning</a></li>
                    <!--class'caret'-small triange-->
                    <li <?=echoActiveClassIfRequestMatches("art_styles")?> class="dropdown"><a href='#' class="dropdown-toggle" data-toggle='dropdown'>Tutorials<b class='caret'></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Python</li>
                            <li <?=echoActiveClassIfRequestMatches("art_styles")?>><a href='art_styles.php'>art styles</a></li>
                            <li><a href='#'>creating music</a></li>
                            <li><a href='#'>image classifier</a></li>
                            <li class="dropdown-header">Java</li>
                            <li><a href='#'>text analytics</a></li>                            
                        </ul>
                    </li>
                    <li <?=echoActiveClassIfRequestMatches("contact")?>><a href='contact.php'>Contact</a></li>
                </ul>
                
            </div>
        </div>
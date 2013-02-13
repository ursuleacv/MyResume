<?php
function copyright ($year) { return $year < date('Y') ? $year . '-' . date('Y') : $year; }
$domain = 'http://resume.ws.cc';
$expiration = 3600 * 24 * 60; // 60 days
date_default_timezone_set('America/New_York');
header(sprintf('Cache-Control: public, max-age=%d, s-maxage=%d, must-revalidate, proxy-revalidate', $expiration, $expiration));
header(sprintf('Expires: %s', date('r', time() + $expiration)));
header(sprintf('Last-Modified: %s', date('r', getlastmod())));
header('Content-Type: text/html;charset=UTF-8');
header('Pragma: public');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Valentin Ursuleac — PHP developer resume</title>
    <meta name="author" content="Valentin Ursuleac"/>
    <meta name="description" content="Valentin Ursuleac's updated resume: PHP developer, full stack, Web server player, Zend PHP Certified Engineer wannabe"/>
    <meta name="keywords" content="php development web developer system engineer html css javascript resume w3c msc master sciences oop java c new york usa"/>
    <meta name="robots" content="all"/>
    <meta name="viewport" content="width=device-width"/>
    <!--
    <meta property="og:title" content="Valentin Ursuleac - PHP developer resume"/>
    <meta property="og:url" content="<?php echo $domain; ?>"/>
    <meta property="og:image" content="<?php echo $domain; ?>/img/icon.png"/>
    <meta property="og:site_name" content="Valentin Ursuleac - PHP developer resume"/>
    <meta property="og:description" content="Valentin Ursuleac's updated resume: PHP engineer, Web server player, Zend PHP Certified Engineer wannabe/>
    -->
    <link rel="alternate" type="application/rdf+xml" href="<?php echo $domain; ?>/index.rdf"/>
    <link rel="image_src" type="image/png" href="<?php echo $domain; ?>/img/icon.png"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $domain; ?>/img/favicon.ico"/>
    <link rel="icon" type="image/png" href="<?php echo $domain; ?>/img/favicon.png"/>
    <link rel="stylesheet" href="<?php echo $domain; ?>/ui/styles/styles-min.css?v2" type="text/css"  media="all"/>
    <link rel="canonical" href="<?php echo $domain; ?>"/>
    <base href="<?php echo $domain; ?>"/>
    <!--[if lt IE 8]>
        <link rel="stylesheet" href="<?php echo $domain; ?>/ui/styles/styles-poor-min.css?v2" type="text/css"  media="all"/>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <section id="start">
        <div class="container ribbon mhide"></div>
        <header role="banner" class="container">
            <h1 title="Awesome PHP engineer"><a href="<?php echo $domain; ?>" rel="me">Valentin Ursuleac</a> <sup><span class="label important"><a href="#experience">Hire me!</a></span></sup></h1>
            <h2 title="This is what I'm doing right now...">I am a Computer Science Engineering MSc majoring student,<br>and a passionate <abbr title="PHP: Hypertext PreProcessor">PHP</abbr> engineer but also an opportunist <a href="http://photography.eexit.net" title="Check out my photography portfolio!">photographer</a>.</h2>
            <p class="btnlnks"><a href="http://joris.berthelot.tel" title="Cheers me!" class="btn danger">Contact me</a>&nbsp;&nbsp;or&nbsp;&nbsp;<a href="<?php echo $domain; ?>/get/Joris_Berthelot_phpeng_resume_12413.pdf" class="btn" title="Get the latest version of my resume">get my resume!</a></p>
        </header>
        <a href="http://github.com/eexit" rel="me" class="forkme mhide" title="Fork me on GitHub"><span>Fork me on GitHub</span></a>
    </section>
    <div id="resume">
        <section role="main" class="container">
            <section id="background">
                <h2 title="Study background">Educational background</h2>
                <div>
                    <p><strong>Majoring: Computer Science Engineering MSc</strong></p>
                    <details><summary>Software, system engineering &amp; architecture, <abbr title="Information System">IS</abbr> auditing, numeric contents management, project management</summary></details>
                    <aside>2010, 2 yr, <a href="http://sciences.univ-larochelle.fr/Master-Ingenierie-Informatique.html">D&eacute;partement Informatique</a>, Universit&eacute; La Rochelle, France.</aside>
                </div>
           
            </section>
            <section id="experience" class="row">
                <h2 title="Working experience">Experience</h2>
              exp
                    
            </section>
            <section id="technologies" class="row">
                <h2 title="Technological skills">Technologies playground</h2>
                <dl class="span8">
                    <dt id="development">Development</dt>
                    <dd>Back-end developement (<abbr title="PHP: Hypertext PreProcessor">PHP</abbr>5.3 + <abbr title="Framework">FW</abbr>, <abbr title="Server Query Language">SQL</abbr>, <abbr title="Test Driven Development">TDD</abbr>)</dd>
                    <dd>Application programing (Java, C, AppleScript)</dd>
                    <dd>Standards worshipper (<abbr title="World Wide Web Consortium">W3C</abbr>, Coding Styles, <abbr title="Don't Repeat Yourself">DRY</abbr>, <abbr title="Keep It Super Simple">KISS</abbr>, <abbr title="Less Is a Prefered Solution">LIPS</abbr>)</dd>
                    <dd>Team player (Agile methods, Git, SVN)</dd>
                </dl>
                <dl class="span8">
                    <dt id="syseng">System engineering</dt>
                    <dd><abbr title="Continuous Integration">CI</abbr> server &amp; deployment scripts (Jenkins, bash)</dd>
                    <dd>Web server configuration and administration (*<abbr title="Apache MySQL PHP">AMP</abbr>)</dd>
                    <dd>Networking (<abbr title="Secure Shell">SSH</abbr>, <abbr title="File Transfert Protocol">FTP</abbr>, <abbr title="Domain Name Server">DNS</abbr>, <abbr title="Dynamic Host Configuration Protocol">DHCP</abbr>, <abbr title="Trivial File Transfer Protocol">TFTP</abbr>)</dd>
                    <dd>Architecture (<abbr title="Redundant Array of Independent Disks">RAID</abbr>, virtualization, load-balancing, clustering)</dd>
                    <dd>Operating systems (OSX, Debian-like, Fedora, <del>Windows</del>)</dd>
                </dl>
            </section>
            <section id="miscelaneous" class="row">
                <h2 title="Better to know about me">Additional information</h2>
                <div class="span8">
                    <p>Leisures: volley-ball, snowboard, mountain bike</p>
                    <p>Hobbies: photography, festivals/concerts, cinema, travels, coding stuff</p>
                   
                </div>
                <div class="span4">
                    <p>Languages:</p>
                    <ul>
                        <li>French: beginner </li>
                        <li>English: advanced</li>
                       
                    </ul>
                </div>
                <div class="span4">
                    <p>Tourism:</p>
                    <ul class="countries">
                        <li class="fr"><a href="http://en.wikipedia.org/wiki/France">Republic of Moldova</a></li>
                        <li class="it"><a href="http://en.wikipedia.org/wiki/Italy">Canada</a></li>
                    </ul>
                </div>
            </section>
        </section>
        <div class="php-logo mhide"></div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="span8">
                    <p>I'd work better with...</p>
                    <ul>
                        <li>Original working methodologies, tools</li>
                        <li>Agile project management</li>
                        <li>Easy time set, flexibility</li>
                        <li>Fun offices</li>
                    </ul>
                </div>
                <div class="span4">
                    <p>Back to <a href="#start" rel="start" title="Back to the top of this page">the top</a></p>
                    <p>Last updated: 2013-01-24</p>
                    <p><small>Created and designed by Valentin Ursuleac &copy; <?php echo copyright(2011); ?>, with help of <a href="http://twitter.github.com/bootstrap">Bootstrap</a>.</small></p>
                </div>
               
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        (function() {
            var scpt = document.createElement('script'); scpt.type = 'text/javascript'; scpt.async = true; scpt.src = '<?php echo $domain; ?>/ui/js/scripts-min.js';
            var p = document.getElementsByTagName('script')[0]; p.parentNode.insertBefore(scpt, p);
        })();
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UAXXXXXXXXX']);
        _gaq.push(['_trackPageview']);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = 'http://www.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
</body>
</html>

<?php
echo <<< EOT
<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="description" content="{$KeyWord}">

    <link rel="stylesheet" type="text/css" media="screen" href="theme/{$Theme}/stylesheets/stylesheet.css">

    <title>{$Title}</title>
  </head>

  <body>

    <!-- HEADER -->
    <div id="header_wrap" class="outer">
        <header class="inner">

          <a href="index.php?q=index"><h1 id="project_title">{$Title}</a></h1>
          <p id="project_tagline">竹輪部の部室 > {$PageTitle}</p>
          <h2 id="project_tagline">{$Message}</h2>

        </header>
    </div>

    <!-- MAIN CONTENT -->
    <div id="main_content_wrap" class="outer">
      <section id="main_content" class="inner">
        {$Text}
      </section>
    </div>

    <!-- FOOTER  -->
    <div id="footer_wrap" class="outer">
      <footer class="inner">
        <p>{$Footer}</p>
      </footer>
    </div>

    

  </body>
</html>
EOT;

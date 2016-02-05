<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $this->pageTitle; ?> -- <?php echo $this->bookTitle; ?></title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/prism.css" type="text/css" rel="stylesheet" />
</head>
<body>
<header>
    <div class="header">
        <div class="header-body">
            <div class="book-title">
                <a href="index.html"><?php echo $this->bookTitle; ?></a>
            </div>
            <div class="menu">
                <div class="link">
                    <a href="#">Read</a>
                </div>
                <div class="link">
                    <a href="#">Source</a>
                </div>
                <div class="link">
                    <a href="#">Contribute</a>
                </div>
            </div>
        </div>    
    </div>
</header>
<!-- Navigation -->
<div class="navigation">
    <div class="prev-chapter">
        <a href="#">
            <img src="images/left.png"><span>Previous</span>
        </a>
    </div>
    <div class="contents">
        <a href="#">
            <img src="images/book.png"><span>Contents</span>
        </a>
    </div>
    <div class="next-chapter">
        <a href="#">
            <span>Next</span><img src="images/right.png">
        </a>
    </div>
</div>
<!-- Chapter content -->
<div id="container">
<?php echo $this->content; ?>        
</div>
<!-- Navigation -->
<div class="navigation">
    <div class="prev-chapter">
        <a href="#">
            <img src="images/left.png"><span>Previous</span>
        </a>
    </div>
    <div class="contents">
        <a href="#">
            <img src="images/book.png"><span>Contents</span>
        </a>
    </div>
    <div class="next-chapter">
        <a href="#">
            <span>Next</span><img src="images/right.png">
        </a>
    </div>
</div>
<div id="disqus_thread"></div>
<footer>
    <div class="footer">
        <div class="footer-body">
            <div class="generated-by">
                Generated by <a href="http://github.com">OpenBook</a> on <?php echo date('Y-m-d H:i') ?>
            </div>
        </div>    
    </div>
</footer>

<script src="js/prism.js"></script>
<script>
var disqus_config = function () {
this.page.url = window.location.href; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = '<?php echo $this->pageTitle; ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//using-zend-framework-3-book.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
</body>
</html>    


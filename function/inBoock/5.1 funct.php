
    <?php
    //! П 5.1. Объевление функции
    function page_header()
    {
        print '<html><head><title>Welcome to my site</title></head></html>';
        print '<body bgcolor="#ffffff">';
    }
    $user = 'Mickhail';
    page_header();
    print "Welcome, $user";
    print "</body></html>";
    ?>

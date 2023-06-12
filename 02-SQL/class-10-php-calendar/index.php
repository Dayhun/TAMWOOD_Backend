<?php
    //require all necessaries files
    require_once("inc/calendar.inc.php");
    require_once("inc/html.inc.php");

    
    //Render the HTML Page
    htmlHeader();

    //Render the form and the HTML calendar
    //To render the Calendar, getdata function provide an array
    htmlPrintCalendar(getCalendarData());
    //Render the HTML foot
    htmlFooter();

?>
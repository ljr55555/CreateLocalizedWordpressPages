<?php
require('/path/to/wordpress/instance/html/wp-load.php');
// Page title and content templates -- could be sourced in from file. "VARCSZ" is replaced with the locality "City, State ZIP" 
$strTitle = 'Service Offered In VARCSZ';
$strContent = '<section id="builder-section-text_11" class="builder-section-first builder-section builder-section-text builder-section-last builder-text-columns-1" style="background-size: cover; background-repeat: no-repeat;background-position: center center;">
<div class="builder-section-content">
<div class="builder-text-row">
<div class="builder-text-column builder-text-column-1" id="builder-section-text_11-column-1">
<div class="builder-text-content">
<p><b>Service Offered In VARCSZ</b></p>
<p>And here is where we provide some information about the service we are offering, why you want this service, and what we do that is super awesome. </P>
<p><b>More about our service in VARCSZ</b></p>
<p>Info about our company and the service we provide in VARCSZ</p>
<p><b>Call NOW for our service in VARCSZ</b></p>
<p>For this service in VARCSZ, call us.</p>
<p><b>Call 800-555-1212</b></p>
</div>
</div>
</div>
</div>
</section>';


$strArrayOfLocations = array('Abington, PA 19001', 'Ambler, PA 19002', 'Ardmore, PA 19003', 'Bala Cynwyd, PA 19004', 'Huntingdon Valley, PA 19006', 'Bristol, PA 19007', 'Broomall, PA 19008', 'Bryn Athyn, PA 19009', 'Bryn Mawr, PA 19010', 'Cheltenham, PA 19012', 'Chester, PA 19013', 'Aston, PA 19014', 'Brookhaven, PA 19015', 'Chester, PA 19016', 'Chester Heights, PA 19017', 'Clifton Heights, PA 19018', 'Philadelphia, PA 19019', 'Bensalem, PA 19020', 'Croydon, PA 19021', 'Crum Lynne, PA 19022', 'Darby, PA 19023', 'Dresher, PA 19025', 'Drexel Hill, PA 19026', 'Elkins Park, PA 19027', 'Edgemont, PA 19028', 'Essington, PA 19029', 'Fairless Hills, PA 19030');
echo "<ul>\n";
foreach($strArrayOfLocations as $strLocation){
        $strSEOTitle = str_replace(VARCSZ,$strLocation,$strTitle);
        $strSEOContent = str_replace(VARCSZ,$strLocation,$strContent);

        // Create post object
        $postObject = array();
        $postObject['post_title']    = $strSEOTitle;
        $postObject['post_content']  = $strSEOContent;
        $postObject['post_status']   = 'publish';
        $postObject['post_author']   = 1;
        $postObject['post_type']          = 'page';
        $postObject['post_category'] = array(0);
        $postObject['tags_input'] = array('Tag1','Tag2');
        // Insert the post into the database
        // wp_insert_post documented at https://developer.wordpress.org/reference/functions/wp_insert_post/
        $iPostID = wp_insert_post( $postObject );
        echo "<li>$iPostID created for $strLocation</li>\n";
}
echo "</ul>\n";
?>

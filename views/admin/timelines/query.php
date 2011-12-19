<?php
/**
 * The edit query view for a specific Timeline.
 *
 * PHP 5
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at http://www.apache.org/licenses/LICENSE-2.0 Unless required by
 * applicable law or agreed to in writing, software distributed under the
 * License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS
 * OF ANY KIND, either express or implied. See the License for the specific
 * language governing permissions and limitations under the License.
 */

$head = array('bodyclass' => 'timelines primary', 
              'title' => html_escape('Neatline Time | Edit Timeline Query'));
head($head);
?>
<script type="text/javascript" charset="utf-8">
    jQuery(window).load(function(){
       Omeka.Search.activateSearchButtons; 
    });
</script>
<h1><?php echo $head['title']; ?></h1>
<div id="primary">
    <?php echo items_search_form(array(), current_uri()); ?>

</div>
<?php foot(); ?>
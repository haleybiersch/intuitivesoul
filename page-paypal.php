<?php /* Template Name: PayPal */ ?>
<?php @include('header.php'); ?>

<main>

	<!-- Main Content -->
	<section class="main pt-5" id="main">
    
    <h1><?php the_title() ?></h1>
    
    <h2>Form Code</h2>
<pre>&lt;form action="https://www.paypal.com/cgi-bin/webscr" method="post"&gt;
    	&lt;input type="hidden" name="cmd" value="_s-xclick" /&gt;
    	&lt;input type="hidden" name="hosted_button_id" value="INSERT_VALUE" /&gt;
    	&lt;input type="submit" alt="Alt text" name="submit" value="INSERT_TEXT" class="u-btn-submit" /&gt;
&lt;/form&gt;</pre>
    
    <h2>Output</h2>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    	<input type="hidden" name="cmd" value="_s-xclick" />
    	<input type="hidden" name="hosted_button_id" value="6795494" />
    	<input type="submit" alt="PayPal Alt Text" name="submit" value="Donate Now" class="u-btn-submit" />
    </form>
    
    <br />
    <h2>Re-create PayPal Links</h2>
    <p>Replace the "hosted_button_id" value and input submit value "Button Text" to add the PayPal option</p>
    
    <table class="table table-responsive table-striped table-hover table-sm">
    	<tr>
    		<td>hosted_button_id</td>
    		<td>Service Offered</td>
    		<td>Button Text</td>
    	</tr>
    	<tr>
    		<td>6795494</td>
    		<td>Donate</td>
    		<td>Donate Now</td>
    	</tr>
    	<tr>
    		<td>CMG2JN7ZALEX6</td>
    		<td>Quick 1 Question (answered via E-Mail ) $50</td>
    		<td>1 Question</td>
    	</tr>
    	<tr>
    		<td>CTZ3AB7F9HSFQ</td>
    		<td>Full Intuitive Counseling Session (up to 5 questions answered via E-Mail) $100</td>
    		<td>Full Intuitive Counseling Session</td>
    	</tr>
    	<tr>
    		<td>2HYUFC4X6EQ56</td>
    		<td>Phone Intuitive Counseling Session $150 per Hour (this may also be done in-person)</td>
    		<td>Phone Intuitive Counseling Session</td>
    	</tr>
    	<tr>
    		<td>QQXT2UUCXDNU4</td>
    		<td>Relationship Advice (up to 5 Questions answered via Email) $100</td>
    		<td>Relationship Advice</td>
    	</tr>
    	<tr>
    		<td>6C265LJHFJGJJ</td>
    		<td>Relationship Advice (answered via Phone call, Skype or in-person) $150 per Hour</td>
    		<td>Relationship Advice</td>
    	</tr>
    	<tr>
    		<td>WVT8JHGYC462J</td>
    		<td>Quan Yin Channeling (answered via E-Mail) $100</td>
    		<td>Quan Yin Channeling</td>
    	</tr>
    	<tr>
    		<td>ECNNUKYPGDYY8</td>
    		<td>Quan Yin Channeling (Phone) $150</td>
    		<td>Quan Yin Channeling</td>
    	</tr>
    	<tr>
    		<td>6457600</td>
    		<td>Quick Clearing (single issue/person/situation) $50 </td>
    		<td>Quick Clearing</td>
    	</tr>
    	<tr>
    		<td>6457609</td>
    		<td>Quick Full Straight Clearing: $150</td>
    		<td>Quick Full Straight Clearing</td>
    	</tr>

    	<tr>
    		<td>6457621</td>
    		<td>Quick Expanded Full Clearing: $200</td>
    		<td>Quick Expanded Full Clearing</td>
    	</tr>
    	<tr>
    		<td>6457640</td>
    		<td>Full Personal Clearing: 2-3 session $400</td>
    		<td>Full Personal Clearing</td>
    	</tr>
    	<tr>
    		<td>6457657</td>
    		<td>Full Personal Clearing: 1 session $300</td>
    		<td>Full Personal Clearing</td>
    	</tr>
    	<tr>
    		<td>6457680</td>
    		<td>Rising Star Healing $150</td>
    		<td>Rising Star Healing</td>
    	</tr>
    	<tr>
    		<td>6457691</td>
    		<td>Etheric Surgery: $50</td>
    		<td>Etheric Surgery</td>
    	</tr>
    	<tr>
    		<td>6457704</td>
    		<td>DNA Activation: $100 – 22 Strand DNA Activation</td>
    		<td>DNA Activation</td>
    	</tr>
    	<tr>
    		<td>6457718</td>
    		<td>Level 1 $495 ~ Psychic Self Defense</td>
    		<td>Clearing Training Level 1</td>
    	</tr>
    	<tr>
    		<td>6457734</td>
    		<td>Advanced, Level 2 $495 ~ Clearing Work</td>
    		<td>Clearing Training Level 2</td>
    	</tr>
    	<tr>
    		<td>6457747</td>
    		<td>Master, Level 3 $495 ~ Matrix Soul Retrieval</td>
    		<td>Clearing Training Level 3</td>
    	</tr>

    </table>
    
    
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    
    <?php endwhile; endif;?>

	</section>

    <?php include('sidebar.php') ?>

</main>    
<?php @include('footer.php'); ?>

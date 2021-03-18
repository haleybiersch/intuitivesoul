<?php
/*Template Name: Custom About*/
/**
Page template for About Laurie
*/
//Exit if accessed directly
if (! defined('ABSPATH')) {
	exit;
}
?>

<?php get_header();?>



<div class="about-page container pt-5 pb-5">
	
	
	
	<h1><?php the_title();?></h1>

    <div class="container-fluid">
		<?php if (have_posts()) {
	while(have_posts()) {
	the_post();
	the_content();
	}
}
?> 
<div id="container-fluid">
<h2 class="cohosth">Laurie Huston, Host and Producer</h2>
<div class="row wrap">
    <img class="cohosti d-block" src="<?php echo get_template_directory_uri(); ?>/images/laurie.jpg" alt="" width="150" align="left"/><br><h3 class="cohostp">Background:</h3><p>I am a Professional &amp Intuitive Counselor. I incorporate my professional qualifications that include a Bachelor’s degree in Social Work, Neuro-Linguistic Programming (NLP) and mBit Coach and Trainer, among other certifications, with my Intuitive Counseling and natural Clairsentient and Claircognizant abilities.<br>
		And been on my spiritual path for almost 25 years and during that time I have acquired through extensive studies, teachings and sacred texts, over 30 different healing modalities. I have even developed my own clearing and healing techniques.
            I have been a Host and Producer of my own Radio shows for over 10 years now, currently my show is News for the Heart and my radio shows are syndicated on many different venues including iHeart.com. I also published my first book Realities of Creation last spring, with my chapter on Power of the Heart.</p>
		<h3>My Journey:</h3><p>I have had many challenges to overcome this life. Often I feel I have had 3 or 4 different lifetimes within this life. I was born abandoned as I was put up for adoption, then moved to a foster home for 5.5 months then my adoptive home. When I was 13 the only person I really connected with (my father) died. This led to abandonment issues that I continue to work on to this day. Abandonment is a core belief that many hold, ultimately feeling abandoned by Source.  Abandonment hasn’t just encompassed my intimate relationships, but expanded to include family, friends and work relationships. It has even shown up in financial settings. It has become an all-encompassing challenge in most areas of my life.<br>
		My studies began to work on me first. I devoured courses, sacred texts and teachings from many different people, places and cultures. As an intuitive I know that if I don’t clear up my own issues first, I won’t be a clear channel for anyone else. And what I am working on, will bias my intuitive information when I try to assist others. My Ego has felt ready to be in “service” much earlier than I was truly ready. However, knowing that everything has a reason, clearly those sent to me, not only would I have assisted them, but my own growth as well.<br>
        Six years ago, prompted by a relationship breakup, began a series of challenges from financial to health. A very dark (and long) night of the Soul. I had to rebuild all my foundations. I had to accept my fears of abandonment and truly embrace the Power of my Heart. I created new pathways that allowed me to fully connect with my healing team and connection to Source. I surrendered my hold of my mind to control everything and I allowed my heart to be in charge of my responses. My life changed almost overnight. I embraced the Now Moment. I still have setbacks that test my beliefs and pull me into linear time (linear time is when we are stuck in the past or worrying about the future). However, I celebrate all that I have accomplished and am grateful for all that life now shows me. I choose how I want to BE, instead of trying to do something that will change, fix or manipulate what is happening. I can accept that it isn’t personal and that there is a ‘bigger’ picture. I love who I am, and shine that essence in all the work I do!</p><br>
    <h3>Intuitive Path:</h3> <p>We are all intuitive, however, it is a bit of a challenge sometimes to uncover how we intuit our information.  I am and always have been an Empath.  What this means is that I’m not the typical Clairvoyant, who sees things, or Clairaudient who hears things or people, but I am Clairsentient, which means I feel things and Claircognizant which is an ability to “know” information.  However, one of the problems with being an Empath is that it can be intrusive, and therefore to respect people’s boundaries I often use Tarot as a tool or my first impressions to intuit for others. It also means I won’t connect in with people unless they ask or provide an exchange. It is also, in my belief that soon we will all develop these skills as the primary mode of communication (all Indigos, Crystal etc children already use this primarily).  This is a very powerful mode of communication as it means that all the masks we have created and the lies we tend to live, will no longer be acceptable and will be seen or felt through.</p><br>
    <h3>Relationship Advice:</h3><p>I realized quite early the gift I had was around relationships, as it was the one area of my life that I have had most experience and a huge focus in my life. Relationships are how we experience the world and grow spiritually. I was in a committed relationship for 16 years, where although we weren’t officially married, there was no doubt of our commitment in our relationship. Unfortunately, I had grown spiritually, and the partner I sought to compliment my Spiritual growth, changed. What I have learned about relationships is that like everything else, we need to be clear about what we want and need in a partner and what we are creating in our lives. Do we want a life partner, a Divine Union, a marriage, children, or someone who compliments our journey. Our relationships show us where we have yet to grow and what we have established in our lives through the mirror they reflect. And sometimes we need to learn when to let go and let the next door open.</p>
		<h3>Spiritual Beliefs:</h3><p>I choose to express the highest consciousness available to me at all times (this is an ongoing process, as I am committed to my own Spiritual Development). I commit to the goal of unconditional love and compassion for all life, in all its expression and surrender all judgment to God. I am a servant of God, a vehicle of Divine Love, and a channel of God’s will.  I believe that we create our experiences, either consciously or unconsciously through our thoughts, beliefs, fears &amp behaviors. If you are in a situation that is less than ideal, it is because you are unconsciously choosing to express fear, pain and/or struggle. When you become more aware of the expressions you are choosing, and use the power of love, joy or compassion, with the power of intent, you will become aware of your outdated belief system, the fears that maintain your current situation and your reactions to situations that recreate your old realities. Once you become aware of your reactions, you can choose different actions, decisions and choices to move you through your unconscious reactions to create a new experience. Desires are a way that your soul radiates to you, what you are to become or achieve in this life. And once you begin to follow your bliss, your life starts on a course of spiritual awakening and development. You are beginning to consciously choose your reality.<br>
		Your Imagination is the only limit for a life with infinite possibilities. Sometimes, all it takes is someone to believe in your highest vision, for the vision to manifest in your reality. Let me hold your vision for you.
    </p>
    <h3>NEW! Coming Soon:</h3><p>mBraining.</p>
		</div><br>
		<div class="row">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="aboutb btn btn-primary" type="submit">DONATE</button></div>
			<p class="aboutp">All my shows are either archived or listed with their respective co-host. If you enjoyed, were touched and/or inspired by a show.<br>Please show your appreciation by donating a small token.<br>
		With Love and an Open Heart,<br>
			Laurie</p></div>
		</div>
</div>
<?php get_footer();?>
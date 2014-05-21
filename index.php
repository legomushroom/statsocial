<?php get_header(); ?>

<?php include 'icons.svg'; ?>

<div id="main">
	<!-- <div id="content"> -->
		<div class="blog-p">
			<div class="blog-p--core cf">
				<?php get_sidebar(); ?>
		  	<div class="blog-p--main">
		      <div class="blog-p--main--core">
		      	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="post">
	              <div id="" title="" class="icon post--icon">
	                <svg viewBox="0 0 32 32">
	                  <use xlink:href="#message1-icon"></use>
	                </svg>
	              </div>
	              <div class="post--header"><?php the_title(); ?></div>
	              <div class="post--date">Posted on <a class="is-hoverable" href="#"><?php the_time('F jS, Y') ?></a> by <a class="is-hoverable" href="#">audreyhungerman</a></div>
	              
								<?php the_content(__('(more...)')); ?>
	              <div class="post--img"><img src="http://placeimg.com/750/535/nature"></div>

	              <blockquote>The 2014 Winter Olympics, officially known as the XXII Olympic 	Winter Games (French: Les XXIIes Jeux olympiques d'hiver), is a major international multi-sport event</blockquote>
	              <p>Ceremony, 6 February 2014. Both the Olympics and 2014 Winter Paralympics are being organized by the Sochi Organizing Committee (SOC). Sochi was selected as the host city in July 2007, during the 119th IOC Session held in Guatemala City. It is the first Olympics in</p>
	              <p>Russia since the breakup of the Soviet Union in 1991. The Soviet Union was the host nation for the 1980 Summer Olympics in Moscow.</p>
	              <div class="share cf">
	                <div id="" title="" class="icon ">
	                  <svg viewBox="0 0 32 32">
	                    <use xlink:href="#twitter-icon"></use>
	                  </svg>
	                </div>
	                <div id="" title="" class="icon ">
	                  <svg viewBox="0 0 32 32">
	                    <use xlink:href="#fb-icon"></use>
	                  </svg>
	                </div>
	                <div id="" title="" class="icon ">
	                  <svg viewBox="0 0 32 32">
	                    <use xlink:href="#linkedin-icon"></use>
	                  </svg>
	                </div>
	                <div id="" title="" class="icon ">
	                  <svg viewBox="0 0 32 32">
	                    <use xlink:href="#google-plus-icon"></use>
	                  </svg>
	                </div>
	              </div>
	            </div>
	            <div class="post--footer">
                <div class="post--footer--section"> 
                  <div class="post--footer--section--content">Posted in <a class="is-hoverable" href="#">Insights</a></div>
                </div>
                <div class="post--footer--section">
                  <div class="post--footer--section--content">Tagged <a class="is-hoverable" href="#">Social Media, sports</a></div>
                </div>
                <div class="post--footer--section"> 
                  <div class="post--footer--section--content"><a class="is-hoverable" href="#">Leave a reply</a></div>
                </div>
              </div>
              <div class="blog-p--comments">
	              <div class="press-comment-l cf">
	                <div class="press-comment-l--avatar">
	                  <div id="" class="comment-avatar">
	                    <div class="comment-circle-e undefined"></div>
	                    <div class="comment-avatar--text">AdAge</div>
	                  </div>
	                </div>
	                <div class="press-comment-l--body">
	                  <div id="" class="comment is-plain">
	                    <div class="comment--text">“Check out @PeekAnalytics for some top notch audience analytics that can't be else!” </div>
	                    <div class="comment--date"></div>
	                  </div>
	                </div>
	              </div>
	              <div class="press-comment-l cf">
	                <div class="press-comment-l--avatar">
	                  <div id="" class="comment-avatar">
	                    <div class="comment-circle-e undefined"></div>
	                    <div class="comment-avatar--text">AdAge</div>
	                  </div>
	                </div>
	                <div class="press-comment-l--body">
	                  <div id="" class="comment is-plain">
	                    <div class="comment--text">“Check out @PeekAnalytics for some top notch audience analytics that can't be else!” </div>
	                    <div class="comment--date"></div>
	                  </div>
	                </div>
	              </div>
	              <div class="press-comment-l cf">
		              <div class="press-comment-l--avatar">
		                <div id="" class="comment-avatar">
		                  <div class="comment-circle-e undefined"></div>
		                  <div class="comment-avatar--text">AdAge</div>
		                </div>
		              </div>
		              <div class="press-comment-l--body">
		                <div id="" class="comment is-plain">
		                  <div class="comment--text">“Check out @PeekAnalytics for some top notch audience analytics that can't be else!” </div>
		                  <div class="comment--date"></div>
		                </div>
		              </div>
		            </div>
		          </div>
            </div>
            
						<?php endwhile; else: ?>
						<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
						</div>
		      </div>
		    </div>
		  </div>
		<!-- </div> -->
		
</div>
	<?php get_footer(); ?>
<div id="delimiter"></div>

<!-- 
		






            <div class="post">
              <div id="" title="" class="icon post--icon">
                <svg viewBox="0 0 32 32">
                  <use xlink:href="#message1-icon"></use>
                </svg>
              </div>
              <div class="post--header">olympic games sochi</div>
              <div class="post--date">Posted on <a class="is-hoverable" href="#">February 18, 2014</a> by <a class="is-hoverable" href="#">audreyhungerman</a></div>
              <div class="post--img"><img src="http://placeimg.com/750/535/nature"></div>
              <p>The 2014 Winter Olympics, officially known as the XXII Olympic Winter Games (French: Les XXIIes Jeux olympiques d'hiver), is a major international multi-sport event being held in Sochi, Russia in the tradition of the Winter Olympic Games.Scheduled for 7–23 February 2014, opening rounds in certain events were held on the eve of the Opening</p>
              <blockquote>The 2014 Winter Olympics, officially known as the XXII Olympic 	Winter Games (French: Les XXIIes Jeux olympiques d'hiver), is a major international multi-sport event</blockquote>
              <p>Ceremony, 6 February 2014. Both the Olympics and 2014 Winter Paralympics are being organized by the Sochi Organizing Committee (SOC). Sochi was selected as the host city in July 2007, during the 119th IOC Session held in Guatemala City. It is the first Olympics in</p>
              <p>Russia since the breakup of the Soviet Union in 1991. The Soviet Union was the host nation for the 1980 Summer Olympics in Moscow.</p>
              <div class="share cf">
                <div id="" title="" class="icon ">
                  <svg viewBox="0 0 32 32">
                    <use xlink:href="#twitter-icon"></use>
                  </svg>
                </div>
                <div id="" title="" class="icon ">
                  <svg viewBox="0 0 32 32">
                    <use xlink:href="#fb-icon"></use>
                  </svg>
                </div>
                <div id="" title="" class="icon ">
                  <svg viewBox="0 0 32 32">
                    <use xlink:href="#linkedin-icon"></use>
                  </svg>
                </div>
                <div id="" title="" class="icon ">
                  <svg viewBox="0 0 32 32">
                    <use xlink:href="#google-plus-icon"></use>
                  </svg>
                </div>
              </div>
              <div class="post--footer">
                <div class="post--footer--section"> 
                  <div class="post--footer--section--content">Posted in <a class="is-hoverable" href="#">Insights</a></div>
                </div>
                <div class="post--footer--section">
                  <div class="post--footer--section--content">Tagged <a class="is-hoverable" href="#">Social Media, sports</a></div>
                </div>
                <div class="post--footer--section"> 
                  <div class="post--footer--section--content"><a class="is-hoverable" href="#">Leave a reply</a></div>
                </div>
              </div>
            </div>
            <div class="blog-p--comments">
              <div class="press-comment-l cf">
                <div class="press-comment-l--avatar">
                  <div id="" class="comment-avatar">
                    <div class="comment-circle-e undefined"></div>
                    <div class="comment-avatar--text">AdAge</div>
                  </div>
                </div>
                <div class="press-comment-l--body">
                  <div id="" class="comment is-plain">
                    <div class="comment--text">“Check out @PeekAnalytics for some top notch audience analytics that can't be else!” </div>
                    <div class="comment--date"></div>
                  </div>
                </div>
              </div>
              <div class="press-comment-l cf">
                <div class="press-comment-l--avatar">
                  <div id="" class="comment-avatar">
                    <div class="comment-circle-e undefined"></div>
                    <div class="comment-avatar--text">AdAge</div>
                  </div>
                </div>
                <div class="press-comment-l--body">
                  <div id="" class="comment is-plain">
                    <div class="comment--text">“Check out @PeekAnalytics for some top notch audience analytics that can't be else!” </div>
                    <div class="comment--date"></div>
                  </div>
                </div>
              </div>
              <div class="press-comment-l cf">
                <div class="press-comment-l--avatar">
                  <div id="" class="comment-avatar">
                    <div class="comment-circle-e undefined"></div>
                    <div class="comment-avatar--text">AdAge</div>
                  </div>
                </div>
                <div class="press-comment-l--body">
                  <div id="" class="comment is-plain">
                    <div class="comment--text">“Check out @PeekAnalytics for some top notch audience analytics that can't be else!” </div>
                    <div class="comment--date"></div>
                  </div>
                </div>
              </div>
            </div>
           -->
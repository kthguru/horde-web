<div>
  <?php if (!$this->isCurrentPage(array('controller' => 'home'))):?>
    <h2>Featured At</h2>
    <?php echo $this->render('informer'); ?><br />
  <?php endif; ?>

  <h2>Support us!</h2>

   <div style="text-align:center;height:40px;">
     <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
     <input type="hidden" name="cmd" value="_s-xclick">
     <input type="hidden" name="hosted_button_id" value="DWV8RS3BHMVC2">
     <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
     <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
     </form>
   </div>

  <h2>Sponsors</h2>
  <ul class="ads">
    <li><a href="http://www.easydns.com/?V=55611cf92a7e0842"><img src="<?php echo $GLOBALS['host_base'] ?>/images/easyDNS.png" /></a></li>
    <li><a href="http://www.hub.org/?ri=765"><img src="<?php echo $GLOBALS['host_base'] ?>/images/hub.png"/></a></li>
    <li><a href="http://www.verendus.com"><img src="<?php echo $GLOBALS['host_base'] ?>/images/verendus.jpg"/></a></li>
  </ul>
  <p>
    <?php echo $this->linkTo('"Thanks!" to all our other sponsors', array('controller' => 'home', 'action' => 'thanks'), array('class' => 'thanks')); ?>
  </p>

  <h2>Twitter</h2>
  <a href="http://twitter.com/hordeproject" class="twitter-follow-button" data-show-count="false">Follow @hordeproject</a>
  <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
  <?php echo $this->render('informer-twitter'); ?>

  <h2>More</h2>
  <iframe src="http://www.facebook.com/plugins/like.php?app_id=132513070157462&amp;href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FHorde-LLC%2F192707224109487&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe>
  <g:plusone size="medium" href="http://www.horde.org/"></g:plusone>
  <a href="https://plus.google.com/105569801098474752113?prsrc=3" style="text-decoration:none;"><img src="https://ssl.gstatic.com/images/icons/gplus-32.png" alt="" style="border:0;width:24px;height:24px;"/></a>
  <p>
    <?php echo $this->linkTo('Logos', array('controller' => 'home', 'action' => 'logos'), array('class' => 'logos'));?>
  </p>

  <h2>Shops</h2>
  <span style="text-align:center;width:91px;float:left;">European Store<a class="boxl"
  href="<?php echo $this->urlWriter->urlFor('shopeu')?>">
  <img src="<?php echo $GLOBALS['host_base'] ?>/images/store-eu.png"/>
  </a></span>
  <span style="text-align:center;width:91px;float:left;">US Store<a class="boxl"
  href="<?php echo $this->urlWriter->urlFor('shopus')?>">
  <img src="<?php echo $GLOBALS['host_base'] ?>/images/store-us.png"/>
  </a></span>
  <span style="text-align:center;width:61px;float:left;">CafePress<a class="boxl"
  href="http://cafepress.com/hordeproject"> <img style="margin-top:15px"
  src="<?php echo $GLOBALS['host_base'] ?>/images/store-cafepress.jpg"/>
  </a></span>
  <!--Cafepress widget seems to have js issues...getting all kinds of errors while navigating-->
   <!--<div id="cpi-s1-1001" class="cpi cpi-s1" affiliate=""
   tracking="hordeproject" color="#797979" source="shop:hordeproject"
   width="100" height="100">
     Make&nbsp;
     <a href="http://www.cafepress.com/make/" title="Make Custom Gifts at CafePress">Custom Gifts</a>&nbsp;at CafePress
   </div>
   <script type="text/javascript" src="http://content4.cpcache.com/marketplace/widgets/javascripts/widget.js"></script>
   --></div>
</div>

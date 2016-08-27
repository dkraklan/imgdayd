<?php if(!defined('cfih') or !cfih) exit("Direct access not permitted.");
/**************************************************************************************************************
 *
 *   CF Image Hosting Script
 *   ---------------------------------
 *
 *   Author:    codefuture.co.uk
 *   Version:   1.6.5
 *
 *   You can download the latest version from: http://codefuture.co.uk/projects/imagehost/
 *
 *   Copyright (c) 2010-2013 CodeFuture.co.uk
 *   This file is part of the CF Image Hosting Script.
 *
 *   THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 *   EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *   COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 *   WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF
 *   OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 *
 *   You may not modify and/or remove any copyright notices or labels on the software on each
 *   page (unless full license is purchase) and in the header of each script source file.
 *
 *   You should have received a full copy of the LICENSE AGREEMENT along with
 *   Codefuture Image Hosting Script. If not, see http://codefuture.co.uk/projects/imagehost/license/.
 *
 *
 *   ABOUT THIS PAGE -----
 *   Used For:     Web site Footer
 *   Last edited:  19/12/2012
 *
 *************************************************************************************************************/
 
 	if(isset($pageSet['image_widgit']) && $pageSet['image_widgit'] && isset($settings['SET_IMAGE_WIDGIT']) && $settings['SET_IMAGE_WIDGIT']){
		add_code_line('footer','<script type="text/javascript">
			$(document).ready(function() {
				$(\'#ImageWidget\').fadeOut(\'slow\', function(){
					$(\'#ImageWidget\').load("'.$settings['SET_SITEURL'].'cfajax.php",{widgit: 25}, function(){
						$(\'#ImageWidget\').fadeIn(\'slow\');
					});
				});
			});
		</script>');
		echo '<div id="ImageWidget" class="boxpanel"></div>';
	}
 
?>
		
		<?php //get_ad('footer','footer_ad');?>
	</div>
	<div id="footer">
	<div id="footer-cont">
			
			<div id="footer-cont1">
        	<h4>Socialize</h4>
            <ul id="footer-list">
            	<li id="facebook">Like us on <a class="footer-cont1" href="#">FaceBook</a></li>
                <li id="twitter">Follow us on <a class="footer-cont1" href="#">Twitter</a></li>
                <li id="gplus">Recommend us on <a class="footer-cont1" href="#">Google+</a></li>
        </ul>
		</div>
		
		<div id="footer-cont2">
        	<h4>Features</h4>
            	<ul>
                	<li><a class="footer-cont2" href="#">Web Upload</a></li>
                    <li><a class="footer-cont2" href="#">Remote Upload</a></li>
                    <li><a class="footer-cont2" href="#">Tools</a></li>
                    <li><a class="footer-cont2" href="#">Premium Features</a></li>
                </ul>
        </div>
		
		<div id="footer-cont2">
        	<h4>Account</h4>
            	<ul>
                	<li><a class="footer-cont2" href="#">Login</a></li>
                    <li><a class="footer-cont2" href="#">Signup for free</a></li>
                    <li><a class="footer-cont2" href="#">Upgrade to preimum</a></li>
                    <li><a class="footer-cont2" href="#">Reclaim Premium</a></li>
                </ul>
        </div>
		
		<div id="footer-cont2">
        	<h4>Support</h4>
            	<ul>
                	<li><a class="footer-cont2" href="#">DMCA</a></li>
                    <li><a class="footer-cont2" href="#">Help</a></li>
                    <li><a class="footer-cont2" href="#">Terms of Use</a></li>
                    <li><a class="footer-cont2" href="#">Privacy Policy</a></li>
                </ul>
        </div>
		
		<div id="footer-cont2">
        	<h4>Contact</h4>
            	<ul>
                	<li><a class="footer-cont2" href="#">About Us</a></li>
                    <li><a class="footer-cont2" href="#">Contact Us</a></li>
                    <li><a class="footer-cont2" href="#">Advertise Here</a></li>
                    <li><a class="footer-cont2" href="#">Report Abuse</a></li>
                </ul>
        </div>
		</div>
		
	</div>
<div class="clear_both"></div>

<?php if(getSettings('SET_GOOGLE_ANALYTICS')){?>
<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	try {
		var pageTracker = _gat._getTracker("<?php echo $settings['SET_GOOGLE_ANALYTICS'];?>");
		pageTracker._trackPageview();
	} 
	catch(err) {}
</script>
<?php } ?>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.7.1.min.js'>\x3C/script>")</script>
	<script type="text/javascript" src="<?php get_url('js/user.js');?>"></script>
	<?php exec_action('footer');?>
	<!--[if lt IE 7 ]>
		<script src="js/dd_belatedpng.js"></script>
		<script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
	<![endif]-->
</body>
</html>
<?php if(!defined('cfih') or !cfih or cfih!='admin') die('This file cannot be directly accessed.');
/**************************************************************************************************************
 *
 *   CF Image Hosting Script
 *   --------------------------------
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
 *   Used For:     Admin page footer
 *   Last edited:  19/12/2012
 *
 *************************************************************************************************************/
?>
<!-- admin page footer -->
	</div></div></div>
	<div id="footer">
	<div id="footer-cont">
		<span class="copyright"><?php echo _T("admin_footer_powered_by");?> <a href="http://codefuture.co.uk/projects/imagehost/" title="Free PHP Image Hosting Script">CF Image Hosting script</a></span>
		<span class="version"><b><?php echo _T("admin_footer_version");?>:</b> <?php echo $settings['SET_VERSION'];?></span>
		
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
	
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.7.1.min.js'>\x3C/script>")</script>
<?php if(isset($page['tipsy'])){ ?>
	<script type="text/javascript" src="js/tipsy.js"></script>
	<script type="text/javascript">
		$(function() {
			$('a.img_tooltip').tipsy({title: 'img_src',fade: true, gravity: 's',html: true,live: true,opacity: 1});
			$('#content th[title]').tipsy({fade: true, gravity: 's',live: true});
			$('#content a.tip[title]').tipsy({fade: true, gravity: 's',live: true});
		})
	</script>
<?php } ?>
<?php if(isset($page['lightbox'])){ ?>
	<script type="text/javascript" src="<?php echo $settings['SET_SITEURL'];?>js/lightbox/lightbox.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".lightbox").lightbox({
				fitToScreen: true,
				imageClickClose: true,
				displayDownloadLink: true
			});
		});
	</script>
<?php } ?>
	<script src="js/admin.js?<?php echo $settings['SET_VERSION'];?>"></script>
	<?php exec_action('admin-footer');?>

</body>
</html>
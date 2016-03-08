
</div><!--Content-->

<?php echo $page == 'Home' ? '<div class="home-footer" id="footer">' : '<div id="footer">'; ?>

  <p>Copyright &copy; 2015 <a href="http://venero.co">Venero, LLC.</a></p>

  <p>All rights reserved.</p> 

  <p>Made in NYC</p>
  
</div>

</div><!--Site-->

</body>
<!-- Javascript -->
<script type="text/javascript" src="/global.js"></script>
<script type="text/javascript" src="/resources/framework/lightbox.min.js"></script>  
<?php echo (isset($script) ? '<script type="text/javascript" src="'.$script.'"></script>' : ''); ?>

</html>
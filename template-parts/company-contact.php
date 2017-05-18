<?php 

	$company_telephone_number = get_field('company_telephone_number', 'option');
	$company_email_address = get_field('company_email_address', 'option');

 ?>
 
<ul class="company-contact">
 
 <?php if ($company_telephone_number) : ?>	
 		<li class="company_tel">T: <a href="tel:<?php echo str_replace(' ', '', $company_telephone_number); ?>"><?php echo $company_telephone_number ?></a><!--tel_no-->
 		</li>
 	
 	<?php endif; ?>
 	
 <?php if ($company_email_address) : ?>
 	<li class="company_email">E:<a  href="mailto:<?php echo $company_email_address ?>"> <?php echo $company_email_address ?></a><!--email_no-->
 	</li>
 <?php endif; ?>
 
 </ul>
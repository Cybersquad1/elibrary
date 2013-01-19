<!-- sidebar -->
<div class="span3" style="position: fixed;">
	<div class="well sidebar-nav">
		<!-- show this section when user is logged in -->
		<?php if($this->session->userdata('role_id') == 9999) : ?>
			<!-- admin options -->
			<ul class="nav nav-list">
				<li class="nav-header">Main Menu</li>
				<li class="<?php if($title == 'Book Return'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>book_return/">Book Return</a></li>
				<li class="<?php if($title == 'Manage Users'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>manage_users/">Manage Users</a></li>
				<li class="<?php if($title == 'Manage Books'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>manage_books/">Manage Books</a></li>
				<li class="<?php if($title == 'Categories'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>categories/">Manage Categories</a></li>
				<li class="<?php if($title == 'Send Sms'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>send_sms/">Send Sms</a></li>
			</ul>
		<?php else: ?>
			<!-- student options -->
			<ul class="nav nav-list">
				<li class="nav-header">Main Menu</li>
				<li class="<?php if($title == 'Outstanding Fines'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>fines/">Outstanding Fines</a></li>
				<li class="<?php if($title == 'My Reservation'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>my_reservation/">My Reservation</a></li>
				<li class="<?php if($title == 'My History'){ echo 'active';} ?>"><a href="<?php echo base_url(); ?>my_history/">My Library History</a></li>
			</ul>
		<?php endif; ?>
		<?php if($this->session->userdata('role_id') != 9999) : ?>
		<div style="height:550px;">
			<ul class="nav nav-list">
				<li class="nav-header">Categories of books</li>
			</ul>
			<div class="nano">
		        <div class="content">
		        	<ul class="nav nav-list">
		        		<?php foreach($categories as $cat): ?>
							<li class="<?php if($genre == ucwords($cat->name)){ echo 'active';} ?>"><a href="<?php echo base_url().'genre/'.str_replace(' ','+', strtolower($cat->name)); ?>"><?php echo ucwords($cat->name); ?></a></li>
						<?php endforeach;?>
		        	</ul>
		        </div>
		    </div>
		</div>
		<?php endif; ?>
	</div>
</div>
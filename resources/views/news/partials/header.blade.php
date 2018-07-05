<header class="clearfix">
	<!-- Top Menu -->
	<nav id="top-menu" class="clearfix">
		<ul class="no-bullet inline-list m0 pull-right">
			<li>
				@if(Auth::check())
					<a href="admin">Quản Trị</a>
				@else
					<a href="login">Login</a>
				@endif
			</li>
		</ul>
	</nav>
	<!-- End Top Menu -->

	
		
	</div>
</header>

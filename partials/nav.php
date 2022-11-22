<nav>
	<ul>		
		<li>
			<a href="/" class="<?= currentUri('/') ? 'active' : ''?>">Home</a>
		</li>
		<li>
			<a href="/about" class="<?= currentUri('/about') ? 'active' : ''; ?>">About</a>
		</li>
		<li>
			<a href="/contact" class="<?= currentUri('/contact') ? 'active' : ''; ?>">Contact</a>
		</li>
	</ul>
</nav>
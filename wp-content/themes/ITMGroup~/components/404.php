<section id="404">
	<div class="content">
		<img src="/wp-content/themes/ITMGroup/assets/logo-ITM-Group-Blanco.png" class="logo" width="350" alt="">
		<div class="message-box">
			<h1>404</h1>
			<?php if (Lang\getLang() == 'en') { ?>
				<p>Page not found</p>
			<?php } else { ?>
				<p>Página no encontrada</p>
			<?php } ?>
			<div class="buttons-con">
				<div class="action-link-wrap">
					<?php if (Lang\getLang() == 'en') { ?>
						<a href="/en/" class="link-button">Go to Home</a>
					<?php } else { ?>
						<a href="/" class="link-button">Regresar al inicio</a>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</section>

<style>
	@font-face {
		font-family: 'Nexa-Heavy';
		font-display: swap;
		src: url('/wp-content/themes/ITMGroup/vendor/fonts/Nexa-ExtraLight.ttf') format('truetype');
	}

	@font-face {
		font-family: 'Nexa-Light';
		font-display: swap;
		src: url('/wp-content/themes/ITMGroup/vendor/fonts/Nexa-ExtraLight.ttf') format('truetype');
	}

	body {
		background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/wp-content/themes/ITMGroup/assets/FOTO_MAPA.jpg');
		/* background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/wp-content/themes/ITMGroup/assets/FOTO_MAPA.jpg'); */
		background-position: bottom;
		background-repeat: no-repeat;
		background-size: cover;
	}

	.logo {
		position: absolute;
		top: 50%;
		left: 50%;
		margin-top: -20px;
		margin-left: -400px;
		animation: float 2s infinite ease-in-out alternate;
	}

	.message-box {
		height: 200px;
		width: 380px;
		position: absolute;
		top: 50%;
		left: 50%;
		margin-top: -100px;
		margin-left: 50px;
		color: #FFF;
		font-family: 'Nexa-Heavy';
		font-weight: 300;
	}

	.message-box h1 {
		font-size: 60px;
		line-height: 46px;
		margin-bottom: 40px;
	}

	.buttons-con .action-link-wrap {
		margin-top: 40px;
	}

	.buttons-con .action-link-wrap a {
		background: #007297;
		padding: 8px 25px;
		border-radius: 4px;
		color: #FFF;
		font-weight: bold;
		font-size: 14px;
		transition: all 0.3s linear;
		cursor: pointer;
		text-decoration: none;
		margin-right: 10px
	}

	.buttons-con .action-link-wrap a:hover {
		background: #5A5C6C;
		color: #fff;
	}

	@keyframes float {
		100% {
			transform: translateY(5px);
		}
	}

	@media (max-width: 450px) {
		.logo {
			position: absolute;
			top: 50%;
			left: 50%;
			margin-top: -250px;
			margin-left: -190px;
		}

		.message-box {
			top: 50%;
			left: 50%;
			margin-top: -100px;
			margin-left: -190px;
			text-align: center;
		}
	}
</style>
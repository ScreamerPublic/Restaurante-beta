<!DOCTYPE html>
<html>
	<head>
		<?php
			include('includes/meta.php');
			include('includes/header.php');
		?>
	</head>
	<body>
		<?php
			include('includes/top_bar.php');
			echo $menu;
		?>
		<!-- ======= Hero Section ======= -->
		<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bienvenido a <span><?=$datos_empresa['nombre_empresa']?></span></h1>
          <h2>Entregando excelente comida por más de 18 años!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">NUESTRO MENÚ</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">RESERVAR UNA MESA</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->
		<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

	<div class="row">
	  <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
		<div class="about-img">
		  <img src="<?=base_url()?>assets/img/about.jpg" alt="">
		</div>
	  </div>
	  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
		<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
		<p class="fst-italic">
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
		  magna aliqua.
		</p>
		<ul>
		  <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
		  <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
		  <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
		</ul>
		<p>
		  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
		  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
		  culpa qui officia deserunt mollit anim id est laborum
		</p>
	  </div>
	</div>

  </div>
</section><!-- End About Section -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>PORQUE NOSOTROS</h2>
	  <p>Por qué elegir nuestro restaurante</p>
	</div>

	<div class="row">

	  <div class="col-lg-4">
		<div class="box" data-aos="zoom-in" data-aos-delay="100">
		  <span>01</span>
		  <h4>Lorem Ipsum</h4>
		  <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
		</div>
	  </div>

	  <div class="col-lg-4 mt-4 mt-lg-0">
		<div class="box" data-aos="zoom-in" data-aos-delay="200">
		  <span>02</span>
		  <h4>Repellat Nihil</h4>
		  <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
		</div>
	  </div>

	  <div class="col-lg-4 mt-4 mt-lg-0">
		<div class="box" data-aos="zoom-in" data-aos-delay="300">
		  <span>03</span>
		  <h4> Ad ad velit qui</h4>
		  <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
		</div>
	  </div>

	</div>

  </div>
</section><!-- End Why Us Section -->

<!-- ======= Menu Section ======= -->
<section id="menu" class="menu section-bg">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>MENÚ</h2>
	  <p>Consulta Nuestro Menú Sabroso</p>
	</div>

	<div class="row" data-aos="fade-up" data-aos-delay="100">
	  <div class="col-lg-12 d-flex justify-content-center">
		<ul id="menu-flters">
		  <li data-filter="*" class="filter-active">Todos</li>
		  <li data-filter=".filter-starters">Entrantes</li>
		  <li data-filter=".filter-salads">Ensaladas</li>
		  <li data-filter=".filter-specialty">Especialidad</li>
		</ul>
	  </div>
	</div>

	<div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

	  <div class="col-lg-6 menu-item filter-starters">
		<img src="<?=base_url()?>assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Sopa de langosta</a><span>$5.95</span>
		</div>
		<div class="menu-ingredients">
		  Lorem, deren, trataro, filede, nerada
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-specialty">
		<img src="<?=base_url()?>assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Barril de pan</a><span>$6.95</span>
		</div>
		<div class="menu-ingredients">
		  Lorem, deren, trataro, filede, nerada
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-starters">
		<img src="<?=base_url()?>assets/img/menu/cake.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Pastel de cangrejo</a><span>$7.95</span>
		</div>
		<div class="menu-ingredients">
		  A delicate crab cake served on a toasted roll with lettuce and tartar sauce
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-salads">
		<img src="<?=base_url()?>assets/img/menu/caesar.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Selecciones de Cesar</a><span>$8.95</span>
		</div>
		<div class="menu-ingredients">
		  Lorem, deren, trataro, filede, nerada
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-specialty">
		<img src="<?=base_url()?>assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Toscano a la parrilla</a><span>$9.95</span>
		</div>
		<div class="menu-ingredients">
		  Grilled chicken with provolone, artichoke hearts, and roasted red pesto
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-starters">
		<img src="<?=base_url()?>assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Palo de mozarrella</a><span>$4.95</span>
		</div>
		<div class="menu-ingredients">
		  Lorem, deren, trataro, filede, nerada
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-salads">
		<img src="<?=base_url()?>assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Ensalada griega</a><span>$9.95</span>
		</div>
		<div class="menu-ingredients">
		  Fresh spinach, crisp romaine, tomatoes, and Greek olives
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-salads">
		<img src="<?=base_url()?>assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Ensalada de espinaca</a><span>$9.95</span>
		</div>
		<div class="menu-ingredients">
		  Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
		</div>
	  </div>

	  <div class="col-lg-6 menu-item filter-specialty">
		<img src="<?=base_url()?>assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
		<div class="menu-content">
		  <a href="#">Rollo de langosta</a><span>$12.95</span>
		</div>
		<div class="menu-ingredients">
		  Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
		</div>
	  </div>

	</div>

  </div>
</section><!-- End Menu Section -->

<!-- ======= Specials Section ======= -->
<section id="specials" class="specials">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>ESPECIALES</h2>
	  <p>Consulta Nuestras Especiales</p>
	</div>

	<div class="row" data-aos="fade-up" data-aos-delay="100">
	  <div class="col-lg-3">
		<ul class="nav nav-tabs flex-column">
		  <li class="nav-item">
			<a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Modi sit est</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" data-bs-toggle="tab" href="#tab-2">Unde praesentium sed</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" data-bs-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" data-bs-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" data-bs-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
		  </li>
		</ul>
	  </div>
	  <div class="col-lg-9 mt-4 mt-lg-0">
		<div class="tab-content">
		  <div class="tab-pane active show" id="tab-1">
			<div class="row">
			  <div class="col-lg-8 details order-2 order-lg-1">
				<h3>Architecto ut aperiam autem id</h3>
				<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
				<p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
			  </div>
			  <div class="col-lg-4 text-center order-1 order-lg-2">
				<img src="<?=base_url()?>assets/img/specials-1.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		  <div class="tab-pane" id="tab-2">
			<div class="row">
			  <div class="col-lg-8 details order-2 order-lg-1">
				<h3>Et blanditiis nemo veritatis excepturi</h3>
				<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
				<p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
			  </div>
			  <div class="col-lg-4 text-center order-1 order-lg-2">
				<img src="<?=base_url()?>assets/img/specials-2.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		  <div class="tab-pane" id="tab-3">
			<div class="row">
			  <div class="col-lg-8 details order-2 order-lg-1">
				<h3>Impedit facilis occaecati odio neque aperiam sit</h3>
				<p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
				<p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
			  </div>
			  <div class="col-lg-4 text-center order-1 order-lg-2">
				<img src="<?=base_url()?>assets/img/specials-3.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		  <div class="tab-pane" id="tab-4">
			<div class="row">
			  <div class="col-lg-8 details order-2 order-lg-1">
				<h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
				<p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
				<p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
			  </div>
			  <div class="col-lg-4 text-center order-1 order-lg-2">
				<img src="<?=base_url()?>assets/img/specials-4.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		  <div class="tab-pane" id="tab-5">
			<div class="row">
			  <div class="col-lg-8 details order-2 order-lg-1">
				<h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
				<p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
				<p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
			  </div>
			  <div class="col-lg-4 text-center order-1 order-lg-2">
				<img src="<?=base_url()?>assets/img/specials-5.png" alt="" class="img-fluid">
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>

  </div>
</section><!-- End Specials Section -->

<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>EVENTOS</h2>
	  <p>Organiza Tus Eventos en Nuestro Restaurante</p>
	</div>

	<div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
	  <div class="swiper-wrapper">

		<div class="swiper-slide">
		  <div class="row event-item">
			<div class="col-lg-6">
			  <img src="<?=base_url()?>assets/img/event-birthday.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0 content">
			  <h3>Fiestas de cumpleaños</h3>
			  <div class="price">
				<p><span>$189</span></p>
			  </div>
			  <p class="fst-italic">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua.
			  </p>
			  <ul>
				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				<li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
			  </ul>
			  <p>
				Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				velit esse cillum dolore eu fugiat nulla pariatur
			  </p>
			</div>
		  </div>
		</div><!-- End testimonial item -->

		<div class="swiper-slide">
		  <div class="row event-item">
			<div class="col-lg-6">
			  <img src="<?=base_url()?>assets/img/event-private.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0 content">
			  <h3>Fiestas privadas</h3>
			  <div class="price">
				<p><span>$290</span></p>
			  </div>
			  <p class="fst-italic">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua.
			  </p>
			  <ul>
				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				<li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
			  </ul>
			  <p>
				Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				velit esse cillum dolore eu fugiat nulla pariatur
			  </p>
			</div>
		  </div>
		</div><!-- End testimonial item -->

		<div class="swiper-slide">
		  <div class="row event-item">
			<div class="col-lg-6">
			  <img src="<?=base_url()?>assets/img/event-custom.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0 content">
			  <h3>Fiestas personalizadas</h3>
			  <div class="price">
				<p><span>$99</span></p>
			  </div>
			  <p class="fst-italic">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
				magna aliqua.
			  </p>
			  <ul>
				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
				<li><i class="bi bi-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
				<li><i class="bi bi-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
			  </ul>
			  <p>
				Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
				velit esse cillum dolore eu fugiat nulla pariatur
			  </p>
			</div>
		  </div>
		</div><!-- End testimonial item -->

	  </div>
	  <div class="swiper-pagination"></div>
	</div>

  </div>
</section><!-- End Events Section -->

<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>RESERVA</h2>
	  <p>Reservar una mesa</p>
	</div>

	<form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
	  <div class="row">
		<div class="col-lg-4 col-md-6 form-group">
		  <input type="text" name="name" class="form-control" id="name" placeholder="Su nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
		  <div class="validate"></div>
		</div>
		<div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
		  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico" data-rule="email" data-msg="Please enter a valid email">
		  <div class="validate"></div>
		</div>
		<div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
		  <input type="text" class="form-control" name="phone" id="phone" placeholder="Tu telefono" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
		  <div class="validate"></div>
		</div>
		<div class="col-lg-4 col-md-6 form-group mt-3">
		  <input type="text" name="date" class="form-control" id="date" placeholder="Fecha" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
		  <div class="validate"></div>
		</div>
		<div class="col-lg-4 col-md-6 form-group mt-3">
		  <input type="text" class="form-control" name="time" id="time" placeholder="Tiempo" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
		  <div class="validate"></div>
		</div>
		<div class="col-lg-4 col-md-6 form-group mt-3">
		  <input type="number" class="form-control" name="people" id="people" placeholder="# de personas" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
		  <div class="validate"></div>
		</div>
	  </div>
	  <div class="form-group mt-3">
		<textarea class="form-control" name="message" rows="5" placeholder="Mensaje"></textarea>
		<div class="validate"></div>
	  </div>
	  <div class="mb-3">
		<div class="loading">Loading</div>
		<div class="error-message"></div>
		<div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
	  </div>
	  <div class="text-center"><button type="submit">Reservar una mesa</button></div>
	</form>

  </div>
</section><!-- End Book A Table Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>TESTIMONIOS</h2>
	  <p>Lo que dicen de nosotros</p>
	</div>

	<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
	  <div class="swiper-wrapper">

		<div class="swiper-slide">
		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="<?=base_url()?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
			<h3>Saul Goodman</h3>
			<h4>Ceo &amp; Founder</h4>
		  </div>
		</div><!-- End testimonial item -->

		<div class="swiper-slide">
		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="<?=base_url()?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
			<h3>Sara Wilsson</h3>
			<h4>Designer</h4>
		  </div>
		</div><!-- End testimonial item -->

		<div class="swiper-slide">
		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="<?=base_url()?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
			<h3>Jena Karlis</h3>
			<h4>Store Owner</h4>
		  </div>
		</div><!-- End testimonial item -->

		<div class="swiper-slide">
		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="<?=base_url()?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
			<h3>Matt Brandon</h3>
			<h4>Freelancer</h4>
		  </div>
		</div><!-- End testimonial item -->

		<div class="swiper-slide">
		  <div class="testimonial-item">
			<p>
			  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
			  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
			  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
			</p>
			<img src="<?=base_url()?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
			<h3>John Larson</h3>
			<h4>Entrepreneur</h4>
		  </div>
		</div><!-- End testimonial item -->

	  </div>
	  <div class="swiper-pagination"></div>
	</div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">

  <div class="container" data-aos="fade-up">
	<div class="section-title">
	  <h2>GALERÍA</h2>
	  <p>Algunas fotos de Nuestro Restaurante</p>
	</div>
  </div>

  <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

	<div class="row g-0">

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	  <div class="col-lg-3 col-md-4">
		<div class="gallery-item">
		  <a href="<?=base_url()?>assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
			<img src="<?=base_url()?>assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
		  </a>
		</div>
	  </div>

	</div>

  </div>
</section><!-- End Gallery Section -->

<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>COCINEROS</h2>
	  <p>Nuestros Chefs Profesionales</p>
	</div>

	<div class="row">

	  <div class="col-lg-4 col-md-6">
		<div class="member" data-aos="zoom-in" data-aos-delay="100">
		  <img src="<?=base_url()?>assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
		  <div class="member-info">
			<div class="member-info-content">
			  <h4>Walter White</h4>
			  <span>Mestro de cocina</span>
			</div>
			<div class="social">
			  <a href=""><i class="bi bi-twitter"></i></a>
			  <a href=""><i class="bi bi-facebook"></i></a>
			  <a href=""><i class="bi bi-instagram"></i></a>
			  <a href=""><i class="bi bi-linkedin"></i></a>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-4 col-md-6">
		<div class="member" data-aos="zoom-in" data-aos-delay="200">
		  <img src="<?=base_url()?>assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
		  <div class="member-info">
			<div class="member-info-content">
			  <h4>Sarah Jhonson</h4>
			  <span>Repostero</span>
			</div>
			<div class="social">
			  <a href=""><i class="bi bi-twitter"></i></a>
			  <a href=""><i class="bi bi-facebook"></i></a>
			  <a href=""><i class="bi bi-instagram"></i></a>
			  <a href=""><i class="bi bi-linkedin"></i></a>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="col-lg-4 col-md-6">
		<div class="member" data-aos="zoom-in" data-aos-delay="300">
		  <img src="<?=base_url()?>assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
		  <div class="member-info">
			<div class="member-info-content">
			  <h4>William Anderson</h4>
			  <span>Cocinero</span>
			</div>
			<div class="social">
			  <a href=""><i class="bi bi-twitter"></i></a>
			  <a href=""><i class="bi bi-facebook"></i></a>
			  <a href=""><i class="bi bi-instagram"></i></a>
			  <a href=""><i class="bi bi-linkedin"></i></a>
			</div>
		  </div>
		</div>
	  </div>

	</div>

  </div>
</section><!-- End Chefs Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

	<div class="section-title">
	  <h2>CONTACTO</h2>
	  <p>Contáctenos</p>
	</div>
  </div>

  <div data-aos="fade-up">
	<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
  </div>

  <div class="container" data-aos="fade-up">

	<div class="row mt-5">

	  <div class="col-lg-4">
		<div class="info">
		  <div class="address">
			<i class="bi bi-geo-alt"></i>
			<h4>Localización:</h4>
			<p><?=$datos_empresa['direccion_empresa']?></p>
		  </div>

		  <div class="open-hours">
			<i class="bi bi-clock"></i>
			<h4>Horarios de apertura:</h4>
			<p><?=$datos_empresa['horarios_atencion']?></p>
		  </div>

		  <div class="email">
			<i class="bi bi-envelope"></i>
			<h4>Correo electrónico:</h4>
			<p><?=$datos_empresa['correo_empresa']?></p>
		  </div>

		  <div class="phone">
			<i class="bi bi-phone"></i>
			<h4>Llamar:</h4>
			<p><?=$datos_empresa['numero_fijo']?></p>
		  </div>

		</div>

	  </div>

	  <div class="col-lg-8 mt-5 mt-lg-0">

		<form action="forms/contact.php" method="post" role="form" class="php-email-form">
		  <div class="row">
			<div class="col-md-6 form-group">
			  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" required>
			</div>
			<div class="col-md-6 form-group mt-3 mt-md-0">
			  <input type="email" class="form-control" name="email" id="email" placeholder="Tu correo electronico" required>
			</div>
		  </div>
		  <div class="form-group mt-3">
			<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
		  </div>
		  <div class="form-group mt-3">
			<textarea class="form-control" name="message" rows="8" placeholder="Mensaje" required></textarea>
		  </div>
		  <div class="my-3">
			<div class="loading">Cargando</div>
			<div class="error-message"></div>
			<div class="sent-message">Su mensaje ha sido enviado. Gracias.</div>
		  </div>
		  <div class="text-center"><button type="submit">Enviar mensaje</button></div>
		</form>

	  </div>

	</div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->
		<?php
			include('includes/footer.php');
		?>
	</body>
</html>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Pagina Producto</title>
		<link rel="stylesheet" href="..\resources\css\welcome.css" />
	</head>
	<body>
        
		<header>
			<h1>ZAPATERIA FRANS EL BUENO</h1>
		</header>

		<div class="container-title">Zapatos</div>

		<main>
			<div class="container-img">
				<img
					src="https://exclusiveshopperu.com/wp-content/uploads/Air-Jordan-1-Low-x-Travis-Scott-Black-Phantom.jpg"
					alt="imagen-producto"
				/>
			</div>
			<div class="container-info-product">
				<div class="container-price">
					<span>$100.00</span>
					<i class="fa-solid fa-angle-right"></i>
				</div>

				<div class="container-details-product">
					<div class="form-group">
						<label for="colour">Color</label>
						<select name="colour" id="colour">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="rojo">Rojo</option>
							<option value="blanco">Blanco</option>
							<option value="beige">Beige</option>
						</select>
					</div>
					<div class="form-group">
						<label for="size">Talla</label>
						<select name="size" id="size">
							<option disabled selected value="">
								Escoge una opción
							</option>
							<option value="40">40</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
						</select>
					</div>
					<button class="btn-clean">Limpiar</button>
				</div>

				<div class="container-add-cart">
					<div class="container-quantity">
						<input
							type="number"
							placeholder="1"
							value="1"
							min="1"
							class="input-quantity"
						/>
						<div class="btn-increment-decrement">
							<i class="fa-solid fa-chevron-up" id="increment"></i>
							<i class="fa-solid fa-chevron-down" id="decrement"></i>
						</div>
					</div>
					<button class="btn-add-to-cart">
						<i class="fa-solid fa-plus"></i>
						Añadir al carrito
					</button>
				</div>

				<div class="container-description">
					<div class="title-description">
						<h4>Descripción</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-description">
						<p>
							Lorem ipsum dolor, sit amet consectetur adipisicing
							elit. Laboriosam iure provident atque voluptatibus
							reiciendis quae rerum, maxime placeat enim cupiditate
							voluptatum, temporibus quis iusto. Enim eum qui delectus
							deleniti similique? Lorem, ipsum dolor sit amet
							consectetur adipisicing elit. Sint autem magni earum est
							dolorem saepe perferendis repellat ipsam laudantium cum
							assumenda quidem quam, vero similique? Iusto officiis
							quod blanditiis iste?
						</p>
					</div>
				</div>

				<div class="container-additional-information">
					<div class="title-additional-information">
						<h4>Información adicional</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-additional-information hidden">
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio laudantium, enim maxime asperiores consequatur officiis corrupti iste dolore, ipsam obcaecati eum pariatur veritatis minima nobis eveniet. Accusantium praesentium rem aliquam?</p>
					</div>
				</div>

				<div class="container-reviews">
					<div class="title-reviews">
						<h4>Reseñas</h4>
						<i class="fa-solid fa-chevron-down"></i>
					</div>
					<div class="text-reviews hidden">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi vero eveniet consectetur fuga, vitae et quae aspernatur obcaecati culpa excepturi cum veniam distinctio dolores recusandae cupiditate error animi similique itaque?</p>
					</div>
				</div>

				<div class="container-social">
					<span>Compartir</span>
					<div class="container-buttons-social">
						<a href="#"><i class="fa-solid fa-envelope"></i></a>
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-twitter"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
						<a href="#"><i class="fa-brands fa-pinterest"></i></a>
					</div>
				</div>
			</div>
		</main>

		<section class="container-related-products">
			<h2>Productos Relacionados</h2>
			<div class="card-list-products">
				<div class="card">
					<div class="card-img">
						<img
							src="https://media.revistagq.com/photos/650bfa46330e4dc6722c7d05/16:9/w_1920,c_limit/Nike-Dunk-Low-SP-University-Red.jpg"
							alt="producto-1"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Nike Dunk Low University Red</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$150.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="https://exclusiveshopperu.com/wp-content/uploads/2019/04/Jordan-Retro-1-High-OG-1.jpg"
							alt="producto-2"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Air Jordan 1 Retro High Sports Illustrated</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$200.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="https://www.badtoro.es/wp-content/uploads/2023/01/zapatillas-bad-bunny-101wiq-1.jpg"
							alt="producto-3"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>Adidas Forum Bad Bunny "The First Café"</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$300.00</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img">
						<img
							src="https://rukminim2.flixcart.com/image/850/1000/xif0q/shoe/l/i/d/-original-imagtbteehhvvkfg.jpeg?q=90&crop=false"
							alt="producto-4"
						/>
					</div>
					<div class="info-card">
						<div class="text-product">
							<h3>New Balance 550 Sneakers For Men</h3>
							<p class="category">Footwear, Sneakers</p>
						</div>
						<div class="price">$400.00</div>
					</div>
				</div>
			</div>
		</section>

		<footer>
			<p></p>
		</footer>

		<script src="https://kit.fontawesome.com/daaa9c6519.js" crossorigin="anonymous"></script>
    <script src="..\resources\js\welcome.js"></script>
</body>
</html>




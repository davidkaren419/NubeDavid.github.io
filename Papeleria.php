<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Papelería "Papelería rosa"</title>
  <style>
    :root{
      /* Botón Finalizar Compra */
.btn-finalizar {
  background: linear-gradient(135deg, #ffa6d1, #ff74b8);
  color: white;
  font-size: 15px;
  padding: 10px 18px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
  font-weight: 700;
  letter-spacing: 0.5px;
  box-shadow: 0 4px 10px rgba(255, 120, 170, 0.4);
  transition: all 0.3s ease;
  margin-top: 15px;
}

.btn-finalizar:hover {
  background: linear-gradient(135deg, #ff74b8, #ff4fa2);
  box-shadow: 0 6px 14px rgba(255, 90, 160, 0.5);
  transform: translateY(-2px);
}

.btn-finalizar:active {
  transform: translateY(0);
  box-shadow: 0 3px 7px rgba(255, 120, 170, 0.3);
}

      --bg:#f7f7fb;
      --primary:#FF9EE3; 
      --accent:#ffc4f;
      --card:#ffffff;
      --muted:#6b6b76;
      --shadow: 0 6px 18px rgba(45,45,60,0.08);
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;background:linear-gradient(180deg,var(--bg),#fff);color:#222}
    header{background:linear-gradient(90deg,var(--primary),#a52a6a);color:#fff;padding:18px}
    .container{max-width:1100px;margin:20px auto;padding:0 16px}
    .brand{display:flex;align-items:center;gap:12px}
    .brand h1{font-size:20px;margin:0}
    nav{margin-top:8px}
    nav a{color:rgba(255,255,255,0.95);text-decoration:none;margin-right:14px;font-weight:600}

    /* Login overlay */
    .overlay{position:fixed;inset:0;background:rgba(10,10,12,0.45);display:flex;align-items:center;justify-content:center;z-index:100}
    .login-card{width:360px;background:var(--card);border-radius:12px;padding:22px;box-shadow:var(--shadow)}
    .login-card h2{margin:0 0 8px 0;color:var(--primary)}
    .field{margin-top:10px}
    label{display:block;font-size:13px;color:var(--muted);margin-bottom:6px}
    input[type=text], input[type=password]{width:100%;padding:10px;border:1px solid #e6e6ee;border-radius:8px}
    .login-actions{display:flex;gap:10px;margin-top:14px}
    button.primary{background:linear-gradient(90deg,var(--primary),#9a265f);color:#fff;border:none;padding:10px 14px;border-radius:8px;cursor:pointer;font-weight:700}
    button.ghost{background:transparent;border:1px solid #eee;padding:10px 12px;border-radius:8px;cursor:pointer}
    .error{color:#b00020;font-size:13px;margin-top:8px;display:none}

    /* Layout */
    .hero{background:linear-gradient(180deg,rgba(255,182,213,0.12),transparent);padding:20px;border-radius:10px;margin-top:18px}
    .hero p{margin:6px 0 0 0;color:var(--muted)}

    .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px;margin-top:18px}
    .card{background:var(--card);border-radius:12px;padding:12px;box-shadow:var(--shadow);display:flex;flex-direction:column}
    .thumb{height:110px;border-radius:8px;background:linear-gradient(180deg,#fff,#f2f4f8);display:flex;align-items:center;justify-content:center;margin-bottom:8px}
    .thumb svg{width:64px;height:64px;opacity:0.9}
    .prod-img {
  width: 100px; 
  height: 100px;
  object-fit: contain;
  border-radius: 8px;
}

    .prod-title{font-weight:700;margin:6px 0 4px 0}
    .price{font-weight:800;color:var(--primary)}
    .meta{font-size:13px;color:var(--muted);margin-top:auto;display:flex;align-items:center;justify-content:space-between}
    .btn-small{padding:8px 10px;border-radius:8px;border:none;cursor:pointer}
    .add{background:linear-gradient(90deg,#ffd6e8,#ffb6d5);font-weight:700}

    footer{margin-top:28px;padding:18px 0;text-align:center;color:var(--muted)}

    /* Responsive */
    @media (max-width:520px){.login-card{width:92%}}

    /* Simple cart indicator */
    .topbar{display:flex;align-items:center;justify-content:space-between}
    .cart{background:#fff;border-radius:999px;padding:6px 10px;font-weight:700;color:var(--primary);box-shadow:0 5px 12px rgba(0,0,0,0.06)}



  </style>
</head>
<body>
  <div class="overlay" id="loginOverlay" aria-hidden="false">
    <div class="login-card" role="dialog" aria-labelledby="loginTitle">
      <h2 id="loginTitle">α¢¢єѕσ α ραρєℓєяια яσѕα 🌸</h2>
      <p style="margin:0 0 10px 0;color:var(--muted);font-size:14px">Introduce usuario y contraseña para entrar</p>
      <form id="loginForm" onsubmit="return false;">
        <div class="field">
          <label for="username">Usuario</label>
          <input id="username" name="username" type="text" autocomplete="username" required />
        </div>
        <div class="field">
          <label for="password">Contraseña</label>
          <input id="password" name="password" type="password" autocomplete="current-password" required />
        </div>
        <div class="login-actions">
          <button class="primary" id="btnLogin">Entrar</button>
        </div>
        <div class="error" id="loginError">Usuario o contraseña incorrectos</div>
      </form>
    </div>
  </div>

  <header>
    <div class="container topbar">
      <div class="brand">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="4" fill="#fff"/><path d="M7 11h10v2H7z" fill="#d63384"/></svg>
        <div>
          <h1>🍥𝓟𝓪𝓹𝓮𝓵𝓮𝓻𝓲𝓪 𝓻𝓸𝓼𝓪🍥</h1>
          <div style="font-size:13px;opacity:0.9">Productos esenciales para escuela y oficina</div>
        </div>
      </div>
      <div style="display:flex;gap:14px;align-items:center">
        <nav aria-label="menu">
          <a href="#inicio">Inicio</a>
          <a href="#sobre">Sobre nosotros</a>
          <a href="#serv">Servicios</a>
          <a href="#prods">Productos</a>
          <a href="#ubic">Ubicación</a>
          <a href="#cont">Contacto</a>
        </nav>
        <div class="cart" id="cartCount">Carrito: 0 — Total: $0</div>
        <button onclick="enviarCompra()" class="btn-finalizar">
  ƒιηαℓιzαя ¢σмρяα ִֶָ𓂃 ࣪˖ ִֶָ🐇་༘࿐
</button>



      </div>
    </div>
  </header>

  <main class="container" id="inicio" aria-live="polite">
    <section class="hero">
      <h2>вιєηνєηι∂σ α ℓα ραρєℓєяια яσѕα 𓏲 ๋࣭ ࣪ ˖🎐 </h2>
      <p>Encuentra los artículos esenciales: útiles escolares, material de oficina y más. Selecciona productos y agrégalos al carrito.</p>
    </section>

    <section id="prods">
      <h3 style="margin-top:18px">Productos destacados (20)</h3>
      <div class="grid" id="productsGrid">
      </div>
    </section>

    <section id="sobre" style="margin-top:22px">
      <h3>Sobre nosotros</h3>
      <p style="color:var(--muted)">Somos una papelería local dedicada a ofrecer materiales de calidad para estudiantes y oficinas. Horario: Lun-Sab 9:00 - 19:00.</p>
    </section>

    <section id="serv" style="margin-top:12px">
      <h3>Servicios</h3>
      <ul style="color:var(--muted)">
        <li>Corte y encuadernado básico</li>
        <li>Venta por volumen para escuelas</li>
        <li>Pedidos y reservas telefónicas</li>
      </ul>
    </section>

    <section id="ubic" style="margin-top:12px">
      <h3>Ubicación</h3>
      <p style="color:var(--muted)">Avenida de la Paz 123, Col. San Angel Centro — Tel: 55-1234-5678</p>
    </section>

    <section id="cont" style="margin-top:12px">
      <h3>Contacto</h3>
      <p style="color:var(--muted)">Email: Puchainitarosa@abierta.com</p>
    </section>

    <footer>
      <small>© Tu Papelería 2025 — Todos los derechos reservados</small>
    </footer>
  </main>

  <script>
// Productos
const productos = [
  {
    id: 1,
    nombre: "Cuaderno profesional",
    desc: "100 hojas raya",
    precio: 45,
    img: "Cuaderno.jpg"
  },
  {
    id: 2,
    nombre: "Pluma negra",
    desc: "Punta fina",
    precio: 12,
    img: "pluma.jpg"
  },
  {
    id: 3,
    nombre: "Lápiz del Nº2",
    desc: "Madera premium",
    precio: 6,
    img: "lapiz.jpg"
  },
  {
    id: 4,
    nombre: "Borrador blanco",
    desc: "Suave y sin manchas",
    precio: 10,
    img: "goma.jpg"
  },
  {
    id: 5,
    nombre: "Tijeras escolares",
    desc: "Punta roma",
    precio: 25,
    img: "tijeras.jpg"
  },
  {
    id: 6,
    nombre: "Regla 30 cm",
    desc: "Plástica",
    precio: 17,
    img: "regla.jpg"
  },
  {
    id: 7,
    nombre: "Pegamento en barra",
    desc: "20 g",
    precio: 15,
    img: "prit.jpg"
  },
  {
    id: 8,
    nombre: "Marcador negro",
    desc: "Permanente",
    precio: 18,
    img: "marcador.jpg"
  },
  {
    id: 9,
    nombre: "Colores 12 pzas",
    desc: "Caja escolar",
    precio: 35,
    img: "colores.jpg"
  },
  {
    id: 10,
    nombre: "Folder tamaño carta",
    desc: "Color azul",
    precio: 5,
    img: "folder.jpg"
  },
  {
    id: 11,
    nombre: "Engrapadora mini",
    desc: "Incluye grapas",
    precio: 32,
    img: "engrapadora.jpg"
  },
  {
    id: 12,
    nombre: "Paquete de grapas",
    desc: "Caja 500 pzas",
    precio: 30,
    img: "grapas.jpg"
  },
  {
    id: 13,
    nombre: "Corrector líquido",
    desc: "Alta cobertura",
    precio: 20,
    img: "corrector.jpg"
  },
  {
    id: 14,
    nombre: "Cartulina blanca",
    desc: "Tamaño carta",
    precio: 8,
    img: "cartulina.jpg"
  },
  {
    id: 15,
    nombre: "Plumas de colores",
    desc: "Paquete 10 pzas",
    precio: 30,
    img: "plumas.jpg"
  },
  {
    id: 16,
    nombre: "Block de notas",
    desc: "Color amarillo",
    precio: 18,
    img: "block.jpg"
  },
  {
    id: 17,
    nombre: "Bolsa de clips",
    desc: "50 piezas",
    precio: 12,
    img: "clips.jpg"
  },
  {
    id: 18,
    nombre: "Calculadora básica",
    desc: "8 dígitos",
    precio: 50,
    img: "calculadora.jpg"
  },
  {
    id: 19,
    nombre: "Marcatextos amarillo",
    desc: "Punta biselada",
    precio: 16,
    img: "marcatextos.jpg"
  },
  {
    id: 20,
    nombre: "Hoja tamaño carta",
    desc: "Paquete 100 hojas",
    precio: 40,
    img: "hojas.jpg"
  }
];



const grid = document.getElementById('productsGrid');
const cartCountEl = document.getElementById('cartCount');
const overlay = document.getElementById('loginOverlay');
const loginBtn = document.getElementById('btnLogin');
const loginForm = document.getElementById('loginForm');
const loginError = document.getElementById('loginError');

const cart = new Map();

function updateCartUI(){
  let totalItems = 0;
  let totalPrice = 0;
  for(const [id, qty] of cart.entries()){
    totalItems += qty;
    const prod = productos.find(p=>p.id===id);
    if(prod) totalPrice += prod.precio * qty;
  }
  cartCountEl.textContent = `Carrito: ${totalItems} — Total: $${totalPrice.toFixed(2)}`;
}

function removeFromCart(id){
  if(!cart.has(id)) return;
  const current = cart.get(id);
  if(current > 1) cart.set(id, current - 1);
  else cart.delete(id);
  updateCartUI();
}


grid.innerHTML = '';
productos.forEach(p=>{
  const card = document.createElement('article');
  card.className = 'card';
  card.innerHTML = `
<div class="thumb">
  <img src="${p.img}" alt="${p.nombre}" class="prod-img">
</div>
<div class="prod-title">${p.nombre}</div>
<div style="font-size:13px;color:var(--muted)">${p.desc}</div>
<div style="margin-top:8px;display:flex;align-items:center;justify-content:space-between">
  <div class="price">$${p.precio.toFixed(2)}</div>
  <div style="display:flex;gap:8px">
    <button class="btn-small add" data-id="${p.id}" aria-label="Añadir ${p.nombre}">Añadir</button>
    <button class="btn-small remove" data-id="${p.id}" aria-label="Quitar ${p.nombre}">Quitar</button>
  </div>
</div>

  `;
  grid.appendChild(card);
});


grid.addEventListener('click', (e)=>{
  const addBtn = e.target.closest('button.add');
  if(addBtn){
    const id = Number(addBtn.dataset.id);
    cart.set(id, (cart.get(id)||0)+1);
    updateCartUI();
    addBtn.textContent = '✓ Añadido';
    setTimeout(()=> addBtn.textContent = 'Añadir',900);
    return;
  }
  const remBtn = e.target.closest('button.remove');
  if(remBtn){
    const id = Number(remBtn.dataset.id);
    removeFromCart(id);
    remBtn.textContent = '−';
    setTimeout(()=> remBtn.textContent = 'Quitar',600);
    return;
  }
});


function succeedLogin(){
  overlay.style.display = 'none';
  overlay.setAttribute('aria-hidden','true');
}


loginForm.addEventListener('submit', (ev)=>{
  ev.preventDefault();
  const u = document.getElementById('username').value.trim();
  const p = document.getElementById('password').value.trim();
  if(u === 'rosa' && p === 'lesserafim'){
    succeedLogin();
  } else {
    loginError.style.display = 'block';
    setTimeout(()=> loginError.style.display = 'none', 2200);
  }
});

// También responder a clic en el botón (por accesibilidad)
loginBtn.addEventListener('click', (ev)=>{
  ev.preventDefault();
  loginForm.dispatchEvent(new Event('submit', {cancelable: true, bubbles: true}));
});


updateCartUI();

function enviarCompra() {
  const productosEnviar = [];

  for (const [id, qty] of cart.entries()) {
    const p = productos.find(prod => prod.id === id);
    productosEnviar.push({
      id: p.id,
      nombre: p.nombre,
      precio: p.precio,
      cantidad: qty
    });
  }

  let total = 0;
  productosEnviar.forEach(p => total += p.precio * p.cantidad);

  
  const form = document.createElement("form");
  form.method = "POST";
  form.action = "guardar_venta_normal.php"; 

  
  const inputProductos = document.createElement("input");
  inputProductos.type = "hidden";
  inputProductos.name = "productos";
  inputProductos.value = JSON.stringify(productosEnviar);

  const inputTotal = document.createElement("input");
  inputTotal.type = "hidden";
  inputTotal.name = "total";
  inputTotal.value = total;

  form.appendChild(inputProductos);
  form.appendChild(inputTotal);
  document.body.appendChild(form);

  form.submit(); 
}


</script>
</body>
</html>

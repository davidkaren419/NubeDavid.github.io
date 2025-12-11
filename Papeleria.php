<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Papelería "Papelería rosa"</title>
  <style>
    :root{
      .btn-edit {
    background: #ffaad9;
    border: none;
    padding: 8px 10px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
    color: white;
    transition: 0.2s;
}

.btn-edit:hover {
    background: #ff7fc4;
    transform: scale(1.05);
}

.btn-edit:active {
    transform: scale(0.95);
}

      .btn-actualizar {
    background: linear-gradient(135deg, #ffaad9, #ff7fc4);
    color: white;
    font-weight: bold;
    border: none;
    padding: 10px 16px;
    font-size: 14px;
    border-radius: 14px;
    cursor: pointer;
    width: 100%;
    margin-top: 8px;
    transition: 0.25s ease-in-out;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    box-shadow: 0 2px 6px rgba(255, 130, 180, 0.35);
}

/* Icono opcional */
.btn-actualizar::before {
    content: "✎"; /* Ícono lápiz */
    font-size: 15px;
}

.btn-actualizar:hover {
    transform: scale(1.05);
    box-shadow: 0 3px 8px rgba(255, 130, 180, 0.45);
}

.btn-actualizar:active {
    transform: scale(0.95);
}

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
<div style="text-align:center; margin-top:20px;">
    <input 
        type="text" 
        id="searchInput" 
        placeholder="Buscar producto..." 
        style="
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
            border: 2px solid #ff7eb3;
        "
    >
    <button 
        id="searchBtn"
        style="
            padding: 10px 18px;
            margin-left: 8px;
            background: #ff7eb3;
            border: none;
            color: white;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
        "
    >
        Buscar
    </button>
</div>

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
/* ---------- Productos (vienen desde productos.php) ---------- */
let productos = [];

fetch("productos.php")
  .then(res => {
    if (!res.ok) throw new Error("Error al obtener productos: " + res.status);
    return res.json();
  })
  .then(data => {
    productos = data;
    mostrarProductos();
  })
  .catch(err => {
    console.error(err);
    // opcional: mostrar mensaje al usuario
    const grid = document.getElementById("productsGrid");
    if (grid) grid.innerHTML = "<p style='color:#b00020'>No se pudieron cargar los productos.</p>";
  });

/* ---------- Elementos globales ---------- */
const grid = document.getElementById('productsGrid');
const cartCountEl = document.getElementById('cartCount');
const overlay = document.getElementById('loginOverlay');
const loginBtn = document.getElementById('btnLogin');
const loginForm = document.getElementById('loginForm');
const loginError = document.getElementById('loginError');

const cart = new Map(); // id -> cantidad

/* ---------- Funciones de edición (overlay) ---------- */
function editarProducto(id) {
  const p = productos.find(item => Number(item.id) === Number(id));
  if (!p) {
    console.error("Producto no encontrado para editar:", id);
    return;
  }

  // Asegúrate de que los campos y overlay existan en el DOM
  const editOverlay = document.getElementById("editOverlay");
  const editId = document.getElementById("editId");
  const editNombre = document.getElementById("editNombre");
  const editDesc = document.getElementById("editDesc");
  const editPrecio = document.getElementById("editPrecio");

  if (!editOverlay || !editId || !editNombre || !editDesc || !editPrecio) {
    console.error("Campos de edición faltan en el DOM.");
    return;
  }

  editId.value = p.id;
  editNombre.value = p.nombre || "";
  editDesc.value = p.descripcion || p.desc || "";
  editPrecio.value = p.precio || 0;

  editOverlay.style.display = "flex";
}

function cerrarEditar() {
  const editOverlay = document.getElementById("editOverlay");
  if (editOverlay) editOverlay.style.display = "none";
}

/* ---------- Mostrar productos (diseño .card) ---------- */
function mostrarProductos() {
  const grid = document.getElementById("productsGrid");
  if (!grid) {
    console.error("No existe el elemento #productsGrid en el DOM.");
    return;
  }
  grid.innerHTML = "";

  productos.forEach(p => {
    // Aseguramos las propiedades por si vienen con otros nombres
    const img = p.img || p.image || "placeholder.png";
    const nombre = p.nombre || p.name || "Sin nombre";
    const desc = p.descripcion || p.desc || p.description || "";
    const precio = Number(p.precio || p.price || 0).toFixed(2);

    grid.innerHTML += `
      <article class="card" data-id="${p.id}">
        <div class="thumb">
          <img src="${img}" alt="${nombre}" class="prod-img">
        </div>

        <div class="prod-title">${nombre}</div>

        <div style="font-size:13px;color:var(--muted)">
          ${desc}
        </div>

        <div style="margin-top:8px;display:flex;align-items:center;justify-content:space-between">
          <div class="price">$${precio}</div>

          <div style="display:flex;gap:8px;align-items:center">
            <button class="btn-small add" data-id="${p.id}" aria-label="Añadir ${nombre}">Añadir</button>
            <button class="btn-small remove" data-id="${p.id}" aria-label="Quitar ${nombre}">Quitar</button>
            <button class="btn-edit" data-id="${p.id}" title="Editar">✏</button>
          </div>
        </div>
      </article>
    `;
  });
}

/* ---------- Carrito: actualización UI ---------- */
function updateCartUI(){
  let totalItems = 0;
  let totalPrice = 0;
  for(const [id, qty] of cart.entries()){
    totalItems += qty;
    const prod = productos.find(p => Number(p.id) === Number(id));
    if(prod) totalPrice += Number(prod.precio || prod.price || 0) * qty;
  }
  cartCountEl.textContent = `Carrito: ${totalItems} — Total: $${totalPrice.toFixed(2)}`;
}

/* ---------- Eliminar / disminuir del carrito ---------- */
function removeFromCart(id){
  if(!cart.has(id)) return;
  const current = cart.get(id);
  if(current > 1) cart.set(id, current - 1);
  else cart.delete(id);
  updateCartUI();
}

/* ---------- Delegación de eventos en el grid ---------- */
grid.addEventListener('click', (e) => {
  // Prioridad: si hacen click en el botón EDIT (o su icono)
  const btnEdit = e.target.closest('.btn-edit');
  if (btnEdit) {
    const id = btnEdit.dataset.id || btnEdit.getAttribute('data-id');
    // si no tiene dataset, puede venir del atributo creado en innerHTML
    editarProducto(id);
    return;
  }

  const addBtn = e.target.closest('button.add');
  if(addBtn){
    const id = Number(addBtn.dataset.id);
    if (!id) return;
    cart.set(id, (cart.get(id)||0)+1);
    updateCartUI();
    addBtn.textContent = '✓ Añadido';
    setTimeout(()=> addBtn.textContent = 'Añadir',900);
    return;
  }

  const remBtn = e.target.closest('button.remove');
  if(remBtn){
    const id = Number(remBtn.dataset.id);
    if (!id) return;
    removeFromCart(id);
    remBtn.textContent = '−';
    setTimeout(()=> remBtn.textContent = 'Quitar',600);
    return;
  }
});

/* ---------- Login (mantengo tu lógica) ---------- */
function succeedLogin(){
  if (overlay) {
    overlay.style.display = 'none';
    overlay.setAttribute('aria-hidden','true');
  }
}

if (loginForm) {
  loginForm.addEventListener('submit', (ev)=>{
    ev.preventDefault();
    const u = document.getElementById('username').value.trim();
    const p = document.getElementById('password').value.trim();
    if(u === 'rosa' && p === 'lesserafim'){
      succeedLogin();
    } else {
      if (loginError) loginError.style.display = 'block';
      setTimeout(()=> { if (loginError) loginError.style.display = 'none'; }, 2200);
    }
  });
}
if (loginBtn) {
  loginBtn.addEventListener('click', (ev)=>{
    ev.preventDefault();
    if (loginForm) loginForm.dispatchEvent(new Event('submit', {cancelable: true, bubbles: true}));
  });
}

/* ---------- Inicializar UI ---------- */
updateCartUI();

/* ---------- Finalizar compra (envío) ---------- */
function enviarCompra() {
  if (cart.size === 0) {
    alert("El carrito está vacío.");
    return;
  }

  const productosEnviar = [];

  for (const [id, qty] of cart.entries()) {
    const p = productos.find(prod => Number(prod.id) === Number(id));
    if (!p) continue;
    productosEnviar.push({
      id: p.id,
      nombre: p.nombre || p.name,
      precio: Number(p.precio || p.price || 0),
      cantidad: qty
    });
  }

  let total = productosEnviar.reduce((s, it) => s + (it.precio * it.cantidad), 0);

  // Crear formulario y enviarlo
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

/* ---------- Exporto funciones al scope global para que onclick inline funcione si lo usas ---------- */
window.editarProducto = editarProducto;
window.cerrarEditar = cerrarEditar;
window.enviarCompra = enviarCompra;
</script>

<script>
document.getElementById("searchBtn").addEventListener("click", function () {

    let filtro = document.getElementById("searchInput").value.toLowerCase();

    // Productos reales en pantalla
    let productos = document.querySelectorAll("#productsGrid .card");

    productos.forEach(p => {
        let nombre = p.querySelector(".prod-title").textContent.toLowerCase();

        if (nombre.includes(filtro) || filtro.trim() === "") {
            p.style.display = "block";
        } else {
            p.style.display = "none";
        }
    });

});
</script>
<div id="editOverlay" class="overlay" style="display:none;">
  <div class="login-card">
      <h2>Actualizar producto</h2>

      <form id="editForm" method="POST" action="actualizar.php">
          <input type="hidden" id="editId" name="id">

          <label>Nombre:</label>
          <input type="text" id="editNombre" name="nombre" required>

          <label>Descripción:</label>
          <input type="text" id="editDesc" name="descripcion" required>

          <label>Precio:</label>
          <input type="number" id="editPrecio" name="precio" step="0.01" required>

          <button class="primary">Guardar cambios</button>
      </form>

      <button onclick="cerrarEditar()" style="margin-top:10px;">Cancelar</button>
  </div>
</div>


</body>
</html>


function getCartItems() {
  return JSON.parse(localStorage.getItem('cart')) || [];
}

function saveCartItems(cartItems) {
  localStorage.setItem('cart', JSON.stringify(cartItems));
}

function addToCart(item) {
  const cartItems = getCartItems();
  const existingItem = cartItems.find(cartItem => cartItem.id === item.id);

  if (existingItem) {
    existingItem.quantity += 1;
  } else {
    cartItems.push({ ...item, quantity: 1 });
  }

  saveCartItems(cartItems);
  updateTotalPrice();
}

function removeFromCart(itemId) {
  let cartItems = getCartItems();
  cartItems = cartItems.filter(cartItem => cartItem.id !== itemId);
  saveCartItems(cartItems);
  updateCartDisplay();
  updateTotalPrice();
}

function updateCartDisplay() {
  const cartItems = getCartItems();
  const cartItemsContainer = document.getElementById('cart-items');

  if (cartItemsContainer) {
    cartItemsContainer.innerHTML = ''; 

    cartItems.forEach((item, index) => {
      const itemDiv = document.createElement('div');
      itemDiv.classList.add('cart-item');
      itemDiv.innerHTML = `
        <div class="cart-item-content">
          <img src="images/${item.id}.png" alt="${item.name}" class="cart-item-img"> <!-- Проверить путь к изображению -->
          <div class="cart-item-info">
            <h4>${item.name}</h4>
            <p>Цена: $${item.price.toFixed(2)}</p>
            <div class="cart-item-quantity">
              <button class="quantity-btn" onclick="decreaseQuantity(${index})">-</button>
              <input type="number" value="${item.quantity}" min="1" class="quantity-input" onchange="changeQuantity(${index}, this.value)">
              <button class="quantity-btn" onclick="increaseQuantity(${index})">+</button>
            </div>
            <p>Всего: $${(item.price * item.quantity).toFixed(2)}</p>
          </div>
          <button class="remove-item" onclick="removeFromCart(${item.id})">Удалить</button>
        </div>
      `;

      cartItemsContainer.appendChild(itemDiv);
    });
  }
}

function updateTotalPrice() {
  const cartItems = getCartItems();
  const totalPrice = cartItems.reduce((total, item) => total + item.price * item.quantity, 0);
  
  const totalPriceElement = document.getElementById('total-price');
  if (totalPriceElement) {
    totalPriceElement.textContent = `$${totalPrice.toFixed(2)}`;
  }
}

document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    const itemElement = e.target.closest('.item');
    const item = {
      id: parseInt(itemElement.getAttribute('data-id')),
      name: itemElement.getAttribute('data-name'),
      price: parseFloat(itemElement.getAttribute('data-price'))
    };

    addToCart(item);
    alert(`${item.name} добавлен в корзину!`);
  });
});

if (window.location.pathname.includes('cart.php')) {
  updateCartDisplay();
  updateTotalPrice();
}

function increaseQuantity(index) {
  const cartItems = getCartItems();
  cartItems[index].quantity += 1;
  saveCartItems(cartItems);
  updateCartDisplay();
  updateTotalPrice();
}

function decreaseQuantity(index) {
  const cartItems = getCartItems();
  if (cartItems[index].quantity > 1) {
    cartItems[index].quantity -= 1;
  }
  saveCartItems(cartItems);
  updateCartDisplay();
  updateTotalPrice();
}

function changeQuantity(index, value) {
  const cartItems = getCartItems();
  const newQuantity = parseInt(value);
  if (newQuantity > 0) {
    cartItems[index].quantity = newQuantity;
    saveCartItems(cartItems);
    updateCartDisplay();
    updateTotalPrice();
  }
}

document.getElementById('search-input').addEventListener('keypress', function(e) {
  if (e.key === 'Enter') {
    e.preventDefault();
    filterItems();
  }
});

function filterItems() {
  const searchQuery = document.getElementById('search-input').value.toLowerCase();
  const items = document.querySelectorAll('.item');

  items.forEach(item => {
    const itemName = item.getAttribute('data-name') ? item.getAttribute('data-name').toLowerCase() : '';

    if (itemName.includes(searchQuery)) {
      item.classList.remove('hidden');
    } else {
      item.classList.add('hidden');
    }
  });
}



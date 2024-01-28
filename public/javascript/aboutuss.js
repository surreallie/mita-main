let loginForm = document.querySelector('.login-form');
document.querySelector('#user-btn').onclick = () =>{
    loginForm.classList.toggle('active');
}


window.onscroll = () =>{
    loginForm.classList.remove('active');
}

let videoList = document.querySelectorAll('.video-list-container .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});



var cartVisible = false;


if(document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready();
}

function ready(){
    

    var buttonsDeleteItem = document.getElementsByClassName('btn-delete');
    for(var i=0;i<buttonsDeleteItem.length; i++){
        var button = buttonsDeleteItem[i];
        button.addEventListener('click',deleteCartItem);
    }


    var buttonsAddQuantity = document.getElementsByClassName('add-amount');
    for(var i=0;i<buttonsAddQuantity.length; i++){
        var button = buttonsAddQuantity[i];
        button.addEventListener('click',increaseQuantity);
    }


    var buttonsSubtractQuantity = document.getElementsByClassName('subtract-amount');
    for(var i=0;i<buttonsSubtractQuantity.length; i++){
        var button = buttonsSubtractQuantity[i];
        button.addEventListener('click',decreaseQuantity);
    }


    var buttonsAddToCart = document.getElementsByClassName('button-item');
    for(var i=0; i<buttonsAddToCart.length;i++){
        var button = buttonsAddToCart[i];
        button.addEventListener('click', addToCartClicked);
    }


    document.getElementsByClassName('btn-pay')[0].addEventListener('click',checkoutClicked)
}

function checkoutClicked(){
    alert("Thank you for your purchase");

    var cartItems = document.getElementsByClassName('cart-items')[0];
    while (cartItems.hasChildNodes()){
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal();
    hideCart();
}

function addToCartClicked(event){
    var button = event.target;
    var item = button.parentElement;
    var title = item.getElementsByClassName('title-item')[0].innerText;
    var price = item.getElementsByClassName('price-item')[0].innerText;
    var imageSrc = item.getElementsByClassName('img-item')[0].src;
    console.log(imageSrc);

    addItemToCart(title, price, imageSrc);

    makeVisibleCart();
}


function makeVisibleCart(){
    cartVisible = true;
    var cart = document.getElementsByClassName('cart')[0];
    cart.style.marginRight = '0';
    cart.style.opacity = '1';

    var items =document.getElementsByClassName('instruments-items')[0];
    items.style.width = '60%';
}


function addItemToCart(title, price, imageSrc){
    var item = document.createElement('div');
    item.classList.add = ('item');
    var itemsCart = document.getElementsByClassName('cart-items')[0];


    var ItemNames = itemsCart.getElementsByClassName('cart-item-title');
    for(var i=0;i < ItemNames.length;i++){
        if(ItemNames[i].innerText==title){
            alert("The item is already in the cart");
            return;
        }
    }

    var itemCartContent = `
        <div class="cart-item">
            <img src="${imageSrc}" width="80px" alt="">
            <div class="cart-item-details">
                <span class="cart-item-title">${title}</span>
                <div class="quantity-selector">
                    <i class="fa-solid fa-minus subtract-amount"></i>
                    <input type="text" value="1" class="cart-item-amount" disabled>
                    <i class="fa-solid fa-plus add-amount"></i>
                </div>
                <span class="cart-item-price">${price}</span>
            </div>
            <button class="btn-delete">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    `
    item.innerHTML = itemCartContent;
    itemsCart.append(item);


     item.getElementsByClassName('btn-delete')[0].addEventListener('click', deleteCartItem);


    var buttonSubtractQuantity = item.getElementsByClassName('subtract-amount')[0];
    buttonSubtractQuantity.addEventListener('click',decreaseQuantity);


    var buttonAddQuantity = item.getElementsByClassName('add-amount')[0];
    buttonAddQuantity.addEventListener('click',increaseQuantity);


    updateCartTotal();
}

function increaseQuantity(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('cart-item-amount')[0].value);
    var amountActual = selector.getElementsByClassName('cart-item-amount')[0].value;
    amountActual++;
    selector.getElementsByClassName('cart-item-amount')[0].value = amountActual;
    updateCartTotal();
}

function decreaseQuantity(event){
    var buttonClicked = event.target;
    var selector = buttonClicked.parentElement;
    console.log(selector.getElementsByClassName('cart-item-amount')[0].value);
    var amountActual = selector.getElementsByClassName('cart-item-amount')[0].value;
    amountActual--;
    if(amountActual>=1){
        selector.getElementsByClassName('cart-item-amount')[0].value = amountActual;
        updateCartTotal();
    }
}


function deleteCartItem(event){
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();

    updateCartTotal();


    hideCart();
}

function hideCart(){
    var cartItems = document.getElementsByClassName('cart-items')[0];
    if(cartItems.childElementCount==0){
        var cart = document.getElementsByClassName('cart')[0];
        cart.style.marginRight = '-100%';
        cart.style.opacity = '0';
        cartVisible = false;
    
        var items =document.getElementsByClassName('instruments-items')[0];
        items.style.width = '100%';
    }
}

function updateCartTotal(){

    var cartContainer = document.getElementsByClassName('cart')[0];
    var cartItems = cartContainer.getElementsByClassName('cart-item');
    var total = 0;

    for(var i=0; i< cartItems.length;i++){
        var item = cartItems[i];
        var priceElemento = item.getElementsByClassName('cart-item-price')[0];

        var price = parseFloat(priceElemento.innerText.replace('₱','').replace(',',''));
        var amountItem = item.getElementsByClassName('cart-item-amount')[0];
        console.log(price);
        var amount = amountItem.value;
        total = total + (price * amount);
    }
    total = Math.round(total * 100)/100;

    document.getElementsByClassName('cart-price-total')[0].innerText = '₱'+total.toLocaleString("en") + ".00";

}
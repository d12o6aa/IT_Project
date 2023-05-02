/*
// Select necessary elements
const favIcon = document.querySelector('#fav-icon');
const favcart = document.querySelector('.fav-cart');
const closeCart = document.querySelector('#close-cart');

// Add event listener to open and close favorite cart
favIcon.addEventListener("click",() => {
    favcart.classList.add("active");
});
closeCart.addEventListener("click",() => {
  favcart.classList.remove("active");
});

// Add event listener to all "fav" buttons
let addCart = document.querySelectorAll(".fav");
addCart.forEach(btn => {
    btn.addEventListener("click", () => {
        // Get product details
        let product = btn.parentElement;
        let title = product.querySelector(".products-title").innerHTML;
        let price = product.querySelector(".price").innerHTML;
        let imgSrc = product.querySelector(".products-image").src;

        // Create new favorite box element
        let cartBoxElemnt = `
            <div class="fav-box">
                <img src="${imgSrc}" alt="" class="fav-img">
                <div class="fav-detail">
                    <div class="fav-pro-title">${title}</div>
                    <div class="fav-pro-price">${price}</div>
                </div>
                <i class='bx bxs-trash-alt fav-remove'></i>
            </div>
        `;
        let newNode = document.createElement("div");
        newNode.innerHTML = cartBoxElemnt;

        // Append new favorite box element to favorite icon content
        const cartContent = favcart.querySelector(".fav-content");
        cartContent.appendChild(newNode);

        // Add event listener to new "fav-remove" button
        let removeCartItem = newNode.querySelector(".fav-remove");
        removeCartItem.addEventListener("click", () => {
            newNode.remove();
        });
    });
});

// Add event listener to all "fav-remove" buttons
let removeCartButtons = document.querySelectorAll(".fav-remove");
removeCartButtons.forEach(btn => {
    btn.addEventListener("click", () => {
        // Remove parent element of "fav-remove" button (i.e. favorite box)
        btn.parentElement.remove();
    });
});
*/
// Select necessary elements
const favIcon = document.querySelector('#fav-icon');
const favcart = document.querySelector('.fav-cart');
const closeCart = document.querySelector('#close-cart');

// Add event listener to open and close favorite cart
favIcon.addEventListener("click", () => {
  favcart.classList.add("active");
});
closeCart.addEventListener("click", () => {
  favcart.classList.remove("active");
});

// Add event listener to all "fav" buttons
let addCart = document.querySelectorAll(".fav");
addCart.forEach(btn => {
  btn.addEventListener("click", () => {
    // Get product details
    let product = btn.closest(".product");
    let title = product.querySelector(".products-title").innerHTML;
    let price = product.querySelector(".price").innerHTML;
    let imgSrc = product.querySelector(".products-image").src;

    // Create new favorite box element
    let cartBoxElemnt = `
      <div class="fav-box">
        <img src="${imgSrc}" alt="" class="fav-img">
        <div class="fav-detail">
          <div class="fav-pro-title">${title}</div>
          <div class="fav-pro-price">${price}</div>
        </div>
        <i class='bx bxs-trash-alt fav-remove'></i>
      </div>
    `;
    let newNode = document.createElement("div");
    newNode.innerHTML = cartBoxElemnt;

    // Append new favorite box element to favorite icon content
    const cartContent = favcart.querySelector(".fav-content");
    cartContent.appendChild(newNode);

    // Add event listener to new "fav-remove" button
    let removeCartItem = newNode.querySelector(".fav-remove");
    removeCartItem.addEventListener("click", () => {
      newNode.remove();
    });
  });
});

    
   
// Add event listener to all "fav-remove" buttons
let removeCartButtons = document.querySelectorAll(".fav-remove");
removeCartButtons.forEach(btn => {
  btn.addEventListener("click", () => {
    // Remove parent element of "fav-remove" button (i.e. favorite box)
    btn.parentElement.remove();
  });
});

 /**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 $.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
 });


 createCartItem = function(id, event) {
   let actionUrl = '/carts';
   setTimeout(function(){
     if ($(event.target).is("button"))
        var quantity = $(event.target).closest('.product-btn').find('input').val();
     else
        var quantity = $('#quantity').find('input').val();

     $.ajax({
        method: "POST",
        url: actionUrl,
        data: { id, quantity }
      })
        .done(function(data) {
          //update cart's' number
          let r = /\d+/;
          let s = $('.cart-product-quantity').html();
          var quantity_origin = s.match(r);
          quantity_origin = parseInt(quantity_origin, 10);
          var add_quantity = parseInt(data.add_quantity, 10);
          var quantity_new = quantity_origin + add_quantity;
          $('.cart-product-quantity').html('<i class="fa fa-shopping-cart"></i>cart('+ quantity_new +')+');

          //insert a new product template and delete origin product html
          var source = $('#cart_product-template').html();
          var productTemplate = Handlebars.compile(source);

          if (data.pivot.quantity == 1)
            $('#cart-table').find(".no-item").remove();

          if (data.pivot.quantity > 1) {
            $('#cart-table').find('[data-id="'+ data.id + '"]').remove();
          }
          // console.log(data);
          data.quantity = data.pivot.quantity;
          data.amount = data.quantity * data.price;
          var productUI = productTemplate(data);
          $('#cart-table').append(productUI);


        })
        .fail(function() {
          alert('You need to log in!');
        })
      }, 10);
  };

  deleteCartItem = function(id) {
    let actionUrl = '/carts/' + id;
    $.ajax({
       method: "DELETE",
       url: actionUrl,
       data: { id }
     })
       .done(function() {
         location.reload();
       });
  };

  updateCartItem = function(id, event) {
    let actionUrl = '/carts/' + id;
    setTimeout(function(){
      let quantity = $(event.target).closest('.cart-action').find('input').val();
      $.ajax({
         method: "PUT",
         url: actionUrl,
         data: { id ,quantity }
       })
         .done(function() {
           location.reload();
         });
      }, 10);
  };

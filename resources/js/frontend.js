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


 createCartItem = function(id) {
   let actionUrl = '/carts';
   $.ajax({
      method: "POST",
      url: actionUrl,
      data: { id }
    })
      .done(function() {
        location.reload();
      });
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

  updateCartItem = function(id,event) {
    let actionUrl = '/carts/' + id;
    setTimeout(function(){
      let quantity = $(event.target).closest('.cart-action').find('input').val();
      console.log(quantity);
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

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

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

deleteProduct = function(id) {
  let result = confirm('Do you want to delete the post?');
  if (result) {
    let actionUrl = '/products/' + id;
    $.post(actionUrl, { _method:'delete' }).done(function(){
      location.href = '/products/admin';
    });
  }
};

deleteOrder = function(id) {
  let result = confirm('Do you want to delete the order?');
  if (result) {
    let actionUrl = '/orders/' + id;
    $.post(actionUrl, { _method:'delete' }).done(function(){
      location.href = '/orders/admin';
    });
  }
};

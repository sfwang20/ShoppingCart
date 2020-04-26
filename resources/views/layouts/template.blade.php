<script id="cart_product-template" type="text/x-handlebars-template">

  <tr data-id="@{{id}}">
    <td>
      <a href="/products/@{{ id }}">
        <img src="@{{ image }}" alt="" />
      </a>
    </td>
    <td><a href="/products/@{{ id }}"> @{{name}} </a>
    </td>
    <td class="quantity">X@{{quantity}}</td>
    <td>$@{{amount}}</td>
    <td>
      <a onclick="deleteCartItem( @{{ id }} )" class="close">
        <img src="/assets/img/product/close.png" alt="" />
      </a>
    </td>
  </tr>

</script>

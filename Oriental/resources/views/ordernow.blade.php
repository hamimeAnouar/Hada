@extends('master')
@section("content")
<div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                  <tr>
                    
                    <td>Amount</td>
                    <td>${{$total}}</td>
                  </tr>
                  <tr>
                    
                    <td>Tax</td>
                    <td>$ 0</td>
                  </tr>
                  <tr>
                    
                    <td>Delivery</td>
                    <td>$ 10</td>
                   
                  </tr>
                  <tr>
                    <td>Total</td>
                    <td>${{$total+10}}</td>
                  </tr> 
                </tbody>
              </table>
              <div>
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="form-group">
                      <textarea name="address" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter votre adresse" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Methode de paiement</label> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>En ligne paiement</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>EMI paiment</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>Paiement a la livraison</span> <br> <br>
                    </div>
                    <button type="submit" class="btn btn-primary">Order Now</button>
                  </form>
              </div>
    </div>
</div>
@endsection
<style>
  .custom-product {
    padding: 20px !important;
}

.custom-product table {
    width: 100% !important;
    max-width: 600px !important;
    margin: auto !important;
    border-collapse: collapse !important;
    margin-bottom: 20px !important;
}

.custom-product table, .custom-product th, .custom-product td {
    border: 1px solid #ddd !important;
}

.custom-product th, .custom-product td {
    padding: 12px !important;
    text-align: left !important;
}

.custom-product th {
    background-color: #f8f9fa !important;
}

.custom-product .form-group {
    margin-bottom: 20px !important;
}

.custom-product textarea {
    width: 100% !important;
    padding: 10px !important;
    box-sizing: border-box !important;
}

.custom-product label {
    display: block !important;
    margin-bottom: 10px !important;
}

.custom-product input[type="radio"] {
    margin-right: 5px !important;
}

.custom-product button {
    background-color: #007bff !important;
    color: #fff !important;
    padding: 10px 20px !important;
    border: none !important;
    border-radius: 5px !important;
    cursor: pointer !important;
}

.custom-product button:hover {
    background-color: #0056b3 !important;
}

</style>